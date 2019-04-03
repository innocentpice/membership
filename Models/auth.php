<?php

class auth extends Model {
    function __construct(){
        parent::__construct();
    }
    
    function login($user,$pass){
        $sql = "SELECT * FROM member WHERE username = :username AND password = :password";
        $login = array(
            ':username' => $user,
            ':password' => $pass
        );
        $sth = $this->db->prepare($sql);
        $sth->execute($login);
        $result = $sth->fetch();
        if(isset($result[0])){
            return $result;
        }else{
            return false;
        }
    }
    
    function changepass($user,$pass){
        $sql = "UPDATE member SET password =  :password WHERE username = :username";
        $login = array(
            ':username' => $user,
            ':password' => $pass
        );
        $sth = $this->db->prepare($sql);
        $sth->execute($login);
        $result = $sth->errorCode();
        return $result;
    }
    
    function logout(){
        session_unset();
    }
}