<?php

namespace App\Application\Actions;

use App\Application\Handlers\LaunchHandler;
use Dflydev\FigCookies\FigRequestCookies;
use Dflydev\FigCookies\FigResponseCookies;
use Dflydev\FigCookies\SetCookie;
use Odan\Session\SessionInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Http\Response;
use Slim\Http\ServerRequest;
use Slim\Views\PhpRenderer;

class ThirdPartyCookieAction
{
    public const COOKIE_NAME = 'third-party-cookie';

    public function __construct(
        private SessionInterface $session,
        private PhpRenderer $views
    ) {
    }

    public function __invoke(ServerRequest $request, Response $response): ResponseInterface
    {
        $cookie = FigRequestCookies::get($request, self::COOKIE_NAME);
        if ($cookie->getValue()) {
            return $response->withAddedHeader(
                'Location',
                '/lti/validate-session?' . ValidateSessionAction::PARAM_NAME . '=' . $request->getQueryParam(ValidateSessionAction::PARAM_NAME)
            );
        } else {
            return $this->views->render($response, 'firstPartyLaunchRequest.php');
        }
    }
}
