<head>
  <title>How to use and customize SweetAlert2</title>
  <!-- jQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
    <script src="https://unpkg.com/vue-swal"></script>

</head>

<body>
  <div>

    <div>
  
      <button id="success">NOTE</button>
    </div>
    
    
  </div>
  <script>
      
      // Alert Modal Type
		$(document).on('click', '.success', function(e) {
		 var form = document.createElement("div");
  form.innerHTML = `
<form method="POST" action="note.php">
	<input hidden readonly value='3' name='workshop'>
  <textarea id="w3review" name="note" rows="4" cols="50"></textarea>
  <br>
    <input type="submit" name="submit" value="Submit">
</form> 
          `;

          swal({
            title: 'NOTE',
            text: 'Write Your Note',
            content: form,
           
          }).then((value) => {
            //console.log(value);
          });
	
	
		});

	
		 window.changeHours = function (value){
       var tfHours = document.getElementById("tfHours");
       tfHours.innerHTML = value;
     }
     window.changeMinutes = function (value){
       var tfMinutes = document.getElementById("tfMinutes");
       tfMinutes.innerHTML = value;
     }
  </script>
</body>