<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewComposingController extends Controller {

    public $headerCss = '';
    public $headerJs = '';
    public $footerJs = '';
    public $globalCss = '';
    public $globalJs = '';
    public $viewData = array();
    public $headerCssData = array();
    public $headerJsData = array();
    public $footerJsData = array();
    public $headerCssMapData = array();
    public $headerJsMapData = array();
    public $footerJsMapData = array();

    public function buildTemplate($page_name) {

        /*
         * Load PAge Configuration
         */
        $pConfig = config('pages.' . $page_name);


        $this->headerCss = $pConfig['headerCss'];
        $this->headerJs = $pConfig['headerJs'];
        $this->footerJs = $pConfig['footerJs'];

        /*
         * Load Global Css
         */
        $this->globalCss = config('globalCss');
        
        /*
         * Global Js
         */
        $this->globalJs = config('globalJs');
        
        
        /*
         * Array Fill Page Wise Header Css Data
         */
        $this->headerCssData = array_merge($pConfig['headerCss'], $this->headerCssData);

        /*
         * Array Fill Page Wise Header Js Data
         */
        $this->headerJsData = array_merge($pConfig['headerJs'], $this->headerJsData);

        /*
         * Array Fill Page Wise Js Js Data
         */
        $this->footerJsData = array_merge($pConfig['footerJs'], $this->footerJsData);


        $pageSections = array('headSection', 'headerSection', 'leftSection', 'rightSection', 'mainSection', 'bottomSection', 'footerSection', 'footSection');

        foreach ($pageSections as $key => $section) {
            $components = $pConfig[$section];
            if (!empty($components)) {
                foreach ($components as $key => $component) {

                    if (config('components.' . $component)) {
                        /*
                         * Array Fill Component Wise Header Css Data
                         */
                        $this->headerCssData = array_merge($this->headerCssData, config('components.' . $component . '.headerCss'));

                        /*
                         * Array Fill Component Wise Header Js Data
                         */
                        $this->headerJsData = array_merge($this->headerJsData, config('components.' . $component . '.headerJs'));

                        /*
                         * Array Fill Component Wise Js Data
                         */
                        $this->footerJsData = array_merge($this->footerJsData, config('components.' . $component . '.footerJs'));
                    }
                }
            }

            $this->viewData[$section . 's'] = $pConfig[$section];
        }
        
        
        
        if(!empty($this->headerCssData)){
            foreach($this->headerCssData as $key => $cssPathKey){
                if(!empty($this->globalCss[$cssPathKey])){
                    $this->headerCssMapData[$cssPathKey] = $this->globalCss[$cssPathKey];
                }
            }
        }
        
        if(!empty($this->headerJsData)){
            foreach($this->headerJsData as $key => $jsPathKey){
                if(!empty($this->globalJs[$jsPathKey])){
                    $this->headerJsMapData[$jsPathKey] = $this->globalJs[$jsPathKey];
                }
            }
        }
        
        if(!empty($this->footerJsData)){
            foreach($this->footerJsData as $key => $jsPathKey){
                if(!empty($this->globalJs[$jsPathKey])){
                    $this->footerJsData[$jsPathKey] = $this->globalJs[$jsPathKey];
                }
            }
        }
        
        
        $this->viewData['headerCssFiles'] = $this->headerCssMapData;
        $this->viewData['headerJsFiles'] = $this->headerJsMapData;
        $this->viewData['footerJsFiles'] = $this->footerJsMapData;
               
//        dd($this->viewData);
        return view($pConfig['layout'], $this->viewData);
    }

}
