<?php
declare(strict_types=1);

namespace App\Unit\Domain;

use App\Domain\Color;
use Generator;
use PHPUnit\Framework\TestCase;

final class ColorTest extends TestCase
{
    /**
     * Blue + Yellow = Green
     */
    public function testItIsGreen(): void
    {
        $color = new Color(0.0, 0.0, 1.0);
        $result = $color->mix(new Color(1.0, 1.0, 0.0));

        self::assertEquals(
            [
                'r' => 0.0,
                'g' => 1.0,
                'b' => 0.0,
            ],
            $result->jsonSerialize(),
        );
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
