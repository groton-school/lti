<?php

namespace App\Application\Actions;

use App\Application\Middleware\PartitionedSession;
use Dflydev\FigCookies\FigResponseCookies;
use Psr\Http\Message\ResponseInterface;
use Slim\Http\Response;
use Slim\Http\ServerRequest;
use Slim\Views\PhpRenderer;

class ValidateSessionAction
{
    public const PARAM_NAME = 'session';

    public function __construct(private PhpRenderer $views)
    {
    }

    public function __invoke(ServerRequest $request, Response $response): ResponseInterface
    {
        $sessionId = $request->getQueryParam(self::PARAM_NAME);
        if ($sessionId) {
            $response = $response->withAddedHeader('Location', '/');
            if ($sessionId !== session_id()) {
                $response = FigResponseCookies::set(
                    $response,
                    PartitionedSession::cookie($sessionId)
                );
            }
        } else {
            $response = $this->views->render($response, 'error.php', [
                'error' => 'Bad Request',
                'message' => 'Unable to validate session.'
            ])->withStatus(400);
        }
        return $response;
    }
}
