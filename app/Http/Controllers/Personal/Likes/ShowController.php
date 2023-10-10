<?php

namespace App\Http\Controllers\Personal\Likes;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostUserLike;
use Illuminate\Support\Facades\Auth;


class ShowController extends Controller
{
    public function __invoke(Post $post)
    {
        $user = Auth::user();
        $name = $user->name;
        $posts = auth()->user()->likedPosts()->where('post_id', $post->id)->first();
        return view('personal.likes.show', compact('name', 'posts'));
    }
}
