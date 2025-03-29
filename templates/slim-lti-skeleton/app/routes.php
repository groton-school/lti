<?php

declare(strict_types=1);

use GrotonSchool\Slim\GAE;
use GrotonSchool\Slim\LTI;
use Slim\App;

return function (App $app) {
    /*    $app->options('/{routes:.*}', function (
        Request $request,
        Response $response
    ) {
        // CORS Pre-Flight OPTIONS Request Handler
        return $response;
    }); */

    GAE\Routes::register($app);
    LTI\Routes::register($app);
};
