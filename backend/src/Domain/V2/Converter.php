<?php
declare(strict_types=1);

namespace App\Domain\V2;

use App\Domain\V2\Color\RedGreenBlueColor;
use App\Domain\V2\Color\RedYellowBlueColor;

final class Converter
{
    public static function toRedYellowBlue(RedGreenBlueColor $model): RedYellowBlueColor
    {
        $R_rgb = $model->getRed();
        $G_rgb = $model->getGreen();
        $B_rgb = $model->getBlue();

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

        $r_ryb = round($r_ryb, 2, PHP_ROUND_HALF_UP);
        $y_ryb = round($y_ryb, 2, PHP_ROUND_HALF_UP);
        $b_ryb = round($b_ryb, 2, PHP_ROUND_HALF_UP);

        return new RedYellowBlueColor($r_ryb, $y_ryb, $b_ryb);
    }

    public static function toRedGreenBlue(RedYellowBlueColor $model): RedGreenBlueColor
    {
        $R_ryb = $model->getRed();
        $Y_ryb = $model->getYellow();
        $B_ryb = $model->getBlue();

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

        $r_rgb = round($r_rgb, 2, PHP_ROUND_HALF_UP);
        $g_rgb = round($g_rgb, 2, PHP_ROUND_HALF_UP);
        $b_rgb = round($b_rgb, 2, PHP_ROUND_HALF_UP);

        return new RedGreenBlueColor($r_rgb, $g_rgb, $b_rgb);
    }
}
