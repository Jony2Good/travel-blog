<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DestroyController extends Controller
{
    public function __invoke(Post $post)
    {
        $post->delete();
        Storage::disk('public')->delete('uploads', $post->prev_image);
        Storage::disk('public')->delete('uploads', $post->main_image);
        $post->tags()->detach();
        return redirect()->route('admin.posts');
    }
}
