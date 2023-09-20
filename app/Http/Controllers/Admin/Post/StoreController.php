<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\StoreRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $tags = $data['tags'];
        unset($data['tags']);

        $data['prev_image'] = $request->file('prev_image')->store('uploads', 'public');
        $data['main_image'] = $request->file('main_image')->store('uploads', 'public');

        $post = Post::firstOrCreate($data);
        $post->tags()->attach($tags);
        return redirect()->route('admin.posts');
    }
}
