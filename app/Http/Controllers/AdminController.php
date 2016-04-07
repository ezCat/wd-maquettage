<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function listAdmin()
    {
        $posts = Post::get();
        return view('admin.list', compact('posts'));
    }
}
