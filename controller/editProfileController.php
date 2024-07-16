<?php 
session_start();
require_once '../model/profile.php';
require_once "../model/db_conn.php";


$lang=$_POST["lang"];

$user=$_POST['pass'];
                  $pic=$_POST['pic'];
                  $name=$_POST['name'];
                  $work=$_POST['work'];
                  $city=$_POST['city'];
                  $phone=$_POST['phone'];
                  $email=$_POST['email'];
                  $nationality=$_POST['nationality'];
                  $birthofdate=$_POST['birthofdate'];
                 $image_temp=$_FILES["pic"]["tmp_name"];
                 $image_name= $_FILES["pic"]["name"];
                
               $response =  Profile::edit_profile_data($user,$pic,$name,$work,$city,$phone,$email,$nationality,$birthofdate,$image_temp,$image_name);
               if($response){
                    header("Location: ../profile.php?id=$user&lang=$lang");
                    exit();
               }