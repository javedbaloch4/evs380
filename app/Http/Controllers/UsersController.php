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
            'email' => 'required|email',
            'password' => 'required',
            'retype_password' => 'required|same:password',
            'gender' => 'required',
            'dob' => 'required|date',
            'country' => 'required',
            'image' => 'mimes:jpeg,png',
        ];
        
        
//        $messages = [
//            'name.required' => "name Req",
//            'name.min' => "Value Min",
//        ];
        
//        validator($rules, $rules)
//        dd($request->all());
//        $validation_res = Validator::make($request->all(),$rules , $messages);
        
        $image = $request->file('image');
//        dd($image->getClientOriginalExtension());
        $file_name = $request->get('user_name') . '.' . $image->getClientOriginalExtension();
//        dd($file_name);
//        dd($request->file('image'));
        if(!is_dir(public_path('/users'))){
            mkdir(public_path('/users'));
        }
        if(!is_dir(public_path('/users/' . $request->get('user_name')))){
            mkdir(public_path('/users/' . $request->get('user_name')));
        }
        
        
        $image->move(public_path('/users/' . $request->get('user_name')) , $file_name);
//        if(!is_dir())
        dd('here');
        $validation_res = Validator::make($request->all(),$rules );
        
        $this->viewData['errors'] = $validation_res->messages()->all();
        
        
        dd($request->all());
//        
//        $errors = array();
//        if(empty($request->get('name'))){
//            $errors['name'] = "First Name is empty";
//        }
//        
//        dd($errors);
        return $this->buildTemplate('register');
    }
    public function contactPage() {
        return $this->buildTemplate('contact');
    }

}
