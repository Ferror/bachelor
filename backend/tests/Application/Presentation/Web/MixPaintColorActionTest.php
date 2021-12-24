<?php
declare(strict_types=1);

namespace App\Application\Presentation\Web;

use Generator;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Request;
use function file_get_contents;
use function json_decode;
use function json_encode;

final class MixPaintColorActionTest extends WebTestCase
{
    /**
     * @dataProvider paints
     */
    public function testPaintMixing(array $request, array $response, string $message): void
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
        $file = json_decode((string) file_get_contents(__DIR__ . '/Resources/paints.json'), true, 512, JSON_THROW_ON_ERROR);

        foreach ($file['tests'] as $test) {
            yield [
                $test['request'],
                $test['response'],
                $test['name'],
            ];
        }
    }

    /**
     * @dataProvider ratios
     */
    public function testPaintRatios(array $request, array $response, string $message): void
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

    public function ratios(): Generator
    {
        $file = json_decode((string) file_get_contents(__DIR__ . '/Resources/ratios.json'), true, 512, JSON_THROW_ON_ERROR);

        foreach ($file['tests'] as $test) {
            yield [
                $test['request'],
                $test['response'],
                $test['name'],
            ];
        }
    }
}
