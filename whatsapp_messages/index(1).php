<?php


require_once 'config.php';



class userData
{
    
    
    private $id;
    private $name;

    
    public function __construct($id,$name) 
    {
        $this->id = $id;
        $this->name = $name;

    }
    
    
    public static function update_user_number($id)
    {
        global $dbh;
        $sql = $dbh->prepare("UPDATE whatsapp_messages SET done_send = '1' WHERE number='$id' ");
        $sql->execute();
     
    } 
    
    public static function update_user_number_caeer($id)
    {
        global $dbh;
        $sql = $dbh->prepare("UPDATE whatsapp_messages_carre SET done_send = '1' WHERE number='$id' ");
        $sql->execute();
     
    }
    
    
    
    public static function get_user_number()
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM whatsapp_messages ");
        $sql->execute();
        $data=null;
        while($fetch = $sql->fetch(PDO::FETCH_ASSOC)){
        
        $data[]=$fetch;
        
        }
        return $data;
       
    }
    public static function get_user_number_carre()
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM whatsapp_messages_carre ");
        $sql->execute();
        $data=null;
        while($fetch = $sql->fetch(PDO::FETCH_ASSOC)){
        
        $data[]=$fetch;
        
        }
        return $data;
       
    }
    
    
}