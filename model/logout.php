<?php 
session_start(); 

$config = 'db_conn.php';
if(file_exists($config)){
    require_once $config;
}else{
    require_once 'db_conn.php';
}




    unset($_COOKIE['user']); 
    setcookie('user', null, -1, '/'); 


session_unset();
session_destroy();

	$qrcode_text = $_COOKIE['user'];

global $dbh;
        
	$sqll =  $dbh->prepare("UPDATE users SET loginset = '0' , login_counter = '0'  WHERE qrcode='$qrcode_text'");

             $sqll->execute();
             
  $sqll2 = $dbh->prepare("UPDATE userData SET loginset = '0' , login_counter='0' WHERE password='$qrcode_text'");

                $sqll2->execute();
             
                
             if($_COOKIE['user_status'] == 1){
                 header("Location: ../login.php");
                 exit();   
                }else{
                  header("Location: ../login.php");
                  exit();  
                }

