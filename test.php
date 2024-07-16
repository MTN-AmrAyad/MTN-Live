<html>
	<head>
		<link
			href="https://cdnjs.cloudflare.com/ajax/libs/video.js/7.10.2/video-js.min.css"
			rel="stylesheet"
		/>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/video.js/7.10.2/video.min.js"></script>
		 <link href="https://vjs.zencdn.net/8.3.0/video-js.css" rel="stylesheet" />
	</head>
	<body>
		<video-js id="vVid" controls preload="auto" playsinload="true">
			<source
			id="vidSrc"
				type="application/x-mpegURL"
			/>
				 <!--src="https://customer-nwt83vp5ce7zx9s7.cloudflarestream.com/38d264aa82ff4d73af61995ebd2312c2/manifest/video.m3u8"-->
		</video-js>

		<script>
			const vidSrc = document.getElementById('vidSrc');
			const vid = document.getElementById('vVid');
			const player = videojs(vid);
			
			
		    // src="https://customer-nwt83vp5ce7zx9s7.cloudflarestream.com/38d264aa82ff4d73af61995ebd2312c2/manifest/video.m3u8"
				
		  //vid.src="https://customer-nwt83vp5ce7zx9s7.cloudflarestream.com/38d264aa82ff4d73af61995ebd2312c2/manifest/video.m3u8"
		  vidSrc.src="https://customer-nwt83vp5ce7zx9s7.cloudflarestream.com/bf249763c150c660613f88ed472fa224/iframe?poster=https%3A%2F%2Fcustomer-nwt83vp5ce7zx9s7.cloudflarestream.com%2Fbf249763c150c660613f88ed472fa224%2Fthumbnails%2Fthumbnail.jpg%3Ftime%3D%26height%3D600"
		  //vidSrc.setAttribute("type", "application/x-mpegURL")
		  
            // console.log(player.currentTime());
		 
		player.on("timeupdate", () => {


		

  var userStoppedTime = Number(player.currentTime().toFixed(1));
		    
		    console.log(userStoppedTime);
		    
		})
		</script>
		<script src="https://vjs.zencdn.net/8.3.0/video.min.js"></script>
	</body>
</html>
<!--<html>-->
<!--	<head>-->
<!--		<link-->
<!--			href="https://cdnjs.cloudflare.com/ajax/libs/video.js/7.10.2/video-js.min.css"-->
<!--			rel="stylesheet"-->
<!--		/>-->
<!--		<script src="https://cdnjs.cloudflare.com/ajax/libs/video.js/7.10.2/video.min.js"></script>-->
<!--	</head>-->
<!--	<body>-->
<!--		<video-js id="vid1" controls preload="auto" playsinload="true">-->
<!--			<source-->
<!--				src="https://customer-nwt83vp5ce7zx9s7.cloudflarestream.com/48a848f649626344494d3f978aea29ff/manifest/video.m3u8"-->
<!--				type="application/x-mpegURL"-->
<!--			/>-->
<!--		</video-js>-->

<!--		<script>-->
<!--			const vid = document.getElementById('vid1');-->
<!--			const player = videojs(vid);-->
		
<!--		</script>-->
<!--	</body>-->
<!--</html>-->