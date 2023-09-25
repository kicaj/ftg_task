<?php

namespace App\Repositories;

use App\Http\Resources\PostCollection;
use App\Interfaces\PostRepositoryInterface;
use App\Models\Post;

class PostRepository implements PostRepositoryInterface
{
    public function __construct(
        private readonly Post $post
    ) {}

    public function getPaginatedList(): PostCollection
    {
        return new PostCollection(
            $this->post
                ->latest()
                ->paginate(10)
        );
    }
}