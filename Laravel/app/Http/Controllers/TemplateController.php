<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;


class TemplateController extends Controller
{
    public function goHome(){
        $user = User::find(1);
        dump($user);

        $user = User::findOrFail(1);
        dump($user);

        $user = User::where('id', '=', 1)->first();
        dump($user);

        $user = User::where('id', '=', 1)->firstOrFail();
        dump($user);

        $user = User::get(['name']);
        foreach ($user as $u) {
            dump($u->name);
        }
//        return view('home');
    }
}
