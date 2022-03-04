<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    protected $fillable=['url'];
    //relascion plimorfica
    public function documentable(){
        return $this->morphTo();
    }
}
