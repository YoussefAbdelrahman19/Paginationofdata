<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    // public function index(){
    //     $posts=DB::table('employees')->select('Name')->first();
    //     return view('posts',compact('posts'));

    // }
    public function innerrJoin()
    {
         $request=DB::table('user')
         ->join('posts', 'user.id','=','posts.user_id')
         ->select('user.Name','posts.Title','posts.Body')->get();
         return view('posts',compact('request'));
    }
    public function allpostsfromModel(){
        $posts=Post::all();
        return $posts;
    }
}
