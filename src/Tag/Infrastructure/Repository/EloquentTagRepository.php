<?php

declare(strict_types=1);

namespace Src\Tag\Infrastructure\Repository;

use Src\Tag\Domain\Tag;
use App\Models\Tag as TagModel;
use Src\Tag\Domain\Interfaces\TagRepositoryInterface;

final class EloquentTagRepository implements TagRepositoryInterface
{
    private $tagModel;

    public function __construct(TagModel $tagModel)
    {
        $this->tagModel = $tagModel;
    }

    public function register(Tag $tag): void
    {
        $data = [
            'name' => $tag->name()
        ];

        $this->tagModel->create($data);
    }
}
