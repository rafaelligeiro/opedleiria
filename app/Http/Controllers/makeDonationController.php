<?php

namespace App\Http\Controllers;

use App\Models\Doacao;
use Illuminate\Http\Request;
use App\Http\Requests\makeDonationRequest;
use Illuminate\Support\Facades\Storage;

class makeDonationController extends Controller
{
    public function store(makeDonationRequest $request)
    {
        $donation = new Doacao();
        $donation->quantidade = $request->input('quantidade');
        $donation->tipo_pagamento = $request->input('tipo_pagamento');
        $donation->nome = $request->input('nome');
        $donation->descricao = $request->input('descricao');
        $donation->email = $request->input('email');
        $donation->id_utilizador = auth()->id();

        $donation->save();
        return redirect()->back()->with('success', 'Doação efectuada com sucesso');
    }
}
