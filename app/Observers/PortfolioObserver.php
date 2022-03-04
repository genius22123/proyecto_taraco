<?php

namespace App\Observers;

use App\Models\Portfolio;
use Illuminate\Support\Facades\Storage;

class PortfolioObserver
{
    /**
     * Handle the Portfolio "created" event.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return void
     */
    public function created(Portfolio $portfolio)
    {
        //
    }

  

    
    public function deleting(Portfolio $portfolio)
    {
        if($portfolio->url){
            Storage::delete($portfolio->url);
        }
    }

   
}
