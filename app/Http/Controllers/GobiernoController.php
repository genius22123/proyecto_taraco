<?php

namespace App\Http\Controllers;

use App\Models\Doc_gobierno;
use Illuminate\Http\Request;

class GobiernoController extends Controller
{
    public function show(Doc_gobierno $doc)
    {
        return view('gobierno.show',compact('doc'));
    }
}
