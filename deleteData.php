<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'u471974205_livesystem');
define('DB_USER', 'u471974205_livesystem');
define('DB_PASS', '1bf#xLyAvD#');
$dbh =  new PDO('mysql:dbhost='.DB_HOST.';dbname=' .DB_NAME , DB_USER, DB_PASS);

    /* set the PDO error mode to exception */
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       $admin_pass=$_COOKIE['name'];
       $id= $_POST["user_delete"] ;
       
    /*   $sqll = $dbh->prepare("SELECT * FROM userData where id='$id'");
       $sqll->execute();

       $fetch = $sqll->fetch(PDO::FETCH_ASSOC);
       $pass= $fetch['password'];  
     
   */



    /* $sql = "DELETE FROM userData WHERE id='$id'";
    $dbh->exec($sql);
    */
  
  $sql = "UPDATE  userData SET deleted_by = '$admin_pass'  , restored_by = '0',user_permission=2,course_permission1='2',course_permission2='2',course_permission3='2',course_permission4='2',course_permission5='2',course_permission6='2',course_permission7='2',course_permission8='2',course_permission9='2',course_permission10='2',course_permission11='2',course_permission12='2',course_permission13='2',course_permission14='2',course_permission15='2',course_permission16='2',course_permission17='2',course_permission18='2',course_permission19='2',course_permission20='2',course_permission21='2' WHERE password='$id'";
    $dbh->exec($sql);
  
  
 /*    $sql3 = $dbh->prepare("SELECT * FROM users where qrcode='$pass'");
 
        $sql3->execute();
        $data = null;
        while($fetch3 = $sql3->fetch(PDO::FETCH_ASSOC))
        {
            $data[] = $fetch3;
        }
       $id2= $data[0]['id'];
   
  */
  

  
    $sql2="DELETE FROM users WHERE qrcode='$id'";
    $dbh->exec($sql2);
     
     
     
     
   

?>