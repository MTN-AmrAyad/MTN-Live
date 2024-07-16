 <?php
	
        include 'db_conn.php';
        
        $name= $_GET['name'];
    
    	$sql2 = "SELECT * FROM userData where password='$name'";
		$resultt = $conn->query($sql2);
        	while($roww = $resultt->fetch_assoc()) {

		$group_type=$roww['group_type'];
				$finalname=$roww['username'];

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
              style="border-radius: 12px; height: fit-content ; width: fit-content"
              class="p-2 d-flex flex-column gap-0 "
            >
              <p class="m-0 ms-2 mb-1 text-black" style=" width: fit-content">'.$row['user'].'</p>
             <span
                style="
                  border-radius: 12px 0px 12px 12px;
                  height: fit-content;
                 ; background:#f8f8f8
                  ;padding: 12px;

                "
                class=" gap-0  fw-normal"
                
              >
               '. $row["message"].'
              </span>
            </div>
            </div>
         ';
			      
			      
			          
			          
			      }elseif($row['name']==$finalname){
			      
			              $stateData.='
        <div class="row" style="direction: ltr;" >
		 <div
              style="border-radius: 12px; height: fit-content ; width: fit-content"
              class="p-2 d-flex flex-column gap-0"
            >
              <p class="m-0 ms-2 mb-1 text-black " style=" width: fit-content ; ">'.$row['user'].'</p>
             <span
                style="
                  border-radius: 0px 12px 12px 12px;
                  height: fit-content;
                  ; background:#164194
                  ;padding: 12px;
                  
                "
                class=" gap-0 fw-normal text-white"
                
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
