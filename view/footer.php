</div>
      </div>
    </div>
    
        
    
     
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body d-flex flex-wrap justify-content-center gap-3">
                    
                    <a
                            class="swiper-slide-card p-4 d-flex flex-column text-decoration-none"
                          >
                            <span class="fw-bold text-light">15</span>
                            <div
                              class="d-flex flex-column justify-content-between align-items-center"
                            >
                              <div class="" id="swiper-slide-img-container">
                                <img
                                    style="object-fit:contain"       
                                    
                                  class="w-100 h-100"
                                  alt=""
                                />
                              </div>
                              <p class="fw-bolder text-light text-center mt-3" style="font-size:13px">'.$course_names[$member["course_code1"] ].'</p>
                            </div>
                            </a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

  <div
      class="modal fade"
      id="therapyGroupModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered modal-xl">
        <div
          class="modal-content"
          style="background-color: transparent; border: 0"
        >
          <div
            class="modal-body d-flex justify-content-center flex-wrap flex-lg-nowrap gap-5"
          >
            <!-- Card -->
            <div
              class="border-rad d-flex flex-column"
              style="
                max-width: 335;
                background-color: #f5f2ec;
                box-shadow: 0px 0px 6px #0000000d;
              "
            >
             
             
             
            <form
                id="form"
                action="ajaxupload.php"
                method="post"
                enctype="multipart/form-data"
                style='margin-top:-320px'
              >
                <center>
                  <span
                    class="btnn btnn-success fileinput-button d-flex flex-column gap-3"
                  >
                    <div>
                      <i
                        class="fa-solid fa-cloud-arrow-up dark-blue-text fs-4"
                      ></i>
                      <p class="gray-text fw-normal" style="font-size: 22px">
                        Drag and drop files here
                      </p>
                    </div>
                    <p class="dark-blue-text fw-normal" style="font-size: 22px">
                      OR
                    </p>
                    <div>
                      <span class="btn btn-join text-white">Browse files</span>
                    </div>
                
                  <input hidden name="user_id" value="<?php $user ?>" />
                    <input type="file" name="image" id="image" multiple />
                  </span>
                </center>
              </form>
          
             
            </div>

           
          </div>
        </div>
      </div>
    </div>







    <script src="view/js/demo.js?<?php echo time(); ?>"></script>
    <!-- SWIPER CDN -->
    <!--<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>-->
  
    <!-- SWIPER JS -->
    <script src="view/js/swiper.js?<?php echo time(); ?>"></script>
    <script src="view/js/calendar.js?<?php echo time(); ?>"></script>
    
    
    <!--<script src="https://vjs.zencdn.net/8.3.0/video.min.js"></script>-->
     <script src="https://cdn.dashjs.org/latest/dash.all.min.js"></script>
 
              <script src="view/js/attachment.js?<?php echo time(); ?>"></script>

  </body>
     

</html>
