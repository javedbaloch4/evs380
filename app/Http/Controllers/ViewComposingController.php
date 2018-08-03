<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewComposingController extends Controller
{
    
    
    public $headerCss = '';
    public $headerJs = '';
    public $footerCss = '';
    public $footerJs = '';
    public $viewData = array();
    
    public function buildTemplate($page_name){
        
        /*
         * Load PAge Configuration
         */
        $pConfig = config('pages.'.$page_name);
        
        
        $this->headerCss = $pConfig['headerCss'];
        $this->headerJs = $pConfig['headerJs'];
        $this->footerCss = $pConfig['footerCss'];
        $this->footerJs = $pConfig['footerJs'];
        
        $pageSections = array('headSection' , 'headerSection' , 'leftSection' , 'rightSection' , 'mainSection' , 'bottomSection' , 'footerSection' );
        
        foreach($pageSections as $key => $section){
            
            $this->viewData[$section.'s'] = $pConfig[$section];
          
        }
//        dd();
        
        return view($pConfig['layout'], $this->viewData);
        
        
    }
}
