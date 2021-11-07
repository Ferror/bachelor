<?php
declare(strict_types=1);

namespace App\Domain\V2\Color;

use App\Domain\V2\Converter;
use App\Domain\V2\Mixable;
use App\Domain\V2\Printable;
use JsonSerializable;

final class RedYellowBlueColor implements Mixable, JsonSerializable
{
    public function __construct(
        private float $red,
        private float $yellow,
        private float $blue,
    )
    {
    }

    public function mix(Mixable $mixable, float $ratio): Mixable
    {
        if (!$mixable instanceof RedYellowBlueColor) {
            throw new \InvalidArgumentException();
        }

        return new self(
            ($this->red + $mixable->red) / $ratio,
            ($this->yellow + $mixable->yellow) / $ratio,
            ($this->blue + $mixable->blue) / $ratio,
        );
    }

    public function createPrintable(): Printable
    {
        return Converter::toRedGreenBlue($this->red, $this->yellow, $this->blue);
    }

    public function jsonSerialize(): array
    {
        return [
            'r' => $this->red,
            'y' => $this->yellow,
            'b' => $this->blue,
        ];
    }
}
