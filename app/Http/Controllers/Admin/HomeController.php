<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Post;
use App\Model\Admin\User;

class HomeController extends Controller
{
    public function index(){
    	$cantidad_posts = Post::where('estado', 'PUBLISHED')->count();
    	$cantidad_borradores = Post::where('estado', 'DRAFT')->count();
    	$cantidad_usuarios = User::count();

        return view('admin.home', compact('cantidad_posts',
        	'cantidad_borradores',
        	'cantidad_usuarios',
        ));
    }

    public function __construct(){
    	$this->middleware('auth');
    }
}

