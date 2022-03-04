<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doc_gobierno extends Model
{
    use HasFactory;
    

    protected $fillable=['name','url'];

    public function getRouteKeyName()
    {
       return "name";
    } 
}
