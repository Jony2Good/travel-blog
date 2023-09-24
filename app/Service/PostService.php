<?php

namespace App\Service;

use App\Http\Requests\Admin\Post\StoreRequest;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostService
{
    public function store(array $data, StoreRequest $request): void
    {
        try {
            Db::beginTransaction();
            $tags = $data['tags'];
            unset($data['tags']);

            $data['prev_image'] = $request->file('prev_image')->store('uploads', 'public');
            $data['main_image'] = $request->file('main_image')->store('uploads', 'public');

            $post = Post::firstOrCreate($data);
            $post->tags()->attach($tags);
            Db::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            abort(500);
        }
    }

    public function update(array $data, UpdateRequest $request, Post $post)
    {
        try {
            Db::beginTransaction();
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
            Db::commit();
        } catch(\Exception $e) {
            Db::rollBack();
            abort(500);
        }
        return $post;
    }

}
