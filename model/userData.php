<?php
$config = 'db_conn.php';
if(file_exists($config)){
    require_once $config;
}else{
    require_once 'db_conn.php';
}

class userData
{
    
    
    private $id;
    private $name;

    
    public function __construct($id,$name) 
    {
        $this->id = $id;
        $this->name = $name;

    }
    
    
    public static function get_user_name_certificate($id)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM userData where password ='$id' ");
        $sql->execute();
        $fetch = $sql->fetch(PDO::FETCH_ASSOC);
        return $fetch['name_certificate'];
    }
    
    
    
    public static function get_user_data($id)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM userData where password ='$id' ");
        $sql->execute();
        $data=null;
        while($fetch = $sql->fetch(PDO::FETCH_ASSOC)){
        
        $data[]=$fetch;
        
        }
        return $data;
       
    }
    public static function get_checker($id)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM courseData where id ='$id' ");
        $sql->execute();
        $fetch = $sql->fetch(PDO::FETCH_ASSOC);
        return $fetch['certificat'];
    }
    public static function save_user_name_certificate($id,$name)
    {
        global $dbh;
        $sql = $dbh->prepare("UPDATE userData SET name_certificate='$name' where password ='$id' ");
        $sql->execute();
        $fetch = $sql->fetch(PDO::FETCH_ASSOC);
        return $fetch;
    }
    
    
   
    
}
    