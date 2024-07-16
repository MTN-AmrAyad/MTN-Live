<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Checkout Page</title>
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
    <div id="navbar" class="flex flex-col items-center justify-center">
      <img src="./images/Logo.png" />
    </div>
    <div class="flex flex-col items-center gap-5 px-10 lg:px-52">
      <!-- Welcome -->
      <div class="flex flex-col gap-5">
        <h2 class="text-4xl font-semibold text-center">You are almost there</h2>
      </div>
      <!-- Container -->
      <div
        class="flex flex-col w-full gap-5 px-10 pt-12 pb-8 bg-white rounded-xl"
      >
        <!-- Check points -->
        <div
          class="flex flex-wrap items-center justify-center gap-3 border-b-[1px] text-zinc-500 pb-3"
        >
          <div class="flex items-center gap-3">
            <i class="fa-regular fa-circle-dot"></i>
            <p>Information</p>
          </div>
          <hr class="hidden w-20 h-px my-8 bg-gray-200 border-0 md:block" />
          <div class="flex items-center gap-3">
            <i class="fa-regular fa-circle-dot text-violet-500"></i>
            <p class="font-bold text-black">Checkout</p>
          </div>
          <hr class="hidden w-20 h-px my-8 bg-gray-200 border-0 md:block" />
          <div class="flex items-center gap-3">
            <i class="fa-regular fa-circle"></i>
            <p>Finish</p>
          </div>
        </div>
        <!-- Billing Details -->
        <div class="flex flex-wrap-reverse gap-5 lg:gap-0">
          <!-- P1 -->
          <div class="flex flex-col w-full gap-5 px-2 lg:w-3/5">
            <!-- Choose -->
            <div class="flex-col hidden gap-5 lg:flex">
              <h4 class="text-xl font-bold lg:text-2xl">
                Choose Attendance Type
              </h4>

              <div
                class="hidden gap-2 rounded-md lg:inline-flex"
                id="attendance-type"
                role="group"
              >
                <button
                  type="button"
                  name="live"
                  class="px-4 py-2 text-sm font-medium border border-gray-200 rounded-lg focus:z-10"
                >
                  Live (In the hall + 150$)
                </button>

                <button
                  type="button"
                  name="online"
                  class="px-4 py-2 text-sm font-medium border border-gray-200 rounded-lg focus:z-10"
                >
                  Online
                </button>
              </div>
            </div>
            <!-- Payment Gateway Section Web-->
            <div class="flex flex-col gap-3">
              <h4 class="text-xl font-bold lg:text-2xl">Payment Details</h4>
              <form
                action="./charge.php"
                method="post"
                id="payment-form"
                class="flex flex-col gap-3"
              >
                <div class="form-row">
                  <input
                    type="text"
                    name="first_name"
                    class="mb-3 form-control StripeElement StripeElement--empty"
                    placeholder="First Name"
                    value="<?php echo $_GET['first_name']?>"
                    
                  />
                  <!--<input-->
                  <!--  type="text"-->
                  <!--  name="last_name"-->
                  <!--  class="mb-3 form-control StripeElement StripeElement--empty"-->
                  <!--  placeholder="Last Name"-->
                    
                    
                  <!--/>-->
                  <input
                    type="text"
                    name="amount"
                    class="mb-3 form-control StripeElement StripeElement--empty"
                    placeholder="Last Name"
                    id="amount"
                    hidden
                  />
                  <input
                    type="email"
                    name="email"
                    class="mb-3 form-control StripeElement StripeElement--empty"
                    placeholder="Email Address"
                    value="<?php echo $_GET['email']?>"
                
                  />
                  <input
                    type="phone"
                    name="phone"
                    class="mb-3 form-control StripeElement StripeElement--empty"
                    placeholder="Phone number"
                    value="<?php
                  echo $_GET['phone']
                  ?>"
                
                  />
                  <div
                    id="card-element"
                    class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                  >
                    <!-- a Stripe Element will be inserted here. -->
                  </div>

                  <!-- Used to display form errors -->
                  <div id="card-errors" role="alert"></div>
                </div>

                <button>Submit Payment</button>
                <div class="flex items-center gap-1">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="currentColor"
                    class="w-5 h-5 text-orange-700"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm8.706-1.442c1.146-.573 2.437.463 2.126 1.706l-.709 2.836.042-.02a.75.75 0 0 1 .67 1.34l-.04.022c-1.147.573-2.438-.463-2.127-1.706l.71-2.836-.042.02a.75.75 0 1 1-.671-1.34l.041-.022ZM12 9a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                      clip-rule="evenodd"
                    />
                  </svg>

                  <p class="text-sm text-orange-700">
                    The amount you will be charged by Stripe is 4%.
                  </p>
                </div>
              </form>
            </div>
          </div>
          <!-- P2 -->
          <div class="flex flex-col w-full gap-5 px-2 lg:w-2/5">
            <!-- Choose Mobile -->
            <div class="flex flex-col gap-5 lg:hidden">
              <h4 class="text-xl font-bold lg:text-2xl">
                Choose Attendance Type
              </h4>

              <div
                class="inline-flex rounded-md lg:hidden"
                id="attendance-type"
                role="group"
              >
                <button
                  type="button"
                  name="live"
                  class="px-4 py-2 text-sm font-medium border border-gray-200 rounded-s-lg focus:z-10"
                >
                  Live (In the hall + 150$)
                </button>

                <button
                  type="button"
                  name="online"
                  class="px-4 py-2 text-sm font-medium bg-white border border-gray-200 rounded-e-lg focus:z-10"
                >
                  Online
                </button>
              </div>
            </div>

            <h4 class="text-xl font-bold lg:text-2xl">Your Order</h4>
            <div
              class="w-full bg-white border border-gray-200 rounded-lg shadow lg:max-w-sm"
            >
              <!-- Course  -->
              <div
                class="flex items-center justify-between p-4 border-b text-neutral-500"
              >
                <p>Original Price</p>
                <p id="item-price">$600</p>
              </div>

              <!-- Discount -->
              <div
                class="flex items-center justify-between p-4 border-b text-neutral-500"
              >
                <p>Discount</p>
                <div class="flex">
                  <span>-</span>
                  <p id="item-discount">$150</p>
                </div>
              </div>
              <!-- Coupon -->
              <div
                id="applied-coupone-checkout"
                class="items-center justify-between hidden p-4 border-b text-neutral-500"
              >
                <p>Applies Coupon</p>
                <div class="flex">
                  <span>-</span>
                  <p id="applied-coupone">$15</p>
                </div>
              </div>
              <!-- Live Attendance Fees  -->
              <div
                id="live-attendance-fees-checkout"
                class="items-center justify-between hidden p-4 border-b text-neutral-500"
              >
                <p>Live Attendance Fees</p>
                <p id="live-attend-fees">$150</p>
              </div>
              <!-- Payment Getway Fees  -->
              <div
                class="flex items-center justify-between p-4 border-b text-neutral-500"
              >
                <p>Gateway Fees</p>
                <p id="paymet-getway-fees"></p>
              </div>
              <!-- Total  -->
              <div
                class="flex items-center justify-between px-4 py-6 text-lg font-semibold text-black border-b"
              >
                <p>Total</p>
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
  </body>
</html>
