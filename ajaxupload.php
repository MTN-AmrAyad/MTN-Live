<?php
 include 'db_conn.php';
        
           
           
                         
            		    $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'docx' , 'pdf' , 'doc' , 'ppt'); // valid extensions
$path = 'view/imgs/attachment/'; // upload directory
if(!empty($_POST['user_id'])|| $_FILES['image'])
{
    $user_id=$_POST['user_id'];
$img = $_FILES['image']['name'];
$tmp = $_FILES['image']['tmp_name'];
// get uploaded file's extension
$ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
// can upload same image using rand function
$final_image = rand(1000,1000000).$img;
// check's valid format
if(in_array($ext, $valid_extensions)) 
{ 
$path = $path.strtolower($final_image); 
if(move_uploaded_file($tmp,$path)) 
{
//echo "<img src='$path' />";

//include database configuration file
// include 'db_conn.php';
//insert form data in the database
$insert = $conn->query("INSERT INTO chat (id, name, message , group_id ,user , attachment)
		VALUES (' ','$finalname','0','$group_type','$username','$path')");
// echo $img;
echo $img."-".$path;
}}}

console.log($path); 
 
