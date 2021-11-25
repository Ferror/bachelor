<?php
declare(strict_types=1);

namespace App\Unit\Domain\V1;

use App\Domain\V1\Color;
use Generator;
use PHPUnit\Framework\TestCase;

final class ColorTest extends TestCase
{
    /**
     * @dataProvider mixes
     */
    public function testItIsMixesColors(Color $first, Color $second, Color $result, string $message): void
    {
        //Test A + B = C
        self::assertEquals($result->jsonSerialize(), $first->mix($second)->jsonSerialize(), $message);
        //Test B + A = C
        self::assertEquals($result->jsonSerialize(), $second->mix($first)->jsonSerialize(), $message);
    }

    public function mixes(): Generator
    {
        yield [
            new Color(0.0, 0.0, 0.0),
            new Color(0.0, 0.0, 0.0),
            new Color(0.0, 0.0, 0.0),
            'Black + Black = Black',
        ];
        yield [
            new Color(1.0, 1.0, 1.0),
            new Color(1.0, 1.0, 1.0),
            new Color(1.0, 1.0, 1.0),
            'White + White = White',
        ];
        yield [
            new Color(0.0, 0.0, 1.0),
            new Color(0.0, 0.0, 1.0),
            new Color(0.0, 0.0, 1.0),
            'Blue + Blue = Blue',
        ];

        yield [
            new Color(0.0, 0.0, 1.0),
            new Color(1.0, 1.0, 0.0),
            new Color(0.0, 1.0, 0.0),
            'Blue + Yellow = Green',
        ];
        yield [
            new Color(1.0, 0.0, 0.0),
            new Color(1.0, 1.0, 0.0),
            new Color(1.0, 0.5, 0.0),
            'Red + Yellow = Orange',
        ];
        yield [
            new Color(1.0, 0.0, 0.0),
            new Color(0.0, 0.0, 1.0),
            new Color(0.5, 0.0, 1.0),
            'Red + Blue = Purple',
        ];

        yield [
            new Color(0.6, 0.6, 0.6),
            new Color(0.3, 0.3, 0.3),
            new Color(0.45, 0.45, 0.45),
            'Grey + Dark Grey = Grey'
        ];
        yield [
            new Color(1.0, 1.0, 1.0),
            new Color(0.0, 0.0, 0.0),
            new Color(0.5, 0.5, 0.5),
            'White + Black = Grey',
        ];

        yield [
            new Color(1.0, 0.0, 0.0),
            new Color(1.0, 1.0, 1.0),
            new Color(1.0, 0.5, 0.5),
            'White + Red = Light Red aka Pink',
        ];
        yield [
            new Color(0.0, 0.0, 1.0),
            new Color(1.0, 1.0, 1.0),
            new Color(0.5, 0.5, 1.0),
            'White + Blue = Light Blue',
        ];
        yield [
            new Color(0.0, 0.0, 1.0),
            new Color(1.0, 1.0, 1.0),
            new Color(0.5, 0.5, 1.0),
            'White + Green = Light Green'
        ];

        yield [
            new Color(1.0, 0.0, 0.0),
            new Color(0.0, 0.0, 0.0),
            new Color(0.5, 0.0, 0.0),
            'Black + Red = Dark Red',
        ];
        yield [
            new Color(0.0, 0.0, 1.0),
            new Color(0.0, 0.0, 0.0),
            new Color(0.0, 0.0, 0.5),
            'Black + Blue = Dark Blue',
        ];
        yield [
            new Color(0.0, 1.0, 0.0),
            new Color(0.0, 0.0, 0.0),
            new Color(0.0, 0.5, 0.0),
            'Black + Green = Dark Green'
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
        yield [
            new Color(0.0, 0.0, 0.0),
            new Color(1.0, 1.0, 1.0),
            'Black',
        ];
        yield [
            new Color(1.0, 0.0, 0.0),
            new Color(1.0, 0.0, 0.0),
            'Red',
        ];
        yield [
            new Color(0.0, 1.0, 0.0),
            new Color(0.0, 1.0, 1.0),
            'Green',
        ];
        yield [
            new Color(0.0, 0.0, 1.0),
            new Color(0.0, 0.0, 1.0),
            'Blue',
        ];
        yield [
            new Color(1.0, 1.0, 0.0),
            new Color(0.0, 1.0, 0.0),
            'Yellow',
        ];
        yield [
            new Color(1.0, 0.0, 1.0),
            new Color(1.0, 0.0, 0.5),
            'Magenta',
        ];
        yield [
            new Color(0.0, 1.0, 1.0),
            new Color(0.0, 0.5, 1.0),
            'Cyan',
        ];
        yield [
            new Color(1.0, 0.5, 0.0),
            new Color(1.0, 1.0, 0.0),
            'Orange',
        ];
        yield [
            new Color(0.5, 0.0, 1.0),
            new Color(1.0, 0.0, 1.0),
            'Purple',
        ];
        yield [
            new Color(1.0, 1.0, 1.0),
            new Color(0.0, 0.0, 0.0),
            'White',
        ];
    }
}
