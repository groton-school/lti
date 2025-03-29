<?php

declare(strict_types=1);

namespace GrotonSchool\Slim\LTI\Infrastructure;

use Delight\Cookie\Cookie as DelightCookie;
use Packback\Lti1p3\Interfaces\ICookie;

/**
 * @see https://github.com/packbackbooks/lti-1-3-php-library/wiki/Laravel-Implementation-Guide#cookie Working from Packback's wiki example
 */
class Cookie implements ICookie
{
    public function getCookie(string $name): ?string
    {
        return $_COOKIE[$name];
    }

    public function setCookie(
        string $name,
        string $value,
        int $exp = 3600,
        array $options = []
    ): void {
        /** @see https://stackoverflow.com/a/67688369/294171 */
        (new DelightCookie($name))
            ->setValue($value)
            ->setDomain($_SERVER['HTTP_HOST'])
            ->setPath('/')
            ->setMaxAge($exp)
            ->setHttpOnly(true)
            ->setSameSiteRestriction('None')
            ->setSecureOnly(true)
            ->save();
    }
}
