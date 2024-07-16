<?php 
session_start(); 
include "db_conn.php";
$note=$_POST['note'];
$user_name=$_POST['user_name'];
echo $user_name;
	$sqll3 = "UPDATE userData SET
                                  note = '$note'
                                  WHERE username='$user_name'";
                                  
                mysqli_query($conn, $sqll3);
                echo $note;
                	//header("Location: reviewData.php");
?>