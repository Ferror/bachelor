<?php
declare(strict_types=1);

namespace App\Presentation\Web\Action;

use App\Application\Argument\RequestBody;
use App\Domain\V1\Color;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class MixColorAction extends AbstractController
{
    #[Route(path: '/colors', name: 'COLORS_GET', methods: ['GET', 'POST'])]
    public function __invoke(RequestBody $body): Response
    {
        $memory = [];

        foreach ($body->getBody()['colors'] as $color) {
            $memory[] = new Color($color['r'], $color['g'], $color['b']);
        }

        $last = \array_pop($memory);

        foreach ($memory as $color) {
            $last = $last->mix($color);
        }

        return new JsonResponse($last, 200);
    }
}
