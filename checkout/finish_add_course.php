
<?php  include_once 'db_conn.php';?>
<html>
    <head>
        	<meta name="viewport" content="width=device-width, initial-scale=.9">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <style>
            .wrap-login100 {
    opacity: .9;
    width: 500px;
    border-radius: 10px;
    overflow: hidden;
    padding: 0px 55px 37px 55px;
    position: absolute;
    background-color: white;
    border: 2px solid #226084;
}
            
        </style>
    </head>
    
    
    
    
    
    <body style="" >
    	

       
              <?php
              
              if($_GET['coursecode']==600){
                  
                    $name=$_POST['username'];
                  $qrcode=$_POST['password'];
                   $coursecode=8;
                 $course_type=$_POST['course_type'];
                  $attendance=$_POST['attendance'];
                   
          
            
                         
             $sql10 = "SELECT * FROM users WHERE name='$name' AND qrcode='$qrcode' ";
             $sql11 = "SELECT * FROM userData WHERE username='$name' AND password='$qrcode' ";
             $sql12 = "SELECT * FROM userData WHERE password='$qrcode' AND username='$name' ";

		$result10 = mysqli_query($conn, $sql10);
		$result11 = mysqli_query($conn, $sql11);
		$result12 = mysqli_query($conn, $sql12);
		$row = mysqli_fetch_assoc($result12);
		if(!$row){
		    echo '<div class="container text-center mt-5">';
echo '<h2>Your account is not found. Please sign up.</h2>';
echo '<a href="signup.php"><button type="button" class="btn btn-danger">Signup</button></a>';
echo '</div>';
		    exit();
		}

	if($row["course_permission$coursecode"]=='1'|| $row["course_permission$coursecode"]=='3'){
	    
                                                             echo"
                                            
                                            
  	<div class='limiter'>
		<div class='container-login100' style='width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-content: center;'>
		    

		    
			<div class='wrap-login100' style='    width: fit-content;
    top: 40%;'>
				
				
					
				
						<p class='login100-form-title p-b-34 'style='    padding-top: 25px;text-align: center;
    padding-top: 25px;
    font-size: 3rem;'>
							Thank you 
					</p>
						<h4 style='text-align: center;'>
						You already added this course !
					</h4>
					</div>
					</div>
					</div>

                                            
                                            
                                            ";
                 
            
	}else{
	    
	    	if (mysqli_num_rows($result10) === 1 ) {
	    	  //  $arr = mysqli_fetch_assoc($sql12);
	    	  //  var_dump($row);
	    	    $firstnamePay= $row['name'];
	    	    $phonePay= $row['phone'];
	    	    $emailPay= $row['email'];
			     $sqll20 = "UPDATE users SET course_code$coursecode = '$coursecode',course_permission$coursecode ='3' WHERE qrcode='$qrcode'"; 
			        
                                            mysqli_query($conn, $sqll20);
                                            echo"
                                            
                                            
  	<div class='limiter'>
		<div class='container-login100' style='width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-content: center;'>
		    

		    
			<div class='wrap-login100' style='    width: fit-content;
    top: 40%;'>
				
				
					
				
						<p class='login100-form-title p-b-34 'style='    padding-top: 25px;text-align: center;
    padding-top: 25px;
    font-size: 3rem;'>
							Thank you for Adding new Course 
					</p>
						<h4 style='text-align: center;'>
						A Confirmation Email will be Sent within 48 hours !!
					</h4>
					</div>
					</div>
					</div> ";
					header("Location: https://managethenow.net/mtn-live/checkout/index.php?fullname=$firstnamePay&email=$emailPay&phone=$phonePay");
                                            
                
			}else{
			    $referer = $_SERVER['HTTP_REFERER'].'?error=username or password is wrong';
                 header("Location: $referer");



            echo"
                                            
                                            
  	<div class='limiter'>
		<div class='container-login100' style='width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-content: center;'>
		    

		    
			<div class='wrap-login100' style='    width: fit-content;
    top: 40%;'>
				
				
					
				
						<p class='login100-form-title p-b-34 'style='    padding-top: 25px;text-align: center;
    padding-top: 25px;
    font-size: 3rem;'>
							Thank you !
					</p>
						<h4 style='text-align: center;'>
						user name or pass is not correct
					</h4>
					</div>
					</div>
					</div>

                                            
                                            
                                            ";

			}
    		if (mysqli_num_rows($result11) === 1 ) {
    		    $date = new DateTime("now", new DateTimeZone('Africa/Cairo') );
                $created_at=$date->format('Y-m-d H:i:s');
			     $sqll21 = "UPDATE userData SET user_permission='3',course_code$coursecode = '$coursecode' ,course_permission$coursecode='3', course_type = '$course_type'  , attendance = '$attendance',created_at='$created_at'   WHERE password='$qrcode'";
                                           

                       mysqli_query($conn, $sqll21);
                      
			}else{
			      $referer = $_SERVER['HTTP_REFERER'].'?error=username or password is wrong';
                 header("Location: $referer");
			}
    
	    
	}

		
                  
              }
           
        
              ?>



           
         

      </div>
    </div>
  </div>
  
</section>
        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>