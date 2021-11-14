<?php
declare(strict_types=1);

namespace App\Presentation\Web\Action;

use App\Application\Argument\RequestBody;
use App\Domain\V2\Color\RedGreenBlueColor;
use App\Domain\V2\PaintFactory;
use App\Domain\V2\Volume;
use App\Presentation\Web\Presenter\PaintPresenter;
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

    #[Route(path: '/paints', name: 'PAINTS', methods: ['GET', 'POST'])]
    public function __invoke(RequestBody $body): Response
    {
        $colors = $body->getBody()['colors'];
        $base = $this->paintFactory->fromRedGreenBlue(
            new RedGreenBlueColor(
                $colors[0]['model']['r'],
                $colors[0]['model']['g'],
                $colors[0]['model']['b'],
            ),
            new Volume($colors[0]['volume'])
        );
        $paint = $this->paintFactory->fromRedGreenBlue(
            new RedGreenBlueColor(
                $colors[1]['model']['r'],
                $colors[1]['model']['g'],
                $colors[1]['model']['b'],
            ),
            new Volume($colors[1]['volume'])
        );
        $result = $base->mix($paint);
        $presenter = PaintPresenter::fromRedGreenBlueColor(
            $result->getColor()->createPrintable(),
            $result->getVolume()
        );

        return new JsonResponse($presenter->jsonSerialize(), 200);
    }
}
