<?php
declare(strict_types=1);

namespace App\Domain\V2;

final class Volume
{
    public function __construct(
        private float $value
    )
    {
        if ($value <= 0.0) {
            throw new \InvalidArgumentException('Paint volume must be positive');
        }
    }

    public function add(self $volume): self
    {
        return new self($this->value + $volume->value);
    }

    public function createRatio(self $volume): float
    {
        if ($this->value === $volume->value) {
            return 1.0;
        }

        if ($this->value > $volume->value) {
            return ($this->value + $volume->value) / ($this->value);
        }

        return ($this->value + $volume->value) / ($volume->value);
    }

    public function toFloat(): float
    {
        return $this->value;
    }
}
