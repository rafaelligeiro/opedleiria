<?php

namespace App\Http\Controllers;

use App\Models\Doacao;
use App\Models\Evento;
use App\Models\Noticia;
use App\Models\Mensagem;
use App\Models\Inscricao;
use App\Models\Patrocinio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\PerfilRequest;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function index(){
        $eventos = Evento::all();
        $patrocinios = Patrocinio::all();
        $doacoes = Doacao::all();
        $noticias = Noticia::all();
        return view('index', compact('doacoes', 'eventos', 'patrocinios'));
    }
    public function message(){
        return view('message');
    }
    public function donate(){
        return view('donate');
    }
    public function MyDonation(){
        $doacoes = Doacao::all();
        return view('MyDonations', compact('doacoes'));
    }

    public function sobre(){
        return view('sobre');
    }
    public function eventos(){
        $eventos = Evento::all();
        return view('eventos', compact('eventos'));

    }
    public function patrocinios(){
        $patrocinios = Patrocinio::all();
        return view('patrocinios', compact('patrocinios'));

    }
    public function noticias(){
        $noticias = Noticia::all();
        return view('noticias', compact('noticias'));

    }
    public function inscricoes(){
        $inscricoes = Inscricao::all();
        return view('inscricoes', compact('inscricoes'));

    }
    public function perfil(){
        $user = Auth::user();

        return view('perfil', compact('user'));
    }

    public function updatePerfil(PerfilRequest $request){
        $user = Auth::user();

        $fields = $request->validated();
        $user->fill($fields);
        if ($request->hasFile('photo')) {
            if (!empty($user->photo)) {
                Storage::disk('public')->delete('users_photos/' .
                    $user->photo);
            }
            $photo_path =
            $request->file('photo')->store('public/users_photos');
            $user->photo = basename($photo_path);
        }

        $user->save();
        return redirect()->route('updatePerfil')->with('success', 'Utilizador atualizado com sucesso');;
    }


    public function admindashboard()
    {
        $count_eventos = Evento::count();
        $count_patrocinios = Patrocinio::count();
        $count_inscricoes = Inscricao::count();
        $count_doacoes = Doacao::count();
        $count_mensagens = Mensagem::count();
        $count_noticias = Noticia::count();
        $count_users = User::count();
        $count_users_per_role = User::select('role', DB::raw('count(*) as
       count'))->groupBy('role')->get();
        return view('_admin.dashboard', compact('count_doacoes', 'count_mensagens',
            'count_eventos', 'count_patrocinios', 'count_inscricoes', 'count_users','count_noticias', 'count_users_per_role'));
	return view('_admin.dashboard');
    }
}
