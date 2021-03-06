<?php
declare(strict_types=1);

namespace App\Domain\V1;

use JsonSerializable;
use function max;
use function min;
use function round;

final class Color implements JsonSerializable
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

    public function isLightening(): bool
    {
        //RGB white is 255, 255, 255
        return $this->red === $this->green
            && $this->green === $this->blue
            && $this->red >= 0.5;
    }

    public function isDarkening(): bool
    {
        //RGB white is 255, 255, 255
        return $this->red === $this->green
            && $this->green === $this->blue
            && $this->red < 0.5;
    }

    public function mix(self $color): self
    {
        // Mix of two same colors is the same color
        if ($this->equals($color)) {
            return $this;
        }

        $first = self::convertToRyb($this);
        $second = self::convertToRyb($color);

        //try normalization
        $r = $first->red + $second->red;
        $g = $first->green + $second->green;
        $b = $first->blue + $second->blue;

        $n = max($r, $g, $b);

        if ($this->isDarkening() || $color->isDarkening() || $this->isLightening() || $color->isLightening()) {
            $mix = new self(
                $r / 2,
                $g / 2,
                $b / 2,
            );
        } else {
            $mix = new self(
                $r / $n,
                $g / $n,
                $b / $n,
            );
        }

        return self::convertToRgbV2($mix);
    }

    public static function convertToRyb(Color $color): self
    {
        $R_rgb = $color->red;
        $G_rgb = $color->green;
        $B_rgb = $color->blue;

        $i_w = min($R_rgb, $G_rgb, $B_rgb);

        //Remove white component
        $r_rgb = $R_rgb - $i_w;
        $g_rgb = $G_rgb - $i_w;
        $b_rgb = $B_rgb - $i_w;

        $r_ryb = $r_rgb - min($r_rgb, $g_rgb);
        $y_ryb = ($g_rgb + min($r_rgb, $g_rgb)) / 2;
        $b_ryb = ($b_rgb + $g_rgb - min($r_rgb, $g_rgb)) / 2;

        //normalize
        $divider = max($r_rgb, $g_rgb, $b_rgb);

        if ($divider !== 0.0) {
            $n = max($r_ryb, $y_ryb, $b_ryb) / $divider;

            if ($n > 0.0) {
                $r_ryb /= $n;
                $y_ryb /= $n;
                $b_ryb /= $n;
            }
        }

        //Add black component
        $i_b = min(1 - $R_rgb, 1 - $G_rgb, 1 - $B_rgb);

        $r_ryb += $i_b;
        $y_ryb += $i_b;
        $b_ryb += $i_b;

        return new self($r_ryb, $y_ryb, $b_ryb);
    }

    public static function convertToRgbV2(Color $color): self
    {
        $R_ryb = $color->red;
        $Y_ryb = $color->green;
        $B_ryb = $color->blue;

        $i_b = min($R_ryb, $Y_ryb, $B_ryb);

        //Remove black component
        $r_ryb = $R_ryb - $i_b;
        $y_ryb = $Y_ryb - $i_b;
        $b_ryb = $B_ryb - $i_b;

        $r_rgb = $r_ryb + $y_ryb - min($y_ryb, $b_ryb);
        $g_rgb = $y_ryb + min($y_ryb, $b_ryb);
        $b_rgb = 2 * ($b_ryb - min($y_ryb, $b_ryb));

        //normalize
        $divider = max($r_ryb, $y_ryb, $b_ryb);

        if ($divider !== 0.0) {
            $n = max($r_rgb, $g_rgb, $b_rgb) / $divider;

            if ($n > 0.0) {
                $r_rgb /= $n;
                $g_rgb /= $n;
                $b_rgb /= $n;
            }
        }

        //Add white component
        $i_w = min(1 - $R_ryb, 1 - $Y_ryb, 1 - $B_ryb);

        $r_rgb += $i_w;
        $g_rgb += $i_w;
        $b_rgb += $i_w;

        return new self(
            round($r_rgb, 2, PHP_ROUND_HALF_UP),
            round($g_rgb, 2, PHP_ROUND_HALF_UP),
            round($b_rgb, 2, PHP_ROUND_HALF_UP),
        );
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
