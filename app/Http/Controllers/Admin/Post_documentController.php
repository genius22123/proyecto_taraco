<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post_document;
use App\Models\Category_document;
use App\Http\Requests\Post_documentRequest;
use Illuminate\Support\Facades\Storage;


class Post_documentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post_document::latest('id')->get();
        
       
        return view('admin.document-normativo.posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category_document::pluck('name','id');
      
        return view('admin.document-normativo.posts.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Post_documentRequest $request)
    {
       $post= Post_document::create($request->all()); 

     

        if($request->file('url')){
            
            $url=Storage::put('documents', $request->file('url'));
            $post->file()->create([
                'url'=>$url
            ]);
 
        
        
         } 
  

        return redirect()->route('admin.documentos-normativos-posts.index');  
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post_document $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post_document $post)
    {
        $categories=Category_document::pluck('name','id');
        return view('admin.document-normativo.posts.edit',compact('post','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Post_documentRequest $request, Post_document $post)
    {
        $post->update($request->all());
        if($request->file('url')){
            
            $url= Storage::put('documents', $request->file('url'));
             if($post->file){
                 Storage::delete($post->file->url);
                 $post->file->update([
                 'url'=>$url
              ]);
             }
            
           } 
           return redirect()->route('admin.documentos-normativos-posts.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post_document $post)
    {
        $post->delete();
        return redirect()->route('admin.documentos-normativos-posts.index'); 
    }
}
