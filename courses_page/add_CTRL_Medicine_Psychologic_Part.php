
<?php  include_once 'db_conn.php';?>
<html>
   <head>
	<title>CTRL Medicine – Psychologic Part
  </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/mtn_.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<script src="https://code.jquery.com/jquery-1.12.4.min.js" 
        integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" 
        crossorigin="anonymous">
</script>
<script src="js/jquery.ccpicker.js"></script>
<link rel="stylesheet" href="css/jquery.ccpicker.css">
<link rel="stylesheet" href="niceCountryInput.css">
<script src="niceCountryInput.js"></script>

<style>
#myDIV {
  height:200px; 
  border: 10px dashed black;
  padding: 25px;
  background-attachment: fixed;
  background-position: center; }

    @media (max-width: 430px) {
        .wrap-login100{
            width:90%;
        }
    }
    .table-success {
    --bs-table-bg: #d1e7dd;
    --bs-table-striped-bg: #0B4392;
    --bs-table-striped-color: #fff;
    --bs-table-active-bg: #bcd0c7;
    --bs-table-active-color: #000;
    --bs-table-hover-bg: #c1d6cc;
    --bs-table-hover-color: #000;
    color: #000;
    border-color: #bcd0c7;
}
</style>


</head>
        <section class="vh-100" >
  <div class="container h-100" >
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-9">
<div class="row" style="    color: white;letter-spacing: 5px;">
    <div class="col-3"></div>
    <div class="col-6" style="margin-top:10px">   

                            
</div>
    <div class="col-3">
        
              <!--    <a href="signup_estrogym_arbic.php" class="btn"  style="margin-top: 10px;background: #837cb9;color: #fff;font-family: 'Cairo';text-decoration: none;padding: 5% 15%;" ><span class="fi fi-eg"></span> العربية</a>-->

        
    </div>

    
    
</div>

<div class="limiter">
		<div class="container-login100" style='    min-height: 76vh;'>
		    
		       
		   
		    	
                            
			<div class="wrap-login100" style='top: 2%;'>
			 
				<form class="login100-form validate-form" autocomplete="off" action="finish_add_course.php" method="POST" >
			<div style='width: 100%;
    display: flex;
    justify-content: center;
    margin-top: 35px;'>
			    
			    				<img style="height:120px;width:200px"   src='https://managethenow.net/mtn-live/view/imgs/logos/CTRL-Medicine.png' >

			</div>
					
				

					<span style='   font-size:25px; color: #305fa2;
    width: 100%;' class="login100-form-title p-b-34 ">
					    CTRL Medicine – Psychologic Part

					</span>
				
<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     
					<div class="wrap-input100 validate-input" data-validate = "Enter your Username">
    						<input class="input100" type="text" name="name" placeholder="Username" autocomplete="off" required>
    						<span class="focus-input100" data-placeholder=""></span>
    				</div>
    					
				
					
					
    				<div class="wrap-input100 " >
    						<input class="input100" type="text" name="qrcode" placeholder="Password" autocomplete="off"  required>
    						<span class="focus-input100" data-placeholder=""></span>
    				</div>
    
					
					
			
					
					
						<div class="wrap-input100 " >
						
						<select name="coursecode" id="sales_consultant" required class="input100" style="border : none ;">
					<!--<option value=''>choose your course</option>-->
             
                   
                            <!--<option value='6'>EBT 1 محو الأمية الشعورية</option>-->
                          <!--<option value='7'>EBT 2 التشخيص والعلاج</option>-->
                           <!--<option value='16'> EstroGYM  </option>-->
                           <!--<option value='17'> TG الراجل الكسيب  </option>-->
                           <!--<option value='14'> TG Values    </option>-->
                           <!--<option value='8'> أدم وحواء - المستوى الأساسي    </option>-->
                            <!--<option value='9'> Adam & Eve - Adv. Level   </option>-->
                           <!--<option value='12'>Lüscher CDT  </option>-->
                           <!--<option value='13'>CPC  </option>-->
                           <!--<option value='10'>CTRL Medicine - Organic   </option>-->
                           <option value='18'>CTRL Medicine - Psychologic   </option>
                           <!--<option value='19'>CTRL Medicine - Anatomical</option>-->
                           <!--<option value='20'>Self-Healing Guide</option>-->
                           <!--<option value='11'>Balance-Healing Guide</option>-->
                           <!--<option value='1'>CT Scan</option> -->
                           <!--<option value='3'>آدم وحواء - للمراهقين -</option> -->
                           <!--<option value='4'>الريادة الجنسية – للرجال -</option> -->
                           <!--<option value='5'>Therapy GYM Pregnancy</option> -->
                           <!--<option value='21'>Brain CT ScanTrainings</option>-->
                        </select>
						
					</div>
    
		<div class="wrap-input100 " >
						
						<select name="course_type" id="course_type" required class="input100" style="border : none ;">
						<option value="" disabled selected hidden>Attending  Type</option>
						<option value="first time "> First Time</option>
                        <option value="re-attend">  Re-attend</option>
                    
                        </select>
						
					</div>
					
						<div class="wrap-input100 " >
						
						<select name="attendance" id="attendance" required class="input100" style="border : none ;">
						<option value="" disabled selected hidden>Live Attendance </option>
						<option value="Live"> Live  </option>
                        <option value="online">Online</option>
                    
                        </select>
						
					</div>
    
	
			
    		
				

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" >
						Add Course
						</button>
					</div>

				
				</form>
			</div>
		</div>
	</div>
	
      </div>
    </div>
  </div>
</section>
        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    </body>
</html>