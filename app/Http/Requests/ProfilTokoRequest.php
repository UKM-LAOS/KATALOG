<?php

namespace App\Http\Requests;

// use Auth;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class ProfilTokoRequest extends FormRequest
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
            'namatoko' => ['string','max:255'],
            'fototoko' => ['nullable','image','mimes:jpeg,png,jpg,gif,svg','max:2048'],
            'linktoko' => ['url'],
            'deskripsitoko' => ['string'],
        ];
    }
}
