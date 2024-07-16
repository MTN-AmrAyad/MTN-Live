<?php 
session_start();

$config = 'model/db_conn.php';
if(file_exists($config)){
    require_once $config;
}else{
    require_once 'db_conn.php';
}
            require_once 'model/profile.php';
            require_once 'model/lang.php';
            require_once 'model/course.php';

$id=$_GET["id"];
$lang=$_GET["lang"];
	    $user=$_COOKIE['user'];
	    $cours_id=$_COOKIE['coursecode'];
	    $user_status=$_COOKIE['user_status'];
	    
	    
    $arabicMobileMenu='width: 100% ; padding: 10px 0 10px 10px ; justify-content:center';

if($lang=='ar'){
    $style='font-size:12px';
         $coursename = Course::get_courses_name_if_ar($cours_id);
    
    

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
            
             // word 18 and word 19 is already exist in LIVE page
            
            $word20=Lang::get_lang_if_ar('Nationality');
            $wordtweenty= $word20[0]['ar'];
            
            $word21=Lang::get_lang_if_ar('Phone');
            $wordtweentyone= $word21[0]['ar'];
            
            $word22=Lang::get_lang_if_ar('E-mail');
            $wordtweentytwo= $word22[0]['ar'];
            
            $word23=Lang::get_lang_if_ar('Birthdate');
            $wordtweentythree= $word23[0]['ar'];
            
            $word24=Lang::get_lang_if_ar('Course');
            $wordtweentyfour= $word24[0]['ar'];
            
            $word25=Lang::get_lang_if_ar('open material');
            $wordtweentyfive= $word25[0]['ar'];
            
            $word26=Lang::get_lang_if_ar('download');
            $wordtweentysix= $word26[0]['ar'];
            
            $word27=Lang::get_lang_if_ar('Videos are not Ready yet!');
            $wordtweentyseven= $word27[0]['ar'];
            
            $word28=Lang::get_lang_if_ar('There is no certificate yet');
            $wordtweentyeight= $word28[0]['ar'];
            
            $word29=Lang::get_lang_if_ar('view/imgs/cards/english/therapy_gym-values.png');
            $wordtweentynine= $word29[0]['ar'];
            
            $word30=Lang::get_lang_if_ar('view/imgs/cards/english/estrogym.png');
            $wordthirty= $word30[0]['ar'];
            
            $word31=Lang::get_lang_if_ar('view/imgs/cards/english/ragel-el-kaseeb-2.png');
            $wordthirtyone= $word31[0]['ar'];
            
            $word32=Lang::get_lang_if_ar('view/imgs/cards/english/ebt.png');
            $wordthirtytwo= $word32[0]['ar'];
            
            $word33=Lang::get_lang_if_ar('view/imgs/cards/english/ebt-2.png');
            $wordthirtytree= $word33[0]['ar'];
            
            $word34=Lang::get_lang_if_ar('view/imgs/cards/english/EBT2adv.png');
            $wordthirtyfour= $word34[0]['ar'];
            
            $word35=Lang::get_lang_if_ar('view/imgs/cards/english/adamandeve.png');
            $wordthirtyfive= $word35[0]['ar']; 
            
            $word36=Lang::get_lang_if_ar('view/imgs/cards/english/communication-2.png');
            $wordthirtysix= $word36[0]['ar'];
            
            $word37=Lang::get_lang_if_ar('view/imgs/cards/english/marriage.png');
            $wordthirtyseven= $word37[0]['ar'];   
            
            $word38=Lang::get_lang_if_ar('view/imgs/cards/english/ctrl_anatomical.png');
            $wordthirtyeight= $word38[0]['ar'];
                          
            $word39=Lang::get_lang_if_ar('view/imgs/cards/english/ctrlorganic-part.png');
            $wordthirtynine= $word39[0]['ar'];
            
            $word40=Lang::get_lang_if_ar('view/imgs/cards/english/ctrl-psychologic-part.png');
            $wordfourty= $word40[0]['ar']; 
            
            $word41=Lang::get_lang_if_ar('view/imgs/cards/english/luscher.png');
            $wordfourtyone= $word41[0]['ar']; 
            
            $word42=Lang::get_lang_if_ar('view/imgs/cards/english/cpc-2.png');
            $wordfourtytwo= $word42[0]['ar'];
                        
            $word43=Lang::get_lang_if_ar('view/imgs/cards/english/ct-scan-2.png');
            $wordfourtytree= $word43[0]['ar'];
            
            $word44=Lang::get_lang_if_ar('view/imgs/cards/english/ct-scan-training-2.png');
            $wordfourtyfour= $word44[0]['ar'];
                         
            $word45=Lang::get_lang_if_ar('view/imgs/cards/english/Pregnancy.png');
            $wordfourtyfive= $word45[0]['ar'];
                                     
            $word46=Lang::get_lang_if_ar('view/imgs/cards/english/female_life_at_work.png');
            $wordfourtysix= $word46[0]['ar'];
                                                 
            $word47=Lang::get_lang_if_ar('view/imgs/cards/english/happiness-training-2.png');
            $wordfourtyseven= $word47[0]['ar'];   
            
            $word48=Lang::get_lang_if_ar('view/imgs/cards/english/femininity_1.png');
            $wordfourtyeight= $word48[0]['ar'];
                        
            $word49=Lang::get_lang_if_ar('view/imgs/cards/english/mens_talking.png');
            $wordfourtynine= $word49[0]['ar'];   
            
            $word50=Lang::get_lang_if_ar('MTN Support');
            $wordfivety= $word50[0]['ar'];
                          
            $word51=Lang::get_lang_if_ar('view/imgs/cards/english/SHG_En.png');
            $wordfivetyone= $word51[0]['ar'];  
            
            $word52=Lang::get_lang_if_ar('view/imgs/cards/english/therapy-gym-fitra.png');
            $wordfivetytwo= $word52[0]['ar'];
                          
            $word53=Lang::get_lang_if_ar('view/imgs/cards/english/estrogym-Nov.png');
            $wordfivetythree= $word53[0]['ar'];
            
            $word54=Lang::get_lang_if_ar('view/imgs/cards/english/therapy_gym-values.png');
            $wordfivetyfour= $word54[0]['ar']; 
            
            $word55=Lang::get_lang_if_ar('view/imgs/cards/english/VALUES-special.png');
            $wordfivetyfive= $word55[0]['ar'];
            
            $word56=Lang::get_lang_if_ar('view/imgs/cards/english/onosa_special_edition.png');
            $wordfivetysix= $word56[0]['ar'];
            
            $word57=Lang::get_lang_if_ar('view/imgs/cards/english/ragel-el-kaseeb-1.png');
            $wordfivetyseven= $word57[0]['ar'];
            
            $word58=Lang::get_lang_if_ar('view/imgs/cards/english/ragel-kaseeb-Agust.png');
            $wordfivetyeight= $word58[0]['ar'];
            
            $word59=Lang::get_lang_if_ar('view/imgs/cards/english/fitra-card-Julay.png');
            $wordfivetynine= $word59[0]['ar'];
            
            $word60=Lang::get_lang_if_ar('view/imgs/cards/english/ESTROGYM-4.png');
            $wordsixty= $word60[0]['ar'];
            
            $word61=Lang::get_lang_if_ar('view/imgs/cards/english/EBM.png');
            $wordsixtyone= $word61[0]['ar'];
            
            $word62=Lang::get_lang_if_ar('view/imgs/cards/english/SBG.png');
            $wordsixtytwo= $word62[0]['ar'];
                        
            // START WITH WORD 29
            
}elseif($lang=='en'){
        $style='font-size:none';
         $coursename = Course::get_courses_name($cours_id);

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
            
            // word 18 and word 19 is already exist in LIVE page
            
            $word20=Lang::get_lang_if_en('Nationality');
            $wordtweenty= $word20[0]['en'];
            
            $word21=Lang::get_lang_if_en('Phone');
            $wordtweentyone= $word21[0]['en'];
            
            $word22=Lang::get_lang_if_en('E-mail');
            $wordtweentytwo= $word22[0]['en'];
            
            $word23=Lang::get_lang_if_en('Birthdate');
            $wordtweentythree= $word23[0]['en'];
            
            $word24=Lang::get_lang_if_en('Course');
            $wordtweentyfour= $word24[0]['en'];
            
            $word25=Lang::get_lang_if_en('open material');
            $wordtweentyfive= $word25[0]['en'];
            
            $word26=Lang::get_lang_if_en('download');
            $wordtweentysix= $word26[0]['en'];
            
            $word27=Lang::get_lang_if_en('Videos are not Ready yet!');
            $wordtweentyseven= $word27[0]['en'];
            
            $word28=Lang::get_lang_if_en('There is no certificate yet');
            $wordtweentyeight= $word28[0]['en'];
            
            // START WITH WORD 29
           $word29=Lang::get_lang_if_ar('view/imgs/cards/english/therapy_gym-values.png');
            $wordtweentynine= $word29[0]['ar'];
            
            $word30=Lang::get_lang_if_en('view/imgs/cards/english/estrogym.png');
            $wordthirty= $word30[0]['en'];
            
            $word31=Lang::get_lang_if_ar('view/imgs/cards/english/ragel-el-kaseeb-2.png');
            $wordthirtyone= $word31[0]['ar'];
            
            $word32=Lang::get_lang_if_ar('view/imgs/cards/english/ebt.png');
            $wordthirtytwo= $word32[0]['ar'];
            
            $word33=Lang::get_lang_if_ar('view/imgs/cards/english/ebt-2.png');
            $wordthirtytree= $word33[0]['ar'];
            
            $word34=Lang::get_lang_if_ar('view/imgs/cards/english/EBT2adv.png');
            $wordthirtyfour= $word34[0]['ar'];
            
            $word35=Lang::get_lang_if_ar('view/imgs/cards/english/adamandeve.png');
            $wordthirtyfive= $word35[0]['ar']; 
            
            $word36=Lang::get_lang_if_ar('view/imgs/cards/english/communication-2.png');
            $wordthirtysix= $word36[0]['ar'];
            
            $word37=Lang::get_lang_if_ar('view/imgs/cards/english/marriage.png');
            $wordthirtyseven= $word37[0]['ar'];   
            
            $word38=Lang::get_lang_if_ar('view/imgs/cards/english/ctrl_anatomical.png');
            $wordthirtyeight= $word38[0]['ar'];
                          
            $word39=Lang::get_lang_if_ar('view/imgs/cards/english/ctrlorganic-part.png');
            $wordthirtynine= $word39[0]['ar'];
            
            $word40=Lang::get_lang_if_ar('view/imgs/cards/english/ctrl-psychologic-part.png');
            $wordfourty= $word40[0]['ar']; 
            
            $word41=Lang::get_lang_if_ar('view/imgs/cards/english/luscher.png');
            $wordfourtyone= $word41[0]['ar']; 
            
            $word42=Lang::get_lang_if_ar('view/imgs/cards/english/cpc-2.png');
            $wordfourtytwo= $word42[0]['ar'];
                        
            $word43=Lang::get_lang_if_ar('view/imgs/cards/english/ct-scan-2.png');
            $wordfourtytree= $word43[0]['ar'];
            
            $word44=Lang::get_lang_if_ar('view/imgs/cards/english/ct-scan-training-2.png');
            $wordfourtyfour= $word44[0]['ar'];
                         
            $word45=Lang::get_lang_if_ar('view/imgs/cards/english/Pregnancy.png');
            $wordfourtyfive= $word45[0]['ar'];
                                     
            $word46=Lang::get_lang_if_ar('view/imgs/cards/english/female_life_at_work.png');
            $wordfourtysix= $word46[0]['ar'];
                                                 
            $word47=Lang::get_lang_if_ar('view/imgs/cards/english/happiness-training-2.png');
            $wordfourtyseven= $word47[0]['ar'];   
            
            $word48=Lang::get_lang_if_ar('view/imgs/cards/english/femininity_1.png');
            $wordfourtyeight= $word48[0]['ar'];
                        
            $word49=Lang::get_lang_if_ar('view/imgs/cards/english/mens_talking.png');
            $wordfourtynine= $word49[0]['ar'];
            
            
             $word50=Lang::get_lang_if_en('MTN Support');
            $wordfivety= $word50[0]['en'];
            
              $word51=Lang::get_lang_if_en('view/imgs/cards/english/SHG_En.png');
            $wordfivetyone= $word51[0]['en'];      
            
            $word52=Lang::get_lang_if_en('view/imgs/cards/english/therapy-gym-fitra.png');
            $wordfivetytwo= $word52[0]['en'];
            
              $word53=Lang::get_lang_if_en('view/imgs/cards/english/estrogym-Nov.png');
            $wordfivetythree= $word53[0]['en'];
            
            $word54=Lang::get_lang_if_en('view/imgs/cards/english/therapy_gym-values.png');
            $wordfivetyfour= $word54[0]['en'];
            
             $word55=Lang::get_lang_if_en('view/imgs/cards/english/VALUES-special.png');
            $wordfivetyfive= $word55[0]['en'];
            
            $word56=Lang::get_lang_if_en('view/imgs/cards/english/onosa_special_edition.png');
            $wordfivetysix= $word56[0]['en'];
            
                $word57=Lang::get_lang_if_en('view/imgs/cards/english/ragel-el-kaseeb-1.png');
            $wordfivetyseven= $word57[0]['en'];
            
                $word58=Lang::get_lang_if_en('view/imgs/cards/english/ragel-kaseeb-Agust.png');
            $wordfivetyeight= $word58[0]['en'];
            
                $word59=Lang::get_lang_if_en('view/imgs/cards/english/fitra-card-Julay.png');
            $wordfivetynine= $word59[0]['en'];
            
                $word60=Lang::get_lang_if_en('view/imgs/cards/english/ESTROGYM-4.png');
            $wordsixty= $word60[0]['en'];
            
            
            $word61=Lang::get_lang_if_en('view/imgs/cards/english/EBM.png');
            $wordsixtyone= $word61[0]['en'];
                          
                          
            $word62=Lang::get_lang_if_en('view/imgs/cards/english/SBG.png');
            $wordsixtytwo= $word62[0]['en'];
                        
            
}else{
             $coursename = Course::get_courses_name_if_ar($cours_id);

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
            
            // word 18 and word 19 is already exist in LIVE page
            
            $word20=Lang::get_lang_if_ar('Nationality');
            $wordtweenty= $word20[0]['ar'];
            
            $word21=Lang::get_lang_if_ar('Phone');
            $wordtweentyone= $word21[0]['ar'];
            
            $word22=Lang::get_lang_if_ar('E-mail');
            $wordtweentytwo= $word22[0]['ar'];
            
            $word23=Lang::get_lang_if_ar('Birthdate');
            $wordtweentythree= $word23[0]['ar'];
            
            $word24=Lang::get_lang_if_ar('Course');
            $wordtweentyfour= $word24[0]['ar'];
            
            $word25=Lang::get_lang_if_ar('open material');
            $wordtweentyfive= $word25[0]['ar'];
            
            $word26=Lang::get_lang_if_ar('download');
            $wordtweentysix= $word26[0]['ar'];
            
            $word27=Lang::get_lang_if_ar('Videos are not Ready yet!');
            $wordtweentyseven= $word27[0]['ar'];
            
            $word28=Lang::get_lang_if_ar('There is no certificate yet');
            $wordtweentyeight= $word28[0]['ar'];
            
            // START WITH WORD 29
$word29=Lang::get_lang_if_ar('view/imgs/cards/english/therapy_gym-values.png');
            $wordtweentynine= $word29[0]['ar'];
            
            $word30=Lang::get_lang_if_ar('view/imgs/cards/english/estrogym.png');
            $wordthirty= $word30[0]['ar'];
            
            $word31=Lang::get_lang_if_ar('view/imgs/cards/english/ragel-el-kaseeb-2.png');
            $wordthirtyone= $word31[0]['ar'];
            
            $word32=Lang::get_lang_if_ar('view/imgs/cards/english/ebt.png');
            $wordthirtytwo= $word32[0]['ar'];
            
            $word33=Lang::get_lang_if_ar('view/imgs/cards/english/ebt-2.png');
            $wordthirtytree= $word33[0]['ar'];
            
            $word34=Lang::get_lang_if_ar('view/imgs/cards/english/EBT2adv.png');
            $wordthirtyfour= $word34[0]['ar'];
            
            $word35=Lang::get_lang_if_ar('view/imgs/cards/english/adamandeve.png');
            $wordthirtyfive= $word35[0]['ar']; 
            
            $word36=Lang::get_lang_if_ar('view/imgs/cards/english/communication-2.png');
            $wordthirtysix= $word36[0]['ar'];
            
            $word37=Lang::get_lang_if_ar('view/imgs/cards/english/marriage.png');
            $wordthirtyseven= $word37[0]['ar'];   
            
            $word38=Lang::get_lang_if_ar('view/imgs/cards/english/ctrl_anatomical.png');
            $wordthirtyeight= $word38[0]['ar'];
                          
            $word39=Lang::get_lang_if_ar('view/imgs/cards/english/ctrlorganic-part.png');
            $wordthirtynine= $word39[0]['ar'];
            
            $word40=Lang::get_lang_if_ar('view/imgs/cards/english/ctrl-psychologic-part.png');
            $wordfourty= $word40[0]['ar']; 
            
            $word41=Lang::get_lang_if_ar('view/imgs/cards/english/luscher.png');
            $wordfourtyone= $word41[0]['ar']; 
            
            $word42=Lang::get_lang_if_ar('view/imgs/cards/english/cpc-2.png');
            $wordfourtytwo= $word42[0]['ar'];
                        
            $word43=Lang::get_lang_if_ar('view/imgs/cards/english/ct-scan-2.png');
            $wordfourtytree= $word43[0]['ar'];
            
            $word44=Lang::get_lang_if_ar('view/imgs/cards/english/ct-scan-training-2.png');
            $wordfourtyfour= $word44[0]['ar'];
                         
            $word45=Lang::get_lang_if_ar('view/imgs/cards/english/Pregnancy.png');
            $wordfourtyfive= $word45[0]['ar'];
                                     
            $word46=Lang::get_lang_if_ar('view/imgs/cards/english/female_life_at_work.png');
            $wordfourtysix= $word46[0]['ar'];
                                                 
            $word47=Lang::get_lang_if_ar('view/imgs/cards/english/happiness-training-2.png');
            $wordfourtyseven= $word47[0]['ar'];   
            
            $word48=Lang::get_lang_if_ar('view/imgs/cards/english/femininity_1.png');
            $wordfourtyeight= $word48[0]['ar'];
                        
            $word49=Lang::get_lang_if_ar('view/imgs/cards/english/mens_talking.png');
            $wordfourtynine= $word49[0]['ar'];
            
             $word50=Lang::get_lang_if_ar('MTN Support');
            $wordfivety= $word50[0]['ar'];
            
              $word51=Lang::get_lang_if_ar('view/imgs/cards/english/SHG_En.png');
            $wordfivetyone= $word51[0]['ar'];
            
               $word52=Lang::get_lang_if_ar('view/imgs/cards/english/therapy-gym-fitra.png');
            $wordfivetytwo= $word52[0]['ar'];
            
             $word53=Lang::get_lang_if_ar('view/imgs/cards/english/estrogym-Nov.png');
            $wordfivetythree= $word53[0]['ar'];
            
            $word54=Lang::get_lang_if_ar('view/imgs/cards/english/therapy_gym-values.png');
            $wordfivetyfour= $word54[0]['ar'];
            
             $word55=Lang::get_lang_if_ar('view/imgs/cards/english/VALUES-special.png');
            $wordfivetyfive= $word55[0]['ar'];
            
            $word56=Lang::get_lang_if_ar('view/imgs/cards/english/onosa_special_edition.png');
            $wordfivetysix= $word56[0]['ar'];
            
            $word57=Lang::get_lang_if_ar('view/imgs/cards/english/ragel-el-kaseeb-1.png');
            $wordfivetyseven= $word57[0]['ar'];
            
            $word58=Lang::get_lang_if_ar('view/imgs/cards/english/ragel-kaseeb-Agust.png');
            $wordfivetyeight= $word58[0]['ar'];
            
            $word59=Lang::get_lang_if_ar('view/imgs/cards/english/fitra-card-Julay.png');
            $wordfivetynine= $word59[0]['ar'];
            
            $word60=Lang::get_lang_if_ar('view/imgs/cards/english/ESTROGYM-4.png');
            $wordsixty= $word60[0]['ar'];
                       
                              
            $word61=Lang::get_lang_if_ar('view/imgs/cards/english/EBM.png');
            $wordsixtyone= $word61[0]['ar'];
            
                $word62=Lang::get_lang_if_ar('view/imgs/cards/english/SBG.png');
            $wordsixtytwo= $word62[0]['ar'];
                        
}
                
            
	            
	  
	            


global $dbh;
	$sql = $dbh->prepare("SELECT * FROM users WHERE qrcode='$id'");

        $sql->execute();
        $fetch2 = $sql->fetch(PDO::FETCH_ASSOC);

           
	//($user == 'a22059')|| ( $user == 'm13988') || ( $user == 'm21862')|| ( $user == 'm21859') || ( $userl == 'm999') || ( $user == 'm29549')||($user=='a15226'))
	if((($fetch2['loginset'] == 1 )|| $user_status==1) &&($id==$user)){
	    

		    $user=$_COOKIE['user'];


	      
      $coursecode = $fetch2['coursecode'];
          global $dbh;
          $sqll = $dbh->prepare("SELECT * FROM courseData WHERE id='$coursecode'");
		  $sqll->execute();
          $fetch = $sqll->fetch(PDO::FETCH_ASSOC);
	   

		  	if (is_array($fetch) ) {
		  	    
		
			$course_name = $fetch['course_name'];
			
		  	}
		  	
		  	    
	
            
$user_data = Profile::get_user_data($id);


 
	
     
 ?>








<!DOCTYPE html>
<html lang="en">
  <head>
      
      
      
    
   
  
      
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <!--FAV ICON IN TAB-->
    <link rel="apple-touch-icon" sizes="180x180" href="view/imgs/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="view/imgs/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="view/imgs/favicon/favicon-16x16.png">
    <link rel="manifest" href="view/imgs/favicon/site.webmanifest">
    <link rel="mask-icon" href="view/imgs/favicon/safari-pinned-tab.svg" color="#121680">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    
    
    <!-- stylesheet -->
    <link rel="stylesheet" type="text/css" href="view/css/style.css?<?php echo time(); ?>" />
    <link rel="stylesheet" type="text/css" href="view/css/calendar.css?<?php echo time(); ?>" />
    <link rel="stylesheet" type="text/css" href="view/css/live.css?<?php echo time(); ?>" />
    <link rel="stylesheet" type="text/css" href="view/css/manual.css?<?php echo time(); ?>" />
    

   
     
      <?php  
      
    $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
    $curPageName2 = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/zoom/")+1);  
    
    // Remove clips(1)
    if($curPageName=="clips.php" || $curPageName=="clipsForEbt1.php" || $curPageName=="full_version.php"){
        echo' <link rel="stylesheet" type="text/css" href="view/css/videos.css?'.time().'" />';
        
        
    }elseif($curPageName=="edit_profile.php"  ){
        echo '<link rel="stylesheet" type="text/css" href="view/css/edit-profile.css?'.time().'" />';
        
    }elseif($curPageName=="stream.php"  ){
        echo '<link rel="stylesheet" type="text/css" href="view/css/cloudflareLive.css?'.time().'" />';
        
    }elseif($curPageName=="profile.php" || $curPageName=="forget_pass.php" ){
        echo '<link rel="stylesheet" type="text/css" href="view/css/profile.css?'.time().'" />';
        echo '<style>
        
        .profile-card .pic {
  background-image: url("'.$user_data['image'].'"), linear-gradient(135deg, rgba(26, 166, 183, 0.1), rgba(255, 65, 77, 0.2));
  background-position: center;
  background-size: cover;
  background-blend-mode: overlay;
  position: absolute;
  left: 50%;
  width: 8rem;
  height: 8rem;
  border-radius: 50%;
  transform: translate(-50%, -50%);
  margin-top: -2rem;
  z-index: 2;
  box-shadow: 0 1rem 1.5rem -1rem rgba(0, 45, 64, 0.2), 0 0 0.5rem 0 rgba(0, 45, 64, 0.2), 0 0rem 4rem 0 rgba(0, 0, 0, 0.2);
}
        
        </style>';

    }elseif($curPageName2=="index.php"){
        
       echo'  <link type="text/css" rel="stylesheet" href="https://source.zoom.us/2.9.7/css/bootstrap.css" />
    <link type="text/css" rel="stylesheet" href="https://source.zoom.us/2.9.7/css/react-select.css" />
    
    ';
    }elseif($curPageName=="certificate.php" ){
        echo '<link rel="stylesheet" type="text/css" href="view/css/certificate.css?'.time().'" />';

    }
    ?>


    <!-- Bootstrap CSS -->
    
    <!--<link-->
    <!--  href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"-->
    <!--  rel="stylesheet"-->
    <!--  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"-->
    <!--  crossorigin="anonymous"-->
    <!--/>-->
    
    <!--<link-->
    <!--  href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"-->
    <!--  rel="stylesheet"-->
    <!--/>-->
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>-->
    
    
    <link rel="stylesheet" href="view/bootstrap/css/bootstrap.css" />
    <script src="view/bootstrap/js/bootstrap.js"></script>
    
    
    
    
    
    
    <!-- ICONS -->
    <!--<link-->
    <!--  href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"-->
    <!--  rel="stylesheet"-->
    <!--/>-->
    
      <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    
    <!-- SWIPER CDN -->
    <!--<link-->
    <!--  rel="stylesheet"-->
    <!--  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"-->
    <!--/>-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<!-- JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  
    
    
    <style>
    
    
    .arrow-container{
        /*width:15%;*/
        cursor:pointer;
    }
    
    
    span.swiper-pagination-bullet.swiper-pagination-bullet-active {
  background-color: #0f1e5a;
  opacity: 1;
}
    #overlay-loading {
  position: fixed;
  display: flex;
  justify-content:center;
  align-items:center;   
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #fff;
  z-index: 2;
  cursor: pointer;
}

#home-sidebar
{
    width: 80px;
}
        
    @media only screen and (max-width: 720px) {
    #courses {
    flex-wrap: wrap;
    }
   
    #your-courses-arabic {
    margin-right:0;
    }
     #your-course {
      width: 100%;
     }
     #dropdown-courses-menu {
      right: -485%;
     }
    #ads {
      width: 100%;
     }
     #chat-ads-container {
       flex-wrap: wrap;
      }
     #current-course {
       /*height: 85px;*/
    }
     #current-course-logo {
    /*width: 60px;*/
    /*height: 130px;*/
  }
  .current-course-name {
    font-size: 5vw;
  }
   }

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
       width:50px;
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

    <title>MTN Live</title>
                        <script src="https://cdn.dashjs.org/latest/dash.all.min.js"></script> 

  </head>

  
  <body 
  style="background:#ededed;"
  >
      
     <?php 
     
         $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  

     if($curPageName=="index.php"){
         
        //  echo '
         
        //  <div id="overlay-loading">
        //     <img src="view/imgs/preload2.gif" style="width:635px;height:400px object-fit:cover;"/>
        //  </div>
         
        //  ';
        
    //   echo' <div class="top-0 postion-absolute w-100 vh-100 end-0">
                
    //              </div>


    // ';
    }?>
    <div 
        id="background"
        class="px-3 py-3 mx-auto w-100 d-flex justify-content-center align-items-center py-lg-0"
     
    >
        <!--<div style="position:absolute; bottom:0px;left:0px">test</div>-->
    
        <!--class="p-4 mx-auto bg-white w-100 d-flex justify-content-center align-items-center "-->
      <div class="p-0 m-0 row d-flex h-100 w-100">
        <!-- SIDEBAR -->
     
        <div
          id="sidebar"
          
          class="container gap-3 p-2 mx-auto border col-lg-2 d-none d-lg-flex flex-column p-lg-3 "
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
                src="<?php echo $user_data['image']?>"
                alt=""
              />
            </div>
            
           
            <span class="mt-1 text-center text-white text-capitalize" id="username"
              ><?php echo $user_data['name']?></span
            >
                  <div
              class="mt-2 d-flex justify-content-center align-items-center flex-lg-nowrap flex-lg-wrap"
            >
              <a
              style="<?php echo $profileStyle ?>"
                class="gap-1 px-2 user-profile-cert d-flex justify-content-center align-items-center"
                href="profile.php?id=<?php echo $user?>&lang=<?php echo $lang?>"
              >
               
                <i class="text-white fa-solid fa-user"
                  style="font-size: 14px"></i>

                <span class="text-white" style="<?echo $style?>" ><?php echo $wordone  ?></span>
              </a>
              <a
                class="gap-1 px-2 user-profile-cert d-flex justify-content-center align-items-center"
                  href="certificate.php?id=<?php echo $user?>&lang=<?php echo $lang?>"
              >
              
                <i class="text-white fa-solid fa-certificate"
                  style="font-size: 14px"></i>

                <span class="text-white" style="<?echo $style?>">
                  <?php echo $wordtwo;?> 
                </span>
              </a>
              
            </div>
                      </div>
           <!--<div class="hr-theme-slash-2 me-4">-->
            <!--<div class="text-white hr-line"></div>-->
            <!--<div class="hr-icon">Menu</div>-->
            <!--<div class="hr-line"></div>-->
          <!--</div>-->

          <div
            class="flex-wrap gap-4 d-flex flex-column justify-content-center align-items-center w-100 "
            style="height:65%;border-radius:30px 0 0 30px;background:#dee2e63b"
          >
            <a
              href="https://managethenow.net/mtn-live/index.php?id=<?php echo $user?>&lang=<?php echo $lang ?>"
              class="text-white d-flex align-items-center justify-content-between text-decoration-none w-50"
            >
              <div class="gap-2 d-flex align-items-center">
                <i class="fa-solid fa-house"></i>

                <span id="home-sidebar" style="<?echo $style?>;"><?php echo $wordthre;?> </span>
              </div>
            </a>
            
            
            <?php 
      
            
            
            
            
 
 if($coursecode=="25"){
     
 }else if($coursecode=="19"){
           
            echo'
            
            <a
              href="live/index.php?id='.$user.'&lang='.$lang.'"
              class="text-white d-flex align-items-center justify-content-between text-decoration-none w-50"
            >
              <div class="gap-2 d-flex align-items-center">
                <i class="fa-solid fa-tower-broadcast"></i>
                <span style="'.$style.'">'.$wordfour.'</span>
              </div>
            </a>
        
            ';
 }else{
            echo'
            
            <a
              href="live/index.php?id='.$user.'&lang='.$lang.'"
              class="text-white d-flex align-items-center justify-content-between text-decoration-none w-50"
            >
              <div class="gap-2 d-flex align-items-center">
                <i class="fa-solid fa-tower-broadcast"></i>
                <span style="'.$style.'">'.$wordfour.'</span>
              </div>
            </a>
        
            ';
        }
        
        
        
        
         
        
        
        
                 // FETRA COURSE
            if($coursecode == "23"){
                
//               echo'
            
//             <a
//               href="https://www.youtube.com/watch?v=yk9PQFkqPKE&ab_channel=ManageTheNow"
//               class="text-white d-flex align-items-center justify-content-between text-decoration-none w-50"
//             >
//               <div class="gap-2 d-flex align-items-center">
// <i class="fa-brands fa-youtube"></i>
// <span style="'.$style.'">Youtube Live</span>
//               </div>
//             </a>

        
//             ';
          
            }
            
            
            
            // FETRA June2024 WEB
                 if($coursecode == "29"){
                
              echo'
            
            <a
              href="https://youtube.com/live/K7B6ETRFJ_w?feature=share"
              class="text-white d-flex align-items-center justify-content-between text-decoration-none w-50"
            >
              <div class="gap-2 d-flex align-items-center">
<i class="fa-brands fa-youtube"></i>
<span style="'.$style.'">Youtube Live</span>
              </div>
            </a>

        
            ';
          
            }
            
            // EBT 2 Main LVL
            elseif($coursecode == "7"){
                
//               echo'
            
//              <a
//               href="https://www.youtube.com/watch?v=4MxxLfjMkiE"
//               class="text-white d-flex align-items-center justify-content-between text-decoration-none w-50"
//              >
//               <div class="gap-2 d-flex align-items-center">
//  <i class="fa-brands fa-youtube"></i>
//  <span style="'.$style.'">Youtube Live part 03</span>
//                  </div>
//              </a>
  

        
//              ';
          
}      

//CTRL Orgnic part Web
elseif($coursecode == "10"){
                
              echo'
            
             <a
              href="https://youtube.com/live/0W8J6JyLcWw?feature=share"
              class="text-white d-flex align-items-center justify-content-between text-decoration-none w-50"
             >
              <div class="gap-2 d-flex align-items-center">
 <i class="fa-brands fa-youtube"></i>
 <span style="'.$style.'">Youtube Live Day3 Part 01</span>
                 </div>
            </a>
  <a
              href="https://youtube.com/live/h5q2lWtSSEY?feature=share"
              class="text-white d-flex align-items-center justify-content-between text-decoration-none w-50"
             >
              <div class="gap-2 d-flex align-items-center">
 <i class="fa-brands fa-youtube"></i>
 <span style="'.$style.'">Youtube Live Day3 Part 02</span>
                 </div>
            </a>

             ';
          
}     
   


elseif($coursecode == "2"){
                
//               echo'
            
//              <a
//               href="https://youtube.com/live/SkH1X8YTxfU?feature=share"
//               class="text-white d-flex align-items-center justify-content-between text-decoration-none w-50"
//              >
//               <div class="gap-2 d-flex align-items-center">
//  <i class="fa-brands fa-youtube"></i>
//  <span style="'.$style.'">Youtube Live part 02</span>
//                  </div>
//              </a>
    

        
//              ';
          

            }
            
            //Adm and Eva marrega
                elseif($coursecode == "9"){
                
//               echo'
            
//              <a
//               href="https://youtube.com/live/7FWtsNwXXHc?feature=share"
//               class="text-white d-flex align-items-center justify-content-between text-decoration-none w-50"
//              >
//               <div class="gap-2 d-flex align-items-center">
//  <i class="fa-brands fa-youtube"></i>
//  <span style="'.$style.'">Youtube Live part 02</span>
//                  </div>
//              </a>
    

        
//              ';
          

            }
            elseif($coursecode == "15"){
                
//               echo'
            
//              <a
//               href="https://youtube.com/live/ORSflEKuHig?feature=share"
//               class="text-white d-flex align-items-center justify-content-between text-decoration-none w-50"
//              >
//               <div class="gap-2 d-flex align-items-center">
//  <i class="fa-brands fa-youtube"></i>
//  <span style="'.$style.'">Youtube Live part 01</span>
//                  </div>
//              </a>
//               <a
//               href="https://youtube.com/live/jFurgf09hlU?feature=share"
//               class="text-white d-flex align-items-center justify-content-between text-decoration-none w-50"
//              >
//               <div class="gap-2 d-flex align-items-center">
//  <i class="fa-brands fa-youtube"></i>
//  <span style="'.$style.'">Youtube Live part 02</span>
//                  </div>
//              </a>
            
        
//              ';
          

            }
            // SHG Cours
             elseif($coursecode == "22"){
           
                 
//               echo'
            
//             <a
//               href="https://youtube.com/live/ftc1fmbWbMw?feature=share"
//               class="text-white d-flex align-items-center justify-content-between text-decoration-none w-50"
//             >
//               <div class="gap-2 d-flex align-items-center">
// <i class="fa-brands fa-youtube"></i>
// <span style="'.$style.'">Youtube Live</span>
//               </div>
//             </a>
       

        
//           ';
        
            
         }       
            // pregnancy Course
             elseif($coursecode == "5"){
           
                 
              echo'
            
            <a
              href="https://youtube.com/live/mg7FfvMHI24?feature=share"
              class="text-white d-flex align-items-center justify-content-between text-decoration-none w-50"
            >
              <div class="gap-2 d-flex align-items-center">
<i class="fa-brands fa-youtube"></i>
<span style="'.$style.'">Youtube Live</span>
              </div>
            </a>
          ';
        
            
         }       
            // EBT1
             elseif($coursecode == "6"){
           
                 
//               echo'
            
//             <a
//               href="https://www.youtube.com/live/AHzFCRv5KDI?feature=share"
//               class="text-white d-flex align-items-center justify-content-between text-decoration-none w-50"
//             >
//               <div class="gap-2 d-flex align-items-center">
// <i class="fa-brands fa-youtube"></i>
// <span style="'.$style.'">Youtube Part1</span>
//               </div>
//             </a>
//             <a
//               href="https://www.youtube.com/watch?v=_BKPh1A79KU&ab_channel=ManageTheNow"
//               class="text-white d-flex align-items-center justify-content-between text-decoration-none w-50"
//             >
//               <div class="gap-2 d-flex align-items-center">
// <i class="fa-brands fa-youtube"></i>
// <span style="'.$style.'">Youtube Part2</span>
//               </div>
//             </a>
            

//             ';
        
            
         } 
            // Ragel Kaseb COURSE
             elseif($coursecode == "17"){
           
            //   echo'
            
            // <a
            //   href="https://youtube.com/live/spQmzzmmehE?feature=share"
            //   class="text-white d-flex align-items-center justify-content-between text-decoration-none w-50"
            // >
            //   <div class="gap-2 d-flex align-items-center">
            //     <i class="fa-brands fa-youtube"></i>
            //     <span style="'.$style.'">Youtube Live</span>
            //   </div>
            // </a>
            
        
            // ';
           
          
        
            // BCT
            }
            
            //CPC Color web
        
            elseif($coursecode == "13"){
           
              echo'
            
            <a
              href="https://youtube.com/live/cF-QJpMh8hs?feature=share"
              class="text-white d-flex align-items-center justify-content-between text-decoration-none w-50"
            >
              <div class="gap-2 d-flex align-items-center">
                <i class="fa-brands fa-youtube"></i>
                <span style="'.$style.'">Youtube Live</span>
              </div>
            </a>
            
        
            ';
           
          
        
            // BCT
            }
            
            
            elseif($coursecode == "1"){
           
              echo'
            
            <a
              href="https://www.youtube.com/live/_5f7jgmXSqU"
              class="text-white d-flex align-items-center justify-content-between text-decoration-none w-50"
            >
              <div class="gap-2 d-flex align-items-center">
                <i class="fa-brands fa-youtube"></i>
                <span style="'.$style.'">Youtube Live</span>
              </div>
            </a>
            
            ';
           
          
        
            // estro NOV 
            }elseif($coursecode == "24"){
           
              echo'
            
            <a
              href="https://www.youtube.com/live/VbqoAVH-aGc"
              class="text-white d-flex align-items-center justify-content-between text-decoration-none w-50"
            >
              <div class="gap-2 d-flex align-items-center">
                <i class="fa-brands fa-youtube"></i>
                <span style="'.$style.'">Youtube Live</span>
              </div>
            </a>

        
            ';
           
          
        
            
            
            // Adam And EVE 
            } elseif($coursecode == "8"){
           
        //       echo'
            
           
       
        //  <a
        //       href="https://youtu.be/Oln_xPXPqY0"
        //       class="text-white d-flex align-items-center justify-content-between text-decoration-none w-50"
        //     >
        //       <div class="gap-2 d-flex align-items-center">
        //         <i class="fa-brands fa-youtube"></i>
        //         <span style="'.$style.'">Youtube Day 03</span>
        //       </div>
        //     </a>

        
        //     ';
           
          
        
            
            }
            
            elseif($coursecode == "19"){
           
        //       echo'
            
           
       
        //  <a
        //       href="https://www.youtube.com/live/YNJa7kHTQW0"
        //       class="text-white d-flex align-items-center justify-content-between text-decoration-none w-50"
        //     >
        //       <div class="gap-2 d-flex align-items-center">
        //         <i class="fa-brands fa-youtube"></i>
        //         <span style="'.$style.'">Youtube Live Part 02 </span>
        //       </div>
        //     </a>

        
        //     ';
           
          
        
            
            } 
          
            ?>
            
            
                
                  <?php
                            if( ($_GET['id'] == 'm21862' ) ||($_GET['id'] == '1897' ) ||($_GET['id'] == 'a751248' ) ||($_GET['id'] == 'A15987' ) || ($_GET['id'] == 'm16440' ) || ($_GET['id'] == 'a22059' )|| ($_GET['id'] == 'bs5263' ) ||($_GET['id'] == 'm21859' ) || ($_GET['id'] == 'ataf_1907_mtn' ) || ( $_GET['id'] == 'm29549')|| ( $_GET['id'] == 'M10933') || ( $_GET['id'] == 'as5263')||( $_GET['id'] == 'e1522699')|| ( $_GET['id'] == 'L@mtn@support')|| ( $_GET['id'] == 'S@mtn@support')){
            echo'
            <a
              href="reviewData.php?id='.$user.'"
              class="gap-2 text-white d-flex align-items-center text-decoration-none w-50"
            >
             <i class="fa-solid fa-database"></i>
              <span >Review</span>
            </a>
          
            ';
                            }
                            
                              // <a
            //   href="stream.php?id='.$user.'&lang='.$lang.'"
            //   class="gap-2 text-white d-flex align-items-center text-decoration-none w-50"
            // >
            //  <i class="fa-solid fa-tower-broadcast"></i>
            //   <span >Stream</span>
            // </a>
            ?>
            
            
            <a
              href="calendar.php?id=<?php echo $user?>&lang=<?php echo $lang?>"
              class="gap-2 text-white d-flex align-items-center text-decoration-none w-50"
            >
              <i class="fa-solid fa-calendar-days"></i>
              <span style="<?echo $style?>"><?php echo $wordfive;?></span>
            </a>
            <a
              href="manual.php?id=<?php echo $user?>&lang=<?php echo $lang?>"
              class="gap-2 text-white d-flex align-items-center text-decoration-none w-50"
          
            >
             	<i class="fa-solid fa-book-open"></i>
              <span style="<?echo $style?>"><?php echo $wordsix;?></span>
            </a>
<?php 

if($coursecode=="25"){
     echo'
      <a
              href="full_version.php?id='.$user.'&lang='.$lang.'"
              class="gap-2 text-white d-flex align-items-center text-decoration-none w-50"
            >
             <i class="fa-solid fa-list-check"></i>
              <span class="me-lg-4" style="'.$style.'">'.$wordseven.'</span>
            </a>
  
            
     
     
        <a
              href="clips.php?id='.$user .'&lang='.$lang.'&color=day12"
              class="gap-2 text-white d-flex align-items-center text-decoration-none w-50"
             
            >
              <i class="fa-solid fa-video"></i>
              <span style="'. $style.' ; width: 80px;
">الطمأنينة (الأرزق)</span>
            </a> 
     
        <a
              href="clips.php?id='.$user .'&lang='.$lang.'&color=day13"
              class="gap-2 text-white d-flex align-items-center text-decoration-none w-50"
             
            >
              <i class="fa-solid fa-video"></i>
              <span style="'. $style.' ; width: 80px;
">القيمة (أخضر)</span>
            </a>  
            
             <a
              href="clips.php?id='.$user .'&lang='.$lang.'&color=day14"
              class="gap-2 text-white d-flex align-items-center text-decoration-none w-50"
             
            >
              <i class="fa-solid fa-video"></i>
              <span style="'. $style.' ; width: 80px;
"> القدرة(أحمر)</span>
            </a>   
     
            
     
            <a
              href="clips.php?id='.$user .'&lang='.$lang.'&color=day11"
              class="gap-2 text-white d-flex align-items-center text-decoration-none w-50"
             
            >
              <i class="fa-solid fa-video"></i>
              <span style="'. $style.' ; width: 80px;
">الحرية  (أصفر)</span>
            </a>   
       
      
       
     
     
     
     
     
     ';
     
     
     
     
 }
 elseif($coursecode=="6"){
     
     
     
      echo'
     <a
              href="full_version.php?id='.$user.'&lang='.$lang.'"
              class="gap-2 text-white d-flex align-items-center text-decoration-none w-50"
            >
             <i class="fa-solid fa-list-check"></i>
              <span class="me-lg-4" style="'.$style.'">'.$wordseven.'</span>
            </a>
  
            
            
              <a
              href="clipsForEbt1.php?id='.$user .'&lang='.$lang.'&color=day15"
              class="gap-2 text-white d-flex align-items-center text-decoration-none w-50"
             
            >
              <i class="fa-solid fa-video"></i>
              <span style="'. $style.' ; width: 80px;
">'.$wordeight.'</span>
            </a>   
                      
            
            <a
              href="clips.php?id='.$user .'&lang='.$lang.'"
              class="gap-2 text-white d-flex align-items-center text-decoration-none w-50"
             
            >
              <i class="fa-solid fa-video"></i>
              <span style="'. $style.' ; width: 80px;
">'.$wordeight.'</span>
            </a>   
                      ';
     
 }else{
     echo'
     <a
              href="full_version.php?id='.$user.'&lang='.$lang.'"
              class="gap-2 text-white d-flex align-items-center text-decoration-none w-50"
            >
             <i class="fa-solid fa-list-check"></i>
              <span class="me-lg-4" style="'.$style.'">'.$wordseven.'</span>
            </a>
  
            
            
            
            
            <a
              href="clips.php?id='.$user .'&lang='.$lang.'"
              class="gap-2 text-white d-flex align-items-center text-decoration-none w-50"
             
            >
              <i class="fa-solid fa-video"></i>
              <span style="'. $style.' ; width: 80px;
">'.$wordeight.'</span>
            </a>   
                      ';
     
     
 }

?>
            <a
              href="help.php?id=<?php echo $user ?>&lang=<?php echo $lang?>"
              class="gap-2 text-white d-flex align-items-center text-decoration-none w-50"
             
            >
                                      <i class="me-2 fa-solid fa-headset"></i>

<span style="<?echo $style?> ; width: 80px;
"><?php echo $wordfivety;?></span>
            </a>
            
            
            
            <a
              href="model/logout.php?id=<?php echo $user?>"
              class="gap-2 d-flex align-items-center text-decoration-none "
              style="color: #ed4e4e;width:55%"
              
            >
              <i class="fa-solid fa-right-from-bracket"></i>
              <span style="<?echo $style?>"> <?php echo $wordnine;?></span>
            </a>
          </div>
        </div>
        <!-- PAGE -->
        <div class="px-0 mx-0 col-lg-10 d-flex flex-column" id="body-container">
          <!-- NAVBAR -->
          <div
            class="px-4 py-2 shadow-sm col-12 d-flex w-100 justify-content-between align-items-center"
            id="navbar"
          >
            <div class="gap-3 mt-2 d-flex align-items-center">
              <!-- LOGO IN NAVBAR -->
              <div id="logo-container" class="d-block ">
                  <a href="https://managethenow.net/mtn-live">
                      
                <img src="view/imgs/mtn live AI.png" class="w-100 h-100" alt="" />
                  </a>
              </div>
            </div>
            <div class="gap-2 d-flex align-items-center ">
                
            
            <!--Language Changer -->
            
            <?php if($lang=='ar'){
            echo'<a href="https://managethenow.net/mtn-live/'.$curPageName.'?id='.$user.'&lang=en"
            style="text-decoration:none" class="gap-1 d-flex align-items-center text-dark me-3" href="#">
                <div style="width:30px;height:30px ; border-radius:50% ;overflow:hidden">
                <img class="w-100 h-100" style="object-fit:cover " src="./view/imgs/united-kingdom.png" />
                </div>
                    Eng
            </a>';
            }elseif($lang=='en'){
                echo'<a 
                href="https://managethenow.net/mtn-live/'.$curPageName.'?id='.$user.'&lang=ar"
                style="text-decoration:none" class="gap-1 d-flex align-items-center text-dark me-3" href="#">
                <div style="width:30px;height:30px ; border-radius:50% ;overflow:hidden">
                <img class="w-100 h-100" style="object-fit:contain" src="./view/imgs/egypt.png" />
                </div>
                    Ar
            </a>';}
            ?>
            
            <!-- DROPDOWN MENU -->
            <div class="d-lg-none d-flex">
              <!-- MENU ICON -->
              <i class="fa-solid fa-bars d-block text-dark"
                id="menu-icon"
                onclick="toggleMenu(event)"
                style="cursor: pointer"
              
              ></i>

              <!-- DROPDOWN  -->
              <div id="overlay" class="p-3 slide-in-right">
                <div
                  class="p-3 shadow position-fixed bg-light d-flex flex-column d-none"
                  id="dropdown-menu"
                >
                  <div>

                    <i class="fa-solid fa-xmark"
                       style="cursor: pointer"
                       id="close-menu-icon"
                       onclick="toggleMenu(event)"
                    
                    ></i>

                  </div>
                  <!-- PROFILE CONTAINER -->
                  <div
                    class="d-flex d-lg-none flex-column justify-content-center align-items-center "
                  >
                    <div
                      id="profile-img-nav-container"
                      class="d-flex justify-content-center align-items-center profile-img"
                    >
                      <img
                        src="<?php echo $user_data['image']?>"
                        class="w-100 h-100 d-lg-none d-block rounded-circle"
                        alt=""
                      />
                    </div>
                    <span id="profile-title" class="mt-2 text-dark text-capitalize"><?php echo $user_data['name']?></span>
                  </div>
                  
                    <div
                    class="gap-2 mt-2 d-flex justify-content-center align-items-center flex-lg-nowrap flex-lg-wrap"
                  >
                    <a
                      class="gap-1 px-2 user-profile-cert d-flex justify-content-center align-items-center"
                      href="profile.php?id=<?php echo $user?>&lang=<?php echo $lang?>"
                    >
                      <i class="fa-solid fa-user text-secondary"
                        style="font-size: 14px"></i>

                      <span class="text-secondary"><?php echo $wordone;?></span>
                    </a>
                    <a
                      class="gap-1 px-2 user-profile-cert d-flex justify-content-center align-items-center"
                      href="certificate.php?id=<?php echo $user?>&lang=<?php echo $lang?>"
                    >
                      <i class="fa-solid fa-certificate text-secondary"
                        style="font-size: 14px"></i>

                      <span class="text-secondary"><?php echo $wordtwo;?></span>
                    </a>
                  </div>
                  <div class="px-5">
                        <hr />
                  </div>
                  <div
                    id='menu'
                    class="pb-2 d-flex flex-column justify-content-start h-100 align-items-center"
                    style="overflow-x:scroll;"
                  >
                    <div
                      class="h-100 d-flex flex-column justify-content-between"
                    >
                    <a
                      href="https://managethenow.net/mtn-live"
                      style="<?php echo $arabicMobileMenu ?>"
                      class="d-flex align-items-center justify-content-start text-decoration-none text-secondary"
                    >
                      <i class="fa-solid fa-house me-2"></i>
                      <span><?php echo $wordthre;?></span>
                    </a>
                    
                    
                    
                    <?php 
                    
 if($coursecode=="25"){
     
 }else if($coursecode=="19"){
           echo'  
                    
                    <a
                      href="live/index.php?id='.$user.'&lang='.$lang .'"
                      style="<?php echo $arabicMobileMenu ?>"
                      class="d-flex align-items-center justify-content-start text-decoration-none text-secondary"
                    >
                              
                      <i class="fa-solid fa-tower-broadcast me-2"></i>
                      <span>'.$wordfour.'</span>
                    </a>
                    
                  
                    
                  ';
 }else{
                  echo'  
                    
                    <a
                      href="live/index.php?id='.$user.'&lang='.$lang .'"
                      style="<?php echo $arabicMobileMenu ?>"
                      class="d-flex align-items-center justify-content-start text-decoration-none text-secondary"
                    >
                              
                      <i class="fa-solid fa-tower-broadcast me-2"></i>
                      <span>'.$wordfour.'</span>
                    </a>
                    
                  
                    
                  ';
     
     
 }
                    // FETRA COURSE
                    if($coursecode == "23"){
                                   
            //          echo'
            
            // <a
            //   href="https://www.youtube.com/watch?v=yk9PQFkqPKE&ab_channel=ManageTheNow"
            //   class="d-flex align-items-center justify-content-between text-decoration-none text-secondary w-50"
            // >
            //   <div class="gap-2 d-flex align-items-center">
            //         <i class="fa-brands fa-youtube"></i>
            //     <span style="'.$style.'">Youtube Live</span>
            //   </div>
            // </a>

            // ';

                    }
                   
                    // FETRA June2024 MOBILE
                    if($coursecode == "29"){
                                   
                     echo'
            
            <a
              href="https://youtube.com/live/K7B6ETRFJ_w?feature=share"
              class="d-flex align-items-center justify-content-between text-decoration-none text-secondary w-50"
            >
              <div class="gap-2 d-flex align-items-center">
                    <i class="fa-brands fa-youtube"></i>
                <span style="'.$style.'">Youtube Live</span>
              </div>
            </a>

            ';

                    }
                   

                    
                    // SHG COURSE
                         elseif($coursecode == "22"){
            //               echo'
            
            // <a
            //   href="https://youtube.com/live/ftc1fmbWbMw?feature=share"
            //   class="d-flex align-items-center justify-content-between text-decoration-none text-secondary w-50"
            // >
            //   <div class="gap-2 d-flex align-items-center">
            //         <i class="fa-brands fa-youtube"></i>
            //     <span style="'.$style.'">Youtube Live </span>
            //   </div>
            // </a>
   
         

        
            // ';
  
 


            }        
            // pregnancy course
                      elseif($coursecode == "5"){
                          echo'
            
            <a
              href="https://youtube.com/live/mg7FfvMHI24?feature=share"
              class="d-flex align-items-center justify-content-between text-decoration-none text-secondary w-50"
            >
              <div class="gap-2 d-flex align-items-center">
                    <i class="fa-brands fa-youtube"></i>
                <span style="'.$style.'">Youtube Live</span>
              </div>
            </a>
   
        
            ';

            } 
            //AdamEveMarage
                      elseif($coursecode == "9"){
            //               echo'
            
            // <a
            //   href="https://youtube.com/live/7FWtsNwXXHc?feature=share"
            //   class="d-flex align-items-center justify-content-between text-decoration-none text-secondary w-50"
            // >
            //   <div class="gap-2 d-flex align-items-center">
            //         <i class="fa-brands fa-youtube"></i>
            //     <span style="'.$style.'">Youtube Live part 02</span>
            //   </div>
            // </a>
   
        
            // ';

            } 
                    // EBT1
                         elseif($coursecode == "6"){
            //               echo'
            
            // <a
            //   href="https://www.youtube.com/live/AHzFCRv5KDI?feature=share"
            //   class="d-flex align-items-center justify-content-between text-decoration-none text-secondary w-50"
            // >
            //   <div class="gap-2 d-flex align-items-center">
            //         <i class="fa-brands fa-youtube"></i>
            //     <span style="'.$style.'">Youtube Live Part 01</span>
            //   </div>
            // </a>
            // <a
            //   href="https://www.youtube.com/watch?v=_BKPh1A79KU&ab_channel=ManageTheNow"
            //   class="d-flex align-items-center justify-content-between text-decoration-none text-secondary w-50"
            // >
            //   <div class="gap-2 d-flex align-items-center">
            //         <i class="fa-brands fa-youtube"></i>
            //     <span style="'.$style.'">Youtube Live Part 02</span>
            //   </div>
            // </a>
     
          
          
        
            // ';
  
 


            }   
            
            
            
            
            
            
                    // EBT2 main LEVEL
                         elseif($coursecode == "7"){
            //               echo'
            
            // <a
            //   href="https://www.youtube.com/watch?v=4MxxLfjMkiE"
            //   class="d-flex align-items-center justify-content-between text-decoration-none text-secondary w-50"
            // >
            //   <div class="gap-2 d-flex align-items-center">
            //         <i class="fa-brands fa-youtube"></i>
            //     <span style="'.$style.'">Youtube Live part 03</span>
            //   </div>
            // </a>
          
            
         
            
            //  ';
  
 


            }              elseif($coursecode == "2"){
            //               echo'
            
            // <a
            //   href="https://youtube.com/live/SkH1X8YTxfU?feature=share"
            //   class="d-flex align-items-center justify-content-between text-decoration-none text-secondary w-50"
            // >
            //   <div class="gap-2 d-flex align-items-center">
            //         <i class="fa-brands fa-youtube"></i>
            //     <span style="'.$style.'">Youtube Live part 02</span>
            //   </div>
            // </a>
            
         
            
            //  ';
  
 


            }   
            
                    // EBT2 ADV LEVEL
                         elseif($coursecode == "15"){
            //               echo'
            
            // <a
            //   href="https://youtube.com/live/ORSflEKuHig?feature=share"
            //   class="d-flex align-items-center justify-content-between text-decoration-none text-secondary w-50"
            // >
            //   <div class="gap-2 d-flex align-items-center">
            //         <i class="fa-brands fa-youtube"></i>
            //     <span style="'.$style.'">Youtube Live part 01</span>
            //   </div>
            // </a>
            
           
                 
            // <a
            //   href="https://youtube.com/live/jFurgf09hlU?feature=share"
            //   class="d-flex align-items-center justify-content-between text-decoration-none text-secondary w-50"
            // >
            //   <div class="gap-2 d-flex align-items-center">
            //         <i class="fa-brands fa-youtube"></i>
            //     <span style="'.$style.'">Youtube Live part 02</span>
            //   </div>
            // </a>
            // ';
  
 


            }   
            
            
            
            
 
                            // Ragel Kaseb Course
                         elseif($coursecode == "17"){
                                   
            //               echo'
            
            // <a
            //   href="https://www.youtube.com/watch?v=SYbjQXJ1zlU"
            //   class="d-flex align-items-center justify-content-between text-decoration-none text-secondary w-50"
            // >
            //   <div class="gap-2 d-flex align-items-center">
            //         <i class="fa-brands fa-youtube"></i>
            //     <span style="'.$style.'">Youtube Live</span>
            //   </div>
            // </a>
           
            
        
            // ';
            
  
 

               
            }   
            //cpc Color mobile
            elseif($coursecode == "13"){
                                   
                          echo'
            
            <a
              href="https://youtube.com/live/cF-QJpMh8hs?feature=share"
              class="d-flex align-items-center justify-content-between text-decoration-none text-secondary w-50"
            >
              <div class="gap-2 d-flex align-items-center">
                    <i class="fa-brands fa-youtube"></i>
                <span style="'.$style.'">Youtube Live</span>
              </div>
            </a>
           
            
        
            ';
            
                }   
            
            // BCT
            elseif($coursecode == "1"){
                                   
                          echo'
            
            <a
              href="https://www.youtube.com/live/_5f7jgmXSqU"
              class="d-flex align-items-center justify-content-between text-decoration-none text-secondary w-50"
            >
              <div class="gap-2 d-flex align-items-center">
                    <i class="fa-brands fa-youtube"></i>
                <span style="'.$style.'">Youtube Live</span>
              </div>
            </a>
           
            ';
            
  
 

                // estro NOV 
            }elseif($coursecode == "24"){
                                   
                          echo'
            
            <a
              href="https://www.youtube.com/live/VbqoAVH-aGc"
              class="d-flex align-items-center justify-content-between text-decoration-none text-secondary w-50"
            >
              <div class="gap-2 d-flex align-items-center">
                    <i class="fa-brands fa-youtube"></i>
                <span style="'.$style.'">Youtube Live</span>
              </div>
            </a>
            
           
            
        
            ';
            
  
 
                

            } 
            elseif($coursecode == "8"){
                                   
            //               echo'
            
          
           
            //  <a
            //   href="https://youtu.be/Oln_xPXPqY0"
            //   class="d-flex align-items-center justify-content-between text-decoration-none text-secondary w-50"
            // >
            //   <div class="gap-2 d-flex align-items-center">
            //         <i class="fa-brands fa-youtube"></i>
            //     <span style="'.$style.'">Youtube Day 03</span>
            //   </div>
            // </a>
            
           
            
        
            // ';
            
  
 

//CTRL
            }
            
            
            //CTRL Organic part Mobile
            
            elseif($coursecode == "10"){
                                   
                          echo'
            
          
           
             <a
              href="https://youtube.com/live/0W8J6JyLcWw?feature=share"
              class="d-flex align-items-center justify-content-between text-decoration-none text-secondary w-50"
            >
              <div class="gap-2 d-flex align-items-center">
                    <i class="fa-brands fa-youtube"></i>
                <span style="'.$style.'">Youtube Day 03 Part 01</span>
              </div>
            </a>
                         <a
              href="https://youtube.com/live/h5q2lWtSSEY?feature=share"
              class="d-flex align-items-center justify-content-between text-decoration-none text-secondary w-50"
            >
              <div class="gap-2 d-flex align-items-center">
                    <i class="fa-brands fa-youtube"></i>
                <span style="'.$style.'">Youtube Day 03 Part 02</span>
              </div>
            </a>


        
            ';
            
  
            }
             
            
            
            
            
            elseif($coursecode == "19"){
                                   
            //               echo'
            
          
           
            //  <a
            //   href="https://www.youtube.com/live/YNJa7kHTQW0"
            //   class="d-flex align-items-center justify-content-between text-decoration-none text-secondary w-50"
            // >
            //   <div class="gap-2 d-flex align-items-center">
            //         <i class="fa-brands fa-youtube"></i>
            //     <span style="'.$style.'">Youtube Live Part 02 </span>
            //   </div>
            // </a>
            
           
            
        
            // ';
            
  
 


            } 

       
                    ?>
                    
              
                    
                    <?php
                            if( ($_GET['id'] == 'm21862' ) || ($_GET['id'] == 'm16440' ) || ($_GET['id'] == 'a22059' )|| ($_GET['id'] == 'm21859' ) || ($_GET['id'] == 'ataf_1907_mtn' ) ||($_GET['id'] == 'bs5263' ) ||($_GET['id'] == 'as5263' ) ||($_GET['id'] == 'e1522699' ) || 
                            ($_GET['id'] == 'm29549')|| ( $_GET['id'] == 'L@mtn@support') || ( $_GET['id'] == 'S@mtn@support') ){
            echo'
             <a
                      href="reviewData.php?id='.$user.'"
                      style="'.$arabicMobileMenu.'"
                      class="d-flex align-items-center justify-content-start text-decoration-none text-secondary"
                    >
                              
                      <i class="me-2 fa-solid fa-database"></i>
                      <span>Review</span>
                    </a>
             
                    '
            
            ;
                            }
                    //         <a
                    //   href="stream.php?id='.$user.'&lang='.$lang.'"
                    //   style="'.$arabicMobileMenu.'"
                    //   class="d-flex align-items-center justify-content-start text-decoration-none text-secondary"
                    // >
                              
                    //   <i class="me-2 fa-solid fa-tower-broadcast"></i>
                    //   <span>Stream</span>
                    // </a>
            ?>
            
                    <a
                      href="calendar.php?id=<?php echo $user?>&lang=<?php echo $lang?>"
                      style="<?php echo $arabicMobileMenu ?>"
                      class="d-flex align-items-center justify-content-start text-decoration-none text-secondary"
                    >
                              
                      <i class="me-2 fa-solid fa-calendar-days"></i>
                      <span><?php echo $wordfive;?></span>

                    </a>
                    <a
                      href="manual.php?id=<?php echo $user?>&lang=<?php echo $lang?>"
                      style="<?php echo $arabicMobileMenu ?>"
                      class="d-flex align-items-center justify-content-start text-decoration-none text-secondary"
                    >
                              
                      <i class="me-2 fa-solid fa-book-open"></i>
                      <span><?php echo $wordsix;?></span>
                    </a>
                    
                               
                    <?php 
 
 if($coursecode=="25"){
     echo'
       <a
                      href="full_version.php?id='.$user.'&lang='.$lang.'"
                      style="'.$arabicMobileMenu .'"
                      class="d-flex align-items-center justify-content-start text-decoration-none text-secondary"
                    >
                              
                      <i class="me-2 fa-solid fa-list-check"></i>
                        <span class="me-lg-4">'.$wordseven.'</span>
                    </a>
                  
                        <a
                      href="clips.php?id='.$user.'&lang='.$lang.'&color=day12"
                      style="'.$arabicMobileMenu .'"
                      class="d-flex align-items-center justify-content-start text-decoration-none text-secondary"
                    >
                              
                      <i class="me-2 fa-solid fa-video"></i>
                      <span> الطمأنينة (الأرزق) </span>
                    </a>   
                        <a
                      href="clips.php?id='.$user.'&lang='.$lang.'&color=day13"
                      style="'.$arabicMobileMenu .'"
                      class="d-flex align-items-center justify-content-start text-decoration-none text-secondary"
                    >
                              
                      <i class="me-2 fa-solid fa-video"></i>
                      <span> القيمة (أخضر) </span>
                    </a>   
                        <a
                      href="clips.php?id='.$user.'&lang='.$lang.'&color=day14"
                      style="'.$arabicMobileMenu .'"
                      class="d-flex align-items-center justify-content-start text-decoration-none text-secondary"
                    >
                              
                      <i class="me-2 fa-solid fa-video"></i>
                      <span> القدرة (أحمر)</span>
                    </a>   
                    
     
      <a
                      href="clips.php?id='.$user.'&lang='.$lang.'&color=day11"
                      style="'.$arabicMobileMenu .'"
                      class="d-flex align-items-center justify-content-start text-decoration-none text-secondary"
                    >
                              
                      <i class="me-2 fa-solid fa-video"></i>
                      <span> الحرية  (أصفر)</span>
                    </a>   
     
     
     
     ';
     
     
     
     
 }
 
 if($coursecode=="6"){
     
       echo'
                    <a
                      href="full_version.php?id='.$user.'&lang='.$lang.'"
                      style="'.$arabicMobileMenu .'"
                      class="d-flex align-items-center justify-content-start text-decoration-none text-secondary"
                    >
                              
                      <i class="me-2 fa-solid fa-list-check"></i>
                        <span class="me-lg-4">'.$wordseven.'</span>
                    </a>
                  
                    
                    <a
                      href="clipsForEbt1.php?id='.$user.'&lang='.$lang.'&color=day15"
                      style="'.$arabicMobileMenu .'"
                      class="d-flex align-items-center justify-content-start text-decoration-none text-secondary"
                    >
                              
                      <i class="me-2 fa-solid fa-video"></i>
                      <span>'.$wordeight.'</span>
                    </a>   
                         
                    <a
                      href="clips.php?id='.$user.'&lang='.$lang.'"
                      style="'.$arabicMobileMenu .'"
                      class="d-flex align-items-center justify-content-start text-decoration-none text-secondary"
                    >
                              
                      <i class="me-2 fa-solid fa-video"></i>
                      <span>'.$wordeight.'</span>
                    </a>   
                    
                      ';
     
 }
 else{
             echo'
                    <a
                      href="full_version.php?id='.$user.'&lang='.$lang.'"
                      style="'.$arabicMobileMenu .'"
                      class="d-flex align-items-center justify-content-start text-decoration-none text-secondary"
                    >
                              
                      <i class="me-2 fa-solid fa-list-check"></i>
                        <span class="me-lg-4">'.$wordseven.'</span>
                    </a>
                  
                    
                    <a
                      href="clips.php?id='.$user.'&lang='.$lang.'"
                      style="'.$arabicMobileMenu .'"
                      class="d-flex align-items-center justify-content-start text-decoration-none text-secondary"
                    >
                              
                      <i class="me-2 fa-solid fa-video"></i>
                      <span>'.$wordeight.'</span>
                    </a>   
                    
                      ';
                    }
                    ?>
                    
                    <a
                      href="help.php?id=<?php echo $user?>&lang=<?php echo $lang?>"
                      style="<?php echo $arabicMobileMenu ?>"
                      class="d-flex align-items-center justify-content-start text-decoration-none text-secondary"
                    >
                      <i class="me-2 fa-solid fa-headset"></i>
                      <span><?php echo $wordfivety;?></span>
                    </a>
                    
                   
                    
                    
                    
                    <a
                      href="model/logout.php?id=<?php echo $user?>"
                      style="<?php echo $arabicMobileMenu ?>"
                      class="gap-2 d-flex align-items-center text-decoration-none text-danger"
                    >
                              
                      <i class="me-2 fa-solid fa-right-from-bracket"></i>
                      <span><?php echo $wordnine;?></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
          </div>
       <?php
  
	}elseif(!isset($id)){
	    
	    	    $user=$_COOKIE['user'];

	    
	    
               	header("location: index.php?id=$user&lang=ar");
		       exit(); 
	    
	}else{
	    
	header("Location: login.php");
		       exit();
    }
	        
	        

?>
       
      