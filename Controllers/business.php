<?php
class business extends Controller {
    function __construct(){
        parent:: __construct();
        session_start();
        $this->view->CSSInject[0] = URL_Public . '/css/app.css';
        $this->view->JSInject[0] = URL_Public . '/js/business.js';
    }
    
    function index(){
        $this->loadModel('businessModel');
        $this->view->businessList = $this->businessModel->get($_SESSION['account']['username']);
        
        $this->view->render('header');
        $this->view->render('app/navbar');
        $this->view->render('app/business');
        $this->view->render('footer');
    }
    
    function add(){
        
        if(isset($_POST['addbusiness'])){

            $query[1] = $_POST['name'];
            $query[2] = $_POST['detail'];
            $query[3] = $_POST['type21'];
            $query[30] = $_POST['type23'];
            $query[4] = $_POST['address'];
            $query[5] = $_POST['tel'];
            $query[6] = (empty($_POST['fax']))?NULL:$_POST['fax'];
            $query[7] = (empty($_POST['website']))?NULL:$_POST['website'];
            $query[8] = (empty($_POST['map_lat']))?NULL:$_POST['map_lat'];
            $query[9] = (empty($_POST['map_lng']))?NULL:$_POST['map_lng'];
            
            $this->loadModel('businessModel');
            
            $result = $this->businessModel->add($_SESSION['account']['username'],$query);
            
            if($result == '00000'){
                unset($_POST);
                header('Location:'.URL_Path.'/business');
            }
        }
        
        $this->view->UseMap = 1;
        //$this->view->MapLat = 12.707434;
        //$this->view->MapLng = 101.14735169999994;
        
        $this->view->render('header');
        $this->view->render('app/navbar');
        $this->view->render('app/business_add');
        $this->view->render('footer');
    }
    
    function edit($id){
        
        $this->loadModel('businessModel');
        
        if(isset($_POST['editbusiness'])){
            
            $query[0] = $id;
            $query[1] = $_POST['name'];
            $query[2] = $_POST['detail'];
            $query[3] = $_POST['type21'];
            $query[30] = $_POST['type23'];
            $query[4] = $_POST['address'];
            $query[5] = $_POST['tel'];
            $query[6] = (empty($_POST['fax']))?NULL:$_POST['fax'];
            $query[7] = (empty($_POST['website']))?NULL:$_POST['website'];
            $query[8] = (empty($_POST['map_lat']))?NULL:$_POST['map_lat'];
            $query[9] = (empty($_POST['map_lng']))?NULL:$_POST['map_lng'];
            
            $result = $this->businessModel->edit($_SESSION['account']['username'],$query);
            
            if($result == '00000'){
                unset($_POST);
                $this->view->showMsg = 'แก้ไขข้อมูลเรียบร้อย';
            }else{
                $this->view->showMsg = 'ผิดพลาด ! ไม่สามารถแก้ไขข้อมูลได้กรุณาตรวจสอบข้อมูล';
            }
        }
        
        $this->view->businessList = $this->businessModel->getByID($id);
        $this->view->businessList = $this->view->businessList[0];
        
        if($this->view->businessList['username'] != $_SESSION['account']['username']){
            echo '404 Error! Page Not Found.';
            return false;
            exit();
        }
        
        $this->view->UseMap = 1;
        $this->view->MapLat = $this->view->businessList['map_lat'];
        $this->view->MapLng = $this->view->businessList['map_lng'];
        
        $this->view->render('header');
        $this->view->render('app/navbar');
        $this->view->render('app/business_edit');
        $this->view->render('footer');
    }
    
    function editimg($id){
        
        $this->view->CSSInject[1] = URL_Public . '/css/dropify.min.css';
        $this->view->JSInject[1] = URL_Public . '/js/dropify.min.js';
        $this->view->JSInject[2] = URL_Public . '/js/business_img.js';
        $this->view->b_id = $id;
        $this->view->render('header');
        $this->view->render('app/navbar');
        $this->view->render('app/business_img');
        $this->view->render('footer');
        
    }
    
    function view($id){
        $this->view->CSSInject[0] = URL_Public . '/css/app.css';
        
        $this->loadModel('businessModel');
        $this->view->businessList = $this->businessModel->getByID($id);
        
        $this->view->render('header');
        $this->view->render('app/navbar');
        $this->view->render('app/business_view');
        $this->view->render('footer');
    }
}