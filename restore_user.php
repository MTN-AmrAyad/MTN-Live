<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'u471974205_livesystem');
define('DB_USER', 'u471974205_livesystem');
define('DB_PASS', '1bf#xLyAvD#');
$dbh =  new PDO('mysql:dbhost='.DB_HOST.';dbname=' .DB_NAME , DB_USER, DB_PASS);

    /* set the PDO error mode to exception */
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       $admin_pass=$_COOKIE['name'];
       $user_restore= $_POST["user_restore"] ;
       echo $user_restore;
       $sqll = $dbh->prepare("SELECT * FROM userData where password='$user_restore'");
       $sqll->execute();

       $fetch = $sqll->fetch(PDO::FETCH_ASSOC);
       $pass= $fetch['password'];  
       $user_name= $fetch['username'];  
       $coursecode= $fetch['coursecode']; 
       
       $course_code1= $fetch['course_code1'];  
       $course_code2= $fetch['course_code2'];  
       $course_code3= $fetch['course_code3'];  
       $course_code4= $fetch['course_code4'];  
       $course_code5= $fetch['course_code5'];  
       $course_code6= $fetch['course_code6'];  
       $course_code7= $fetch['course_code7'];  
       $course_code8= $fetch['course_code8'];  
       $course_code9= $fetch['course_code9'];  
       $course_code10= $fetch['course_code10'];  
       $course_code11= $fetch['course_code11'];  
       $course_code12= $fetch['course_code12'];  
       $course_code13= $fetch['course_code13'];  
       $course_code14= $fetch['course_code14'];  
       $course_code15= $fetch['course_code15'];  
       $course_code16= $fetch['course_code16'];  
       $course_code17= $fetch['course_code17'];  
       $course_code18= $fetch['course_code18'];  
       $course_code19= $fetch['course_code19'];  
       $course_code20= $fetch['course_code20'];  
       $course_code21= $fetch['course_code21'];
       
       
       
       $user_permission=$fetch['user_permission'];
       $course_permission1=$fetch['course_permission1'];
       $course_permission2=$fetch['course_permission2'];
       $course_permission3=$fetch['course_permission3'];
       $course_permission4=$fetch['course_permission4'];
       $course_permission5=$fetch['course_permission5'];
       $course_permission6=$fetch['course_permission6'];
       $course_permission7=$fetch['course_permission7'];
       $course_permission8=$fetch['course_permission8'];
       $course_permission9=$fetch['course_permission9'];
       $course_permission10=$fetch['course_permission10'];
       $course_permission11=$fetch['course_permission11'];
       $course_permission12=$fetch['course_permission12'];
       $course_permission13=$fetch['course_permission13'];
       $course_permission14=$fetch['course_permission14'];
       $course_permission15=$fetch['course_permission15'];
       $course_permission16=$fetch['course_permission16'];
       $course_permission17=$fetch['course_permission17'];
       $course_permission18=$fetch['course_permission18'];
       $course_permission19=$fetch['course_permission19'];
       $course_permission20=$fetch['course_permission20'];
       $course_permission21=$fetch['course_permission21'];
   
   
       $sqllw = $dbh->prepare("SELECT * FROM users where qrcode='$user_restore'");
       $sqllw->execute();

       $fetchw = $sqllw->fetch(PDO::FETCH_ASSOC);
       $passw= $fetchw['qrcode']; 
       echo $passw;

if(empty($passw)){
  
  $sql = "INSERT INTO users(qrcode,name,user_status,loginset,coursecode,user_permission,course_code1,course_code2,course_code3,course_code4,course_code5,course_code6,course_code7,course_code8,course_code9, course_code10,course_code11,course_code12,course_code13,course_code14,course_code15,course_code16,course_code17,course_code18,course_code19,course_code20,course_code21,  course_permission1 ,  course_permission2 ,  course_permission3 ,  course_permission4 ,  course_permission5 ,  course_permission6 ,  course_permission7 ,  course_permission8 ,  course_permission9 ,  course_permission10 ,  course_permission11 ,  course_permission12 ,  course_permission13 ,  course_permission14 ,  course_permission15 ,  course_permission16 ,  course_permission17 ,  course_permission18 ,  course_permission19 ,  course_permission20 ,  course_permission21 ) VALUES ('$pass','$user_name','0','0','$coursecode','$user_permission','$course_code1','$course_code2','$course_code3','$course_code4','$course_code5','$course_code6','$course_code7','$course_code8','$course_code9','$course_code10','$course_code11','$course_code12','$course_code13','$course_code14','$course_code15','$course_code16','$course_code17','$course_code18','$course_code19','$course_code20','$course_code21','$course_permission1','$course_permission2','$course_permission3','$course_permission4','$course_permission5','$course_permission6','$course_permission7','$course_permission8','$course_permission9','$course_permission10','$course_permission11','$course_permission12','$course_permission13','$course_permission14','$course_permission15','$course_permission16','$course_permission17','$course_permission18','$course_permission19','$course_permission20','$course_permission21')";
    $dbh->exec($sql);
  
}
    
     
       $sqllw2 = $dbh->prepare("UPDATE  userData SET restored_by = '$admin_pass' , deleted_by = '0' WHERE password='$user_restore'");
       $sqllw2->execute();
 
     
   
?>