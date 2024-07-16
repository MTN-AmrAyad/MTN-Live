<?php
$config = 'db_conn.php';
if(file_exists($config)){
    require_once $config;
}else{
    require_once 'db_conn.php';
}

class Video
{
    
    
    private $id;
    private $coursecode;
  
    
    public function __construct($id, $coursecode) 
    {
        $this->id = $id;
        $this->coursecode = $coursecode;

    }
    
    public static function get_user_coursecode($id)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM users where qrcode ='$id' ");
        $sql->execute();
        $fetch = $sql->fetch(PDO::FETCH_ASSOC);
        return $fetch['coursecode'];
    }
    
    public static function get_videos_data($coursecode)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM courseData    where id ='$coursecode' ORDER BY id ASC");
        $sql->execute();
        $fetch = $sql->fetch(PDO::FETCH_ASSOC);
        return $fetch;
    } 
    
    public static function get_cloud_flare_videos_user_id($id)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM userData where password ='$id' ");
        $sql->execute();
        $fetch = $sql->fetch(PDO::FETCH_ASSOC);
        return $fetch['videoUserId'];
    } 
    public static function get_cloud_flare_videos_user_time($id)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM userData where password ='$id' ");
        $sql->execute();
        $fetch = $sql->fetch(PDO::FETCH_ASSOC);
        return $fetch['userStoppedTime'];
    }
 
     public static function get_videos_by_coursecode($coursecode)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM courses_videos   where coursecode = '$coursecode' ORDER BY id ASC ; ");
        $sql->execute();
        $videos =null;
        while($fetch= $sql->fetch(PDO::FETCH_ASSOC))
        {
                $videos[] = $fetch;
        }
        return $videos;
    }
    
 
}

