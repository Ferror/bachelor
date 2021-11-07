<?php
declare(strict_types=1);

namespace App\Framework\Subscriber;

use App\Environment;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;

final class ExceptionSubscriber
{
    public function __construct(
        private Environment $environment
    )
    {
    }

    public function onKernelException(ExceptionEvent $event): void
    {
        $throwable = $event->getThrowable();

        if ($this->environment->isProduction()) {
            $event->setResponse(new JsonResponse(['error' => ['message' => 'Unknown error occurred']], 500));
        }

        if ($this->environment->isTesting()) {
            $event->setResponse(new JsonResponse(['error' => ['message' => $throwable->getMessage()]], 500));
        }
    }
}
