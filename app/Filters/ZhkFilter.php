<?php
namespace App\Filters;

class ZhkFilter extends QueryFilter{
    public function city_id($id){
        return $this->builder->where('id', $id);
    }

    public function search_field($search_string){
        return $this->builder->where('zhkName', 'LIKE', '%'.$search_string.'%');
    }
}
