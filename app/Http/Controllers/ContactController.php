<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    
    public function index()
    {
        return view('contacto.create');
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required',
            'message'=>'required'
        ]);
        Contact::create($request->all());
        return redirect()->route('taraco.contacts.index')->with('info',' por contactarnos , tu mensaje fue enviado correctamente');
    }

   
}
