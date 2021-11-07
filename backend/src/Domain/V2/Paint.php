<?php
declare(strict_types=1);

namespace App\Domain\V2;

final class Paint
{
    public function __construct(
        private Mixable $color,
        private Volume $volume,
    )
    {
    }

    /**
     * Paint mixing differ from color mixing, because there is volume scalar.
     *
     * ex. Blue + Yellow = Green, but 20ml Blue + 10ml Yellow = 30ml Blueish Green
     */
    public function mix(self $paint): self
    {
        return new self(
            $this->color->mix($paint->color, $this->volume->createRatio($paint->volume)),
            $this->volume->add($paint->volume),
        );
    }

    public function getColor(): Mixable
    {
        return $this->color;
    }

    public function getVolume(): Volume
    {
        return $this->volume;
    }
}
