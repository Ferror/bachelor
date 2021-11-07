<?php
declare(strict_types=1);

namespace App\Unit\Domain;

use App\Domain\ColorV1;
use Generator;
use PHPUnit\Framework\TestCase;

final class ColorTest extends TestCase
{
    /**
     * @dataProvider mixes
     */
    public function testItIsMixesColors(ColorV1 $first, ColorV1 $second, ColorV1 $result): void
    {
        self::assertEquals($first->mix($second)->jsonSerialize(), $result->jsonSerialize());
    }

    public function mixes(): Generator
    {
        //Black + Black = Black
        yield [
            new ColorV1(0.0, 0.0, 0.0),
            new ColorV1(0.0, 0.0, 0.0),
            new ColorV1(0.0, 0.0, 0.0),
        ];
        //White + White = White
        yield [
            new ColorV1(0.0, 0.0, 0.0),
            new ColorV1(0.0, 0.0, 0.0),
            new ColorV1(0.0, 0.0, 0.0),
        ];
        //Blue + Blue = Blue
        yield [
            new ColorV1(0.0, 0.0, 1.0),
            new ColorV1(0.0, 0.0, 1.0),
            new ColorV1(0.0, 0.0, 1.0),
        ];
        //Blue + Yellow = Green
        yield [
            new ColorV1(0.0, 0.0, 1.0),
            new ColorV1(1.0, 1.0, 0.0),
            new ColorV1(0.0, 1.0, 0.0),
        ];
        //Red + Yellow = Orange
        yield [
            new ColorV1(1.0, 0.0, 0.0),
            new ColorV1(1.0, 1.0, 0.0),
            new ColorV1(1.0, 0.5, 0.0),
        ];
        //Red + Blue = Purple
        yield [
            new ColorV1(1.0, 0.0, 0.0),
            new ColorV1(0.0, 0.0, 1.0),
            new ColorV1(0.5, 0.0, 1.0),
        ];
    }

    /**
     * @dataProvider colors
     */
    public function testConvertToRYB(ColorV1 $rgb, ColorV1 $ryb, string $message): void
    {
        self::assertEquals($ryb->jsonSerialize(), ColorV1::convertToRyb($rgb)->jsonSerialize(), $message);
    }

    /**
     * @dataProvider colors
     */
    public function testConvertToRGBV2(ColorV1 $rgb, ColorV1 $ryb, string $message): void
    {
        self::assertEquals($rgb->jsonSerialize(), ColorV1::convertToRgbV2($ryb)->jsonSerialize(), $message);
    }

    public function colors(): Generator
    {
        //Black
        yield [
            new ColorV1(0.0, 0.0, 0.0),
            new ColorV1(1.0, 1.0, 1.0),
            'Black',
        ];
        //Red
        yield [
            new ColorV1(1.0, 0.0, 0.0),
            new ColorV1(1.0, 0.0, 0.0),
            'Red',
        ];
        //Green
        yield [
            new ColorV1(0.0, 1.0, 0.0),
            new ColorV1(0.0, 1.0, 1.0),
            'Green',
        ];
        //Blue
        yield [
            new ColorV1(0.0, 0.0, 1.0),
            new ColorV1(0.0, 0.0, 1.0),
            'Blue',
        ];
        //Yellow
        yield [
            new ColorV1(1.0, 1.0, 0.0),
            new ColorV1(0.0, 1.0, 0.0),
            'Yellow',
        ];
        //Magenta
        yield [
            new ColorV1(1.0, 0.0, 1.0),
            new ColorV1(1.0, 0.0, 0.5),
            'Magenta',
        ];
        //Cyan
        yield [
            new ColorV1(0.0, 1.0, 1.0),
            new ColorV1(0.0, 0.5, 1.0),
            'Cyan',
        ];
        //Orange
        yield [
            new ColorV1(1.0, 0.5, 0.0),
            new ColorV1(1.0, 1.0, 0.0),
            'Orange',
        ];
        //Purple
        yield [
            new ColorV1(0.5, 0.0, 1.0),
            new ColorV1(1.0, 0.0, 1.0),
            'Purple',
        ];
        //White
        yield [
            new ColorV1(1.0, 1.0, 1.0),
            new ColorV1(0.0, 0.0, 0.0),
            'White',
        ];
    }
}
