    console.log("combinedVideos222",combinedVideos)
    console.log("courseName",courseName)
    
    function generateDayArray(numOfChapters) {
    const dayArray = [];
    
    for (let i = 1; i <= numOfChapters; i++) {
    dayArray.push(`day${i}`);
    }
    
    return dayArray;
    }
    const generatedDays = generateDayArray(numOfChapters);
    
    let finalVideosData = courseName == "ColorsCourse" ? combinedVideos : videoSources
    const filteredVideos = finalVideosData.filter(video => generatedDays.includes(video.day)).sort((videoA, videoB) => {
        const dayA = courseName == "ColorsCourse" ?  parseInt(videoA.day.replace("Day_num", "")) : parseInt(videoA.day.replace("day", ""));
        const dayB = courseName == "ColorsCourse" ?  parseInt(videoA.day.replace("Day_num", "")) : parseInt(videoB.day.replace("day", ""));
        
        return dayA - dayB;
});
    // console.log(filteredVideos)
    // console.log(videoSources)

document.addEventListener('DOMContentLoaded', function() {
    var videoContainer = document.getElementById('videoContainer');
    var videoListItems = document.querySelectorAll('.videoListItem');
    var currentVideoIndex = 0;
    let allOptions = document.querySelectorAll(".option")
    function playVideoByIndex(index) {
        currentVideoIndex = index;
        loadAndPlayVideo(filteredVideos[currentVideoIndex].img);
    }

    function playNextVideo() {
        // Check if there is a next video
         
        if (currentVideoIndex < filteredVideos.length - 1) {
            let currentVideoDay = courseName == "ColorsCourse" ? filteredVideos[currentVideoIndex].day.replace("Day_num", "") : filteredVideos[currentVideoIndex].day.replace("day", "")
            currentVideoIndex++;
            loadAndPlayVideo(filteredVideos[currentVideoIndex].img);
            
            //Change Chapter Active Div::
            let nextVideoDay = courseName == "ColorsCourse" ? filteredVideos[currentVideoIndex].day.replace("Day_num", "") : filteredVideos[currentVideoIndex].day.replace("day", "")
            
            if(nextVideoDay > currentVideoDay){
                allOptions[currentVideoDay - 1].classList.remove("active")
                //Remove Active Class From the current Day
                allOptions[currentVideoDay - 1].querySelector('.ul_div').querySelector(".contents").style="display:none"
                allOptions[nextVideoDay - 1].classList.add("active")
                allOptions[nextVideoDay - 1].querySelector('.ul_div').querySelector(".contents").style="display:block"

             
            }
            
            
        } else {
            // If there are no more videos, you can choose to loop or stop playback
            // For example, you can loop back to the first video:
            // currentVideoIndex = 0;
            // loadAndPlayVideo(filteredVideos[currentVideoIndex]);
        }
    }

    function loadAndPlayVideo(videoSource) {
    
        var iframe = document.createElement('iframe');
        iframe.setAttribute('allowfullscreen', 'true');
        iframe.preload = "auto";
        iframe.src = videoSource;
        iframe.width = '640';
        iframe.height = '360';
        iframe.setAttribute("style", "max-width: 100%")
        iframe.frameborder = '0';
        iframe.allow = "accelerometer;";
        iframe.allow += " gyroscope;";
        iframe.allow += " encrypted-media;";
        iframe.allow += " picture-in-picture;";


        videoContainer.innerHTML = '';
        videoContainer.appendChild(iframe);

        window.addEventListener('message', function(event) {
            if (event.source === iframe.contentWindow) {
                if (event.data.eventName === "ended") {
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
