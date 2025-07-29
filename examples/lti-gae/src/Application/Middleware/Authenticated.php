<?php

declare(strict_types=1);

namespace App\Application\Middleware;

use App\Application\Handlers\LaunchHandler;
use App\Domain\User\UserRepositoryInterface;
use Odan\Session\SessionInterface;
use Packback\Lti1p3\Interfaces\ICache;
use Packback\Lti1p3\Interfaces\ICookie;
use Packback\Lti1p3\Interfaces\IDatabase;
use Packback\Lti1p3\Interfaces\ILtiServiceConnector;
use Packback\Lti1p3\LtiConstants;
use Packback\Lti1p3\LtiMessageLaunch;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Slim\Psr7\Response;
use Slim\Views\PhpRenderer;

class Authenticated implements MiddlewareInterface
{
    public const USER = self::class . '::user';
    public const LAUNCH_MESSAGE = self::class . '::launchMessage';

    public function __construct(
        private ICache $cache,
        private IDatabase $database,
        private ICookie $cookie,
        private ILtiServiceConnector $serviceConnector,
        private SessionInterface $session,
        private UserRepositoryInterface $users,
        private PhpRenderer $views
    ) {
    }

    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        $launch = LtiMessageLaunch::fromCache(
            $this->session->get(LaunchHandler::LAUNCH_ID),
            $this->database,
            $this->cache,
            $this->cookie,
            $this->serviceConnector
        )->getLaunchData();
        $user = $this->users->findUser(
            parse_url($launch[LtiConstants::LAUNCH_PRESENTATION]['return_url'], PHP_URL_HOST),
            $launch[LtiConstants::CUSTOM]['user_id']
        );
        if ($user !== null) {
            return $handler->handle($request
                ->withAttribute(Authenticated::LAUNCH_MESSAGE, $launch)
                ->withAttribute(Authenticated::USER, $user));
        }
        return $this->views->render(new Response(), 'error.php', [
            'error' => '401: Unauthorized',
            'message' => 'You are not authorized to access this application.'
        ])->withStatus(401);
    }
}
