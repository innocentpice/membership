<?php

class register extends Controller {
    function __construct(){
        parent:: __construct();
    }
    
    function index(){
        if(isset($_POST['agree'])){
            if($_POST['password'] != $_POST['confirm']){
                return false;
            }else{

                $query[1] = $_POST["username"];
                $query[2] = $_POST["password"];
                $query[3] = $_POST["title"];
                $query[4] = $_POST["name"];
                $query[5] = $_POST["surname"];
                $query[6] = $_POST["nickname"];
                $query[7] = $_POST["birthday_submit"];
                $query[8] = $_POST["tel"];
                $query[9] = $_POST["email"];
                $query[10] = $_POST["facebook"];
                $query[11] = $_POST["line"];
                if($_POST["yecmem"]=='yec'){
                    $query[12] = 'yec';    
                }else{
                    $query[12] = NULL;
                }
                $query[13] = $_POST["address"];
                 
                
                $this->loadModel('member');
                $result = $this->member->addmember($query);
                
                if($result == '00000'){
                    $file = './Publics/img/member/avatar/default.png';
                    $newfile = './Publics/img/member/avatar/'.$_POST["username"].'.png';
                    if (copy($file, $newfile)) {
                        $this->active($_POST["username"],$_POST["password"]);
                        return false;
                    }
                }
            }
        }
        $this->view->render('header');
        $this->view->render('auth/register');
        $this->view->render('footer');
    }
    private function active($user,$pass){
        session_start();
        $this->loadModel('auth');
        $result = $this->auth->login($user,$pass);
        if($result){
            $_SESSION['account'] = $result;
            $this->view->render('header');
            $this->view->render('auth/active');
            $this->view->GoTo['url'] = URL_Path;
            $this->view->GoTo['delay'] = '3000';
            $this->view->render('footer');
        }
    }
}