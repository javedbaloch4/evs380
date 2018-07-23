<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function userRegistrationPage(){
        $title = "User Registration Page";
        return view('register', ['title' => $title]);
    }
}
