<?php

namespace App\Http\Controllers;

use App\Models\Inscricao;
use Illuminate\Http\Request;
use App\Http\Requests\InscricaoRequest;

class InscricaoController extends Controller
{
    public function  create(Evento $evento)
    {
        return view('inscricao',compact('evento'))
    }
    public function store(InscricaoRequest $request,Evento $evento)
    {
        $fields = $request->validated();
        $inscricao = new Inscricao();
        $inscricao->fill($fields);
        $inscricao->id_utilizador=auth()->user()->id;
        $inscricao->id_evento=$evento->id;
        $inscricao->save();
        return redirect()->back()
            ->with('success', 'Inscricao criada com sucesso');
    }
}
