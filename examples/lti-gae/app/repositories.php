<?php

declare(strict_types=1);

use App\Domain\LTI\LaunchMessageRepositoryInterface;
use App\Domain\User\UserRepositoryInterface;
use App\Infrastructure\Persistence\FirestoreUserRepository;
use App\Infrastructure\Session\SessionLaunchMessageRepository;
use DI\ContainerBuilder;

return function (ContainerBuilder $containerBuilder) {
    $containerBuilder->addDefinitions([
        LaunchMessageRepositoryInterface::class => DI\autowire(SessionLaunchMessageRepository::class),
        UserRepositoryInterface::class => DI\autowire(FirestoreUserRepository::class),
    ]);
};
