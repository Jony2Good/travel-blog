<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShowController extends Controller
{
    public function __invoke(Post $post)
    {
        $name = Auth::user()->name;
        return view('admin.posts.show', compact('post', 'name'));
    }
}
