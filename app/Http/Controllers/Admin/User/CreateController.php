<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CreateController extends Controller
{
    public function __invoke()
    {
        $name = Auth::user()->name;
        $roles = User::getRoles();
        return view('admin.users.create', compact('roles', 'name'));
    }
}
