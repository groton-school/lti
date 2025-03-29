<?php

declare(strict_types=1);

namespace App\Application\Settings;

use GrotonSchool\Slim\LTI\Application\SettingsInterface;
use GrotonSchool\Slim\GAE;
use GrotonSchool\Slim\LTI\Infrastructure;

class Settings implements SettingsInterface, GAE\SettingsInterface, Infrastructure\GAE\SettingsInterface
{
    public const TOOL_NAME = 'TOOL_NAME';
    public const SCOPES = 'SCOPES';
    public const PROJECT_ID = 'PROJECT_ID';
    public const PROJECT_URL = 'PROJECT_URL';
    public const DURATION = 'DURATION';

    private array $settings;

    public function __construct(array $settings)
    {
        $this->settings = $settings;
    }

    public function get(string $key)
    {
        return $this->settings[$key];
    }

    public function getProjectId(): string
    {
        return $this->settings[self::PROJECT_ID];
    }

    public function getName(): string
    {
        return $this->settings[self::TOOL_NAME];
    }

    public function getUrl(): string
    {
        return $this->settings[self::PROJECT_URL];
    }

    public function getScopes(): array
    {
        return $this->settings[self::SCOPES];
    }

    public function getDuration(): int
    {
        return $this->settings[self::DURATION];
    }
}
