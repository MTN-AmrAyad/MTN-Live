

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SignUp Page</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/country-code-form.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!--Dropdown CDN-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/tom-select/2.2.2/css/tom-select.bootstrap5.min.css"
      integrity="sha512-mNN7o87hQqtNCCGWxFVdlVdaKF6d4S1wVMi3+ftJYnW572YIo0KPjK1Cns5SPlyCtKGp1Nu+z26MJUNXmpbjKA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/tom-select/2.2.2/js/tom-select.complete.js"
      integrity="sha512-KfTOBVJv8qnV1b+2tsbTLepS7+RAgmVV0Odk6cj1eHxbR8WFX99gwIWOutwFAUlsve3FaGG3VxoPWWLRnehX1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>

    <!-- Flatpicker CDN -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <!-- Flags CDN  -->
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
  </head>
  <body class="py-4 bg-slate-200">
    <div id="navbar" class="flex flex-col items-center justify-center mb-5">
      <img src="./images/Logo.png" />
    </div>
    <div class="flex flex-col items-center gap-5 px-4 lg:px-52">
      <!-- Container -->
      <div
        class="flex flex-col justify-between w-full px-4 pt-10 pb-10 bg-white lg:px-10 lg:pt-12 rounded-xl"
      >
        <!-- Check points -->
        <div
          class="flex flex-wrap items-start lg:items-center justify-center gap-3 border-b-[1px] text-zinc-500 pb-3"
        >
          <div class="flex items-center gap-3">
            <i class="fa-regular fa-circle-dot text-violet-500"></i>

            <p class="font-bold text-black">Information</p>
          </div>
          <hr class="hidden w-20 h-px my-8 bg-gray-200 border-0 md:block" />
          <div class="flex items-center gap-3">
            <i class="fa-regular fa-circle"></i>
            <p>Checkout</p>
          </div>
          <hr class="hidden w-20 h-px my-8 bg-gray-200 border-0 md:block" />
          <div class="flex items-center gap-3">
            <i class="fa-regular fa-circle"></i>
            <p>Finish</p>
          </div>
        </div>
        <div class="flex items-center justify-center w-full h-full">
          <!-- Login -->
          <div class="flex flex-col items-center w-full gap-5 lg:gap-0">
            <div class="flex flex-col w-full gap-5 lg:max-w-screen-lg lg:w-96">
              <div class="">
                <h4 class="gap-5 mt-10 text-2xl font-bold">SignUp</h4>
              </div>
              
              <?php  $coursecode = 600;
                if(isset($_POST['generate'])){
                  $char=$_POST['name'];
                  $birth=$_POST['birthdate'];
                  $phone=$_POST['phonenumber'];
                  $city=$_POST['city'];
                  $work=$_POST['work'];
                  $email=$_POST['email'];
                  
            
                  
              }
              ?>
              

              <form action="finish.php?coursecode=<?php echo $coursecode ?>" class="flex flex-col gap-6" method="POST">
                  <!--<input hidden value="0" name="nationality" />-->
                  <!--<input hidden value="0" name="work" />-->
                  <!--<input hidden value="0" name="course_type" />-->
                  <!--<input hidden value="0" name="attendance" />-->
                  
                  
                <div class="flex flex-wrap gap-4 lg:flex-nowrap">
                  <div class="flex flex-col w-full gap-6">
                    <label
                      for="firstname"
                      class="-mb-3 text-base font-bold lg:text-base"
                      >First name</label
                    >
                    <input
                      type="text"
                      id="firstname"
                      autocomplete="firstname"
                      name="f-name"
                      class="form-control border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 placeholder:text-sm"
                      placeholder="Firstname"
                      required
                    />
                   
                  </div>
                  <div class="flex flex-col w-full gap-6">
                    <label
                      for="lastname"
                      class="-mb-3 text-base font-bold lg:text-base"
                      >Last name</label
                    >
                    <input
                      type="text"
                      name="all-name"
                      required
                      id="lastname"
                      autocomplete="current-password"
                      class="form-control border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                      placeholder="Lastname"
                    />
                  </div>
                </div>
                <!-- Email -->
                <label
                  for="email"
                  class="-mb-3 text-base font-bold lg:text-base"
                  >Email</label
                >
                <input
                  type="email"
                  name="email"
                  required
                  id="email"
                  autocomplete="email"
                  class="form-control border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                  placeholder="Email"
                />
                <!-- Country -->
                <label
                  for="country"
                  class="-mb-3 text-base font-bold lg:text-base"
                  >Country</label
                >
                <select
                  name="country"
                  id="country"
                  required
                  class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-lg form-control focus:ring-blue-500 focus:border-blue-500"
                ></select>

                <label
                  for="country"
                  class="-mb-3 text-base font-bold lg:text-base"
                  >Mobile Number</label>
                
                <!-- Mobile Phone -->
                <div class="input-group">
                  <div
                    class="gap-2 form-input-wrapper select-box d-flex flex-column col-lg-6 pad-l-8"
                  >
                    <div
                      class="gap-2 overflow-hidden bg-white selected-option w-100 d-flex align-items-center border-rad"
                    >
                      <div
                        class="flex items-center h-full"
                        style="border-radius: 0px !important"
                      >
                        <span class="fw-light">Code</span>
                      </div>
                      <input
                        name="phonenumber"
                        type="tel"
                        style="border-radius: 0px !important"
                        class="phone-input"
                        id="phone-input"
                        required
                        placeholder="Phone Number"
                      />
                    </div>
                    
                    <input hidden value="0" name="nationality" />
                    
                    <div class="options">
                      <input
                        type="text"
                        class="search-box"
                        placeholder="Search Country Name"
                      />
                      <ol></ol>
                    </div>
                  </div>
                </div>
                <!-- BirhtDate -->
                <label
                  for="birhtDate"
                  class="-mb-3 text-base font-bold lg:text-base"
                  >Birth date</label
                >
                <input
                  name="birthdate"
                  id="birthDate"
                  type="date"
                  placeholder="Please enter your birht date..."
                  class="form-control border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                />
                <input hidden value="0" name="course_type" />
                <input hidden value="0" name="attendance" />

                <button
                type="submit" value='send'
                  class="text-white bg-[#24292F] w-full text-center hover:bg-[#24292F]/90 focus:ring-4 focus:outline-none focus:ring-[#24292F]/50 font-medium rounded-lg text-sm px-5 py-2.5"
                >
                  SignUp
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="./js/flatpicker.js"></script>
    <script src="./js/flagsHandler.js"></script>
  </body>
</html>
