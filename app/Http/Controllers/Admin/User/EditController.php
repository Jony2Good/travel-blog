<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class EditController extends Controller
{
    public function __invoke(User $user)
    {
        $name = Auth::user()->name;
        $roles = User::getRoles();
        return view('admin.users.edit', compact('user', 'roles', 'name'));
    }
}
