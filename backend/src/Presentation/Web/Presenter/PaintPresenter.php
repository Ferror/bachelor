<?php
declare(strict_types=1);

namespace App\Presentation\Web\Presenter;

use App\Domain\V2\Color\RedGreenBlueColor;
use App\Domain\V2\Volume;
use JsonSerializable;

final class PaintPresenter implements JsonSerializable
{
    public static function fromRedGreenBlueColor(RedGreenBlueColor $color, Volume $volume): self
    {
        return new self(
            $color->getRed(),
            $color->getGreen(),
            $color->getBlue(),
            $volume->toFloat(),
        );
    }

    public function __construct(
        private float $red,
        private float $green,
        private float $blue,
        private float $volume,
    )
    {
    }

    public function jsonSerialize(): array
    {
        return [
            'model' => [
                'r' => $this->red,
                'g' => $this->green,
                'b' => $this->blue,
            ],
            'volume' => $this->volume,
        ];
    }
}
