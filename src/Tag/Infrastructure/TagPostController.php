<?php

declare(strict_types=1);

namespace Src\Tag\Infrastructure;

use Src\Tag\Application\Create\TagCreator;
use Src\Tag\Application\Create\TagCreatorRequest;
use Symfony\Component\HttpFoundation\Request;

final class TagPostController
{
    private $creator;

    public function __construct(TagCreator $creator)
    {
        $this->creator = $creator;
    }

    public function __invoke(Request $request)
    {
        $tag = new TagCreatorRequest(
            $request->get('name')
        );

        ($this->creator)($tag->name());
    }
}
