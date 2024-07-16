

<?php  

$sname= "localhost";
$unmae= "u471974205_shg_discussion";
$password = "Z0aUKaHcF]0";

$db_name = "u471974205_shg_discussion";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}



?>






<?php

                
                
                
                
                // $coursecode=$_GET['coursecode'];
                    $char=$_GET['f-name'];
                    $full_name= $_GET['f-name']." ".$_GET['all-name'];
                    $email=$_GET['email'];
                    $city=$_GET['city'];
                    $phone=$_GET['phonenumber'];
                    $phonecode=$_GET['phonecode'];
                    $nationality=$_GET['nationality'];
                    $birth=$_GET['birthdate'];
                    $work=$_GET['work'];
                    
                    $phone_with_code=$phonecode.$phone;
                    
                    
                define('DB_HOST', 'localhost');
define('DB_NAME', 'u471974205_shg_discussion');
define('DB_USER', 'u471974205_shg_discussion');
define('DB_PASS', 'Z0aUKaHcF]0');
$dbh =  new PDO('mysql:dbhost='.DB_HOST.';dbname=' .DB_NAME , DB_USER, DB_PASS);

         global $dbh;

        $sql2 = $dbh->prepare("SELECT * FROM users_discussion");
        $sql2->execute();
        $data = null;
        while($fetch = $sql2->fetch(PDO::FETCH_ASSOC))
        {
            $data[] = $fetch;
        }
        
        
        foreach ($data as $index => $member):
            
            endforeach;
        
        if($member['email']==$email ||$member['phone']==$phone_with_code ){
            echo'
            <div class="limiter">
		<div class="container-login100">
		    

		    
			<div class="wrap-login100" style="top: 2%;transform: translate(0px, 35vh); width: initial;">
						<span class="login100-form-title p-b-34 " style="padding-top: 25px;">
							Your Phone Number Or E-mail Is Already Exists 
					    </span>
						
					</div>
					</div>
					</div>
            
            ';
            
        }else{
            $sql="INSERT INTO `users_discussion`(`full_name`, `email`, `country`, `phone`, `nationality`, `dateofbirth`,`work`) VALUES ('$full_name','$email','$city','$phone_with_code','$nationality','$birth','$work')";
                $query=mysqli_query($conn, $sql);
                echo'
                <div class="limiter">
		<div class="container-login100">
		    

		    
			<div class="wrap-login100" style="top: 2%;transform: translate(0px, 35vh); width: initial;">
						<span class="login100-form-title p-b-34 " style="padding-top: 25px;">
							Thank you 
					    </span>
						<h4 class=" ">
						You Have  Confirmed Your Data
					</h4>
					</div>
					</div>
					</div>
                
                ';
        }
                
             
               
                         
            
                //  header("Location:upload.php?email=$email");
	               // exit();
       
                    
 



?>


<!doctype html>
<html lang="en">
<head>
	<title> Thank you </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/mtn_.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<style>
#myDIV {
  height:200px; 
  border: 10px dashed black;
  padding: 25px;
  background-attachment: fixed;
  background-position: center; }

    @media (max-width: 430px) {
        .wrap-login100{
            width:90%;
        }
    }
</style>
  <body>
	
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	
	<script>
	    
	   
	</script>

</html>