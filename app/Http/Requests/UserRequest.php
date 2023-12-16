<?php

namespace App\Http\Requests;

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
           'email' =>'required|email|unique:users,email'.
                    ($this->user?$this->user->id:''),
           'photo' =>'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
           'role' => 'required|in:A,M,F',

        ];
    }
    public function messages(): array
    {
        return[
            'photo.image' => 'O ficheiro não é uma imagem'
        ];
    }

}
