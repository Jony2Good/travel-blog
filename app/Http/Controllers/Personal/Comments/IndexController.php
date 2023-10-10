<?php

namespace App\Http\Controllers\Personal\Comments;

use App\Http\Controllers\Controller;


class IndexController extends Controller
{
    public function __invoke()
    {
        $name = auth()->user()->name;
        $comments = auth()->user()->comments;

        return view('personal.comments.index', compact('name', 'comments'));
    }
}
