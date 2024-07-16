
<?php 

        require_once 'model/certificate.php';
        require_once 'model/userData.php';
            require_once 'view/header.php';
            $id = $_GET['id'];

        
        $certificate_name = userData::get_user_name_certificate($id);
        $users_data=userData::get_user_data($id);
      
        
        
        
        // $checker = userData::get_checker($id);
          

  
?>

<!-- MAIN -->

<div
            class="w-100 d-flex flex-column justify-content-center align-items-center"
            id="main-container"
             style="height: 650px; overflow: hidden"
          >
    
<?php

 if(isset($_POST['submit_certificate_name'])){
        
        $certificate_name_first=$_POST['certificate_name'];
        userData::save_user_name_certificate($id,$certificate_name_first);
header("Refresh:0");
exit();

        
        
    }



if($certificate_name=='0')
{
   
    
    
    
    
    echo'
          
             <div id="certificate-input-card-container">
              <form
                class="d-flex flex-column justify-content-center align-items-center mb-3 px-5 py-3 w-75 mx-auto bg-light gap-2"
                id="certificate-input-card"
                action="certificate.php?id='.$id.'"
                method="POST"
              >
                <label for="InputName" class="text-capitalize fw-bold">
                  please enter your name :
                </label>
                <input
                  type="text"
                  class="form-control mb-3"
                  id="InputName"
                  placeholder="Enter Name"
                  name="certificate_name"
                />
                <input type="submit" value="Submit" name="submit_certificate_name" class="btn btn-outline-primary">
                  
            
              </form>
            </div>
    ';
}else{
    
    

?>

         
              <div
              id="cards-container"
              class="w-100 d-flex flex-wrap gap-4 p-3 p-md-4 justify-content-center align-items-center"
            >
                  
                  
 <?php      
 
 
 
 
   
      for($x=1;$x<=23;$x++){
            foreach($users_data as $user_data){
                  if($user_data["course_code$x"]!=0){
                      
                      $certificate = Certificate::get_certificate($user_data["course_code$x"]);
                      foreach($certificate as $certificates){
                          
                          
                          if($certificates['certificat']==1){
                                     
                      echo'
                      
           
            <div
              id="certificate-card"
              class="d-flex flex-column align-items-center p-2 gap-3 bg-light shadow-lg"
              style="overflow-y: auto"
            >
              <div
                style="height: 100%; width: 100%; border-radius: 25px"
                class="overflow-hidden"
              >
                <img
                  src="view/imgs/certificate.png"
                  class="w-100 h-100"
                  style="object-fit: contain"
                  alt=""
                />
              </div>
              <div class="">
                <a href="'.$certificates['certificat_path'].'?name='.$certificate_name.'&courseid='.$certificates['id'].'" class="btn btn-outline-primary" style="">'.$certificates['course_name'].'</a>
              </div>
            </div>
                      ';
                          }else{
                              
           
                              
                          }
                          
                       
                      
                          
                          
                      }
                  }
            }
          
        }
    
 
 
 
 


}




                ?> 
               </div>
        
                </div>
        
       
<?php

require_once 'view/footer.php';

?>
