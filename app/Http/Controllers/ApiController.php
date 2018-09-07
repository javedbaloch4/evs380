<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Models\User;
class ApiController extends Controller
{
    public function buildApiResults(Request $request){
        
        // User Model 
        
        // User Model => addToUser => return 
        
        $final_array = array();
        if(empty($request->get('req'))){
            $final_array['message'] = "req key not found in get / post array";
            $final_array['status'] = 400;
            $final_array['result'] = [];
            $final_array['count'] = [];
            dd(json_decode(json_encode($final_array)));
        }
        
        $apiReqData = json_decode($request->get('req'));
        
        
        // sha1 40bit
        // md5 32bit
        
//        dd(sha1('!@#AEDRFHV %234!23'));
//        dd(md5('s'));
        
//        dd(env('API_TOKEN'));
        
        if($apiReqData->api_token != env('API_TOKEN')){
            $final_array['message'] = "Api token mismatch";
            $final_array['status'] = 400;
            $final_array['result'] = [];
            $final_array['count'] = [];
            dd(json_decode(json_encode($final_array)));
        }
        
        if($apiReqData->api_key != env('API_KEY')){
            $final_array['message'] = "Api Key mismatch";
            $final_array['status'] = 400;
            $final_array['result'] = [];
            $final_array['count'] = [];
            dd(json_decode(json_encode($final_array)));
            
        }

        
        $model_lists = config('viewmodels');
        
        if(empty($model_lists[$apiReqData->model])){
            $final_array['message'] = "Model name is incorrect";
            $final_array['status'] = 400;
            $final_array['result'] = [];
            $final_array['count'] = [];
            dd(json_decode(json_encode($final_array)));
        }
        
        $obj_model = $model_lists[$apiReqData->model];
//        get_class($object)
        
//        dd(ucfirst($apiReqData->model));
        
        dd(json_decode(json_encode($final_array)));
    }
}
