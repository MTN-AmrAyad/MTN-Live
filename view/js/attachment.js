$("#form").change(function () {
  $.ajax({
    url: "ajaxupload.php",
    type: "POST",
    data: new FormData(this),
    contentType: false,
    cache: false,
    processData: false,
    beforeSend: function () {
      $("#err").fadeOut();
    },
    success: function (data) {
        var fileImg;
      if (data == "invalid") {
        // invalid file format.
        $("#err").html("Invalid File !").fadeIn();
      } else {
          
          
        var [file, filePath] = data.split("-");
        var [fileName, fileType] = file.split(".");
        
        

        if (fileType === "docx") {
          fileImg = "view/imgs/word-file.png";
        } else if (fileType === "pdf") {
          fileImg = "view/imgs/pdf-file.png";
        } else {
          fileImg = "";
        }

        $("#form")[0].reset();
        $("#select-beast-empty").append(`
            <div
                class="files-container d-flex justify-content-between align-items-center bg-white border-rad flex-wrap gap-3"
              >
                <div class="d-flex align-items-center gap-4">
                  <div style="height: 44px; width: 42px">
                    <img
                      src=${fileImg}
                      style="object-fit: contain"
                      class="w-100 h-100"
                      alt=""
                    />
                  </div>
                  <p class="gray-text">${fileName}</p>
                </div>
                <div class="d-flex gap-2 gap-1">
                
                    <a href=${filePath}          
                  class="btn btn-download text-white border-rad">
                    <i class="fa-solid fa-download"></i> Download
                  </a>
                </div>
              </div>
              

        `);
        
        
        
        
      }
    },
    error: function (e) {
      $("#err").html(e).fadeIn();
    },
  });
});

