<?php
declare(strict_types=1);

namespace App\Domain\V2\Color;

final class Validator
{
    public static function isWithinRange(float ...$values): bool
    {
        foreach ($values as $value) {
            if ($value > 1.0 && $value < 0.0) {
                return false;
            }
        }

        return true;
    }
}
