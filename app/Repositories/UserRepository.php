<?php

namespace App\Repositories;

use App\Http\Requests\UserStoreRequest;
use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\Interfaces\UserRepositoryInterface;
use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    public function __construct(
        private readonly User $user
    ) {}

    public function getById(User $user): UserResource
    {
        return new UserResource(
            $this->user
                ->where('id', $user->id)
                ->first()
        );
    }

    public function create(UserStoreRequest $data): UserResource
    {
        return new UserResource(
            $this->user->create(
                $data->validated()
            )
        );
    }
}