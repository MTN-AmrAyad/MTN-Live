    <?php
        require_once 'model/course.php';
        require_once 'view/header.php';
        $id = $_GET['id'];

       
       if($lang=='ar'){
             $rightToLeft ="text-align: end; justify-content: end; ";
             $reverseRow ="flex-row-reverse fw-bold";

    
}
          ?>
   <!-- MAIN -->
          <div
            class="h-100 w-100 d-flex flex-column justify-content-evenly p-3 p-md-4"
            id="main-container"
          >
            <!--COURSES -->
            <div class="row w-100 gap-4 gap-md-5 ps-2 px-md-3" id="courses">
              <!-- CURRENT COURSE -->
              <div
                class="col-md-12 d-flex flex-column px-0 pb-4"
                id="your-course"
              >
                <div>
                  <h3 class="pb-3 fw-bold"  style="color:#0f1e5a; <?php echo  $rightToLeft ?>">
                  Tips</h3>
                </div>
                  <div id="current-course" class="my-border d-flex flex-column justify-content-center align-items-center overflow-hidden  px-2 ">
                          
                          
                          
                        
                     
              
                                  <iframe width="100%" height="415" src="https://www.youtube.com/embed/km3vgpkZOW4" title="YouTube video player" frameborder="0" 
                          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
                              
                          </iframe>
                                 
                                           
                                           
                                           
                                </div>
                
                
                
              </div>
            </div>
            <!-- CHAT & ADS -->
            <div
              id="chat-ads-container"
              class="d-flex w-100 gap-4 gap-md-5  ps-md-1 position-relative"
            >

              <!-- CHAT -->
              <div class="d-flex w-100 flex-column p-4" id="chat">
                <h4 style="<?php echo  $rightToLeft ?> color:#0f1e5a;" class="fw-bold">chat with support</h4>
                <hr />
                <!-- CHAT CONTAINER -->
                <div class="d-flex flex-column" id="chat-rows-container">
                  <!-- CHAT ROW -->
                  <div
                    class="d-flex <?php echo  $reverseRow ?> justify-content-between w-100 align-items-center flex-wrap pb-1"
                  >
                    <!-- CHAT ICON AND NAME -->
                    
                         <div class=" <?php echo $reverseRow ?>  d-flex align-items-center gap-3">
                    
                      <span class="fw-bold px-1 px-md-0">MTN support</span>
                    </div>
                    
      
                   
                    
                    
                    
                    
                    
                    
                    
                    
                    <!-- MEMBERS -->
                    <div class="d-none d-md-flex align-items-center">
                      <div
                        id="member-wrapper"
                        class="overflow-hidden member-numbers-wrapper"
                      >
                        <img
                          src="view/imgs/non-profile.png"
                          alt=""
                          class="w-100 h-100"
                        />
                      </div>
                      <div
                        id="member-wrapper"
                        class="overflow-hidden member-numbers-wrapper"
                      >
                        <img
                          src="view/imgs/non-profile.png"
                          alt=""
                          class="w-100 h-100"
                        />
                      </div>
                      <div
                        id="member-numbers-wrapper"
                        class="member-numbers-wrapper d-flex justify-content-center align-items-center overflow-hidden"
                      >
                        <span
                          id="member-numbers"
                          style="color: #696969"
                          class="text-center fw-bold"
                          >+7</span
                        >
                      </div>
                    </div>
                    <!-- CHAT BUTTON -->
                           <?php


                            


   
     echo '<a href="https://t.me/mtnsupportt" id="chat-btn">
                                 Telegram
                            </a>';

    



?>

                  </div>
                  <!-- CHAT ROW -->
                  <?php
                        echo'
                <div
                    class="d-flex  '.$reverseRow .' justify-content-between w-100 align-items-center flex-wrap pb-1"
                  >
                       ';
                          echo'
                    
                    <div class="d-flex align-items-center gap-3">
                     
                      <span class="fw-bold px-1 px-md-0">MTN Support</span>
                    </div>
                    
                    <div class="d-none d-md-flex align-items-center">
                      <div
                        id="member-wrapper"
                        class="overflow-hidden member-numbers-wrapper"
                      >
                        <img
                          src="view/imgs/non-profile.png"
                          alt=""
                          class="w-100 h-100"
                        />
                      </div>
                      <div
                        id="member-wrapper"
                        class="overflow-hidden member-numbers-wrapper"
                      >
                        <img
                          src="view/imgs/non-profile.png"
                          alt=""
                          class="w-100 h-100"
                        />
                      </div>
                      <div
                        id="member-numbers-wrapper"
                        class="member-numbers-wrapper d-flex justify-content-center align-items-center overflow-hidden"
                      >
                        <span
                          id="member-numbers"
                          style="color: #696969"
                          class="text-center fw-bold"
                          >+7</span
                        >
                      </div>
                    </div>
                   <a href="https://wa.me/+201062448904" id="chat-btn">
                                 whatsapp
                            </a>
                </div>
                    
                                           
                    ';


                      
                    ?>

                  
                </div>
              </div>
                  <!-- ADS & OFFERS -->
            </div>
          </div> 
          <script>
              function swipcoursecode(e){
                  
                  <?php  
                  echo'var x = document.getElementById("eight").innerHTML;' ;
                  
                  ?>
              }
          </script>
 
          
          <?php
          require 'view/footer.php';
          ?>