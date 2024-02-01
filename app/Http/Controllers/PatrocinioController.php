<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatrocinioController extends Controller
{
    public function index()
    {
        $patrocinios = Patrocinio::all();
        return view('_admin.patrocinios.index', compact('patrocinios'));
    }

    public function show(Patrocinio $patrocinio)
    {

        return view('_admin.patrocinios.show', compact('patrocinio'));
    }

    public function create()
    {
        $patrocinio =new Patrocinio();
        return view('_admin.patrocinios.create', compact('patrocinio'));
    }

    public function store(PatrocinioRequest $request)
    {
        $dadosPatrocinio = $request->validated();

        if ($request->hasFile('imagem')) {
            Storage::makeDirectory('public/imagens_patrocinios');
            $img_path = $request->file('imagem')->store(
                'public/imagens_patrocinios');
            $dadosPatrocinio['imagem'] = basename($img_path);

        }

        Patrocinio::create($dadosPatrocinio);

        return redirect()->route('admin.patrocinios.index')->with('success', 'Patrocinio criado com sucesso!');
    }

    public function edit(Patrocinio $patrocinio)
    {

        return view('_admin.patrocinios.edit', compact('patrocinio'));
    }

    public function update(PatrocinioRequest $request, Patrocinio $patrocinio)
    {
        $dadosPatrocinio = $request->validated();

        if ($request->hasFile('imagem')) {
            Storage::disk('public')->delete('imagens_patrocinios/' .$patrocinio->imagem);
            $img_path =
            $request->file('imagem')->store('public/imagens_patrocinios');
            $dadosPatrocinio['imagem'] = basename($img_path);
        }

        $patrocinio->update($dadosPatrocinio);

        return redirect()->route('admin.patrocinios.index')->with('success', 'Patrocinio atualizado com sucesso!');
    }

    public function destroy(Patrocinio $patrocinio)
    {
        /*if (count($patrocinio->inscricoes)) {
            return redirect()->route('admin.patrocinios.index')->withErrors(
                ['delete' => 'O patrocinio que tentou eliminar tem inscrições
           associadas', ]);
        }
        */
        Storage::disk('public')->delete('imagens_patrocinios/' .$patrocinio->imagem);
        $patrocinio->delete();

        return redirect()->route('admin.patrocinios.index')->with('success', 'Patrocinio excluído com sucesso!');
    }
}
