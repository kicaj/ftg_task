<?php

namespace App\Models;

use App\Enums\UserTypeEnum;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasUuids, HasFactory;

    protected $fillable = [
        'name',
        'type',
        'email',
        'password',
    ];

    protected $casts = [
        'type' => UserTypeEnum::class,
    ];
}
