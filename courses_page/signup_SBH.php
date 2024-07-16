
<?php  include_once 'db_conn.php';?>
<!DOCTYPE html>

<html lang="en">
<head>
	<title> SBH</title>
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
<body style='overflow-x: hidden;'>
	
	<div class="limiter">
		<div class="container-login100">
		    
		       <!--<img style='opacity: 0.3;  '>-->
		   
		    
                             <?php  $coursecode = 32; ?>
			<div class="wrap-login100" style='top: 2%;'>
			     <?php
              
              
              if(isset($_POST['generate'])){
                  $char=$_POST['name'];
                  $birth=$_POST['birthdate'];
                  $phone=$_POST['phonenumber'];
                  $city=$_POST['city'];
                  $work=$_POST['work'];
                  $email=$_POST['email'];
                  
            
                  
              }
              ?>
				<form class="login100-form validate-form" autocomplete="off" action="finish.php?coursecode=<?php echo $coursecode ?>" method="POST"  >
				    
				    <div style='display: flex;
    justify-content: center;'>
				        		<img  style="width:200px ;height:150px" src='https://managethenow.net/mtn-live/view/imgs/logos/SHG.svg' >
				        		<!--<br>-->
				    </div>
		
					
				<h3 class="text-black mb-4 text-center" > SBH
 </h3>

					<span class="login100-form-title p-b-34 ">
							Sign Up
					</span>
				
	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	 <div class="row">
     	     <div class="col-4">
     	     <div class="wrap-input100 validate-input" data-validate = "Enter your name">
					    
						<input class="input100" type="text" name="f-name" placeholder="F-Name" autocomplete="off" required pattern="[a-zA-Z0-9\s]+" required title="First Name Must Be English">
						<span class="focus-input100" data-placeholder=""></span>
					</div>
					</div>
					
					
                    <div class="col-8">
					<div class="wrap-input100 validate-input" data-validate = "Enter your name">
					    
						<input class="input100" type="text" name="all-name" placeholder="Family Name" autocomplete="off" required  pattern="[a-zA-Z0-9\s]+" required title="Last Name Must Be English" >
						<span class="focus-input100" data-placeholder=""></span>
					</div>
					</div>
     	     </div>
					<div class="wrap-input100 validate-input" data-validate = "Enter email">
    						<input class="input100" type="email" name="email" placeholder="Email" autocomplete="off" required>
    						<span class="focus-input100" data-placeholder=""></span>
    				</div>
    						<div class="wrap-input100 " >
						
					<!--	<select name="city" id="city" required class="input100" style="border : none ;">
    					    <?php 
                    define('DB_HOST', 'localhost');
                    define('DB_NAME', 'u471974205_data');
                    define('DB_USER', 'u471974205_data');
                    define('DB_PASS', 'zQ9~wnBg');
                    $dbh =  new PDO('mysql:dbhost='.DB_HOST.';dbname=' .DB_NAME , DB_USER, DB_PASS);
                    global $dbh;
                        $sql = $dbh->prepare("SELECT * FROM countries ;");
                        $sql->execute();
                        $data = null;
                        while($fetch = $sql->fetch(PDO::FETCH_ASSOC))
                        {
                            $countries[] = $fetch;
                        }
                          
                     ?> 
                     
                    
                         <option value="">Please select your country</option>
                         <?php
                           foreach ($countries as $index => $country):
                          echo '<option value="'.$country['name'].'" >  '. $country['name'] .'</option> ';
                          endforeach;
                         
                         ?>
                     </select>
    		-->
    		
<div id="example" 
     data-selectedcountry="US" 
     data-showspecial="false" 
     data-showflags="true" 
     data-i18nall="All selected"
     data-i18nnofilter="No selection" 
     data-i18nfilter="Filter" 
     data-onchangecallback="onChangeCallback">
</div>
    				</div>
    				 <div class="row">
    				    
    			
    				 <div class="col-12">
    				<div class="wrap-input100 validate-input" style="display: flex;align-items: center;" data-validate = "Enter WhatApp Number">
    						<input class="input100 phone-field"  type="text"  id="phoneField" name="phonenumber" placeholder="Phone Number" autocomplete="off" id='phone' pattern="[0-9]+" maxlength="12" minlength="6" required title="Full Number Code Must Be Number">
    						<span class="focus-input100" data-placeholder=""></span>
    						
    				</div>
    				</div>
    		</div>

    
    
					<div class="wrap-input100 " >
					<select name="nationality" class="input100" required style="border: none;">
  <option  value=""> nationality </option>
  <option value="afghan">Afghan</option>
  <option value="albanian">Albanian</option>
  <option value="algerian">Algerian</option>
  <option value="american">American</option>
  <option value="andorran">Andorran</option>
  <option value="angolan">Angolan</option>
  <option value="antiguans">Antiguans</option>
  <option value="argentinean">Argentinean</option>
  <option value="armenian">Armenian</option>
  <option value="australian">Australian</option>
  <option value="austrian">Austrian</option>
  <option value="azerbaijani">Azerbaijani</option>
  <option value="bahamian">Bahamian</option>
  <option value="bahraini">Bahraini</option>
  <option value="bangladeshi">Bangladeshi</option>
  <option value="barbadian">Barbadian</option>
  <option value="barbudans">Barbudans</option>
  <option value="batswana">Batswana</option>
  <option value="belarusian">Belarusian</option>
  <option value="belgian">Belgian</option>
  <option value="belizean">Belizean</option>
  <option value="beninese">Beninese</option>
  <option value="bhutanese">Bhutanese</option>
  <option value="bolivian">Bolivian</option>
  <option value="bosnian">Bosnian</option>
  <option value="brazilian">Brazilian</option>
  <option value="british">British</option>
  <option value="bruneian">Bruneian</option>
  <option value="bulgarian">Bulgarian</option>
  <option value="burkinabe">Burkinabe</option>
  <option value="burmese">Burmese</option>
  <option value="burundian">Burundian</option>
  <option value="cambodian">Cambodian</option>
  <option value="cameroonian">Cameroonian</option>
  <option value="canadian">Canadian</option>
  <option value="cape verdean">Cape Verdean</option>
  <option value="central african">Central African</option>
  <option value="chadian">Chadian</option>
  <option value="chilean">Chilean</option>
  <option value="chinese">Chinese</option>
  <option value="colombian">Colombian</option>
  <option value="comoran">Comoran</option>
  <option value="congolese">Congolese</option>
  <option value="costa rican">Costa Rican</option>
  <option value="croatian">Croatian</option>
  <option value="cuban">Cuban</option>
  <option value="cypriot">Cypriot</option>
  <option value="czech">Czech</option>
  <option value="danish">Danish</option>
  <option value="djibouti">Djibouti</option>
  <option value="dominican">Dominican</option>
  <option value="dutch">Dutch</option>
  <option value="east timorese">East Timorese</option>
  <option value="ecuadorean">Ecuadorean</option>
  <option value="egyptian">Egyptian</option>
  <option value="emirian">Emirian</option>
  <option value="equatorial guinean">Equatorial Guinean</option>
  <option value="eritrean">Eritrean</option>
  <option value="estonian">Estonian</option>
  <option value="ethiopian">Ethiopian</option>
  <option value="fijian">Fijian</option>
  <option value="filipino">Filipino</option>
  <option value="finnish">Finnish</option>
  <option value="french">French</option>
  <option value="gabonese">Gabonese</option>
  <option value="gambian">Gambian</option>
  <option value="georgian">Georgian</option>
  <option value="german">German</option>
  <option value="ghanaian">Ghanaian</option>
  <option value="greek">Greek</option>
  <option value="grenadian">Grenadian</option>
  <option value="guatemalan">Guatemalan</option>
  <option value="guinea-bissauan">Guinea-Bissauan</option>
  <option value="guinean">Guinean</option>
  <option value="guyanese">Guyanese</option>
  <option value="haitian">Haitian</option>
  <option value="herzegovinian">Herzegovinian</option>
  <option value="honduran">Honduran</option>
  <option value="hungarian">Hungarian</option>
  <option value="icelander">Icelander</option>
  <option value="indian">Indian</option>
  <option value="indonesian">Indonesian</option>
  <option value="iranian">Iranian</option>
  <option value="iraqi">Iraqi</option>
  <option value="irish">Irish</option>
  <option value="israeli">Israeli</option>
  <option value="italian">Italian</option>
  <option value="ivorian">Ivorian</option>
  <option value="jamaican">Jamaican</option>
  <option value="japanese">Japanese</option>
  <option value="jordanian">Jordanian</option>
  <option value="kazakhstani">Kazakhstani</option>
  <option value="kenyan">Kenyan</option>
  <option value="kittian and nevisian">Kittian and Nevisian</option>
  <option value="kuwaiti">Kuwaiti</option>
  <option value="kyrgyz">Kyrgyz</option>
  <option value="laotian">Laotian</option>
  <option value="latvian">Latvian</option>
  <option value="lebanese">Lebanese</option>
  <option value="liberian">Liberian</option>
  <option value="libyan">Libyan</option>
  <option value="liechtensteiner">Liechtensteiner</option>
  <option value="lithuanian">Lithuanian</option>
  <option value="luxembourger">Luxembourger</option>
  <option value="macedonian">Macedonian</option>
  <option value="malagasy">Malagasy</option>
  <option value="malawian">Malawian</option>
  <option value="malaysian">Malaysian</option>
  <option value="maldivan">Maldivan</option>
  <option value="malian">Malian</option>
  <option value="maltese">Maltese</option>
  <option value="marshallese">Marshallese</option>
  <option value="mauritanian">Mauritanian</option>
  <option value="mauritian">Mauritian</option>
  <option value="mexican">Mexican</option>
  <option value="micronesian">Micronesian</option>
  <option value="moldovan">Moldovan</option>
  <option value="monacan">Monacan</option>
  <option value="mongolian">Mongolian</option>
  <option value="moroccan">Moroccan</option>
  <option value="mosotho">Mosotho</option>
  <option value="motswana">Motswana</option>
  <option value="mozambican">Mozambican</option>
  <option value="namibian">Namibian</option>
  <option value="nauruan">Nauruan</option>
  <option value="nepalese">Nepalese</option>
  <option value="new zealander">New Zealander</option>
  <option value="ni-vanuatu">Ni-Vanuatu</option>
  <option value="nicaraguan">Nicaraguan</option>
  <option value="nigerien">Nigerien</option>
  <option value="north korean">North Korean</option>
  <option value="northern irish">Northern Irish</option>
  <option value="norwegian">Norwegian</option>
  <option value="omani">Omani</option>
  <option value="pakistani">Pakistani</option>
  <option value="palauan">Palauan</option>
  <option value="palestine">Palestine</option>
  <option value="panamanian">Panamanian</option>
  <option value="papua new guinean">Papua New Guinean</option>
  <option value="paraguayan">Paraguayan</option>
  <option value="peruvian">Peruvian</option>
  <option value="polish">Polish</option>
  <option value="portuguese">Portuguese</option>
  <option value="qatari">Qatari</option>
  <option value="romanian">Romanian</option>
  <option value="russian">Russian</option>
  <option value="rwandan">Rwandan</option>
  <option value="saint lucian">Saint Lucian</option>
  <option value="salvadoran">Salvadoran</option>
  <option value="samoan">Samoan</option>
  <option value="san marinese">San Marinese</option>
  <option value="sao tomean">Sao Tomean</option>
  <option value="saudi">Saudi</option>
  <option value="scottish">Scottish</option>
  <option value="senegalese">Senegalese</option>
  <option value="serbian">Serbian</option>
  <option value="seychellois">Seychellois</option>
  <option value="sierra leonean">Sierra Leonean</option>
  <option value="singaporean">Singaporean</option>
  <option value="slovakian">Slovakian</option>
  <option value="slovenian">Slovenian</option>
  <option value="solomon islander">Solomon Islander</option>
  <option value="somali">Somali</option>
  <option value="south african">South African</option>
  <option value="south korean">South Korean</option>
  <option value="spanish">Spanish</option>
  <option value="sri lankan">Sri Lankan</option>
  <option value="sudanese">Sudanese</option>
  <option value="surinamer">Surinamer</option>
  <option value="swazi">Swazi</option>
  <option value="swedish">Swedish</option>
  <option value="swiss">Swiss</option>
  <option value="syrian">Syrian</option>
  <option value="taiwanese">Taiwanese</option>
  <option value="tajik">Tajik</option>
  <option value="tanzanian">Tanzanian</option>
  <option value="thai">Thai</option>
  <option value="togolese">Togolese</option>
  <option value="tongan">Tongan</option>
  <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
  <option value="tunisian">Tunisian</option>
  <option value="turkish">Turkish</option>
  <option value="tuvaluan">Tuvaluan</option>
  <option value="ugandan">Ugandan</option>
  <option value="ukrainian">Ukrainian</option>
  <option value="uruguayan">Uruguayan</option>
  <option value="uzbekistani">Uzbekistani</option>
  <option value="venezuelan">Venezuelan</option>
  <option value="vietnamese">Vietnamese</option>
  <option value="welsh">Welsh</option>
  <option value="yemenite">Yemenite</option>
  <option value="zambian">Zambian</option>
  <option value="zimbabwean">Zimbabwean</option>
</select>
					</div>
					
					
					
    				<div class="wrap-input100 " >
    						<input class="input100" type="text" name="birthdate" placeholder="Date of birth " autocomplete="off" onfocus="(this.type='date')" required>
    						<span class="focus-input100" data-placeholder=""></span>
    				</div>
    
					
					
					<div class="wrap-input100 " >
						<input class="input100" type="text" name="work" placeholder="Work" autocomplete="off" pattern="[a-zA-Z0-9\s]+" required title="work Must Be English">
						<span class="focus-input100" data-placeholder=""></span>
					</div>
					
					
					
						<div class="wrap-input100 " >

						<?php include 'sales.php';?>
					</div>
    
	
		<div class="wrap-input100 " >
						
						<select name="course_type" id="course_type" required class="input100" style="border : none ;">
						<option value="" disabled selected hidden>Attending Type</option>
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
						<button class="login100-form-btn" type="submit" value='send'>
							Sign Up
						</button>
					</div>

				
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	
	<script>
	    
	   /* document.getElementById("phone").addEventListener('click', function(e){
	    
    e.target.value = '+971' + e.target.value;
});*/

$("#phoneField").CcPicker();

$(function(){

  new NiceCountryInput($("#example")).init();

});
function onChangeCallback(ctr){
  console.log("The country was changed: " + ctr);
}
	</script>
  <script type="text/javascript">  
window.addEventListener( "pageshow", function ( event ) {
  var historyTraversal = event.persisted || 
                         ( typeof window.performance != "undefined" && 
                              window.performance.navigation.type === 2 );
  if ( historyTraversal ) {
    // Handle page restore.
    window.location.reload();
  }
});
  </script>
</body>
</html>