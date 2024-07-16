console.log("test only")

function PlayVideoFromSavedTime(isPlayingNextVideo = false) {
    const player = Stream(document.getElementById("streamIframe"));
    const video = document.getElementById("streamIframe");
    const currentVideoId = video.getAttribute("data-video-id");
    // console.log(currentVideoId)
    
    let videoTimeDetails = JSON.parse(
    localStorage.getItem("userVideosSavedTimes")
    );
    
    if (videoTimeDetails) {
    const RelatedVideoInSavedVideos = videoTimeDetails.find(
    (el) => el.id === currentVideoId
    );
    // console.log("RelatedVideoInSavedVideos", RelatedVideoInSavedVideos);
    player.currentTime = RelatedVideoInSavedVideos.currentTime;
    }
}
    
    
    function generateDayArray(numOfVersions) {
    const dayArray = [];
    
    for (let i = 1; i <= numOfVersions; i++) {
    dayArray.push(`version${i}`);
    }
    
    return dayArray;
    }
    
    const generatedDays = generateDayArray(numOfVersions);
    // console.log("generatedDays", generatedDays)
    

    // console.log("videoSources", videoSources)



    const filteredVideos = videoSources.filter(video => generatedDays.includes(video.day)).sort((videoA, videoB) => {
        const dayA = parseInt(videoA.day.replace("version", ""));
        const dayB = parseInt(videoB.day.replace("version", ""));
        
        return dayA - dayB;
});
    // console.log(filteredVideos)





    // console.log("FilteredvideoSources", filteredVideos);

document.addEventListener('DOMContentLoaded', function() {
    var videoContainer = document.getElementById('videoContainer');
    var videoListItems = document.querySelectorAll('.videoListItem');
    var currentVideoIndex = 0;
    let allOptions = document.querySelectorAll(".option")
    function playVideoByIndex(index) {
        currentVideoIndex = index;
        // console.log("s", filteredVideos[currentVideoIndex])
        // console.log("s", filteredVideos[currentVideoIndex].img)
        loadAndPlayVideo(filteredVideos[currentVideoIndex].img, filteredVideos[currentVideoIndex].id);
        PlayVideoFromSavedTime();

    }

    function playNextVideo() {
        // Check if there is a next video
            
        if (currentVideoIndex < filteredVideos.length - 1) {
            let currentVideoDay = filteredVideos[currentVideoIndex].day.replace("version", "")
            
            removeVideoFromLocalStorage(filteredVideos[currentVideoIndex].id);

            
            // console.log("currentVideo:", filteredVideos[currentVideoIndex])
            currentVideoIndex++;

            loadAndPlayVideo(filteredVideos[currentVideoIndex].img, filteredVideos[currentVideoIndex].id);
            
            // console.log("nextVideo",filteredVideos[currentVideoIndex])
            //Change Chapter Active Div::
            let nextVideoDay = filteredVideos[currentVideoIndex].day.replace("version", "")

            if(nextVideoDay > currentVideoDay){
                allOptions[currentVideoDay - 1].classList.remove("active")
                //Remove Active Class From the current Day
                allOptions[currentVideoDay - 1].querySelector('.ul_div').querySelector(".contents").style="display:none"
                allOptions[nextVideoDay - 1].classList.add("active")
                allOptions[nextVideoDay - 1].querySelector('.ul_div').querySelector(".contents").style="display:block"

            }
            
            PlayVideoFromSavedTime();

            
            
        } else {
            // If there are no more videos, you can choose to loop or stop playback
            // For example, you can loop back to the first video:
            // currentVideoIndex = 0;
            // loadAndPlayVideo(filteredVideos[currentVideoIndex]);
        }
    }

    function loadAndPlayVideo(videoSource, videoId) {

        var iframe = document.createElement('iframe');
        iframe.setAttribute('allowfullscreen', 'true');
        iframe.preload = "auto";
        iframe.src = videoSource;
        iframe.id = "streamIframe";
        iframe.setAttribute("data-video-id", videoId);
        iframe.width = '640';
        iframe.height = '360';
        iframe.setAttribute("style", "max-width: 100%");
        iframe.frameborder = '0';
        iframe.allow = "accelerometer;";
        iframe.allow += " gyroscope;";
        iframe.allow += " encrypted-media;";
        iframe.allow += " picture-in-picture;";


        videoContainer.innerHTML = '';
        videoContainer.appendChild(iframe);

  window.addEventListener("message", function (event) {
    if (event.source === iframe.contentWindow) {
      if (
        event.data.__privateUnstableMessageType === "bufferedTimeRangesUpdate"
      ) {
          
          
        // Access the buffered time ranges
        var bufferedTimeRanges = event.data.timeRanges;
        if (bufferedTimeRanges.length > 0) {
          // Access the end time of the buffered range
          var currentTime = bufferedTimeRanges[0].end;

          //First Check if there is videoTimesSaved in localStorage
          let videoTimeDetails = JSON.parse(
            localStorage.getItem("userVideosSavedTimes")
          );

          if (videoTimeDetails) {
            //Check if the video is already saved in localStorage
            let videoTimeDetailsIndex = videoTimeDetails.findIndex(
              (video) => video.id === filteredVideos[currentVideoIndex].id
            );

            if (videoTimeDetailsIndex >= 0) {
              //Update the video time
              videoTimeDetails[videoTimeDetailsIndex].currentTime = currentTime;
            } else {
              //Add the video to the localStorage
              videoTimeDetails.push({
                id: filteredVideos[currentVideoIndex].id,
                currentTime: currentTime,
              });
            }
          } else {
            //Add the video to the localStorage
            videoTimeDetails = [
              {
                id: filteredVideos[currentVideoIndex].id,
                currentTime: currentTime,
              },
            ];
          }

          localStorage.setItem(
            "userVideosSavedTimes",
            JSON.stringify(videoTimeDetails)
          );
        }
      } else if (event.data.eventName === "ended") {
          
        playNextVideo();
      }
    }
    });
  }

    // Attach click event listeners to each video list item
    videoListItems.forEach(function(item, index) {
        item.addEventListener('click', function() {
            playVideoByIndex(index);
        });
    });

    // Start playing the first video by default
    playVideoByIndex(0);
});



function removeVideoFromLocalStorage(videoId) {
    console.log("hello", videoId)
    let videoTimeDetails = JSON.parse(localStorage.getItem("userVideosSavedTimes"));
    console.log(videoTimeDetails)

    if (videoTimeDetails) {
        // Find the index of the video in localStorage
        let videoIndex = videoTimeDetails.findIndex((video) => video.id === videoId);

        if (videoIndex !== -1) {
            // Remove the video from the array
            videoTimeDetails.splice(videoIndex, 1);

            // Update localStorage with the modified array
            localStorage.setItem("userVideosSavedTimes", JSON.stringify(videoTimeDetails));
        }
    }
}
