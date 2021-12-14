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
        /**
         * @var \App\Domain\V2\Paint[] $memory
         */
        $memory = [];

        foreach ($body->getBody()['paints'] as $paint) {
            $memory[] = $this->paintFactory->fromRedGreenBlue(
                new RedGreenBlueColor(
                    $paint['model']['r'],
                    $paint['model']['g'],
                    $paint['model']['b'],
                ),
                new Volume($paint['volume'])
            );
        }

        if (empty($memory)) {
            return new JsonResponse(['error' => ['message' => 'Could not create any paint model']], 400);
        }

        $last = \array_pop($memory);

        foreach ($memory as $color) {
            $last = $last->mix($color);
        }

        $presenter = PaintPresenter::fromRedGreenBlueColor(
            $last->getColor()->createPrintable(),
            $last->getVolume()
        );

        return new JsonResponse($presenter->jsonSerialize(), 200);
    }
}
