<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LogIn Page</title>
    <link rel="stylesheet" href="css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body class="py-4 bg-slate-200">
    <div id="navbar" class="flex flex-col items-center justify-center mb-5">
      <img src="./images/Logo.png" />
    </div>
    <div class="flex flex-col items-center gap-5 px-4 lg:px-52">
      <!-- Container -->
      <div
        class="flex flex-col w-full justify-between h-[86vh] px-4 pt-10 lg:px-10 lg:pt-12 bg-white rounded-xl"
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
                <h4 class="gap-5 text-2xl font-bold">LogIn</h4>
              </div>
<?php  $coursecode = 600;?>
              <form action="finish_add_course.php?coursecode=<?php echo $coursecode?>" method="POST" class="flex flex-col gap-6">
                <label
                  for="username"
                  class="-mb-3 text-base font-bold lg:text-base"
                  >Username</label
                >
                <input
                  type="text"
                  id="username"
                  autocomplete="username"
                  name="username"
                  class="form-control border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                  placeholder="Please enter your username..."
                  required
                />
                <label
                  for="password"
                  class="-mb-3 text-base font-bold lg:text-base"
                  >Password</label
                >
                <input
                  type="password"
                  name="password"
                  required
                  id="password"
                  autocomplete="current-password"
                  class="form-control border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                  placeholder="Please enter your password..."
                />
                
                <input hidden value="0" name="course_type" />
                <input hidden value="0" name="attendance" />
                <button
                  class="text-white bg-[#24292F] w-full text-center hover:bg-[#24292F]/90 focus:ring-4 focus:outline-none focus:ring-[#24292F]/50 font-medium rounded-lg text-sm px-5 py-2.5"
                >
                  LogIn
                </button>
              </form>
              <div class="flex items-center gap-2">
                <hr class="w-full" />
                <p class="w-full text-sm font-thin">Don't have account ?</p>
                <hr class="w-full" />
              </div>
              <a
                href="signup.php"
                class="text-black w-full text-center hover:bg-[#24292F] hover:text-white ring-1 ring-[#24292F]/50 font-medium rounded-lg text-sm px-5 py-2.5"
              >
                SignUp
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- <script src="js/checkout.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="./js/charge.js"></script> -->
  </body>
</html>
