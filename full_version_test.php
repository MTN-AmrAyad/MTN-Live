
 <link rel="stylesheet" href="view/css/videos.css?<?php echo time(); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://embed.cloudflarestream.com/embed/r4xu.fla9.latest.js" defer></script>
</head>


<?php 

require_once 'model/video.php';
require_once 'view/header.php';
$id = $_GET['id'];

$coursecode = Video::get_user_coursecode($id);
$videos_data =Video::get_videos_data($coursecode);
$videos =Video::get_videos_by_coursecode($coursecode);
$videos_cloudflare =Video::get_cloud_flare_videos_user_id($id);
$videos_cloudflare_time =Video::get_cloud_flare_videos_user_time($id);

?>
<input hidden value="<?php echo $id?>" id="userid">
<input   hidden value="<?php echo $videos_cloudflare ?>" id="DBcloudflareVideoID"/>
<input   hidden value="<?php echo $videos_cloudflare_time ?>" id="DBcloudflareVideoTime"/>

<!-- MAIN -->
          <div class="w-100 d-flex flex-column p-3 p-md-4 justify-content-lg-center" id="main-container" style="height: 650px; overflow: hidden;
    align-items: center; background: url(https://managethenow.net/mtn-live/view/imgs/Gradient_background.png) ;">
              
                     <main class="pt-5 pt-md-0">
            <section>
                
<div class="options">
    
    <?php
 if($videos_data['num_of_versions']!=0){
     
     if($id=='ataf_1907_mtn'||$id=='A7532'||$id=="A4563"||$id=="R16888"||$id=="N30698"||$id=="M30556"||$id=="S18152"||$id=="O74381"||$id=="Y65600"||$id=="S68937"||$id=="H25249"||$id=="S467354"||$id=="M13466"||$id=="S77121"||$id=="M97774"||$id=="A12763"||$id=="A43117"||$id=="D53674"){
         
         
              for ($x = 1; $x <= $videos_data['num_of_versions']; $x++) {

echo '   <div class="option"  >
        <div class="ul_div"><ul class="contents">
            
        ';
   
          foreach ($videos as $index => $vid) {
                            $CloudflareVidId=explode("/",$vid['img']);

              if($vid['day'] == 'version'.$x){

               echo '<li data-index='. $index .' class="videoListItem"> 
           <a  class="a_content '.$vid['img'].' '.$CloudflareVidId[3].' '.$vid['userStoppedTime'].'"  id="version'.$x.'">
                <div class="btn_div"  >
                   <h4  > '.$vid['title'].'</h4>
               </div>
               </a>
           </li>';     
                       $chapter_name=$vid['chapter_name'];
            
              }
              
}
          
        echo'      
       </ul></div>
      <div class="shadow"></div>
      <div class="label">
         <div class="icon">
            <i class="">'.$x.'</i>
         </div>
         <div class="info">
              <div class="main">'.$chapter_name.'</div>
         </div>
      </div>
   </div>';
}

         
         
         
         
     
         
     }elseif($coursecode==21 && $user_data['user_course_counter']<21){
         for ($x = 1; $x < $videos_data['num_of_versions']; $x++) {

echo '   <div class="option"  >
        <div class="ul_div"><ul class="contents">
            
        ';
   
          foreach ($videos as $index => $vid) {
                            $CloudflareVidId=explode("/",$vid['img']);

              if($vid['day'] == 'version'.$x){

               echo '<li data-index='. $index .' class="videoListItem"> 
           <a  class="a_content '.$vid['img'].' '.$CloudflareVidId[3].' '.$vid['userStoppedTime'].'"  id="version'.$x.'">
                <div class="btn_div"  >
                   <h4  > '.$vid['title'].'</h4>
               </div>
               </a>
           </li>';     
                       $chapter_name=$vid['chapter_name'];
            
              }
              
}
          
        echo'      
       </ul></div>
      <div class="shadow"></div>
      <div class="label">
         <div class="icon">
            <i class="">'.$x.'</i>
         </div>
         <div class="info">
              <div class="main">'.$chapter_name.'</div>
         </div>
      </div>
   </div>';
}

         
     }
     
     
     
     
     elseif ($coursecode==21&& $user_data['user_course_counter']>=21){
         for ($x = 2; $x <= $videos_data['num_of_versions']; $x++) {

echo '   <div class="option"  >
        <div class="ul_div"><ul class="contents">
            
        ';
   
          foreach ($videos as $index => $vid) {
                            $CloudflareVidId=explode("/",$vid['img']);

              if($vid['day'] == 'version'.$x){

               echo '<li data-index='. $index .' class="videoListItem"> 
           <a  class="a_content '.$vid['img'].' '.$CloudflareVidId[3].' '.$vid['userStoppedTime'].'"  id="version'.$x.'">
                <div class="btn_div"  >
                   <h4  > '.$vid['title'].'</h4>
               </div>
               </a>
           </li>';     
                       $chapter_name=$vid['chapter_name'];
            
              }
              
}
          
        echo'      
       </ul></div>
      <div class="shadow"></div>
      <div class="label">
         <div class="icon">
            <i class="">'.$x.'</i>
         </div>
         <div class="info">
              <div class="main">'.$chapter_name.'</div>
         </div>
      </div>
   </div>';
}

     }else{
                  for ($x = 1; $x <= $videos_data['num_of_versions']; $x++) {

echo '   <div class="option"  >
        <div class="ul_div"><ul class="contents">
            
        ';
   
          foreach ($videos as $index => $vid) {
                            $CloudflareVidId=explode("/",$vid['img']);

              if($vid['day'] == 'version'.$x){

               echo '<li data-index='. $index .' class="videoListItem"> 
           <a  class="a_content '.$vid['img'].' '.$CloudflareVidId[3].' '.$vid['userStoppedTime'].'"  id="version'.$x.'">
                <div class="btn_div"  >
                   <h4  > '.$vid['title'].'</h4>
               </div>
               </a>
           </li>';     
                       $chapter_name=$vid['chapter_name'];
            
              }
              
}
          
        echo'      
       </ul></div>
      <div class="shadow"></div>
      <div class="label">
         <div class="icon">
            <i class="">'.$x.'</i>
         </div>
         <div class="info">
              <div class="main">'.$chapter_name.'</div>
         </div>
      </div>
   </div>';
}

         
     }
 
 }else{
    //  transform: translate(0px, 150px);
     echo '<h1 style="color:white;text-align: center;font-size: 2.5em;text-shadow: 3px 3px 3px rgba(128, 128, 128, 0.39);letter-spacing: 5px;" >'.$wordtweentyseven.'</h1>';
 }
 ?>   
 
 
</div>




        <!-- ICONS -->
             
            </section>
            
            <div class='blur_bg' style='display:none;width: 100%;
    position: absolute;
   background-color: #21252973;
    z-index: 2;
    border-radius:30px;
    height: 100%;
    top: 0;
    left: 0;'></div>
            
<div class='overlay' style="border-radius: 18px;">
    
    <div style='   position: absolute;
    z-index: 20;
    right: 0;'>
<!--<i style='    margin: 15px 15px;color:#f00;-->
<!--    font-size: xx-large;' class='bx bx-x-circle' onclick="hide_popup(this)">close</i>-->
    <i class="fa-solid fa-xmark d-block" style='margin: 25px 25px;color:#f00;font-size: xx-large;'onclick="hide_popup(this)"></i>
    </div>
    <div id="vWrap" style="padding:10px ;  border-radius: 15px;">
      <!-- (A) VIDEO TAG -->
  
      
    <!--<iframe  frameborder="0" allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"  muted  controlsList="nodownload"   preload="video" autoplay id="vVid" style="border-radius: 18px;width:100%;height: 370px;"></iframe>-->
    
              <div id="videoContainer">
              
              
              </div>
          
          
    
 
      

      


      <div id="vList"></div>
    </div>
    
</div>
        </main> 
              
              
          </div>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

          <script>
    

  
      $('.option').first().addClass('active');
$(' body .options .option.active >.ul_div > .contents').show();

 $(".option").click(function(){
   $(".option").removeClass("active");
   $(".contents").hide();
   
   $(this).addClass("active");
   var c = this.children[0];
   var d = c.children[0];
   d.style.display = "block";
   //children.show();
   
//   console.log(c);
   
});


function hide_popup(el){
        // Trigger Stop Video
        el.parentNode.parentNode.children[1].children[0].children[0].src=""

  
    el.parentNode.parentNode.style.display='none';
    $('.blur_bg').hide();


    // location.reload();
    
}


var data_arr = <?php echo json_encode($videos); ?>;

   		$(document).on('click', '.a_content', function(e) {
		    var x=e.id;
var vidIdTest=e.target.offsetParent.classList[2];
var y=e.target.value;
 var userid=$('#userid').val();
		    
		  //  $.ajax({
		  //      url:'model/videouserid.php',
		  //      method:'POST',
		  //      data:{
		  //          videoId:vidIdTest,
		  //          id:userid
		  //      },
		  //      success:function(result){
		  //        //  alert(result);
    //                 console.log("success in clips")
		  //      }, 
		  //      error: function( textStatus, errorThrown) { 
    //                 // alert("Status: " + textStatus); alert("Error: " + errorThrown); 
    //                 console.log("error in clips ")
    //             }       
		        
		  //  })
		    
		  
$('.blur_bg').show();
          $('.overlay').show();
playlist_func(this.id,this.className.split(' ')[1]);
 
	
		}); 
    
    
  function playlist_func(para,vid_name_url){  

  // (A) PLAYER INIT
  // (A1) PLAYLIST - CHANGE TO YOUR OWN!
  let playlist = [];

   var data = <?php echo json_encode($videos); ?>;
   var coursecode = <?php echo json_encode($coursecode); ?>;
   
   data.forEach((element, index, array) => {
 if(element.day == para ){
     
    playlist.push({name:element.title ,src:element.img});

 }
});
 

// console.log(playlist);
  // (A2) VIDEO PLAYER & GET HTML CONTROLS
  const video = document.getElementById("vVid"),
     
        vList = document.getElementById("vList");
vList.innerHTML = '';
  // (A3) BUILD PLAYLIST
 
  // (B) PLAY MECHANISM
  // (B1) FLAGS
  var vidNow = 0, // current video
      vidStart = false, // auto start next video

  // (B2) PLAY SELECTED VIDEO
  vidPlay = (idx, nostart) => {
    vidNow = idx;
    vidStart = nostart ? false : true;
    
    
    var videoID = playlist[idx]['src'].split('/')[3]
    
    

    // video.src = playlist[idx]["src"];
    //test
       video.setAttribute('preload', "");
       video.setAttribute('playsinline', "true");
    
    video.src = `https://customer-nwt83vp5ce7zx9s7.cloudflarestream.com/${videoID}/iframe?preload=true&playsinline=true`;
    
    
    
      
		    const player = Stream(document.getElementById("vVid"));
		    
		    
		    var databaseVideoID = document.getElementById("DBcloudflareVideoID").value;

		    
		    var databaseCurrentTime = document.getElementById("DBcloudflareVideoTime").value;
	
		    
		    
            

if(videoID == databaseVideoID){
    
		  //  console.log("in cond")
    
player
  .play()
  .then((e) => {
    // console.log("started!");
    player.currentTime = databaseCurrentTime;
  })
  .catch(() => {
    // console.log("playback failed, muting to try again");
    player.muted = true;
    player.play();
    player.currentTime = databaseCurrentTime;
  });
}


    
    
    
    for (let i in playlist) {
      if (i == idx) { playlist[i]["row"].classList.add("now"); }
      else { playlist[i]["row"].classList.remove("now"); }
    }
  };

  // (B3) AUTO START WHEN SUFFICIENTLY BUFFERED
//   video.addEventListener("canplay", () => { if (vidStart) {
//     video.play();
//     vidStart = false;
//   }});

//   // (B4) AUTOPLAY NEXT VIDEO IN THE PLAYLIST
//   video.addEventListener("ended", () => {
//     vidNow++;
//     if (vidNow >= playlist.length) { vidNow = 0; }
//     vidPlay(vidNow);
//   });

  // (B5) INIT SET FIRST VIDEO
//   let ind = playlist.findIndex(item => { return item.src == vid_name_url});
// //  console.log(ind);
//   vidPlay(ind, true);

//   // (C) PLAY/PAUSE BUTTON
//   // (C1) AUTO SET PLAY/PAUSE TEXT
//   video.addEventListener("play", () => {
//     vPlayIco.innerHTML = "pause";
//   });
//   video.addEventListener("pause", () => {
//     vPlayIco.innerHTML = "play_arrow";
//   });

//   // (C2) CLICK TO PLAY/PAUSE
//   vPlay.addEventListener("click", () => {
//     if (video.paused) { video.play(); }
//     else { video.pause(); }
//   });

  }   

  
</script>
   <script src="https://embed.cloudflarestream.com/embed/sdk.latest.js"></script>
   <script>

          var player = Stream(document.getElementById("vVid"));
          
          
          
          
          
          player.addEventListener("timeupdate", () => {
         var userid=$('#userid').val();
        var userStoppedTime = Number(player.currentTime.toFixed(1));
  
  
//   $.ajax({
//   url: "model/videousertime.php",
//   method: "POST",
//   data: {
//     userSStoppedTime: userStoppedTime,
//     id: userid,
//   },
//   success: function (result) {
//     //  alert(result);
//     console.log("success in clips");
//   },
//   error: function (textStatus, errorThrown) {
//     // alert("Status: " + textStatus); alert("Error: " + errorThrown);
//     console.log("error in clips ");
//   },
// });

     });




// player.addEventListener("ended", () => {
//   console.log("ended!");
// });

   </script>
   
       <script>
        var videoSources = <?php echo json_encode($videos); ?>;
        var numOfVersions = <?php echo json_encode($videos_data['num_of_versions']) ?>;
        var videos_data = <?php echo json_encode($videos_data) ?>;
        // console.log("videos_data", videos_data)
    </script>

    <script src="view/js/autoSwitch_fullVersionPage.js"></script>

<?php
require_once 'view/footer.php';
?>
