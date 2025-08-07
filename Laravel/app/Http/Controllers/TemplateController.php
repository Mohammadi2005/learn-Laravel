<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class TemplateController extends Controller
{
    public function testAction(){
        return "<h1>this is for test action</h1>";
    }

    public function testActionUser($id){
        return "<h1>user {$id}</h1>";
    }

    // send view with static data
    public function sendDataToView(){
        $name = "Amir hossein";
        return view('showName', [
            'name' => $name,
        ]);
    }

    // send view with dynamic data
    public function post($id){
        return view('post', [
            'id' => $id,
        ]);
    }
}
