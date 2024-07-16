<?php
include_once 'db_conn.php';
session_start();

if(!$_SESSION){
    header("location : index.php");
    exit();
    
}else{
    
    
      $fullname= $_SESSION['fullname'];
      $email= $_SESSION['email'];
      $phone= $_SESSION['phone'];
      $coursecode= $_SESSION['coursecode'];
 
    

          

          $sql = "SELECT * FROM `userData` WHERE `email`='$email' OR `phone`='$phone' ";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($result);
          if ($row['email']==$email ||  $row['phone']==$phone) {
             $password3= $row['password'];
              
                    $sqll20 = "UPDATE users SET user_permission='1',coursecode='$coursecode',course_permission$coursecode ='1' WHERE `qrcode`='$password3'"; 
                    mysqli_query($conn, $sqll20);
                    
                    $sqll21 = "UPDATE userData SET user_permission='1',course_code$coursecode = '$coursecode',coursecode='$coursecode',course_permission$coursecode ='1' WHERE `password`='$password3'"; 
                    mysqli_query($conn, $sqll21);
                    header("Location: thankyou.php");
                    // header("Location: https://managethenow.net/mtn-live/pay_pages/");
              
          }else{
              
            
                  $birth=0;
                  $city=0;
                  $nationality=0;
                  $work=0;
                  $salesman="MTN-gateway";
                  $course_type=0;
                  $attendance=0;
              
            
                $time = time();
                $date = date("Y-m-d");;
                $birth =  $date;

                $birth_new = date("d-m-Y", strtotime($birth));
                $birth_new = str_replace('-', '', $birth_new);

                $namechar = str_split($fullname, 1);
                $number = str_split($birth_new * $phone, 5);

                $current_time = localtime($time, true); // Get current time components

                $seconds = sprintf("%02d", $current_time['tm_sec']); // Add leading zero if less than 10
                $minutes = sprintf("%02d", $current_time['tm_min']); // Add leading zero if less than 10
                $hours = sprintf("%02d", $current_time['tm_hour']); // Add leading zero if less than 10

                $res = $namechar[0] . $number[0].$seconds ; // Include sec, min, hrs in $name

                $name = $namechar[0] .str_replace(' ', '', $char) ."MTN". $minutes . $seconds;

                echo $name;
                echo "<br>";
                echo $res;

//               $phone_with_code=$phonecode.$phone;
              
            
             
			    $date = new DateTime("now", new DateTimeZone('Africa/Cairo') );
             $created_at=$date->format('Y-m-d H:i:s');
                  $sql="INSERT INTO users (qrcode,name,loginset,coursecode,user_course_counter,user_permission,course_code$coursecode,course_permission$coursecode)VALUES
                          ('$res','$name','0','$coursecode',0,1,$coursecode,1)";
                  $query=mysqli_query($conn, $sql);
                   
    
                
                  $sql2="INSERT INTO userData (name,city,phone,work,email,birthofdate,coursecode,nationality,user_permission,course_permission$coursecode,username,password,salesman,course_code$coursecode,created_at,course_type,attendance)VALUES ('$fullname','$city','$phone_with_code','$work','$email','$birth','$coursecode','$nationality',1,1,'$name','$res','$salesman','$coursecode','$created_at','$course_type','$attendance')";

                  $query2=mysqli_query($conn, $sql2); 
                   
                   
                  $first_name=$_POST['f-name'];
                  $last_name=$_POST['all-name'];
                  $sql3="INSERT INTO wp_users (id, first_name, last_name, email, user_name, phone, County, course_id) VALUES (' ','$fullname','$last_name','$email','$name','$phone_with_code','$nationality','$coursecode')";

                 $query3= mysqli_query($conn, $sql3); 


            //   $firstnamePay=$_POST['f-name'];
            //   $allnamePay=$_POST['all-name'];
            //   $emailPay=$_POST['email'];
            //   $phonePay=$phone_with_code;
               
                                 
                // 	header("Location: https://managethenow.net/mtn-live/checkout/index.php?first_name=$firstnamePay&last_name=$allnamePay&email=$emailPay&phone=$phonePay");
                	header("Location: thankyou.php");
			
			
             
          }
          
          
      }
      
      



?>