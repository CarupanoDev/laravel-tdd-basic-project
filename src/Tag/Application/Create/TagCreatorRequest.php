<?php

declare(strict_types=1);

namespace Src\Tag\Application\Create;

final class TagCreatorRequest
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function name(): string
    {
        return $this->name;
    }
}
