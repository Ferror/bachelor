<?php
declare(strict_types=1);

namespace App\Unit\Domain\V2;

use App\Domain\V2\Volume;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

final class VolumeTest extends TestCase
{
    public function testItIsPositiveValue(): void
    {
        $this->expectException(InvalidArgumentException::class);
        new Volume(0.0);
    }
}
