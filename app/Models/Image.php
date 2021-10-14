<?php

namespace App\Models;

use App\Traits\ApiTraits;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory, ApiTraits;
    //Relaciones uno a muchos polimorficas
    public function imageable(){
        return $this->morphTo();
    }
}
