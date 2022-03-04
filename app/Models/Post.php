<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded=['id','created_at','updated_at'];
    //formater fercha
    protected $appends=['fecha_creacion'];
    public function getFechaCreacionAttribute()
    {
        return $this->created_at->diffForHumans();
    }
    
    //relacion uno a muchos inversa

    public function user(){
        return $this->belongsTo(User::class);
    }

    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    //relacion muchos a mcuhioas
    
        public function tags()
        {
            return $this->belongsToMany(Tag::class);
                }
    

                //relacion uno a uno polimorfica

                public function image()
                {
                    return $this->morphOne(Image::class,'imageable');
                }

}
