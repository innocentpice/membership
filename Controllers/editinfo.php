<?php

class editinfo extends Controller {
    function __construct(){
        parent:: __construct();
        session_start();
        if(empty($_SESSION['account'])){
            echo 'error';
            return false;
            exit();
        }
    }
    
    function index(){
        
        if(isset($_POST['editinfo'])){
            $query[0] = $_POST["address"];
            $query[1] = $_POST["tel"];
            $query[2] = $_POST["email"];
            $query[3] = $_POST["facebook"];
            $query[4] = $_POST["line"];
            $query[5] = $_POST["yecmem"];
            
            $this->loadModel('member');
            $result = $this->member->editmember($_SESSION['account']['username'],$query);
            
            if($result == '00000'){
                $_SESSION['account']['address'] = $query[0];
                $_SESSION['account']['tel'] = $query[1];
                $_SESSION['account']['email'] = $query[2];
                $_SESSION['account']['facebook'] = $query[3];
                $_SESSION['account']['line'] = $query[4];
                $_SESSION['account']['yecmember'] = $query[5];
                unset($_POST);
                header('Location:'.URL_Path);
            }
        }
            
        $this->view->CSSInject[0] = URL_Public . '/css/app.css';
        $this->view->render('header');
        $this->view->render('app/navbar');
        $this->view->render('auth/edit_profile');
        $this->view->render('footer');
    }
}