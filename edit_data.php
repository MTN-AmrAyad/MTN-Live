<?php

session_start();

include "db_conn.php";



                $user_data_type=$_POST['user_data_type'];
                  $user_name=$_POST['user_name'];
                  $new_value=$_POST['new_value'];
            
                
	$sqll = "UPDATE userData SET $user_data_type = '$new_value' WHERE username='$user_name'";
            mysqli_query($conn, $sqll);  