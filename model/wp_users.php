<?php
$config = 'db_conn.php';
if(file_exists($config)){
    require_once $config;
}else{
    require_once 'db_conn.php';
}

class wpUsers
{

    public function __construct() 
    {
    

    }
   
     public static function wp_users()
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM `wp_users` ");
        $sql->execute();
        $data=null;
        while($fetch = $sql->fetch(PDO::FETCH_ASSOC)){
        
        $data[]=$fetch;
        
        }
        return $data;
       
    }
}