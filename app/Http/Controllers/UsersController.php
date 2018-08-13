<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class UsersController extends ViewComposingController {

    public function userRegistrationPage() {
        return $this->buildTemplate('register');
    }
    public function userRegistrationPagePostData(Request $request) {
        
//        dd($_FILES);
//        dd($_FILES);
//         dd($request->all());
         
//         strlen($string) < 3 
//         $validatedData = $request->validate();
 
        $rules = [
            'name' => 'required|min:3',
            'user_name' => 'required',
            'email ' => 'required|email',
            'password ' => 'required',
            'retype-password ' => 'required|same:password',
            'gender ' => 'required',
            'dob ' => 'required|date',
            'country ' => 'required',
            'image ' => 'mimes:jpeg',
        ];
        
        
        $messages = [
            'name.required' => "name Req",
            'name.min' => "Value Min",
        ];
        
//        validator($rules, $rules)
//        dd($request->all());
        $validation_res = Validator::make($request->all(),$rules , $messages);
        dd($validation_res->messages()->all());
        
        $errors = array();
        if(empty($request->get('name'))){
            $errors['name'] = "First Name is empty";
        }
        
        dd($errors);
        return $this->buildTemplate('register');
    }
    public function contactPage() {
        return $this->buildTemplate('contact');
    }

}
