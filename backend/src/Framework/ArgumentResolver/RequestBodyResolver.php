<?php
declare(strict_types=1);

namespace App\Framework\ArgumentResolver;

use App\Application\Argument\RequestBody;
use Generator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Controller\ArgumentValueResolverInterface;
use Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata;

final class RequestBodyResolver implements ArgumentValueResolverInterface
{
    public function supports(Request $request, ArgumentMetadata $argument): bool
    {
        return $argument->getType() === RequestBody::class
            && $request->getContentType() === 'json';
    }

    public function resolve(Request $request, ArgumentMetadata $argument): Generator
    {
        yield new RequestBody($request->getContent(false));
    }
}
