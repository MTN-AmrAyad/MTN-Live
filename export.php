  <?php  
include "db_conn.php";
mysqli_set_charset($conn,'utf8');
/* $query_export = "SELECT * FROM userData ";
 $result_export = mysqli_query($conn, $query_export);

$output_export = '
   <table class="table" bordered="1">  
                    <tr>  
  
      <th scope="col">Full name</th>
      <th scope="col">City  </th>
      <th scope="col">Nationality  </th>
      <th scope="col">Work </th>
      <th scope="col">Email </th>
      <th scope="col">  Date Of Birth</th>
      <th scope="col"> Phone number </th>

     
                    </tr>
  ';
  while($row_export = mysqli_fetch_assoc($result_export))
  {
   $output_export .= '
    <tr> 

                         <td>'.$row_export["name"].'</td>  
                         <td>'.$row_export["city"].'</td>  
                         <td>'.$row_export["nationality"].'</td>  
                         <td>'.$row_export["work"].'</td>  
                          <td>'.$row_export["email"].'</td>  
                         <td>'.$row_export["birthofdate"].'</td>
                          <td>'.$row_export["phone"].'</td>
                 
                    </tr>
   ';
  }
  $output_export .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
*/

/*$filename = "phpzag_data_export_".date('Ymd') . ".xls";			
	header("Content-Type: application/vnd.ms-excel");
	header("Content-Disposition: attachment; filename=\"$filename\"");	
	$show_coloumn = false;
	if(!empty($data)) {
	  foreach($data as $record) {
		if(!$show_coloumn) {
		  // display field/column names in first row
		  echo implode("\t", array_keys($record)) . "\n";
		  $show_coloumn = true;
		}
		echo implode("\t", array_values($record)) . "\n";
	  }
	}
	exit;  
 */
     
    
     if(isset($_POST['filter_course_code']) && (!empty($_POST['text_filter']))&& isset($_POST['per_filter']) ){
         $filter_course_code=$_POST['filter_course_code'];
         $per_filter=$_POST['per_filter'];
         $text_filter=$_POST['text_filter'];

       
 
             if($filter_course_code != 0){
                 /*
                      $sql = "SELECT name,city,nationality,work,email,birthofdate,phone,salesman,username,password  FROM userData where  email  LIKE '%$text_filter%' OR phone  LIKE '%$text_filter%' OR work  LIKE '%$text_filter%'  OR username  LIKE '%$text_filter%' OR password  LIKE '%$text_filter%' OR nationality  LIKE '%$text_filter%' OR salesman  LIKE '%$text_filter%' OR name  LIKE '%$text_filter%' OR accepted_by  LIKE '%$text_filter%' OR city  LIKE '%$text_filter%' AND coursecode ='$filter_course_code' AND  user_permission ='$per_filter' ;"; 
                      */
                     $sql = "SELECT name,city,nationality,work,email,birthofdate,phone,salesman,username,password FROM userData where ( course_code$filter_course_code = '$filter_course_code' OR coursecode = '$filter_course_code' )  AND ( email  = '$text_filter' 
                     OR phone = '$text_filter' OR work   = '$text_filter'  OR username   = '$text_filter' OR password   = '$text_filter' OR nationality   = '$text_filter' OR salesman   = '$text_filter' OR name   = '$text_filter' OR accepted_by   = '$text_filter' OR city   = '$text_filter' );"; 
             }else{
                 /*
                      $sql = "SELECT name,city,nationality,work,email,birthofdate,phone,salesman,username,password  FROM userData where  email  LIKE '%$text_filter%' OR phone  LIKE '%$text_filter%' OR work  LIKE '%$text_filter%'  OR username  LIKE '%$text_filter%' OR password  LIKE '%$text_filter%' OR nationality  LIKE '%$text_filter%' OR salesman  LIKE '%$text_filter%' OR name  LIKE '%$text_filter%' OR accepted_by  LIKE '%$text_filter%' OR city  LIKE '%$text_filter%' AND  user_permission ='$per_filter' ;";  */
                      
                      
                        $sql = "SELECT name,city,nationality,work,email,birthofdate,phone,salesman,username,password  FROM userData where   email  = '$text_filter' 
                     OR phone = '$text_filter' OR work   = '$text_filter'  OR username   = '$text_filter' OR password   = '$text_filter' OR nationality   = '$text_filter' OR salesman   = '$text_filter' OR name   = '$text_filter' OR accepted_by   = '$text_filter' OR city   = '$text_filter' ;"; 
             }
        
        
       
     
   }else if (isset($_POST['filter_course_code']) &&  (!empty($_POST['text_filter']))){
       
         $filter_course_code=$_POST['filter_course_code'];
         $text_filter=$_POST['text_filter'];   
          
         if($filter_course_code != 0){
        
                  /*    $sql = "SELECT name,city,nationality,work,email,birthofdate,phone,salesman,username,password  FROM userData where  email  LIKE '%$text_filter%' OR phone  LIKE '%$text_filter%' OR work  LIKE '%$text_filter%'  OR username  LIKE '%$text_filter%' OR password  LIKE '%$text_filter%' OR nationality  LIKE '%$text_filter%' OR salesman  LIKE '%$text_filter%' OR name  LIKE '%$text_filter%' OR accepted_by  LIKE '%$text_filter%' OR city  LIKE '%$text_filter%' AND coursecode ='$filter_course_code' ;"; */
                  
                   $sql = "SELECT name,city,nationality,work,email,birthofdate,phone,salesman,username,password  FROM userData where ( course_code$filter_course_code = '$filter_course_code' OR coursecode = '$filter_course_code' )  AND ( email  = '$text_filter' 
                     OR phone = '$text_filter' OR work   = '$text_filter'  OR username   = '$text_filter' OR password   = '$text_filter' OR nationality   = '$text_filter' OR salesman   = '$text_filter' OR name   = '$text_filter' OR accepted_by   = '$text_filter' OR city   = '$text_filter' );"; 
         }else{
             
            /*   $sql = "SELECT name,city,nationality,work,email,birthofdate,phone,salesman,username,password  FROM userData where  email  LIKE '%$text_filter%' OR phone  LIKE '%$text_filter%' OR work  LIKE '%$text_filter%'  OR username  LIKE '%$text_filter%' OR password  LIKE '%$text_filter%' OR nationality  LIKE '%$text_filter%' OR salesman  LIKE '%$text_filter%' OR name  LIKE '%$text_filter%' OR accepted_by  LIKE '%$text_filter%' OR city  LIKE '%$text_filter%' ;"; */
            
             $sql = "SELECT name,city,nationality,work,email,birthofdate,phone,salesman,username,password  FROM userData where   email  = '$text_filter' 
                     OR phone = '$text_filter' OR work   = '$text_filter'  OR username   = '$text_filter' OR password   = '$text_filter' OR nationality   = '$text_filter' OR salesman   = '$text_filter' OR name   = '$text_filter' OR accepted_by   = '$text_filter' OR city   = '$text_filter' ;"; 
         }
         
   }else if(isset($_POST['filter_course_code']) && isset($_POST['per_filter'])){
         $filter_course_code=$_POST['filter_course_code'];
         $per_filter=$_POST['per_filter'];
        
        
          if($filter_course_code != 0){
          if($per_filter == 5){
          
                 /* $sql = "SELECT name,city,nationality,work,email,birthofdate,phone,salesman,username,password  FROM userData where coursecode ='$filter_course_code' ;"; */
                    $sql = "SELECT name,city,nationality,work,email,birthofdate,phone,salesman,username,password  FROM userData where course_code$filter_course_code = '$filter_course_code' OR coursecode = '$filter_course_code' ;"; 
          
               } else if ($per_filter == 6){
                     $sql = "SELECT name,city,nationality,work,email,birthofdate,phone,salesman,username,password  FROM userData where   deleted_by != '0' AND (course_code$filter_course_code = '$filter_course_code' OR coursecode = '$filter_course_code') ;"; 
                   
                   }else{
            
                  /*  $sql = "SELECT name,city,nationality,work,email,birthofdate,phone,salesman,username,password  FROM userData where user_permission ='$per_filter' AND coursecode ='$filter_course_code' ;"; */
                   if(strlen($per_filter) >1){
                       $sql ="SELECT name,city,nationality,work,email,birthofdate,phone,salesman,username,password  FROM userData where ( course_type ='$per_filter' OR attendance = '$per_filter')  AND   (course_code$filter_course_code = '$filter_course_code' OR coursecode = '$filter_course_code' )  ;";
                       
                   }else{
                  $sql ="SELECT name,city,nationality,work,email,birthofdate,phone,salesman,username,password  FROM userData where (user_permission ='$per_filter' OR course_permission$filter_course_code='$per_filter' ) AND   (course_code$filter_course_code = '$filter_course_code' OR coursecode = '$filter_course_code' )  ;";
                   }
              }
          }else{
                if($per_filter == 5){
          
                  $sql = "SELECT name,city,nationality,work,email,birthofdate,phone,salesman,username,password  FROM userData ;"; 
          
               }else if ($per_filter == 6){
                     $sql = "SELECT name,city,nationality,work,email,birthofdate,phone,salesman,username,password  where  deleted_by != '0'  FROM userData ;"; 
                   
                }else{
            
                    $sql = "SELECT name,city,nationality,work,email,birthofdate,phone,salesman,username,password  FROM userData where user_permission ='$per_filter' OR ( course_type ='$per_filter' OR attendance = '$per_filter') ;";
 
              } 
              
          }
   }else if (isset($_POST['filter_course_code'])){
          $filter_course_code=$_POST['filter_course_code'];
        if($filter_course_code != 0){
        
           // $sql = "SELECT name,city,nationality,work,email,birthofdate,phone,salesman,username,password  FROM userData where coursecode ='$filter_course_code' ;"; 
           $sql = "SELECT name,city,nationality,work,email,birthofdate,phone,salesman,username,password  FROM userData where  course_code$filter_course_code = '$filter_course_code'  OR coursecode = '$filter_course_code'  ;"; 
        }else{
             $sql = "SELECT name,city,nationality,work,email,birthofdate,phone,salesman,username,password FROM userData "; 
        }
   }else{
       $sql = "SELECT name,city,nationality,work,email,birthofdate,phone,salesman,username,password FROM `userData`";  
   }
   

$setRec = mysqli_query($conn, $sql);  
$columnHeader = '';  
$columnHeader = "name" . "\t" . "city" . "\t" . "nationality" . "\t" ."work" . "\t" . "email" . "\t" . "birthofdate". "\t" ."phone" . "\t" . "salesman". "\t" ."username" . "\t" . "password";  
$setData = '';  
  while ($rec = mysqli_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . utf8_encode($value) . '"' . "\t";  
        $rowData .= utf8_encode($value) ;  
    }  
    $setData .= trim($rowData) . "\n";  
}  

header("Content-type: application/octet-stream ; charset=utf-8");  
header("Content-Disposition: attachment; filename=User_Detail.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  
chr(255).chr(254).iconv("UTF-8", "UTF-16LE//IGNORE", $setData);
  echo ucwords($columnHeader) . "\n" . $setData . "\n";  
?>

   