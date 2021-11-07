<?php
declare(strict_types=1);

namespace App\Domain\V2;

use App\Domain\V2\Color\RedGreenBlueColor;

final class PaintFactory
{
    public function fromRedGreenBlue(RedGreenBlueColor $color, Volume $volume): Paint
    {
        return new Paint($color->createMixable(), $volume);
    }
}
