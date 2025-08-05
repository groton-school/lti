<?php

namespace App\Application\Actions;

use Psr\Http\Message\ResponseInterface;
use Slim\Http\Response;
use Slim\Http\ServerRequest;
use Slim\Views\PhpRenderer;

class RequestStorageAccessAction
{
    public function __construct(private PhpRenderer $views)
    {
    }

    public function __invoke(ServerRequest $request, Response $response): ResponseInterface
    {
        return $this->views->render($response, 'requestStorageAccess.php');
    }
}
