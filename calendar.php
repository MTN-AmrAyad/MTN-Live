    <?php
        require 'model/course.php';
        require 'view/header.php';
                         $coursecode1 = Course::get_courses_data($id);
                foreach ($coursecode1 as $index => $member):
                         $coursecalander = Course::get_courses_calender($member['coursecode']);

          ?>
          <!-- MAIN -->
          <div
            class="w-100 row mx-0 p-4"
            id="main-container"
            style="height: 650px; overflow: hidden"
          >
              
                   <?php
                       $coursebgbannr = Course::get_courses_bg_bannar($member['coursecode']);
                        $coursebgbannrs= trim($coursebgbannr,"../");
?>
            <div
              class="d-flex align-items-center flex-column h-100"
               style="background: url('<?php echo $coursebgbannrs;?>');overflow-y:auto;background-size: cover"
              id="calendar-bg-container"
            >
              <!-- COURSE LOGO AND NAME -->
              <div
                id="current-course-calendar"
                class="bg-transparent gap-2 d-flex flex-column justify-content-center align-items-center"
              >
                <div id="calendar-logo-img-container">
                    
                    <?php 
                    
                             $courseimg = Course::get_courses_img($member['coursecode']);
                                             $courseimgres= trim($courseimg,"../");

                    ?>
                    
                  <img
                    src="<?php echo $courseimgres;?>"
                    class="my-border p-2"
                    id="calendar-current-course-logo"
                    alt=""
                  />
                    
                </div>
               
                    
                                   <?php 

                    

                    echo'
                    
                    
                                  <h4
                  class="current-course-name fw-bolder text-center"
                  style="display: inline"
                >'.$coursename.'</h4>
                                
                    
                    ';
                ?>
              </div>
              <!-- Date Cards -->
              <div
                class="p-2 d-flex gap-3 align-items-center justify-content-center flex-wrap w-75 mx-auto"
              >
              <?php
             
                  foreach ($coursecalander as $indexxx => $memberr){
                      
                      if($memberr['course_code']==16){
                          echo'<img src="https://managethenow.net/livesystem/estrogym.jpeg"style="width:470px;"/>';
                      } elseif($memberr['course_code']==17){
                          echo'<img src="view/imgs/calander/reaglTrainning.jpeg"style="width:470px;"/>';
                      }elseif($memberr['course_code']==22){
                          echo'<img src="view/imgs/calander/shg.jpeg"style="width:470px;"/>';
                      }elseif($memberr['course_code']==12){
                          echo'<img src="https://managethenow.net/livesystem/luscher.png"style="width:470px;"/>';
                      }elseif($memberr['course_code']==5){
                          echo'<img src="view/imgs/calander/haml-cal.jpeg"style="width:470px;"/>';
                      }elseif($memberr['course_code']==23){
                          echo'<img src="view/imgs/calander/fittra.jpeg" style="width:470px;"/>';
                      }elseif($memberr['course_code']==24){
                          echo'<img src="view/imgs/calander/estro-gym-Nov.png"style="width:470px;"/>';
                      }elseif($memberr['course_code']==13){
                          echo'<img src="https://managethenow.net/mtn-live/view/imgs/calander/cpc-new.jpeg"style="width:470px;"/>';
                      }
                      elseif($memberr['course_code']==6){
                          echo'<img src="https://managethenow.net/livesystem/ebt1.jpeg"style="width:470px;"/>';
                      }   elseif($memberr['course_code']==7){
                          echo'<img src="https://managethenow.net/mtn-live/view/imgs/calander/EBT2.jpeg"style="width:470px;"/>';
                      }  elseif($memberr['course_code']==8){
                          echo'<img src="https://managethenow.net/mtn-live/view/imgs/calander/adam-eve-cal.jpeg"style="width:470px;"/>';
                      
                      }  elseif($memberr['course_code']==2){
                          echo'<img src="https://managethenow.net/mtn-live/view/imgs/calander/Communcation.png"style="width:470px;"/>';
                      } 
                      //brain CT scan Reading
                        elseif($memberr['course_code']==1){
                          echo'<img src="https://managethenow.net/mtn-live/view/imgs/calander/ct scan- training.jpg"style="width:470px;"/>';
                      } 
                        elseif($memberr['course_code']==18){
                          echo'<img src="https://managethenow.net/mtn-live/view/imgs/calander/ctrlNafcy.jpeg"style="width:470px;"/>';
                      } 
                        elseif($memberr['course_code']==28){
                          echo'<img src="https://managethenow.net/mtn-live/view/imgs/calander/men-Jun.jpeg"style="width:470px;"/>';
                      } 
                        elseif($memberr['course_code']==29){
                          echo'<img src="https://managethenow.net/mtn-live/view/imgs/calander/fetra-May.jpeg"style="width:470px;"/>';
                      } 
                        elseif($memberr['course_code']==19){
                          echo'<img src="https://managethenow.net/mtn-live/view/imgs/calander/CTRL-Tmahy.png"style="width:470px;"/>';
                      } 
                        elseif($memberr['course_code']==9){
                          echo'<img src="https://managethenow.net/mtn-live/view/imgs/calander/adamMarrid.jpeg"style="width:470px;"/>';
                      } 
                        elseif($memberr['course_code']==15){
                          echo'<img src="https://managethenow.net/mtn-live/view/imgs/calander/ebt2Adv.jpeg"style="width:470px;"/>';
                      } 
                        elseif($memberr['course_code']==31){
                          echo'<img src="https://managethenow.net/mtn-live/view/imgs/calander/EBM.jpg"style="width:470px;"/>';
                      } 
                        elseif($memberr['course_code']==10){
                          echo'<img src="https://managethenow.net/mtn-live/view/imgs/calander/ctrl-organic-part.png"style="width:470px;"/>';
                      } 
                        
                       
                      
                      else{
                          
                      
                 for($i=1;$i<=21;$i++){
                     if($memberr["day$i"]!=0 ){
                         
                         if($memberr["day1"]<=$memberr["day$i"]){
                             
                              echo' 
                <!-- CARD -->
                <!-- Change Card Background Color --> 
                <div
                  class="calendar-date-card shadow-lg d-flex flex-column justify-content-between"
                  style="'.$memberr['color'].'"   
                >
                  <div
                    class="d-flex justify-content-center align-items-center h-100"
                  >
                    <h5 class="text-dark text-center pt-2 text-uppercase">'.$memberr["course_month"].'</h5>
                  </div>
                  <h2
                    class="col-12 my-0 fw-bolder text-center bg-light p-2 text-dark"
                    style="border-radius: 0 0 25px 24px"
                  >
                    '.$memberr["day$i"].'
                  </h2>
                </div>
                
                ';
                             
                         }elseif($memberr["day1"]>$memberr["day$i"]){ 
                              echo' 
                <!-- CARD -->
                <!-- Change Card Background Color --> 
                <div
                  class="calendar-date-card shadow-lg d-flex flex-column justify-content-between"
                  style="'.$memberr['color'].'"   
                >
                  <div
                    class="d-flex justify-content-center align-items-center h-100"
                  >
                    <h5 class="text-dark text-center pt-2 text-uppercase">'.$memberr["course_month2"].'</h5>
                  </div>
                  <h2
                    class="col-12 my-0 fw-bolder text-center bg-light p-2 text-dark"
                    style="border-radius: 0 0 25px 24px"
                  >
                    '.$memberr["day$i"].'
                  </h2>
                </div>
                
                ';
                             
                         }
            
                     }
                 }
            }
        }
               
                ?>
                 
               
              </div>
            </div>
          </div>
          <?php
                          endforeach;

          require 'view/footer.php';
          ?>