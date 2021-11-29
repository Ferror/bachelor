<?php
declare(strict_types=1);

namespace App\Application\Presentation\Web;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Request;

final class ExceptionActionTest extends WebTestCase
{
    public function testRoot(): void
    {
        $client = self::createClient();
        $client->request(
            method: Request::METHOD_GET,
            uri: '/',
            server: ['HTTP_CONTENT_TYPE' => 'application/json'],
        );

        self::assertResponseStatusCodeSame(500);
        self::assertEquals(
            '{"error":{"message":"No route found for \u0022GET http:\/\/localhost\/\u0022"}}',
            $client->getResponse()->getContent(),
        );
    }
}
