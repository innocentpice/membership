<?php

class members extends Controller {
    function __construct(){
        parent:: __construct();
        
        session_start();
        $auth = $this->auth();
        if(!$auth){
            $this->login();
            exit();
            return false;
        }
    }
    
    private function auth(){
        if(empty($_SESSION['account'])){
            if($_POST['username']){
                $this->loadModel('auth');
                $result = $this->auth->login($_POST['username'],$_POST['password']);
                if($result){
                    $_SESSION['account'] = $result;
                    unset($_POST);
                    header('Location:'.URL_Path);
                    return true;
                }else{
                    $this->view->msgLogin = 'incorrect';
                    return false;
                }
            }else{
                return false;
            }
        }else{
            return true;
        }
    }
    
    private function login(){
        $this->view->render('header');
        $this->view->render('auth/login');
        $this->view->render('footer');
    }
    
    function index(){
        header("Location: ".URL_Path."/member/view/");
    }
    
    function view($id){
        $this->view->CSSInject[0] = URL_Public . '/css/app.css';
        
        $this->loadModel('member');
        $this->view->member = $this->member->getMember($id);
        
        if(empty($this->view->member['username'])){
            echo '404\' Error! Page Not Found.';
        }
        
        $this->loadModel('businessModel');
        $this->view->businessList = $this->businessModel->get($this->view->member['username']);
        
        
        $this->view->render('header');
        $this->view->render('app/navbar');
        $this->view->render('app/member');
        $this->view->render('footer');
    }
}