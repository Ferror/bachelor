<?php
declare(strict_types=1);

namespace App\Domain\V1\Model;

final class RedGreenBlue
{
    public function __construct(
        private float $red,
        private float $green,
        private float $blue,
    )
    {
    }

    public function equals(self $color): bool
    {
        return $this->red === $color->red
            && $this->green === $color->green
            && $this->blue === $color->blue;
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
}
