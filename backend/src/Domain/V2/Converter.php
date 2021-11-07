<?php
declare(strict_types=1);

namespace App\Domain\V2;

use App\Domain\V2\Color\RedGreenBlueColor;
use App\Domain\V2\Color\RedYellowBlueColor;

final class Converter
{
    public static function toRedYellowBlue(float $r, float $g, float $b): RedYellowBlueColor
    {
        $R_rgb = $r / 255;
        $G_rgb = $g / 255;
        $B_rgb = $b / 255;

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

        return new RedYellowBlueColor($r_ryb, $y_ryb, $b_ryb);
    }

    public static function toRedGreenBlue(float $r, float $y, float $b): RedGreenBlueColor
    {
        $R_ryb = $r;
        $Y_ryb = $y;
        $B_ryb = $b;

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

        return new RedGreenBlueColor($r_rgb * 255, $g_rgb * 255, $b_rgb * 255);
    }
}
