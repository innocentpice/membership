<?php

class index extends Controller {
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
    
    private function landing(){
        
    }
    
    private function auth(){
        if(empty($_SESSION['account'])){
            
            if(empty($_GET['login'])){
                
                $this->view->BodyAti = 'style="background:#fafafa !important;"';
                $this->view->render('header');
                $this->view->render('landing');
                $this->view->render('footer');
                exit();
                return false;
                
            }else if($_POST['username']){
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
        
        $this->view->CSSInject[0] = URL_Public . '/css/app.css';
        
        $this->view->render('header');
        $this->view->render('app/navbar');
        $this->view->render('app/profile');
        $this->view->render('footer');
    }
}