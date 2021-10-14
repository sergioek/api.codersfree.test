<?php

namespace App\Models;

use App\Traits\ApiTraits;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory, ApiTraits;

    //Relacion uno a muchos inversa(muchos a uno)
    public function user(){
        return $this->belongsTo(User::class);
    }
    //Relacion uno a muchos inversa(muchos a uno)
    public function category(){
        return $this->belongsTo(Category::class);
    }

    //Relacion muchos a muchos

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }


    //relacion uno a muchos `polimorfica

    public function image(){
        return $this->morphMany(Image::class,'imageable');
    }
    
}
