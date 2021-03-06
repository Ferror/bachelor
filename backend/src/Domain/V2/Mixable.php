<?php
declare(strict_types=1);

namespace App\Domain\V2;

use App\Domain\V2\Color\RedGreenBlueColor;

interface Mixable
{
    public function mix(self $mixable, float $volumeFirst, float $volumeSecond): self;
    public function createPrintable(): RedGreenBlueColor;
}
