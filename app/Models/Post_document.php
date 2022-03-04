<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post_document extends Model
{
    use HasFactory;
    protected $fillable=['title','extract','user_id','category_id'];

     //relacion uno a muchos- inversa

     public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category_document::class);
    }
    //relacion unio aunio plimorfica

    public function file()
    {
        return $this->morphOne(Document::class,'documentable');
    }
}
