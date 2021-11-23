<?php
declare(strict_types=1);

namespace App\Domain\V2\Color;

use App\Domain\V2\Converter;
use App\Domain\V2\Mixable;
use InvalidArgumentException;

final class RedGreenBlueColor
{
    public function __construct(
        private float $red,
        private float $green,
        private float $blue,
    )
    {
        if (!Validator::isWithinRange($red, $green, $blue)) {
            throw new InvalidArgumentException('RGB value out of the range');
        }
    }

    public function createMixable(): Mixable
    {
        return Converter::toRedYellowBlue($this);
    }

    public function getRed(): float
    {
        return $this->red;
    }

    public function getGreen(): float
    {
        return $this->green;
    }

    public function getBlue(): float
    {
        return $this->blue;
    }

    public function jsonSerialize(): array
    {
        return [
            'model' => [
                'r' => $this->red,
                'g' => $this->green,
                'b' => $this->blue,
            ],
        ];
    }
}
