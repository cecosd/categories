<?php 

namespace Cecos\Category;

trait CategoryTrait{
    public function categories() {
        return $this->belongsToMany('\Cecos\Category\Category');
    }
}