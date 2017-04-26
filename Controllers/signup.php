<?php

class signup extends Controller {
    function __construct(){
        parent:: __construct();
    }
    function index(){
        $this->view->CSSInject[0] = URL_Public . '/css/main.css';
        $this->view->JSInject[0] = URL_Public . '/js/main.js';
        
        $this->view->render('header');
        $this->view->render('auth/regis_form');
        $this->view->render('footer');
    }
}