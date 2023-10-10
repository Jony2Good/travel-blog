<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EditController extends Controller
{
    public function __invoke(Category $category)
    {
        $name = Auth::user()->name;
        return view('admin.categories.edit', compact('category', 'name'));
    }
}
