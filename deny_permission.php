     <?php
     
// mysqli_set_charset($conn,'utf8');

         require_once 'model/db_conn.php';


    global $dbh;
    
    echo'helllo !!';
   
      
       if(!empty($_POST['permissions'])){
           foreach($_POST['permissions'] as $permissions ){
                $X='course_list_'.$permissions;
                   $sql_per = "UPDATE userData SET   course_permission$_POST[$X] = '0' WHERE username='$permissions'";

                   $dbh->exec($sql_per);
                   
                   
                          $sql_perr = "UPDATE users SET   course_permission$_POST[$X] = '0' WHERE name='$permissions'";

                   $dbh->exec($sql_perr);
                   
                   

           }
       }
       
 

   ?>       
