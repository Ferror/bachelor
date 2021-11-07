<?php
declare(strict_types=1);

namespace App\Domain\V2\Color;

use App\Domain\V2\Converter;
use App\Domain\V2\Mixable;
use App\Domain\V2\Printable;

final class RedGreenBlueColor implements Printable
{
    public function __construct(
        private float $red,
        private float $green,
        private float $blue,
    )
    {
        if (!$this->isInTheRange($red) || !$this->isInTheRange($green) || !$this->isInTheRange($blue)) {
            throw new \InvalidArgumentException();
        }
    }

    private function isInTheRange(float $number): bool
    {
        return $number <= 255.0 && $number >= 0.0;
    }

    public function createMixable(): Mixable
    {
        return Converter::toRedYellowBlue($this->red, $this->green, $this->blue);
    }

    public function jsonSerialize(): array
    {
        return [
            'r' => $this->red,
            'g' => $this->green,
            'b' => $this->blue,
        ];
    }
}
