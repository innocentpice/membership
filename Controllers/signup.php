<?php

class signup extends Controller {
    function __construct(){
        parent:: __construct();
    }
    function index(){
        $this->view->render('header');
        $this->view->render('auth/regis_form');
        $this->view->render('footer');
    }
}