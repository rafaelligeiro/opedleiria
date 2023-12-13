<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;
use Illuminate\Support\Facades\Storage;

class EventoController extends Controller
{
    public function index()
    {
        $eventos = Evento::all();
        return view('eventos', compact('eventos'));
    }

    public function show($id)
    {
        $evento = Evento::findOrFail($id);
        return view('eventos.show', compact('evento'));
    }

    public function create()
    {
        return view('admin.eventos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'descricao' => 'required',
            'data' => 'required|date',
            'num_participantes' => 'required|integer',
            'imagem' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $dadosEvento = $request->all();

        if ($request->hasFile('imagem')) {
            $imagemPath = $request->file('imagem')->store('imagens/eventos');
            $dadosEvento['imagem'] = $imagemPath;
        }

        Evento::create($request->all());

        return redirect()->route('eventos.index')->with('success', 'Evento criado com sucesso!');
    }

    public function edit($id)
    {
        $evento = Evento::findOrFail($id);
        return view('admin.eventos.edit', compact('evento'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required',
            'descricao' => 'required',
            'data' => 'required|date',
            'num_participantes' => 'required|integer',
            'imagem' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $dadosEvento = $request->all();

        if ($request->hasFile('imagem')) {
            $imagemPath = $request->file('imagem')->store('imagens/eventos');
            $dadosEvento['imagem'] = $imagemPath;
        }

        $evento = Evento::findOrFail($id);
        $evento->update($dadosEvento);

        return redirect()->route('eventos.index')->with('success', 'Evento atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $evento = Evento::findOrFail($id);
        $evento->delete();

        return redirect()->route('eventos.index')->with('success', 'Evento excluído com sucesso!');
    }
}
