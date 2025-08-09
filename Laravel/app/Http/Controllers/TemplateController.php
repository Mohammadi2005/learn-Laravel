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
        $message = "created";
//        dd($post);
        return view('post', compact('post', 'message'));
    }

    public function updatePost(){
        $post = Post::where("id","=",1)->first();
        $post->update([
            "title"=>"i love iran",
            "content"=>"i am amir hossein mohammadi from iran",
            "views"=>183,
            "status"=>1,
            "user_id"=>2,
            'category_id'=>3,
        ]);
        $message = "updated";
//        dd($post);
//        dd($post->isClean());
//        dd($post->isClean('title'));
//        dd($post->isDirty());
//        dd($post->isDirty('title'));
//        dd($post->wasChanged());
//        dd($post->wasChanged('title'));
        return view('post', compact('post', 'message'));
    }
    public function deletePost(){
        $post = Post::find(14);
        $post->delete();
        $message = "deleted";
        return view('post', compact('post', 'message'));

//        Post::destroy(14);
//        Post::truncate();   delete all records
    }
}
