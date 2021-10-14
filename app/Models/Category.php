<?php

namespace App\Models;

use App\Traits\ApiTraits;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Query\Builder as QueryBuilder;

class Category extends Model
{

    use HasFactory, ApiTraits;

    protected $fillable=['name','slug'];
   
    //relacion uno a muchos
    public function posts(){
        return $this->hasMany(Post::class);
    }

   

}
