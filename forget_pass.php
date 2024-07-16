
<?php 

require_once 'model/profile.php';
require_once 'view/header.php';
$id = $_GET['id'];



$coursecode = Profile::get_user_coursecode($id);
$course_data =Profile::get_course_data($coursecode);
$user_data = Profile::get_user_data($id);

?>

<!-- MAIN -->
          <div class="w-100 d-flex flex-column p-3 p-md-4" id="main-container" style="height: 637px; overflow: hidden;justify-content: center;
    align-items: center;">
              
            <!--========== CONTENTS ==========-->
        <main>
            <section>
                   <form action='controller/forget_pass_handler.php?id=<?php echo $id ?>' method='POST' enctype="multipart/form-data">
                 <div class="row">
                
                   
<div class="profile-card">

  <div class="profile">
   
   
    <div class="above-fold">
      <div class="name">
   <label for="html" style="transform: translate(50px, 0px);
    font-size: initial;">confirm password</label><br>
   <input name='new_pass' type='text' class='input_i'  required>
    
      </div>
      <div class="name">
      <label for="html" style="    transform: translate(50px, -85px);
    font-size: initial;">New password</label><br>
      <input value="" name='c_pass' type='text' class='input_i'  required>
      <input value="<?php echo $id ?>" name='old_pass' type='text' class='input_i'  required hidden readonly >
        
      </div>
      

      <div id="expand-button">
              <button style='background-color: #1aa6b7;
    padding: 6px 20px;
    border: 1px solid #1aa6b7;
    border-radius: 5px;
    color: white;
    letter-spacing: 3px;
    font-size: initial;' type='submit'>SAVE</button>
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
       

</form>
      
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
