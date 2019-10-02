<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Post;
use App\Model\Admin\Imagen;

class WelcomeController extends Controller
{
    public function index(){
    	
    	$posts = Post::orderBy('posts.id', 'DESC')
    	->join('imagens', 'imagens.id', '=', 'posts.imagen_id')->where('estado', 'PUBLISHED')
    	->paginate(3);

    	$imagenes = Imagen::all();

    	return view('web.welcome', compact('posts', 'imagenes'));
    }
}
