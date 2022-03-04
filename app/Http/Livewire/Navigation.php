<?php

namespace App\Http\Livewire;

use App\Models\Category_document;
use App\Models\Doc_gobierno;
use App\Models\Document;
use Livewire\Component;


class Navigation extends Component
{
    public function render()
    {
        $category_documents=Category_document::all();
        $gobierno_docs=Doc_gobierno::all();
     
        return view('livewire.navigation',compact('category_documents','gobierno_docs'));
    }
}
