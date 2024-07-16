<?php
$config = 'db_conn.php';
if(file_exists($config)){
    require_once $config;
}else{
    require_once 'db_conn.php';
}

class Profile
{
    private $id;
    private $coursecode;
    
    
    private $user;
    private $pic;
    private $name;
    private $work;
    private $city;
    private $phone;
    private $email;
    private $nationality;
    private $birthofdate;
    private $image_temp;
    private $image_name;
  
    private $pass1;
    private $pass2;
    private $old_pass;
  
    
    public function __construct($id, $coursecode,$user,$pic,$name,$work,$city,$phone,$email,$nationality,$birthofdate,$image_temp,$image_name,$pass1,$pass2,$old_pass) 
    {
        $this->id = $id;
        $this->coursecode = $coursecode;
     
        $this->user = $user;
        $this->pic = $pic;
        $this->name = $name;
        $this->work = $work;
        $this->city = $city;
        $this->phone = $phone;
        $this->email = $email;
        $this->nationality = $nationality;
        $this->birthofdate = $birthofdate;
        $this->image_temp = $image_temp;
        $this->image_name = $image_name;
      
        $this->pass1 = $pass1;
        $this->pass2 = $pass2;
        
        $this->old_pass = $old_pass;
    }
    
    public static function get_user_coursecode($id)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM users where qrcode ='$id' ");
        $sql->execute();
        $fetch = $sql->fetch(PDO::FETCH_ASSOC);
        return $fetch['coursecode'];
    }
    
    public static function get_course_data($coursecode)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM courseData where id ='$coursecode'");
        $sql->execute();
        $fetch = $sql->fetch(PDO::FETCH_ASSOC);
        return $fetch;
    }
    
     public static function get_user_data($id)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM userData where password ='$id'  ");
        $sql->execute();
      
         $fetch = $sql->fetch(PDO::FETCH_ASSOC);
        return $fetch;
    }
   
   public static function edit_profile_data($user,$pic,$name,$work,$city,$phone,$email,$nationality,$birthofdate,$image_temp,$image_name){
      
       global $dbh;
       $sql = $dbh->prepare("UPDATE userData SET
                                  name = '$name' , work = '$work', city ='$city',phone ='$phone',email='$email',birthofdate='$birthofdate',nationality='$nationality'
                                  WHERE password='$user'");
       $sql->execute();
            
    
    
     if(is_uploaded_file($image_temp))
            {
                
                $imageName = time(). $image_name;
                move_uploaded_file($image_temp, "../view/user_images/".$imageName);
                $imgpath='https://managethenow.net/mtn-live/view/user_images/'.$imageName;
                $sqll = $dbh->prepare("UPDATE userData SET  image = '$imgpath' WHERE password='$user'");
                $sqll->execute();
            }
            
              return true;
   } 
   
   public static function update_pass($pass1,$pass2,$old_pass){
     
       
         if($pass1===$pass2){
                global $dbh; 
                $sql = $dbh->prepare("UPDATE users set loginset=0 where qrcode='$old_pass' ");
                $sql->execute();
            		
                $sql1 = $dbh->prepare("UPDATE users set qrcode='$pass1'where qrcode='$old_pass' ");
                $sql1->execute();
            
            	
            	$sql2 = $dbh->prepare("UPDATE userData set password='$pass1' where password='$old_pass' ");
                $sql2->execute();
    
            	 return true;
    	
          }else{
              	 return false;
    	
              
          }
          

       
   }
 
 
}

