
<?php  include_once 'db_conn.php';?>
<html>
    <head>
        	<meta name="viewport" content="width=device-width, initial-scale=.9">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    
    <?php  if($_GET['coursecode'] == 12){
    $background = "https://managethenow.net/livesystem/Untitled-1 (2).png";
    }else if ($_GET['coursecode'] == 13){
         $background ="https://managethenow.net/livesystem/cpc_icon.png";
    }else{
        $background ="https://managethenow.net/livesystem/estro_space.png";
    }
    ?>
    
    
    
    <body style="background-image:url('<?php echo  $background   ?> ');background-blend-mode: multiply; background-color: #14141433;" >
    
    
    

        
        <section class="vh-100" >
  <div class="container h-100">
    <div class="row d-flex justify-content-center  h-100" >
      <div class="col-xl-9">

      <div class="col-md-12 ps-5">


              </div>
                


    
</div>

        <div class="card" style="border-radius: 15px;height: 550px;box-shadow: 4px 5px 16px 10px rgb(0 0 0 / 33%); overflow: hidden; " >
          <div class="card-body" style='padding: 5rem 1rem;'>
              <?php
              
              if($_GET['coursecode']==600){
                  
                  
                  
                  
                    $char=$_POST['f-name'];
                    $full_name= $_POST['f-name']." ".$_POST['all-name'];
                  $birth=$_POST['birthdate'];
                  $phone=$_POST['phonenumber'];
                  $phonecode=$_POST['phonecode'];
                  $city=$_POST['city'];
                  $nationality=$_POST['nationality'];
                  $work=$_POST['work'];
                  $email=$_POST['email'];
                  $salesman=$_POST['salesman'];
                  $coursecode=8;

                  $course_type=$_POST['course_type'];
                  $attendance=$_POST['attendance'];


             // $full_name1=$_POST['l-name'];
               $birth_new=   date("d-m-Y", strtotime($birth)); 
               $birth_new = str_replace('-', '', $birth_new);
     
                
                  $namechar=str_split($char,1);
                  $number= str_split($birth_new * $phone,5);
                  $res=$namechar[0].$number[0];
                
        
                
            $name= str_replace(' ', '', $char).substr($birth_new,0, 4);

              $phone_with_code=$phonecode.$phone;
              
            
           	$sql_h = "SELECT qrcode FROM users WHERE qrcode='$res'";
           	$sql_e = "SELECT email FROM userData WHERE email='$email'";


		$result_h = mysqli_query($conn, $sql_h);
		$result_e = mysqli_query($conn, $sql_e);
		$phonedb=mysqli_fetch_assoc($result_h);
		$emaildb=mysqli_fetch_assoc($result_e);

			if($phonedb["qrcode"] == $res ){
                	header("Location:f_thankyou.php");

                              exit();  
                           
			}elseif($emaildb["email"] == $email){
			    
			    
			    	header("Location:f_thankyou.php");

                              exit();  
			}else {    
			    $date = new DateTime("now", new DateTimeZone('Africa/Cairo') );
             $created_at=$date->format('Y-m-d H:i:s');
  $sql="INSERT INTO users (qrcode,name,loginset,coursecode,user_course_counter,user_permission,course_code$coursecode,course_permission$coursecode)VALUES
                          ('$res','$name','0','$coursecode',0,1,$coursecode,1)";
                   $query=mysqli_query($conn, $sql);
                   
    
                
                  $sql2="INSERT INTO userData (name,city,phone,work,email,birthofdate,coursecode,nationality,user_permission,course_permission$coursecode,username,password,salesman,course_code$coursecode,created_at,course_type,attendance)VALUES ('$full_name','$city','$phone_with_code','$work','$email','$birth','$coursecode','$nationality',1,1,'$name','$res','$salesman','$coursecode','$created_at','$course_type','$attendance')";

                   $query2=mysqli_query($conn, $sql2); 
                   
                   
                   $first_name=$_POST['f-name'];
                   $last_name=$_POST['all-name'];
 $sql3="INSERT INTO wp_users (id, first_name, last_name, email, user_name, phone, County, course_id) VALUES (' ','$first_name','$last_name','$email','$name','$phone_with_code','$nationality','$coursecode')";

                 $query3= mysqli_query($conn, $sql3); 


               $firstnamePay=$_POST['f-name'];
               $allnamePay=$_POST['all-name'];
               $emailPay=$_POST['email'];
               $phonePay=$phone_with_code;
               
                                
                	header("Location: https://managethenow.net/mtn-live/checkout/index.php?first_name=$firstnamePay&last_name=$allnamePay&email=$emailPay&phone=$phonePay");
			}
			
                  
                  
                  
                  
                  
                  
                  
                  
              }else{
                  
              
              
              
              
                    $char=$_POST['f-name'];
                    $full_name= $_POST['f-name']." ".$_POST['all-name'];
                  $birth=$_POST['birthdate'];
                  $phone=$_POST['phonenumber'];
                  $phonecode=$_POST['phonecode'];
                  $city=$_POST['city'];
                  $nationality=$_POST['nationality'];
                  $work=$_POST['work'];
                  $email=$_POST['email'];
                  $salesman=$_POST['salesman'];
                  $coursecode=$_GET['coursecode'];

                  $course_type=$_POST['course_type'];
                  $attendance=$_POST['attendance'];


             // $full_name1=$_POST['l-name'];
               $birth_new=   date("d-m-Y", strtotime($birth)); 
               $birth_new = str_replace('-', '', $birth_new);
     
                
                  $namechar=str_split($char,1);
                  $number= str_split($birth_new * $phone,5);
                  $res=$namechar[0].$number[0];
                
        
                
            $name= str_replace(' ', '', $char).substr($birth_new,0, 4);

              $phone_with_code=$phonecode.$phone;
              
            
           	$sql_h = "SELECT qrcode FROM users WHERE qrcode='$res'";
           	$sql_e = "SELECT email FROM userData WHERE email='$email'";


		$result_h = mysqli_query($conn, $sql_h);
		$result_e = mysqli_query($conn, $sql_e);
		$phonedb=mysqli_fetch_assoc($result_h);
		$emaildb=mysqli_fetch_assoc($result_e);

			if($phonedb["qrcode"] == $res ){
                	header("Location:f_thankyou.php");

                              exit();  
                           
			}elseif($emaildb["email"] == $email){
			    
			    
			    	header("Location:f_thankyou.php");

                              exit();  
			}else {    
			    $date = new DateTime("now", new DateTimeZone('Africa/Cairo') );
             $created_at=$date->format('Y-m-d H:i:s');
  $sql="INSERT INTO users (qrcode,name,loginset,coursecode,user_course_counter,user_permission,course_code$coursecode)VALUES ('$res','$name','0','$coursecode',0,3,$coursecode)";
                   $query=mysqli_query($conn, $sql);
                   
    
                
                  $sql2="INSERT INTO userData (name,city,phone,work,email,birthofdate,coursecode,nationality,user_permission,course_permission$coursecode,username,password,salesman,course_code$coursecode,created_at,course_type,attendance)VALUES ('$full_name','$city','$phone_with_code','$work','$email','$birth','$coursecode','$nationality',3,3,'$name','$res','$salesman','$coursecode','$created_at','$course_type','$attendance')";

                   $query2=mysqli_query($conn, $sql2); 
                   
                   
                   $first_name=$_POST['f-name'];
                   $last_name=$_POST['all-name'];
 $sql3="INSERT INTO wp_users (id, first_name, last_name, email, user_name, phone, County, course_id) VALUES (' ','$first_name','$last_name','$email','$name','$phone_with_code','$nationality','$coursecode')";

                 $query3= mysqli_query($conn, $sql3); 


               
                                
                	header("Location: f.php");
			}
			
			
			
			}
			
			
              ?>



           
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>