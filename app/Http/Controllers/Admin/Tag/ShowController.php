<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShowController extends Controller
{
    public function __invoke(Tag $tag)
    {
        $name = Auth::user()->name;
        return view('admin.tags.show', compact('tag', 'name'));
    }
}
