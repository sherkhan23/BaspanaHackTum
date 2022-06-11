<?php

namespace App\Models;

use App\Filters\QueryFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Builder;

class Allzhk extends Model
{
    use HasFactory;


    public function images(){
        return $this->hasMany('App\Models\allZhkImage');
    }

    public function cities(){
        return $this->belongsTo(Cities::class);
    }

    public function comments(){
        return $this->hasMany('App\Models\Comment', 'zhk_id');
    }

//    public function scopeFilter(Builder $builder, QueryFilter $filter){
//        return $filter->apply($builder);
//    }


}
