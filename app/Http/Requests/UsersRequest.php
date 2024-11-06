<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UsersRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' =>  ['sometimes','min:5', 'email', Rule::unique('users', 'email')->ignore(Auth::id())],
            'password' => ['sometimes','min:8', 'max:255', 'nullable', 'string', 'confirmed'],
        ];
    }
    public function messages()
{
    return [
        'email.min' => 'Alamat email harus terdiri dari minimal 5 karakter.',
        'email.email' => 'Alamat email harus dalam format yang valid.',
        'email.unique' => 'Alamat email ini sudah digunakan oleh pengguna lain.',
        'password.min' => 'Kata sandi harus terdiri dari minimal 8 karakter.',
        'password.max' => 'Kata sandi tidak boleh lebih dari 255 karakter.',
        'password.confirmed' => 'Konfirmasi kata sandi tidak sesuai.',
    ];
}
}
