<?php

namespace App\Http\Controllers;
use App\Models\DetailsUser;
use App\Models\Post;
//use Egulias\EmailValidator\Warning\Comment;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Comment;





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
        $message = "updated post successfully";
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
        $message = "deleted post successfully";
        return view('post', compact('post', 'message'));

//        Post::destroy(14);
//        Post::truncate();   delete all records
    }
    public function deleteComment($id){
        $comment = Comment::where('id','=',$id)->first();
        $comment->delete();
        $message = "deleted comment successfully";
        return view('comment', compact('comment', 'message'));
    }
    public function forceDeleteComment($id){
        $comment = Comment::find($id);
        $comment->forceDelete();
    }
    public function restoreComment($id){
        $comment = Comment::onlyTrashed()->where('id','=',$id)->first();
        $comment->restore();
        $message = "restored comment successfully";
        return view('comment', compact('comment', 'message'));
    }

    public function createDetailsUser($id_user) {
        $details = DetailsUser::create([
            "user_id"=>$id_user,
            'country'=>'iran',
            'city'=>'birjand',
            'address'=>'koosf',
        ]);
        $message = "created details user successfully";
        return view('details', compact('details', 'message'));
    }

    public function detailsUser($id_user) {
        $user = User::find($id_user);
        $details = $user->detailsUser;

        dd($details);
    }

    public function postsUser($id_user) {
        $user = User::find($id_user);
        $posts = $user->posts;
//        dd($posts);
        $message = "posts user successfully";
        return view('posts', compact('posts', 'message'));
    }

    public function postIsFromUser($id_post) {
        $post = Post::find($id_post);
        $user = $post->user;
        dd($post, $user);
    }
}
