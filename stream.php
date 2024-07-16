    <?php
        require 'model/course.php';
        include 'db_conn.php';
        require 'view/header.php';
        $coursecode1 = Course::get_courses_data($id);
                         
          ?>
          
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
          
          <!-- MAIN -->
          <div
            class="w-100 row mx-0 p-4"
            id="main-container"
            style="height: 650px; overflow: hidden ;"
            
          >
        <div class="row m-0 p-2  h-100 d-flex ">
      <!-- Live -->
      
      
     
      
      
   
  
  
  
      <!-- Chat -->
      <div class="d-flex flex-column col-md-12 m-0 p-2 pb-0" style="background:#fff" id="chat">
        <!-- Comments section -->
        <div
          class="p-3 "
          style="border-radius: 25px; overflow-y: scroll ;word-break:break-all "
          id="comments-section"
        >
          <div class="h-100 p-2 d-flex flex-column w-100 " id='select-beast-empty'>
            <!-- Comment1 -->
            
            
          </div>
        </div>

        <!-- Chat input -->
        <div class="w-100 py-2" style="height: 60px">
          <form 
                method="post"
            style=" border-radius: 25px"
            class="d-flex w-100 h-100 overflow-hidden"
          >
              
              
              
             <input hidden value="<?php echo $user;?>" id="senduser"/>

            <input
              name="message"
              placeholder="Type message here"
              style="border-radius: 25px; border: 1px solid #d1d2d5 ; "
                            class="px-3 py-1 w-100 "
              id="commenttext"
            >
            <div class="h-100 d-flex align-items-center ">
              <button
              onclick="sendcomment(event)"
              name="post_comment"
                class="btn btn-primary ms-2"
                style="border-radius: 50%; height: 40px; width: 40px"
              >
                <i class="fa-solid fa-paper-plane" style="font-size: 15px"></i>
              </button>
            </div>
            
            <div class="h-100 d-flex align-items-center  ">
              <button
              data-bs-toggle="modal"
              data-bs-target="#therapyGroupModal"
                class="btn btn-primary ms-2"
                style="border-radius: 50%; height: 40px; width: 40px"
              >
                <i class="fa-solid fa-upload" ></i>
                  
              </button>

            </div>
            
          </form>
          
        </div>
      </div>
    </div>
        </div>
        <script type="text/javascript">
        
        
        
        
   


        
        setInterval(displaychat, 1000);
        
        
        
 function displaychat(){
     
      

                    var name= $("#senduser").val();

     
     $.get("getcomment.php",{name}, function (response) {
              $("#select-beast-empty").empty();

 var name= $("#senduser").val();

             


                $("#select-beast-empty").append(response);
              });   
                              $('#comments-section').scrollTop($('#comments-section')[0].scrollHeight);

    
}
        
        
            function sendcomment(e){
                
                e.preventDefault();
                              $("#select-beast-empty").empty();

               var comment= $("#commenttext").val();
               var name= $("#senduser").val();

                $.post("ajaxchat.php", { comment ,name}, function (response) {

                $("#select-beast-empty").append(response);
                
                                 $("#commenttext").val("");

              });   

                
                
                $('#comments-section').scrollTop($('#comments-section')[0].scrollHeight);

            }
            

            
        </script>

          <?php

          require 'view/footer.php';
          ?>