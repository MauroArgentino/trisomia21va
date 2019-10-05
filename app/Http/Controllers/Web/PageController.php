<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Post;
use App\Model\Admin\Imagen;
use App\Model\Admin\Categoria;
use App\Model\Admin\Tag;

class PageController extends Controller
{
    public function web(){
    	$posts = Post::orderBy('posts.id', 'DESC')->where('estado', 'PUBLISHED')
    	->paginate(6);

    	return view('web.home', compact('posts'));
    }

    public function post($slug){
    	$post = Post::where('slug', $slug)->first();

    	return view('web.post', compact('post'));
    }

    public function categoria($slug){
    	$categoria = Categoria::where('slug', $slug)->pluck('id')->first();
    	$posts = Post::where('categoria_id', $categoria)
    			->orderBy('posts.id', 'DESC')->where('estado', 'PUBLISHED')
    			->paginate(6);

    	return view('web.home', compact('posts'));
    }

    public function user($slug){
        $user = User::where('slug', $slug)->pluck('id')->first();
        $posts = Post::where('user_create_id', $user)
                ->orderBy('posts.id', 'DESC')->where('estado', 'PUBLISHED')
                ->paginate(6);

        return view('web.home', compact('posts'));
    }

    public function tag($slug){
    	$posts = Post::whereHas('tags', function($query) use($slug) {
    			$query->where('slug', $slug);
    	})->orderBy('posts.id', 'DESC')->where('estado', 'PUBLISHED')
    			->paginate(6);

    	return view('web.home', compact('posts'));
    }
}
