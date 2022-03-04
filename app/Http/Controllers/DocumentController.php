<?php

namespace App\Http\Controllers;

use App\Models\Category_document;
use App\Models\Post_document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function category(Category_document $category)
    {
        $posts=Post_document::where('category_id',$category->id)->latest('id')->get();
                                            return view('documentos.category',compact('posts','category'));
    }
}
