<?php
declare(strict_types=1);

namespace App;

final class Environment
{
    private const DEVELOPMENT = 'dev';
    private const PRODUCTION = 'prod';
    private const TESTING = 'test';

    private string $applicationEnvironment;

    public function __construct(string $applicationEnvironment)
    {
        $this->applicationEnvironment = $applicationEnvironment;
    }

    public function isTesting(): bool
    {
        return self::TESTING === $this->applicationEnvironment;
    }

    public function isDevelopment(): bool
    {
        return self::DEVELOPMENT === $this->applicationEnvironment;
    }

    public function isProduction(): bool
    {
        return self::PRODUCTION === $this->applicationEnvironment;
    }
}
