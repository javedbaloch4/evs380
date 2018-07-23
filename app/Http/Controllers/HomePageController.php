<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function homePage(){
        
        $data = array();
        $data['title'] = "This is my Home page Title";

        
        $country = array(
            'Pakistan',
            'India',
            'Iran',
            'Pakistan',
        );
        $data['countries'] = $country;
        return view('home', $data);
    }
}
