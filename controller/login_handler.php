<?php
$config = '../model/db_conn.php';
if(file_exists($config)){
    require_once $config;
}else{
    require_once 'db_conn.php';
}

if (isset($_POST['qrcode_text'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$qrcode_text = validate($_POST['qrcode_text']);
	$username = validate($_POST['username']);
  

	if (empty($qrcode_text)) {
		header("Location: ../login.php?error=Password is required");
	    exit();
	}else{
	    
	     global $dbh;
        $sql_pass = $dbh->prepare("SELECT * FROM users WHERE qrcode='$qrcode_text'");
        $sql_pass->execute();
        $fetch = $sql_pass->fetch(PDO::FETCH_ASSOC);
	
echo is_array($fetch);

		if (is_array($fetch) ) {
		    
		    
		    
		    
		    
		    
		    
			//$fetch = mysqli_fetch_assoc($result);
			if($fetch['user_permission'] == 1){
			
			
			if($fetch['qrcode'] === 'h24345'||$fetch['qrcode'] === 'm21862'||$fetch['qrcode'] === 'e1522699'){
			     setcookie('user',$fetch['qrcode'],time()+86400*30,'/');
			                global $dbh;
			    			$sqllz = $dbh->prepare("UPDATE users SET
                                  loginset = '1'
                                  WHERE qrcode='$qrcode_text'");
                                   
                                   $sqllz->execute();
                     
                    
                   	$sql2z = $dbh->prepare("SELECT * from  users WHERE qrcode='$qrcode_text'"); 
                   
                   	$sql2z->execute();

                        $coursecodezz = $sql_pass->fetch(PDO::FETCH_ASSOC);
                   	     $coursecodez=$coursecodezz['coursecode'];

                                    
             	header("Location: ../reviewData.php?id=$qrcode_text" );
		        exit();
         }elseif($fetch['qrcode']=='G12367894'){
             header("Location: https://managethenow.net/mtn-live/live/index.php?id=G12367894&lang=en");
	        exit();
            
            
        }
         else{
             
       

		if($fetch['login_counter'] != 100 || $qrcode_text == 'a22059' ||  $qrcode_text == 'm13988' ||  $qrcode_text =='m21859' ||
                    $qrcode_text =='n24413'  ||  $qrcode_text =='m16440' ||  $qrcode_text =='a15226'  ||  $qrcode_text == 'd20304' ||  $qrcode_text == 'ataf_1907_mtn' ||$qrcode_text == 'alia1234' ||$qrcode_text == 'bs5263' ||$qrcode_text == 'as5263' ||$qrcode_text == 'L@mtn@support' ||$qrcode_text == 'S@mtn@support' ||  $qrcode_text == 'm29549'||  $qrcode_text == '1897'||  $qrcode_text == 'a751248'){

            if ($fetch['qrcode'] === $qrcode_text  && $fetch['name'] === $username) {
            	$_SESSION['qrcode'] = $fetch['qrcode'];
            	$_SESSION['name'] = $fetch['name'];
            	$_SESSION['id'] = $fetch['id'];
            				     setcookie('user',$qrcode_text,time()+86400*30,'/');
            				     setcookie('name',$fetch['name'],time()+86400*30,'/');
            				     setcookie('id',$fetch['id'],time()+86400*30,'/');
            				     setcookie('loginset',$fetch['loginset'],time()+86400*30,'/');
            				     setcookie('coursecode',$fetch['coursecode'],time()+86400*30,'/');
            				     setcookie('user_status',$fetch['user_status'],time()+86400*30,'/');
            				     setcookie('image',$fetch['coursecode'],time()+86400*30,'/');

  
            			$sqll = $dbh->prepare("UPDATE users SET
                                  loginset = '1'
                                  WHERE qrcode='$qrcode_text'");
                                  
               
                	$sqll->execute();
  
  
            			$sqll3 = $dbh->prepare("UPDATE userData SET
                                  loginset = '1'
                                  WHERE password='$qrcode_text'");
                                  
               
                	$sqll3->execute();
  
                
                
                $sqll2 = $dbh->prepare("UPDATE userData SET login_counter = login_counter + 1  WHERE password='$qrcode_text'");
               	$sqll2->execute();
               	
               	
                 $sqll4 = $dbh->prepare("UPDATE users SET login_counter = login_counter + 1  WHERE qrcode='$qrcode_text'");
                 $sqll4->execute();
  
                
             // incase of admin logged in   
             
                if(isset($_POST['coursecode_admin']) ){
                    $coursecode = $_POST['coursecode_admin'];
                    
                    if($qrcode_text == 'a22059' ||  $qrcode_text == 'm13988' ||  $qrcode_text =='m21859' ||$qrcode_text =='n24413'  ||  $qrcode_text =='m16440' ||  $qrcode_text =='a15226'  ||  $qrcode_text == 'd20304' ||  $qrcode_text == 'ataf_1907_mtn' || $qrcode_text == 'alia1234' ||$qrcode_text == 'as5263' || $qrcode_text == 'bs5263' || $qrcode_text == 'L@mtn@support' || $qrcode_text == 'S@mtn@support' ||  $qrcode_text == 'm29549' ||  $qrcode_text == '1897'||  $qrcode_text == 'a751248'){
                         
                      	$sql2 = $dbh->prepare("UPDATE users SET coursecode = '$coursecode' WHERE qrcode='$qrcode_text'"); 
                        $sql2->execute();
                        
                        
                    }else{
                    
                    if($fetch['course_code1'] ==  $coursecode && $fetch['course_permission1'] == 1 ){
                         	$sql_1 = $dbh->prepare("UPDATE users SET coursecode = '$coursecode' WHERE qrcode='$qrcode_text'"); 
                            $sql_1->execute();
                            
                         	$sql_1a = $dbh->prepare("UPDATE userData SET coursecode = '$coursecode' WHERE password='$qrcode_text'"); 
                            $sql_1a->execute();
                            
                         	header("Location: ../index.php?id=$qrcode_text");
		                    exit();  
		                    
                    

                     }else if($fetch['course_code2'] ==  $coursecode  && $fetch['course_permission2'] == 1  ){
                         	$sql_2= $dbh->prepare("UPDATE users SET coursecode = '$coursecode' WHERE qrcode='$qrcode_text'"); 
                         	 $sql_2->execute();
                            $sql_2a = $dbh->prepare("UPDATE userData SET coursecode = '$coursecode' WHERE password='$qrcode_text'"); 
                         	 $sql_2a->execute(); 
                         	header("Location: ../index.php?id=$qrcode_text" && $fetch['course_permission3'] == 1 );
		                    exit();
		                    
                

                     }else if($fetch['course_code3'] ==  $coursecode && $fetch['course_permission3'] == 1 ){
                         	$sql_3= $dbh->prepare("UPDATE users SET coursecode = '$coursecode' WHERE qrcode='$qrcode_text'"); 
                         	 $sql_3->execute(); 
                         	 $sql_3a = $dbh->prepare("UPDATE userData SET coursecode = '$coursecode' WHERE password='$qrcode_text'"); 
                         	 $sql_3a->execute(); 
                            header("Location: ../index.php?id=$qrcode_text");
		                    exit(); 
		                    
                  

                     }else if($fetch['course_code4'] ==  $coursecode && $fetch['course_permission4'] == 1 ){
                         	$sql_4 = $dbh->prepare("UPDATE users SET coursecode = '$coursecode' WHERE qrcode='$qrcode_text'"); 
                         	 $sql_4->execute(); 
                         	$sql_4a = $dbh->prepare("UPDATE userData SET coursecode = '$coursecode' WHERE password='$qrcode_text'"); 
                         	 $sql_4a->execute(); 
                         	 header("Location: ../index.php?id=$qrcode_text");
		                    exit(); 
		                    
                  

                     }else if($fetch['course_code5'] ==  $coursecode && $fetch['course_permission5'] == 1 ){
                         	$sql_5 = $dbh->prepare("UPDATE users SET coursecode = '$coursecode' WHERE qrcode='$qrcode_text'"); 
                         	 $sql_5->execute(); 
                         	$sql_5a = $dbh->prepare("UPDATE userData SET coursecode = '$coursecode' WHERE password='$qrcode_text'"); 
                         	 $sql_5a->execute(); 
                         	 header("Location: ../index.php?id=$qrcode_text");
		                    exit(); 
		            

                     }else if($fetch['course_code6'] ==  $coursecode && $fetch['course_permission6'] == 1 ){
                         	$sql_6 = $dbh->prepare("UPDATE users SET coursecode = '$coursecode' WHERE qrcode='$qrcode_text'"); 
                         	 $sql_6->execute(); 
                         	$sql_6a = $dbh->prepare("UPDATE userData SET coursecode = '$coursecode' WHERE password='$qrcode_text'"); 
                         	 $sql_6a->execute(); 
                         	 header("Location: ../index.php?id=$qrcode_text");
		                    exit(); 
		                    
                    

                     }else if($fetch['course_code7'] ==  $coursecode && $fetch['course_permission7'] == 1 ){
                         	$sql_7 = $dbh->prepare("UPDATE users SET coursecode = '$coursecode' WHERE qrcode='$qrcode_text'"); 
                         	 $sql_7->execute(); 
                         	$sql_7a = $dbh->prepare("UPDATE userData SET coursecode = '$coursecode' WHERE password='$qrcode_text'"); 
                         	 $sql_7a->execute(); 
                         	 header("Location: ../index.php?id=$qrcode_text");
		                    exit(); 
		          

                     }else if($fetch['course_code8'] ==  $coursecode && $fetch['course_permission8'] == 1 ){
                         	$sql_8 = $dbh->prepare("UPDATE users SET coursecode = '$coursecode' WHERE qrcode='$qrcode_text'"); 
                         	 $sql_8->execute(); 
                         	$sql_8a = $dbh->prepare("UPDATE userData SET coursecode = '$coursecode' WHERE password='$qrcode_text'"); 
                         	 $sql_8a->execute(); 
                         	 header("Location: ../index.php?id=$qrcode_text");
		                    exit(); 
		                    
                

                     }else if($fetch['course_code9'] ==  $coursecode && $fetch['course_permission9'] == 1 ){
                         	$sql_9 = $dbh->prepare("UPDATE users SET coursecode = '$coursecode' WHERE qrcode='$qrcode_text'"); 
                         	 $sql_9->execute(); 
                         	$sql_9a = $dbh->prepare("UPDATE userData SET coursecode = '$coursecode' WHERE password='$qrcode_text'"); 
                         	 $sql_9a->execute(); 
                         	 header("Location: ../index.php?id=$qrcode_text");
		                    exit(); 
		        
                     }else if($fetch['course_code10'] ==  $coursecode && $fetch['course_permission10'] == 1 ){
                         	$sql_10 = $dbh->prepare("UPDATE users SET coursecode = '$coursecode' WHERE qrcode='$qrcode_text'"); 
                         	 $sql_10->execute(); 
                         	$sql_10a = $dbh->prepare("UPDATE userData SET coursecode = '$coursecode' WHERE password='$qrcode_text'"); 
                         	 $sql_10a->execute(); 
                         	 header("Location: ../index.php?id=$qrcode_text");
		                    exit(); 
		  
                     }else if($fetch['course_code11'] ==  $coursecode && $fetch['course_permission11'] == 1 ){
                         	$sql_11 = $dbh->prepare("UPDATE users SET coursecode = '$coursecode' WHERE qrcode='$qrcode_text'"); 
                         	 $sql_11->execute(); 
                         	$sql_11a = $dbh->prepare("UPDATE userData SET coursecode = '$coursecode' WHERE password='$qrcode_text'"); 
                         	 $sql_11a->execute(); 
                         	 header("Location: ../index.php?id=$qrcode_text");
		                    exit(); 
		                    
                  

                     }else if($fetch['course_code12'] ==  $coursecode && $fetch['course_permission12'] == 1 ){
                         	$sql_12 = $dbh->prepare("UPDATE users SET coursecode = '$coursecode' WHERE qrcode='$qrcode_text'"); 
                         	 $sql_12->execute();
                         	$sql_12a = $dbh->prepare("UPDATE userData SET coursecode = '$coursecode' WHERE password='$qrcode_text'"); 
                         	 $sql_12a->execute(); 
                         	 header("Location: ../index.php?id=$qrcode_text");
		                    exit(); 
		       
                     }else if($fetch['course_code13'] ==  $coursecode && $fetch['course_permission13'] == 1 ){
                         	$sql_13 = $dbh->prepare("UPDATE users SET coursecode = '$coursecode' WHERE qrcode='$qrcode_text'"); 
                         	 $sql_13->execute(); 
                         	$sql_13a = $dbh->prepare("UPDATE userData SET coursecode = '$coursecode' WHERE password='$qrcode_text'"); 
                         	 $sql_13a->execute(); 
                         	 header("Location: ../index.php?id=$qrcode_text");
		                    exit(); 
		              

                     }else if($fetch['course_code14'] ==  $coursecode && $fetch['course_permission14'] == 1 ){
                         	$sql_14 = $dbh->prepare("UPDATE users SET coursecode = '$coursecode' WHERE qrcode='$qrcode_text'"); 
                         	 $sql_14->execute(); 
                         	$sql_14a = $dbh->prepare("UPDATE userData SET coursecode = '$coursecode' WHERE password='$qrcode_text'"); 
                         	 $sql_14a->execute(); 
                         	 header("Location: ../index.php?id=$qrcode_text");
		                    exit(); 
		                    
                     

                     }else if($fetch['course_code15'] ==  $coursecode && $fetch['course_permission15'] == 1 ){
                         	$sql_15 = $dbh->prepare("UPDATE users SET coursecode = '$coursecode' WHERE qrcode='$qrcode_text'"); 
                         	 $sql_15->execute();
                         	$sql_15a = $dbh->prepare("UPDATE userData SET coursecode = '$coursecode' WHERE password='$qrcode_text'"); 
                         	 $sql_15a->execute(); 
                         	 header("Location: ../index.php?id=$qrcode_text");
		                    exit();
		                    
               
                     }else if($fetch['course_code16'] ==  $coursecode && $fetch['course_permission16'] == 1 ){
                         	$sql_16 = $dbh->prepare("UPDATE users SET coursecode = '$coursecode' WHERE qrcode='$qrcode_text'"); 
                         	 $sql_16->execute(); 
                         	$sql_16a = $dbh->prepare("UPDATE userData SET coursecode = '$coursecode' WHERE password='$qrcode_text'"); 
                         	 $sql_16a->execute(); 
                         	 header("Location: ../index.php?id=$qrcode_text");
		                    exit(); 
		     

                     }else if($fetch['course_code17'] ==  $coursecode && $fetch['course_permission17'] == 1 ){
                         	$sql_17 = $dbh->prepare("UPDATE users SET coursecode = '$coursecode' WHERE qrcode='$qrcode_text'"); 
                         	 $sql_17->execute(); 
                         	$sql_17a = $dbh->prepare("UPDATE userData SET coursecode = '$coursecode' WHERE password='$qrcode_text'"); 
                         	 $sql_17a->execute(); 
                         	 header("Location: ../index.php?id=$qrcode_text");
		                    exit(); 
		                    
                 

                     }else if($fetch['course_code18'] ==  $coursecode && $fetch['course_permission18'] == 1 ){
                         	$sql_18 = $dbh->prepare("UPDATE users SET coursecode = '$coursecode' WHERE qrcode='$qrcode_text'"); 
                         	 $sql_18->execute(); 
                         	$sql_18a = $dbh->prepare("UPDATE userData SET coursecode = '$coursecode' WHERE password='$qrcode_text'"); 
                         	 $sql_18a->execute(); 
                         	 header("Location: ../index.php?id=$qrcode_text");
		                    exit(); 
		                    
                    

                     }else if($fetch['course_code19'] ==  $coursecode && $fetch['course_permission19'] == 1 ){
                         	$sql_19 = $dbh->prepare("UPDATE users SET coursecode = '$coursecode' WHERE qrcode='$qrcode_text'"); 
                         	 $sql_19->execute(); 
                         	$sql_19a = $dbh->prepare("UPDATE userData SET coursecode = '$coursecode' WHERE password='$qrcode_text'"); 
                         	 $sql_19a->execute(); 
                         	 header("Location: ../index.php?id=$qrcode_text");
		                    exit(); 
		            

                     }else if($fetch['course_code20'] ==  $coursecode && $fetch['course_permission20'] == 1 ){
                         	$sql_20 = $dbh->prepare("UPDATE users SET coursecode = '$coursecode' WHERE qrcode='$qrcode_text'"); 
                         	 $sql_20->execute();
                         	$sql_20a = $dbh->prepare("UPDATE userData SET coursecode = '$coursecode' WHERE password='$qrcode_text'"); 
                         	 $sql_20a->execute(); 
                         	 header("Location: ../index.php?id=$qrcode_text");
		                    exit(); 
		           

                     }else if($fetch['course_code21'] ==  $coursecode && $fetch['course_permission21'] == 1 ){
                         	$sql_21 = $dbh->prepare("UPDATE users SET coursecode = '$coursecode' WHERE qrcode='$qrcode_text'"); 
                         	 $sql_21->execute(); 
                         	$sql_21a = $dbh->prepare("UPDATE userData SET coursecode = '$coursecode' WHERE password='$qrcode_text'"); 
                         	 $sql_21a->execute(); 
                         	 header("Location: ../index.php?id=$qrcode_text");
		                    exit(); 
		                    
            
                     }else{
                       header("Location: ../login.php?error= You didn't have permission for  this Course yets !!");
	                        exit();
                    
                      }
                    
                    }
                    
                    
                    
                    
                    
                    
                   
                }
                
               
             //

           //	header("Location: ../index.php?id=$qrcode_text");
           
 if ($coursecode == 22){
   
            header("Location: meeting.php?id=$qrcode_text&coursecode=$coursecode");
		        exit();  
 }else{
      header("Location: ../index.php?id=$qrcode_text&lang=en");
		        exit();  
 }
               	
            }else{
                
                
		
		    			if($fetch['user_permission'] == 1){
		    			    header("Location: ../login.php?error=INCORRECT QR CODE"); 
	       exit();
		    			}else{
		    			    header("Location: ../login.php?error=INCORRECT QR CODE"); 
	        exit();
		    			}

			}
		}else{
		    		header("Location: ../login.php?error=You are Login in another place");
	        exit();
		}
}

        }
        
        
        else{
             header("Location: ../login.php?error=You don't have permission to login yet !!");
	        exit();
            
        }
			
		}else{
		    
		    			if($fetch['user_permission'] == 1){
		    			   header("Location: ../login.php?error=INCORRECT QR CODE"); 
	        exit();
		    			}else{
		    			    header("Location: ../login.php?error=INCORRECT QR CODE"); 
	        exit();
		    			}

		    
			
		}
	}
	
}else{
	header("Location: ../login.php");
	exit();
}