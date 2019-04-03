<?php
class search extends Controller {
    function __construct(){
        parent:: __construct();
        session_start();
    }
    
    function index(){
        $this->view->render('error/index');
        return false;
        exit();
    }
    
    function keyword($key){
        
        if(empty($key)){$this->index();exit();}
        
        $this->loadModel('member');
        $this->view->member = $this->member->searchMember($key);
        
        $this->loadModel('businessModel');
        $this->view->business = $this->businessModel->searchBusiness($key);
        
        $this->view->searchKeyword = $key;
        
        $this->view->CSSInject[0] = URL_Public . '/css/app.css';
        $this->view->CSSInject[1] = URL_Public . '/css/admin.css';
        
        $this->view->render('header');
        $this->view->render('app/navbar');
        $this->view->render('app/search');
        $this->view->render('footer');
        
    }
    
}