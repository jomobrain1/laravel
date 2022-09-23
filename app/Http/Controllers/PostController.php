<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index(){
        
        // $user=User::with(['contact','posts'])->find(1);
        $posts=Post::with('user')->get();
        return $posts;
    }
    public function manyTomany(){
        
        $posts=Post::with('categories')->get();
        return $posts;
    }
}
