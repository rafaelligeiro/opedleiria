<?php

namespace App\Http\Controllers;

use App\Models\Mensagem;
use Illuminate\Http\Request;
use App\Http\Requests\MensagemRequest;

class MensagemController extends Controller
{

    public function index()
    {
        $mensagens = Mensagem::all();
        return view('_admin.mensagens.index', compact('mensagens'));
    }

    public function show(Mensagem $mensagem)
    {
        return view('_admin.mensagens.show', compact('mensagem'));
    }



    public function store(MensagemRequest $request)
    {
        $fields = $request->validated();
        /*$mensagem =mensagem::create($fields); */
        $mensagem = new Mensagem();
        $mensagem->fill($fields);

        $mensagem->save();
        return redirect()->back()
            ->with('success', 'Mensagem criada com sucesso');
    }
}
