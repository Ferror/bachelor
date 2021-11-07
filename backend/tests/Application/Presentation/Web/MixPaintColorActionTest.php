<?php
declare(strict_types=1);

namespace App\Application\Presentation\Web;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Request;

final class MixPaintColorActionTest extends WebTestCase
{
    public function testItWorks(): void
    {
        $client = self::createClient();
        $client->request(
            method: Request::METHOD_GET,
            uri: '/colors',
            server: [
                'HTTP_CONTENT_TYPE' => 'application/json',
            ],
            content: json_encode([
                'colors' => [
                    [
                        'r' => 0,
                        'g' => 0,
                        'b' => 255,
                    ],
                    [
                        'r' => 255,
                        'g' => 255,
                        'b' => 0,
                    ],
                ],
            ], JSON_THROW_ON_ERROR),
        );
        self::assertResponseIsSuccessful();
    }
}
