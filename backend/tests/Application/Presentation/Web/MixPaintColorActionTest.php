<?php
declare(strict_types=1);

namespace App\Application\Presentation\Web;

use Generator;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Request;

final class MixPaintColorActionTest extends WebTestCase
{
    /**
     * @dataProvider paints
     */
    public function testItWorks(array $request, array $response, $message): void
    {
        $client = self::createClient();
        $client->request(
            method: Request::METHOD_GET,
            uri: '/paints',
            server: ['HTTP_CONTENT_TYPE' => 'application/json'],
            content: json_encode($request, JSON_THROW_ON_ERROR),
        );
        self::assertResponseIsSuccessful();
        self::assertEquals(json_encode($response, JSON_THROW_ON_ERROR), $client->getResponse()->getContent(), $message);
    }

    public function paints(): Generator
    {
        $file = json_decode(file_get_contents(__DIR__ . '/data.json'), true, 512, JSON_THROW_ON_ERROR);

        foreach ($file['tests'] as $test) {
            yield [
                $test['request'],
                $test['response'],
                $test['name'],
            ];
        }
    }
}
