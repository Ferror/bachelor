<?php
declare(strict_types=1);

namespace App\Presentation\Web;

use App\Application\Argument\RequestBody;
use App\Domain\V2\Color\RedGreenBlueColor;
use App\Domain\V2\PaintFactory;
use App\Domain\V2\Volume;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class MixPaintColorAction extends AbstractController
{
    public function __construct(
        private PaintFactory $paintFactory
    )
    {
    }

    #[Route(path: "/paints", name: "PAINTS", methods: ['GET'])]
    public function __invoke(RequestBody $body): Response
    {
        //get paint 1
        //get color
        //get volume
        $base = $this->paintFactory->fromRedGreenBlue(new RedGreenBlueColor(255.0, 255.0, 255.0), new Volume(20.0));
        //get paint 2
        //get color
        //get volume
        $paint = $this->paintFactory->fromRedGreenBlue(new RedGreenBlueColor(0.0, 0.0, 0.0), new Volume(100.0));
        $result = $base->mix($paint);

        return new JsonResponse($result->jsonSerialize(), 200);
    }
}
