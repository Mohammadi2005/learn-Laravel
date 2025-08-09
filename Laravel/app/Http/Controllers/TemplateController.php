<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\User;


class TemplateController extends Controller
{
    public function read(){

        $users = User::all();
        return view('home', compact('users'));
    }

    public function createPost(){
        $post = Post::create([
            "title"=>"iran",
            "content"=>"i am from iran",
            "views"=>83,
            "status"=>1,
            "user_id"=>1,
            'category_id'=>1,
        ]);
//        dd($post);
        return view('post', compact('post'));
    }
}
