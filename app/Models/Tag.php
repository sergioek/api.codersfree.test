<?php

namespace App\Models;

use App\Traits\ApiTraits;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    use HasFactory, ApiTraits;

    //relacion muchos a muchos 

    public function posts(){
        return $this->belongsToMany(Post::class);
    }
}
