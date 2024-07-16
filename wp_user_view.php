<?php

$sname= "localhost";
$unmae= "u471974205_livesystem";
$password = "1bf#xLyAvD#";

$db_name = "u471974205_livesystem";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
	
	
	
}?>
<html>
    <head>
           
         <link rel="stylesheet" href="view/bootstrap/css/bootstrap.css" />
    <script src="view/bootstrap/js/bootstrap.js"></script>
    
    </head>
    <body>
        
        
        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">email</th>
      <th scope="col">phone</th>
      <th scope="col">user_name</th>
      <th scope="col">County</th>
      <th scope="col">course_id</th>
    </tr>
  </thead>
  
  
  
 
  <tbody>
    
      <?php
  
        $x=1;

  
      
 

  $sql = "SELECT * FROM wp_users";
$datas = $conn->query($sql);
      
    
      foreach($datas as $data){
        //   $course_name=$data['course_id'];
        //   $dataa['course_name_ar'];
          $sqll = "SELECT * FROM courseData where id='$course_name'";
$datass = $conn->query($sqll);
    // foreach($datass as $dataa){
         $xx=$x+10;
  $xxx=$x+110;
  $xxxx=$x+1110;
  $xxxxx=$x+11110;
  $xxxxxx=$x+111110;
  $xxxxxxx=$x+1111110;
          echo'<tr>'.
              '<th scope="row">'.$x.'</th>'.
              '<td id="'.$x.'">'.$data['first_name'].'</td>'.
              '<td id="'.$xxx.'">'.$data['last_name'].'</td>'.
              '<td id="'.$xxxx.'">'.$data['email'].'</td>'.
              '<td id="'.$xxxxxx.'">'.$data['phone'].'</td>'.
              '<td id="'.$xx.'">'.$data['user_name'].'</td>'.
              '<td id="'.$xxxxxxx.'">'.$data['County'].'</td>'.
              '<td id="'.$xxxxx.'">'.$data['course_id'].'</td>'.
            '</tr>';
            $x=$x+1;
    //   }
      }
      ?>
 
  </tbody>
</table>
        
        
    </body>
    
    
    
</html>