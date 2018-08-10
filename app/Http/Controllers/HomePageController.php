<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends ViewComposingController
{
    public function homePage(){
        return $this->buildTemplate('home');
        
    }
}
