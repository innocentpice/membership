<?php
class api extends Controller {
    function __construct(){
        parent:: __construct();
        session_start();
    }
    
    function index(){
        $this->view->render('error/index');
    }
    
    private function sentEmail($to,$toname,$subject,$body,$altbody){
        $this->email = new PHPMailer;
        $this->email->SMTPDebug = 0;                              // Enable verbose debug output
        $this->email->isSMTP();                                      // Set mailer to use SMTP
        $this->email->Host = 'cpanel04wh.bkk1.cloud.z.com';  // Specify main and backup SMTP servers
        $this->email->SMTPAuth = true;                               // Enable SMTP authentication
        $this->email->Username = 'webmaster@rayongchember.com';                 // SMTP username
        $this->email->Password = 'Chember2017';                           // SMTP password
        $this->email->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $this->email->Port = 465;                                    // TCP port to connect to
        $this->email->setFrom('webmaster@rayongchember.com', 'YEC Rayong');
        $this->email->addReplyTo('webmaster@rayongchember.com', 'YEC Rayong');
        $this->email->isHTML(true);
        
        $this->email->addAddress($to, $toname);     // Add a recipient
        $this->email->Subject = $subject;
        $this->email->Body    = $body;
        $this->email->AltBody = $altbody;
        if(!$this->email->send()) {
            return 'fail';
        } else {
            return 'pass';
        }
        
    }
    
    
    function uploadAvatar(){
        $username = $_SESSION['account']['username'];
        if(empty($_POST['img']) || empty($username)){
            echo 'error';
            return false;
            exit();
        }
        
        $data = $_POST['img'];
        list($type, $data) = explode(';', $data);
        list(, $data) = explode(',', $data);
        $data = base64_decode($data);
        $imgname =  $username . '.png';
        $path = './Publics/img/member/avatar/';
        if(!file_exists($path)){
            mkdir($path, 0755, true);
        }
        file_put_contents($path . $imgname , $data);
        echo 'success';
    }
    
    function businessimg($id,$number){
        $username = $_SESSION['account']['username'];
        
        if(empty($_FILES[0]) || empty($username)){
            echo 'error';
            return false;
            exit();
        }
        
        $imgname =  $id. '_' .$number . '.png';
        $path = './Publics/img/business/';
        
        if(!file_exists($path)){
            mkdir($path, 0755, true);
        }
        
        if (move_uploaded_file($_FILES[0]["tmp_name"], $path.$imgname)) {
            echo "success";
        }else{
            echo "error";
        }
    }
    
    function searchUser($key){
        header('Content-Type: application/json; charset=utf-8');
        $this->loadModel('member');
        $result = $this->member->searchMember($key);
        if(empty($result[0])){
            echo 'none';
        }else{
            echo json_encode($result, JSON_UNESCAPED_UNICODE);
        }
    }
    function searchBusiness($key){
        header('Content-Type: application/json; charset=utf-8');
        $this->loadModel('businessModel');
        $result = $this->businessModel->searchBusiness($key);
        if(empty($result[0])){
            echo 'none';
        }else{
            echo json_encode($result, JSON_UNESCAPED_UNICODE);
        }
    }
    
    function getUser($index){
        header('Content-Type: application/json; charset=utf-8');
        $this->loadModel('member');
        $result = $this->member->getAll($index);
        if(empty($result[0])){
            echo json_encode('none', JSON_UNESCAPED_UNICODE);
        }else{
            echo json_encode($result, JSON_UNESCAPED_UNICODE);
        }
    }
    
    function getAdmin($index){
        header('Content-Type: application/json; charset=utf-8');
        $this->loadModel('member');
        $result = $this->member->getAdmin($index);
        if(empty($result[0])){
            echo json_encode('none', JSON_UNESCAPED_UNICODE);
        }else{
            echo json_encode($result, JSON_UNESCAPED_UNICODE);
        }
    }
    
    function setToAdmin($uid){
        if($_SESSION['account']['permission'] != '9' || empty($uid)){
            return false;
            exit();
        }
        $this->loadModel('member');
        $result = $this->member->setAdmin($uid);
        if($result == '00000'){
            echo 'success';
        }
    }
    
    function unsetToAdmin($uid){
        if($_SESSION['account']['permission'] != '9' || empty($uid)){
            return false;
            exit();
        }
        $this->loadModel('member');
        $result = $this->member->unsetAdmin($uid);
        if($result == '00000'){
            echo 'success';
        }
    }
    
    function cancelMember($uid){
        if($_SESSION['account']['permission'] < '8' || empty($uid)){
            return false;
            exit();
        }
        $this->loadModel('member');
        $result = $this->member->cancelMember($uid);
        if($result == '00000'){
            echo 'success';
        }
    }
    
    function SetYecID($uid,$yecid){
        if($_SESSION['account']['permission'] < '8' || empty($uid) || empty($yecid)){
            return false;
            exit();
        }
        $this->loadModel('member');
        $result = $this->member->SetYecID($uid,$yecid);
        if($result == '00000'){
            echo 'success';
        }
    }
    
    function addMembertime($uid,$time){
        if($_SESSION['account']['permission'] < '8' || empty($uid) || empty($time)){
            return false;
            exit();
        }
        
        $d = strtotime("+".$time." Months");
        $time = date("Y-m-d h:i:s",$d);
        
        $this->loadModel('member');
        $result = $this->member->addTimeMember($uid,$time);
        if($result == '00000'){
            
            $member = $this->member->getEmail($uid);
            $to = $member['email'];
            $toname = $member['title'].$member['name'].' '.$member['surname'];
            $subject = 'ต่ออายุสมาชิกเรียบร้อย | กลุ่มนักธุรกิจใหม่จังหวัดระยอง';
            $body = 'ระบบได้ทำการต่ออายุสมาชิกเรียบร้อย | กลุ่มนักธุรกิจใหม่จังหวัดระยอง<br>'
            . 'Dear : '.$toname.'<br>'
            . 'Date : '.date("F j, Y").'<br>'
            .'<hr>
            <p>แจ้งวันหมดอายุสมาชิกของท่านคือ '.$time.'</p>
            <h5>ติดต่อเรา</h5>
            <p>
                ที่ตั้ง เลขที่ 88/8 ม.2 ต.ทับมา อ.เมืองระยอง จ.ระยอง 21000<br>
                หมายเลขโทรศัพท์  033-014614-5   ,095-4656451<br>
                โทรสาร  033-014614<br>
                อีเมล์  
                <a href="mailto:rayongpcc@gmail.com">rayongpcc@gmail.com</a>  , 
                <a href="mailto:pr@rayongechamber.com">pr@rayongechamber.com</a><br>
            </p>';
            
            $result = $this->sentEmail($to,$toname,$subject,$body,'');
            echo $time;
        }
    }
    
    function delBusiness($id){
        $this->loadModel('businessModel');
        $this->view->businessList = $this->businessModel->getByID($id);
        if($this->view->businessList[0]['username'] != $_SESSION['account']['username']){
            echo 'error';
            return false;
            exit();
        }else{
            $result = $this->businessModel->delete($id);
            if($result == '00000'){
                echo 'success';
            }else{
                echo 'error';
            }
        }
    }
}