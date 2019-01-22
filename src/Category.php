<?php

namespace Cecos\Category;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    public function setItem($request)
    {
        return $this->create($request->all());
    }
}
