<?php
declare(strict_types=1);

namespace App\Domain\V2;

interface Mixable
{
    public function mix(self $mixable, float $ratio): self;
    public function createPrintable(): Printable;
}
