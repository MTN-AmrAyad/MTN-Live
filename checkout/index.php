<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Checkout Page</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/country-code-form.css" />

    <!-- Cairo Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
      rel="stylesheet"
    />

    <script src="https://cdn.tailwindcss.com"></script>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!-- Flags CDN  -->
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
    <script src="js/localization.js"></script>
  </head>
  <body class="py-4 bg-slate-200">
    <div
      id="navbar"
      class="flex flex-row items-center justify-between mb-5 pl-4 pr-4"
    >
      <img src="./images/Logo.png" class="visible lg:invisible flex" />
      <img
        src="./images/Logo.png"
        class="invisible lg:visible hidden lg:block"
      />
      <div
        class="test h-[50px] flex items-center justify-center lg:justify-start"
      >
        <button
          onclick="changeLanguage()"
          class="border w-[120px] p-1 rounded-lg border-[#3e64de] bg-transparent hover:bg-[#3e64de] hover:text-white transition-all duration-300 ease-in-out flex justify-center items-center right-5"
        >
          <span class="text-lg">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              strokeWidth="{1.5}"
              stroke="currentColor"
              className="w-4 h-4 mt-2"
              style="width: 25px; margin-top: 2px"
            >
              <path
                strokeLinecap="round"
                strokeLinejoin="round"
                d="m6.115 5.19.319 1.913A6 6 0 0 0 8.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 0 0 2.288-4.042 1.087 1.087 0 0 0-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 0 1-.98-.314l-.295-.295a1.125 1.125 0 0 1 0-1.591l.13-.132a1.125 1.125 0 0 1 1.3-.21l.603.302a.809.809 0 0 0 1.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 0 0 1.528-1.732l.146-.292M6.115 5.19A9 9 0 1 0 17.18 4.64M6.115 5.19A8.965 8.965 0 0 1 12 3c1.929 0 3.716.607 5.18 1.64"
              />
            </svg>
          </span>
          <span class="text-lg text-span font-[Cairo]">Ar</span>
        </button>
      </div>
    </div>

    <div class="flex flex-col items-center gap-5 px-4 lg:px-52">
      <!-- Welcome -->
      <div class="flex flex-col gap-5">
        <h2
          class="text-3xl font-semibold text-center lg:text-4xl"
          data-translate="You are almost there"
        >
          You are almost there
        </h2>
      </div>
      <!-- Container -->
      <div
        class="flex flex-col w-full gap-5 px-4 pt-10 pb-10 bg-white lg:px-10 lg:pt-12 rounded-xl"
      >
        <!-- Check points -->
        <div
          class="flex flex-wrap items-center justify-center gap-3 border-b-[1px] text-zinc-500 pb-3"
        >
          <div class="flex items-center gap-3">
            <i class="fa-regular fa-circle-dot"></i>
            <p data-translate="Information">Information</p>
          </div>
          <hr class="hidden w-20 h-px my-8 bg-gray-200 border-0 md:block" />
          <div class="flex items-center gap-3">
            <i class="fa-regular fa-circle-dot text-violet-500"></i>
            <p class="font-bold text-black" data-translate="Checkout">
              Checkout
            </p>
          </div>
          <hr class="hidden w-20 h-px my-8 bg-gray-200 border-0 md:block" />
          <div class="flex items-center gap-3">
            <i class="fa-regular fa-circle"></i>
            <p data-translate="Finish">Finish</p>
          </div>
        </div>
        <!-- Billing Details -->
        <div class="flex flex-wrap-reverse gap-5 lg:gap-0">
          <!-- P1 -->
          <div class="flex flex-col w-full gap-5 px-2 lg:w-3/5">
            <!-- Choose -->
            <?php
            if($_GET['coursecode']==8){
                echo'           
                <div class="flex-col hidden gap-5 items lg:flex">
              <h4
                class="text-xl font-bold lg:text-2xl"
                data-translate="Choose Attendance Type"
              >
                Choose Attendance Type
              </h4>

              <div
                class="flex-col hidden gap-2 rounded-md lg:inline-flex"
                id="attendance-type"
                role="group"
              >
                <div class="flex items-center gap-2">
                  <input
                    type="radio"
                    id="online"
                    onclick="selectHandler(event)"
                    value="online"
                    name="attendance-type"
                  />
                  <label
                    class="cursor-pointer"
                    for="online"
                    data-translate="Standard"
                    >Standard
                    <span class="text-sm"> (Free)</span>
                  </label>
                  <!---Alert Msg Standard-->
                  <div
                    id="alertMessageStandard"
                    class="hidden p-2 text-[13px] text-blue-800 rounded-lg bg-blue-50 border border-blue-300 dark:text-blue-400"
                    role="alert"
                  >
                    <span data-translate="info-alert-msg-standard">
                      You can attend the event online for free or live in the
                      hall for 150$.
                    </span>
                  </div>
                </div>
                <div class="flex items-center gap-2">
                  <hr class="w-10" />
                  <p class="font-thin" data-translate="or">or</p>
                  <hr class="w-10" />
                </div>
                <div class="flex items-center gap-2">
                  <input
                    type="radio"
                    onclick="selectHandler(event)"
                    id="live"
                    value="live"
                    name="attendance-type"
                  />
                  <label
                    class="cursor-pointer"
                    data-translate="Premium"
                    for="live"
                    >Premium</label
                  >
                  <!---Alert Msg Premium-->
                  <div
                    id="alertMessagePremium"
                    class="hidden p-2 text-[13px] text-blue-800 rounded-lg bg-blue-50 border border-blue-300 dark:text-blue-400"
                    role="alert"
                  >
                    <span data-translate="info-alert-msg-premium">
                      You can attend the event online for free or live in the
                      hall for 150$.
                    </span>
                  </div>
                </div>
              </div>
            </div>
';}
            
            ?>
            <!-- Payment Gateway Section Web-->
            <div class="flex flex-col gap-3 payment-inputs">
              <h4
                class="text-xl font-bold lg:text-2xl"
                data-translate="Payment Details"
              >
                Payment Details
              </h4>
              <form
                action="./charge.php"
                method="post"
                id="payment-form"
                class="flex flex-col gap-3"
              >
                <div class="form-row">
                 
                  <input
                    type="text"
                    name="coursecode"
                    class="mb-3 form-control StripeElement StripeElement--empty"
                    placeholder="coursecode"
                    hidden
                    value="<?php echo $_GET['coursecode'];?>"
                  />
                  
                  <input
                    type="text"
                    name="amount"
                    class="mb-3 form-control StripeElement StripeElement--empty"
                    placeholder="Last Name"
                    id="amount"
                    hidden
                  />
                  <div class="flex flex-wrap gap-1 mb-3 lg:flex-nowrap">
                    <input
                      type="text"
                      id="fullname"
                      autocomplete="fullname"
                      data-translate="Fullname"
                      name="fullname"
                      class="form-control border border-gray-300 text-gray-900 text-sm rounded-lg block lg:w-4/5 w-full p-2.5 placeholder:text-sm focus-visible:outline-0"
                      placeholder="Fullname"
                      required
                    />
                    <input
                      type="email"
                      name="email"
                      required
                      data-translate="Email"
                      id="email"
                      autocomplete="email"
                      class="form-control border border-gray-300 text-gray-900 text-sm rounded-lg block lg:w-4/5 w-full p-2.5 focus-visible:outline-0"
                      placeholder="Email"
                    />
                    <!-- Mobile Phone -->
                    <div class="w-full input-group">
                      <div
                        class="gap-2 form-input-wrapper select-box d-flex flex-column col-lg-6 pad-l-8"
                      >
                        <div
                          class="flex items-center w-full gap-2 overflow-hidden bg-white rounded-md selected-option"
                        >
                          <div
                            class="flex items-center h-full"
                            style="border-radius: 0px !important"
                          >
                            <span class="fw-light">Code</span>
                          </div>
                          <input
                            name="phone"
                            type="tel"
                            style="border-radius: 0px !important"
                            class="phone-input"
                            id="phone-input"
                            required
                            placeholder="Phone Number"
                            data-translate="Phone Number"
                          />
                        </div>
                        <div class="options">
                          <input
                            type="text"
                            class="search-box"
                            placeholder="Search Country Name"
                            data-translate="Search Country Name"
                          />
                          <ol></ol>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    id="card-element"
                    class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                  >
                    <!-- a Stripe Element will be inserted here. -->
                  </div>

                  <!-- Used to display form errors -->
                  <div id="card-errors" role="alert"></div>
                </div>

                <button data-translate="Submit Payment">Submit Payment</button>
                <!--<div class="flex items-center gap-1">-->
                <!--  <svg-->
                <!--    xmlns="http://www.w3.org/2000/svg"-->
                <!--    viewBox="0 0 24 24"-->
                <!--    fill="currentColor"-->
                <!--    class="w-5 h-5 text-orange-700"-->
                <!--  >-->
                <!--    <path-->
                <!--      fill-rule="evenodd"-->
                <!--      d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm8.706-1.442c1.146-.573 2.437.463 2.126 1.706l-.709 2.836.042-.02a.75.75 0 0 1 .67 1.34l-.04.022c-1.147.573-2.438-.463-2.127-1.706l.71-2.836-.042.02a.75.75 0 1 1-.671-1.34l.041-.022ZM12 9a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"-->
                <!--      clip-rule="evenodd"-->
                <!--    />-->
                <!--  </svg>-->

                <!--  <p-->
                <!--    class="text-sm text-orange-700"-->
                <!--    data-translate="Stripe Amount">-->
                <!--    The amount you will be charged by Stripe is 4%.-->
                <!--  </p>-->
                <!--</div>-->
              </form>
            </div>
          </div>
          <!-- P2 -->
          <div class="flex flex-col w-full gap-5 px-2 lg:w-2/5">
            <!-- Choose Mobile -->
            
               <?php
            if($_GET['coursecode']==8){
            echo'<div class="flex flex-col gap-5 lg:hidden">
              <h4
                data-translate=" Choose Attendance Type"
                class="mt-3 text-xl font-bold lg:text-2xl"
              >
                Choose Attendance Type
              </h4>

              <div
                class="inline-flex flex-col gap-2 rounded-md lg:hidden"
                id="attendance-type"
                role="group"
              >
                <div class="flex flex-col md:flex-row gap-2">
                  <div class="flex items-center gap-2">
                    <input
                      type="radio"
                      id="onlineMob"
                      onclick="selectHandler(event)"
                      value="online"
                      name="attendance-type"
                      class="mt-1"
                    />
                    <label data-translate="Standard" for="onlineMob"
                      >Standard
                      <span data-translate="(Free)" class="text-sm">
                        (Free)</span
                      >
                    </label>
                  </div>
                  <!---Alert Msg Standard-->
                  <div
                    id="alertMessageStandard2"
                    class="hidden p-2 text-[13px] text-blue-800 rounded-lg bg-blue-50 border border-blue-300 dark:text-blue-400"
                    role="alert"
                  >
                    <span data-translate="info-alert-msg-standard">
                      You can attend the event online for free or live in the
                      hall for 150$.
                    </span>
                  </div>
                </div>
                <div class="flex items-center gap-2">
                  <hr class="w-10" />
                  <p data-translate="or" class="font-thin">or</p>
                  <hr class="w-10" />
                </div>
                <div class="flex flex-col md:flex-row gap-2">
                  <div class="flex items-center gap-2">
                    <input
                      type="radio"
                      onclick="selectHandler(event)"
                      id="liveMob"
                      value="live"
                      name="attendance-type"
                      class="mt-1"
                    />
                    <label data-translate="Premium" for="liveMob"
                      >Premium</label
                    >
                  </div>
                  <!---Alert Msg Premium-->
                  <div
                    id="alertMessagePremium2"
                    class="hidden p-2 text-[13px] text-blue-800 rounded-lg bg-blue-50 border border-blue-300 dark:text-blue-400"
                    role="alert"
                  >
                    <span data-translate="info-alert-msg-premium">
                      You can attend the event online for free or live in the
                      hall for 150$.
                    </span>
                  </div>
                </div>
              </div>
            </div>';
            }?>
            <h4
              class="text-xl font-bold lg:text-2xl"
              data-translate="Your Order"
            >
              Your Order
            </h4>
            <div
              class="w-full bg-white border border-gray-200 rounded-lg shadow lg:max-w-sm"
            >
              <!-- Course  -->
              <div
                class="flex items-center justify-between p-4 border-b text-neutral-500"
              >
                <p data-translate="Original Price">Original Price</p>
                <p id="item-price">
                    <?php
                    if($_GET['coursecode']==8){
                        echo ' $600';
                    }elseif($_GET['coursecode']==7){
                        echo ' $600';
                    }
                   elseif($_GET['coursecode']==5){
                        echo ' $700';
                    }
                   
    
                    ?>
                    </p>
              </div>

              <!-- Discount -->
              <div
                class="flex items-center justify-between p-4 border-b text-neutral-500"
              >
                <p data-translate="Discount">Discount</p>
                <div class="flex">
                  <span>-</span>
                  <p id="item-discount">
                     
                       <?php
                    if($_GET['coursecode']==8){
                        echo ' $150';
                    }elseif($_GET['coursecode']==7){
                        echo ' $100';
                    }elseif($_GET['coursecode']==5){
                        echo ' $310';
                    }
                   
                    
                    ?>
                      
                      </p>
                </div>
              </div>
              <!-- Coupon -->
              <!--<div-->
              <!--  id="applied-coupone-checkout"-->
              <!--  class="items-center justify-between hidden p-4 border-b text-neutral-500">-->
              <!--  <p data-translate="Applies Coupon">Applies Coupon</p>-->
              <!--  <div class="flex">-->
              <!--    <span>-</span>-->
              <!--    <p id="applied-coupone">$15</p>-->
              <!--  </div>-->
              <!--</div>-->
              <!-- Live Attendance Fees  -->
              <!--<div-->
              <!--  id="live-attendance-fees-checkout"-->
              <!--  class="items-center justify-between hidden p-4 border-b text-neutral-500">-->
              <!--  <p data-translate="Live Attendance Fees">-->
              <!--    Live Attendance Fees-->
              <!--  </p>-->
              <!--  <p id="live-attend-fees">$150</p>-->
              <!--</div>-->
              <!-- Payment Getway Fees  -->
              <div
                class="flex items-center justify-between p-4 border-b text-neutral-500"
              >
                <p data-translate="Gateway Fees">Gateway Fees</p>
                <p id="paymet-getway-fees"></p>
              </div>
              <!-- Total  -->
              <div
                class="flex items-center justify-between px-4 py-6 text-lg font-semibold text-black border-b"
              >
                <p data-translate="Total">Total</p>
                <p id="total-price">468$</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="js/checkout.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="./js/charge.js"></script>
    <script src="./js/flagsHandler.js"></script>
  </body>
</html>
