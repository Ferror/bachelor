<?php
declare(strict_types=1);

namespace App\Unit\Domain\V2\Color;

use App\Domain\V2\Color\Validator;
use PHPUnit\Framework\TestCase;

final class ValidatorTest extends TestCase
{
    public function testItValidates(): void
    {
        self::assertTrue(Validator::isWithinRange(1.0), '1.0');
        self::assertTrue(Validator::isWithinRange(0.5), '0.5');
        self::assertTrue(Validator::isWithinRange(0.0), '0.0');

        self::assertFalse(Validator::isWithinRange(1.1), '1.1');
        self::assertFalse(Validator::isWithinRange(-0.1), '-0.1');
    }
}
