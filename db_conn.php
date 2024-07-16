<?php

 $sname= "localhost";
 $unmae= "u471974205_livesystem";
 $password = "1bf#xLyAvD#";

 $db_name = "u471974205_livesystem";

 $conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
 }

?>
