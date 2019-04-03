<?php

class admin extends Controller {
    function __construct(){
        parent:: __construct();
        session_start();
        $this->view->CSSInject[0] = URL_Public . '/css/app.css';
        $this->view->CSSInject[1] = URL_Public . '/css/admin.css';
    }
    function index(){
        $this->userlist();
    }
    function userlist(){
        
        if(isset($_POST['type21']) || isset($_POST['type23'])){
            $this->userfilter($_POST['type21'],$_POST['type23']);
            exit();
            return false;
        }
        
        $this->view->JSInject[0] = URL_Public . '/js/userlist.js';
        $this->view->render('header');
        $this->view->render('app/navbar');
        $this->view->render('admin/userlist');
        $this->view->render('footer');
    }
    
    function userfilter($type21,$type23){
        
        $this->loadModel('member');
        $this->view->members = $this->member->getFilter($type21,$type23);
        
        $this->view->JSInject[0] = URL_Public . '/js/userfilter.js';
        $this->view->render('header');
        $this->view->render('app/navbar');
        $this->view->render('admin/userlist');
        $this->view->render('footer');
        
    }
    
    function stafflist(){
        
        $this->view->JSInject[0] = URL_Public . '/js/adminlist.js';
        
        $this->view->render('header');
        $this->view->render('app/navbar');
        $this->view->render('admin/stafflist');
        $this->view->render('footer');
    }
}