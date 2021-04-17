<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\User;

class PostsController extends Controller
{
    //
    
    public function index(User $user){
        $auths = Auth::user();
        // dd($auths);
        $list = Post::get();
            //   ->orderBy('created_at','desc');

        return view('posts.index',['list' => $list]);
    }

    public function create(Request $request)
    { 
        $post = new Post();
       
        $post->user_id = Auth::user()->id;
        // dd($post);
        $post->posts = $request->input('newPost');
        // dd($post);
        $post->save();
        return redirect('/top');
    }
}
