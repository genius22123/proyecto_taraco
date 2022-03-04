<?php

namespace App\Http\Controllers;

use App\Models\Doc_gobierno;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Post;
use App\Models\Document;
use App\Models\Portfolio;
use App\Models\Post_document;
use App\Models\Category_document;

class HomeController extends Controller
{
    public function index()
    {
        $posts=Post::where('status',2)->latest('id')->take(10)->get();
       $sliders = Slider::all();
       $docs=Post_document::latest('id')->take(5)->get();
       $portfolios=Portfolio::all();
       $category_documents=Category_document::latest('id')->take(6)->get();
      
        return view('home.index',compact('sliders','posts','docs','portfolios','category_documents'));
    }
}
