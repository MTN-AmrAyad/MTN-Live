<?php 

include "db_conn.php";
mysqli_set_charset($conn,'utf8');
		$note=$_POST['note'];
                    $user_name=$_POST['user_name'];
            
                 	$sqll31 = "UPDATE userData SET note = '$note' WHERE username='$user_name'";
                                              
                         mysqli_query($conn, $sqll31);

?>