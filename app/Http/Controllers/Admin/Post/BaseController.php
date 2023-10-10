<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Service\PostService;
use Illuminate\Support\Facades\Auth;

class BaseController extends Controller
{

    public function __construct(protected PostService $service)
    {
    }

}
