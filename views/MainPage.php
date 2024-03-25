<?php
class MainPage extends Mustache_Engine
{

    public $data=[];



    function render($templates="./templates/index.mst",$data=[]){
        $template = file_get_contents($templates);
        return parent::render($template, $this->data);

    }

    function setData($myData){
        $this->data=$myData;
    }
    function set($var, $html){
        $this->data [$var][] = $html;
    }

}