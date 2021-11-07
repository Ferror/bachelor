<?php
declare(strict_types=1);

namespace App\Domain\V2;

final class Volume
{
    public function __construct(
        private float $value
    )
    {
    }

    public function add(self $volume): self
    {
        return new self($this->value + $volume->value);
    }

    public function createRatio(self $volume): float
    {
        return $this->value / $volume->value;
    }

    public function toFloat(): float
    {
        return $this->value;
    }
}