<?php

declare(strict_types=1);

namespace App\Application\Handlers;

use App\Application\Actions\ThirdPartyCookieAction;
use App\Application\Actions\ValidateSessionAction;
use App\Domain\User\UserRepositoryInterface;
use Dflydev\FigCookies\FigResponseCookies;
use Dflydev\FigCookies\Modifier\SameSite;
use Dflydev\FigCookies\SetCookie;
use GrotonSchool\Slim\LTI\Handlers\LaunchHandlerInterface;
use Odan\Session\SessionInterface;
use Packback\Lti1p3\LtiConstants;
use Packback\Lti1p3\LtiMessageLaunch;
use Psr\Http\Message\ResponseInterface;
use Psr\Log\LoggerInterface;

class LaunchHandler implements LaunchHandlerInterface
{
    public const LAUNCH_ID = self::class . '::launchId';

    public function __construct(
        private SessionInterface $session,
        private UserRepositoryInterface $users,
        private LoggerInterface $logger
    ) {
    }

    public function handle(ResponseInterface $response, LtiMessageLaunch $launch): ResponseInterface
    {
        $this->session->set(LaunchHandler::LAUNCH_ID, $launch->getLaunchId());
        $data = $launch->getLaunchData();
        $consumerHostname = parse_url($data[LtiConstants::LAUNCH_PRESENTATION]['return_url'], PHP_URL_HOST);
        $userId =  $data[LtiConstants::CUSTOM]['user_id'];
        if ($this->users->findUser($consumerHostname, $userId) === null) {
            $user = $this->users->createUser($consumerHostname, $userId);
            $this->logger->info("Created user {$user->getId()} @ {$consumerHostname}");
        }
        return FigResponseCookies::set(
            $response,
            SetCookie::create(ThirdPartyCookieAction::COOKIE_NAME)
                ->withValue('true')
                ->withPath('/')
                ->withMaxAge(3600)
                ->withSecure()
                ->withSameSite(SameSite::none())
                ->withPartitioned()
        )
            ->withAddedHeader('Location', '/lti/third-party-cookies?' . ValidateSessionAction::PARAM_NAME . '=' . session_id());
    }
}
