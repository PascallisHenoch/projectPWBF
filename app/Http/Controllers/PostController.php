<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    
    {
        return view('informasi', [
            "title" => "Informasi",
            "image1" => "stunting.jpg",
            "posts" => Post::all()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }
}
