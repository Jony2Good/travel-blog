<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Post $post)
    {
        $data = $request->validated();
        $tags = $data['tags'];
        unset($data['tags']);

        $data['prev_image'] = $request->file('prev_image')->store('uploads', 'public');
        $data['main_image'] = $request->file('main_image')->store('uploads', 'public');

        $post->update($data);
        $post->tags()->sync($tags);
        return view('admin.posts.show', compact('post'));
    }
}
