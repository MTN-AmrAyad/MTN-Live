<?php
$config = 'db_conn.php';
if(file_exists($config)){
    require_once $config;
}else{
    require_once 'db_conn.php';
}

class Lang
{
     
    
    private $id;
    private $lang;
  
    
    public function __construct($id, $lang) 
    {
        $this->id = $id;
        $this->lang = $lang;

    }
    
    
     public static function get_lang($id)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM userData where password ='$id' ");
        $sql->execute();
        $fetch = $sql->fetch(PDO::FETCH_ASSOC);
        return $fetch['lang'];
    }
    
    
    
       public static function get_lang_if_ar($word)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT ar FROM `lang` WHERE `en`='$word'; ");
        $sql->execute();
        $videos =null;
        while($fetch= $sql->fetch(PDO::FETCH_ASSOC))
        {
                $videos[] = $fetch;
        }
        return $videos;
    }
    
       public static function get_lang_if_en($word)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT en FROM `lang` WHERE `en`='$word'; ");
        $sql->execute();
        $videos =null;
        while($fetch= $sql->fetch(PDO::FETCH_ASSOC))
        {
                $videos[] = $fetch;
        }
        return $videos;
    }

}
