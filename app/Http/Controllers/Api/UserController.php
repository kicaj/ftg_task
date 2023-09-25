<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;
use App\Http\Resources\PostCollection;
use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Repositories\PostRepository;
use App\Repositories\UserRepository;

class UserController extends Controller
{
    public function __construct(
        private readonly UserRepository $repository
    ) {}

    public function show(User $user): UserResource
    {
        return $this->repository->getById($user);
    }

    public function store(UserStoreRequest $request): UserResource
    {
        return $this->repository->create($request);
    }
}
