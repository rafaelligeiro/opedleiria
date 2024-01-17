<?php

namespace App\Http\Controllers;

use App\Models\Doacao;
use Illuminate\Http\Request;
use App\Http\Requests\DoacaoRequest;
use Illuminate\Support\Facades\Storage;

class DoacaoController extends Controller
{
    public function index()
    {
        $doacoes = Doacao::all();
        return view('_admin.doacoes.index', compact('doacoes'));
    }

    public function show(Doacao $doacao)
    {
        return view('_admin.doacoes.show', compact('doacao'));
    }

    
    /*public function create()
    {
        $doacao =new Doacao();
        return view('_admin.doacoes.create', compact('doacao'));
    }
    */

    /*
    public function store(DoacaoRequest $request)
    {
        $dadosDoacao = $request->validated();

        if ($request->hasFile('imagem')) {
            Storage::makeDirectory('public/imagens_eventos');
            $img_path = $request->file('imagem')->store(
                'public/imagens_eventos');
            $dadosDoacao['imagem'] = basename($img_path);

        }

        Doacao::create($dadosDoacao);

        return redirect()->route('admin.doacoes.index')->with('success', 'Doacao criado com sucesso!');
    }
    */

    /*
    public function edit(Doacao $doacao)
    {

        return view('_admin.doacoes.edit', compact('doacao'));
    }

    public function update(DoacaoRequest $request, Doacao $doacao)
    {
        $dadosDoacao = $request->validated();

        if ($request->hasFile('imagem')) {
            Storage::disk('public')->delete('imagens_eventos/' .$doacao->imagem);
            $img_path =
            $request->file('imagem')->store('public/imagens_eventos');
            $dadosDoacao['imagem'] = basename($img_path);
        }

        $doacao->update($dadosDoacao);

        return redirect()->route('admin.doacoes.index')->with('success', 'Doacao atualizado com sucesso!');
    }
    */

    public function destroy(Doacao $doacao)
    {
        $doacao->delete();

        return redirect()->route('admin.doacoes.index')->with('success', 'Doacao excluída com sucesso!');
    }
}

