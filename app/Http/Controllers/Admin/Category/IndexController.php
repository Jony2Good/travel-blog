<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function __invoke()
    {
        $name = Auth::user()->name;
        $categories = Category::all()->sortBy('id');
        return view('admin.categories.index', compact('categories', 'name'));
    }
}
