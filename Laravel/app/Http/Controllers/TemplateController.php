<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;


class TemplateController extends Controller
{
    public function read(){

        $users = User::all();
        return view('home', compact('users'));
    }
}
