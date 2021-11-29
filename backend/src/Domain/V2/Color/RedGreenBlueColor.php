<?php
declare(strict_types=1);

namespace App\Domain\V2\Color;

use App\Domain\V2\Color\Exception\ColorModelException;
use App\Domain\V2\Converter;
use App\Domain\V2\Mixable;

final class RedGreenBlueColor
{
    public function __construct(
        private float $red,
        private float $green,
        private float $blue,
    )
    {
        if (!Validator::isWithinRange($red, $green, $blue)) {
            throw ColorModelException::createInvalidValues('RGB', $red, $green, $blue);
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
