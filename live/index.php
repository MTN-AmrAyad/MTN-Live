
<!DOCTYPE html>
<html>

<?php 


$sname= "localhost";
$unmae= "u471974205_livesystem";
$password = "1bf#xLyAvD#";

$db_name = "u471974205_livesystem";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);


session_start();
            require_once '../model/lang.php';
                        require_once '../model/course.php';


$lang=$_GET["lang"];
	    $cours_id=$_COOKIE['coursecode'];

$id=$_GET["id"];
  		    $user=$_COOKIE['user'];
// if($id==$user){

	$sql = "SELECT * FROM users WHERE qrcode='$id'";


		$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_assoc($result);

 $coursecode = $row['coursecode'];
 $user_status = $row['user_status'];






	$sql3 = "SELECT * FROM userData WHERE password='$id'";


		$result3 = mysqli_query($conn, $sql3);
			$row3 = mysqli_fetch_assoc($result3);


		$user_name = $row3['username'];
		$user_email = $row3['email'];
		
		
		
	  if(empty($user_name)){
    	$user_name = 'admin';
}
     
     
     	    

if($lang=='ar'){
    $style='font-size:12px';
    $arabicMobileMenu='width: 200px ; padding: 5px 24px 10px;';
             $course_name = Course::get_courses_name_if_ar($cours_id);


	        $word1=Lang::get_lang_if_ar('Profile');
            $wordone= $word1[0]['ar'];
            
            $word2=Lang::get_lang_if_ar('Certifcates');
            $wordtwo= $word2[0]['ar'];
            
            $word3=Lang::get_lang_if_ar('Home');
            $wordthre= $word3[0]['ar'];
            
            $word4=Lang::get_lang_if_ar('Live');
            $wordfour= $word4[0]['ar'];
            
            $word5=Lang::get_lang_if_ar('Calendar');
            $wordfive= $word5[0]['ar'];
            
            $word6=Lang::get_lang_if_ar('Manual');
            $wordsix= $word6[0]['ar'];
            
            $word7=Lang::get_lang_if_ar('Playlist');
            $wordseven= $word7[0]['ar'];
            
            $word8=Lang::get_lang_if_ar('Clips');
            $wordeight= $word8[0]['ar'];
            
            $word9=Lang::get_lang_if_ar('Log Out');
            $wordnine= $word9[0]['ar'];
            
            $word10=Lang::get_lang_if_ar('Current Course');
            $wordten= $word10[0]['ar'];
            
            $word11=Lang::get_lang_if_ar('Offers');
            $wordeleven= $word11[0]['ar'];
            
            $word12=Lang::get_lang_if_ar('Your Courses');
            $wordtwelve= $word12[0]['ar'];
            
            $word13=Lang::get_lang_if_ar('Clubs');
            $wordtherteen= $word13[0]['ar'];
            
            
            $word14=Lang::get_lang_if_ar('Chat');
            $wordfourteen= $word14[0]['ar'];
            
            $word15=Lang::get_lang_if_ar('About');
            $wordfiveteen= $word15[0]['ar'];
            
            $word16=Lang::get_lang_if_ar('Edit');
            $wordsixteen= $word16[0]['ar'];
            
            $word17=Lang::get_lang_if_ar('Reset Password');
            $wordseventeen= $word17[0]['ar'];
            
            $word18=Lang::get_lang_if_ar('Welcome to MTN Live Stream');
            $wordeightteen= $word18[0]['ar'];
            
            $word19=Lang::get_lang_if_ar('Join Meeting');
            $wordnineteen= $word19[0]['ar']; 
            
            
            $word20=Lang::get_lang_if_ar("meeting don\'t start yet");
            $wordtwentey= $word20[0]['ar'];
            
            $word50=Lang::get_lang_if_ar('MTN Support');
            $wordfivety= $word50[0]['ar'];
            
            // START WITH WORD 25
            
}elseif($lang=='en'){
        $style='font-size:none';
         $course_name = Course::get_courses_name($cours_id);

     $word1=Lang::get_lang_if_en('Profile');
            $wordone= $word1[0]['en'];
            
            $word2=Lang::get_lang_if_en('Certifcates');
            $wordtwo= $word2[0]['en'];
            
            $word3=Lang::get_lang_if_en('Home');
            $wordthre= $word3[0]['en'];
            
            $word4=Lang::get_lang_if_en('Live');
            $wordfour= $word4[0]['en'];
            
            $word5=Lang::get_lang_if_en('Calendar');
            $wordfive= $word5[0]['en'];
            
            $word6=Lang::get_lang_if_en('Manual');
            $wordsix= $word6[0]['en'];
            
            $word7=Lang::get_lang_if_en('Playlist');
            $wordseven= $word7[0]['en'];
            
            $word8=Lang::get_lang_if_en('Clips');
            $wordeight= $word8[0]['en'];
            
            $word9=Lang::get_lang_if_en('Log Out');
            $wordnine= $word9[0]['en'];
            
            $word10=Lang::get_lang_if_en('Current Course');
            $wordten= $word10[0]['en'];
            
             $word11=Lang::get_lang_if_en('Offers');
            $wordeleven= $word11[0]['en'];
            
            $word12=Lang::get_lang_if_en('Your Courses');
            $wordtwelve= $word12[0]['en'];
            
            $word13=Lang::get_lang_if_en('Clubs');
            $wordtherteen= $word13[0]['en']; 
            
            $word14=Lang::get_lang_if_en('Chat');
            $wordfourteen= $word14[0]['en'];
            
            $word15=Lang::get_lang_if_en('About');
            $wordfiveteen= $word15[0]['en'];
            
            $word16=Lang::get_lang_if_en('Edit');
            $wordsixteen= $word16[0]['en'];
            
            $word17=Lang::get_lang_if_en('Reset Password');
            $wordseventeen= $word17[0]['en'];
            
            $word18=Lang::get_lang_if_en('Welcome to MTN Live Stream');
            $wordeightteen= $word18[0]['en'];
            
            $word19=Lang::get_lang_if_en('Join Meeting');
            $wordnineteen= $word19[0]['en'];
            
            $word20=Lang::get_lang_if_en("meeting don\'t start yet");
            $wordtwentey= $word20[0]['en'];
            
            $word50=Lang::get_lang_if_en('MTN Support');
            $wordfivety= $word50[0]['en'];
            
            // START WITH WORD 25
    
}else{
     $word1=Lang::get_lang_if_ar('Profile');
              $course_name = Course::get_courses_name_if_ar($cours_id);

            $wordone= $word1[0]['ar'];
            
            $word2=Lang::get_lang_if_ar('Certifcates');
            $wordtwo= $word2[0]['ar'];
            
            $word3=Lang::get_lang_if_ar('Home');
            $wordthre= $word3[0]['ar'];
            
            $word4=Lang::get_lang_if_ar('Live');
            $wordfour= $word4[0]['ar'];
            
            $word5=Lang::get_lang_if_ar('Calendar');
            $wordfive= $word5[0]['ar'];
            
            $word6=Lang::get_lang_if_ar('Manual');
            $wordsix= $word6[0]['ar'];
            
            $word7=Lang::get_lang_if_ar('Playlist');
            $wordseven= $word7[0]['ar'];
            
            $word8=Lang::get_lang_if_ar('Clips');
            $wordeight= $word8[0]['ar'];
            
            $word9=Lang::get_lang_if_ar('Log Out');
            $wordnine= $word9[0]['ar'];
            
            $word10=Lang::get_lang_if_ar('Current Course');
            $wordten= $word10[0]['ar'];
            
            $word11=Lang::get_lang_if_ar('Offers');
            $wordeleven= $word11[0]['en'];
            
            $word12=Lang::get_lang_if_ar('Your Courses');
            $wordtwelve= $word12[0]['en'];
            
            $word13=Lang::get_lang_if_ar('Clubs');
            $wordtherteen= $word13[0]['en']; 
            
            $word14=Lang::get_lang_if_ar('Chat');
            $wordfourteen= $word14[0]['en'];
            
            $word15=Lang::get_lang_if_ar('About');
            $wordfiveteen= $word15[0]['ar'];
            
            $word16=Lang::get_lang_if_ar('Edit');
            $wordsixteen= $word16[0]['ar'];
            
            $word17=Lang::get_lang_if_ar('Reset Password');
            $wordseventeen= $word17[0]['ar'];
            
            $word18=Lang::get_lang_if_ar('Welcome to MTN Live Stream');
            $wordeightteen= $word18[0]['ar'];
            
            $word19=Lang::get_lang_if_ar('Join Meeting');
            $wordnineteen= $word19[0]['ar'];
            
            $word20=Lang::get_lang_if_ar("meeting don\'t start yet");
            $wordtwentey= $word20[0]['ar'];
            
           
            $word50=Lang::get_lang_if_ar('MTN Support');
            $wordfivety= $word50[0]['ar'];
            // START WITH WORD 25
}
     
     // if(($user == 'a22059')|| ( $user == 'm13988') || ( $user == 'm21862')|| ( $user == 'm21859') || ( $user == 'ataf_1907_mtn') || ( $user == 'm29549')||($user=='a15226')){
     
	if( $user_status==0 || $row['loginset'] == 1 && $id==$user){

  		    $user=$_COOKIE['user'];

          $sqll = "SELECT * FROM courseData WHERE id='$coursecode'";
		  $resultt = mysqli_query($conn, $sqll);
		  	if (mysqli_num_rows($resultt) === 1) {
		  	    
			$row2 = mysqli_fetch_assoc($resultt);
			
			$meeting_num = $row2['meeting_num'];
			$meeting_pass = $row2['meeting_pass'];
			$course_image = $row2['course_img'];
			
		  	}
		  	
		  	 $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
     
 ?>
 
<head>
     <meta charset="UTF-8">

        <!--========== BOX ICONS ==========-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <!--========== LINK REL ==========-->
        <!--<link rel="stylesheet" href="./fontawesome-free-5/css/font-awesome.min.css">-->
        <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>-->

        <!--========== CSS ==========-->
        <!--<link rel="stylesheet" href="../assets/css/styles.css">-->
        <!--<script type="text/javascript" src="../jassets/css/main.js"></script>-->
    
    <title>MTN Live</title>
    <meta charset="utf-8" />
    
    <link type="text/css" rel="stylesheet" href="https://source.zoom.us/2.18.2/css/bootstrap.css" />
    <link type="text/css" rel="stylesheet" href="https://source.zoom.us/2.18.2/css/react-select.css" />





  
      
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <!--FAV ICON IN TAB-->
    <!--<link rel="icon" type="image/x-icon" href="../view/imgs/mtn live icon.png" />-->
    <link rel="apple-touch-icon" sizes="180x180" href="../view/imgs/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../view/imgs/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../view/imgs/favicon/favicon-16x16.png">
    <link rel="manifest" href="../view/imgs/favicon/site.webmanifest">
    <link rel="mask-icon" href="../view/imgs/favicon/safari-pinned-tab.svg" color="#121680">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">






    <!-- stylesheet -->
    <link rel="stylesheet" type="text/css" href="../view/css/style.css?<?php echo time(); ?>" />
    <!--<link rel="stylesheet" type="text/css" href="../view/css/calendar.css?<?php echo time(); ?>" />-->
    <link rel="stylesheet" type="text/css" href="../view/css/live.css?<?php echo time(); ?>" />
    



    <!-- Bootstrap CSS -->
    <!--<link-->
    <!--  href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"-->
    <!--  rel="stylesheet"-->
    <!--  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"-->
    <!--  crossorigin="anonymous"-->
    <!--/>-->
    
    
    <link rel="stylesheet" href="../view/bootstrap/css/bootstrap.css" />
    <script src="../view/bootstrap/js/bootstrap.js"></script>
    
    
    <!-- ICONS -->

  <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    
    <style>
    
    #overlay a:hover {
        text-decoration:none;
    }
    
    #home-sidebar
{
    width: 80px;
}
        
    @media only screen and (max-width: 720px) {
    #courses {
    flex-wrap: wrap;
    }
     #your-course {
      width: 100%;
     }
     #dropdown-courses-menu {
      right: -325%;
     }
    #ads {
      width: 100%;
     }
     #chat-ads-container {
       flex-wrap: wrap;
      }
     #current-course {
       height: 85px;
    }
   }

  /*  @media only screen and (max-width: 768px) {*/
  /* #background{*/
  /*     height:100%;*/
  /* }*/
  /*}*/
  
  /*    @media only screen and (max-width: 1390px) {*/
  /* #background{*/
  /*     height:93vh;*/
  /* }*/
  /*}*/
  
   @media only screen and (min-width: 1391px) {
   #background{
       min-height:100vh;
   }
  }
  @media (min-width: 0px) and (max-width: 1200px) {
          #home-sidebar{
        width:70px;
    }
 #background{
       min-height:100vh;
   }
    #dropdown-courses-menu{
       height:66vh;
   }
   #body-container{
       transform: translate(0, 0);
   }
}
  @media (min-width: 1201px) and (max-width: 1500px) {
 #background{
       min-height:100vh;

   }
   body{
       overflow: hidden;
   }

 #dropdown-courses-menu{
       height:64vh;
   }
}
  @media (min-width: 1501px) and (max-width: 3000px ){
 #background{
       min-height:100vh
   }
}
    </style>

    <title>MTN Demo</title>
  </head>

    <style>
    .nav {
    padding-left: 20px !important;
    margin-bottom: 0;
    list-style: none;
}
            #zmmtg-root{
             display:none !important;
         }
        .sdk-select {
            height: 34px;
            border-radius: 4px;
        }

        .websdktest button {
            float: right;
            margin-left: 5px;
        }

        #nav-tool {
            margin-bottom: 0px;
        }

        #show-test-tool {
            position: absolute;
            top: 100px;
            left: 0;
            display: block;
            z-index: 99999;
        }

        #display_name {
            width: 250px;
        }


        #websdk-iframe {
            width: 700px;
            height: 500px;
            border: 1px;
            border-color: red;
            border-style: dashed;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            left: 50%;
            margin: 0;
        }
        .loader{
top:0;
margin:0;
padding:0;
width:100%;
height:100%;
position:fixed;
overflow:hidden;
text-align:center;
background-color:#ffffff;
z-index: 200;
display:flex;
justify-content:center;
align-items:center;
}

.loader-icon{
	position: absolute; 
}
@media(max-width:780px){
    .end_btn{
        
       margin-top: 175px !important;
    white-space: nowrap;

    }
}
    </style>
 <body 
  style="background:#ededed;"
  >


          <div id="overlay-loading">
             <img src="../view/imgs/preload2.gif" style="width:635px;height:400px;object-fit:cover;"/>
          </div>
         
         
        
        



             <div 
        id="background"
        class="px-3 py-3 mx-auto  w-100 d-flex justify-content-center align-items-center py-md-0"
     
    >
        <!--<div style="position:absolute; bottom:0px;left:0px">test</div>-->
    
        <!--class="p-4 mx-auto bg-white w-100 d-flex justify-content-center align-items-center "-->
      <div class="p-0 m-0 row d-flex h-100 w-100">
        <!-- SIDEBAR -->
        <div
          id="sidebar"
          
          class="container gap-3 p-2 mx-auto border col-md-2 d-none d-md-flex flex-column p-lg-3 "
        >
          <!-- USER NAME & IMAGE  -->
          <div
                class="mx-auto mt-4 col-9 pe-4 d-flex flex-column justify-content-center align-items-center"
          >
            <div
              class="mb-2 overflow-hidden profile-img-container d-flex justify-content-center"
            >
                
              <img
                class="w-100 h-100 profile-img"
                src="<?php echo $row3['image']?>"
                alt=""
              />
            </div>
            
           
            <span class="mt-1 text-center text-white text-capitalize" id="username"
              ><?php echo $row3['name']?></span
            >
                  <div
              class="mt-2 d-flex justify-content-center align-items-center flex-lg-nowrap flex-md-wrap"
            >
              <a
                class="gap-1 px-2 user-profile-cert d-flex justify-content-center align-items-center"
                                  href="https://managethenow.net/mtn-live/profile.php?id=<?php echo $user?>&lang=<?php echo $lang?>"

              >
                
                <i class="text-white fa-solid fa-user"
                  style="font-size: 14px"></i>

                <span class="text-white" style="<?echo $style?>"><?php echo $wordone ?></span>
              </a>
              <a
                class="gap-1 px-2 user-profile-cert d-flex justify-content-center align-items-center"
                  href="https://managethenow.net/mtn-live/certificate.php?id=<?php echo $user?>&lang=<?php echo $lang?>"
              >
                <i class="text-white fa-solid fa-certificate"
                  style="font-size: 14px"></i>

                <span class="text-white" style="<?echo $style?>"><?php echo $wordtwo ?></span>
              </a>
              
            </div>
                      </div>
          <div
            class="flex-wrap gap-4 d-flex flex-column justify-content-center align-items-center w-100 "
            style="height:100%;border-radius:30px 0 0 30px;background:#dee2e63b"
          >
            <a
              href="https://managethenow.net/mtn-live/index.php?id=<?php echo $user?>&lang=<?php echo $lang ?>"
              class="text-white d-flex align-items-center justify-content-between text-decoration-none w-50"
            >
              <div class="gap-2 d-flex align-items-center">
                <i class="fa-solid fa-house"></i>
                

                <span id="home-sidebar" style="<?echo $style?>;" ><?php echo $wordthre?></span>
              </div>
            </a>
            <a
              href="index.php?id=<?php echo $user?>&lang=<?php echo $lang?>"
              class="text-white d-flex align-items-center justify-content-between text-decoration-none w-50"
            >
              <div class="gap-2 d-flex align-items-center">
                    <i class="fa-solid fa-tower-broadcast"></i>
                <span style="<?echo $style?>"><?php echo $wordfour ?></span>
              </div>
            </a>
            
            <!--Youtube Button-->
            
                  <?php
                                 if($coursecode=="14"){
            echo'
            <a
              href="https://www.youtube.com/live/ACmQ225kdh4?feature=share"
              class="text-white d-flex align-items-center justify-content-between text-decoration-none w-50"
            >
              <div class="gap-2 d-flex align-items-center">
              <i class="fa-brands fa-youtube"></i>
                <span style="'.$style.'">Youtube</span>
              </div>
            </a>'
            ;
                            }
                             elseif($coursecode=="10"){
            echo'
            <a
              href="https://www.youtube.com/live/rQ-Pe9EG74w?feature=share"
              class="text-white d-flex align-items-center justify-content-between text-decoration-none w-50"
            >
              <div class="gap-2 d-flex align-items-center">
              <i class="fa-brands fa-youtube"></i>
                <span style="'.$style.'">Youtube</span>
              </div>
            </a>'
            ;
                            }
            ?>
                  <?php
                            if( ($_GET['id'] == 'm21862' ) || ($_GET['id'] == 'm16440' ) || ($_GET['id'] == 'a22059' )|| ($_GET['id'] == 'm21859' ) || ($_GET['id'] == 'm999' ) || ( $_GET['id'] == 'm29549')){
            echo'
            <a
              href="../reviewData.php?id='.$user.'"
              class="gap-2 text-white d-flex align-items-center text-decoration-none w-50"
            >
              <i class="fa-solid fa-database"></i>
              <span>Review</span>
            </a>'
            
            ;
                            }
            ?>
            
            
            <a
              href="../calendar.php?id=<?php echo $user?>&lang=<?php echo $lang?>"
              class="gap-2 text-white d-flex align-items-center text-decoration-none w-50"
            >
              <i class="fa-solid fa-calendar-days"></i>
              <span style="<?echo $style?>"><?php echo $wordfive ?></span>
            </a>
            <a
              href="https://managethenow.net/mtn-live/manual.php?id=<?php echo $user?>&lang=<?php echo $lang?>"
              class="gap-2 text-white d-flex align-items-center text-decoration-none w-50"
            >
              <i class="fa-solid fa-book-open"></i>
              <span style="<?echo $style?>"><?php echo $wordsix ?></span>
            </a>

 

            <a
              href="../full_version.php?id=<?php echo $user?>&lang=<?php echo $lang?>"
              class="gap-2 text-white d-flex align-items-center text-decoration-none w-50"
            >
              <i class="fa-solid fa-list-check"></i>
              <span class="me-md-4" style="<?echo $style?>"><?php echo $wordseven ?></span>
            </a>
            <a
              href="../clips.php?id=<?php echo $user?>&lang=<?php echo $lang?>"
              class="gap-2 text-white d-flex align-items-center text-decoration-none w-50" 
            >
              <i class="fa-solid fa-video"></i>
              <span style="<?echo $style?>; width: 80px; "><?php echo $wordeight ?></span>
            </a>   
            
            <a
              href="../help.php?id=<?php echo $user?>&lang=<?php echo $lang?>"
              class="gap-2 text-white d-flex align-items-center text-decoration-none w-50" 
            >
              <i class="fa-solid fa-headset"></i>
              <span style="<?echo $style?>; width: 80px; "><?php echo $wordfivety ?></span>
            </a>
            <a
              href="../model/logout.php?id=<?php echo $user?>&lang=<?php echo $lang?>"
              class="gap-2 d-flex align-items-center text-decoration-none "
              style="color: #ed4e4e;width:55%"
            >
              <i class="fa-solid fa-right-from-bracket"></i>
              <span style="<?echo $style?> "><?php echo $wordnine ?></span>
            </a>
          </div>
        </div>
        <!-- PAGE -->
        <div class="px-0 mx-0 col-md-10 d-flex flex-column" id="body-container">
          <!-- NAVBAR -->
          <div
            class="px-4 py-2 shadow-sm col-12 d-flex w-100 justify-content-between align-items-center"
            id="navbar"
          >
            <div class="gap-3 d-flex align-items-center">
              <!-- LOGO IN NAVBAR -->
              <div id="logo-container" class="mt-2 d-block">
                  <a href="https://managethenow.net/mtn-live">
                      
                <img src="../view/imgs/mtn live AI.png" class="w-100 h-100" alt="" />
                  </a>
              </div>
            </div>
            
            
                 <div class="gap-2 d-flex align-items-center">
                
            
            <!--Language Changer-->
             <?php if($lang=='ar'){
            echo'<a href="https://managethenow.net/mtn-live/live/'.$curPageName.'?id='.$user.'&lang=en"
            style="text-decoration:none" class="gap-1 d-flex align-items-center text-dark me-3" href="#">
                <div style="width:30px;height:30px ; border-radius:50% ;overflow:hidden">
                <img class="w-100 h-100" style="object-fit:cover " src="../view/imgs/united-kingdom.png" />
                </div>
                    Eng
            </a>';
            }elseif($lang=='en'){
                echo'<a 
                href="https://managethenow.net/mtn-live/live/'.$curPageName.'?id='.$user.'&lang=ar"
                style="text-decoration:none" class="gap-1 d-flex align-items-center text-dark me-3" href="#">
                <div style="width:30px;height:30px ; border-radius:50% ;overflow:hidden">
                <img class="w-100 h-100" style="object-fit:contain" src="../view/imgs/egypt.png" />
                </div>
                    Ar
            </a>';}
            ?>
            <!-- DROPDOWN MENU -->
            <div class="d-md-none d-flex">
              <!-- MENU ICON -->
             
              <i class="fa-solid fa-bars d-block text-dark"
                style="cursor: pointer"
                id="menu-icon"
                onclick="toggleMenu(event)"></i>

              <!-- DROPDOWN  -->
              <div id="overlay" class="p-3 pb-5 slide-in-right" style="overflow-y: auto;">
                <div
                  class="p-3 shadow position-fixed bg-light d-flex flex-column d-none "
                  id="dropdown-menu"
                  
                >
                  <div>
                 
                   <i class="fa-solid fa-xmark"
                      style="cursor: pointer"
                      id="close-menu-icon"
                      onclick="toggleMenu(event)"></i>


                  </div>
                  <!-- PROFILE CONTAINER -->
                  <div
                    class="d-flex d-md-none flex-column justify-content-center align-items-center "
                  >
                    <div
                      id="profile-img-nav-container"
                      class="d-flex justify-content-center align-items-center profile-img"
                    >
                      <img
                        src="<?php echo $row3['image']?>"
                        class="w-100 h-100 d-md-none d-block rounded-circle"
                        alt=""
                      />
                    </div>
                    <span id="profile-title" class="mt-2 text-dark text-capitalize"><?php echo $user_data['name']?></span>
                  </div>
                  
                        <div
                    class="gap-2 mt-2 d-flex justify-content-center align-items-center flex-lg-nowrap flex-md-wrap"
                  >
                    <a
                      class="gap-1 px-2 user-profile-cert d-flex justify-content-center align-items-center"
                      href="profile.php?id=<?php echo $user?>"
                    >
                      <i class="fa-solid fa-user text-secondary"
                        style="font-size: 14px"></i>

                      <span class="text-secondary"><?php echo $wordone?></span>
                    </a>
                    <a
                      class="gap-1 px-2 user-profile-cert d-flex justify-content-center align-items-center"
                      href="certificate.php?id=<?php echo $user?>"
                    >
                      <i class="fa-solid fa-certificate text-secondary"
                        style="font-size: 14px"></i>

                      <span class="text-secondary"><?php echo $wordtwo?></span>
                    </a>
                  </div>
                  <div class="px-5">
                        <hr />
                  </div>
                  <div
                    id='menu'
                    class="pb-4 d-flex flex-column justify-content-start h-100 align-items-center"
                    
                  >
                       <div
                      class="h-100 d-flex flex-column justify-content-between"
                    >
                    <a
                      href="https://managethenow.net/mtn-live"
                      style="<?php echo $arabicMobileMenu ?>"
                      class="mx-auto d-flex align-items-center text-decoration-none text-secondary"
                    >
                      <div class="gap-2 d-flex align-items-center">
                      <i class="fa-solid fa-house"></i>
                      <span><?php echo $wordthre?></span>
                      </div>
                    </a>
                      
                    <a
                      href="index.php?id=<?php echo $user?>&lang=<?php echo $lang?>"
                      style="<?php echo $arabicMobileMenu ?>"
                      class="gap-2 d-flex align-items-center text-decoration-none text-secondary"
                    >
                      <i class="fa-solid fa-tower-broadcast"></i>
                      <span><?php echo $wordfour?></span>
                    </a>
                    <!--Youtube Button-->
                      <?php
                                 if($coursecode=="14"){
            echo'
            <a
              href="https://www.youtube.com/live/ACmQ225kdh4?feature=share"
              class="text-white d-flex align-items-center justify-content-between text-decoration-none w-50"
            >
              <div class="gap-2 d-flex align-items-center">
              <i class="fa-brands fa-youtube"></i>
                <span style="'.$style.'">Youtube</span>
              </div>
            </a>'
            ;
                            }
                             elseif($coursecode=="10"){
            echo'
            <a
              href="https://www.youtube.com/live/rQ-Pe9EG74w?feature=share"
              class="text-white d-flex align-items-center justify-content-between text-decoration-none w-50"
            >
              <div class="gap-2 d-flex align-items-center">
              <i class="fa-brands fa-youtube"></i>
                <span style="'.$style.'">Youtube</span>
              </div>
            </a>'
            ;
                            }
            ?>
                    
                    
                   
                    
                    
                    <?php
                            if( ($_GET['id'] == 'm21862' ) || ($_GET['id'] == 'm16440' ) || ($_GET['id'] == 'a22059' )|| ($_GET['id'] == 'm21859' ) || ($_GET['id'] == 'm999' ) || ( $_GET['id'] == 'm29549')){
            echo'
             <a
                      href="../reviewData.php?id='.$user.'"
                        style="'.$arabicMobileMenu.'"
                      class="gap-2 d-flex align-items-center text-decoration-none text-secondary"
                    >
                      <i class="fa-solid fa-database"></i>
                      <span>Review</span>
                    </a>'
            
            ;
                            }
            ?>
            
                    <a
                      href="../calendar.php?id=<?php echo $user?>&lang=<?php echo $lang?>"
                      style="<?php echo $arabicMobileMenu ?>"
                      class="gap-2 d-flex align-items-center text-decoration-none text-secondary"
                    >
                      <i class="fa-solid fa-calendar-days"></i>
                      <span><?php echo $wordfive?></span>
                    </a>
                    <a
                      href="../manual.php?id=<?php echo $user?>&lang=<?php echo $lang?>"
                      style="<?php echo $arabicMobileMenu ?>"
                      class="gap-2 d-flex align-items-center text-decoration-none text-secondary"
                    >
        <i class="fa-solid fa-book-open"></i>
                      <span><?php echo $wordsix?></span>
                    </a>
                    <a
                      href="../full_version.php?id=<?php echo $user?>&lang=<?php echo $lang?>"
                      style="<?php echo $arabicMobileMenu ?>"
                      class="gap-2 d-flex align-items-center text-decoration-none text-secondary"
                    >
                        <i class="fa-solid fa-list-check"></i>
                        <span class="me-md-4"><?php echo $wordseven?></span>
                    </a>
                    <a
                      href="../clips.php?id=<?php echo $user?>&lang=<?php echo $lang?>"
                      style="<?php echo $arabicMobileMenu ?>"
                      class="gap-2 d-flex align-items-center text-decoration-none text-secondary"
                    >
                      <i class="fa-solid fa-video"></i>
                      <span><?php echo $wordeight?></span>
                    </a>  
                    <a
                      href="../help.php?id=<?php echo $user?>&lang=<?php echo $lang?>"
                      style="<?php echo $arabicMobileMenu ?>"
                      class="gap-2 d-flex align-items-center text-decoration-none text-secondary"
                    >
                      <i class="fa-solid fa-headset"></i>
                      <span><?php echo $wordfivety?></span>
                    </a>
                    <a
                      href="../model/logout.php?id=<?php echo $user?>"
                      style="<?php echo $arabicMobileMenu ?>"
                      class="gap-2 d-flex align-items-center text-decoration-none text-danger"
                    >
                      <i class="fa-solid fa-right-from-bracket"></i>
                      <span><?php echo $wordnine?></span>
                    </a>
                  </div>
                </div>
                </div>
              </div>
            </div>
          </div>

          </div>
            
            
            
            
     <!-- MAIN -->
           <div
            class="gap-4 p-3 w-100 d-flex flex-column p-md-4 justify-content-center align-items-center"
            id="main-container"
            style="height: 650px;"
          >
              
                    <h3 class="mb-3 text-center fw-bold" style="color: #0f1e5a">
<?php echo $wordeightteen ?>            </h3>
            
                        <div
              id="join-meeting-card"
              class="gap-4 p-5 overflow-hidden bg-white shadow-lg d-flex flex-column justify-content-center align-items-center"
            >
              <div style="height: 150px; width: 200px">
                <img src="<?php echo $course_image; ?>" class="w-100 h-100"  style="object-fit: contain" alt="" />
              </div>
              <h4 class="text-center fw-light" style="color: #0f1e5a">
               <?php echo $course_name ?>
              </h4>
              <div class="pb-4">
                              <form class="m-0 navbar-form navbar-right" id="meeting_form">
                    <div class="form-group" style="display: none;">
                        <input type="text" name="display_name" id="display_name"  value="<?php echo $user_name ?>" maxLength="100"
                            placeholder="Name" class="form-control" > 
                            <input hidden  id="userid"  value="<?php echo $user ?>"  >
                    </div>
                    <div class="form-group" style="display: none;">
                        <input type="text" name="meeting_number" id="meeting_number" value="<?php echo $meeting_num ?>" maxLength="200"
                            style="width:150px" placeholder="Meeting Number" class="form-control" >
                    </div>
                    <div class="form-group" style="display: none;">
                        <input type="text" name="meeting_pwd" id="meeting_pwd" value="<?php echo $meeting_pass ?>" style="width:150px"
                            maxLength="32" placeholder="Meeting Password" class="form-control">
                    </div>
                    <div class="form-group" style="display: none;">
                        <input type="text" name="meeting_email" id="meeting_email" value="<?php echo $user_email ?>" style="width:150px"
                            maxLength="32" placeholder="Email option" class="form-control">
                    </div>

                    <div class="form-group" style="display: none;">
                        <select id="meeting_role" class="sdk-select">
                            <option value=0 selected >Attendee</option>
                            <option value=1>Host</option>
                        </select>
                    </div>

                    <div class="form-group" style="display: none;">
                        <select id="meeting_china" class="sdk-select">
                            <option value=0>Global</option>
                            <option value=1>China</option>
                        </select>
                    </div>
                    
                    <div class="form-group" style="display: none;">
                        <select id="meeting_lang" class="sdk-select">
                            <option value="en-US">English</option>
                           
                        </select>
                    </div>

                    <input type="hidden" value="" id="copy_link_value"  style="display: none;"/>
                    <button type="hidden" class="btn btn-outline-primary" id="join_meeting<?php if($row['user_status'] == 1  ){ echo "1";}  ?>"  
                    <?php if(      ($row['user_status'] == 0 ) && ($row2['check_value'] == 0 || $row3['user_course_counter'] == 21)    )
                    
                    {
                    echo "disabled";
                        
                    }  elseif(($row['user_status'] == 0 ) && ($row2['check_value'] == 1 || $row3['user_course_counter'] != 21)){
                        
                        
                    }elseif($row['user_status'] == 1){
                        echo'style="display:none"';
                    }
                    
                    ?>  ><?php if( ($row['user_status'] == 0 ) && ($row2['check_value'] == 0 || $row3['user_course_counter'] == 21)    )
                    {
                        echo $wordtwentey;
                    }else{
                     echo $wordnineteen;                        

                    }?>
                    </button> 
                    <button type="submit" class="btn btn-outline-primary text-capitalize" id="join_meeting" style="  <?php if($row['user_status'] == 0  ){ echo "display:none";}  ?> ">Start Session</button>
                    <button type="submit " style="display: none;" class="btn btn-primary" id="clear_al l">Clear</button>
                    <button type="button" style="display: none;" link="" onclick="window.copyJoinLink('#copy_join_link')"
                        class="btn btn-primary" id="copy_join_link">Copy Direct join link</button>
 <a href="startsession.php?id=<?php echo $_COOKIE['user']?>&coursecode=<?php echo $coursecode ?>&value=0&lang=<?php echo $lang?>"  class="btn btn-outline-danger text-capitalize" value=""  style=" <?php if($row['user_status'] == 0  ){ echo "display:none";}  ?> " >end session  </a>
         

                </form>
                
                
              
              </div>
            </div>

  
    
            </div>
            <!--/.navbar-collapse -->
        </div>
    </nav>
</div>

    <style>
        html, body{
            min-width:0px;
        }
     
     
     .container:before, .row:before{
         content:none;
     }
     
        
    </style>

   
    <script src="https://source.zoom.us/2.18.2/lib/vendor/react.min.js"></script>
    <script src="https://source.zoom.us/2.18.2/lib/vendor/react-dom.min.js"></script>
    <script src="https://source.zoom.us/2.18.2/lib/vendor/redux.min.js"></script>
    <script src="https://source.zoom.us/2.18.2/lib/vendor/redux-thunk.min.js"></script>
    <script src="https://source.zoom.us/2.18.2/lib/vendor/lodash.min.js"></script>
    <script src="https://d27xp8zu78jmsf.cloudfront.net/jssdk/2023-12-01-n8l7k6/cdn/zoom-meeting-3.0.0.min.js"></script>
    
    <script src="js/tool.js?<?php echo time(); ?>"></script>
    <script src="js/vconsole.min.js"></script>
    <script src="js/index.js?<?php echo time(); ?>"></script>

   
    
    
    </body>
    </html>
    		  	<?php    
	}elseif(!isset($id)){
	    
	    	    $user=$_COOKIE['user'];

	    
	    
               	header("Location:https://managethenow.net/mtn-live/index.php?id=$user&lang=$lang");
		        exit(); 
	    
	}else{
	header("Location: https://managethenow.net/mtn-live/");
		        exit();
    }
	
     
 ?>
    
   <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js"></script>

 <!--<script src="../assets/js/mainjs.js"></script>-->
 <script>
  $(window).load(function() {
	$(".loader").delay(10000).fadeOut("fast");
}); 
console.log('ffff');
 </script> 
</div>

    </div>
    <script src="../view/js/demo.js?<?php echo time(); ?>"></script>
    <!-- SWIPER CDN -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <!-- SWIPER JS -->
    <script src="../view/js/swiper.js?<?php echo time(); ?>"></script>
    <script src="../view/js/calendar.js?<?php echo time(); ?>"></script>
    
   
  </body>
</html>
<?php 
// }else{
    
//     header("Location: ../login.php?error=BAD LINK TRY TO LOGIN");
// 		       exit();
// }
?>