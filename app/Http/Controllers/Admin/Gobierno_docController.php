<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Doc_gobierno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Gobierno_docController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files=Doc_gobierno::all();
        return view('admin.files.index',compact('files')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $files=Doc_gobierno::all();
        return view('admin.files.create',compact('files'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
          
            'url'=>'required|mimes:pdf|file|max:60000',         
        ]);

        $nombre=$request->name;
        if($request->file('url')){
            
            $url= Storage::put('documents', $request->file('url'));
 
             Doc_gobierno::create([
                 'url'=>$url,
                 'name'=>$nombre,
           
             ]);
        
         }

         return redirect()->route('admin.files.index');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Doc_gobierno $file)
    {
        return view('admin.files.show',compact('file'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Doc_gobierno $file)
    {
        return view('admin.files.edit',compact('file'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doc_gobierno $file)
    {
        $request->validate([
            'name'=>"required|unique:doc_gobiernos,name,$file->id",
            'url'=>'mimes:pdf|file|max:60000',         
        ]);

        $file->update($request->all());

        if($request->file('url')){
            
            $url= Storage::put('documents', $request->file('url'));
             if($file->url){
                 Storage::delete($file->url);
                 $file->update([
                  
             
                 'url'=>$url
              ]);
             }
             
  
              
          
              
          
           } 

           return redirect()->route('admin.files.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doc_gobierno $file)
    {
        $file->delete();
        return redirect()->route('admin.files.index');
    }
}
