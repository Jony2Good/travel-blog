<?php

namespace App\Http\Controllers\Personal\Main;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class IndexController extends Controller
{
    public function __invoke()
    {
        $user = Auth::user()->name;
        return view('personal.main.index', compact('user'));
    }
}
