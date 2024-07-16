
<?php 

        require_once 'model/course.php';
        require_once 'view/header.php';
        $id = $_GET['id'];



  $coursecode1 = Course::get_courses_data($id);
                foreach ($coursecode1 as $index => $member):
                         $coursecalander = Course::get_courses_calender($member['coursecode']);
?>

<!-- MAIN -->
          <div class="w-100 d-flex flex-column p-3 p-md-4" id="main-container" style="height: 660px; overflow: hidden;justify-content: center;
    align-items: center;">
              

    <iframe
      src="Healing Center Shortcuts.pdf#toolbar=0"
      width="100%"
      height="100%"
style="zoom: 0.67;"
    ></iframe>
              
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script>
            $('#expand-button').click(function() {
	$('.profile-card').toggleClass('expand');
})
        </script>
<?php
                          endforeach;

require_once 'view/footer.php';

?>
