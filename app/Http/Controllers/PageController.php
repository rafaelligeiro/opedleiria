<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('eventos');
    }
    public function login(){
        return view('login');
    }
    public function register(){
        return view('register');
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
