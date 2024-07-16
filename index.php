    <?php
        require_once 'model/course.php';
        require_once 'view/header.php';
        $id = $_GET['id'];

        $coursecode1 = Course::get_courses_data($id);
        
        
       
        
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
                class="col-md-4 d-flex flex-column px-0 pb-4"
                id="your-course"
              >
                <div>
                  <h3 class="pb-3 fw-bold"  style="color:#0f1e5a; <?php echo  $rightToLeft ?>"><?php echo $wordten?></h3>
                </div>
                <?php 

                foreach ($coursecode1 as $index => $member):
                    
         $courseimg = Course::get_courses_img($member['coursecode']);
         $coursebgbannr = Course::get_courses_bg_bannar($member['coursecode']);
                                              
                                             $coursebgbannrs= trim($coursebgbannr,"../");
                               $courseimgres= trim($courseimg,"../");

                    echo'
                    
                    <div id="current-course" class="my-border d-flex flex-column justify-content-center align-items-center overflow-hidden py-4 px-2 "style="background:url('.$coursebgbannrs.');background-size:cover;">
                                  <img
                                  id="current-course-logo"
                                    src="'.$courseimgres.'"
                                    class="my-border"
                                    alt=""
                                  />
                                 <p class="current-course-name mb-3 text-center" >
                                           '.$coursename.'</p>
                                </div>
                    
                    ';
                    
                    
                                
                endforeach;
                ?>
                
                
                
                
              </div>
              <div class="col-md-7 d-flex flex-column ">
                <!-- YOUR COURSES -->
                 <div class="d-flex  w-100 pb-3"  style="<?php echo  $rightToLeft ?> ;" >
                    <h3 class="pb-1 fw-bold"  style="color:#0f1e5a;" id="your-courses-arabic"  ><?php echo $wordtwelve?></h3>
                     <!--<div id="your-courses-btn">-->
                  
                     <!--<button id="chat-btn"data-bs-toggle="modal" data-bs-target="#exampleModal">-->
                     <!--            See More-->
                     <!--       </button>-->
                     <!--</div>-->

                </div>
                <div class="d-flex gap-5">
                  <!-- ADD COURSE -->
                  <div
                    class="d-none justify-content-center align-items-center position-relative p-3"
                    id="add-course"
                    onclick="toggleCoursesMenu(event)"
                  >
                    <div
                      id="add-course-icon"
                      class="material-icons-sharp text-secondary text-decoration-none"
                      href="#"
                    >
                      add
                    </div>
                    <!-- DROPDOWN COURSES MENU -->
                      <div
                      class="d-none position-absolute bg-light d-flex flex-column shadow"
                      id="dropdown-courses-menu"
                    >
                      <div
                        class="d-flex flex-column gap-2 py-1 px-2"
                        id="courses-menu"
                      >
                        <a
                          href="https://managethenow.net/mtn-live/courses_page/add_tgvalues.php"
                          class="d-flex align-items-center px-3 gap-2 text-decoration-none text-secondary"
                        >
                          <span>Therapy GYM Values</span>
                        </a>
                          <a
                          href="https://managethenow.net/mtn-live/courses_page/add_estrogym.php"
                          class="d-flex align-items-center px-3 pt-1 gap-2 text-decoration-none text-secondary"
                        >
                          <span>EstroGYM</span>
                        </a>
                          <a
                          href="https://managethenow.net/mtn-live/courses_page/add_Men.php"
                          class="d-flex align-items-center px-3 gap-2 text-decoration-none text-secondary"
                        >
                          <span>Masculinity GYM</span>
                        </a>
                        
                          <a
                          href="https://managethenow.net/mtn-live/courses_page/add_course_EBT_1.php"
                          class="d-flex align-items-center px-3 pt-1 gap-2 text-decoration-none text-secondary"
                        >
                          <span>Emotional Literacy </span>
                        </a>
                        
                          <a
                          href="https://managethenow.net/mtn-live/courses_page/add_EBT2.php"
                          class="d-flex align-items-center px-3 gap-2 text-decoration-none text-secondary"
                        >
                          <span>Emotional Balance Technique – Main Level</span>
                        </a>
                          <a
                          href="https://managethenow.net/mtn-live/courses_page/add_Emotional_Balance_Technique_Adv_Level.php"
                          class="d-flex align-items-center px-3 gap-2 text-decoration-none text-secondary"
                        >
                          <span>Emotional Balance Technique – Adv. Level</span>
                        </a>
                        
                          <a
                          href="https://managethenow.net/mtn-live/courses_page/add_adamAndEve.php"
                          class="d-flex align-items-center px-3 pt-1 gap-2 text-decoration-none text-secondary"
                        >
                          <span>Adam & Eve – Main Class </span>
                        </a>
                        
                          <a
                          href="https://managethenow.net/mtn-live/courses_page/add_communication.php"
                          class="d-flex align-items-center px-3 gap-2 text-decoration-none text-secondary"
                        >
                          <span>Communication between Male & Female</span>
                        </a>
                          <a
                          href="https://managethenow.net/mtn-live/courses_page/add_adamAndEve_marriage.php"
                          class="d-flex align-items-center px-3 gap-2 text-decoration-none text-secondary"
                        >
                          <span>Adam & Eve – The Marriage</span>
                        </a>
                          <a
                          href="https://managethenow.net/mtn-live/courses_page/add_ctrl_anatomical.php"
                          class="d-flex align-items-center px-3 pt-1 gap-2 text-decoration-none text-secondary"
                        >
                          <span>CTRL Medicine – Anatomical Part</span>
                        </a>
                          <a
                          href="https://managethenow.net/mtn-live/courses_page/add_ctrl_organic.php"
                          class="d-flex align-items-center px-3 pt-1 gap-2 text-decoration-none text-secondary"
                        >
                          <span>CTRL Medicine – Organic Part</span>
                        </a>
                        <a
                          href="https://managethenow.net/mtn-live/courses_page/add_CTRL_Medicine_Psychologic_Part.php"
                          class="d-flex align-items-center px-3 gap-2 text-decoration-none text-secondary"
                        >
                          <span>CTRL Medicine – Psychologic Part</span>
                        </a>
                        
                          <a
                          href="https://managethenow.net/mtn-live/courses_page/add_luscher_cdt.php"
                          class="d-flex align-items-center px-3 gap-2 text-decoration-none text-secondary"
                        >
                          <span>Lüscher Color Diagnostic Test Practitioner</span>
                        </a>
                        
                        <a
                          href="https://managethenow.net/mtn-live/courses_page/add_cpc.php"
                          class="d-flex align-items-center px-3 pt-1 gap-2 text-decoration-none text-secondary"
                        >
                          <span>Color Psychology-diagnostic Clinic (CPC)</span>
                        </a>
                         <a
                          href="https://managethenow.net/mtn-live/courses_page/add_Brain_CT_Scan.php"
                          class="d-flex align-items-center px-3 pt-1 gap-2 text-decoration-none text-secondary"
                        >
                          <span>Brain CT scan (Reading and diagnosing)</span>
                        </a>
                          <a
                          href="https://managethenow.net/mtn-live/courses_page/add_brainCTScanTrainings.php"
                          class="d-flex align-items-center px-3 gap-2 text-decoration-none text-secondary"
                        >
                          <span>Brain CT Scan Trainings</span>
                        </a>
                            <a
                          href="https://managethenow.net/mtn-live/courses_page/add_Therapy_GYM_Pregnancy.php"
                          class="d-flex align-items-center px-3 gap-2 text-decoration-none text-secondary"
                        >
                          <span>Therapy GYM Pregnancy</span>
                        </a>
                        
                         <a
                          href="https://managethenow.net/mtn-live/courses_page/add_woman_life_in_work.php"
                          class="d-flex align-items-center px-3 gap-2 text-decoration-none text-secondary"
                        >
                          <span>حياه الأنثى فى العمل</span>
                        </a>
                         <a
                          href="https://managethenow.net/mtn-live/courses_page/add_happiness_training.php"
                          class="d-flex align-items-center px-3 gap-2 text-decoration-none text-secondary"
                        >
                          <span>تدريبات السعادة </span>
                        </a>
                         <a
                          href="https://managethenow.net/mtn-live/courses_page/add_Therapy_GYM_Woman.php"
                          class="d-flex align-items-center px-3 gap-2 text-decoration-none text-secondary"
                        >
                          <span>Therapy GYM الأنوثة - مسجل </span>
                        </a>
                         <a
                          href="https://managethenow.net/mtn-live/courses_page/add_Therapy_GYM_men.php"
                          class="d-flex align-items-center px-3 gap-2 text-decoration-none text-secondary"
                        >
                          <span>Therapy GYM قعدة رجالة - مسجل</span>
                        </a>
                         <a
                          href="https://managethenow.net/mtn-live/courses_page/add_Therapy_GYM_men.php"
                          class="d-flex align-items-center px-3 gap-2 text-decoration-none text-secondary"
                        >
                          <span>Therapy GYM الأنوثة Special Edition</span>
                        </a>
                    
                      </div>
                    </div>
                  </div>
                  <!-- SWIPER CONTAINER-->
                  <div class="d-flex gap-5 pb-3 pe-5 h-100" id="swiper-container">
                    <!-- Slider main container -->
                    <div class="swiper">
                      <!-- Additional required wrapper -->
                      <div class="swiper-wrapper">
                        <!-- Slides -->
                        
                        
            
                          
                    
                      
                          <!-- AVAILABLE CARD -->
                      
                            <?php 
                          
                  

                                      foreach ($coursecode1 as $index => $member):
                                                                         
                                            $course_names = array("n",
                                            "Brain CT scan (Reading and diagnosing)",
                                            "Communication between Male & Female",
                                            "GYM Therapy قعدة رجالة - مسجل",
                                            "مسجل - األنوثة Therapy GYM",
                                            "Therapy GYM Pregnancy",
                                            "Emotional Literacy",
                                            "Emotional Balance Technique – Main Level",
                                            "Adam & Eve – Main Class ",
                                            "Adam & Eve – The Marriage",
                                            "CTRL Medicine – Organic Part",
                                            "تدريبات السعادة ",
                                            "Lüscher Color diagnostic test Practitioner",
                                            "Color Psychology-diagnostic Clinic (CPC)",
                                            "Therapy GYM Values",
                                            "Emotional Balance Technique – Adv. Level",
                                            "EstroGYM",
                                            "Masculinity GYM July 2023",
                                            "CTRL Medicine – Psychologic Part",
                                            "CTRL Medicine – Anatomical Part",
                                            " حياة الأنثى في العمل",
                                            "Brain CT Scan Trainings",
                                            "EstroGYM - Nov",
                                            "Therapy GYM Values Special Edition",
                                            "Therapy GYM الأنوثة Special Edition",
                                            "Masculinity GYM Nov 2022",
                                            "Masculinity GYM July",
                                            "TherapyGYM Fitra - Jun",
                                            "EstroGYM - Round Four",
                                            
                                            );


$index=$index+1;
                                           if( $member['course_permission14'] == 1){
    
         $courseimg = Course::get_courses_img($member['course_code14']);
                  $coursecolor = Course::get_courses_color($member['course_code14']);

                                             $courseimgres= trim($wordtweentynine,"../");
   if($member['course_code14']==$_COOKIE['coursecode']){
        
    }else{
        
                                     echo'  
                                     <div class="swiper-slide d-flex d-md-block gap-5 gap-md-0"
                        >
                        
                        <div
                            class="left-arrow-container d-flex align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                        
                                     <a
                                href="https://managethenow.net/mtn-live/action.php?id='.$id.'&action='.$member['course_code14'].'" name="action"

                            class="swiper-slide-card p-4 d-flex flex-column  text-decoration-none "
                            style=" background-image: url('.$wordtweentynine.');"
                          >
                          
                          </a>
                          <div
                            class="right-arrow-container d-flex align-items-center  d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                          
                          </div>
                          
                          ';
                          
    }
                          
                          
                                               // echo '<option value="'.$member['course_code1'].'"> '. $course_names[$member['course_code1'] ].'</option>'    ;
                                         } if( $member['course_permission25'] == 1){
    
         $courseimg = Course::get_courses_img($member['course_code25']);
                  $coursecolor = Course::get_courses_color($member['course_code25']);

                                             $courseimgres= trim($wordfivetyfive,"../");
   if($member['course_code25']==$_COOKIE['coursecode']){
        
    }else{
        
                                     echo'  
                                     <div class="swiper-slide d-flex d-md-block gap-5 gap-md-0"
                        >
                        
                        <div
                            class="left-arrow-container d-flex align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                        
                                     <a
                                href="https://managethenow.net/mtn-live/action.php?id='.$id.'&action='.$member['course_code25'].'" name="action"

                            class="swiper-slide-card p-4 d-flex flex-column  text-decoration-none "
                            style=" background-image: url('.$wordfivetyfive.');"
                          >
                          
                          </a>
                          <div
                            class="right-arrow-container d-flex align-items-center  d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                          
                          </div>
                          
                          ';
                          
    }
                          
                          
                                               // echo '<option value="'.$member['course_code1'].'"> '. $course_names[$member['course_code1'] ].'</option>'    ;
                                         } if ( $member['course_permission16'] ==1){
                                                                    $coursecolor = Course::get_courses_color($member['course_code16']);



 if($member['course_code16']==$_COOKIE['coursecode']){
        
    }else{
        
   

                                             echo'    <div
                          class="swiper-slide d-flex d-md-block gap-5 gap-md-0"
                        >
                        
                        <div
                            class="left-arrow-container d-flex align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                        <a
                                                href="https://managethenow.net/mtn-live/action.php?id='.$id.'&action='.$member['course_code16'].'" name="action"

                     style=" background-image: url('.$wordthirty.');"
                        
                            class="swiper-slide-card p-4 d-flex flex-column  text-decoration-none"
                          >
                           
                            </a>
                            <div
                            class="right-arrow-container d-flex align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                          
                          </div>
                          
                         
                          ';
    }        
                                             
                                              // echo '<option value="'.$member['course_code2'].'">'. $course_names[$member['course_code2'] ].'</option>'    ;
                                         } if ( $member['course_permission24'] ==1){
                                                                    $coursecolor = Course::get_courses_color($member['course_code24']);

 if($member['course_code24']==$_COOKIE['coursecode']){
        
    }else{
        
   

                                             echo'    <div
                          class="swiper-slide d-flex d-md-block gap-5 gap-md-0"
                        >
                        
                        <div
                            class="left-arrow-container d-flex align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                        <a
                                                href="https://managethenow.net/mtn-live/action.php?id='.$id.'&action='.$member['course_code24'].'" name="action"

                     style=" background-image: url('.$wordfivetythree.');"
                        
                            class="swiper-slide-card p-4 d-flex flex-column  text-decoration-none"
                          >
                           
                            </a>
                            <div
                            class="right-arrow-container d-flex align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                          
                          </div>
                          
                         
                          ';
    }        
                                             
                                              // echo '<option value="'.$member['course_code2'].'">'. $course_names[$member['course_code2'] ].'</option>'    ;
                                         } if ( $member['course_permission17'] ==1){
                                                  $courseimg = Course::get_courses_img($member['course_code17']);
                                                                    $coursecolor = Course::get_courses_color($member['course_code17']);

                                              
                                             if($member['course_code17']==$_COOKIE['coursecode']){
        
    }else{
        
                                               echo'    <div
                          class="swiper-slide d-flex d-md-block gap-5 gap-md-0"
                        >
                         <div
                            class="left-arrow-container d-flex align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                        <a
                                                href="https://managethenow.net/mtn-live/action.php?id='.$id.'&action='.$member['course_code17'].'" name="action"

                           style=" background-image: url('.$wordthirtyone.');"
                        
                            class="swiper-slide-card p-4 d-flex flex-column  text-decoration-none"
                          >
                           
                            </a>
                             <div
                            class="right-arrow-container d-flex align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                          </div>';
        
    }
                                               //echo '<option value="'.$member['course_code3'].'">'. $course_names[$member['course_code3'] ].'</option>'    ;
                                         } if ( $member['course_permission6'] ==1){
                                                                    $coursecolor = Course::get_courses_color($member['course_code6']);
if($member['course_code6']==$_COOKIE['coursecode']){
        
    }else{
        
                                               echo'   <div
                          class="swiper-slide d-flex d-md-block gap-5 gap-md-0"
                        > 
                         <div
                            class="left-arrow-container d-flex align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                                               <a
                                        href="https://managethenow.net/mtn-live/action.php?id='.$id.'&action='.$member['course_code6'].'" name="action"
                                                  style=" background-image: url('.$wordthirtytwo.');"
                                               
                            class="swiper-slide-card p-4 d-flex flex-column  text-decoration-none"
                          >
                           
                            </a>
                             <div
                            class="right-arrow-container d-flex align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                          </div>';
    }
                                               //echo '<option value="'.$member['course_code4'].'">'. $course_names[$member['course_code4'] ].'</option>'    ;
                                         } if ( $member['course_permission7'] ==1){
                                                                    $coursecolor = Course::get_courses_color($member['course_code7']);
if($member['course_code7']==$_COOKIE['coursecode']){
        
    }else{
        
                                               echo'    <div
                          class="swiper-slide d-flex d-md-block gap-5 gap-md-0"
                        >
                         <div
                            class="left-arrow-container d-flex align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                        <a
                        href="https://managethenow.net/mtn-live/action.php?id='.$id.'&action='.$member['course_code7'].'" name="action"
                          style=" background-image: url('.$wordthirtytree.');"
                            class="swiper-slide-card p-4 d-flex flex-column  text-decoration-none"
                          >
                            
                            </a>
                             <div
                            class="right-arrow-container d-flex align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                          </div>';
    }
                                               //echo '<option value="'.$member['course_code5'].'">'. $course_names[$member['course_code5'] ].'</option>'    ;
                                         } if ( $member['course_permission15'] ==1){
                                                                    $coursecolor = Course::get_courses_color($member['course_code15']);
if($member['course_code15']==$_COOKIE['coursecode']){
        
    }else{
 echo'    <div
                          class="swiper-slide d-flex d-md-block gap-5 gap-md-0"
                        >
                         <div
                            class="left-arrow-container d-flex align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                        <a
                        href="https://managethenow.net/mtn-live/action.php?id='.$id.'&action='.$member['course_code15'].'" name="action"
                          style=" background-image: url('.$wordthirtyfour.');"
                            class="swiper-slide-card p-4 d-flex flex-column  text-decoration-none"
                          >
                            
                            </a>
                             <div
                            class="right-arrow-container d-flex align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                          </div>';
    }
                                              
                                               //echo '<option value="'.$member['course_code6'].'">'. $course_names[$member['course_code6'] ].'</option>'    ;
                                         } if ( $member['course_permission8'] == 1){
                                                  $courseimg = Course::get_courses_img($member['course_code8']);
                                                                    $coursecolor = Course::get_courses_color($member['course_code8']);

                                              if($member['course_code8']==$_COOKIE['coursecode']){
        
    }else{
                                               echo'    <div
                          class="swiper-slide d-flex d-md-block gap-5 gap-md-0"
                        >
                         <div
                            class="left-arrow-container d-flex align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                        <a
                        href="https://managethenow.net/mtn-live/action.php?id='.$id.'&action='.$member['course_code8'].'" name="action"
                                                  style=" background-image: url('.$wordthirtyfive.');"
                        
                            class="swiper-slide-card p-4 d-flex flex-column  text-decoration-none"
                          >
                            
                            </a>
                             <div
                            class="right-arrow-container d-flex align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                          </div>';
    }
                                             
                                             
                                              // echo '<option value="'.$member['course_code7'].'">'. $course_names[$member['course_code7'] ].'</option>'    ;
                                         } if ( $member['course_permission2'] ==1){
                                             
                                              $courseimg = Course::get_courses_img($member['course_code2']);
                                                                $coursecolor = Course::get_courses_color($member['course_code2']);

                                              if($member['course_code2']==$_COOKIE['coursecode']){
        
    }else{
                                              
                                               echo'    <div 
                          class="swiper-slide d-flex d-md-block gap-5 gap-md-0" onclick="swipcoursecode(event)"
                        >
                         <div
                            class="left-arrow-container d-flex align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                        <a href="https://managethenow.net/mtn-live/action.php?id='.$id.'&action='.$member['course_code2'].'" name="action"
                        
                           style=" background-image: url('.$wordthirtysix.');"
                        
                            class="swiper-slide-card p-4 d-flex flex-column  text-decoration-none text-decoration-none" 
                          >
                           
                            </a>
                             <div
                            class="right-arrow-container d-flex align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                          </div>';
    }
                                               //echo '<option value="'.$member['course_code8'].'">'. $course_names[$member['course_code8'] ].'</option>'    ;
                                         } if ( $member['course_permission9'] ==1){
                                                  $courseimg = Course::get_courses_img($member['course_code9']);
                                                                    $coursecolor = Course::get_courses_color($member['course_code9']);
if($member['course_code9']==$_COOKIE['coursecode']){
        
    }else{
                                              
                                               echo'    <div
                          class="swiper-slide d-flex d-md-block gap-5 gap-md-0"
                        >
                         <div
                            class="left-arrow-container d-flex align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                        <a
                        href="https://managethenow.net/mtn-live/action.php?id='.$id.'&action='.$member['course_code9'].'" name="action"
                        
                           style=" background-image: url('.$wordthirtyseven.');"
                        
                            class="swiper-slide-card p-4 d-flex flex-column  text-decoration-none"
                          >
                            
                            </a>
                             <div
                            class="right-arrow-container d-flex align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                          </div>';
    }
                                             
                                              // echo '<option value="'.$member['course_code9'].'">'. $course_names[$member['course_code9'] ].'</option>'    ;
                                         } if ( $member['course_permission19'] ==1){
                                                                    $coursecolor = Course::get_courses_color($member['course_code19']);
if($member['course_code19']==$_COOKIE['coursecode']){
        
    }else{
                                               echo'    <div
                          class="swiper-slide d-flex d-md-block gap-5 gap-md-0"
                        >
                         <div
                            class="left-arrow-container d-flex align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                        <a
                        href="https://managethenow.net/mtn-live/action.php?id='.$id.'&action='.$member['course_code19'].'" name="action"
                        
                           style=" background-image: url('.$wordthirtyeight.');"
                        
                            class="swiper-slide-card p-4 d-flex flex-column  text-decoration-none"
                          >
                           
                            </a>
                             <div
                            class="right-arrow-container d-flex align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                          </div>';
    }        
                                               //echo '<option value="'.$member['course_code10'].'">'. $course_names[$member['course_code10'] ].'</option>'    ;
                                         } if ( $member['course_permission10'] ==1){
                                                  $courseimg = Course::get_courses_img($member['course_code10']);
                                                                    $coursecolor = Course::get_courses_color($member['course_code10']);

                                              if($member['course_code10']==$_COOKIE['coursecode']){
        
    }else{
                                               echo'    <div
                          class="swiper-slide d-flex d-md-block gap-5 gap-md-0"
                        >
                         <div
                            class="left-arrow-container d-flex align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                        <a
                        href="https://managethenow.net/mtn-live/action.php?id='.$id.'&action='.$member['course_code10'].'" name="action"
                    
                       style=" background-image: url('.$wordthirtynine.');"
                    
                            class="swiper-slide-card p-4 d-flex flex-column  text-decoration-none"
                          >
                           
                   
                            </a>
                             <div
                            class="right-arrow-container d-flex align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                          </div>';
    }
                                             
                                               //echo '<option value="'.$member['course_code10'].'">'. $course_names[$member['course_code10'] ].'</option>'    ;
                                         }  if ( $member['course_permission18'] ==1){
                                             
                                                  $courseimg = Course::get_courses_img($member['course_code18']);
                                                                    $coursecolor = Course::get_courses_color($member['course_code18']);

                                              if($member['course_code18']==$_COOKIE['coursecode']){
        
    }else{
                                               echo'   <div
                          class="swiper-slide d-flex d-md-block gap-5 gap-md-0"
                        >
                         <div
                            class="left-arrow-container d-flex align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                        <a
                        href="https://managethenow.net/mtn-live/action.php?id='.$id.'&action='.$member['course_code18'].'" name="action"

                        
                           style=" background-image: url('.$wordfourty.');"
                            class="swiper-slide-card p-4 d-flex flex-column  text-decoration-none"
                          >
                            
                            </a>
                             <div
                            class="right-arrow-container d-flex align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                          </div>';
    }
                                              // echo '<option value="'.$member['course_code12'].'">'. $course_names[$member['course_code12'] ].'</option>'    ;
                                         } if ( $member['course_permission12'] ==1){
                                                  $courseimg = Course::get_courses_img($member['course_code12']);
                                                                    $coursecolor = Course::get_courses_color($member['course_code12']);

                                              if($member['course_code12']==$_COOKIE['coursecode']){
        
    }else{
                                             
                                               echo'  <div
                          class="swiper-slide d-flex d-md-block gap-5 gap-md-0"
                        >
                         <div
                            class="left-arrow-container d-flex align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                        <a
                        href="https://managethenow.net/mtn-live/action.php?id='.$id.'&action='.$member['course_code12'].'" name="action"
                    
                           style=" background-image: url('.$wordfourtyone.');"
                           
                            class="swiper-slide-card p-4 d-flex flex-column  text-decoration-none"
                          >
                          
                            </a>
                             <div
                            class="right-arrow-container d-flex align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                          </div>';
    }
                                              // echo '<option value="'.$member['course_code13'].'">'. $course_names[$member['course_code13'] ].'</option>'    ;
                                         } if ( $member['course_permission13'] ==1){
                                                  $courseimg = Course::get_courses_img($member['course_code13']);
                                                                    $coursecolor = Course::get_courses_color($member['course_code13']);

                                              
                                             if($member['course_code13']==$_COOKIE['coursecode']){
        
    }else{
                                               echo'    <div
                          class="swiper-slide d-flex d-md-block gap-5 gap-md-0"
                        >
                         <div
                            class="left-arrow-container d-flex align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                        <a
                        href="https://managethenow.net/mtn-live/action.php?id='.$id.'&action='.$member['course_code13'].'" name="action"
                        
                           style=" background-image: url('.$wordfourtytwo.');"
                        
                            class="swiper-slide-card p-4 d-flex flex-column  text-decoration-none"
                          >
                           
                            </a>
                             <div
                            class="right-arrow-container d-flex align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                          </div>';
    }
                                               //echo '<option value="'.$member['course_code14'].'">'. $course_names[$member['course_code14'] ].'</option>'    ;
                                         }if ( $member['course_permission1'] ==1){
                                                  $courseimg = Course::get_courses_img($member['course_code1']);
                                                                    $coursecolor = Course::get_courses_color($member['course_code1']);

                                              
                                             if($member['course_code1']==$_COOKIE['coursecode']){
        
    }else{
                                               echo'    <div
                          class="swiper-slide d-flex d-md-block gap-5 gap-md-0"
                        >
                         <div
                            class="left-arrow-container d-flex align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                        <a
                        href="https://managethenow.net/mtn-live/action.php?id='.$id.'&action='.$member['course_code1'].'" name="action"
                        
                           style=" background-image: url('.$wordfourtytree.');"
                        
                            class="swiper-slide-card p-4 d-flex flex-column  text-decoration-none"
                          >
                           
                            </a>
                             <div
                            class="right-arrow-container d-flex align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                          </div>';
    }
                                               //echo '<option value="'.$member['course_code14'].'">'. $course_names[$member['course_code14'] ].'</option>'    ;
                                         } if ( $member['course_permission21'] ==1){
                                                  $courseimg = Course::get_courses_img($member['course_code21']);
                                                                    $coursecolor = Course::get_courses_color($member['course_code21']);

                                              if($member['course_code21']==$_COOKIE['coursecode']){
        
    }else{
                                               echo'    <div
                          class="swiper-slide d-flex d-md-block gap-5 gap-md-0"
                        >
                         <div
                            class="left-arrow-container d-flex align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                        <a 
                    
                        href="https://managethenow.net/mtn-live/action.php?id='.$id.'&action='.$member['course_code21'].'" name="action"
                        
                           style=" background-image: url('.$wordfourtyfour.');"
                        
                            class="swiper-slide-card p-4 d-flex flex-column  text-decoration-none"
                          >
                            
                            </a>
                             <div
                            class="right-arrow-container d-flex align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                          </div>';
    }
                                               //echo '<option value="'.$member['course_code16'].'">'.$course_names[$member['course_code16'] ].'</option>'    ;
                                         } if ( $member['course_permission5'] ==1){
                                                                    $coursecolor = Course::get_courses_color($member['course_code5']);
if($member['course_code5']==$_COOKIE['coursecode']){
        
    }else{
                                               echo'    <div
                          class="swiper-slide d-flex d-md-block gap-5 gap-md-0"
                        >
                        
                         <div
                            class="left-arrow-container d-flex align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                            <a
                            style="
                              width: 160px;
                              height: 230px;
                              border-radius: 25px;
                              cursor: pointer;
                              text-decoration: none;
                              background-image: url('.$wordfourtyfive.');
                            "
                        href="https://managethenow.net/mtn-live/action.php?id='.$id.'&action='.$member['course_code5'].'" name="action"
                            class="p-4 d-flex flex-column justify-content-between text-decoration-none"
                          >
                          </a>
                        
                        
                        
                        
                             <div
                            class="right-arrow-container d-flex align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                          </div>';
    }
                                               //echo '<option value="'.$member['course_code17'].'">'. $course_names[$member['course_code17'] ].'</option>'    ;
                                         } if ( $member['course_permission20'] ==1){
                                                  $courseimg = Course::get_courses_img($member['course_code20']);
                                                                    $coursecolor = Course::get_courses_color($member['course_code20']);

                                              if($member['course_code20']==$_COOKIE['coursecode']){
        
    }else{
                                             
                                               echo'   <div
                          class="swiper-slide d-flex d-md-block gap-5 gap-md-0"
                        >
                         <div
                            class="left-arrow-container d-flex align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                        <a
                        href="https://managethenow.net/mtn-live/action.php?id='.$id.'&action='.$member['course_code20'].'" name="action"
                        
                        
                           style=" background-image: url('.$wordfourtysix.');"
                        
                            class="swiper-slide-card p-4 d-flex flex-column  text-decoration-none"
                          >
                           
                            </a>
                             <div
                            class="right-arrow-container d-flex align-items-center d-block d-md-none"
                          > 
                            <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                          </div>';
    }
                                              // echo '<option value="'.$member['course_code18'].'">'. $course_names[$member['course_code18'] ].'</option>'    ;
                                         } if ( $member['course_permission11'] ==1){
                                                  $courseimg = Course::get_courses_img($member['course_code11']);
                                                                    $coursecolor = Course::get_courses_color($member['course_code11']);

                                              
                                             if($member['course_code11']==$_COOKIE['coursecode']){
        
    }else{
                                               echo'    <div
                          class="swiper-slide d-flex d-md-block gap-5 gap-md-0"
                        >
                         <div
                            class="left-arrow-container d-flex align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                        <a
                        href="https://managethenow.net/mtn-live/action.php?id='.$id.'&action='.$member['course_code11'].'" name="action"
                        
                           style=" background-image: url('.$wordfourtyseven.');"
                        
                            class="swiper-slide-card p-4 d-flex flex-column  text-decoration-none"
                          >
                         
                            </a>
                             <div
                            class="right-arrow-container d-flex align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                          </div>';
    }
                                               //echo '<option value="'.$member['course_code19'].'">'. $course_names[$member['course_code19'] ].'</option>'    ;
                                         }if ( $member['course_permission4'] ==1){
                                                   
                                                                    $coursecolor = Course::get_courses_color($member['course_code4']);

                                              if($member['course_code4']==$_COOKIE['coursecode']){
        
    }else{
                                             
                                               echo'    <div
                          class="swiper-slide d-flex d-md-block gap-5 gap-md-0"
                        >
                         <div
                            class="left-arrow-container d-flex align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                        <a
                        href="https://managethenow.net/mtn-live/action.php?id='.$id.'&action='.$member['course_code4'].'" name="action"
                        
                           style=" background-image: url('.$wordfourtyeight.');"
                        
                            class="swiper-slide-card p-4 d-flex flex-column  text-decoration-none"
                          >
                           
                            </a>
                             <div
                            class="right-arrow-container d-flex align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                          </div>';
    }
                                               //echo '<option value="'.$member['course_code19'].'">'. $course_names[$member['course_code19'] ].'</option>'    ;
                                         }if ( $member['course_permission3'] ==1){
                                                  $courseimg = Course::get_courses_img($member['course_code3']);
                                                                    $coursecolor = Course::get_courses_color($member['course_code3']);

                                              if($member['course_code3']==$_COOKIE['coursecode']){
        
    }else{
                                               echo'   <div
                          class="swiper-slide d-flex d-md-block gap-5 gap-md-0"
                        >
                         <div
                            class="left-arrow-container d-flex align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                        <a
                        href="https://managethenow.net/mtn-live/action.php?id='.$id.'&action='.$member['course_code3'].'" name="action"
                      
                           style=" background-image: url('.$wordfourtynine.');"
                        
                            class="swiper-slide-card p-4 d-flex flex-column  text-decoration-none"
                          >
                          
                            </a>
                             <div
                            class="d-none align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                          </div>';
    }
                                               //echo '<option value="'.$member['course_code21'].'">'. $course_names[$member['course_code21'] ].'</option>'    ;
                                         }if ( $member['course_permission22'] ==1){
                                                  $courseimg = Course::get_courses_img($member['course_code22']);
                                                                    $coursecolor = Course::get_courses_color($member['course_code22']);

                                              if($member['course_code22']==$_COOKIE['coursecode']){
        
    }else{
                                               echo'   <div
                          class="swiper-slide d-flex d-md-block gap-5 gap-md-0"
                        >
                         <div
                            class="left-arrow-container d-flex align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                        <a
                        href="https://managethenow.net/mtn-live/action.php?id='.$id.'&action='.$member['course_code22'].'" name="action"
                      
                           style=" background-image: url('.$wordfivetyone.');"
                        
                            class="swiper-slide-card p-4 d-flex flex-column  text-decoration-none"
                          >
                          
                            </a>
                             <div
                            class="d-none align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                          </div>';
    }
                                               //echo '<option value="'.$member['course_code21'].'">'. $course_names[$member['course_code21'] ].'</option>'    ;
                                         }if ( $member['course_permission23'] ==1){
                                                  $courseimg = Course::get_courses_img($member['course_code23']);
                                                  $coursecolor = Course::get_courses_color($member['course_code23']);

                                              if($member['course_code23']==$_COOKIE['coursecode']){
        
    }else{
                                               echo'   <div
                          class="swiper-slide d-flex d-md-block gap-5 gap-md-0"
                        >
                         <div
                            class="left-arrow-container d-flex align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                        <a
                        href="https://managethenow.net/mtn-live/action.php?id='.$id.'&action='.$member['course_code23'].'" name="action"
                      
                           style=" background-image: url('.$wordfivetytwo.');"
                        
                            class="swiper-slide-card p-4 d-flex flex-column  text-decoration-none"
                          >
                          
                            </a>
                             <div
                            class="d-none align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                          </div>';
    }
                                               //echo '<option value="'.$member['course_code21'].'">'. $course_names[$member['course_code21'] ].'</option>'    ;
                                         
                                         }if ( $member['course_permission26'] ==1){
                                                  $courseimg = Course::get_courses_img($member['course_code26']);
                                                  $coursecolor = Course::get_courses_color($member['course_code26']);

                                              if($member['course_code26']==$_COOKIE['coursecode']){
        
    }else{
                                               echo'   <div
                          class="swiper-slide d-flex d-md-block gap-5 gap-md-0"
                        >
                         <div
                            class="left-arrow-container d-flex align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                        <a
                        href="https://managethenow.net/mtn-live/action.php?id='.$id.'&action='.$member['course_code26'].'" name="action"
                      
                           style=" background-image: url('.$wordfivetysix.');"
                        
                            class="swiper-slide-card p-4 d-flex flex-column  text-decoration-none"
                          >
                          
                            </a>
                             <div
                            class="d-none align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                          </div>';
    }
                                               //echo '<option value="'.$member['course_code21'].'">'. $course_names[$member['course_code21'] ].'</option>'    ;
                                         
                                         }if ( $member['course_permission27'] ==1){
                                                  $courseimg = Course::get_courses_img($member['course_code27']);
                                                  $coursecolor = Course::get_courses_color($member['course_code27']);

                                              if($member['course_code27']==$_COOKIE['coursecode']){
        
    }else{
                                               echo'   <div
                          class="swiper-slide d-flex d-md-block gap-5 gap-md-0"
                        >
                         <div
                            class="left-arrow-container d-flex align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                        <a
                        href="https://managethenow.net/mtn-live/action.php?id='.$id.'&action='.$member['course_code27'].'" name="action"
                      
                           style=" background-image: url('.$wordfivetyseven.');"
                        
                            class="swiper-slide-card p-4 d-flex flex-column  text-decoration-none"
                          >
                          
                            </a>
                             <div
                            class="d-none align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                          </div>';
    }
                                               //echo '<option value="'.$member['course_code21'].'">'. $course_names[$member['course_code21'] ].'</option>'    ;
                                         }
                                         if ( $member['course_permission28'] ==1){
                                                  $courseimg = Course::get_courses_img($member['course_code28']);
                                                  $coursecolor = Course::get_courses_color($member['course_code28']);

                                              if($member['course_code28']==$_COOKIE['coursecode']){
        
    }else{
                                               echo'   <div
                          class="swiper-slide d-flex d-md-block gap-5 gap-md-0"
                        >
                         <div
                            class="left-arrow-container d-flex align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                        <a
                        href="https://managethenow.net/mtn-live/action.php?id='.$id.'&action='.$member['course_code28'].'" name="action"
                      
                           style=" background-image: url('.$wordfivetyeight.');"
                        
                            class="swiper-slide-card p-4 d-flex flex-column  text-decoration-none"
                          >
                          
                            </a>
                             <div
                            class="d-none align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                          </div>';
    }
                                               //echo '<option value="'.$member['course_code21'].'">'. $course_names[$member['course_code21'] ].'</option>'    ;
                                         }
                                         if ( $member['course_permission29'] ==1){
                                                  $courseimg = Course::get_courses_img($member['course_code29']);
                                                  $coursecolor = Course::get_courses_color($member['course_code29']);

                                              if($member['course_code29']==$_COOKIE['coursecode']){
        
    }else{
                                               echo'   <div
                          class="swiper-slide d-flex d-md-block gap-5 gap-md-0"
                        >
                         <div
                            class="left-arrow-container d-flex align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                        <a
                        href="https://managethenow.net/mtn-live/action.php?id='.$id.'&action='.$member['course_code29'].'" name="action"
                      
                           style=" background-image: url('.$wordfivetynine.');"
                        
                            class="swiper-slide-card p-4 d-flex flex-column  text-decoration-none"
                          >
                          
                            </a>
                             <div
                            class="d-none align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                          </div>';
    }
                                               //echo '<option value="'.$member['course_code21'].'">'. $course_names[$member['course_code21'] ].'</option>'    ;
                                         }
                                         if ( $member['course_permission30'] ==1){
                                                  $courseimg = Course::get_courses_img($member['course_code30']);
                                                  $coursecolor = Course::get_courses_color($member['course_code30']);

                                              if($member['course_code30']==$_COOKIE['coursecode']){
        
    }else{
                                               echo'   <div
                          class="swiper-slide d-flex d-md-block gap-5 gap-md-0"
                        >
                         <div
                            class="left-arrow-container d-flex align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                        <a
                        href="https://managethenow.net/mtn-live/action.php?id='.$id.'&action='.$member['course_code30'].'" name="action"
                      
                           style=" background-image: url('.$wordsixty.');"
                        
                            class="swiper-slide-card p-4 d-flex flex-column  text-decoration-none"
                          >
                          
                            </a>
                             <div
                            class="d-none align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                          </div>';
    }
                                               //echo '<option value="'.$member['course_code21'].'">'. $course_names[$member['course_code21'] ].'</option>'    ;
                                         }
                                         if ( $member['course_permission31'] ==1){
                                                  $courseimg = Course::get_courses_img($member['course_code31']);
                                                  $coursecolor = Course::get_courses_color($member['course_code31']);

                                              if($member['course_code31']==$_COOKIE['coursecode']){
        
    }else{
                                               echo'   <div
                          class="swiper-slide d-flex d-md-block gap-5 gap-md-0"
                        >
                         <div
                            class="left-arrow-container d-flex align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                        <a
                        href="https://managethenow.net/mtn-live/action.php?id='.$id.'&action='.$member['course_code31'].'" name="action"
                      
                           style=" background-image: url('.$wordsixtyone.');"
                        
                            class="swiper-slide-card p-4 d-flex flex-column  text-decoration-none"
                          >
                          
                            </a>
                             <div
                            class="d-none align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                          </div>';
    }
                                               //echo '<option value="'.$member['course_code21'].'">'. $course_names[$member['course_code21'] ].'</option>'    ;
                                         }
                                         if ( $member['course_permission32'] ==1){
                                                  $courseimg = Course::get_courses_img($member['course_code32']);
                                                  $coursecolor = Course::get_courses_color($member['course_code32']);

                                              if($member['course_code32']==$_COOKIE['coursecode']){
        
    }else{
                                               echo'   <div
                          class="swiper-slide d-flex d-md-block gap-5 gap-md-0"
                        >
                         <div
                            class="left-arrow-container d-flex align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                        <a
                        href="https://managethenow.net/mtn-live/action.php?id='.$id.'&action='.$member['course_code32'].'" name="action"
                      
                           style=" background-image: url('.$wordsixtytwo.');"
                        
                            class="swiper-slide-card p-4 d-flex flex-column  text-decoration-none"
                          >
                          
                            </a>
                             <div
                            class="d-none align-items-center d-block d-md-none"
                          >
                            <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>

                          </div>
                          </div>';
    }
                                               //echo '<option value="'.$member['course_code21'].'">'. $course_names[$member['course_code21'] ].'</option>'    ;
                                         }


                                           if( $member['course_permission14'] == 3||$member['course_permission14'] ==0){
                                                 $courseimg = Course::get_courses_img($member['course_code14']);
                                                                   $coursecolor = Course::get_courses_color($member['course_code14']);

                                              
                                              echo'   
                                               
                                              <div class="swiper-slide d-flex d-md-block gap-5 gap-md-0">
                                
                                
                                               <div
                                                class="left-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                                              <div
                                              style="background:transparent"
                            class="swiper-slide-card  d-flex flex-column  text-decoration-none position-relative"
                          >
                          
                          
                          
                          
                            <a
                            href="https://managethenow.net/Therapy_GYM_Values_Add_course/"
                              class="locked-card position-absolute w-100 h-100 top-0 start-0 d-flex p-4 justify-content-end"
                            >
                              <i class="fa-solid fa-lock fs-4 text-white"></i>
                            </a>
                            
                           
                            
                             <img class="w-100 h-100" src="'.$wordtweentynine.'">
                           
                          </div>
                                                                         <div
                                                class="left-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                          </div>
                          ';
                                              // echo '<option value="'.$member['course_code1'].'"> '. $course_names[$member['course_code1'] ].'</option>'    ;
                                         } if( $member['course_permission25'] == 3||$member['course_permission25'] ==0){
                                                 $courseimg = Course::get_courses_img($member['course_code25']);
                                                                   $coursecolor = Course::get_courses_color($member['course_code25']);

                                              
                                              echo'   
                                               
                                              <div class="swiper-slide d-flex d-md-block gap-5 gap-md-0">
                                
                                
                                               <div
                                                class="left-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                                              <div
                                              style="background:transparent"
                            class="swiper-slide-card  d-flex flex-column  text-decoration-none position-relative"
                          >
                          
                          
                          
                          
                            <a
                            href="https://managethenow.net/Therapy_GYM_Values_Add_course/"
                              class="locked-card position-absolute w-100 h-100 top-0 start-0 d-flex p-4 justify-content-end"
                            >
                              <i class="fa-solid fa-lock fs-4 text-white"></i>
                            </a>
                            
                           
                            
                             <img class="w-100 h-100" src="'.$wordfivetyfive.'">
                           
                          </div>
                                                                         <div
                                                class="left-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                          </div>
                          ';
                                              // echo '<option value="'.$member['course_code1'].'"> '. $course_names[$member['course_code1'] ].'</option>'    ;
                                              
                                              
                                              
                                         } if ($member['course_permission16'] ==3||$member['course_permission16'] ==0){
                                             
                                             $courseimg = Course::get_courses_img($member['course_code16']);
                                                               $coursecolor = Course::get_courses_color($member['course_code16']);

                                              
                                              echo' <div class="swiper-slide d-flex d-md-block gap-5 gap-md-0"> 
                                              
                                               <div
                                                class="left-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                                              
                                              <div
                                             style="background:transparent"
                            class="swiper-slide-card  d-flex flex-column  text-decoration-none position-relative"
                          >
                            <a
                            href="https://managethenow.net/Estro_GYM_Add_Course/"
                              class="locked-card position-absolute w-100 h-100 top-0 start-0 d-flex p-4 justify-content-end"
                            >
                              <i class="fa-solid fa-lock fs-4 text-white"></i>
                            </a>
                            <img class="w-100 h-100" src="'.$wordthirty.'">
                          </div>
                          
                           <div
                                                class="right-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                          </div>
                          ';
                                             
                                             
                                              // echo '<option value="'.$member['course_code2'].'">'. $course_names[$member['course_code2'] ].'</option>'    ;
                                         } if ($member['course_permission24'] ==3||$member['course_permission24'] ==0){
                                             
                                             $courseimg = Course::get_courses_img($member['course_code24']);
                                                               $coursecolor = Course::get_courses_color($member['course_code24']);

                                              
                                              echo' <div class="swiper-slide d-flex d-md-block gap-5 gap-md-0"> 
                                              
                                               <div
                                                class="left-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                                              
                                              <div
                                             style="background:transparent"
                            class="swiper-slide-card  d-flex flex-column  text-decoration-none position-relative"
                          >
                            <a
                            href="https://managethenow.net/Estro_GYM_Add_Course/"
                              class="locked-card position-absolute w-100 h-100 top-0 start-0 d-flex p-4 justify-content-end"
                            >
                              <i class="fa-solid fa-lock fs-4 text-white"></i>
                            </a>
                            <img class="w-100 h-100" src="'.$wordfivetythree.'">
                          </div>
                          
                           <div
                                                class="right-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                          </div>
                          ';
                                             
                                             
                                              // echo '<option value="'.$member['course_code2'].'">'. $course_names[$member['course_code2'] ].'</option>'    ;
                                         } if ( $member['course_permission17'] ==3||$member['course_permission17'] ==0){
                                                  $courseimg = Course::get_courses_img($member['course_code17']);
                                                                    $coursecolor = Course::get_courses_color($member['course_code17']);

                                              
                                            
                                              echo'   <div class="swiper-slide d-flex d-md-block gap-5 gap-md-0">
                                               <div
                                                class="left-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                                              <div
                                               style="background:transparent"
                            class="swiper-slide-card  d-flex flex-column  text-decoration-none position-relative"
                          >
                            <a
                              class="locked-card position-absolute w-100 h-100 top-0 start-0 d-flex p-4 justify-content-end"
                            >
                              <i class="fa-solid fa-lock fs-4 text-white"></i>
                            </a>
                              <img class="w-100 h-100" src="'.$wordthirtyone.'">
                          </div>
                                                     <div
                                                class="right-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                          </div>
                          ';
                                              //echo '<option value="'.$member['course_code3'].'">'. $course_names[$member['course_code3'] ].'</option>'    ;
                                         } if ($member['course_permission6'] ==3||$member['course_permission6'] ==0){
                                                $courseimg = Course::get_courses_img($member['course_code6']);
                                                                  $coursecolor = Course::get_courses_color($member['course_code6']);

                                              
                                              echo'  <div class="swiper-slide d-flex d-md-block gap-5 gap-md-0">
                                               <div
                                                class="left-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                                              
                                              <div
                                           style="background:transparent"
                            class="swiper-slide-card  d-flex flex-column  text-decoration-none position-relative"
                          >
                            <a
                              class="locked-card position-absolute w-100 h-100 top-0 start-0 d-flex p-4 justify-content-end"
                            >
                              <i class="fa-solid fa-lock fs-4 text-white"></i>
                            </a>

                            
                             <img class="w-100 h-100" src="'.$wordthirtytwo.'">
                            
                          </div>
                          
                                                     <div
                                                class="right-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                          
                          </div>
                          ';
                                              //echo '<option value="'.$member['course_code4'].'">'. $course_names[$member['course_code4'] ].'</option>'    ;
                                         } if ( $member['course_permission7'] ==3||$member['course_permission7'] ==0){
                                                  $courseimg = Course::get_courses_img($member['course_code7']);
                                                                    $coursecolor = Course::get_courses_color($member['course_code7']);

                                              
                                              echo'<div class="swiper-slide d-flex d-md-block gap-5 gap-md-0">
                                              
                                               <div
                                                class="left-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                                               
                                              <div
                                             style="background:transparent"
                            class="swiper-slide-card overflow-hidden d-flex flex-column  text-decoration-none position-relative"
                          >
                            <a
                              class="locked-card position-absolute w-100 h-100 top-0 start-0 d-flex p-4 justify-content-end"
                            >
                              <i class="fa-solid fa-lock fs-4 text-white"></i>
                            </a>
                                 <img class="w-100 h-100" src="'.$wordthirtytree.'">
                          </div>
                          
                                                     <div
                                                class="right-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                          
                          </div>
                          ';
                                              //echo '<option value="'.$member['course_code5'].'">'. $course_names[$member['course_code5'] ].'</option>'    ;
                                         } if ( $member['course_permission15'] ==3||$member['course_permission15'] ==0){
                                               $courseimg = Course::get_courses_img($member['course_code15']);
                                                                 $coursecolor = Course::get_courses_color($member['course_code15']);

                                              
                                              echo'  
                                              <div class="swiper-slide d-flex d-md-block gap-5 gap-md-0">
                                               <div
                                                class="left-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                                              <div
                                              style=""
                            class="swiper-slide-card d-flex flex-column  text-decoration-none position-relative"
                          >
                            <a
                              class="locked-card position-absolute w-100 h-100 top-0 start-0 d-flex p-4 justify-content-end"
                            >
                              <i class="fa-solid fa-lock fs-4 text-white"></i>
                            </a>
                              <img class="w-100 h-100" src="'.$wordthirtyfour.'">
                          </div>
                                                     <div
                                                class="right-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                          </div>
                          ';
                                              //echo '<option value="'.$member['course_code6'].'">'. $course_names[$member['course_code6'] ].'</option>'    ;
                                         } if ( $member['course_permission8'] ==3||$member['course_permission8'] ==0){
                                                  $courseimg = Course::get_courses_img($member['course_code8']);
                                                                    $coursecolor = Course::get_courses_color($member['course_code8']);

                                              
                                        
                                              echo'  
                                              <div class="swiper-slide d-flex d-md-block gap-5 gap-md-0">
                                               <div
                                                class="left-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                                              <div
                                          style="background:transparent"
                            class="swiper-slide-card  d-flex flex-column  text-decoration-none position-relative"
                          >
                            <a
                              class="locked-card position-absolute w-100 h-100 top-0 start-0 d-flex p-4 justify-content-end"
                            >
                              <i class="fa-solid fa-lock fs-4 text-white"></i>
                            </a>
                             <img class="w-100 h-100" src="'.$wordthirtyfive.'">
                          </div>
                                                     <div
                                                class="right-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                          </div>
                          ';
                                             
                                             
                                              // echo '<option value="'.$member['course_code7'].'">'. $course_names[$member['course_code7'] ].'</option>'    ;
                                          
                                         } if ( $member['course_permission2'] ==3||$member['course_permission2'] ==0){
                                                  $courseimg = Course::get_courses_img($member['course_code2']);
                                                                    $coursecolor = Course::get_courses_color($member['course_code2']);

                                              
                                              
                                              echo'  
                                              <div class="swiper-slide d-flex d-md-block gap-5 gap-md-0">
                                              
                                               <div
                                                class="left-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                                              
                                              <div
                                 style="background:transparent"
                            class="swiper-slide-card  d-flex flex-column  text-decoration-none position-relative"
                          >
                            <a
                              class="locked-card position-absolute w-100 h-100 top-0 start-0 d-flex p-4 justify-content-end"
                            >
                              <i class="fa-solid fa-lock fs-4 text-white"></i>
                            </a>
                           <img class="w-100 h-100" src="'.$wordthirtysix.'">
                          </div>
                          
                                                     <div
                                                class="right-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                          
                          </div>
                          ';
                                              //echo '<option value="'.$member['course_code8'].'">'. $course_names[$member['course_code8'] ].'</option>'    ;
                                         
                                         } if ( $member['course_permission9'] ==3||$member['course_permission9'] ==0){
                                                  $courseimg = Course::get_courses_img($member['course_code9']);
                                                                    $coursecolor = Course::get_courses_color($member['course_code9']);

                                              
                                              echo'  <div class="swiper-slide d-flex d-md-block gap-5 gap-md-0">
                                              
                                              
                                               <div
                                                class="left-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                                               
                                              <div
                                               style="background:transparent"
                            class="swiper-slide-card  d-flex flex-column  text-decoration-none position-relative"
                          >
                            <a
                              class="locked-card position-absolute w-100 h-100 top-0 start-0 d-flex p-4 justify-content-end"
                            >
                              <i class="fa-solid fa-lock fs-4 text-white"></i>
                            </a>
                            <img class="w-100 h-100" src="'.$wordthirtyseven.'">
                          </div>
                          
                                                     <div
                                                class="right-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                          
                          </div>
                          ';
                                             
                                              // echo '<option value="'.$member['course_code9'].'">'. $course_names[$member['course_code9'] ].'</option>'    ;
                                         } if ( $member['course_permission19'] ==3||$member['course_permission19'] ==0){
                                                  $courseimg = Course::get_courses_img($member['course_code19']);
                                                                    $coursecolor = Course::get_courses_color($member['course_code19']);

                                              
                                              echo'   <div class="swiper-slide d-flex d-md-block gap-5 gap-md-0">
                                               <div
                                                class="left-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                                               
                                              <div
                                             style="background:transparent"
                            class="swiper-slide-card  d-flex flex-column  text-decoration-none position-relative"
                          >
                            <a
                              class="locked-card position-absolute w-100 h-100 top-0 start-0 d-flex p-4 justify-content-end"
                            >
                              <i class="fa-solid fa-lock fs-4 text-white"></i>
                            </a>
                           <img class="w-100 h-100" src="'.$wordthirtyeight.'">
                          </div>
                                                     <div
                                                class="right-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                          </div>
                          ';
                                             
                                              //echo '<option value="'.$member['course_code10'].'">'. $course_names[$member['course_code10'] ].'</option>'    ;
                                         } if ( $member['course_permission10'] ==3||$member['course_permission10'] ==0){
                                              $courseimg = Course::get_courses_img($member['course_code10']);
                                                                $coursecolor = Course::get_courses_color($member['course_code10']);

                                              
                                              echo'  <div class="swiper-slide d-flex d-md-block gap-5 gap-md-0">
                                              
                                               <div
                                                class="left-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                                              <div
                                              style="background:transparent"
                            class="swiper-slide-card  d-flex flex-column  text-decoration-none position-relative"
                          >
                            <a
                              class="locked-card position-absolute w-100 h-100 top-0 start-0 d-flex p-4 justify-content-end"
                            >
                              <i class="fa-solid fa-lock fs-4 text-white"></i>
                            </a>
                            
                            <img class="w-100 h-100" src="'.$wordthirtynine.'">
                          </div>
                          
                                                     <div
                                                class="right-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                          </div>
                          ';
                                              // echo '<option value="'.$member['course_code12'].'">'. $course_names[$member['course_code12'] ].'</option>'    ;
                                         } if ( $member['course_permission18'] ==3||$member['course_permission18'] ==0){
                                              $courseimg = Course::get_courses_img($member['course_code18']);
                                                                $coursecolor = Course::get_courses_color($member['course_code18']);

                                              
                                              echo'  <div class="swiper-slide d-flex d-md-block gap-5 gap-md-0 "> 
                                               <div
                                                class="left-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                                              <div
                                              style="background:transparent"
                            class="swiper-slide-card  d-flex flex-column  text-decoration-none position-relative"
                          >
                            <a
                              class="locked-card position-absolute w-100 h-100 top-0 start-0 d-flex p-4 justify-content-end"
                            >
                              <i class="fa-solid fa-lock fs-4 text-white"></i>
                            </a>
                             <img class="w-100 h-100" src="'.$wordfourty.'">
                          </div>
                                                     <div
                                                class="right-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                          </div>
                          ';
                                              // echo '<option value="'.$member['course_code12'].'">'. $course_names[$member['course_code12'] ].'</option>'    ;
                                         } if ( $member['course_permission12'] ==3||$member['course_permission12'] ==0){
                                             
                                            $courseimg = Course::get_courses_img($member['course_code12']);
                                                              $coursecolor = Course::get_courses_color($member['course_code12']);

                                              
                                              echo' 
                                              <div class="swiper-slide d-flex d-md-block gap-5 gap-md-0">
                                               <div
                                                class="left-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                                              <div
                                             style="background:transparent"
                            class="swiper-slide-card  d-flex flex-column  text-decoration-none position-relative"
                          >
                            <a
                              class="locked-card position-absolute w-100 h-100 top-0 start-0 d-flex p-4 justify-content-end"
                            >
                              <i class="fa-solid fa-lock fs-4 text-white"></i>
                            </a>
                           <img class="w-100 h-100" src="'.$wordfourtyone.'">
                          </div>
                                                     <div
                                                class="right-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                          </div>
                          ';
                                              // echo '<option value="'.$member['course_code13'].'">'. $course_names[$member['course_code13'] ].'</option>'    ;
                                         } if ( $member['course_permission13'] ==3||$member['course_permission13'] ==0){
                                                  $courseimg = Course::get_courses_img($member['course_code13']);
                                                                    $coursecolor = Course::get_courses_color($member['course_code13']);

                                              
                                        
                                              echo'   <div class="swiper-slide d-flex d-md-block gap-5 gap-md-0">
                                               <div
                                                class="left-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                                               
                                              <div
                                              style="background:transparent"
                            class="swiper-slide-card  d-flex flex-column  text-decoration-none position-relative"
                          >
                            <a
                              class="locked-card position-absolute w-100 h-100 top-0 start-0 d-flex p-4 justify-content-end"
                            >
                              <i class="fa-solid fa-lock fs-4 text-white"></i>
                            </a>
                            <img class="w-100 h-100" src="'.$wordfourtytwo.'">
                          </div>
                                                     <div
                                                class="right-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                          </div>
                          ';
                                              //echo '<option value="'.$member['course_code14'].'">'. $course_names[$member['course_code14'] ].'</option>'    ;
                                         } if ( $member['course_permission1'] ==3||$member['course_permission1'] ==0){
                                                  $courseimg = Course::get_courses_img($member['course_code1']);
                                                                    $coursecolor = Course::get_courses_color($member['course_code1']);

                                              
                                        
                                              echo'   <div class="swiper-slide d-flex d-md-block gap-5 gap-md-0">
                                                <div
                                                class="left-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                                              <div
                                               style="background:transparent"
                            class="swiper-slide-card  d-flex flex-column  text-decoration-none position-relative"
                          >
                            <a
                              class="locked-card position-absolute w-100 h-100 top-0 start-0 d-flex p-4 justify-content-end"
                            >
                              <i class="fa-solid fa-lock fs-4 text-white"></i>
                            </a>
                            <img class="w-100 h-100" src="'.$wordfourtytree.'">
                          </div>
                                                     <div
                                                class="right-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                          </div>
                          ';
                                              //echo '<option value="'.$member['course_code14'].'">'. $course_names[$member['course_code14'] ].'</option>'    ;
                                         } if ( $member['course_permission21'] ==3||$member['course_permission21'] ==0){
                                            $courseimg = Course::get_courses_img($member['course_code21']);
                                                              $coursecolor = Course::get_courses_color($member['course_code21']);

                                              
                                              echo'   
                                              <div class="swiper-slide d-flex d-md-block gap-5 gap-md-0">
                                               <div
                                                class="left-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                                              <div
                                              style="background:transparent"
                            class="swiper-slide-card  d-flex flex-column  text-decoration-none position-relative"
                          >
                            <a
                              class="locked-card position-absolute w-100 h-100 top-0 start-0 d-flex p-4 justify-content-end"
                            >
                              <i class="fa-solid fa-lock fs-4 text-white"></i>
                            </a>
                           <img class="w-100 h-100" src="'.$wordfourtyfour.'">
                          </div>
                                                     <div
                                                class="right-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                          </div>
                          ';
                                             
                                              //echo '<option value="'.$member['course_code16'].'">'.$course_names[$member['course_code16'] ].'</option>'    ;
                                         } if ( $member['course_permission5'] ==3||$member['course_permission5'] ==0){
                                                  $courseimg = Course::get_courses_img($member['course_code5']);
                                                                    $coursecolor = Course::get_courses_color($member['course_code5']);

                                              
                                                 
                                              echo'   
                                              <div class="swiper-slide d-flex d-md-block gap-5 gap-md-0">
                                               <div
                                                class="left-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                                              <div
                                               style="background:transparent"
                            class="swiper-slide-card  d-flex flex-column  text-decoration-none position-relative"
                          >
                            <a
                              class="locked-card position-absolute w-100 h-100 top-0 start-0 d-flex p-4 justify-content-end"
                             
                            >
                              <i class="fa-solid fa-lock fs-4 text-white"></i>
                            </a>
                            <img class="w-100 h-100" src="'.$wordfourtyfive.'">
                            
                           
                          </div>
                                                     <div
                                                class="right-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                          </div>
                          ';        //echo '<option value="'.$member['course_code17'].'">'. $course_names[$member['course_code17'] ].'</option>'    ;
                                         } if ( $member['course_permission20'] ==3||$member['course_permission20'] ==0){
                                             
                                                   $courseimg = Course::get_courses_img($member['course_code20']);
                                                                     $coursecolor = Course::get_courses_color($member['course_code20']);

                                              
                                              echo'   
                                              <div class="swiper-slide d-flex d-md-block gap-5 gap-md-0">
                                               <div
                                                class="left-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                                              <div
                                              style="background:transparent"
                            class="swiper-slide-card  d-flex flex-column  text-decoration-none position-relative"
                          >
                            <a
                              class="locked-card position-absolute w-100 h-100 top-0 start-0 d-flex p-4 justify-content-end"
                            >
                              <i class="fa-solid fa-lock fs-4 text-white"></i>
                            </a>
                            <img class="w-100 h-100" src="'.$wordfourtysix.'">
                          </div>
                                                     <div
                                                class="right-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                          </div>
                          ';
                                              // echo '<option value="'.$member['course_code18'].'">'. $course_names[$member['course_code18'] ].'</option>'    ;
                                         } if ( $member['course_permission11'] ==3||$member['course_permission11'] ==0){
                                                  $courseimg = Course::get_courses_img($member['course_code11']);
                                                                    $coursecolor = Course::get_courses_color($member['course_code11']);

                                              
                                      
                                              echo'  
                                              <div class="swiper-slide d-flex d-md-block gap-5 gap-md-0">
                                              
                                               <div
                                                class="left-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                                              <div
                                               style="background:transparent"
                            class="swiper-slide-card  d-flex flex-column  text-decoration-none position-relative"
                          >
                            <a
                              class="locked-card position-absolute w-100 h-100 top-0 start-0 d-flex p-4 justify-content-end"
                            >
                              <i class="fa-solid fa-lock fs-4 text-white"></i>
                            </a>
                            <img class="w-100 h-100" src="'.$wordfourtyseven.'">
                            
                          </div>
                                                     <div
                                                class="right-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                          </div>
                          ';
                                              //echo '<option value="'.$member['course_code19'].'">'. $course_names[$member['course_code19'] ].'</option>'    ;
                                         }if ( $member['course_permission4'] ==3||$member['course_permission4'] ==0){
                                                   
                                                                    $coursecolor = Course::get_courses_color($member['course_code4']);

                                              
                                      
                                              echo'  
                                              <div class="swiper-slide d-flex d-md-block gap-5 gap-md-0">
                                              
                                               <div
                                                class="left-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                                              <div
                                               style="background:transparent"
                            class="swiper-slide-card  d-flex flex-column  text-decoration-none position-relative"
                          >
                            <a
                              class="locked-card position-absolute w-100 h-100 top-0 start-0 d-flex p-4 justify-content-end"
                            >
                              <i class="fa-solid fa-lock fs-4 text-white"></i>
                            </a>
                          <img class="w-100 h-100" src="'.$wordfourtyeight.'">
                          </div>
                                                     <div
                                                class="right-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                          </div>
                          ';
                                              //echo '<option value="'.$member['course_code19'].'">'. $course_names[$member['course_code19'] ].'</option>'    ;
                                         }if ( $member['course_permission3'] ==3||$member['course_permission3'] ==0){
                                                  $courseimg = Course::get_courses_img($member['course_code3']);    
                                                  $coursecolor = Course::get_courses_color($member['course_code3']);

                                              
                                              echo'  <div class="swiper-slide d-flex d-md-block gap-5 gap-md-0">
                                               <div
                                                class="left-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                                              <div
                                               style="background:transparent"
                            class="swiper-slide-card  d-flex flex-column  text-decoration-none position-relative"
                          >
                            <a
                              class="locked-card position-absolute w-100 h-100 top-0 start-0 d-flex p-4 justify-content-end"
                            >
                              <i class="fa-solid fa-lock fs-4 text-white"></i>
                            </a>
                        
                           <img class="w-100 h-100" src="'.$wordfourtynine.'">
                          </div>
                                                     <div
                                                class="right-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                          </div>
                          ';
                                              //echo '<option value="'.$member['course_code21'].'">'. $course_names[$member['course_code21'] ].'</option>'    ;
                                         }if ( $member['course_permission22'] ==3||$member['course_permission22'] ==0){
                                                  $courseimg = Course::get_courses_img($member['course_code22']);    
                                                  $coursecolor = Course::get_courses_color($member['course_code22']);

                                              
                                              echo'  <div class="swiper-slide d-flex d-md-block gap-5 gap-md-0">
                                               <div
                                                class="left-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                                              <div
                                               style="background:transparent"
                            class="swiper-slide-card  d-flex flex-column  text-decoration-none position-relative"
                          >
                            <a
                              class="locked-card position-absolute w-100 h-100 top-0 start-0 d-flex p-4 justify-content-end"
                            >
                              <i class="fa-solid fa-lock fs-4 text-white"></i>
                            </a>
                        
                           <img class="w-100 h-100" src="'.$wordfivetyone.'">
                          </div>
                                                     <div
                                                class="right-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                          </div>
                          ';
                                         }if ( $member['course_permission23'] ==3||$member['course_permission23'] ==0){
                                                  $courseimg = Course::get_courses_img($member['course_code23']);    
                                                  $coursecolor = Course::get_courses_color($member['course_code23']);

                                              
                                              echo'  <div class="swiper-slide d-flex d-md-block gap-5 gap-md-0">
                                               <div
                                                class="left-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                                              <div
                                               style="background:transparent"
                            class="swiper-slide-card  d-flex flex-column  text-decoration-none position-relative"
                          >
                            <a
                              class="locked-card position-absolute w-100 h-100 top-0 start-0 d-flex p-4 justify-content-end"
                            >
                              <i class="fa-solid fa-lock fs-4 text-white"></i>
                            </a>
                        
                           <img class="w-100 h-100" src="'.$wordfivetytwo.'">
                          </div>
                                                     <div
                                                class="right-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                          </div>
                          ';
                                         
                                         }if ( $member['course_permission26'] ==3||$member['course_permission26'] ==0){
                                                  $courseimg = Course::get_courses_img($member['course_code26']);    
                                                  $coursecolor = Course::get_courses_color($member['course_code26']);

                                              
                                              echo'  <div class="swiper-slide d-flex d-md-block gap-5 gap-md-0">
                                               <div
                                                class="left-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                                              <div
                                               style="background:transparent"
                            class="swiper-slide-card  d-flex flex-column  text-decoration-none position-relative"
                          >
                            <a
                              class="locked-card position-absolute w-100 h-100 top-0 start-0 d-flex p-4 justify-content-end"
                            >
                              <i class="fa-solid fa-lock fs-4 text-white"></i>
                            </a>
                        
                           <img class="w-100 h-100" src="'.$wordfivetysix.'">
                          </div>
                                                     <div
                                                class="right-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                          </div>
                          ';
                                         
                                         }if ( $member['course_permission27'] ==3||$member['course_permission27'] ==0){
                                                  $courseimg = Course::get_courses_img($member['course_code27']);    
                                                  $coursecolor = Course::get_courses_color($member['course_code27']);

                                              
                                              echo'  <div class="swiper-slide d-flex d-md-block gap-5 gap-md-0">
                                               <div
                                                class="left-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                                              <div
                                               style="background:transparent"
                            class="swiper-slide-card  d-flex flex-column  text-decoration-none position-relative"
                          >
                            <a
                              class="locked-card position-absolute w-100 h-100 top-0 start-0 d-flex p-4 justify-content-end"
                            >
                              <i class="fa-solid fa-lock fs-4 text-white"></i>
                            </a>
                        
                           <img class="w-100 h-100" src="'.$wordfivetyseven.'">
                          </div>
                                                     <div
                                                class="right-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                          </div>
                          ';
                                         }
                                         if ( $member['course_permission28'] ==3||$member['course_permission28'] ==0){
                                                  $courseimg = Course::get_courses_img($member['course_code28']);    
                                                  $coursecolor = Course::get_courses_color($member['course_code28']);

                                              
                                              echo'  <div class="swiper-slide d-flex d-md-block gap-5 gap-md-0">
                                               <div
                                                class="left-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                                              <div
                                               style="background:transparent"
                            class="swiper-slide-card  d-flex flex-column  text-decoration-none position-relative"
                          >
                            <a
                              class="locked-card position-absolute w-100 h-100 top-0 start-0 d-flex p-4 justify-content-end"
                            >
                              <i class="fa-solid fa-lock fs-4 text-white"></i>
                            </a>
                        
                           <img class="w-100 h-100" src="'.$wordfivetyeight.'">
                          </div>
                                                     <div
                                                class="right-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                          </div>
                          ';
                                         }
                                         if ( $member['course_permission29'] ==3||$member['course_permission29'] ==0){
                                                  $courseimg = Course::get_courses_img($member['course_code29']);    
                                                  $coursecolor = Course::get_courses_color($member['course_code29']);

                                              
                                              echo'  <div class="swiper-slide d-flex d-md-block gap-5 gap-md-0">
                                               <div
                                                class="left-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                                              <div
                                               style="background:transparent"
                            class="swiper-slide-card  d-flex flex-column  text-decoration-none position-relative"
                          >
                            <a
                              class="locked-card position-absolute w-100 h-100 top-0 start-0 d-flex p-4 justify-content-end"
                            >
                              <i class="fa-solid fa-lock fs-4 text-white"></i>
                            </a>
                        
                           <img class="w-100 h-100" src="'.$wordfivetynine.'">
                          </div>
                                                     <div
                                                class="right-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                          </div>
                          ';
                                         }
                                         if ( $member['course_permission30'] ==3||$member['course_permission30'] ==0){
                                                  $courseimg = Course::get_courses_img($member['course_code30']);    
                                                  $coursecolor = Course::get_courses_color($member['course_code30']);

                                              
                                              echo'  <div class="swiper-slide d-flex d-md-block gap-5 gap-md-0">
                                               <div
                                                class="left-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                                              <div
                                               style="background:transparent"
                            class="swiper-slide-card  d-flex flex-column  text-decoration-none position-relative"
                          >
                            <a
                              class="locked-card position-absolute w-100 h-100 top-0 start-0 d-flex p-4 justify-content-end"
                            >
                              <i class="fa-solid fa-lock fs-4 text-white"></i>
                            </a>
                        
                           <img class="w-100 h-100" src="'.$wordsixty.'">
                          </div>
                                                     <div
                                                class="right-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                          </div>
                          ';
                                         }
                                         if ( $member['course_permission31'] ==3||$member['course_permission31'] ==0){
                                                  $courseimg = Course::get_courses_img($member['course_code31']);    
                                                  $coursecolor = Course::get_courses_color($member['course_code31']);

                                              
                                              echo'  <div class="swiper-slide d-flex d-md-block gap-5 gap-md-0">
                                               <div
                                                class="left-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                                              <div
                                               style="background:transparent"
                            class="swiper-slide-card  d-flex flex-column  text-decoration-none position-relative"
                          >
                            <a
                              class="locked-card position-absolute w-100 h-100 top-0 start-0 d-flex p-4 justify-content-end"
                            >
                              <i class="fa-solid fa-lock fs-4 text-white"></i>
                            </a>
                        
                           <img class="w-100 h-100" src="'.$wordsixtyone.'">
                          </div>
                                                     <div
                                                class="right-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                          </div>
                          ';
                                         }
                                         if ( $member['course_permission32'] ==3||$member['course_permission32'] ==0){
                                                  $courseimg = Course::get_courses_img($member['course_code32']);    
                                                  $coursecolor = Course::get_courses_color($member['course_code32']);

                                              
                                              echo'  <div class="swiper-slide d-flex d-md-block gap-5 gap-md-0">
                                               <div
                                                class="left-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-left-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                                              <div
                                               style="background:transparent"
                            class="swiper-slide-card  d-flex flex-column  text-decoration-none position-relative"
                          >
                            <a
                              class="locked-card position-absolute w-100 h-100 top-0 start-0 d-flex p-4 justify-content-end"
                            >
                              <i class="fa-solid fa-lock fs-4 text-white"></i>
                            </a>
                        
                           <img class="w-100 h-100" src="'.$wordsixtytwo.'">
                          </div>
                                                     <div
                                                class="right-arrow-container d-flex align-items-center d-block d-md-none"
                                              >
                                                <i class="fa-solid fa-arrow-right-long fs-4" style="color:#0f1e5a"></i>
                    
                                              </div>
                          </div>
                          ';
                                         }


                         
                         
                            endforeach;
                         
                                                 

                         ?>
                         
                         
                          
                          
                        
                      </div>

                      <!-- <div class="swiper-button-next d-block d-md-none"></div>
                    <div class="swiper-button-prev d-block d-md-none"></div> -->
                      <!-- <div class="swiper-scrollbar d-block d-md-none"></div>  -->
                      <div class="swiper-pagination d-none d-md-block"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- CHAT & ADS -->
            <div
              id="chat-ads-container"
              class="d-flex w-100 gap-4 gap-md-5  ps-md-1 position-relative"
            >
                
                                  <!-- ADS & OFFERS -->

                
                      <div class="d-flex flex-column p-4" id="ads">
                <h4 style="<?php echo  $rightToLeft ?> ;color:#0f1e5a;" class="fw-bold"><a href="help.php?id=<?php echo $user ?>&lang=<?php echo $lang?>" class="mtnsupport" ><?php echo 'MTN support'; //$wordeleven?></a></h4>
                <hr />
                <div id="offer-image-wrapper" class="overflow-hidden">
                    
                    
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/km3vgpkZOW4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                  <!--<img src="view/imgs/offer.png" class="w-100 h-100" alt="" />-->
                </div>
              </div>

          
              <!-- CHAT -->
              <div class="d-flex w-100 flex-column p-4" id="chat">
                <h4 style="<?php echo  $rightToLeft ?> color:#0f1e5a;" class="fw-bold"><?php echo $wordtherteen ?></h4>
                <hr />
                <!-- CHAT CONTAINER -->
                <div class="d-flex flex-column" id="chat-rows-container">
                  <!-- CHAT ROW -->
                  <div
                    class="d-flex <?php echo  $reverseRow ?> justify-content-between w-100 align-items-center flex-wrap pb-1"
                  >
                    <!-- CHAT ICON AND NAME -->
                    
                    
                    
                        <?php 
                foreach ($coursecode1 as $index => $member):
                    
                    
         $courseimg = Course::get_courses_img($member['coursecode']);
         $coursebgbannr = Course::get_courses_bg_bannar($member['coursecode']);
                                              
                                             $coursebgbannrs= trim($coursebgbannr,"../");
                                             $courseimgres= trim($courseimg,"../");

                    
                    echo'
                    
                    <div class=" '.$reverseRow.'   d-flex align-items-center gap-3">
                      <div id="chat-icon" class="overflow-hidden">
                        <img
                        src="'.$courseimgres.'"
                        class="w-100 h-100" style="object-fit:cover;" alt="" />
                      </div>
                      <span class="fw-bold px-1 px-md-0">'.$coursename.'</span>
                    </div>
                    
                    ';
                    
                    
                                
                endforeach;
                ?>
                    
                   
                    
                    
                    
                    
                    
                    
                    
                    
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

if($coursecode == '16'){
   echo ' <a href="https://t.me/+XkTjfJWibqMwNmM0" id="chat-btn">
                                 '.$wordfourteen.'
                            </a>' ; 
                            

                           
}else if ($coursecode == '6'){
    echo ' <a href="https://t.me/+ViOslIEfhjU1Yzc0" id="chat-btn">
                                                                  '.$wordfourteen.'

                            </a>' ; 
}elseif($coursecode == '8'){
  
     echo '<a href="https://t.me/+1nl9VWnGIgZjOTc0" id="chat-btn">
                                                                  '.$wordfourteen.'

                            </a>';
   


}elseif($coursecode == '21'){
    echo '<a href="https://t.me/+k6zwqmfANsllYWI8" id="chat-btn">
                                                                  '.$wordfourteen.'

                            </a>';
}
elseif($coursecode == '14'){
    echo '<a href="https://t.me/+VSHwvaMKiaUwYTY0" id="chat-btn">
                                                                  '.$wordfourteen.'

                            </a>';
}elseif($coursecode=='19'){
     echo '<a href="https://t.me/+xfK_yGDSrmg3YTk0" id="chat-btn">
                                 '.$wordfourteen.'
                            </a>';
    
}elseif($coursecode=='7'){
     echo '<a href="https://t.me/+Rb5oayD3xAIqXGO4" id="chat-btn">
                                 '.$wordfourteen.'
                            </a>';
        

}elseif($coursecode=='18'){
     echo '<a href="https://t.me/+U5NREaZxed514o0c" id="chat-btn">
                                 '.$wordfourteen.'
                            </a>';
    
}elseif($coursecode=='17'){
     echo '<a href="https://t.me/+rhInPlmHDuplZDQ0" id="chat-btn">
                                 '.$wordfourteen.'
                            </a>';
    
}elseif($coursecode=='20'){
     echo '<a href="https://t.me/+06THrDBCKQU2YWU8" id="chat-btn">
                                 '.$wordfourteen.'
                            </a>';
    
}elseif($coursecode=='19'){
     echo '<a href="https://t.me/+rbluqtMWIcU3ZmM0" id="chat-btn">
                                                                  '.$wordfourteen.'

                            </a>';
    
}elseif($coursecode=='12'){
     echo '<a href="https://t.me/+-CzgBRCOCv8zMmZk" id="chat-btn">
                                                                  '.$wordfourteen.'

                            </a>';
    
}elseif($coursecode=='13'){
     echo '<a href="https://t.me/+np6C_0-Y7Ps3ZWE0" id="chat-btn">
                                                                  '.$wordfourteen.'

                            </a>';
    
}elseif($coursecode=='2'){
     echo '<a href="https://t.me/+e4cjw32UnHcyM2E8" id="chat-btn">
                                                                  '.$wordfourteen.'

                            </a>';
    
}elseif($coursecode=='25'){
     echo '<a href="https://t.me/+ZH-OeCbA8R0zYmQ8" id="chat-btn">
                                                                  '.$wordfourteen.'

                            </a>';
    
}elseif($coursecode=='4'){
    echo '<a href="https://t.me/+8awNXGhrT8A3ZTY0" id="chat-btn">
                                 '.$wordfourteen.'
                            </a>';
    
}elseif($coursecode=='10'){
     echo '<a href="https://t.me/+SU_qHbKCh-diNmJk" id="chat-btn">
                                                                  '.$wordfourteen.'

                            </a>';
    
}elseif($coursecode=='9'){
   
     echo '<a href="https://t.me/+UUMO-o1zlXMyNjA0" id="chat-btn">
                                 Chat-men
                            </a>';

    
}elseif($coursecode=='1'){
   
     echo '<a href="https://t.me/+JR76IHnZihtlYmI0" id="chat-btn">
                                '.$wordfourteen.'
                            </a>';

    
}
elseif($coursecode=='11'){
   
     echo '<a href="https://t.me/+w6G6VAPrA6FlN2E0" id="chat-btn">
                                '.$wordfourteen.'
                            </a>';

    
}
elseif($coursecode=='15'){
   
    echo '<a href="https://t.me/+IiiyG-wNQ4xiMjBk" id="chat-btn">
                                '.$wordfourteen.'
                            </a>';
    
}
elseif($coursecode=='4'){
   
     echo '<a href="#" id="chat-btn">
                                 Not Available Now
                            </a>';
}
elseif($coursecode=='3'){
   
     echo '<a href="#" id="chat-btn">
                                 Not Available Now
                            </a>';
    
}elseif($coursecode=='23'){
   
     echo '<a href="https://t.me/+Oy3c56xpr-kyY2I8" id="chat-btn">
                                '.$wordfourteen.'
                            </a>';
    
}
elseif($coursecode=='22'){
   
     echo '<a href="https://t.me/+jzN3-RaH1BI1NTU0" id="chat-btn">
                                '.$wordfourteen.'
                            </a>';
    
}elseif($coursecode=='5'){
   
     echo '<a href="https://t.me/+I9E2cQHiVwE2ZmRk" id="chat-btn">
                                '.$wordfourteen.'
                            </a>';
    
}
elseif($coursecode=='24'){
   
     echo '<a href="https://t.me/+ejqT1Kp6ry1kOGFk" id="chat-btn">
                                '.$wordfourteen.'
                            </a>';
    
}
elseif($coursecode=='26'){
   
     echo '<a href="https://t.me/+qF7XjtwX9bA5ODlk" id="chat-btn">
                                '.$wordfourteen.'
                            </a>';
    
}
elseif($coursecode=='27'){
   
     echo '<a href="#" id="chat-btn">
                               Not Available Now
                            </a>';
    
}
elseif($coursecode=='29'){
   
     echo '<a href="https://t.me/+8F62mrSxy5NlZmU0" id="chat-btn">
                               '.$wordfourteen.'
                            </a>';
    
}
elseif($coursecode=='28'){
   
     echo '<a href="https://t.me/+_dEDSDF9KzgxMThk" id="chat-btn">
                               '.$wordfourteen.'
                            </a>';
    
}
elseif($coursecode=='30'){
   
     echo '<a href="https://t.me/+SKMly7MQshllZDBk" id="chat-btn">
                               '.$wordfourteen.'
                            </a>';
    
}
elseif($coursecode=='31'){
   
     echo '<a href="https://t.me/+xN-F6YXeL_A0Yzhk" id="chat-btn">
                               '.$wordfourteen.'
                            </a>';
    
}






?>

                  </div>
                  <!-- CHAT ROW -->
                  <?php
                    if($coursecode=='9'){
                        echo'
                <div
                    class="d-flex justify-content-between w-100 align-items-center flex-wrap pb-1"
                  >
                       ';
                          echo'
                    
                    <div class="d-flex align-items-center gap-3">
                      <div id="chat-icon" class="overflow-hidden">
                        <img
                        src="'.$courseimgres.'"
                        class="w-100 h-100" style="object-fit:cover;" alt="" />
                      </div>
                      <span class="fw-bold px-1 px-md-0">'.$coursename.'</span>
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
                   <a href="https://t.me/+fIILVq04BMFlNTA0" id="chat-btn">
                                 Chat-Woman
                            </a>
                </div>
                    
                                           
                    ';
}

                      
                    ?>

                  
                  
                  <!-- CHAT ICON AND NAME -->
                  <!--<div class="d-flex justify-content-between w-100 align-items-center flex-wrap pb-1">-->
                  <!--  <div class="d-flex align-items-center gap-3">-->
                  <!--    <div id="chat-icon" class="overflow-hidden">-->
                  <!--      <img src="view/imgs/offer.png" class="w-100 h-100" alt="" />-->
                  <!--    </div>-->
                  <!--    <span class="fw-bold px-1 px-md-0">Group Two</span>-->
                  <!--  </div>-->
                    <!-- MEMBERS -->
                  <!--  <div class="d-none d-md-flex align-items-center">-->
                  <!--    <div-->
                  <!--      id="member-wrapper"-->
                  <!--      class="overflow-hidden member-numbers-wrapper"-->
                  <!--    >-->
                  <!--      <img-->
                  <!--        src="view/imgs/non-profile.png"-->
                  <!--        alt=""-->
                  <!--        class="w-100 h-100"-->
                  <!--      />-->
                  <!--    </div>-->
                  <!--    <div-->
                  <!--      id="member-wrapper"-->
                  <!--      class="overflow-hidden member-numbers-wrapper"-->
                  <!--    >-->
                  <!--      <img-->
                  <!--        src="view/imgs/non-profile.png"-->
                  <!--        alt=""-->
                  <!--        class="w-100 h-100"-->
                  <!--      />-->
                  <!--    </div>-->
                  <!--    <div-->
                  <!--      id="member-numbers-wrapper"-->
                  <!--      class="member-numbers-wrapper d-flex justify-content-center align-items-center overflow-hidden"-->
                  <!--    >-->
                  <!--      <span-->
                  <!--        id="member-numbers"-->
                  <!--        style="color: #696969"-->
                  <!--        class="text-center fw-bold"-->
                  <!--        >+5</span-->
                  <!--      >-->
                  <!--    </div>-->
                  <!--  </div>-->
                    <!-- CHAT BUTTON -->
                  <!--  <button id="chat-btn">Chat</button>-->
                  <!--</div>-->
                </div>
              </div>
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