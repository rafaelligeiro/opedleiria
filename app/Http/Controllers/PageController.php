<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;
use App\Http\Requests\PerfilRequest;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function index(){
        return view('index');
    }
    public function message(){
        return view('message');
    }
    public function sobre(){
        return view('sobre');
    }
    public function eventos(){
        $eventos = Evento::all();
        return view('eventos', compact('eventos'));
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
        return redirect()->route('updatePerfil');
    }


    public function admindashboard()
    {
        /*$count_projects = Project::count();
        $count_categories = Category::count();
        $count_users = User::count();
        $count_users_per_role = User::select('role', DB::raw('count(*) as
       count'))->groupBy('role')->get();
        $count_projects_per_user = User::withCount('projects')->get();
        $count_projects_per_category = Category::withCount('projects')->get();
        return view('_admin.dashboard', compact('count_projects',
            'count_categories', 'count_users', 'count_users_per_role',
            'count_projects_per_user', 'count_projects_per_category'));
        */
	return view('_admin.dashboard');
    }
}
