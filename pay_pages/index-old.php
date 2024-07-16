<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/main.css" />
    <!-- Cairo Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
      rel="stylesheet"
    />

    <!--Roboto Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    
    
    <!--Font Awesome-->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
    />

    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="images/favicon-32x32.png"
    />

    <!-- Plyr.io -->
    <script src="https://cdn.plyr.io/3.7.8/plyr.js"></script>
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />
    <title>Adam & Eve</title>

    <style>
      :root {
        --plyr-color-main: #3e64de;
        --plyr-video-control-color: #fff;
      }
    </style>
  </head>
  <body>
    <div class="w-full min-h-screen">
      <div
        id="navbar"
        class="h-24 bg-white flex flex-col justify-center items-center border-b"
      >
        <img src="images/Logo.png" />
      </div>

      <!-- Main Content -->
      <div class="container mx-auto px-4 lg:px-16 pt-8">
        <!-- Ratings -->
        <div class="ratings flex items-center gap-1">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="#EE9C21"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="#EE9C21"
            class="w-6 h-6"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z"
            />
          </svg>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="#EE9C21"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="#EE9C21"
            class="w-6 h-6"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z"
            />
          </svg>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="#EE9C21"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="#EE9C21"
            class="w-6 h-6"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z"
            />
          </svg>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="#EE9C21"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="#EE9C21"
            class="w-6 h-6"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z"
            />
          </svg>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="#EE9C21"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="#EE9C21"
            class="w-6 h-6"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z"
            />
          </svg>
          <span class="text-sm">(5 Ratings)</span>
        </div>
        <div
          class="title font-[Cairo] text-[20px] lg:text-[30px] font-bold text-[#212327]"
        >
          Adam & Eve 

          <span class="text-[15px] text-[#616161]">– Main Level  </span>
        </div>

        <!--<div class="category font-[Cairo] mt-4">-->
        <!--  <span class="text-[#757c8e]">Category:</span>-->
        <!--  <span class=""-->
        <!--    >All courses, MTN Master, Self Transformation Diploma</span-->
        <!--  >-->
        <!--</div>-->

        <!-- Video And Description -->
        <div
          class="flex flex-col lg:flex-row gap-8 h-fit justify-between items-center lg:items-start mt-8 mb-8"
        >
          <!-- 1- Course Video -->
          <div class="video w-full flex-1 h-full">
              
              <img class="video-container" src="https://managethenow.net/mtn-live/pay_pages/images/950-500.png" />
            <!--<div >-->
            <!--  <div-->
            <!--    id="player"-->
            <!--    data-plyr-provider="youtube"-->
            <!--    data-plyr-embed-id="GdtDDbd6u08"-->
            <!--  ></div>-->
            <!--</div>-->
            <!-- <div class="plyr__video-embed" id="player">
              <iframe
                src="https://www.youtube.com/embed/GdtDDbd6u08?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1"
                allowfullscreen
                allowtransparency
                allow="autoplay"
              ></iframe>
            </div> -->
          </div>
          <!-- 2- Course Info -->
          <div
            class="info flex-grow-[0.7] w-full max-w-[500px] lg:max-w-[390px] h-full flex flex-col items-center justify-start font-[Roboto]"
          >
            <div class="card flex flex-col w-full h-[100%]">
              <div
                style="
                  border-bottom-left-radius: 0px;
                  border-bottom-left-radius: 0px;
                "
                class="card-1 border rounded-r-md rounded-l-md rounded-b-none py-8 px-4 bg-[#F4F6F9] h-[40%]"
              >
                <h2 class="text-[23px] font-bold flex items-center gap-2">
                  <span class="line-through text-sm text-[#757c8e]">
                    $600.00
                  </span>
                  <span>$450.00</span>
                </h2>

                <div class="flex items-center gap-2 mt-4 text-[#757c8e]">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-4 h-4"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="m9 14.25 6-6m4.5-3.493V21.75l-3.75-1.5-3.75 1.5-3.75-1.5-3.75 1.5V4.757c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0c1.1.128 1.907 1.077 1.907 2.185ZM9.75 9h.008v.008H9.75V9Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm4.125 4.5h.008v.008h-.008V13.5Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z"
                    />
                  </svg>

                  <span class="text-sm">25% discount</span>
                </div>
                <a
                  href="https://managethenow.net/mtn-live/checkout/index.php?coursecode=8"
                >
                  <button
                    type="button"
                    class="w-full max-w-full m-auto mt-4 text-center py-3 px-3 flex justify-center items-center gap-x-2 text-md font-[400] rounded-lg border border-transparent bg-[#3E64DE] text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                  >
                    Buy It
                  </button>
                </a>
              </div>
              <div
                class="card-2 font-[Cairo] text-[#757c8e] p-8 bg-white h-[50%] border border-t-none rounded-l-md rounded-r-md rounded-t-none flex flex-col"
              >
                <div class="row mb-3 w-full flex flex-row justify-start gap-4">
                  <span class="flex-1 flex gap-1 items-center">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="w-4 h-4"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"
                      />
                    </svg>
                    Trainings
                  </span>
                  <span class="flex-1 text-black text-sm"
                    >20 hrs Live training</span
                  >
                </div>
                      <div class="row mb-3 w-full flex flex-row justify-start gap-4">
                  <span class="flex-1 flex gap-1 items-center">
     
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
  <path stroke-linecap="round" stroke-linejoin="round" d="M21 7.5V18M15 7.5V18M3 16.811V8.69c0-.864.933-1.406 1.683-.977l7.108 4.061a1.125 1.125 0 0 1 0 1.954l-7.108 4.061A1.125 1.125 0 0 1 3 16.811Z" />
</svg>

                    Videos
                  </span>
                  <span class="flex-1 text-black text-sm"
                    >20 hrs On-demand videos</span
                  >
                </div>
                <div class="row mb-3 w-full flex flex-row justify-start gap-4">
                  <span class="flex-1 flex gap-1 items-center">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="w-4 h-4"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25"
                      />
                    </svg>

                    Access
                  </span>
                  <span class="flex-1 text-black text-sm"
                    >Access on 3 devices</span
                  >
                </div>
                <div class="row mb-3 w-full flex flex-row justify-start gap-4">
                  <span class="flex-1 flex gap-1 items-center">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="w-4 h-4"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M13.5 10.5V6.75a4.5 4.5 0 1 1 9 0v3.75M3.75 21.75h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H3.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z"
                      />
                    </svg>

                    Availability
                  </span>
                  <span class="flex-1 text-black text-sm"
                    >Life time access
                  </span>
                </div>
                <div class="row mb-3 w-full flex flex-row justify-start gap-4">
                  <span class="flex-1 flex gap-1 items-center">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="w-4 h-4"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 0 1 9 9v.375M10.125 2.25A3.375 3.375 0 0 1 13.5 5.625v1.5c0 .621.504 1.125 1.125 1.125h1.5a3.375 3.375 0 0 1 3.375 3.375M9 15l2.25 2.25L15 12"
                      />
                    </svg>

                    Documents
                  </span>
                  <span class="flex-1 text-black text-sm">
                    Manual Included
                  </span>
                </div>
                <div class="row mb-3 w-full flex flex-row justify-start gap-4">
                  <span class="flex-1 flex gap-1 items-center">
                    <i class="fa-solid fa-award" ></i>
                    Certificate
                  </span>
                  <span class="flex-1 text-black text-sm"
                    >Certificate On Completion
                  </span>
                </div>
                <div class="row w-full flex flex-row justify-start gap-4">
                  <span class="flex-1 flex gap-1 items-center">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="w-4 h-4"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125"
                      />
                    </svg>

                    Instructor
                  </span>
                  <span class="flex-1 text-black text-sm">
                    Dr. Ahmed Eldemellawy
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div
        id="footer"
        style="padding: 0px 20px;"
        class="h-24 text-center bg-white flex flex-col justify-center text-[#334155] text-[12px] lg:text-[16px] font-[Cairo] items-center border-t"
      >
        Copyright © 2024 MTN LIve | Powered by MTN (Manage The Now)
      </div>
    </div>
  </body>
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const player = new Plyr("#player", {});

      // Apply custom styles after Plyr has initialized
      const plyrElement = document.querySelector("#player");
      plyrElement.classList.add("custom-plyr");

      // Expose player so it can be used from the console
      window.player = player;
    });
  </script>
</html>
