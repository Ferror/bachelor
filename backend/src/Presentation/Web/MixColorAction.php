<?php
declare(strict_types=1);

namespace App\Presentation\Web;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class MixColorAction extends AbstractController
{
    #[Route(path: "/colors", name: "COLORS_GET", methods: ['GET'])]
    public function __invoke(): Response
    {
        return new JsonResponse([], 200);
    }
}
