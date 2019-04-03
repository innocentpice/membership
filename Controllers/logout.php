<?php

class logout extends Controller {
    function __construct(){
        parent:: __construct();
        session_start();
    }
    
    function index(){
        $this->loadModel('auth');
        $this->auth->logout();
        $this->view->render('header');
        $this->view->GoTo['url'] = URL_Path;
        echo '<script>alert("ออกจากระบบเรียบร้อย");</script>';
        $this->view->render('footer');
    }
}