<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EditController extends Controller
{
    public function __invoke(Tag $tag)
    {
        $name = Auth::user()->name;
        return view('admin.tags.edit', compact('tag', 'name'));
    }
}
