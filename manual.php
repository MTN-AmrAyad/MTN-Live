
<?php 

        require_once 'model/course.php';
        require_once 'view/header.php';
        $id = $_GET['id'];



  $coursecode1 = Course::get_courses_data($id);
                foreach ($coursecode1 as $index => $member):
                         $coursecalander = Course::get_courses_calender($member['coursecode']);
?>

<!-- MAIN -->
          <div class="w-100 d-flex  flex-wrap p-3 gap-5 p-md-4" id="main-container" style="height: 650px; overflow: scroll ;justify-content: center;
    align-items: center;">
              
              <?php
              if($member['coursecode']==19){
  
          
                    $courselink= array("https://managethenow.net/livesystem/ctrlpart1.pdf", "https://managethenow.net/livesystem/ctrlpart2.pdf", "https://managethenow.net/livesystem/ctrlpart3.pdf","https://managethenow.net/livesystem/ctrlpart4.pdf");
             
                    $materialName=array('جذع المخ', 'المخيخ', 'نخاع المخ','القشرة المخية');
                
                    
                             $courseimg = Course::get_courses_img($member['coursecode']);
                                             $courseimgres= trim($courseimg,"../");

                    
                    for($x=0;$x<=3;$x++){
                  
                        
                        echo '
                     <div
              
              class="manual-card overflow-hidden bg-white p-5 m-4 gap-4 d-flex flex-column justify-content-center align-items-center shadow-lg"
            >
              <div class="" style="height: 160px; width: 160px">
                  
                    
                   
                <img
                  src="'.$courseimgres.'"
                  class="w-100 h-100"
                  style="object-fit: contain"
                  alt=""
                />
              </div>
              
                      
              <h4 class="text-center fw-light" style="color: #0f1e5a">
                  '. $coursename.'
              </h4>
              <h5 class="text-center fw-light" style="color: #0f1e5a">
                  '.$materialName[$x].'
              </h5>
              <div class="pb-4">

                <!--href="previewpdf.php?id='.$id.'"-->
                  
    
                      
                           <a target="_blank"
                href="'.$courselink[$x].'"
                  type="button"
                  id="manual-btn"
                  class="btn px-3 py-2 border border-0 shadow-sm text-light text-capitalize mb-2"
                >
                  '.$wordtweentyfive.'
                </a>
                
                          <a
                href="'.$courselink[$x].'"
                  type="button"
                  id="manual-btn"
                  class="btn px-3 py-2 border border-0 shadow-sm text-light text-capitalize mb-2 "
                  download
                >
                  '.$wordtweentysix.'
                </a>
                
                
                
                          
                
               
              </div>
            </div>
              

                    ';
                    }
                    
                  
                } elseif($member['coursecode']==8){
  
          
                    $courselink= array("https://managethenow.net/livesystem/adam&evefinal.pdf",
                    "https://managethenow.net/livesystem/Adam_Eve_main level - Feb 2022.pdf",
                    "https://managethenow.net/mtn-live/view/matrial/AdamEvemainlevelFeb2024.pdf");
             
                    $materialName=array('adam & eve 2023','adam & eve 2022','adam & eve 2024');
                
                    
                             $courseimg = Course::get_courses_img($member['coursecode']);
                                             $courseimgres= trim($courseimg,"../");

                    
                    for($x=0;$x<=2;$x++){
                  
                        
                        echo '
                     <div
              
              class="manual-card overflow-hidden bg-white p-5 m-4 gap-4 d-flex flex-column justify-content-center align-items-center shadow-lg"
            >
              <div class="" style="height: 160px; width: 160px">
                  
                    
                   
                <img
                  src="'.$courseimgres.'"
                  class="w-100 h-100"
                  style="object-fit: contain"
                  alt=""
                />
              </div>
              
                      
              <h4 class="text-center fw-light" style="color: #0f1e5a">
                  '. $coursename.'
              </h4>
              <h5 class="text-center fw-light" style="color: #0f1e5a">
                  '.$materialName[$x].'
              </h5>
              <div class="pb-4">

                <!--href="previewpdf.php?id='.$id.'"-->
                  
    
                      
                           <a target="_blank"
                href="'.$courselink[$x].'"
                  type="button"
                  id="manual-btn"
                  class="btn px-3 py-2 border border-0 shadow-sm text-light text-capitalize mb-2"
                >
                  '.$wordtweentyfive.'
                </a>
                
                          <a
                href="'.$courselink[$x].'"
                  type="button"
                  id="manual-btn"
                  class="btn px-3 py-2 border border-0 shadow-sm text-light text-capitalize mb-2 "
                  download
                >
                  '.$wordtweentysix.'
                </a>
                
                
                
                          
                
               
              </div>
            </div>
              

                    ';
                    }
                    
                  
                }elseif($member['coursecode']==7){
  
          
                    $courselink= array("https://managethenow.net/livesystem/EBT2 - Live Material - March_2023.pdf",
                    "https://managethenow.net/livesystem/EBT2 - Videos Material - March_2023.pdf",
                    "https://managethenow.net/livesystem/EBT2.pdf",
                    "https://managethenow.net/livesystem/EBT2 1ST Part - Basic Level.pdf",
                    "https://managethenow.net/mtn-live/view/matrial/EBT2P2BASICLEVEL.pdf");
             
                    $materialName=array('EBT2 - Live Material - March_2023','EBT2 - Videos Material - March_2023 ','EBT2 2022','EBT 2 1ST Part - Basic Level 2024','EBT 2 P2 - BASIC LEVEL');
                
                    
                             $courseimg = Course::get_courses_img($member['coursecode']);
                                             $courseimgres= trim($courseimg,"../");

                    
                    for($x=0;$x<=4;$x++){
                  
                        
                        echo '
                     <div
              
              class="manual-card overflow-hidden bg-white p-5 m-4 gap-4 d-flex flex-column justify-content-center align-items-center shadow-lg"
            >
              <div class="" style="height: 160px; width: 160px">
                  
                    
                   
                <img
                  src="'.$courseimgres.'"
                  class="w-100 h-100"
                  style="object-fit: contain"
                  alt=""
                />
              </div>
              
                      
              <h4 class="text-center fw-light" style="color: #0f1e5a">
                  '. $coursename.'
              </h4>
              <h5 class="text-center fw-light" style="color: #0f1e5a">
                  '.$materialName[$x].'
              </h5>
              <div class="pb-4">

                <!--href="previewpdf.php?id='.$id.'"-->
                  
    
                      
                           <a target="_blank"
                href="'.$courselink[$x].'"
                  type="button"
                  id="manual-btn"
                  class="btn px-3 py-2 border border-0 shadow-sm text-light text-capitalize mb-2"
                >
                  '.$wordtweentyfive.'
                </a>
                
                          <a
                href="'.$courselink[$x].'"
                  type="button"
                  id="manual-btn"
                  class="btn px-3 py-2 border border-0 shadow-sm text-light text-capitalize mb-2 "
                  download
                >
                  '.$wordtweentysix.'
                </a>
                
                
                
                          
                
               
              </div>
            </div>
              

                    ';
                    }
                    
                  
                }elseif($member['coursecode']==6){
  
          
                    $courselink= array("https://managethenow.net/livesystem/EBT - Live Material - 2023.pdf", "https://managethenow.net/livesystem/EBT - Videos Material - 2023.pdf","https://managethenow.net/livesystem/Final EBT_.pdf",
                    "view/matrial/EBT1 2024.pdf","https://managethenow.net/mtn-live/view/matrial/EBT1.pdf");
             
                    $materialName=array('EBT - Live Material - 2023','EBT - Videos Material -2023 ','EBT 2022','EBT 2024','EBT 2024');
                
                    
                             $courseimg = Course::get_courses_img($member['coursecode']);
                                             $courseimgres= trim($courseimg,"../");

                    
                    for($x=0;$x<=4;$x++){
                  
                        
                        echo '
                     <div
              
              class="manual-card overflow-hidden bg-white p-5 m-4 gap-4 d-flex flex-column justify-content-center align-items-center shadow-lg"
            >
              <div class="" style="height: 160px; width: 160px">
                  
                    
                   
                <img
                  src="'.$courseimgres.'"
                  class="w-100 h-100"
                  style="object-fit: contain"
                  alt=""
                />
              </div>
              
                      
              <h4 class="text-center fw-light" style="color: #0f1e5a">
                  '. $coursename.'
              </h4>
              <h5 class="text-center fw-light" style="color: #0f1e5a">
                  '.$materialName[$x].'
              </h5>
              <div class="pb-4">

                <!--href="previewpdf.php?id='.$id.'"-->
                  
    
                      
                           <a target="_blank"
                href="'.$courselink[$x].'"
                  type="button"
                  id="manual-btn"
                  class="btn px-3 py-2 border border-0 shadow-sm text-light text-capitalize mb-2"
                >
                  '.$wordtweentyfive.'
                </a>
                
                          <a
                href="'.$courselink[$x].'"
                  type="button"
                  id="manual-btn"
                  class="btn px-3 py-2 border border-0 shadow-sm text-light text-capitalize mb-2 "
                  download
                >
                  '.$wordtweentysix.'
                </a>
                
                
                
                          
                
               
              </div>
            </div>
              

                    ';
                    }
                    
                  
                }elseif($member['coursecode']==18){
  
          
                    $courselink= array("https://managethenow.net/livesystem/CTRL Medicine (Psychological part) - October 2022.pdf", "https://managethenow.net/livesystem/CTRL Medicine (Psychological part) 2023.pdf");
             
                    $materialName=array('CTRL Medicine (Psychological part)  2022','CTRL Medicine (Psychological part) 2023');
                
                    
                             $courseimg = Course::get_courses_img($member['coursecode']);
                                             $courseimgres= trim($courseimg,"../");

                    
                    for($x=0;$x<=1;$x++){
                  
                        
                        echo '
                     <div
              
              class="manual-card overflow-hidden bg-white p-5 m-4 gap-4 d-flex flex-column justify-content-center align-items-center shadow-lg"
            >
              <div class="" style="height: 160px; width: 160px">
                  
                    
                   
                <img
                  src="'.$courseimgres.'"
                  class="w-100 h-100"
                  style="object-fit: contain"
                  alt=""
                />
              </div>
              
                      
              <h4 class="text-center fw-light" style="color: #0f1e5a">
                  '. $coursename.'
              </h4>
              <h5 class="text-center fw-light" style="color: #0f1e5a">
                  '.$materialName[$x].'
              </h5>
              <div class="pb-4">

                <!--href="previewpdf.php?id='.$id.'"-->
                  
    
                      
                           <a target="_blank"
                href="'.$courselink[$x].'"
                  type="button"
                  id="manual-btn"
                  class="btn px-3 py-2 border border-0 shadow-sm text-light text-capitalize mb-2"
                >
                  '.$wordtweentyfive.'
                </a>
                
                          <a
                href="'.$courselink[$x].'"
                  type="button"
                  id="manual-btn"
                  class="btn px-3 py-2 border border-0 shadow-sm text-light text-capitalize mb-2 "
                  download
                >
                  '.$wordtweentysix.'
                </a>
                
                
                
                          
                
               
              </div>
            </div>
              

                    ';
                    }
                    
                  
                }elseif($member['coursecode']==22){
  
          
                    $courselink= array("https://managethenow.net/livesystem/SELF HEALING GUIDE.pdf", "https://managethenow.net/livesystem/SELF HEALING GUIDE 2023.pdf");
             
                    $materialName=array('SELF HEALING GUIDE  2022','SELF HEALING GUIDE 2023 ');
                
                    
                             $courseimg = Course::get_courses_img($member['coursecode']);
                                             $courseimgres= trim($courseimg,"../");

                    
                    for($x=0;$x<=1;$x++){
                  
                        
                        echo '
                     <div
              
              class="manual-card overflow-hidden bg-white p-5 m-4 gap-4 d-flex flex-column justify-content-center align-items-center shadow-lg"
            >
              <div class="" style="height: 160px; width: 160px">
                  
                    
                   
                <img
                  src="'.$courseimgres.'"
                  class="w-100 h-100"
                  style="object-fit: contain"
                  alt=""
                />
              </div>
              
                      
              <h4 class="text-center fw-light" style="color: #0f1e5a">
                  '. $coursename.'
              </h4>
              <h5 class="text-center fw-light" style="color: #0f1e5a">
                  '.$materialName[$x].'
              </h5>
              <div class="pb-4">

                <!--href="previewpdf.php?id='.$id.'"-->
                  
    
                      
                           <a target="_blank"
                href="'.$courselink[$x].'"
                  type="button"
                  id="manual-btn"
                  class="btn px-3 py-2 border border-0 shadow-sm text-light text-capitalize mb-2"
                >
                  '.$wordtweentyfive.'
                </a>
                
                          <a
                href="'.$courselink[$x].'"
                  type="button"
                  id="manual-btn"
                  class="btn px-3 py-2 border border-0 shadow-sm text-light text-capitalize mb-2 "
                  download
                >
                  '.$wordtweentysix.'
                </a>
                
                
                
                          
                
               
              </div>
            </div>
              

                    ';
                    }
                    
                  
                }elseif($member['coursecode']==11){
  
          
                    $courselink= array("https://managethenow.net/livesystem/التعلق_عند_الذكر_والأنثى_نسخة_الحضور.pdf", "https://managethenow.net/livesystem/دليلك_لإستخراج_الشعور_المضطرب_للإناث_نسخة_الحضور.pdf", "https://managethenow.net/livesystem/دليلك_لإستخراج_الشعور_المضطرب_للذكور_نسخة_الحضور.pdf");
             
                    $materialName=array('التعلق_عند_الذكر_والأنثى_نسخة_الحضور'
                    ,'دليلك_لإستخراج_الشعور_المضطرب_للإناث_نسخة_الحضور'
                    ,'دليلك_لإستخراج_الشعور_المضطرب_للذكور_نسخة_الحضور ');
                
                    
                             $courseimg = Course::get_courses_img($member['coursecode']);
                                             $courseimgres= trim($courseimg,"../");

                    
                    for($x=0;$x<=2;$x++){
                  
                        
                        echo '
                     <div
              
              class="manual-card overflow-hidden bg-white p-5 m-4 gap-4 d-flex flex-column justify-content-center align-items-center shadow-lg"
            >
              <div class="" style="height: 160px; width: 160px">
                  
                    
                   
                <img
                  src="'.$courseimgres.'"
                  class="w-100 h-100"
                  style="object-fit: contain"
                  alt=""
                />
              </div>
              
                      
              <h4 class="text-center fw-light" style="color: #0f1e5a">
                  '. $coursename.'
              </h4>
              <h5 class="text-center fw-light" style="color: #0f1e5a">
                  '.$materialName[$x].'
              </h5>
              <div class="pb-4">

                <!--href="previewpdf.php?id='.$id.'"-->
                  
    
                      
                           <a target="_blank"
                href="'.$courselink[$x].'"
                  type="button"
                  id="manual-btn"
                  class="btn px-3 py-2 border border-0 shadow-sm text-light text-capitalize mb-2"
                >
                  '.$wordtweentyfive.'
                </a>
                
                          <a
                href="'.$courselink[$x].'"
                  type="button"
                  id="manual-btn"
                  class="btn px-3 py-2 border border-0 shadow-sm text-light text-capitalize mb-2 "
                  download
                >
                  '.$wordtweentysix.'
                </a>
                
                
                
                          
                
               
              </div>
            </div>
              

                    ';
                    }
                    
                  
                }elseif($member['coursecode']==12){
  
          
                    $courselink= array("https://managethenow.net/livesystem/LuscherCDT.pdf", "https://managethenow.net/livesystem/Lüscher_CDT_ Sep_2023.pdf");
             
                    $materialName=array('Lüscher CDT Sep 2022','Lüscher CDT Sep 2023 ');
                
                    
                             $courseimg = Course::get_courses_img($member['coursecode']);
                                             $courseimgres= trim($courseimg,"../");

                    
                    for($x=0;$x<=1;$x++){
                  
                        
                        echo '
                     <div
              
              class="manual-card overflow-hidden bg-white p-5 m-4 gap-4 d-flex flex-column justify-content-center align-items-center shadow-lg"
            >
              <div class="" style="height: 160px; width: 160px">
                  
                    
                   
                <img
                  src="'.$courseimgres.'"
                  class="w-100 h-100"
                  style="object-fit: contain"
                  alt=""
                />
              </div>
              
                      
              <h4 class="text-center fw-light" style="color: #0f1e5a">
                  '. $coursename.'
              </h4>
              <h5 class="text-center fw-light" style="color: #0f1e5a">
                  '.$materialName[$x].'
              </h5>
              <div class="pb-4">

                <!--href="previewpdf.php?id='.$id.'"-->
                  
    
                      
                           <a target="_blank"
                href="'.$courselink[$x].'"
                  type="button"
                  id="manual-btn"
                  class="btn px-3 py-2 border border-0 shadow-sm text-light text-capitalize mb-2"
                >
                  '.$wordtweentyfive.'
                </a>
                
                          <a
                href="'.$courselink[$x].'"
                  type="button"
                  id="manual-btn"
                  class="btn px-3 py-2 border border-0 shadow-sm text-light text-capitalize mb-2 "
                  download
                >
                  '.$wordtweentysix.'
                </a>
                
                
                
                          
                
               
              </div>
            </div>
              

                    ';
                    }
                    
                  
                }elseif($member['coursecode']==15){
  
          
                    $courselink= array("https://managethenow.net/livesystem/EBT-ADV-nov-2023.pdf","view/matrial/EBT-ADVANCE.pdf");
             
                    $materialName=array('EBT ADVANCE 2023','EBT ADVANCE 2023');
                
                    
                             $courseimg = Course::get_courses_img($member['coursecode']);
                                             $courseimgres= trim($courseimg,"../");

                    
                    for($x=0;$x<=1;$x++){
                  
                        
                        echo '
                     <div
              
              class="manual-card overflow-hidden bg-white p-5 m-4 gap-4 d-flex flex-column justify-content-center align-items-center shadow-lg"
            >
              <div class="" style="height: 160px; width: 160px">
                  
                    
                   
                <img
                  src="'.$courseimgres.'"
                  class="w-100 h-100"
                  style="object-fit: contain"
                  alt=""
                />
              </div>
              
                      
              <h4 class="text-center fw-light" style="color: #0f1e5a">
                  '. $coursename.'
              </h4>
              <h5 class="text-center fw-light" style="color: #0f1e5a">
                  '.$materialName[$x].'
              </h5>
              <div class="pb-4">

                <!--href="previewpdf.php?id='.$id.'"-->
                  
    
                      
                          <a target="_blank"
                href="'.$courselink[$x].'"
                  type="button"
                  id="manual-btn"
                  class="btn px-3 py-2 border border-0 shadow-sm text-light text-capitalize mb-2"
                >
                  '.$wordtweentyfive.'
                </a>
                
                          <a
                href="'.$courselink[$x].'"
                  type="button"
                  id="manual-btn"
                  class="btn px-3 py-2 border border-0 shadow-sm text-light text-capitalize mb-2 "
                  download
                >
                  '.$wordtweentysix.'
                </a>
                
                
                
                          
                
               
              </div>
            </div>
              

                    ';
                    }
                    
                  
                }elseif($member['coursecode']==13){
  
          
                    $courselink= array("https://managethenow.net/livesystem/CPC - November 2022.pdf","view/matrial/CPC 2023.pdf","view/matrial/cpc.pdf");
             
                    $materialName=array('November 2022','CPC 2023','CPC');
                
                    
                             $courseimg = Course::get_courses_img($member['coursecode']);
                                             $courseimgres= trim($courseimg,"../");

                    
                    for($x=0;$x<=2;$x++){
                  
                        
                        echo '
                     <div
              
              class="manual-card overflow-hidden bg-white p-5 m-4 gap-4 d-flex flex-column justify-content-center align-items-center shadow-lg"
            >
              <div class="" style="height: 160px; width: 160px">
                  
                    
                   
                <img
                  src="'.$courseimgres.'"
                  class="w-100 h-100"
                  style="object-fit: contain"
                  alt=""
                />
              </div>
              
                      
              <h4 class="text-center fw-light" style="color: #0f1e5a">
                  '. $coursename.'
              </h4>
              <h5 class="text-center fw-light" style="color: #0f1e5a">
                  '.$materialName[$x].'
              </h5>
              <div class="pb-4">

                <!--href="previewpdf.php?id='.$id.'"-->
                  
    
                      
                          <a target="_blank"
                href="'.$courselink[$x].'"
                  type="button"
                  id="manual-btn"
                  class="btn px-3 py-2 border border-0 shadow-sm text-light text-capitalize mb-2"
                >
                  '.$wordtweentyfive.'
                </a>
                
                          <a
                href="'.$courselink[$x].'"
                  type="button"
                  id="manual-btn"
                  class="btn px-3 py-2 border border-0 shadow-sm text-light text-capitalize mb-2 "
                  download
                >
                  '.$wordtweentysix.'
                </a>
                
                
                
                          
                
               
              </div>
            </div>
              

                    ';
                    }
                    
                  
                }elseif($member['coursecode']==10){
  
          
                    $courselink= array("https://managethenow.net/livesystem/(CTRL ORGANIC).pdf","view/matrial/CTRL Organic 2022.pdf" , "view/matrial/CTRL Medicine - Organic Part (July2024).pdf");
             
                    $materialName=array('CTRL ORGANIC','CTRL Organic 2022.pdf' , 'CTRL Medicine - Organic Part (July2024)');
                
                    
                             $courseimg = Course::get_courses_img($member['coursecode']);
                                             $courseimgres= trim($courseimg,"../");

                    
                    for($x=0;$x<=2;$x++){
                  
                        
                        echo '
                     <div
              
              class="manual-card overflow-hidden bg-white p-5 m-4 gap-4 d-flex flex-column justify-content-center align-items-center shadow-lg"
            >
              <div class="" style="height: 160px; width: 160px">
                  
                    
                   
                <img
                  src="'.$courseimgres.'"
                  class="w-100 h-100"
                  style="object-fit: contain"
                  alt=""
                />
              </div>
              
                      
              <h4 class="text-center fw-light" style="color: #0f1e5a">
                  '. $coursename.'
              </h4>
              <h5 class="text-center fw-light" style="color: #0f1e5a">
                  '.$materialName[$x].'
              </h5>
              <div class="pb-4">

                <!--href="previewpdf.php?id='.$id.'"-->
                  
    
                      
                          <a target="_blank"
                href="'.$courselink[$x].'"
                  type="button"
                  id="manual-btn"
                  class="btn px-3 py-2 border border-0 shadow-sm text-light text-capitalize mb-2"
                >
                  '.$wordtweentyfive.'
                </a>
                
                          <a
                href="'.$courselink[$x].'"
                  type="button"
                  id="manual-btn"
                  class="btn px-3 py-2 border border-0 shadow-sm text-light text-capitalize mb-2 "
                  download
                >
                  '.$wordtweentysix.'
                </a>
                
                
                
                          
                
               
              </div>
            </div>
              

                    ';
                    }
                    
                  
                }elseif($member['coursecode']==1){
  
          
                    $courselink= array("https://managethenow.net/livesystem/Ct Scan (Reading & Diagnosis) - Dec. 2022.pdf","view/matrial/cerebellum.pptx.pdf","view/matrial/BrainCtscan2023.pdf");
             
                    $materialName=array('Ct Scan (Reading & Diagnosis) - Dec. 2022','Ct Scan (Reading & Diagnosis) -  2024 ','برنامج قراءة الانماط الشعورية 2023');
                
                    
                             $courseimg = Course::get_courses_img($member['coursecode']);
                                             $courseimgres= trim($courseimg,"../");

                    
                    for($x=0;$x<=2;$x++){
                  
                        
                        echo '
                     <div
              
              class="manual-card overflow-hidden bg-white p-5 m-4 gap-4 d-flex flex-column justify-content-center align-items-center shadow-lg"
            >
              <div class="" style="height: 160px; width: 160px">
                  
                    
                   
                <img
                  src="'.$courseimgres.'"
                  class="w-100 h-100"
                  style="object-fit: contain"
                  alt=""
                />
              </div>
              
                      
              <h4 class="text-center fw-light" style="color: #0f1e5a">
                  '. $coursename.'
              </h4>
              <h5 class="text-center fw-light" style="color: #0f1e5a">
                  '.$materialName[$x].'
              </h5>
              <div class="pb-4">

                <!--href="previewpdf.php?id='.$id.'"-->
                  
    
                      
                          <a target="_blank"
                href="'.$courselink[$x].'"
                  type="button"
                  id="manual-btn"
                  class="btn px-3 py-2 border border-0 shadow-sm text-light text-capitalize mb-2"
                >
                  '.$wordtweentyfive.'
                </a>
                
                          <a
                href="'.$courselink[$x].'"
                  type="button"
                  id="manual-btn"
                  class="btn px-3 py-2 border border-0 shadow-sm text-light text-capitalize mb-2 "
                  download
                >
                  '.$wordtweentysix.'
                </a>
                
                
                
                          
                
               
              </div>
            </div>
              

                    ';
                    }
                    
                  
                }else{
                      
              ?>
              
              
              
      <div
           
              class="manual-card overflow-hidden bg-white p-5 gap-4 d-flex flex-column justify-content-center align-items-center shadow-lg"
            >
              <div class="" style="height: 160px; width: 160px">
                  
                    
                    <?php 
                    
                             $courseimg = Course::get_courses_img($member['coursecode']);
                                             $courseimgres= trim($courseimg,"../");

                    ?>
                <img
                  src="<?php echo $courseimgres;?>"
                  class="w-100 h-100"
                  style="object-fit: contain"
                  alt=""
                />
              </div>
              
                                 <?php 

                    
                   ?>
              <h4 class="text-center fw-light" style="color: #0f1e5a">
                  <?php echo $coursename; ?>
              </h4>
              <div class="pb-4">
                  
                  <?php
                // if($member['coursecode']==10){
  
                //       $courselink='https://managethenow.net/livesystem/(CTRL ORGANIC).pdf';
                //   }
                  if($member['coursecode']==2){
  
                      $courselink='https://managethenow.net/livesystem/commication.pdf';
                  }elseif($member['coursecode']==9){
  
                      $courselink='https://managethenow.net/livesystem/Adam & Eve (The Marriage) 2023.pdf';
                  }elseif($member['coursecode']==20){
  
                      $courselink='https://managethenow.net/livesystem/حياة الأنثى فى العمل.pdf';
                  }elseif($member['coursecode']==25){
  
                      $courselink='https://managethenow.net/livesystem/Tg_values_special_edition.pdf';
                  }elseif($member['coursecode']==26){
  
                      $courselink='https://managethenow.net/livesystem/الأنوثة-special-edition.pdf';
                  }else{
                      $courselink=' ';
                      
                  }
                  
                  
                  ?>
                  
                  

                <!--href="previewpdf.php?id='.$id.'"-->
                  <?php
                  if($courselink!=" "){
                      
                      
                      
                      
                           echo ' <a target="_blank"
                href="'.$courselink.'"
                  type="button"
                  id="manual-btn"
                  class="btn px-3 py-2 border border-0 shadow-sm text-light text-capitalize mb-2"
                >
                  '.$wordtweentyfive.'
                </a>';
                //dowenload Btn
                
                           echo ' <a
                href="'.$courselink.'"
                  type="button"
                  id="manual-btn"
                  class="btn px-3 py-2 border border-0 shadow-sm text-light text-capitalize mb-2 "
                  download
                >
                  '.$wordtweentysix.'
                </a>
                ';
                
                
                          
                      }else{
                               echo ' <button
                disabled
                  type="button"
                  id="manual-btn"
                  class="btn px-3 py-2 border border-0 shadow-sm text-light text-capitalize"
                >
                  no material yet !
                </button>';
                         
                          
                      }
               ?>
              </div>
            </div>
              
          </div>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script>
            $('#expand-button').click(function() {
	$('.profile-card').toggleClass('expand');
})
        </script>
<?php
 }
                          endforeach;

require_once 'view/footer.php';

?>
