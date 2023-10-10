<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function __invoke()
    {
        $name = Auth::user()->name;
        $tags = Tag::all()->sortBy('id');
        return view('admin.tags.index', compact('tags', 'name'));
    }
}
