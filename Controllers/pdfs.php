<?php

use Dompdf\Dompdf;


class pdfs extends Controller {
    function __construct(){
        parent:: __construct();
        session_start();
    }
    
    function index(){
        echo '404\' Error Page Not Found.';
        return false;
        exit();
    }
    
    function resume($id){
        $this->loadModel('member');
        $result = $this->member->getMember($id);
        if(empty($result[0]) || empty($id)){
            $this->index();
        }else{
            $result = null;
            $dompdf = new Dompdf($Options);
            $dompdf->set_option('enable_remote', TRUE);
            $dompdf->set_option('enable_css_float', TRUE);
            $dompdf->set_option('enable_html5_parser', FALSE);
            $dompdf->set_paper("A4", "portrait");
            $dompdf->loadHtmlFile(URL_Path.'/pdfs/html/'.$id);
            $dompdf->render();
            $dompdf->stream('memberid_'.$id.'.pdf', array("Attachment" => false,"enable_remote" => true,"isRemoteEnabled" => true));
            
        }
    }
    
    function html($id){
        $this->loadModel('member');
        $result = $this->member->getMember($id);
        if(empty($result[0]) || empty($id)){
            $this->index();
        }else{
            $this->loadModel('businessModel');
            $this->view->businessitem = $this->businessModel->maincom($result['username']);
            $this->view->memberitem = $result;
            $this->view->PageTitle = 'สมาชิกเลขที่_'.$id;
            header('Content-Type: text/html; charset=utf-8');
            $this->view->render('pdf/header');
            $this->view->render('pdf/resume');
            $this->view->render('pdf/footer');
        }
    }
}