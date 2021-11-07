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
    public function testItWorks(array $colors, array $response): void
    {
        $client = self::createClient();
        $client->request(
            method: Request::METHOD_GET,
            uri: '/paints',
            server: [
                'HTTP_CONTENT_TYPE' => 'application/json',
            ],
            content: json_encode(['colors' => $colors], JSON_THROW_ON_ERROR),
        );
        self::assertResponseIsSuccessful();
        self::assertEquals(json_encode($response, JSON_THROW_ON_ERROR), $client->getResponse()->getContent());
    }

    public function paints(): Generator
    {
        yield [
            [
                [
                    'model' => [
                        'r' => 0,
                        'g' => 0,
                        'b' => 255,
                    ],
                    'volume' => 50,
                ],
                [
                    'model' => [
                        'r' => 255,
                        'g' => 255,
                        'b' => 0,
                    ],
                    'volume' => 50,
                ],
            ],
            [
                'model' => [
                    'r' => 0,
                    'g' => 255,
                    'b' => 0,
                ],
                'volume' => 100,
            ]
        ];
//        yield [
//            [
//                [
//                    'r' => 0,
//                    'g' => 0,
//                    'b' => 0,
//                ],
//                [
//                    'r' => 0,
//                    'g' => 0,
//                    'b' => 0,
//                ],
//            ],
//            [
//                'model' => [
//                    'r' => 0,
//                    'g' => 0,
//                    'b' => 0,
//                ],
//                'volume' => 120,
//            ]
//        ];
    }
}
