
     
    <?php

$sname= "localhost";
$unmae= "u471974205_livesystem";
$passwordd = "1bf#xLyAvD#";

$db_name = "u471974205_livesystem";

$conn = mysqli_connect($sname, $unmae, $passwordd, $db_name);


mysqli_set_charset($conn,'utf8');
     //Define name spaces
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

//Include required PHPMailer files
	require 'includes/PHPMailer.php';
	require 'includes/SMTP.php';
	require 'includes/Exception.php';
       
    define('DB_HOST', 'localhost');
define('DB_NAME', 'u471974205_livesystem');
define('DB_USER', 'u471974205_livesystem');
define('DB_PASS', '1bf#xLyAvD#');
$dbh =  new PDO('mysql:dbhost='.DB_HOST.';dbname=' .DB_NAME , DB_USER, DB_PASS);
    global $dbh;
  
 
       if(!empty($_POST['permissions'])){
            
           
         $p= $_COOKIE['user'];
    
           	$sql = "SELECT * FROM users WHERE qrcode='$p'";


		$result = mysqli_query($conn, $sql);
		
			$row = mysqli_fetch_assoc($result);

		$filter_course_code = $_POST['filter_course_code_num'];
		
			$u=$row['name'];
		
           foreach($_POST['permissions'] as $permissions ){
               
               
                    	$sqll = "SELECT * FROM users WHERE name='$permissions'";


		$resultt = mysqli_query($conn, $sqll);
		
			$roww = mysqli_fetch_assoc($resultt);
                                                                                         
                              
                                            $course_names = array("n","Brain CT Scan", "التواصل بين الذكر والأنثى", 
                                            "Therapy GYM قعدة رجالة - مسجل",
                                            "Therapy GYM الأنوثة - مسجل ",
                                            "Therapy GYM Pregnancy",
                                            "EBT 1 محو الأمية الشعورية
","EBT 2 التشخيص والعلاج
","أدم وحواء - المستوى الأساسي
","آدم وحواء – الزواج
","CTRL Medicine - Organic

","تدريبات السعادة ",
"Lüscher CDT
","CPC",
"Therapy GYM Values
"

,
"EBT2 – Adv. Level",
"EstroGYM","الراجل الكسيب – تدريب شامل
","CTRL Medicine – Psychologic Part
","CTRL Medicine – Anatomical Part

"
,"حياة الأنثى ف العمل",

"Brain CT Scan
Trainings",
"Self-healing Guide - Organic part",
"Therapy GYM الفطرة",
"Estro Gym - Nov ",
"tgvalues_special_edition ",
"الأنوثة_special_edition ",
"الراجل-الكسيب-نوفمبر-2022",
"الراجل كسيب يونيو",
"ثيرابي جيم الفطرة مايو  ",
"تدريبات الأنوثة -الدورة الرابعة",
"EBM practitioner",
"مرشد الاتزان الذاتي",
); 
  $X='course_list_'.$permissions;
  
    
    if(!empty($_POST[$X])){
       
            
          
              $sqlwww = "UPDATE userData SET user_permission = '1' , course_code$_POST[$X] = '$_POST[$X]',accepted_by='$u' ,  course_permission$_POST[$X] = '1'  WHERE username='$permissions'";
     
                   $dbh->exec($sqlwww);
            
                    $sqleeee = "UPDATE users SET user_permission = '1' ,  course_code$_POST[$X] = '$_POST[$X]',  course_permission$_POST[$X] = '1'  WHERE name='$permissions'";
 
                   $dbh->exec($sqleeee);
          

    } else{
         $sql_per = "UPDATE userData SET user_permission = '1' , course_code$filter_course_code = '$filter_course_code',accepted_by='$u' , course_permission$filter_course_code = '1'  WHERE username='$permissions'";
     
                   $dbh->exec($sql_per);
            
                    $sql_perr = "UPDATE users SET user_permission = '1' ,  course_code$filter_course_code = '$filter_course_code' ,course_permission$filter_course_code = '1' WHERE name='$permissions'";
 
                   $dbh->exec($sql_perr);
    }

                            
                                 

                   
                   
                     $sql9 = $dbh->prepare("SELECT * FROM userData  WHERE username='$permissions' ");
                   
        $sql9->execute();
         $data5 = null;
        while($f1=$sql9->fetch(PDO::FETCH_ASSOC))
        {
            $data5[] = $f1;
        }
        
              foreach ($data5 as $index => $membeerr):
  $phone=$membeerr['phone'];

  $user_name=$membeerr['username'];
                  $password=$membeerr['password'];
                   $email=$membeerr['email'];
                   $name=$membeerr['name'];
                   $sales_man=$membeerr['salesman'];
                   $course_type=$membeerr['course_type'];
                   $approve=$membeerr['accepted_by'];
                   $coursename56=$course_names[$_POST[$X]];

$to = "$email";


      $date = new DateTime("now", new DateTimeZone('Africa/Cairo') );
             $created_at=$date->format('Y-m-d H:i:s');
   global $dbh;
        $sql67 = $dbh->prepare("INSERT INTO `accounting` (`id`, `user_id`, `user_name`, `user_phone`, `note`, `time_to_approve`, `course_name`, `sales_man`, `course_type`, `email`,`approve_by`) VALUES (' ','$password','$name','$phone','0','$created_at','$coursename56','$sales_man','$course_type','$email','$approve') ");
        $sql67->execute();

                                    endforeach;


                
        



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
    background:  #0B4392  center/cover no-repeat;
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
        <h1>Thank You!</h1>
    </div>
    <div class="_body">
        <div class="_box">
            <h4>
            

                <strong>Your Data to login for '.$course_names[$_POST[$X]].' course is</strong><br> User Name : '. $user_name.'<br>
Password : '.$password.'  
            </h4>
            <p>
                Thanks a bunch for filling that out. It means a lot to us, just like you do! We really appreciate you giving us a moment of your time today. Thanks for being you.
                note: 
                this video for the new web site steps 
                
                https://youtu.be/km3vgpkZOW4  

            </p>
        </div>
    </div>
    <div class="_footer">
        <a class="btn" href="https://managethenow.net/mtn-live/">Login</a>
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
	$mail->Subject = "Login Info";
//Set sender email
	$mail->setFrom('noreply@managethenow.com');
//Enable HTML
	$mail->isHTML(true);

//Email body
	$mail->Body = $msg;
//Add recipient
	$mail->addAddress($to);
//Finally send email
	$mail->send();
//Closing smtp connection
	$mail->smtpClose();
                 
    
           }
       }
       sleep(30);
       
       
     
$message = '
Dear '.$membeerr['name'].', 
Thank you for signing up with '.$course_names[$_POST[$X]].' 
We wish to remind you that your account details (User name & Password) has been sent to your ('.$membeerr['email'].')

For any queries, please reach out to us

Thank you
MTN Team

You username is. :

'.$user_name.'

Your password is :

'.$password.'

login link is

https://managethenow.net/mtn-live/



note : you can find out how to use our system from this video

https://youtu.be/km3vgpkZOW4

عزيزي '.$membeerr['name'].'
شكراً لك على الاشتراك في '.$course_names[$_POST[$X]].' 
نود أن نذكرك بأنه تم إرسال تفاصيل حسابك (اسم المستخدم وكلمة المرور) إلى عنوان ('.$membeerr['email'].')

لأية استفسارات ، يرجى التواصل معنا

شكراً  .. فريق  MTN

اسم المستخدم و الخاص بك هو 

'.$user_name.'

كلمة السر الخاصه بك هي 

'.$password.'

لينك الدخول هو 

https://managethenow.net/mtn-live/

ملحوظة :

يمكن لك معرفة طريقة استخدام mtn live system من هذا الفديو التوضيحي
  
https://youtu.be/km3vgpkZOW4  
  
  '  ;
  
$key = '53e6845a7bc50f05f3bee7133ebe9994690f1d6aa78d56df'; //this is demo key please change with your own key
$url = 'http://116.203.191.58/api/send_message';




    $data = array(
      "phone_no"  => $phone,
      "key"       => $key,
      "message"   => $message,
      "skip_link" => True, // This optional for skip snapshot of link in message
      "flag_retry"  => "on", // This optional for retry on failed send message
      "pendingTime" => 3 // This optional for delay before send message
    );
    $data_string = json_encode($data);

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_VERBOSE, 0);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
    curl_setopt($ch, CURLOPT_TIMEOUT, 360);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt(
      $ch,
      CURLOPT_HTTPHEADER,
      array(
        'Content-Type: application/json',
        'Content-Length: ' . strlen($data_string)
      )
    );
    $res = curl_exec($ch);
    curl_close($ch);



 
  

   ?>       