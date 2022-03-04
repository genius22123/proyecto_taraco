<?php

namespace App\Observers;

use App\Models\Post_document;

use Illuminate\Support\Facades\Storage;

class Post_documentObserver
{
    /**
     * Handle the Post_document "created" event.
     *
     * @param  \App\Models\Post_document  $post_document
     * @return void
     */
    public function creating(Post_document $post_document)
    {
       if(! \App::runningInConsole()){
        $post_document->user_id=auth()->user()->id;
       }
    }

   
    public function deleting(Post_document $post_document)
    {
        if($post_document->file){
            Storage::delete($post_document->file->url);
        }
    }

  
}
