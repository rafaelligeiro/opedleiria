<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\Inscricao;
use Illuminate\Http\Request;
use App\Http\Requests\InscricaoRequest;

class InscricaoController extends Controller
{


    public function index()
    {
        $inscricoes = Inscricao::all();
        return view('_admin.inscricoes.index', compact('inscricoes'));
    }

    public function show(Inscricao $inscricao)
    {

        return view('_admin.inscricoes.show', compact('inscricao'));
    }

    public function edit(Inscricao $inscricao)
    {

        return view('_admin.inscricoes.edit', compact('inscricao'));
    }

    public function update(InscricaoRequest $request, Evento $evento)
    {
        $dadosInscricao = $request->validated();

        $inscricao->update($dadosInscricao);

        return redirect()->route('admin.inscricoes.index')->with('success', 'Inscricão atualizada com sucesso!');
    }


    public function  create(Evento $evento)
    {
        return view('inscricao',compact('evento'));
    }
    public function store(InscricaoRequest $request,Evento $evento)
    {
        $fields = $request->validated(); //all
        $inscricao = new Inscricao();
        $inscricao->fill($fields);
        $inscricao->id_utilizador=auth()->user()->id;
        $inscricao->id_evento=$evento->id;
        $inscricao->save();
        return redirect()->back()
            ->with('success', 'Inscricao criada com sucesso');
    }


    public function destroy(Inscricao $inscricao)
    {


        $inscricao->delete();

        return redirect()->route('admin.inscricoes.index')->with('success', 'A inscricão foi excluida com sucesso!');
    }
}
