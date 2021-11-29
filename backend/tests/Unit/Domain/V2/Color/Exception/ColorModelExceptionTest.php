<?php
declare(strict_types=1);

namespace App\Unit\Domain\V2\Color\Exception;

use App\Domain\V2\Color\Exception\ColorModelException;
use PHPUnit\Framework\TestCase;

final class ColorModelExceptionTest extends TestCase
{
    public function testGetMessage(): void
    {
        $exception = ColorModelException::createInvalidValues('RGB', 1.0, 2.0);

        self::assertEquals(
            '[RGB] model requires values between 0.0 to 1.0. Got 1, 2',
            $exception->getMessage()
        );
    }
}
