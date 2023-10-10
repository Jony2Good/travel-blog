<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function __invoke()
    {
        $name = Auth::user()->name;
        $data = [];
        $data['userCount'] = User::count();
        $data['postCount'] = Post::count();
        $data['categoryCount'] = Category::count();
        $data['tagsCount'] = Tag::count();
        return view('admin.main.index', compact('data', 'name'));
    }
}
