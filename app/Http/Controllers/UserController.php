<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{

    public function getUsers(){

        $users=array();

        for ($i=0; $i < 3; $i++) {
            $user = new User;
            $user->name="name".$i;
            $user->email="email".$i;
            array_push($users,$user);
        }
        return view('users')->with('users',$users);
    }
}
