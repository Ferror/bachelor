<?php
declare(strict_types=1);

namespace App\Domain\V2\Color\Exception;

use Exception;
use function sprintf;

final class ColorModelException extends Exception
{
    public static function createInvalidValues(string $model, float... $values): self
    {
        return new self(
            sprintf(
                '[%s] model requires values between 0.0 to 1.0. Got %s',
                $model,
                implode(', ', $values),
            )
        );
    }
}
