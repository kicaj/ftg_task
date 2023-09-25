<?php

namespace App\Interfaces;

use App\Http\Resources\PostCollection;

interface PostRepositoryInterface
{
    public function getPaginatedList(): PostCollection;
}