<?php
declare(strict_types=1);

namespace App\Domain\V2\Color;

use App\Domain\V2\Converter;
use App\Domain\V2\Mixable;
use JsonSerializable;

final class RedYellowBlueColor implements Mixable, JsonSerializable
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

    public function equals(self $color): bool
    {
        return $this->red === $color->red
            && $this->yellow === $color->yellow
            && $this->blue === $color->blue;
    }

    public function mix(Mixable $mixable, float $ratio): Mixable
    {
        if (!$mixable instanceof RedYellowBlueColor) {
            throw new \InvalidArgumentException('You can mix only RYB together');
        }

        if ($this->equals($mixable)) {
            return $this;
        }

        //try normalization
        $r = $this->red + $mixable->red;
        $y = $this->yellow + $mixable->yellow;
        $b = $this->blue + $mixable->blue;

        $n = max($r, $y, $b);

        return new self(
            $r / $n,
            $y / $n,
            $b / $n,
        );
    }

    public function createPrintable(): RedGreenBlueColor
    {
        return Converter::toRedGreenBlue($this);
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

    public function jsonSerialize(): array
    {
        return [
            'model' => [
                'r' => $this->red,
                'y' => $this->yellow,
                'b' => $this->blue,
            ],
        ];
    }
}
