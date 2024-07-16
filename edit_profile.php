
<?php 

require_once 'model/profile.php';
require_once 'view/header.php';
$id = $_GET['id'];
$lang=$_GET['lang'];


$coursecode = Profile::get_user_coursecode($id);
$course_data =Profile::get_course_data($coursecode);
$user_data = Profile::get_user_data($id);

?>

<!-- MAIN -->
          <div class="w-100 d-flex flex-column p-3 p-md-4" id="main-container" style="height: 650px;overflow-y: scroll;;justify-content: center;
    align-items: center;">
              
            <main>
            <section>
                <form action='controller/editProfileController.php' method='POST' enctype="multipart/form-data">
                 <div class="row">
      <input name='pass' value='<?php echo  $user ?>' hidden readonly>            
      <input name='lang' value='<?php echo  $lang ?>' hidden readonly>            
                   <div class="background"></div>
<div class="profile-card">
  <div class="cover"></div>
  <div class="profile">
    <div class="pic">  </div>
    <input style='margin-top: 55px;border:none;' name='pic' type='file' class='input_i' accept="image/*">
    <div class="above-fold">
      <div class="name">
   <p class='p_i'> Name:  </p>    <input value="<?php echo $user_data['name'] ?>" name='name' type='text' class='input_i'>
    
      </div>
      <div class="name">
      <p class='p_i'> Work:  </p>    
      
      <input value=" <?php echo $user_data['work'] ?>" name='work' type='text' class='input_i'>
        
      </div>
      <div class="name">
        <i class="fas "></i> 
   
     <p class='p_i'>    City:   </p>     
     <input  value=" <?php echo $user_data['city'] ?>" name='city' type='text' class='input_i'>
      </div>
      <div class="name">
        <i class="fas "></i> 
   
      <p class='p_i'>    Nationality:   </p>     
      <input value=" <?php echo $user_data['nationality'] ?>" name='nationality' type='text' class='input_i'>
      </div>
      
   
      
      <div class="name">
        <i class="fas "></i> 
   
   <p class='p_i'>  Birthdate: </p>    
   <input value=" <?php echo $user_data['birthofdate'] ?>" name='birthofdate' type='date' class='input_i'>
      </div>
     

      <div id="expand-button">
              <button style='background-color: #1aa6b7;padding: 10px 30px;border: 1px solid #1aa6b7;border-radius: 5px;color: white;letter-spacing: 3px;' type='submit'>SAVE</button>
      </div>
    </div>
    <div class="below-fold">

      <div class="row stats">
      
        <div class="stat">
            
          <label></label>
        
          
        </div>

      </div>
    </div>
  </div>
</div>     

          
                        
                    </div>
                <main class="main bd-grid">

</form>
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
