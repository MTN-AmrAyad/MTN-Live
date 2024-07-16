 
 <?php
     require_once 'model/db_conn.php';

         require_once 'model/course.php';

 $id=$_GET['id'];
 if(isset($_GET['action'])){
     
            if($_GET['action']==1){
                
                $sql2z = $dbh->prepare("UPDATE users SET coursecode = '1' WHERE qrcode='$id'"); 
                $sql2z->execute();
                setcookie('coursecode',$_COOKIE['coursecode'],time()-86400*30,'/');
                setcookie('coursecode','1',time()+86400*30,'/');
                header("Location: index.php"); 
           	    exit();

            } else if($_GET['action']==2){
                
                $sql2z = $dbh->prepare("UPDATE users SET coursecode = '2' WHERE qrcode='$id'"); 
                $sql2z->execute();
                setcookie('coursecode',$_COOKIE['coursecode'],time()-86400*30,'/');
           	 	setcookie('coursecode','2',time()+86400*30,'/');
           	 	header("Location: index.php"); 
           	 	exit();


               

            }else if($_GET['action']==3){
                
                $sql2z = $dbh->prepare("UPDATE users SET coursecode = '3' WHERE qrcode='$id'"); 
                $sql2z->execute();
                setcookie('coursecode',$_COOKIE['coursecode'],time()-86400*30,'/');
           	 	setcookie('coursecode','3',time()+86400*30,'/');
           	 	header("Location: index.php"); 
           	 	exit();


               

            }else if($_GET['action']==4){
                
                $sql2z = $dbh->prepare("UPDATE users SET coursecode = '4' WHERE qrcode='$id'"); 
                $sql2z->execute();
                setcookie('coursecode',$_COOKIE['coursecode'],time()-86400*30,'/');
           	 	setcookie('coursecode','4',time()+86400*30,'/');
           	 	header("Location: index.php"); 
           	 	exit();


               

            }else if($_GET['action']==5){
                
                $sql2z = $dbh->prepare("UPDATE users SET coursecode = '5' WHERE qrcode='$id'"); 
                $sql2z->execute();
                setcookie('coursecode',$_COOKIE['coursecode'],time()-86400*30,'/');
           	 	setcookie('coursecode','5',time()+86400*30,'/');
           	 	header("Location: index.php"); 
           	 	exit();


               

            }else if($_GET['action']==6){
                
                $sql2z = $dbh->prepare("UPDATE users SET coursecode = '6' WHERE qrcode='$id'"); 
                $sql2z->execute();
                setcookie('coursecode',$_COOKIE['coursecode'],time()-86400*30,'/');
           	 	setcookie('coursecode','6',time()+86400*30,'/');
           	 	header("Location: index.php"); 
           	 	exit();


               

            }else if($_GET['action']==7){
                
                $sql2z = $dbh->prepare("UPDATE users SET coursecode = '7' WHERE qrcode='$id'"); 
                $sql2z->execute();
                setcookie('coursecode',$_COOKIE['coursecode'],time()-86400*30,'/');
           	 	setcookie('coursecode','7',time()+86400*30,'/');
           	 	header("Location: index.php"); 
           	 	exit();


               

            }else if($_GET['action']==8){
                
                $sql2z = $dbh->prepare("UPDATE users SET coursecode = '8' WHERE qrcode='$id'"); 
                $sql2z->execute();
                setcookie('coursecode',$_COOKIE['coursecode'],time()-86400*30,'/');
           	 	setcookie('coursecode','8',time()+86400*30,'/');
           	 	header("Location: index.php"); 
           	 	exit();


               

            }else if($_GET['action']==9){
                
                $sql2z = $dbh->prepare("UPDATE users SET coursecode = '9' WHERE qrcode='$id'"); 
                $sql2z->execute();
                setcookie('coursecode',$_COOKIE['coursecode'],time()-86400*30,'/');
           	 	setcookie('coursecode','9',time()+86400*30,'/');
           	 	header("Location: index.php"); 
           	 	exit();


               

            }else if($_GET['action']==10){
                
                $sql2z = $dbh->prepare("UPDATE users SET coursecode = '10' WHERE qrcode='$id'"); 
                $sql2z->execute();
                setcookie('coursecode',$_COOKIE['coursecode'],time()-86400*30,'/');
           	 	setcookie('coursecode','10',time()+86400*30,'/');
           	 	header("Location: index.php"); 
           	 	exit();


               

            }else if($_GET['action']==11){
                
                $sql2z = $dbh->prepare("UPDATE users SET coursecode = '11' WHERE qrcode='$id'"); 
                $sql2z->execute();
                setcookie('coursecode',$_COOKIE['coursecode'],time()-86400*30,'/');
           	 	setcookie('coursecode','11',time()+86400*30,'/');
           	 	header("Location: index.php"); 
           	 	exit();


               

            }else if($_GET['action']==12){
                
                $sql2z = $dbh->prepare("UPDATE users SET coursecode = '12' WHERE qrcode='$id'"); 
                $sql2z->execute();
                setcookie('coursecode',$_COOKIE['coursecode'],time()-86400*30,'/');
           	 	setcookie('coursecode','12',time()+86400*30,'/');
           	 	header("Location: index.php"); 
           	 	exit();


               

            }else if($_GET['action']==13){
                
                $sql2z = $dbh->prepare("UPDATE users SET coursecode = '13' WHERE qrcode='$id'"); 
                $sql2z->execute();
                setcookie('coursecode',$_COOKIE['coursecode'],time()-86400*30,'/');
           	 	setcookie('coursecode','13',time()+86400*30,'/');
           	 	header("Location: index.php"); 
           	 	exit();


               

            }else if($_GET['action']==14){
                
                $sql2z = $dbh->prepare("UPDATE users SET coursecode = '14' WHERE qrcode='$id'"); 
                $sql2z->execute();
                setcookie('coursecode',$_COOKIE['coursecode'],time()-86400*30,'/');
           	 	setcookie('coursecode','14',time()+86400*30,'/');
           	 	header("Location: index.php?id=$id&lang=ar"); 
           	 	exit();


               

            }else if($_GET['action']==15){
                
                $sql2z = $dbh->prepare("UPDATE users SET coursecode = '15' WHERE qrcode='$id'"); 
                $sql2z->execute();
                setcookie('coursecode',$_COOKIE['coursecode'],time()-86400*30,'/');
           	 	setcookie('coursecode','15',time()+86400*30,'/');
           	 	header("Location: index.php"); 
           	 	exit();


               

            }else if($_GET['action']==16){
                
                $sql2z = $dbh->prepare("UPDATE users SET coursecode = '16' WHERE qrcode='$id'"); 
                $sql2z->execute();
                setcookie('coursecode',$_COOKIE['coursecode'],time()-86400*30,'/');
           	 	setcookie('coursecode','16',time()+86400*30,'/');
           	 	header("Location: index.php?id=$id&lang=ar"); 
           	 	exit();


               

            }else if($_GET['action']==17){
                
                $sql2z = $dbh->prepare("UPDATE users SET coursecode = '17' WHERE qrcode='$id'"); 
                $sql2z->execute();
                setcookie('coursecode',$_COOKIE['coursecode'],time()-86400*30,'/');
           	 	setcookie('coursecode','17',time()+86400*30,'/');
           	 	header("Location: index.php"); 
           	 	exit();


               

            }else if($_GET['action']==18){
                
                $sql2z = $dbh->prepare("UPDATE users SET coursecode = '18' WHERE qrcode='$id'"); 
                $sql2z->execute();
                setcookie('coursecode',$_COOKIE['coursecode'],time()-86400*30,'/');
           	 	setcookie('coursecode','18',time()+86400*30,'/');
           	 	header("Location: index.php"); 
           	 	exit();


               

            }else if($_GET['action']==19){
                
                $sql2z = $dbh->prepare("UPDATE users SET coursecode = '19' WHERE qrcode='$id'"); 
                $sql2z->execute();
                setcookie('coursecode',$_COOKIE['coursecode'],time()-86400*30,'/');
           	 	setcookie('coursecode','19',time()+86400*30,'/');
           	 	header("Location: index.php"); 
           	 	exit();


               

            }else if($_GET['action']==20){
                
                $sql2z = $dbh->prepare("UPDATE users SET coursecode = '20' WHERE qrcode='$id'"); 
                $sql2z->execute();
                setcookie('coursecode',$_COOKIE['coursecode'],time()-86400*30,'/');
           	 	setcookie('coursecode','20',time()+86400*30,'/');
           	 	header("Location: index.php"); 
           	 	exit();


               

            }else if($_GET['action']==21){
                
                $sql2z = $dbh->prepare("UPDATE users SET coursecode = '21' WHERE qrcode='$id'"); 
                $sql2z->execute();
                setcookie('coursecode',$_COOKIE['coursecode'],time()-86400*30,'/');
           	 	setcookie('coursecode','21',time()+86400*30,'/');
           	 	header("Location: index.php"); 
           	 	exit();


               

            }else if($_GET['action']==22){
                
                $sql2z = $dbh->prepare("UPDATE users SET coursecode = '22' WHERE qrcode='$id'"); 
                $sql2z->execute();
                setcookie('coursecode',$_COOKIE['coursecode'],time()-86400*30,'/');
           	 	setcookie('coursecode','22',time()+86400*30,'/');
           	 	header("Location: index.php"); 
           	 	exit();


               

            }else if($_GET['action']==23){
                
                $sql2z = $dbh->prepare("UPDATE users SET coursecode = '23' WHERE qrcode='$id'"); 
                $sql2z->execute();
                setcookie('coursecode',$_COOKIE['coursecode'],time()-86400*30,'/');
           	 	setcookie('coursecode','23',time()+86400*30,'/');
           	 	header("Location: index.php"); 
           	 	exit();


               

            }else if($_GET['action']==24){
                
                $sql2z = $dbh->prepare("UPDATE users SET coursecode = '24' WHERE qrcode='$id'"); 
                $sql2z->execute();
                setcookie('coursecode',$_COOKIE['coursecode'],time()-86400*30,'/');
           	 	setcookie('coursecode','24',time()+86400*30,'/');
           	 	header("Location: index.php"); 
           	 	exit();


               

            }else if($_GET['action']==25){
                
                $sql2z = $dbh->prepare("UPDATE users SET coursecode = '25' WHERE qrcode='$id'"); 
                $sql2z->execute();
                setcookie('coursecode',$_COOKIE['coursecode'],time()-86400*30,'/');
           	 	setcookie('coursecode','25',time()+86400*30,'/');
           	 	header("Location: index.php"); 
           	 	exit();


               

            }
            else if($_GET['action']==26){
                
                $sql2z = $dbh->prepare("UPDATE users SET coursecode = '26' WHERE qrcode='$id'"); 
                $sql2z->execute();
                setcookie('coursecode',$_COOKIE['coursecode'],time()-86400*30,'/');
           	 	setcookie('coursecode','26',time()+86400*30,'/');
           	 	header("Location: index.php"); 
           	 	exit();


               

            }
            else if($_GET['action']==27){
                
                $sql2z = $dbh->prepare("UPDATE users SET coursecode = '27' WHERE qrcode='$id'"); 
                $sql2z->execute();
                setcookie('coursecode',$_COOKIE['coursecode'],time()-86400*30,'/');
           	 	setcookie('coursecode','27',time()+86400*30,'/');
           	 	header("Location: index.php"); 
           	 	exit();


               

            }
            else if($_GET['action']==28){
                
                $sql2z = $dbh->prepare("UPDATE users SET coursecode = '28' WHERE qrcode='$id'"); 
                $sql2z->execute();
                setcookie('coursecode',$_COOKIE['coursecode'],time()-86400*30,'/');
           	 	setcookie('coursecode','28',time()+86400*30,'/');
           	 	header("Location: index.php"); 
           	 	exit();


               

            }
            else if($_GET['action']==29){
                
                $sql2z = $dbh->prepare("UPDATE users SET coursecode = '29' WHERE qrcode='$id'"); 
                $sql2z->execute();
                setcookie('coursecode',$_COOKIE['coursecode'],time()-86400*30,'/');
           	 	setcookie('coursecode','29',time()+86400*30,'/');
           	 	header("Location: index.php"); 
           	 	exit();


               

            }
            else if($_GET['action']==30){
                
                $sql2z = $dbh->prepare("UPDATE users SET coursecode = '30' WHERE qrcode='$id'"); 
                $sql2z->execute();
                setcookie('coursecode',$_COOKIE['coursecode'],time()-86400*30,'/');
           	 	setcookie('coursecode','30',time()+86400*30,'/');
           	 	header("Location: index.php"); 
           	 	exit();


               

            }
            else if($_GET['action']==31){
                
                $sql2z = $dbh->prepare("UPDATE users SET coursecode = '31' WHERE qrcode='$id'"); 
                $sql2z->execute();
                setcookie('coursecode',$_COOKIE['coursecode'],time()-86400*30,'/');
           	 	setcookie('coursecode','31',time()+86400*30,'/');
           	 	header("Location: index.php"); 
           	 	exit();


               

            }   else if($_GET['action']==32){
                
                $sql2z = $dbh->prepare("UPDATE users SET coursecode = '32' WHERE qrcode='$id'"); 
                $sql2z->execute();
                setcookie('coursecode',$_COOKIE['coursecode'],time()-86400*30,'/');
           	 	setcookie('coursecode','32',time()+86400*30,'/');
           	 	header("Location: index.php"); 
           	 	exit();


               

            }
            
            
        }
        ?>