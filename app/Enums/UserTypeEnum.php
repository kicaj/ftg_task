<?php

namespace App\Enums;

enum UserTypeEnum: int
{
    case USER = 0;
    case EDITOR = 1;
    case ADMIN = 2;

    public function getLabel(): string
    {
        return match($this) {
            self::USER => 'User',
            self::EDITOR => 'Editor',
            self::ADMIN => 'Administrator',
        };
    }
}