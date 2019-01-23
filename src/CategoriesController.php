<?php

namespace Cecos\Category;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Http\Controllers\Controller;
use Cecos\Category\Category;
use Cecos\Category\CategoryRequest;

class CategoriesController extends Controller
{
    protected $category;
    
    public function __construct(Category $category){
        $this->category = $category;
    }
    
    public function index()
    {
        return view('categories::categories.index', [
            'items' => \Auth::user()->categories
        ]);
    }

    public function store(CategoryRequest $request)
    {
        $this->category->setItem($request);
        return redirect()->route('categories');
    }

    public function destroy(Request $request, Category $category)
    {
        $this->category->softDelete($category);
        return redirect()->route('categories');
    }
}
