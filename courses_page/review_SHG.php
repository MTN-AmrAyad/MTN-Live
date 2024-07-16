
   
   
    <head>
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
body {
        height: 80vh;
      }

          </style>
    </head>
    
    
<body>
             <nav class="navbar navbar-light bg-light px-5">
      <div
        class="d-flex justify-content-center align-items-center flex-wrap w-100"
      >
        <div class="" style="width: 120px; height: 60px">
          <img
            src="https://managethenow.net/mtn-live/view/imgs/logos/logo-SHG.png"
            alt=""
            style="object-fit: contain"
            class="w-100 h-100"
          />
        </div>
        <!--<div>-->
        <!--  <button class="btn btn-outline-danger">Log Out</button>-->
        <!--</div>-->
      </div>
    </nav>
    
    
    
    
         <?php 
define('DB_HOST', 'localhost');
define('DB_NAME', 'u471974205_shg_discussion');
define('DB_USER', 'u471974205_shg_discussion');
define('DB_PASS', 'Z0aUKaHcF]0');
$dbh =  new PDO('mysql:dbhost='.DB_HOST.';dbname=' .DB_NAME , DB_USER, DB_PASS);

         global $dbh;

        $sql = $dbh->prepare("SELECT * FROM users_discussion");
        $sql->execute();
        $data = null;
        while($fetch = $sql->fetch(PDO::FETCH_ASSOC))
        {
            $data[] = $fetch;
        }
        

    
     ?> 


    <div class="d-flex flex-column justify-content-between h-100" style="overflow-y: auto;">
      <div class="px-lg-5 px-0 ">
        <table class="table table-striped">
           <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">email</th>
      <th scope="col">Country </th>
      <th scope="col">Phone Number</th>
      <th scope="col">Nationality</th>
      <th scope="col">Date Of Birth</th>
      <th scope="col">Work </th>
      
      <!--<th scope="col">Created At </th>-->


    </tr>
  </thead>
         <tbody>

   <?php 
   
   
              foreach ($data as $index => $member):
                                 $var=$index+1;
                                        echo '<tr>'
                                            .'<td scope="row">'. $var.'</td>'
                                             .'<td>'. $member['full_name'] .'</td>'
                                             .'<td>'. $member['email'] .'</td>'
                                             .'<td>'. $member['country'] .'</td>'
                                             .'<td>'. $member['phone'] .'</td>'
                                             .'<td>'. $member['nationality'] .'</td>'
                                             .'<td>'. $member['dateofbirth'] .'</td>'
                                             .'<td>'. $member['work'] .'</td>'
                                            //  .'<td>'. $member['created_at'] .'</td>'
                                             ;

                                    endforeach;
   
   ?>
  </tbody>
        </table>
      </div>

    </div>







    <footer>
        <div class="container">
          <hr />
          <div class="footer-bottom">
            <div class="d-flex justify-content-center">
              <div class="">
                <p class="text-center">
                  MTN Dev Team @ 2023 All rights reserved
                </p>
              </div>
            </div>
          </div>
        </div>
      </footer>




    </body>
    
    
    
    
