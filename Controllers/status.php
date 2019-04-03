<?php

class status extends Controller {
    function __construct(){
        parent:: __construct();
        session_start();
        $this->view->CSSInject[0] = URL_Public . '/css/app.css';
    }
    
    function index(){
        $this->view->render('header');
        $this->view->render('app/navbar');
        $this->view->render('app/status');
        $this->view->render('footer');
    }
}