<?php 
session_start();
include "db_conn.php";
mysqli_set_charset($conn,'utf8');
//Define name spaces
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

//Include required PHPMailer files
	require 'includes/PHPMailer.php';
	require 'includes/SMTP.php';
	require 'includes/Exception.php';

$id=$_GET["id"];


	$sql_check = "SELECT * FROM users WHERE qrcode='$id'";


		$result_check = mysqli_query($conn, $sql_check);
			$row_check = mysqli_fetch_assoc($result_check);
/*

	if( ($user == 'h24345') || ($user == 'a22059') || ($user == 'm21862') || ($user == 'm16440')  || ($user =='m13988') || ($user =='m21859')   || ($user =='m999') || ($user =='m29549') || ($user =='a15226')  ){
	    */
	    

	
// 	if($row_check['loginset'] == 1 || ($row_check['qrcode'] == 'a22059')  || ($row_check['qrcode'] =='m13988') || ( $row_check['qrcode'] == 'm21862') || ($row_check['qrcode']=='m21859') || ($row_check['qrcode'] =='ataf_1907_mtn') || ($row_check['qrcode'] =='m29549')  || ($row_check['qrcode'] =='a15226') || ($row_check['qrcode'] =='A15987') || ($row_check['qrcode'] =='a751248')  ){
	    
	    
	    if($row_check['user_status']==1 ){
	  
 $user=$_COOKIE['user'];
	





?>

<html lang="en" >
    <head>
         <meta charset="utf-8">
               <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
               


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">-->
        <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>-->
        
         <link rel="stylesheet" href="view/bootstrap/css/bootstrap.css" />
    <script src="view/bootstrap/js/bootstrap.js"></script>
    
<link rel="stylesheet" 
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">         
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- SweetAlert2 -->
  <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.11/sweetalert2.css" integrity="sha512-otyZKuy0m2Vb2a/PvF29koS+TY1OB06a7YrE0Fvajv3L2crkLNNoxviT294+22mjLhWZ3z/Yb+vIy3ohjYP7Rg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
    <script src="https://unpkg.com/vue-swal"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!--<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.11/sweetalert2.min.js" integrity="sha512-N41zI1J3Fe0qxUlhBhZ+dBO2po5k7Vbed92xNADfBeNAqpRsTZiY2+5bBl7u2RLnF6Ngf9xenn9mr53X2uSiPw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<div id="pageloader">
   <img src="http://cdnjs.cloudflare.com/ajax/libs/semantic-ui/0.16.1/images/loader-large.gif" alt="processing..." />
</div>
  
    
    
    <?php
    if(isset($_GET['search_coursecode'])){
    $code=$_GET['search_coursecode'];
    
    if($code==6){
        $page=$page.'EPT1';
        
        
    }else if($code==7){
        $page=$page.'EPT2';
        
    }else if($code==16){
        $page=$page.'EstroGym';
        
    }else if($code==17){
        $page=$page.'الراجل-الكسيب-يوليو-2023 ';
        
    }else if($code==14){
        $page=$page.'TG Values';
        
    }else if($code==8){
        $page=$page.'Adam & Eve - Main level';
        
    }else if($code==9){
        $page=$page.'Adam & Eva -Adv. level';
        
    }else if($code==12){
        $page=$page.'Luscher CDT';
        
    }else if($code==13){
        $page=$page.'CPC';
        
    }else if($code==10){
        $page=$page.'CTRL Medicine - Organic';
        
    }else if($code==18){
        $page=$page.'CTRL Medicine - Psychologic';
        
    }else if($code==19){
        $page=$page.'CTRL Medicine - Anatomical';
        
    }else if($code==20){
        $page=$page.'woman life in work';
        
    }else if($code==1){
        $page=$page.'Brain CT Scan';
        
    }else if ($code== 21){
          $page=$page."Brain CT ScanTrainings";
    }else if ($code== 11){
          $page=$page."تدريبات السعادة";
    }else if ($code== 15){
          $page=$page."EBT2-Advanced-Level";
    }else if ($code== 4){
          $page=$page."Therapy GYM الأنوثة - مسجل ";
    }else if ($code== 3){
          $page=$page."Therapy GYM قعدة رجالة - مسجل";
    }else if ($code==22){
          $page=$page."Self-healing Guide - Organic part";
    }else if ($code==23){
          $page=$page."Therapy Gym - الفطرة ";
    }else if ($code==24){
          $page=$page."Estro Gym - Nov";
    }
    else if ($code==25){
          $page=$page."tgvalues_special_edition";
    }
    else if ($code==26){
          $page=$page."الأنوثة_special_edition";
    }
    else if ($code==27){
          $page=$page."الراجل-الكسيب-نوفمبر-2022";
    }
    else if ($code==28){
          $page=$page."الراجل كسيب يونيو";
    }
    else if ($code==29){
          $page=$page."ثيرابي جيم الفطرة مايو";
    }
    else if ($code==30){
          $page=$page."تدريبات الأنوثة -الدورة الرابعة";
    }  else if ($code==31){
          $page=$page."EBM practitioner";
    }  else if ($code==32){
          $page=$page."مرشد الاتزان الذاتي";
    }
     }
    ?>
<title>Review <?php echo $page ;?></title>

<style>
.swal2-close:focus {
    outline: none;
    box-shadow: none !important;
}
.swal2-popup .swal2-title{
        margin: 50px 30px 0.4em;
}
.swal2-html-container{
    margin: 1em 1.6em 0.3em;
}
.table-striped>tbody>tr:nth-of-type(odd){
   --bs-table-accent-bg:#1671f654;
}
.active_row{
   border: 2px solid red;
    border-style: double;
}
.active_row>td{
     background-color: #ffc107;
    box-shadow: none;
}
.active_cell{
     position: sticky;
    height: 44px;
    left: 74px;
    width: 252px;
      background-color: #ff7b07 !important;
    
}
.active_cell_2{
       position: sticky;
    height: 44px;
    width: 265px;
    left: 325px;
       background-color: #ff7b07 !important;
}
.table>:not(caption)>*>* {
    padding: 0.25rem 0.5rem;

    border-bottom-width: 1px;
    vertical-align: middle;

}
.empty_table{
    
    width: 100% !important;
    max-width: 100% !important;
}
#pageloader
{
  background: rgba( 255, 255, 255, 0.8 );
  display: none;
  height: 100%;
  position: fixed;
  width: 100%;
  z-index: 9999;
}

#pageloader img
{
  left: 50%;
  margin-left: -32px;
  margin-top: -32px;
  position: absolute;
  top: 50%;
}
.row>* {

    width: unset !important;
    max-width: unset !important;
  
}
 .content {
    padding: 14rem 0;
}
.btn.btn-primary {
    border-radius: 5px;
    background: #ef4339;
    color: #fff;

    border:none;
}
.contact-wrap .form, .contact-wrap .contact-info {
    padding: 15px;
}
body {
    font-family: "Roboto", sans-serif;
    background-color: #c7dbd257;
    line-height: 1.9;
    color: #8c8c8c;
    position: relative;
}
.contact-wrap .form {
    background: #fff;
}
.contact-wrap {
    -webkit-box-shadow: 0 0px 20px 0 rgb(0 0 0 / 5%);
    box-shadow: 0 0px 20px 0 rgb(0 0 0 / 5%);
    border: 1px solid #efefef;
}
.table-success{
    --bs-table-bg: #fff;
}
.red{
    color:red;
}
.container, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {
    max-width: 1500px;
}
.table>thead{
    position: sticky;
    top: 200px;
}
          </style>
          <script>




</script>
    </head>
    <body>
        
   <?php 
 
         if(isset($_POST['move'])){
                    $coursecodez= $_POST['coursecode_admin'];
                     $user_id=$_COOKIE['user'];
                  
                 	$sql2z = "UPDATE users SET coursecode = '$coursecodez' WHERE qrcode='$user_id'"; 
                   	mysqli_query($conn, $sql2z);
                 
                 
                }
                	
             if(isset($_POST['s_n'])){
      
                        
            		$note=$_POST['note'];
                    $user_name=$_POST['user_name'];
            
                 	$sqll31 = "UPDATE userData SET note = '$note' WHERE username='$user_name'";
                                              
                         mysqli_query($conn, $sqll31);
            
            			
           
       
       }
  	 
   
   ?>

  
        
        
    
  <div class="content" >
    
    <div class="container" >
      <div class="row align-items-stretch no-gutters contact-wrap" style='background: white;'>
        <div  id='main_divv' class='' >
          <div class="form h-100">    
          
      <h1 style='    position: fixed;top: 12px;z-index: 20;' >LiveStream Data <?php echo $page; ?></h1>  
        
        

   <form style='    top: 70px;display: flex;width: 95vw;align-items: flex-end;padding: 10px;position: fixed;border-radius: 5px;border: 1px solid #8c8c8c;z-index: 20;justify-content: flex-start;' method='get'>
        <input hidden readolny value="<?php echo $user ?>" name="id">
       <div>
           <P>Choose Your Course</P>
             <select class="form-control course_select" id="ccc"  name='search_coursecode' style=" width: fit-content;margin-right: 30px;" >
                     <option value="<?php if(isset($_GET['search_coursecode'])){ echo $_GET['search_coursecode']; } ?>"  >choose your course</option>
             
                  
                            <option value='0' selected > All   </option>
                            <option value='6'>EBT 1 محو الأمية الشعورية</option>
                           <option value='7'>EBT 2 التشخيص والعلاج</option>
                           <option value='14'>Therapy GYM Values</option>
                           <option value='16'> EstroGYM    </option>
                           <option value='5'> Therapy GYM Pregnancy    </option>
                           <option value='8'> أدم وحواء - المستوى الأساسي   </option>
                           <option value='9'> آدم وحواء – الزواج   </option>
                           <option value='2'>التواصل بين الذكر والأنثى </option>
                           <option value='3'>آدم وحواء - للمراهقين  </option>
                           
                           <option value='17'>الراجل الكسيب – تدريب شامل</option>
                             <option value='20'>حياة الأنثى في العمل</option>
                           <option value='10'>CTRL Medicine – Organic Part</option>
                           <option value='18'>CTRL Medicine – Psychologic Part</option>
                           <option value='19'>CTRL Medicine – Anatomical Part</option>
                           <option value='12'>Lüscher CDT</option>
                           <option value='13'>CPC</option>
                           <option value='1'>Brain CT Scan</option>
                           <option value='21'>Brain CT Scan TRAININGS</option>
                           <option value='11'>تدريبات السعادة </option>
                           <option value='15'>EBT2–Adv.Level</option>
                           <option value='4'>Therapy GYM الأنوثة - مسجل </option>
                           <option value='3'>Therapy GYM قعدة رجالة - مسجل</option>
                           <option value='22'>Self-healing Guide - Organic part</option>
                           <option value='23'>ثربي جيم الفطرة</option>
                           <option value='24'>EstroGym - Nov </option>
                           <option value='25'>tgvalues_special_edition </option>
                           <option value='26'>الأنوثة_special_edition </option>
                           <option value='27'>الراجل-الكسيب-نوفمبر-2022</option>
                           <option value='28'>الراجل كسيب يونيو</option>
                           <option value='29'>ثيرابي جيم الفطرة مايو</option>
                           <option value='30'>تدريبات الأنوثة -الدورة الرابعة</option>
                           <option value='31'>EBM practitioner</option>
                           <option value='32'>مرشد الاتزان الذاتي</option>
                 </select>
           </div>  
               <div>
           <P>choose permission status</P>
              <select class="form-control" id="text"   name='search_permissions' style='width: fit-content; margin-right: 30px;'>
                     <option value="<?php if(isset($_GET['search_permissions'])){ echo $_GET['search_permissions']; } ?> ">choose permission status</option>
          
                <option  value='5' selected >ALL</option>  
                <option  value='1'>Accepeted</option>  
                <option  value='0'>Denied</option>  
                 <option  value='3'>Pending</option> 
                 <option  value='6'>Deleted</option> 
                 
                 <option  value='first time '>First Time</option> 
                 <option  value='re-attend'>re-attend</option> 
                 <option  value='Live'>Live</option> 
                 <option  value='online'>online</option> 
                 
              </select> 
               </div>  
                    <div>
           <P>type your filter </P>
           <input name='search_text'  class="form-control" <?php if(isset($_GET['search_text'])){ echo $_GET['search_text']; } ?> style='    width: fit-content;margin-right: 30px;'>
               </div>  
            <button type="submit" value="filter"  id="basic-addon2" class=" input-group-text btn btn-primary" style='    letter-spacing: 1px;padding: 5px 30px;background-color: #327ded;border: 3px solid #327ded;'>filter</button>
   </form>
     <?php 
   define('DB_HOST', 'localhost');
define('DB_NAME', 'u471974205_livesystem');
define('DB_USER', 'u471974205_livesystem');
define('DB_PASS', '1bf#xLyAvD#');
$dbh =  new PDO('mysql:dbhost='.DB_HOST.';dbname=' .DB_NAME , DB_USER, DB_PASS);
    global $dbh;
   
   
     if(isset($_GET['search_coursecode']) && (!empty($_GET['search_text'])) && isset($_GET['search_permissions']) ){
        $filter_course_code=$_GET['search_coursecode'];
        $per_filter=$_GET['search_permissions'];
        $text_filter=$_GET['search_text'];      

   
   
             if($filter_course_code != 0){
                 
             
                  
                     $sql = $dbh->prepare("SELECT * FROM userData where ( course_code$filter_course_code = '$filter_course_code' OR coursecode = '$filter_course_code' )  AND ( email  = '$text_filter' 
                     OR phone  LIKE '%$text_filter%' OR work   = '$text_filter'  OR username   = '$text_filter' OR password   = '$text_filter' OR nationality   = '$text_filter' OR salesman   = '$text_filter' OR name   LIKE '%$text_filter%' OR accepted_by   = '$text_filter' OR city   = '$text_filter' OR created_at  LIKE '%$text_filter%' ) ORDER BY created_at ASC ; "); 
             }else{
                 
                  
                   
                       $sql = $dbh->prepare("SELECT * FROM userData where email  = '$text_filter' 
                     OR phone LIKE '%$text_filter%' OR work   = '$text_filter'  OR username   = '$text_filter' OR password   = '$text_filter' OR nationality   = '$text_filter' OR salesman   = '$text_filter' OR name   LIKE '%$text_filter%'  OR accepted_by   = '$text_filter' OR city   = '$text_filter' OR created_at  LIKE '%$text_filter%'  ORDER BY created_at ASC ;"); 
             }
        
        
       
     
   }elseif (isset($_GET['search_coursecode']) &&  (!empty($_GET['search_text']))){
      
          $filter_course_code=$_GET['search_coursecode'];
          $text_filter=$_GET['search_text'];     
    

 
          
         if($filter_course_code != 0){
       
                    
                     $sql = $dbh->prepare("SELECT * FROM userData where ( course_code$filter_course_code = '$filter_course_code' OR coursecode = '$filter_course_code' )  AND ( email  = '$text_filter' 
                     OR phone  LIKE '%$text_filter%' OR work   = '$text_filter'  OR username   = '$text_filter' OR password   = '$text_filter' OR nationality   = '$text_filter' OR salesman   = '$text_filter' OR name   LIKE '%$text_filter%' OR accepted_by   = '$text_filter' OR city   = '$text_filter'  OR created_at  LIKE '%$text_filter%'  ) ORDER BY created_at ASC ;"); 
         }else{
             
            
               $sql = $dbh->prepare("SELECT * FROM userData where   email  = '$text_filter' 
                     OR phone  LIKE '%$text_filter%' OR work   = '$text_filter'  OR username   = '$text_filter' OR password   = '$text_filter' OR nationality   = '$text_filter' OR salesman   = '$text_filter' OR name   LIKE '%$text_filter%' OR accepted_by   = '$text_filter' OR city   = '$text_filter'  OR created_at  LIKE '%$text_filter%' ORDER BY created_at ASC  ; "); 
         }
         
   }elseif(isset($_GET['search_coursecode']) && isset($_GET['search_permissions'])){
        $filter_course_code=$_GET['search_coursecode'];
        $per_filter=$_GET['search_permissions'];   
         
        
          if($filter_course_code != 0){
          if($per_filter == 5){
          
                  $sql = $dbh->prepare("SELECT * FROM userData where course_code$filter_course_code = '$filter_course_code' OR coursecode = '$filter_course_code' ORDER BY created_at ASC  ;"); 
          
               }else if ($per_filter == 6){
                   
                    $sql = $dbh->prepare("SELECT * FROM userData where deleted_by != '0' AND   (course_code$filter_course_code = '$filter_course_code' OR coursecode = '$filter_course_code' )  ORDER BY created_at ASC  ;");
               }else if( $per_filter  == 3){
                $sql = $dbh->prepare("SELECT * FROM userData where  course_code$filter_course_code = '$filter_course_code' AND  course_permission$filter_course_code=$per_filter  ORDER BY created_at ASC  ;");
  
           }else{
                   
            if( strlen($per_filter)  >1){
                $sql = $dbh->prepare("SELECT * FROM userData where ( course_type ='$per_filter' OR attendance = '$per_filter')  AND (course_code$filter_course_code = '$filter_course_code' OR coursecode = '$filter_course_code' )   ORDER BY created_at ASC  ;");
  
           } else{
                $sql = $dbh->prepare("SELECT * FROM userData where (user_permission ='$per_filter' OR course_permission$filter_course_code='$per_filter')  AND   (course_code$filter_course_code = '$filter_course_code' OR coursecode = '$filter_course_code' )   ORDER BY created_at ASC  ;");
  
           }
                  
              }
          }else{
                if($per_filter == 5){
          
                $sql = $dbh->prepare("SELECT * FROM userData ORDER BY created_at ASC  ;"); 
          
               }else if($per_filter == 6){
                   
                $sql = $dbh->prepare("SELECT * FROM userData where deleted_by != '0' ORDER BY created_at ASC  ;");

               }else if( $per_filter  == 3){
                $sql = $dbh->prepare("SELECT * FROM userData where  course_permission1='$per_filter' OR course_permission2='$per_filter' OR course_permission3='$per_filter' OR course_permission4='$per_filter' OR course_permission5='$per_filter' OR course_permission6='$per_filter' OR course_permission7='$per_filter' OR course_permission8='$per_filter' OR course_permission9='$per_filter' OR course_permission10='$per_filter' OR course_permission11='$per_filter' OR course_permission12='$per_filter' OR course_permission13='$per_filter' OR course_permission14='$per_filter' OR course_permission15='$per_filter' OR course_permission16='$per_filter' OR course_permission17='$per_filter' OR course_permission18='$per_filter' OR course_permission19='$per_filter' OR course_permission20='$per_filter' OR course_permission21='$per_filter' OR course_permission22='$per_filter' OR course_permission23='$per_filter' OR course_permission24='$per_filter' OR course_permission25='$per_filter' OR course_permission26='$per_filter' OR course_permission27='$per_filter' OR course_permission28='$per_filter' OR course_permission29='$per_filter' OR course_permission30='$per_filter' OR course_permission31='$per_filter' OR course_permission32='$per_filter'  ORDER BY created_at ASC  ;");
  
           }else{
                   
                $sql = $dbh->prepare("SELECT * FROM userData where user_permission='$per_filter' OR ( course_type ='$per_filter' OR attendance = '$per_filter')  ORDER BY created_at ASC  ;");
              } 
              
          }
   }elseif (isset($_GET['search_coursecode'])){
      
         $filter_course_code=$_GET['search_coursecode'];
        if($filter_course_code != 0){
        
            $sql = $dbh->prepare("SELECT * FROM userData where  course_code$filter_course_code = '$filter_course_code'  OR coursecode = '$filter_course_code' ORDER BY created_at ASC  ;"); 
        }else{
             $sql = $dbh->prepare("SELECT * FROM userData ORDER BY created_at ASC  "); 
        }
   }
   
   
   
   
    $sql->execute();
        $data = null;
        while($fetch = $sql->fetch(PDO::FETCH_ASSOC))
        {
            $data[] = $fetch;
        }
   ?>    
 
     <form action='send_mail.php' method='POST' id='main_form'  >
   


        <table class="table table-success table-bordered  table-striped">
  <thead>
    <tr>
         
      <th scope="col">#</th>
      <th scope="col">Full name</th>
      <th scope="col"> Phone number  </th>
      <th scope="col">Nationality  </th>
      <th scope="col">Work </th>
      <th scope="col">Email </th>
      <th scope="col">BirthDate</th>
      <th scope="col"> Country </th>
      <th scope="col"> Course  </th>
      <th scope="col"> Salesman  </th>
      <th scope="col"> Course type</th>
      <th scope="col"> Attendance</th>
        <th class="red" scope="col">User Name  </th>
      <th class="red" scope="col">Password </th>
       <th class="red" scope="col">accepted by </th>
       <th class="red" scope="col"> deleted by </th>
       <th class="red" scope="col"> restored by </th>
       
       <th class="red" scope="col">Signed Up At </th>
       <th class="red" scope="col">Make Note </th>
 <?php if($_COOKIE['user'] !='a15226'){
 echo '<th class="red" scope="col">Action </th>
      <th class="red" scope="col"> <input type="checkbox" id="selectAll"/><span  style="margin-left:10px"> Permision</span></th>';
 }
 ?>
      
     <!-- 
      <th class="red" scope="col">  Permision CT Scan </span></th>
      <th class="red" scope="col">  Permision Self-Transformation Diploma </span></th>
      <th class="red" scope="col">  Permision Colors Psychology Diploma </span></th>
      <th class="red" scope="col">  Permision CTRL Medicine Diploma  </span></th>
      <th class="red" scope="col">  Permision mtn Master </span></th>
      <th class="red" scope="col">  Permision EBT 1 محو الأمية الشعورية </span></th>
      <th class="red" scope="col">  Permision EBT 2 التشخيص والعلاج </span></th>
      <th class="red" scope="col">  Permision Adam & Eve - Main Level </span></th>
      <th class="red" scope="col">  Permision Adam & Eve - Adv. Level </span></th>
      <th class="red" scope="col">  Permision CTRL Medicine - Organic </span></th>
      <th class="red" scope="col">  Permision Balance-Healing Guide </span></th>
      <th class="red" scope="col">  Permision Lüscher CDT </span></th>
      <th class="red" scope="col">  Permision CPC </span></th>
      <th class="red" scope="col">  Permision TG Values </span></th>
      <th class="red" scope="col">  Permision Therapy GYM الانوثة  </span></th>
      <th class="red" scope="col">  Permision EstroGYM </span></th>
      <th class="red" scope="col">  Permision TG الراجل الكسيب </span></th>
      <th class="red" scope="col">  Permision CTRL Medicine - Psychologic </span></th>
      <th class="red" scope="col">  Permision CTRL Medicine - Anatomical </span></th>
      <th class="red" scope="col">  Permision Self-Healing Guide </span></th>
      <th class="red" scope="col">  Permision Brain CT Scan </span></th>
-->
      <!--<th class="red" scope="col">Status to adding course</th>-->
    <th class="red" scope="col">Status  </th> 
     <?php if($_COOKIE['user'] !='a15226'|| $_COOKIE['user'] !='e1522699'){
         echo '<th scope="col" class="red"> Case  </th>';
     }
 ?>    
      <th scope="col" class="red"> Login Counter  </th>
      
   <?php if($_COOKIE['user'] !='a15226'){     
       echo  ' <th class="red" scope="col">Restore </th>';
       
           }
 ?>  
       
       
       
       
       
        
    </tr>
  </thead>
  <tbody>
      
     
 
   <?php 
   
   $per_array = ['Deny','Accept','Deleted','Pending'];
              foreach ($data as $index => $member):
                                            $coursecode=$member['coursecode'];
                                              $sqll = $dbh->prepare("SELECT * FROM courseData where  id ='$coursecode';");
                                                            $sqll->execute();
                                                            $data = null;
                                                            while($fetch = $sqll->fetch(PDO::FETCH_ASSOC))
                                                            {
                                                                $data[] = $fetch;
                                                            }
                                                            
                                               $id=$member['username'];
                                               $sqll2 = $dbh->prepare("SELECT * FROM users where id='$id';");
                                                            $sqll2->execute();
                                                            $data_user = null;
                                                            while($fetch = $sqll2->fetch(PDO::FETCH_ASSOC))
                                                            {
                                                                $data_user[] = $fetch;
                                                            }
                                                                                         
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
$index = $index + 1;
$indexx = $index + 10;
$indexxx = $index + 110;
$indexxxx = $index + 1110;
                                        echo '<tr>'
                                            .'<td scope="row">'. $index.'</td>'
                                             .'<td id="'.$index.'">'. $member['name'] .'  </td>'
                                             .'<td   id="phone_'.$member['username'].'">'. $member['phone'] .'<i class="fa-solid fa-pen-to-square" onclick="edit_info(this.parentElement)" style="cursor: pointer;margin-left:15px;"></i></td>'
                                             .'<td>'. $member['nationality'] .'</td>'
                                              .'<td>'. $member['work'] .'</td>'
                                            .'<td   name="'.$indexxxx.'" id="email_'.$member['username'].'">'. $member['email'] .'<i class="fa-solid fa-pen-to-square" onclick="edit_info(this.parentElement)" style="cursor: pointer;margin-left:15px;"></i></td>'
                                            .'<td>'. $member['birthofdate'].'</td>'

                                             .'<td>'. $member['city'] .'</td>';
                                               echo '<td><select name="course_list_'.$member['username'].'" style="width: 100%;background-color: transparent;border: none;"> '  ;
                                         if( $member['course_code1'] != 0){
                                            
                                                echo '<option value="'.$member['course_code1'].'"> '. $course_names[$member['course_code1'] ].'</option>'    ;
                                         } if ( $member['course_code2'] != 0){
                                             
                                               echo '<option value="'.$member['course_code2'].'">'. $course_names[$member['course_code2'] ].'</option>'    ;
                                         } if ( $member['course_code3'] != 0){
                                             
                                               echo '<option value="'.$member['course_code3'].'">'. $course_names[$member['course_code3'] ].'</option>'    ;
                                         } if ( $member['course_code4'] != 0){
                                             
                                               echo '<option value="'.$member['course_code4'].'">'. $course_names[$member['course_code4'] ].'</option>'    ;
                                         } if ( $member['course_code5'] != 0){
                                             
                                               echo '<option value="'.$member['course_code5'].'">'. $course_names[$member['course_code5'] ].'</option>'    ;
                                         } if ( $member['course_code6'] != 0){
                                             
                                               echo '<option value="'.$member['course_code6'].'">'. $course_names[$member['course_code6'] ].'</option>'    ;
                                         } if ( $member['course_code7'] != 0){
                                             
                                               echo '<option value="'.$member['course_code7'].'">'. $course_names[$member['course_code7'] ].'</option>'    ;
                                         } if ( $member['course_code8'] != 0){
                                             
                                               echo '<option value="'.$member['course_code8'].'">'. $course_names[$member['course_code8'] ].'</option>'    ;
                                         } if ( $member['course_code9'] != 0){
                                             
                                               echo '<option value="'.$member['course_code9'].'">'. $course_names[$member['course_code9'] ].'</option>'    ;
                                         } if ( $member['course_code10'] != 0){
                                             
                                               echo '<option value="'.$member['course_code10'].'">'. $course_names[$member['course_code10'] ].'</option>'    ;
                                         } if ( $member['course_code11'] != 0){
                                             
                                               echo '<option value="'.$member['course_code11'].'">'. $course_names[$member['course_code11'] ].'</option>'    ;
                                         } if ( $member['course_code12'] != 0){
                                             
                                               echo '<option value="'.$member['course_code12'].'">'. $course_names[$member['course_code12'] ].'</option>'    ;
                                         } if ( $member['course_code13'] != 0){
                                             
                                               echo '<option value="'.$member['course_code13'].'">'. $course_names[$member['course_code13'] ].'</option>'    ;
                                         } if ( $member['course_code14'] != 0){
                                             
                                               echo '<option value="'.$member['course_code14'].'">'. $course_names[$member['course_code14'] ].'</option>'    ;
                                         } if ( $member['course_code15'] != 0){
                                             
                                               echo '<option value="'.$member['course_code15'].'">'. $course_names[$member['course_code15'] ].'</option>'    ;
                                         } if ( $member['course_code16'] != 0){
                                             
                                               echo '<option value="'.$member['course_code16'].'">'.$course_names[$member['course_code16'] ].'</option>'    ;
                                         } if ( $member['course_code17'] != 0){
                                             
                                               echo '<option value="'.$member['course_code17'].'">'. $course_names[$member['course_code17'] ].'</option>'    ;
                                         } if ( $member['course_code18'] != 0){
                                             
                                               echo '<option value="'.$member['course_code18'].'">'. $course_names[$member['course_code18'] ].'</option>'    ;
                                         } if ( $member['course_code19'] != 0){
                                             
                                               echo '<option value="'.$member['course_code19'].'">'. $course_names[$member['course_code19'] ].'</option>'    ;
                                         } if ( $member['course_code20'] != 0){
                                             
                                               echo '<option value="'.$member['course_code20'].'">'. $course_names[$member['course_code20'] ].'</option>'    ;
                                         } if ( $member['course_code21'] != 0){
                                             
                                               echo '<option value="'.$member['course_code21'].'">'. $course_names[$member['course_code21'] ].'</option>'    ;
                                         }
                                          if ( $member['course_code11'] != 0){
                                             
                                               echo '<option value="'.$member['course_code11'].'">'. $course_names[$member['course_code11'] ].'</option>'    ;
                                         }if ( $member['course_code15'] != 0){
                                             
                                               echo '<option value="'.$member['course_code15'].'">'. $course_names[$member['course_code15'] ].'</option>'    ;
                                         }if ( $member['course_code4'] != 0){
                                             
                                               echo '<option value="'.$member['course_code4'].'">'. $course_names[$member['course_code4'] ].'</option>'    ;
                                         }if ( $member['course_code3'] != 0){
                                             
                                               echo '<option value="'.$member['course_code3'].'">'. $course_names[$member['course_code3'] ].'</option>'    ;
                                         }if ( $member['course_code22'] != 0){
                                             
                                               echo '<option value="'.$member['course_code22'].'">'. $course_names[$member['course_code22'] ].'</option>'    ;
                                         }if ( $member['course_code23'] != 0){
                                             
                                               echo '<option value="'.$member['course_code23'].'">'. $course_names[$member['course_code23'] ].'</option>'    ;
                                         }if ( $member['course_code24'] != 0){
                                             
                                               echo '<option value="'.$member['course_code24'].'">'. $course_names[$member['course_code24'] ].'</option>'    ;
                                         }
                                         if ( $member['course_code25'] != 0){
                                             
                                               echo '<option value="'.$member['course_code25'].'">'. $course_names[$member['course_code25'] ].'</option>'    ;
                                         }
                                         if ( $member['course_code26'] != 0){
                                             
                                               echo '<option value="'.$member['course_code26'].'">'. $course_names[$member['course_code26'] ].'</option>'    ;
                                         }
                                         if ( $member['course_code27'] != 0){
                                             
                                               echo '<option value="'.$member['course_code27'].'">'. $course_names[$member['course_code27'] ].'</option>'    ;
                                         }
                                         if ( $member['course_code28'] != 0){
                                             
                                               echo '<option value="'.$member['course_code28'].'">'. $course_names[$member['course_code28'] ].'</option>'    ;
                                         }
                                         if ( $member['course_code29'] != 0){
                                             
                                               echo '<option value="'.$member['course_code29'].'">'. $course_names[$member['course_code29'] ].'</option>'    ;
                                         }
                                         if ( $member['course_code30'] != 0){
                                             
                                               echo '<option value="'.$member['course_code30'].'">'. $course_names[$member['course_code30'] ].'</option>'    ;
                                         }  if ( $member['course_code31'] != 0){
                                             
                                               echo '<option value="'.$member['course_code31'].'">'. $course_names[$member['course_code31'] ].'</option>'    ;
                                         }  if ( $member['course_code32'] != 0){
                                             
                                               echo '<option value="'.$member['course_code32'].'">'. $course_names[$member['course_code32'] ].'</option>'    ;
                                         }
                                         
                                         
                                         
                                         
                                         
                                         
                                         
                                         
                                         
                                          echo '</select></td>';
                                             echo '<td>'. $member['salesman']    .'</td>'
                                             .'<td>'.$member['course_type'].'</td>'
                                             .'<td>'.$member['attendance'].'</td>'
                                              
                                             .'<td class="red" id="'.$indexx.'">'. $member['username'] .'</td>'
                                             .'<td class="red" id="'.$indexxx.'">'. $member['password'] .'</td>'
                                             
                                             
                                               .'<td style="color : yellow ;"><mark style="background-color: #dc3545;
    border: 1px solid transparent;
    border-radius: 5px;
    font-weight: bold;
    color: white;
    padding: 5px;">'. $member['accepted_by']    .'</mark></td>'
                                               .'<td style="color : yellow ;"><mark style="background-color: #dc3545;
    border: 1px solid transparent;
    border-radius: 5px;
    font-weight: bold;
    color: white;
    padding: 5px;">'. $member['deleted_by']    .'</mark></td>'
                   
             .'<td style="color : yellow ;"><mark style="background-color: #dc3545;
    border: 1px solid transparent;
    border-radius: 5px;
    font-weight: bold;
    color: white;
    padding: 5px;">'. $member['restored_by']    .'</mark></td>'                                
                                 
            .'<td>'. $member['created_at'] .'</td>'     ;                              
                                             if($member['note']==='0' || empty($member['note'])){
                                             echo '<td><button type="button" class="success btn btn-primary note" style="background-color: #00008B;" name="btn6" id="'.$member['username']  .'" value="'.$member["note"].'">NOTE</button></td>'   ;
                                             }else{
                                                 
                                                 echo '<td><button  type="button" class="success btn btn-primary note" style="background-color: #198754;" name="btn6" id="'.$member['username'] .'"value="'.$member["note"].'"> NOTE</button></td>'   ;
                                             }
                                        
                                             
                                              if($_COOKIE['user'] != 'a15226'){  
                                              
                                             echo '<td><button type="button" class="btn btn-danger delete_user" value="'. $member['password'] .'"   ><i class="fas fa-trash"></i></button></td>'
                                             .'<td class="red"> <input name="permissions[]" type="checkbox" value="'.$id.'" /> </td>';
                                             
                                              } 
                                            
                                              
                                              echo '<td><select style="width: 100%;background-color: transparent;border: none;">';
                                                if( $member['course_code1'] != 0){
                                            
                                                echo '<option >'.$course_names[1] .' ('. $per_array[$member["course_permission1"]].')'.'</option>'    ;
                                         } if ( $member['course_code2'] != 0){
                                             
                                                echo '<option >'.$course_names[2] .' ('. $per_array[$member["course_permission2"]].')'.'</option>'    ;
                                         } if ( $member['course_code3'] != 0){
                                             
                                               echo '<option >'.$course_names[3] .' ('. $per_array[$member["course_permission3"]].')'.'</option>'    ;
                                         } if ( $member['course_code4'] != 0){
                                             
                                               echo '<option >'.$course_names[4] .' ('. $per_array[$member["course_permission4"]].')'.'</option>'    ;
                                         } if ( $member['course_code5'] != 0){
                                             
                                               echo '<option >'.$course_names[5] .' ('. $per_array[$member["course_permission5"]].')'.'</option>'    ;
                                         } if ( $member['course_code6'] != 0){
                                             
                                               echo '<option >'.$course_names[6] .' ('. $per_array[$member["course_permission6"]].')'.'</option>'    ;
                                         } if ( $member['course_code7'] != 0){
                                             
                                              echo '<option >'.$course_names[7] .' ('. $per_array[$member["course_permission7"]].')'.'</option>'    ;
                                         } if ( $member['course_code8'] != 0){
                                             
                                              echo '<option >'.$course_names[8] .' ('. $per_array[$member["course_permission8"]].')'.'</option>'    ;
                                         } if ( $member['course_code9'] != 0){
                                             
                                               echo '<option >'.$course_names[9] .' ('. $per_array[$member["course_permission9"]].')'.'</option>'    ;
                                         } if ( $member['course_code10'] != 0){
                                             
                                               echo '<option >'.$course_names[10] .' ('. $per_array[$member["course_permission10"]].')'.'</option>'    ;
                                         } if ( $member['course_code11'] != 0){
                                             
                                              echo '<option >'.$course_names[11] .' ('. $per_array[$member["course_permission11"]].')'.'</option>'    ;
                                         } if ( $member['course_code12'] != 0){
                                             
                                               echo '<option >'.$course_names[12] .' ('. $per_array[$member["course_permission12"]].')'.'</option>'    ;
                                         } if ( $member['course_code13'] != 0){
                                             
                                               echo '<option >'.$course_names[13] .' ('. $per_array[$member["course_permission13"]].')'.'</option>'    ;
                                         } if ( $member['course_code14'] != 0){
                                             
                                               echo '<option >'.$course_names[14] .' ('. $per_array[$member["course_permission14"]].')'.'</option>'    ;
                                         } if ( $member['course_code15'] != 0){
                                             
                                                echo '<option >'.$course_names[15] .' ('. $per_array[$member["course_permission15"]].')'.'</option>'    ;
                                         } if ( $member['course_code16'] != 0){
                                             
                                               echo '<option >'.$course_names[16] .' ('. $per_array[$member["course_permission16"]].')'.'</option>'    ;
                                         } if ( $member['course_code17'] != 0){
                                             
                                               echo '<option >'.$course_names[17] .' ('. $per_array[$member["course_permission17"]].')'.'</option>'    ;
                                         } if ( $member['course_code18'] != 0){
                                             
                                               echo '<option >'.$course_names[18] .' ('. $per_array[$member["course_permission18"]].')'.'</option>'    ;
                                         } if ( $member['course_code19'] != 0){
                                             
                                               echo '<option >'.$course_names[19] .' ('. $per_array[$member["course_permission19"]].')'.'</option>'    ;
                                         } if ( $member['course_code20'] != 0){
                                             
                                               echo '<option >'.$course_names[20] .' ('. $per_array[$member["course_permission20"]].')'.'</option>'    ;
                                         } if ( $member['course_code21'] != 0){
                                             
                                             echo '<option >'.$course_names[21] .' ('. $per_array[$member["course_permission21"]].')'.'</option>'    ;
                                         }if ( $member['course_code11'] != 0){
                                             
                                             echo '<option >'.$course_names[11] .' ('. $per_array[$member["course_permission11"]].')'.'</option>'    ;
                                         }if ( $member['course_code15'] != 0){
                                             
                                             echo '<option >'.$course_names[15] .' ('. $per_array[$member["course_permission15"]].')'.'</option>'    ;
                                         }if ( $member['course_code4'] != 0){
                                             
                                             echo '<option >'.$course_names[4] .' ('. $per_array[$member["course_permission4"]].')'.'</option>'    ;
                                         }if ( $member['course_code3'] != 0){
                                             
                                             echo '<option >'.$course_names[3] .' ('. $per_array[$member["course_permission3"]].')'.'</option>'    ;
                                         }if ( $member['course_code22'] != 0){
                                             
                                             echo '<option >'.$course_names[22] .' ('. $per_array[$member["course_permission22"]].')'.'</option>'    ;
                                         }if ( $member['course_code23'] != 0){
                                             
                                             echo '<option >'.$course_names[23] .' ('. $per_array[$member["course_permission23"]].')'.'</option>'    ;
                                         }if ( $member['course_code24'] != 0){
                                             
                                             echo '<option >'.$course_names[24] .' ('. $per_array[$member["course_permission24"]].')'.'</option>'    ;
                                         }
                                         if ( $member['course_code25'] != 0){
                                             
                                             echo '<option >'.$course_names[25] .' ('. $per_array[$member["course_permission25"]].')'.'</option>'    ;
                                         }
                                         if ( $member['course_code26'] != 0){
                                             
                                             echo '<option >'.$course_names[26] .' ('. $per_array[$member["course_permission26"]].')'.'</option>'    ;
                                         }
                                         if ( $member['course_code27'] != 0){
                                             
                                             echo '<option >'.$course_names[27] .' ('. $per_array[$member["course_permission27"]].')'.'</option>'    ;
                                         }
                                         if ( $member['course_code28'] != 0){
                                             
                                             echo '<option >'.$course_names[28] .' ('. $per_array[$member["course_permission28"]].')'.'</option>'    ;
                                         }
                                         if ( $member['course_code29'] != 0){
                                             
                                             echo '<option >'.$course_names[29] .' ('. $per_array[$member["course_permission29"]].')'.'</option>'    ;
                                         }
                                         if ( $member['course_code30'] != 0){
                                             
                                             echo '<option >'.$course_names[30] .' ('. $per_array[$member["course_permission30"]].')'.'</option>'    ;
                                         } if ( $member['course_code31'] != 0){
                                             
                                             echo '<option >'.$course_names[31] .' ('. $per_array[$member["course_permission31"]].')'.'</option>'    ;
                                         } if ( $member['course_code32'] != 0){
                                             
                                             echo '<option >'.$course_names[32] .' ('. $per_array[$member["course_permission32"]].')'.'</option>'    ;
                                         }
                                        
                                              
                                            echo'  </select> </td>';
                                              
                                           
                                              if( $_COOKIE['user'] !='a15226'){
                                                  
                                             
                                              if($member['loginset'] == 1){
                                                 echo       '<td><button type="button" class="btn btn-danger"><a href="log_user_out.php?id='. $member['username'] .'" style="color:#fff" >Login</a></button></td>';
                                              }else{
                                                  echo '<td>   </td>';
                                              }
                                              }   
                                                     echo     '<td class="red">'. $member['login_counter'] .'</td>';
                                                      if($_COOKIE['user'] !='a15226'){
                                              echo       '<td><button type="button" class="btn btn-danger restore_user"  value="'. $member['password'] .'">Restore</button></td>';
                                                      }else{
                                                  echo '<td>   </td>';
                                              }
                                    echo '</tr>';
                                    
                                    
                                     if ($code== 21 && $member['user_course_counter'] =='21'){
                                        echo'<tr class="blank_row">
    <td colspan="25" style="background-color: red;">
    </td>
  </tr>';

                                    }
                                    
                                    
                                    endforeach;
   
   ?>
   
   
  
      
  </tbody>
</table>
        
    <input hidden readonly name='filter_course_code_num' value="<?php echo $_GET['search_coursecode'] ?>" >    
        
   <input type="submit" name="give_permissions"  value="give_permissions" class="btn btn-primary" style='<?php if($_COOKIE['user']  == 'a15226'||$_COOKIE['user']  == 'as5263'||$_COOKIE['user']  == 'bs5263'){ echo 'display:none;' ;} ?> z-index:10;background-color: #23ad23;float: right;box-shadow: none;border: none;position: fixed;
    bottom: 15px;
    right: 30px;'/> 
   
   <input type="submit" name="Deny_permissions"  value="Deny_permissions" class="btn btn-primary" style='<?php if($_COOKIE['user']  == 'a15226'||$_COOKIE['user']  == 'as5263'||$_COOKIE['user']  == 'bs5263'){ echo 'display:none;' ;} ?> z-index:10;background-color: #f00;float: right;box-shadow: none;border: none;margin-right:5px;    position: fixed;
    bottom: 15px;
    right: 200px;'/> 
 
  <!--  <input type="submit" name="not_b"  value="NOTE " class="btn btn-primary" style='background-color: #f00;float: right;box-shadow: none;border: none;margin-right:5px'/> -->
     
     </form>
           
        

  
<form method="POST" action="export.php">
    <input hidden readonly value="<?php echo $_GET['search_coursecode'] ?>" name='filter_course_code'>
    <input hidden readonly value="<?php echo $_GET['search_permissions']  ?>" name='per_filter'>
    <input hidden readonly value="<?php echo $_GET['search_text'] ?>" name='text_filter'>
<input type="submit" name="export"  value="Export To Excel "class="btn btn-primary" style='position: fixed;
    bottom: 15px;
    left: 30px; z-index:10'/>
</form>        
   



<div style='height: 70px;
    background-color: white;
    width: 100%;
    position: fixed;
    bottom: 0;
    left: 0;
'>
    
</div>

<div style='    height: 200px;
    background-color: white;
    width: 100%;
    position: fixed;
    top: 0;
    left: 0;
'>
    
</div>


               
        
          
        
          </div>
        </div>
      </div>
    </div>

  </div>
  
        
   
        
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  <script>
      $(window).scroll(function() {
  sessionStorage.scrollTop = $(this).scrollTop();
});

$(document).ready(function() {
  if (sessionStorage.scrollTop != "undefined") {
    $(window).scrollTop(sessionStorage.scrollTop);
  }
});
  </script>
<script>
$('#selectAll').click(function(e){
    var table= $(e.target).closest('table');
    $('td input:checkbox',table).prop('checked',this.checked);
});



</script>


<script>
    $(document).on('change', '.course_select', function(e) {
   
     var f= document.getElementById('zz');
     f.click();
 

    
    });
    
 
</script>

<script>
      
      // Alert Modal Type
		$(document).on('click', '.note', function(e) {
		    var x=e.target.id;
		    var y=e.target.value;

       
		 var form = document.createElement("div");
  form.innerHTML = `
<form method="POST" id='note_form'  action='create_note.php'>
	<input hidden readonly value='`+x+`' name='user_name'>
  <textarea id="w3review" name="note"  rows="4" cols="50" style="width: 100%;">`+y+`</textarea>
  <br>
    <input type="submit" name="s_n" class="btn btn-primary" value="SAVE" style='background-color: #198754;float: center; transform: translate(-180px, 10px);'>
</form> 
          `;

          Swal.fire({
            title: 'NOTE',
            text: 'Write Your Note',
            html: form,
           
          }).then((value) => {
            //console.log(value);
          });

    $("#note_form").submit(function(event) {
          event.preventDefault(); //prevent default action 
          let post_url = $(this).attr("action"); //get form action url
          let request_method = $(this).attr("method"); //get form GET/POST method
          let form_data = $(this).serialize(); //Encode form elements for submission	
         
          $.ajax({
              url: post_url,
              type: request_method,
              data: form_data
            }).done(function(response) { 
              		Swal.fire({title: "Good job", text: "Your note has been saved successfully !", icon: "success"}).then(function(){ 
                location.reload();
      }
    );
            }); 
        });

	
		});


   /*  $(document).ready(function(){
  $("#main_form").on("submit", function(){
     
    $("#pageloader").fadeIn();
 setTimeout(function () { window.location.reload(); }, 100);
  });//submit
  
  
  
});


*/

function edit_info(e){
     var form = document.createElement("div");
     var old_value = e.innerText
     var data_id = e.id;
     var edit_data = data_id.split("_") ;
     var user_data_type =edit_data[0];
     var user_name=edit_data[1];

  form.innerHTML = `
<form method="POST" id='edit_form'  action='edit_data.php'>
	<input hidden readonly value='`+user_data_type+`' name='user_data_type'>
	<input hidden readonly value='`+user_name+`' name='user_name'>
  <textarea id="w3review" name="new_value"  rows="4" cols="50" style="width: 100%;">`+old_value+`</textarea>
  <br>
    <input type="submit" name="ssas" class="btn btn-primary" value="SAVE" style='background-color: #198754;float: center; transform: translate(-180px, 10px);'>
</form> 
          `;

          Swal.fire({
            title: 'Edit',
            text: 'Edit Your Info',
            html: form,
           
          }).then((value) => {
            //console.log(value);
          });
     $("#edit_form").submit(function(event) {
          event.preventDefault(); //prevent default action 
          let post_url = $(this).attr("action"); //get form action url
          let request_method = $(this).attr("method"); //get form GET/POST method
          let form_data = $(this).serialize(); //Encode form elements for submission	
         
          $.ajax({
              url: post_url,
              type: request_method,
              data: form_data
            }).done(function(response) { //
              	Swal.fire({title: "Good job", text: "Your edits has been saved successfully !", icon: "success"}).then(function(){ 
                location.reload();
      }
    );
            }); 
        });

	
}

	$(document).on('click', '.restore_user', function(e) {
		   var user_restore = $(this).val();
	
       
	

 Swal.fire({
  title: 'Are you sure you want to restore this person ?',
 
  html:`
<form method="POST" id='restore_user_form'  action='restore_user.php' >
	<input hidden readonly value='`+user_restore+`' name='user_restore'>

  <br>
    <input type="submit" name="user_restore_btn" value="yes" class="btn btn-primary" style="  border-radius: 5px;
    background: #1c995f;
    color: #fff;
    border: none;
    font-size: larger;
    margin-top: -16px;
    padding: 7px 25px;">
</form> 
          `,
  showCloseButton: true,
  showConfirmButton: false,
  showCancelButton: false,
  focusConfirm: false,
  
  confirmButtonAriaLabel: 'Thumbs up, great!',
  cancelButtonText:
    'Cancel',
  cancelButtonAriaLabel: 'Thumbs down'
})
      $("#restore_user_form").submit(function(event) {
          event.preventDefault(); //prevent default action 
          let post_url = $(this).attr("action"); //get form action url
          let request_method = $(this).attr("method"); //get form GET/POST method
          let form_data = $(this).serialize(); //Encode form elements for submission	
         
          $.ajax({
              url: post_url,
              type: request_method,
              data: form_data
            }).done(function(response) { //
               Swal.fire('Saved!', '', 'success');
                location.reload();
    
            }); 
        });

	
		});
		
		
	$(document).on('click', '.delete_user', function(e) {
		   var user_delete = $(this).val();
	
      

 Swal.fire({
  title: 'Are you sure you want to delete this person ?',
 
  html:`
<form method="POST" id='delete_user_form'  action='deleteData.php' >
	<input hidden readonly value='`+user_delete+`' name='user_delete'>

  <br>
    <input type="submit"  value="yes" class="btn btn-primary" style="  border-radius: 5px;
    background:#ef4339;
    color: #fff;
    border: none;
    font-size: larger;
    margin-top: -16px;
    padding: 7px 25px;">
</form> 
          `,
  showCloseButton: true,
  showConfirmButton: false,
  showCancelButton: false,
  focusConfirm: false,
  
  confirmButtonAriaLabel: 'Thumbs up, great!',
  cancelButtonText:
    'Cancel',
  cancelButtonAriaLabel: 'Thumbs down'
})
      $("#delete_user_form").submit(function(event) {
          event.preventDefault(); //prevent default action 
          let post_url = $(this).attr("action"); //get form action url
          let request_method = $(this).attr("method"); //get form GET/POST method
          let form_data = $(this).serialize(); //Encode form elements for submission	
         
          $.ajax({
              url: post_url,
              type: request_method,
              data: form_data
            }).done(function(response) { //
               Swal.fire('Saved!', '', 'success');
                location.reload();
    
            }); 
        });

	
		});
		
		
		
		
				
		
  </script>
<script>
    
        $("#main_form").submit(function(event) {
             $("#pageloader").fadeIn();
          event.preventDefault(); //prevent default action 
          let post_url = $(this).attr("action"); //get form action url
          let request_method = $(this).attr("method"); //get form GET/POST method
          let form_data = $(this).serialize(); //Encode form elements for submission	
         let clicked_btn =$(document.activeElement).val(); 
         console.log(clicked_btn);
        if(clicked_btn == 'give_permissions'){
           post_url = post_url 
        }else if(clicked_btn == 'Deny_permissions'){
            post_url = 'deny_permission.php'
        }
          $.ajax({
              url: post_url,
              type: request_method,
              data: form_data,
             
            }).done(function(response) { //
            console.log(response);
             
                location.reload();
   
            }); 
        });
        
        
    $(function() {
    $('td').click(function() {
        $('tr').removeClass('active_row');
              $('td').removeClass('active_cell');
              $('td').removeClass('active_cell_2');
        $(this).parent().addClass('active_row'); 
       let cell_name =$(this).parent().children('td')[1];
       let cell_phone =$(this).parent().children('td')[2];
   
       $(cell_name).addClass('active_cell');
       $(cell_phone).addClass('active_cell_2');
        
    });
});   

   $("#delete_form").submit(function(event) {
          event.preventDefault(); //prevent default action 
          let post_url = $(this).attr("action"); //get form action url
          let request_method = $(this).attr("method"); //get form GET/POST method
          let form_data = $(this).serialize(); //Encode form elements for submission	
         
          $.ajax({
              url: post_url,
              type: request_method,
              data: form_data
            }).done(function(response) { //
              	swal({title: "Good job", text: "Record  has been deleted successfully !", icon: "success"}).then(function(){ 
                location.reload();
      }
    );
            }); 
        });



</script>

    </body>
</html>
<?php 
}elseif(!isset($id)){
	    
	    	    $user=$_COOKIE['user'];

	    
	    
               	header("Location: reviewData.php?id=$user");
		        exit(); 
	    
	}else{

	header("Location: index.php");
	exit();
}


?>