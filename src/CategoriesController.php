<?php

namespace Cecos\Category;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public function index()
    {
        return view('categories::index');
    }
}
