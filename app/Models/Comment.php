<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public function zhk(){
        return $this->belongsTo('App\Models\Allzhk', 'zhk_id');
    }

    public function getTotalCommentsAttribute()
    {
        return $this->hasMany('App\Models\Allzhk', 'zhk_id')->whereUserId($this->zhk_id)->count();
    }
}
