<?php
$config = 'db_conn.php';
if(file_exists($config)){
    require_once $config;
}else{
    require_once 'db_conn.php';
}

class Certificate
{
    private $id;

  public function __construct($id) 
    {
        $this->id = $id;

    }
    
    
       
//       public static function get_certificate($id){
//         global $dbh;
//         $sql = $dbh->prepare("SELECT * FROM certificat WHERE qrcode ='$id';"); 
//         $sql->execute();
//         $data = null;
//  while($fetch = $sql->fetch(PDO::FETCH_ASSOC))
//         {
//             $data[] = $fetch;
//         }
//              return $data;
                    
//         }


       public static function get_certificate($id){
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM courseData WHERE id ='$id';"); 
        $sql->execute();
        $data = null;
 while($fetch = $sql->fetch(PDO::FETCH_ASSOC))
        {
            $data[] = $fetch;
        }
             return $data;
                    
        }
    
}
    
    ?>