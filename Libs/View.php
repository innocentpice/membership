<?php

class View {
    function __construct(){}
    
    public function render($name){
        require 'Views/' . $name . '.php';
    }
    public function asXml($name){
        echo header('content-type: text/xml');
        require 'Views/' . $name . '.php';
    }
}