<?php

namespace App\Application\Actions;

use Dflydev\FigCookies\FigResponseCookies;
use Dflydev\FigCookies\Modifier\SameSite;
use Dflydev\FigCookies\SetCookie;
use Psr\Http\Message\ResponseInterface;
use Slim\Http\Response;
use Slim\Http\ServerRequest;
use Slim\Views\PhpRenderer;

class FirstPartyLaunchAction
{
    public function __construct(private PhpRenderer $views)
    {
    }

    public function __invoke(ServerRequest $request, Response $response): ResponseInterface
    {
        return FigResponseCookies::set(
            $this->views->render($response, 'firstPartyLaunch.php'),
            SetCookie::create(ThirdPartyCookieAction::COOKIE_NAME)
                ->withValue('true')
                ->withPath('/')
                ->withSecure()
                ->withSameSite(SameSite::none())
        );
    }
}
