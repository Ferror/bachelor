<?php
declare(strict_types=1);

namespace App\Domain\V1;

use App\Domain\V1\Model\RedYellowBlue;
use JsonSerializable;

final class Color implements JsonSerializable
{
    private RedYellowBlue $model;

    public function __construct(RedYellowBlue $model)
    {
        $this->model = $model;
    }

    public function equals(self $model): bool
    {
        return $this->model->equals($model->model);
    }

    public function jsonSerialize(): array
    {
        return [
            'model' => $this->model,
        ];
    }
}
