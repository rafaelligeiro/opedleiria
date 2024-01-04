<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class makeDonationRequest extends FormRequest
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
            'quantidade' => 'required|integer|min:1',
            'tipo_pagamento' => 'required|in:Cartão,MBWay,Referência',
            'nome' => 'required|min:3|max:40|regex:/^[A-ZÀ-úa-z\s]+$/',
            'data' => 'date',
            'descricao' => 'string|max:255',
            'email' =>'required|email',
        ];
    }
}
