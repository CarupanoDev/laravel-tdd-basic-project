<?php

declare(strict_types=1);

namespace Src\Tag\Domain;

final class Tag
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

    public static function create(string $name): Tag
    {
        return new self($name);
    }
}
