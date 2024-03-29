<?php

namespace App\Http\Controllers;

use App\Models\Doacao;
use Illuminate\Http\Request;
use App\Http\Requests\makeDonationRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

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

    public function MyDonations()
    {
    $userId = auth()->id();

    $doacoes = Doacao::where('id_utilizador', $userId)->get();

    return view('MyDonations', compact('doacoes'));
    }



    public function MyDonationsEdit($id)
    {

        $data=Doacao::find($id);


        return view('MyDonationsEdit', ['data'=>$data]);
    }



    public function update(Request $request)
    {
     $data=Doacao::find($request->id);
     $data->nome=$request->nome;
     $data->save();
     return redirect('MyDonations');
    }








}
