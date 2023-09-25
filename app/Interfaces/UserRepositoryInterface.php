<?php

namespace App\Interfaces;

use App\Http\Requests\UserStoreRequest;
use App\Http\Resources\UserResource;
use App\Models\User;

interface UserRepositoryInterface
{
    public function getById(User $user): UserResource;

    public function create(UserStoreRequest $data): UserResource;
}