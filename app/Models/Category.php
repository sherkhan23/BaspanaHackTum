<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function products(){
        return $this->hasmany('App\Allzhk', 'category_id');
    }

}
