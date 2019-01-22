<?php

namespace Cecos\Category;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Http\Controllers\Controller;
use Cecos\Category\Category;

class CategoriesController extends Controller
{
    protected $category;
    
    public function __construct(Category $category){
        $this->category = $category;
    }
    
    public function index()
    {
        return view('categories::categories.index', [
            'items' => Category::all()
        ]);
    }

    public function store(Request $request)
    {
        $this->category->setItem($request);
        return redirect()->route('categories');
    }
}
