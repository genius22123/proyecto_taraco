<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Stmt\Return_;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios=Portfolio::all();
      return view('admin.portfolios.index',compact('portfolios')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.portfolios.create');
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
            'title'=>'required',
            'extract'=>'required',
            'url'=>'required|image',         
        ]);

        $titulo=$request->title;
        $extracto=$request->extract;
        

        if($request->file('url')){
            
            $url= Storage::put('portfolio', $request->file('url'));
 
             Portfolio::create([
                 'url'=>$url,
                 'title'=>$titulo,
                'extract'=>$extracto
             ]);
        
         }  
         return redirect()->route('admin.portfolios.index');
            
     

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        return view('admin.portfolios.show',compact('portfolio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        return view('admin.portfolios.edit',compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {$request->validate([
            'title'=>'required',
            'extract'=>'required',
            'url'=>'image',         
        ]);

       
        
        $portfolio->update($request->all());

        if($request->file('url')){
            
          $url= Storage::put('portfolio', $request->file('url'));
           if($portfolio->url){
               Storage::delete($portfolio->url);
               $portfolio->update([
                
           
               'url'=>$url
            ]);
           }
           

            
        
            
        
         } 
         /*    if($portfolio->url){
                Storage::delete($portfolio->url);
                $portfolio->url->update([
                    'url'=>$url,
                ]);
             $portfolio->update([
                 'title'=>$titulo,
                'extract'=>$extracto
             ]);
            } */
         return redirect()->route('admin.portfolios.index'); 
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();
        return redirect()->route('admin.portfolios.index');
    }
}
