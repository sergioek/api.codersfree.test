<?php
namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;

trait ApiTraits{

    protected $allowIncluded=['posts','post.users'];
    protected $allowFilter=['name','id','slug'];
    protected $allowSort=['id','name'];

    public function scopeIncluded(Builder $query){
        if(empty($this->allowIncluded) || empty(request('included'))){
            return;
        }

        $relations=explode(',',request('included'));
        $allowIncluded=collect($this->allowIncluded);
        foreach ($relations as $key => $relationship) {
            if(!$allowIncluded->contains($relationship)){
                unset($relationship[$key]);
            }
        }

        $query->with($relations);
    }


    ////////////////////////////////////////////////////////////////////////

    public function scopeFilter(Builder $query){
        if(empty($this->allowFilter) || empty(request('filter'))){
            return;
        }

        $filters=request('filter');
        $allowFilter=collect($this->allowFilter);
        foreach ($filters as $filter => $value) {
            if($allowFilter->contains($filter)){
                $query->where($filter,'LIKE','%'.$value.'%');
            }
        }


    }


    public function scopeSort(Builder $query){
        if(empty($this->allowSort) || empty(request('sort'))){
            return;
        }

        $sorts=explode(',',request('sort'));
        $allowSort=collect($this->allowSort);

        foreach ($sorts as $sort) {
            $direction='asc';

            if(substr($sort,0,1)=='-'){
                $direction='desc';
                $sort=substr($sort,1);
            }
        }
        if($allowSort->contains($sort)){
            $query->orderby($sort,$direction);
        }

    }













}











?>