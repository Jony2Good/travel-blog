<?php

namespace App\Http\Controllers\Personal\Likes;

use App\Http\Controllers\Controller;
use App\Models\PostUserLike;
use Illuminate\Support\Facades\Auth;


class IndexController extends Controller
{
    public function __invoke()
    {
        $user = Auth::user();
        $name = $user->name;
        $posts = auth()->user()->likedPosts;
        return view('personal.likes.index', compact('name', 'posts'));
    }
}
