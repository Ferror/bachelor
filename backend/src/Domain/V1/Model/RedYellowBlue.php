<?php
declare(strict_types=1);

namespace App\Domain\V1\Model;

final class RedYellowBlue
{
    public function __construct(
        private float $red,
        private float $yellow,
        private float $blue,
    )
    {
    }

    public function equals(self $color): bool
    {
        return $this->red === $color->red
            && $this->yellow === $color->yellow
            && $this->blue === $color->blue;
    }

    public function getRed(): float
    {
        return $this->red;
    }

    public function getYellow(): float
    {
        return $this->yellow;
    }

    public function getBlue(): float
    {
        return $this->blue;
    }
}
