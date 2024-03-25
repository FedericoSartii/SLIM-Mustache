<?php
class TemplateEngine extends Mustache_Engine
{

    protected $template, $data, $mustache;
    function __construct(){
        $this->mustache = new Mustache_Engine(array('loader' => new Mustache_Loader_Filesystemloader(dirname(__FILE__).'/views')));
    }

    function setData($myData){
        $this->data=$myData;
    }
    function set($var, $html){
        $this->data [$var][] = $html;
    }

}