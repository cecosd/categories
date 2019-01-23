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
        $category = $this->create($request->all());
        $category->users()->attach(\Auth::user()->id);
    }

    public function softDelete($item)
    {
        return $item->delete();
    }

    public function users() {
        return $this->belongsToMany('\App\User');
    }
}
