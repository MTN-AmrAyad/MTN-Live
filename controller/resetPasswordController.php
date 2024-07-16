<?php 

$config = '../model/db_conn.php';
if(file_exists($config)){
    require_once $config;
}else{
    require_once 'db_conn.php';
}
require_once '../model/profile.php';
$id= $_COOKIE['user'];
$lang= $_GET['lang'];

$user_data = Profile::get_user_data($id);

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

//Include required PHPMailer files
	require '../includes/PHPMailer.php';
	require '../includes/SMTP.php';
	require '../includes/Exception.php';
	
	
$msg = '
<!DOCTYPE html>
<html lang="en">

    <head>
       <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

        
        <style>
        @import url("https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap");
html,body {
    font-family: "Raleway", sans-serif;  
}
.thankyou-page ._header {
    background: #149055 ;
    padding: 50px 30px;
    text-align: center;
    background:  #0B4392  url("https://managethenow.net/workshop/test3.pngg") center/cover no-repeat;
}
.thankyou-page ._header .logo {
    max-width: 100px;
    margin: 0 auto 50px;
}
.thankyou-page ._header .logo img {
    width: 100%;
}
.thankyou-page ._header h1 {
    font-size: 45px;
    font-weight: 800;
    color: white;
    margin: 0;
}
.thankyou-page ._body {
    margin: -70px 0 30px;
}
.thankyou-page ._body ._box {
    margin: auto;
    max-width: 80%;
    padding: 50px;
    background: white;
    border-radius: 3px;
    box-shadow: 0 0 35px rgba(10, 10, 10,0.12);
    -moz-box-shadow: 0 0 35px rgba(10, 10, 10,0.12);
    -webkit-box-shadow: 0 0 35px rgba(10, 10, 10,0.12);
}
.thankyou-page ._body ._box h4 {
    font-size: 16px;
    font-weight: 600;
    color: #0B4392;
}
.thankyou-page ._footer {
    text-align: center;
    padding: 50px 30px;
}

.thankyou-page ._footer .btn {
    background: #0B4392;
    color: white;
    border: 0;
    font-size: 14px;
    font-weight: 600;
    border-radius: 0;
    letter-spacing: 0.8px;
    padding: 20px 33px;
    text-transform: uppercase;
}
        
        
        </style>
    </head>

    <body>
      
<div class="thankyou-page">
    <div class="_header">
        <div class="logo">
            <img src="https://managethenow.net/wp-content/uploads/2021/11/sarAh-2.png" alt="">
        </div>
        <h1>Change!</h1>
    </div>
    <div class="_body">
        <div class="_box">
           
           
        </div>
    </div>
    <div class="_footer">
        <a class="btn" href="https://managethenow.net/mtn-live/forget_pass.php?id='. $id.'">Change Password</a>
    </div>
</div>
    </body>

</html>
' ;

//Create instance of PHPMailer
	$mail = new PHPMailer();
//Set mailer to use smtp
	$mail->isSMTP();
//Define smtp host
	$mail->Host = "smtp.gmail.com";
//Enable smtp authentication
	$mail->SMTPAuth = true;
//Set smtp encryption type (ssl/tls)
	$mail->SMTPSecure = "tls";
//Port to connect smtp
	$mail->Port = "587";
//Set gmail username
	$mail->Username = "noreply@managethenow.com";
//Set gmail password
	$mail->Password = "ijtnbtwimtuhefbo";
//Email subject
	$mail->Subject = "Reset Password";
//Set sender email
	$mail->setFrom('noreply@managethenow.com');
//Enable HTML
	$mail->isHTML(true);

//Email body
	$mail->Body = $msg;
//Add recipient
	$mail->addAddress($user_data['email']);
//Finally send email
	$mail->send();
//Closing smtp connection
	$mail->smtpClose();


 header("Location: ../profile.php?id=$id&lang=$lang");
	