<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function __invoke()
    {
        $name = Auth::user()->name;
        $posts = Post::all()->sortBy('id');
        return view('admin.posts.index', compact('posts', 'name'));
    }
}
