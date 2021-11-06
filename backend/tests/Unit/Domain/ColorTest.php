<?php
declare(strict_types=1);

namespace App\Unit\Domain;

use App\Domain\Color;
use Generator;
use PHPUnit\Framework\TestCase;

final class ColorTest extends TestCase
{
    /**
     * @dataProvider mixes
     */
    public function testItIsMixesColors(Color $first, Color $second, Color $result): void
    {
        self::assertEquals($first->mix($second)->jsonSerialize(), $result->jsonSerialize());
    }

    public function mixes(): Generator
    {
        //Black + Black = Black
        yield [
            new Color(0.0, 0.0, 0.0),
            new Color(0.0, 0.0, 0.0),
            new Color(0.0, 0.0, 0.0),
        ];
        //White + White = White
        yield [
            new Color(0.0, 0.0, 0.0),
            new Color(0.0, 0.0, 0.0),
            new Color(0.0, 0.0, 0.0),
        ];
        //Blue + Blue = Blue
        yield [
            new Color(0.0, 0.0, 1.0),
            new Color(0.0, 0.0, 1.0),
            new Color(0.0, 0.0, 1.0),
        ];
        //Blue + Yellow = Green
        yield [
            new Color(0.0, 0.0, 1.0),
            new Color(1.0, 1.0, 0.0),
            new Color(0.0, 1.0, 0.0),
        ];
        //Red + Yellow = Orange
        yield [
            new Color(1.0, 0.0, 0.0),
            new Color(1.0, 1.0, 0.0),
            new Color(1.0, 0.5, 0.0),
        ];
        //Red + Blue = Purple
        yield [
            new Color(1.0, 0.0, 0.0),
            new Color(0.0, 0.0, 1.0),
            new Color(0.5, 0.0, 1.0),
        ];
    }

    /**
     * @dataProvider colors
     */
    public function testConvertToRYB(Color $rgb, Color $ryb, string $message): void
    {
        self::assertEquals($ryb->jsonSerialize(), Color::convertToRyb($rgb)->jsonSerialize(), $message);
    }

    /**
     * @dataProvider colors
     */
    public function testConvertToRGBV2(Color $rgb, Color $ryb, string $message): void
    {
        self::assertEquals($rgb->jsonSerialize(), Color::convertToRgbV2($ryb)->jsonSerialize(), $message);
    }

    public function colors(): Generator
    {
        //Black
        yield [
            new Color(0.0, 0.0, 0.0),
            new Color(1.0, 1.0, 1.0),
            'Black',
        ];
        //Red
        yield [
            new Color(1.0, 0.0, 0.0),
            new Color(1.0, 0.0, 0.0),
            'Red',
        ];
        //Green
        yield [
            new Color(0.0, 1.0, 0.0),
            new Color(0.0, 1.0, 1.0),
            'Green',
        ];
        //Blue
        yield [
            new Color(0.0, 0.0, 1.0),
            new Color(0.0, 0.0, 1.0),
            'Blue',
        ];
        //Yellow
        yield [
            new Color(1.0, 1.0, 0.0),
            new Color(0.0, 1.0, 0.0),
            'Yellow',
        ];
        //Magenta
        yield [
            new Color(1.0, 0.0, 1.0),
            new Color(1.0, 0.0, 0.5),
            'Magenta',
        ];
        //Cyan
        yield [
            new Color(0.0, 1.0, 1.0),
            new Color(0.0, 0.5, 1.0),
            'Cyan',
        ];
        //Orange
        yield [
            new Color(1.0, 0.5, 0.0),
            new Color(1.0, 1.0, 0.0),
            'Orange',
        ];
        //Purple
        yield [
            new Color(0.5, 0.0, 1.0),
            new Color(1.0, 0.0, 1.0),
            'Purple',
        ];
        //White
        yield [
            new Color(1.0, 1.0, 1.0),
            new Color(0.0, 0.0, 0.0),
            'White',
        ];
    }
}
