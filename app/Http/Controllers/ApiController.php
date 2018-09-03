<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function buildApiResults(Request $request){
        
        // User Model 
        
        // User Model => addToUser => return 
        dd(json_decode($request->get('req')));
    }
}
