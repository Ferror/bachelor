<?php
declare(strict_types=1);

namespace App\Domain\V2\Color;

use App\Domain\V2\Color\Exception\ColorModelException;
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
            throw ColorModelException::createInvalidValues('RYB', $red, $yellow, $blue);
        }
    }

    public function equals(self $color): bool
    {
        return $this->red === $color->red
            && $this->yellow === $color->yellow
            && $this->blue === $color->blue;
    }

    public function isLightening(): bool
    {
        //RGB white is 255, 255, 255
        return $this->red === $this->yellow
            && $this->yellow === $this->blue
            && $this->red >= 0.5;
    }

    public function isDarkening(): bool
    {
        //RGB white is 255, 255, 255
        return $this->red === $this->yellow
            && $this->yellow === $this->blue
            && $this->red < 0.5;
    }

    public function mix(Mixable $mixable, float $ratio): Mixable
    {
        if (!$mixable instanceof RedYellowBlueColor) {
            throw new \InvalidArgumentException('You can mix only RYB together');
        }

        if ($this->equals($mixable)) {
            return $this;
        }

        var_dump($ratio);
        //try normalization
        $r = $this->red + $mixable->red;
        $y = $this->yellow + $mixable->yellow;
        $b = $this->blue + $mixable->blue;

//        if ($ratio === 1.0) {
//            $r = $this->red + $mixable->red;
//            $y = $this->yellow + $mixable->yellow;
//            $b = $this->blue + $mixable->blue;
//        } elseif ($ratio < 1.0) {
//            $r = $this->red + ($ratio * $mixable->red);
//            $y = $this->yellow + ($ratio * $mixable->yellow);
//            $b = $this->blue + ($ratio * $mixable->blue);
//        } else {
//            $r = ($ratio * $this->red) + $mixable->red;
//            $y = ($ratio * $this->yellow) + $mixable->yellow;
//            $b = ($ratio * $this->blue) + $mixable->blue;
//        }

        $n = max($r, $y, $b);

        if ($this->isDarkening() || $mixable->isDarkening() || $this->isLightening() || $mixable->isLightening()) {

//            var_dump((($r) / (2)) / $ratio);
//            var_dump((($r) / (2)) * $ratio);
            $mix = new self(
                ((($r) / (2)) * $ratio) / $n,
                ((($y) / (2)) * $ratio) / $n,
                ((($b) / (2)) * $ratio) / $n,
            );
        } else {
            $mix = new self(
                $r / $n,
                $y / $n,
                $b / $n,
            );
        }

        return $mix;
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
