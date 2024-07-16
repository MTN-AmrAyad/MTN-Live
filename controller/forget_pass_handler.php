<?php 
session_start();
require_once '../model/profile.php';
require_once "../model/db_conn.php";


$pass1=$_POST['new_pass'];
$pass2=$_POST['c_pass'];
$old_pass=$_POST['old_pass']  ;              
               $response =  Profile::update_pass($pass1,$pass2,$old_pass);
               if($response){
                    header("Location: ../login.php");
               }