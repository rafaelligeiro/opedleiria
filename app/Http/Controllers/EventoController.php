<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;
use App\Http\Requests\EventoRequest;
use Illuminate\Support\Facades\Storage;

class EventoController extends Controller
{
    public function index()
    {
        $eventos = Evento::all();
        return view('_admin.eventos.index', compact('eventos'));
    }

    public function show(Evento $evento)
    {

        return view('_admin.eventos.show', compact('evento'));
    }

    public function create()
    {
        $evento =new Evento();
        return view('_admin.eventos.create', compact('evento'));
    }

    public function store(EventoRequest $request)
    {


        $dadosEvento = $request->validated();

        if ($request->hasFile('imagem')) {
            $imagemPath = $request->file('imagem')->store('imagens/eventos');
            $dadosEvento['imagem'] = $imagemPath;
        }

        Evento::create($request->all());

        return redirect()->route('admin.eventos.index')->with('success', 'Evento criado com sucesso!');
    }

    public function edit(Evento $evento)
    {

        return view('_admin.eventos.edit', compact('evento'));
    }

    public function update(EventoRequest $request, Evento $evento)
    {
        $dadosEvento = $request->validated();

        if ($request->hasFile('imagem')) {
            $imagemPath = $request->file('imagem')->store('imagens/eventos');
            $dadosEvento['imagem'] = $imagemPath;
        }


        $evento->update($dadosEvento);

        return redirect()->route('admin.eventos.index')->with('success', 'Evento atualizado com sucesso!');
    }

    public function destroy(Evento $evento)
    {

        $evento->delete();

        return redirect()->route('admin.eventos.index')->with('success', 'Evento excluído com sucesso!');
    }
}
