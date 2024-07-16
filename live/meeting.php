<!DOCTYPE html>
<?php


include "../db_conn.php";


     $user=$_COOKIE['user'];
    // 	if( ($user == 'a22059')|| ( $user == 'm13988') || ( $user == 'm21862')|| ( $user == 'm21859') || ( $user == 'ataf_1907_mtn') || ( $user == 'm29549')){
 	if(  ( $user == 'ataf_1907_mtn') ){
      $sql = "SELECT * FROM users WHERE qrcode='$user'";


		$result = mysqli_query($conn, $sql);
	    $row = mysqli_fetch_assoc($result);

     $coursecode=$row['coursecode'];
     $sql2 = "UPDATE courseData SET check_value = '1' WHERE id='$coursecode'";
      mysqli_query($conn, $sql2);                
      
      
    	}
     


?>
<head>
    <title>MTN Live</title>
    <meta charset="utf-8" />
    
    <link type="text/css" rel="stylesheet" href="https://source.zoom.us/2.17.0/css/bootstrap.css" />
    <link type="text/css" rel="stylesheet" href="https://source.zoom.us/2.17.0/css/react-select.css" />

    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="origin-trial" content="">
</head>

<body>
    <script src="https://source.zoom.us/2.17.0/lib/vendor/react.min.js"></script>
    <script src="https://source.zoom.us/2.17.0/lib/vendor/react-dom.min.js"></script>
    <script src="https://source.zoom.us/2.17.0/lib/vendor/redux.min.js"></script>
    <script src="https://source.zoom.us/2.17.0/lib/vendor/redux-thunk.min.js"></script>
    <script src="https://source.zoom.us/2.17.0/lib/vendor/lodash.min.js"></script>
    <script src="https://source.zoom.us/zoom-meeting-2.17.0.min.js"></script>
    <script src="js/tool.js?<?php echo time(); ?>"></script>
    <script src="js/vconsole.min.js"></script>
    <script src="js/meeting.js?<?php echo time(); ?>"></script>


</body>

</html>