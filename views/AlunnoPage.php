<?php
class AlunnoPage extends Mustache_Engine
{

    protected $data=[];

    function render($templates="./templates/alunno.mst",$data=[]){
        $template = file_get_contents($templates);
        return parent::render($template, $this->data);

    }

    function setData($myData){
        $this->data=$myData;
    }

}