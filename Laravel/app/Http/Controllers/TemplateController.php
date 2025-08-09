<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;


class TemplateController extends Controller
{
    public function goHome(){

        $users = User::all();
        $users->map(function($user){
            dump($user->email);
        });

        $users = User::where('id','>', 1)
            ->where('id', '<', 3)
            ->tosql();
        dump($users);

        $users = User::where('id','<', 2)
            ->orwhere('id', '>', 2)
            ->get();
        foreach($users as $user){
            dump($user->email);
        }

        return view('home');
    }
}
