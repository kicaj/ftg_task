<?php

namespace App\Http\Requests;

use App\Enums\JobStatusEnum;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\Rules\Unique;

class UserStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'min:3', 'max:15'],
            'email' => ['required', 'email', new Unique(User::class)],
            'password' => ['required', Password::min(8)->mixedCase()],
        ];
    }
}
