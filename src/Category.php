<?php

namespace Cecos\Category;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['name'];
    protected $dates = ['deleted_at'];

    public function setItem($request)
    {
        return $this->create($request->all());
    }

    public function softDelete($item){
        return $item->delete();
    }
}
