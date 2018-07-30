<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewComposingController extends Controller
{
    public function buildTemplate($page_name){
        
        dd(config('pages.'.$page_name));
        dd($page_name);
    }
}
