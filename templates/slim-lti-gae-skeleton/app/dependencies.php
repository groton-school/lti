<?php

declare(strict_types=1);

use App\Application\Settings\SettingsInterface;
use DI\ContainerBuilder;
use GrotonSchool\Slim\GAE;
use GrotonSchool\Slim\LTI;
use GrotonSchool\Slim\LTI\Infrastructure;

return function (ContainerBuilder $containerBuilder) {
    $containerBuilder->addDefinitions([
        GAE\SettingsInterface::class => DI\get(SettingsInterface::class),
        Infrastructure\GAE\SettingsInterface::class => DI\get(SettingsInterface::class)
    ]);
    GAE\Dependencies::addDefinitions($containerBuilder);
    Infrastructure\GAE\Dependencies::addDefinitions($containerBuilder);
    LTI\Dependencies::addDefinitions($containerBuilder);
};
