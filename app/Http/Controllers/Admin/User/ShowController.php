<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class ShowController extends Controller
{
    public function __invoke(User $user)
    {
        $name = Auth::user()->name;
        return view('admin.users.show', compact('user', 'name'));
    }
}
