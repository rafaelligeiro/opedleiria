<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;
use App\Http\Requests\NoticiaRequest;
use Illuminate\Support\Facades\Storage;

class NoticiaController extends Controller
{
    public function index()
    {
        $noticias = Noticia::all();
        return view('_admin.noticias.index', compact('noticias'));
    }

    public function show(Noticia $noticia)
    {

        return view('_admin.noticias.show', compact('noticia'));
    }

    public function create()
    {
        $noticia =new Noticia();
        return view('_admin.noticias.create', compact('noticia'));
    }

    public function store(NoticiaRequest $request)
    {
        $dadosNoticia = $request->validated();

        Noticia::create($dadosNoticia);

        return redirect()->route('admin.noticias.index')->with('success', 'Noticia criada com sucesso!');
    }

    public function edit(Noticia $noticia)
    {

        return view('_admin.noticias.edit', compact('noticia'));
    }

    public function update(NoticiaRequest $request, Noticia $noticia)
    {
        $dadosNoticia = $request->validated();

        $noticia->update($dadosNoticia);

        return redirect()->route('admin.noticias.index')->with('success', 'Noticia atualizada com sucesso!');
    }

    public function destroy(Noticia $noticia)
    {
        /*if (count($noticia->inscricoes)) {
            return redirect()->route('admin.noticias.index')->withErrors(
                ['delete' => 'O noticia que tentou eliminar tem inscrições
           associadas', ]);
        }
        */
        $noticia->delete();

        return redirect()->route('admin.noticias.index')->with('success', 'Noticia excluída com sucesso!');
    }
}
