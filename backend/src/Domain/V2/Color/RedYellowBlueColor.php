<?php
declare(strict_types=1);

namespace App\Domain\V2\Color;

use App\Domain\V2\Converter;
use App\Domain\V2\Mixable;

final class RedYellowBlueColor implements Mixable
{
    public function __construct(
        private float $red,
        private float $yellow,
        private float $blue,
    )
    {
        if (!Validator::isWithinRange($red, $yellow, $blue)) {
            throw new \InvalidArgumentException();
        }
    }

    public function mix(Mixable $mixable, float $ratio): Mixable
    {
        if (!$mixable instanceof RedYellowBlueColor) {
            throw new \InvalidArgumentException();
        }

        return new self(
            ($this->red + $mixable->red),
            ($this->yellow + $mixable->yellow),
            ($this->blue + $mixable->blue),
        );
    }

    public function createPrintable(): RedGreenBlueColor
    {
        return Converter::toRedGreenBlue($this->red, $this->yellow, $this->blue);
    }
}
