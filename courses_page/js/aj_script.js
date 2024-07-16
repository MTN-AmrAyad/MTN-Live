
    $(document).on('change', '.course_select', function(e) {
   
     var f= document.getElementById('zz');
     f.click();
 

    
    });
    
 

      
      // Alert Modal Type
		$(document).on('click', '.note', function(e) {
		    var x=e.target.id;
		    var y=e.target.value;

       
		 var form = document.createElement("div");
  form.innerHTML = `
<form method="POST" id='note_form'  action='create_note.php'>
	<input hidden readonly value='`+x+`' name='user_name'>
  <textarea id="w3review" name="note"  rows="4" cols="50">`+y+`</textarea>
  <br>
    <input type="submit" name="s_n" class="btn btn-primary" value="SAVE" style='background-color: #198754;float: center; transform: translate(-180px, 10px);'>
</form> 
          `;

          swal({
            title: 'NOTE',
            text: 'Write Your Note',
            content: form,
           
          }).then((value) => {
            //console.log(value);
          });

    $("#note_form").submit(function(event) {
          event.preventDefault(); //prevent default action 
          let post_url = $(this).attr("action"); //get form action url
          let request_method = $(this).attr("method"); //get form GET/POST method
          let form_data = $(this).serialize(); //Encode form elements for submission	
         
          $.ajax({
              url: post_url,
              type: request_method,
              data: form_data
            }).done(function(response) { //
              	swal({title: "Good job", text: "Your note has been saved successfully !", icon: "success"}).then(function(){ 
                location.reload();
      }
    );
            }); 
        });

	
		});


   /*  $(document).ready(function(){
  $("#main_form").on("submit", function(){
     
    $("#pageloader").fadeIn();
 setTimeout(function () { window.location.reload(); }, 100);
  });//submit
  
  
  
});


*/
	$(document).on('click', '.restore_user', function(e) {
		   var user_restore = e.target.value;
	
       
	

 Swal.fire({
  title: 'Are You SURE ?',
 
  html:`
<form method="POST" id='restore_user_form'  action='restore_user.php' >
	<input hidden readonly value='`+user_restore+`' name='user_restore'>

  <br>
    <input type="submit" name="user_restore_btn" value="yes" class="btn btn-primary" style="  border-radius: 5px;
    background: #399eef;
    color: #fff;
    border: none;
    padding: 7px 25px;">
</form> 
          `,
  showCloseButton: true,
  showConfirmButton: false,
  showCancelButton: false,
  focusConfirm: false,
  
  confirmButtonAriaLabel: 'Thumbs up, great!',
  cancelButtonText:
    'Cancel',
  cancelButtonAriaLabel: 'Thumbs down'
})
      $("#restore_user_form").submit(function(event) {
          event.preventDefault(); //prevent default action 
          let post_url = $(this).attr("action"); //get form action url
          let request_method = $(this).attr("method"); //get form GET/POST method
          let form_data = $(this).serialize(); //Encode form elements for submission	
         
          $.ajax({
              url: post_url,
              type: request_method,
              data: form_data
            }).done(function(response) { //
               Swal.fire('Saved!', '', 'success');
                location.reload();
    
            }); 
        });

	
		});
		
		
			$(document).on('click', '.delete_user', function(e) {
		   var user_delete = e.target.value;
	
       
	

 Swal.fire({
  title: 'Are You SURE ?',
 
  html:`
<form method="POST" id='delete_user_form'  action='deleteData.php' >
	<input hidden readonly value='`+user_delete+`' name='id'>

  <br>
    <input type="submit"  value="yes" class="btn btn-primary" style="  border-radius: 5px;
    background: #399eef;
    color: #fff;
    border: none;
    padding: 7px 25px;">
</form> 
          `,
  showCloseButton: true,
  showConfirmButton: false,
  showCancelButton: false,
  focusConfirm: false,
  
  confirmButtonAriaLabel: 'Thumbs up, great!',
  cancelButtonText:
    'Cancel',
  cancelButtonAriaLabel: 'Thumbs down'
})
      $("#delete_user_form").submit(function(event) {
          event.preventDefault(); //prevent default action 
          let post_url = $(this).attr("action"); //get form action url
          let request_method = $(this).attr("method"); //get form GET/POST method
          let form_data = $(this).serialize(); //Encode form elements for submission	
         
          $.ajax({
              url: post_url,
              type: request_method,
              data: form_data
            }).done(function(response) { //
               Swal.fire('Saved!', '', 'success');
                location.reload();
    
            }); 
        });

	
		});
		
		
		
		
		


function edit_info(e){
     var form = document.createElement("div");
     var old_value = e.innerText
     var data_id = e.id;
     var edit_data = data_id.split("_") ;
     var user_data_type =edit_data[0];
     var user_name=edit_data[1];

  form.innerHTML = `
<form method="POST" id='edit_form'  action='edit_data.php'>
	<input hidden readonly value='`+user_data_type+`' name='user_data_type'>
	<input hidden readonly value='`+user_name+`' name='user_name'>
  <textarea id="w3review" name="new_value"  rows="4" cols="50">`+old_value+`</textarea>
  <br>
    <input type="submit" name="ssas" class="btn btn-primary" value="SAVE" style='background-color: #198754;float: center; transform: translate(-180px, 10px);'>
</form> 
          `;

          swal({
            title: 'Edit',
            text: 'Edit Your Info',
            content: form,
           
          }).then((value) => {
            //console.log(value);
          });
     $("#edit_form").submit(function(event) {
          event.preventDefault(); //prevent default action 
          let post_url = $(this).attr("action"); //get form action url
          let request_method = $(this).attr("method"); //get form GET/POST method
          let form_data = $(this).serialize(); //Encode form elements for submission	
         
          $.ajax({
              url: post_url,
              type: request_method,
              data: form_data
            }).done(function(response) { //
              	swal({title: "Good job", text: "Your edits has been saved successfully !", icon: "success"}).then(function(){ 
                location.reload();
      }
    );
            }); 
        });

	
}



    
        $("#main_form").submit(function(event) {
             $("#pageloader").fadeIn();
          event.preventDefault(); //prevent default action 
          let post_url = $(this).attr("action"); //get form action url
          let request_method = $(this).attr("method"); //get form GET/POST method
          let form_data = $(this).serialize(); //Encode form elements for submission	
         let clicked_btn =$(document.activeElement).val(); 
        console.log(clicked_btn);
        
        if(clicked_btn == 'give_permissions'){
            form_data = {action:'give_permissions&',form_data};
        }else if(clicked_btn == 'Deny_permissions'){
           
             form_data = {action:'Deny_permissions',form_data};
        }else if(clicked_btn == 'restore_user'){
             var restore_val = $(document.activeElement.firstElementChild).val();
          
            form_data = {action:'restore_user',user_restore:restore_val};
        }else if(clicked_btn == 'delete'){
           var deleted_val = $(document.activeElement.firstElementChild).val();
         
           form_data = {action:'delete',id:deleted_val};
        }
          $.ajax({
              url: post_url,
              type: request_method,
              data: form_data,
             
            }).done(function(response) { //
            console.log(response);
              	swal({title: "Good job", text: "Your work has been saved successfully !", icon: "success"}).then(function(){ 
                location.reload();
      }
    );
            }); 
        });
        
        
    $(function() {
    $('td').click(function() {
        $('tr').removeClass('active_row');
              $('td').removeClass('active_cell');
              $('td').removeClass('active_cell_2');
        $(this).parent().addClass('active_row'); 
       let cell_name =$(this).parent().children('td')[1];
       let cell_phone =$(this).parent().children('td')[2];
   
       $(cell_name).addClass('active_cell');
       $(cell_phone).addClass('active_cell_2');
        
    });
});   

   $("#delete_form").submit(function(event) {
          event.preventDefault(); //prevent default action 
          let post_url = $(this).attr("action"); //get form action url
          let request_method = $(this).attr("method"); //get form GET/POST method
          let form_data = $(this).serialize(); //Encode form elements for submission	
         
          $.ajax({
              url: post_url,
              type: request_method,
              data: form_data
            }).done(function(response) { //
              	swal({title: "Good job", text: "Record  has been deleted successfully !", icon: "success"}).then(function(){ 
                location.reload();
      }
    );
            }); 
        });



