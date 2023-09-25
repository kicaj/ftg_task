<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostCollection;
use App\Repositories\PostRepository;

class PostController extends Controller
{
    public function __construct(
        private readonly PostRepository $repository
    ) {}

    public function index(): PostCollection
    {
        return $this->repository->getPaginatedList();
    }
}
