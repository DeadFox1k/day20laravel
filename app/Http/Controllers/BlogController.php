<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Users;
class BlogController extends Controller
{
    public function view() {
        
        $posts = Post::orderby('created_at', 'DESC')->paginate(2);
        //dd($posts);
        
        return view('main.blog', ['posts' => $posts]);
    }
}
