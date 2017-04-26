<?php

class signin extends Controller {
    function __construct(){
        parent:: __construct();
    }
    function index(){
        
        $this->view->CSSInject[0] = URL_Public . '/css/main.css';
        $this->view->JSInject[0] = URL_Public . '/js/main.js';
        
        $this->view->render('header');
        $this->view->render('auth/login_form');
        $this->view->render('footer');
    }
    
    function admin(){
        
        $this->view->render('header');
        $this->view->render('admin/admin_cp');
        $this->view->render('footer');
    }
}