<?php
declare(strict_types=1);

namespace App\Unit\Domain\V2;

use App\Domain\V2\Volume;
use Generator;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

final class VolumeTest extends TestCase
{
    public function testItIsPositiveValue(): void
    {
        $this->expectException(InvalidArgumentException::class);
        new Volume(0.0);
    }

    /**
     * @dataProvider volumes
     */
    public function testCreateRatio(Volume $first, Volume $second, Volume $result): void
    {
        self::assertEquals($result->toFloat(), $first->createRatio($second));
        self::assertEquals($result->toFloat(), $second->createRatio($first));
    }

    public function volumes(): Generator
    {
        yield [
            new Volume(2.0),
            new Volume(1.0),
            new Volume(1.5),
        ];
        yield [
            new Volume(2.0),
            new Volume(2.0),
            new Volume(1.0),
        ];
        yield [
            new Volume(4.0),
            new Volume(2.0),
            new Volume(1.5),
        ];
        yield [
            new Volume(1.0),
            new Volume(5.0),
            new Volume(1.2),
        ];
    }
}
