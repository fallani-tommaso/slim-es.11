<?php

class Show extends Mustache_Engine{
    protected $data = [];

    function render($templates = "./templates/show.mst", $data = []){
        $template = file_get_contents($templates);
        return parent::render($template, $this->data);
    }

    function setData($data){
        $this->data = $data;
    }
}


?>