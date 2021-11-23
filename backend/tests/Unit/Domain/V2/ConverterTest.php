<?php
declare(strict_types=1);

namespace App\Unit\Domain\V2;

use App\Domain\V2\Color\RedGreenBlueColor;
use App\Domain\V2\Color\RedYellowBlueColor;
use App\Domain\V2\Converter;
use Generator;
use PHPUnit\Framework\TestCase;

final class ConverterTest extends TestCase
{
    /**
     * @dataProvider colors
     */
    public function testConvertToRYB(RedGreenBlueColor $rgb, RedYellowBlueColor $ryb, string $message): void
    {
        self::assertEquals($ryb->jsonSerialize(), Converter::toRedYellowBlue($rgb)->jsonSerialize(), $message);
    }

    /**
     * @dataProvider colors
     */
    public function testConvertToRGB(RedGreenBlueColor $rgb, RedYellowBlueColor $ryb, string $message): void
    {
        self::assertEquals($rgb->jsonSerialize(), Converter::toRedGreenBlue($ryb)->jsonSerialize(), $message);
    }

    public function colors(): Generator
    {
        yield [
            new RedGreenBlueColor(0.0, 0.0, 0.0),
            new RedYellowBlueColor(1.0, 1.0, 1.0),
            'Black',
        ];
        yield [
            new RedGreenBlueColor(1.0, 0.0, 0.0),
            new RedYellowBlueColor(1.0, 0.0, 0.0),
            'Red',
        ];
        yield [
            new RedGreenBlueColor(0.0, 1.0, 0.0),
            new RedYellowBlueColor(0.0, 1.0, 1.0),
            'Green',
        ];
        yield [
            new RedGreenBlueColor(0.0, 0.0, 1.0),
            new RedYellowBlueColor(0.0, 0.0, 1.0),
            'Blue',
        ];
        yield [
            new RedGreenBlueColor(1.0, 1.0, 0.0),
            new RedYellowBlueColor(0.0, 1.0, 0.0),
            'Yellow',
        ];
        yield [
            new RedGreenBlueColor(1.0, 0.0, 1.0),
            new RedYellowBlueColor(1.0, 0.0, 0.5),
            'Magenta',
        ];
        yield [
            new RedGreenBlueColor(0.0, 1.0, 1.0),
            new RedYellowBlueColor(0.0, 0.5, 1.0),
            'Cyan',
        ];
        yield [
            new RedGreenBlueColor(1.0, 0.5, 0.0),
            new RedYellowBlueColor(1.0, 1.0, 0.0),
            'Orange',
        ];
        yield [
            new RedGreenBlueColor(0.5, 0.0, 1.0),
            new RedYellowBlueColor(1.0, 0.0, 1.0),
            'Purple',
        ];
        yield [
            new RedGreenBlueColor(1.0, 1.0, 1.0),
            new RedYellowBlueColor(0.0, 0.0, 0.0),
            'White',
        ];
    }
}
