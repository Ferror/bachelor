<?php
declare(strict_types=1);

namespace App\Application\Argument;

use JsonException;
use function json_decode;

final class RequestBody
{
    public function __construct(private string $body)
    {
    }

    /**
     * @throws JsonException
     */
    public function getBody(): array
    {
        $result = json_decode($this->body, true, 512, JSON_THROW_ON_ERROR);

        if ($result === null) {
            throw new \InvalidArgumentException('Request body must be not empty json');
        }

        return $result;
    }
}
