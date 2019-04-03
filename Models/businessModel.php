<?php
class businessModel extends Model {
    function __construct(){
        parent::__construct();
    }
    
    function get($username){
        $sql = "SELECT * FROM business WHERE username = :username";
        $NO = array(
            ":username" => $username  
        );
        $sth = $this->db->prepare($sql);
        $sth->execute($NO);
        $result = $sth->fetchAll();
        return $result;
    }
    
    function add($username,$query){
        $sql = "INSERT INTO business (id, username, name, detail, type21, type23, address, tel, fax, website, map_lat, map_lng) "
            ."VALUES (NULL, :username, :name, :detail, :type21, :type23, :address, :tel, :fax, :website, :map_lat, :map_lng)";
        
        $NO = array(
            ":username" => $username,
            ":name" => $query[1],
            ":detail" => $query[2],
            ":type21" => $query[3],
            ":type23" => $query[30],
            ":address" => $query[4],
            ":tel" => $query[5],
            ":fax" => (empty($query[6]))?NULL:$query[6],
            ":website" => (empty($query[7]))?NULL:$query[7],
            ":map_lat" => (empty($query[8]))?NULL:$query[8],
            ":map_lng" => (empty($query[9]))?NULL:$query[9]
        );
        
        $sth = $this->db->prepare($sql);
        $sth->execute($NO);
        $result = $sth->errorCode();
        return $result;
    }
    
    function edit($username,$query){
        
        $sql = "UPDATE business SET name = :name, detail = :detail, type21 = :type21, type23 = :type23, address = :address, tel = :tel, fax = :fax, website = :website, map_lat = :map_lat, map_lng = :map_lng "
            ."WHERE username = :username AND id = :id";
        
        $NO = array(
            ":username" => $username,
            ":id" => $query[0],
            ":name" => $query[1],
            ":detail" => $query[2],
            ":type21" => $query[3],
            ":type23" => $query[30],
            ":address" => $query[4],
            ":tel" => $query[5],
            ":fax" => (empty($query[6]))?NULL:$query[6],
            ":website" => (empty($query[7]))?NULL:$query[7],
            ":map_lat" => (empty($query[8]))?NULL:$query[8],
            ":map_lng" => (empty($query[9]))?NULL:$query[9]
        );
        
        $sth = $this->db->prepare($sql);
        $sth->execute($NO);
        $result = $sth->errorCode();
        return $result;
        
    }
    
    function searchBusiness($key){
        
        $sql = "SELECT id, name, detail, username, address FROM business "
            ."WHERE name LIKE  :key ";
        $NO = array(
            ":key" => '%'.$key.'%'
        );
        
        $sth = $this->db->prepare($sql);
        $sth->execute($NO);
        $result = $sth->fetchAll();
        return $result;
    }
    
    function getByID($id){
        $sql = "SELECT * FROM business WHERE id = :id";
        $NO = array(
            ":id" => $id  
        );
        $sth = $this->db->prepare($sql);
        $sth->execute($NO);
        $result = $sth->fetchAll();
        return $result;
    }
    
    function maincom($username){
        $sql = "SELECT * FROM business WHERE username = :username LIMIT 1";
        $NO = array(
            ":username" => $username
        );
        $sth = $this->db->prepare($sql);
        $sth->execute($NO);
        $result = $sth->fetch();
        return $result;
    }
    
    function delete($id){
        $sql = "DELETE FROM business WHERE id = :id";
        
        $NO = array(
            ":id" => $id
        );
        $sth = $this->db->prepare($sql);
        $sth->execute($NO);
        $result = $sth->errorCode();
        return $result;
    }
}