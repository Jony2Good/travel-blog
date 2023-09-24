<?php

namespace App\Service;

use App\Http\Requests\Admin\Post\StoreRequest;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Post;

class PostService
{
    public function store(array $data, StoreRequest $request): void
    {
        $tags = $data['tags'];
        unset($data['tags']);

        $data['prev_image'] = $request->file('prev_image')->store('uploads', 'public');
        $data['main_image'] = $request->file('main_image')->store('uploads', 'public');

        $post = Post::firstOrCreate($data);
        $post->tags()->attach($tags);
    }

    public function update(array $data, UpdateRequest $request, Post $post)
    {
        $tags = $data['tags'];
        unset($data['tags']);
        if (isset($data['prev_image'])) {
            $data['prev_image'] = $request->file('prev_image')->store('uploads', 'public');
        }
        if (isset($data['main_image'])) {
            $data['main_image'] = $request->file('main_image')->store('uploads', 'public');
        }
        $post->update($data);
        $post->tags()->sync($tags);

        return $post;
    }

}
