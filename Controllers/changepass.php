<?php

class changepass extends Controller {
    function __construct(){
        parent:: __construct();
        session_start();
        $this->view->CSSInject[0] = URL_Public . '/css/app.css';
    }
    
    function index(){
        if(isset($_POST['old_pass'])){
            if($_POST['old_pass'] != $_SESSION['account']['password']){
                echo $_POST['old_pass'],$_SESSION['account']['password'];
                $this->view->msg = 'รหัสผ่านเก่าไม่ถูกต้อง';
            }else if(empty($_POST['new_pass'])){
                $this->view->msg = 'กรุณากรอกข้อมูลให้ครบถ้วน';
            }else if($_POST['new_pass'] != $_POST['new_confirm']){
                $this->view->msg = 'ท่านกรอก Password ไม่ตรงกัน';
            }else{
                $this->loadModel('auth');
                $result = $this->auth->changepass($_SESSION['account']['username'],$_POST['new_pass']);
                if($result == '00000'){
                    $_SESSION['account']['password'] = $_POST['new_pass'];
                    $this->view->msg = 'ทำการเปลี่ยน Password เรียบร้อย';
                }
            }
        }
        $this->view->render('header');
        $this->view->render('app/navbar');
        $this->view->render('app/changepass');
        $this->view->render('footer');
    }
}