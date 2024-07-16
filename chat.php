    <?php
        require 'model/course.php';
        require 'view/header.php';
                         $coursecode1 = Course::get_courses_data($id);
                foreach ($coursecode1 as $index => $member):
                         $coursecalander = Course::get_courses_calender($member['coursecode']);

          ?>
          <!-- MAIN -->
          <div
            class="w-100 row mx-0 p-4"
            id="main-container"
            style="height: 650px; overflow: hidden"
          >
              
           <iframe
              class="d-flex align-items-center flex-column h-100"
               style="overflow-y:auto;background-size: cover"
              id="calendar-bg-container"
              src="<?php echo $chat ?>"
            >
              
              
              
              
            </iframe>
          </div>
          <?php
                          endforeach;

          require 'view/footer.php';
          ?>