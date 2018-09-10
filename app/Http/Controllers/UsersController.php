<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Image;
use App\Services\BuildApiService;
use App\Http\Helpers\ApiCall;

class UsersController extends ViewComposingController {

    public function userRegistrationPage() {
        return $this->buildTemplate('register');
    }

    public function userRegistrationPagePostData(Request $request) {

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

        $image = $request->file('image');
        $file_name = $request->get('user_name') . '.' . $image->getClientOriginalExtension();
        if (!is_dir(public_path('/users'))) {
            mkdir(public_path('/users'));
        }
        if (!is_dir(public_path('/users/' . $request->get('user_name')))) {
            mkdir(public_path('/users/' . $request->get('user_name')));
        }


//        $image->move(public_path('/users/' . $request->get('user_name')) , $file_name);
//        dd($request->file('image')->path());
        $full_img_path = public_path('/users/' . $request->get('user_name')) . '/' . $file_name;

        $image_processig = Image::make($request->file('image')->path());


        $image_processig->resize(800, 400);

        // create a new Image instance for inserting
        $watermark = Image::make(public_path('/img/laravel.png'));

        $image_processig->insert($watermark, 'center');

        $image_processig->save($full_img_path);
//        dd($image_processig);
        $validation_res = Validator::make($request->all(), $rules);

        $this->viewData['errors'] = $validation_res->messages()->all();

        $params = array();
        $params['name'] = $request->get('name');
        $params['user_name'] = $request->get('user_name');
        $params['email'] = $request->get('email');
        $params['password'] = sha1($request->get('password'));
        $params['gender'] = $request->get('gender');
        $params['dob'] = $request->get('dob');
        $params['country'] = $request->get('country');
        $params['image'] = $file_name;
        
        
        $buildApiService['user_registration'] = new BuildApiService('user', 'addToUser', $params);
        
        
        
        $apiCall = new ApiCall();
        
        $result = $apiCall->runApiCall($buildApiService);
        dd(json_encode($buildApiService));
//        $new = array ();
//        
//        $new['class']['10']['name'] = 'abc';  
//        $new['class']['11']['name'] = 'abcd';  
//        $new['class']['12']['name'] = 'abcf';  
//        $new['class']['13']['name'] = 'abcg';  
//        dd(json_encode($new));
        
        
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
