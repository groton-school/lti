<?php

namespace App\Application\Actions;

use App\Application\Handlers\LaunchHandler;
use Dflydev\FigCookies\FigRequestCookies;
use Odan\Session\SessionInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Http\Response;
use Slim\Http\ServerRequest;
use Slim\Views\PhpRenderer;

class ThirdPartyCookieAction
{
    public function __construct(
        private SessionInterface $session,
        private PhpRenderer $views
    ) {
    }

    public function __invoke(ServerRequest $request, Response $response): ResponseInterface
    {
        $cookie = FigRequestCookies::get($request, LaunchHandler::THIRD_PARTY_COOKIE);
        if ($cookie->getValue()) {
            if (session_id() === $request->getParam('session')) {
                return  $response->withAddedHeader('Location', '/');
            } else {
                return $this->views->render($response, 'error.php', [
                    'error' => '409: Conflict',
                    'message' => 'There is a conflict between the session information in your browser and on the server.'
                ])->withStatus(409);
            }
        } else {
            return $this->views->render($response, 'error.php', [
                'error' => '400: Bad Request',
                'message' => 'Third party cookies are disabled in your browser.'
            ])->withStatus(400);
        }
    }
}
