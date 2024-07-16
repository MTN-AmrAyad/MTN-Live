<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'u471974205_livesystem');
define('DB_USER', 'u471974205_livesystem');
define('DB_PASS', '1bf#xLyAvD#');
$dbh =  new PDO('mysql:dbhost='.DB_HOST.';dbname=' .DB_NAME , DB_USER, DB_PASS);

    /* set the PDO error mode to exception */
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     /*sql to delete a record*/
     $id=$_GET["id"] ;
    $sql = "UPDATE users SET loginset = '0' , login_counter = '0'   WHERE name='$id'";

    /*use exec() because no results are returned*/
    $dbh->exec($sql);
    
    $sql2="UPDATE userData SET loginset = '0' , login_counter='0'  WHERE username='$id'";
     $dbh->exec($sql2);
    $user=$_COOKIE['user'];

    header("Location: https://managethenow.net/mtn-live/reviewData.php?id=$user");
die();

?>