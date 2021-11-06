<?php
declare(strict_types=1);

namespace App\Application\Presentation\Web;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Request;

final class MixColorActionTest extends WebTestCase
{
    public function testItWorks(): void
    {
        $client = self::createClient();
        $client->request(
            method: Request::METHOD_GET,
            uri: '/colors'
        );

        self::assertResponseIsSuccessful();
    }
}
