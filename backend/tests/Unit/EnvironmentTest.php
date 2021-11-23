<?php
declare(strict_types=1);

namespace App\Unit;

use App\Environment;
use PHPUnit\Framework\TestCase;

final class EnvironmentTest extends TestCase
{
    public function testItIsProduction(): void
    {
        $environment = new Environment('prod');
        self::assertTrue($environment->isProduction());
        self::assertFalse($environment->isTesting());
        self::assertFalse($environment->isDevelopment());
    }

    public function testItIsDevelopment(): void
    {
        $environment = new Environment('dev');
        self::assertTrue($environment->isDevelopment());
        self::assertFalse($environment->isTesting());
        self::assertFalse($environment->isProduction());
    }

    public function testItIsTesting(): void
    {
        $environment = new Environment('test');
        self::assertTrue($environment->isTesting());
        self::assertFalse($environment->isDevelopment());
        self::assertFalse($environment->isProduction());
    }

    public function testItIsNothing(): void
    {
        $environment = new Environment('not-really-matter-value');
        self::assertFalse($environment->isTesting());
        self::assertFalse($environment->isDevelopment());
        self::assertFalse($environment->isProduction());
    }
}
