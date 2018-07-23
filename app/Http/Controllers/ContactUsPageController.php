<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsPageController extends Controller
{
    public function index(){
        $title_string = "This is my Contact Us page Title";
        return view('home', ['title' => $title_string]);
    }
}
