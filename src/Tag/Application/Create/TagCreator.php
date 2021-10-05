<?php

declare(strict_types=1);

namespace Src\Tag\Application\Create;

use Src\Tag\Domain\Interfaces\TagRepositoryInterface;
use Src\Tag\Domain\Tag;
use Symfony\Component\HttpFoundation\Response;

final class TagCreator
{
    private $repository;

    public function __construct(TagRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(string $nameTag)
    {
        $tag = Tag::create($nameTag);

        $this->repository->register($tag);
    }
}
