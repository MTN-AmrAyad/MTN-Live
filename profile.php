
<?php 

require_once 'model/profile.php';
require_once 'view/header.php';

$id = $_GET['id'];



$coursecode = Profile::get_user_coursecode($id);
$course_data =Profile::get_course_data($coursecode);
$user_data = Profile::get_user_data($id);


       if($lang=='ar'){
             $rightToLeft ="text-align: right";
             $reverseRow ="flex-row-reverse";

    
}

?>

<!-- MAIN -->
          <div class="p-3 w-100 d-flex flex-column p-md-4" id="main-container" style="height: 650px;overflow-y: scroll;justify-content: center;
    align-items: center;">
              
            <main>
            <section>
                 <div class="row">
                   <div class="background"></div>
<div class="profile-card">
  <div class="cover"></div>
  <div class="profile">
    <div class="pic"> 
    
    </div>
    <div class="above-fold">
      <div class="name">
      <?php echo $user_data['name'] ?>
      </div>
      <div class="role">
         <?php echo $user_data['work'] ?>
      </div>
      <div class="location">
         <span class="material-icons-sharp" > </span> <?php echo $user_data['city'] ?>
      </div>

      <div id="expand-button">
        <!-- <span class="material-icons-sharp" style='margin-top: 8px;'> unfold_more </span> -->
        <i class="fa-solid fa-arrow-down" style='margin-top: 8px;'></i>
      </div>
    </div>
    <div class="below-fold">
      <div class="about" style="<?php echo $rightToLeft ?>">
        <h3>
          <?php echo $wordfiveteen;?>
        </h3>
        <div class="d-flex <?php echo $reverseRow;?>">
            <p>
                <?php echo $wordtweenty?>  
            </p>
            <p>
                &nbsp;:&nbsp;
            </p>
            <p>
                <?php echo $user_data['nationality'] ?>
            </p>
        </div>
        
        <div class="d-flex <?php echo $reverseRow;?>">
            <p>
                <?php echo $wordtweentyone?>  
            </p>
            <p>
                &nbsp;:&nbsp;
            </p>
            <p>
                <?php echo $user_data['phone'] ?>
            </p>
        </div>
        
        <div class="d-flex <?php echo $reverseRow;?>">
            <p>
                <?php echo $wordtweentytwo?>  
            </p>
            <p>
                &nbsp;:&nbsp;
            </p>
            <p>
                <?php echo $user_data['email'] ?>
            </p>
        </div>
        
        <div class="d-flex <?php echo $reverseRow;?>">
            <p>
                <?php echo $wordtweentythree?>  
            </p>
            <p>
                &nbsp;:&nbsp;
            </p>
            <p>
                <?php echo $user_data['birthofdate'] ?>
            </p>
        </div>
        
        <div class="d-flex <?php echo $reverseRow;?>">
            <p>
                <?php echo $wordtweentyfour?>  
            </p>
            <p>
                &nbsp;:&nbsp;
            </p>
            <p>
                <?php echo $course_data['course_name'] ?>
            </p>
        </div>
        
        
        
<!--<p><?php echo $wordtweentyone?> : <?php echo $user_data['phone'] ?> -->
<!-- </p>-->
 <!--<p><?php echo $wordtweentytwo?> : <?php echo $user_data['email'] ?></p>-->
 <!--<p><?php echo $wordtweentythree?> : <?php echo $user_data['birthofdate'] ?></p>-->
 <!--<p><?php echo $wordtweentyfour?>: <?php echo $course_data['course_name'] ?></p>-->
      </div>
      <div class="row stats">
      
        <div class="stat">
             <a href='edit_profile.php?id=<?php echo $user ?>&lang=<?php echo $lang?>' style="text-decoration: none;">
          
          <div class="num">
           <?php echo $wordsixteen;?>
          </div>
          </a>
        </div>
            <div class="stat">
          
     
   <form method='post' action='controller/resetPasswordController.php?lang=<?php echo $lang?>'>     
          <input name='res'class="num" value=' <?php echo $wordseventeen;?>' type='submit' style='    background: none;
    border: none !important;
    box-shadow: none;
    padding: 0px;'>
         
   </form>          
        </div>
      </div>
    </div>
  </div>
     
</div>     

          
                        
                    </div>
                <main class="main bd-grid">


        </main>

        <!-- ICONS -->
        <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
                
            </section>

        </main>
              
          </div>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script>
            $('#expand-button').click(function() {
	$('.profile-card').toggleClass('expand');
})
        </script>
<?php
require_once 'view/footer.php';

?>
