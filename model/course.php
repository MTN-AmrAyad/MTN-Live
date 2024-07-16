<?php
$config = 'db_conn.php';
if(file_exists($config)){
    require_once $config;
}else{
    require_once 'db_conn.php';
}

class Course
{
    private $id;
    private $coursecode;
    
  public function __construct($id, $coursecode) 
    {
        $this->id = $id;
        $this->coursecode = $coursecode;
    
    }
    
    
        public static function get_courses_data($id){
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM users WHERE qrcode ='$id';"); 
        $sql->execute();
        $data = null;
        while($fetch = $sql->fetch(PDO::FETCH_ASSOC))
        {
            $data[] = $fetch;
        }
             return $data;
            
            
        }
        public static function get_courses_img($coursecode){
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM courseData WHERE id ='$coursecode';"); 
        $sql->execute();
        $data = null;
        $fetch = $sql->fetch(PDO::FETCH_ASSOC);
        return $fetch['course_img'];
        
        }
       
        
        public static function get_courses_color($coursecode){
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM courseData WHERE id ='$coursecode';"); 
        $sql->execute();
        $data = null;
        $fetch = $sql->fetch(PDO::FETCH_ASSOC);
        return $fetch['course_color'];
        
        } 
        public static function get_courses_bg_bannar($coursecode){
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM courseData WHERE id ='$coursecode';"); 
        $sql->execute();
        $data = null;
        $fetch = $sql->fetch(PDO::FETCH_ASSOC);
        return $fetch['course_bg_color'];
        
        } 
        public static function get_courses_name($coursecode){
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM courseData WHERE id ='$coursecode';"); 
        $sql->execute();
        $data = null;
        $fetch = $sql->fetch(PDO::FETCH_ASSOC);
        return $fetch['course_name'];
        
        }
         public static function get_courses_name_if_ar($coursecode){
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM courseData WHERE id ='$coursecode';"); 
        $sql->execute();
        $data = null;
        $fetch = $sql->fetch(PDO::FETCH_ASSOC);
        return $fetch['course_name_ar'];
        
        }
      public static function get_courses_calender($coursecode){
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM course_calander WHERE course_code ='$coursecode';"); 
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