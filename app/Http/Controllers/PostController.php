<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $etiquetas=Tag::all();
        $categorias=Category::all();
        $posts=Post::where('status',2)->latest('id')->paginate(5);
        $post_recientes=Post::where('status',2)->take(5)->latest('id')->get();
        return view('posts.index',compact('posts','etiquetas','categorias','post_recientes'));
    }
    public function show(Post $post)
    {
        $etiquetas=Tag::all();
        $categorias=Category::all();
        
        $post_recientes=Post::where('status',2)->take(5)->latest('id')->get();
        return view('posts.show',compact('post','etiquetas','categorias','post_recientes'));
    }
    public function category(Category $category)
    {
        $categorias=Category::all();
        $etiquetas=Tag::all();
        $post_recientes=Post::where('status',2)->take(5)->latest('id')->get();
        $posts=Post::where('category_id',$category->id)->where('status',2)->latest('id')->paginate(5);

        return view('posts.category',compact('posts','category','categorias','post_recientes','etiquetas'));
    }
    public function tag(Tag $tag)
    { $categorias=Category::all();
        $etiquetas=Tag::all();
        $posts=$tag->posts()->where('status',2)->latest('id')->paginate(5);
        $post_recientes=Post::where('status',2)->take(5)->latest('id')->get();
        return view('posts.tag',compact('tag','posts','categorias','post_recientes','etiquetas'));
    }
}
