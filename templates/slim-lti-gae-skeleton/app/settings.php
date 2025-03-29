<?php

declare(strict_types=1);

use App\Application\Settings\Settings;
use App\Application\Settings\SettingsInterface;
use DI\ContainerBuilder;
use Dotenv\Dotenv;

Dotenv::createImmutable(__DIR__ . '/..')->safeLoad();

return function (ContainerBuilder $containerBuilder) {
    // Global Settings Object
    $containerBuilder->addDefinitions([
        SettingsInterface::class => function () {
            return new Settings([
                'displayErrorDetails' => true, // TODO **DEPLOY** Should be set to false in production
                'logError' => true,
                'logErrorDetails' => true,
                Settings::TOOL_NAME => 'LTI Test',
                Settings::SCOPES => ['https://purl.imsglobal.org/spec/lti-nrps/scope/contextmembership.readonly'],
                Settings::PROJECT_ID => $_ENV['PROJECT'],
                Settings::PROJECT_URL => $_ENV['PROJECT_URL'],
                Settings::DURATION => 3600 // seconds
            ]);
        },
    ]);
};
