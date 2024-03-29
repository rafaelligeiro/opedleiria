<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
          'name'=>'required|min:3|max:40|regex:/^[A-ZÀ-úa-z\s]+$/',
           'email' =>'required|email|unique:users,email,'.
                    (Auth::check()?Auth::user()->id:''),
           'photo' =>'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
           'data_nasc' => 'nullable|date|date_format:Y-m-d',
           'nif' => 'nullable|integer|digits:9',
           'morada' => 'nullable',
           'cod_postal' => 'nullable|string|max:9',
           'telefone' => 'nullable|integer|digits:9',
           'genero' => 'required|in:M,F',
        ];
    }
    public function messages(): array
    {
        return[
            'photo.image' => 'O ficheiro não é uma imagem'
        ];
    }

}
