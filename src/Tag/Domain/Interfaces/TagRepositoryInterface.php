<?php

declare(strict_types=1);

namespace Src\Tag\Domain\Interfaces;

use Src\Tag\Domain\Tag;

interface TagRepositoryInterface
{
    public function register(Tag $tag): void;
}
