<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class IndexController extends Controller
{
    public function __invoke()
    {
        $name = Auth::user()->name;
        $users = User::all()->sortBy('id');
        return view('admin.users.index', compact('users', 'name'));
    }
}
