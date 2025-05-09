<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResetPasswordRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'password' => 'required|min:6',
            'confirm_password' => 'required|min:6|same:password',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
