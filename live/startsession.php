<?php 
session_start();
$sname= "localhost";
$unmae= "u471974205_livesystem";
$password = "1bf#xLyAvD#";

$db_name = "u471974205_livesystem";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

?>

<?php 

     $id=$_GET['id'];
     $lang=$_GET['lang'];
     $coursecode=$_GET['coursecode'];
     $value=$_GET['value'];
      $sql2 = "UPDATE courseData SET check_value = '$value' WHERE id='$coursecode'";
      mysqli_query($conn, $sql2);                
      
   
          
               $sqll = "UPDATE users SET user_course_counter = user_course_counter + 1  WHERE coursecode='$coursecode'";
                mysqli_query($conn, $sqll);     
                echo $id;
                
       $_SESSION['id'] = $id;
       header("Location: index.php?id=".$id."&lang=$lang"  );
                         exit();

          
      

?>
           
 