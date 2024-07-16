<?php
	
        include 'db_conn.php';
        
  
    $commenttext= $_POST['comment'];
    $name= $_POST['name'];
    
    	$sql2 = "SELECT * FROM userData where password='$name'";
		$resultt = $conn->query($sql2);
        	while($roww = $resultt->fetch_assoc()) {

		$finalname=$roww['username'];
		$group_type=$roww['group_type'];
		$username=$roww['name'];
        			  }
		
		
		
		
		
		if($commenttext==""){

		    
		    
		    
		    
		    
		    
		    
		    
		}else{
		    
		    
		    
		    
		    $sqll = "INSERT INTO chat (name, message , group_id,user)
		VALUES ('$finalname','$commenttext','$group_type','$username')";

$conn->query($sqll);
		}
		
    
    
    
			$sql = "SELECT * FROM chat where group_id='$group_type'";
			$result = $conn->query($sql);
            $stateData="";
			if ($result->num_rows > 0) {
			  // output data of each row
			  while($row = $result->fetch_assoc()) {
			      
			   
			          	      
			      if($finalname!=$row['name']){
			          
			          
			           $stateData.='
         <div class="row" style="direction: rtl;">
		 <div
              style="border-radius: 25px; height: fit-content ; width: fit-content"
              class="p-2 d-flex flex-column gap-0 "
            >
              <p class="m-0 ms-2 mb-1 text-black" style=" width: fit-content">'.$row['user'].'</p>
             <span
                style="
                  border-radius: 25px;
                  height: fit-content;
                  
                "
                class="p-3 gap-0 bg-white fw-normal"
                
              >
               '. $row["message"].'
              </span>
             
            </div>
            </div>
         ';
			      
			      
			          
			          
			      }elseif($finalname==$row['name']){
			      
			              $stateData.='
			                <div class="row" style="direction: ltr;">
        
		 <div
              style="border-radius: 25px; height: fit-content ; width: fit-content"
              class="p-2 d-flex flex-column gap-0"
            >
              <p class="m-0 ms-2 mb-1 text-black " >'.$row['user'].' </p>
             <span
                style="
                  border-radius: 25px;
                  height: fit-content;
                  
                "
                class="p-3 gap-0 bg-white fw-normal"
                
              >
               '. $row["message"].'
              </span>
            </div>
            </div>
         ';
			      
			      
			  }
			      
			  }
    

        
			}


 echo $stateData;
 
 
