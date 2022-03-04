<?php

namespace App\Observers;

use App\Models\Doc_gobierno;
use Illuminate\Support\Facades\Storage;

class Doc_gobiernoObserver
{
    /**
     * Handle the Doc_gobierno "created" event.
     *
     * @param  \App\Models\Doc_gobierno  $doc_gobierno
     * @return void
     */
    public function created(Doc_gobierno $doc_gobierno)
    {
        //
    }

    /**
     * Handle the Doc_gobierno "updated" event.
     *
     * @param  \App\Models\Doc_gobierno  $doc_gobierno
     * @return void
     */
   

    /**
     * Handle the Doc_gobierno "deleted" event.
     *
     * @param  \App\Models\Doc_gobierno  $doc_gobierno
     * @return void
     */
    public function deleting(Doc_gobierno $doc_gobierno)
    {
        if($doc_gobierno->url){
            Storage::delete($doc_gobierno->url);
        }
    }

 

}
