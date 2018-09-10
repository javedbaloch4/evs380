<?php

namespace App\Services;

use Illuminate\Http\Request;

class BuildApiService
{
    
    public $model = '';
    public $action = '';
    public $params = '';
    public $api_key = '';
    public $api_token = '';
    
    public function __construct($model ,$action , $params){

        $this->api_key = env('API_KEY');
        $this->api_token = env('API_TOKEN');
        $this->model = $model;
        $this->action = $action;
        $this->params = $params;
      
    }
}
