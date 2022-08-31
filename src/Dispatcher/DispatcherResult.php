<?php 

declare(strict_types=1);

namespace SimpleRouting\Dispatcher;

use SimpleRouting\Route;

class DispatcherResult
{
    public function __construct(
        protected Route $route,
        protected string $uri,
        protected array $parameters = []
    ) {}

    public function getRoute(): Route
    {
        return $this->route;
    }

    public function getHandler(): mixed
    {
        return $this->route->getHandler();
    }

    public function getUri(): string
    {
        return $this->uri;
    }

    public function getParameters(): array
    {
        return $this->parameters;
    }
}