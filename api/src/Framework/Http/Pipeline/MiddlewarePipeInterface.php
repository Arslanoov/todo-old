<?php

declare(strict_types=1);

namespace Framework\Http\Pipeline;

use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

interface MiddlewarePipeInterface extends MiddlewareInterface, RequestHandlerInterface
{
    public function pipe(MiddlewareInterface $middleware): void;
}
