<?php

class avatar extends Controller {
    function __construct(){
        parent:: __construct();
        session_start();
        if(empty($_SESSION['account']) || empty($_FILES['avatar'])){
            header('Cache-Control: no-cache');
            header('Pragma: no-cache');
            header("Cache-Control: no-store, no-cache, must-revalidate");
            header("Cache-Control: post-check=0, pre-check=0", false);
            header("Pragma: no-cache");
            header('Location:'.URL_Path);
            exit();
            return false;
        }
    }
    
    function index(){
        if(isset($_FILES['avatar'])){
            
            $username = $_SESSION['account']['username'];
        
            if(empty($_FILES['avatar']) || empty($username)){
                echo 'error';
                return false;
                exit();
            }
            
            $imgname =  $username.'_test.png';
            $path = './Publics/img/member/avatar/';
            
            if(!file_exists($path)){
                mkdir($path, 0755, true);
            }
            
            if (move_uploaded_file($_FILES['avatar']["tmp_name"], $path.$imgname)) {
                $this->view->avatar = URL_Public.'/img/member/avatar/'.$username.'_test.png';
            } 
            
            $this->view->CSSInject[0] = URL_Public . '/css/app.css';
            $this->view->CSSInject[1] = URL_Public . '/css/croppie.css';
            $this->view->JSInject[0] = URL_Public . '/js/exif.js';
            $this->view->JSInject[1] = URL_Public . '/js/croppie.js';
            $this->view->JSInject[2] = URL_Public . '/js/avatar.js';
            $this->view->render('header');
            $this->view->render('app/avatar');
            $this->view->render('footer');
        }else{
            echo 'error';
        }
    }
}