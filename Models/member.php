<?php
class member extends Model {
    function __construct(){
        parent::__construct();
    }
    
    function addmember($query){
        $sql = "INSERT INTO  member ( id, username, password, title, name, surname, nickname, birthday, tel, email, facebook, line, yecmember, regis_date, end_date, permission, address)"
            ." VALUES ( NULL,  :username,  :password,  :title,  :name,  :surname,  :nickname,  :birthday,  :tel,  :email,  :facebook,  :line,  :yecmember, CURRENT_TIMESTAMP,  NULL,  '1', :address)";
        
        $NO = array(
            ":username" => $query[1],
            ":password" => $query[2],
            ":title" => $query[3],
            ":name" => $query[4],
            ":surname" => $query[5],
            ":nickname" => $query[6],
            ":birthday" => $query[7],
            ":tel" => $query[8],
            ":email" => $query[9],
            ":facebook" => $query[10],
            ":line" => $query[11],
            ":yecmember" => (empty($query[12]))?NULL:$query[12],
            ":address" => $query[13]
        );
        
        $sth = $this->db->prepare($sql);
        $sth->execute($NO);
        $result = $sth->errorCode();
        return $result;
    }
    
    function getEmail($uid){
         $sql = "SELECT email, title, name, surname FROM member WHERE id = :uid";
         $NO = array(
            ":uid" => $uid
        );
        $sth = $this->db->prepare($sql);
        $sth->execute($NO);
        $result = $sth->fetch();
        return $result;
    }
    
    function editmember($username,$query){
        
        $sql = "UPDATE member SET address = :address, tel = :tel, email = :email, facebook = :facebook, line = :line, yecmember = :yecmember "
        ."WHERE username = :username";
        
        $NO = array(
            ":address" => $query[0],
            ":tel" => $query[1],
            ":email" => $query[2],
            ":facebook" => $query[3],
            ":line" => $query[4],
            ":yecmember" => (empty($query[5]))?NULL:$query[5],
            ":username" => $username
        );
        
        $sth = $this->db->prepare($sql);
        $sth->execute($NO);
        $result = $sth->errorCode();
        return $result;
    }
    
    function setAdmin($uid){
        $sql = "UPDATE member SET permission = '8' WHERE id = :uid";
        $NO = array(
            ":uid" => $uid
        );
        $sth = $this->db->prepare($sql);
        $sth->execute($NO);
        $result = $sth->errorCode();
        return $result;
    }
    
    function unsetAdmin($uid){
        $sql = "UPDATE member SET permission = '1' WHERE id = :uid";
        $NO = array(
            ":uid" => $uid
        );
        $sth = $this->db->prepare($sql);
        $sth->execute($NO);
        $result = $sth->errorCode();
        return $result;
    }
    
    function getMember($id){
        $sql = "SELECT id, username, title, name, surname, nickname, birthday, tel, email, facebook, line, yecmember, regis_date, end_date, permission FROM member WHERE id= '".$id."'";
        $sth = $this->db->prepare($sql);
        $sth->execute();
        $result = $sth->fetch();
        return $result;
        
    }
    
    function getAll($index){
        $start = $index * 10;
        $stop = $start + 10;
        
        $sql = "SELECT * FROM member WHERE permission <= '8' ORDER BY id DESC "
            .'LIMIT '.$start.' , '.$stop;
        $sth = $this->db->prepare($sql);
        $sth->execute();
        $result = $sth->fetchAll();
        return $result;
    }
    
    function getFilter($type21,$type23){
        
        $sql = "SELECT * FROM member WHERE username = ANY (";
        
        if(isset($type21,$type23)){
            $sql .= "SELECT username FROM business WHERE ";
            $sql .= "type21 = :type21 AND type23 = :type23";
            $sql .= " GROUP BY username";
        }else{
            $sql .= "SELECT username FROM business WHERE ";
            $sql .= "type21 = :type21 OR type23 = :type23";
            $sql .= " GROUP BY username";
        }
        
        $sql .= ") AND permission <= '8' ORDER BY id DESC";
        
        
        $NO = array(
            ":type21" => $type21,
            ":type23" => $type23
        );
        
        $sth = $this->db->prepare($sql);
        $sth->execute($NO);
        $result = $sth->fetchAll();
        return $result;
    }
    
    function getAdmin($index){
        $start = $index * 10;
        $stop = $start + 10;
        
        $sql = "SELECT * FROM member WHERE permission = '8' ORDER BY id DESC "
            .'LIMIT '.$start.' , '.$stop;
        $sth = $this->db->prepare($sql);
        $sth->execute($NO);
        $result = $sth->fetchAll();
        return $result;
    }
    
    function searchMember($key){
        
        $sql = "SELECT id,username, title, name, surname, nickname, birthday, email, tel FROM member "
            ."WHERE username LIKE  :key "
            ."OR name LIKE :key "
            ."OR surname LIKE :key "
            ."OR nickname LIKE :key ";
        $NO = array(
            ":key" => '%'.$key.'%'
        );
        
        $sth = $this->db->prepare($sql);
        $sth->execute($NO);
        $result = $sth->fetchAll();
        return $result;
    }
    
    function SetYecID($uid,$yecid){
        $sql = "UPDATE member SET yecmember = :yecmember WHERE id = :uid";
        $NO = array(
            ":yecmember" => $yecid,
            ":uid" => $uid
        );
        $sth = $this->db->prepare($sql);
        $sth->execute($NO);
        $result = $sth->errorCode();
        return $result;
    }
    
    function cancelMember($uid){
        $sql = "UPDATE member SET end_date = NULL WHERE id = :uid";
        $NO = array(
            ":uid" => $uid
        );
        $sth = $this->db->prepare($sql);
        $sth->execute($NO);
        $result = $sth->errorCode();
        return $result;
    }
    
    function addTimeMember($uid,$time){
        $sql = "UPDATE member SET end_date = :time WHERE id = :uid";
        $NO = array(
            ":time" => $time,
            ":uid" => $uid
        );
        $sth = $this->db->prepare($sql);
        $sth->execute($NO);
        $result = $sth->errorCode();
        return $result;
    }
    
}