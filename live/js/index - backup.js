window.addEventListener("DOMContentLoaded", function (event) {
  console.log("DOM fully loaded and parsed");
  websdkready();
});

function websdkready() {
  var testTool = window.testTool;
  
  console.log(`${testTool.getCurrentDomain()}/mtn-live/live/meeting.php`)
  console.log("testTool.getCurrentDomain()")
  
  if (testTool.isMobileDevice()) {
    sConsole = new VConsole();
  }
  console.log("checkSystemRequirements");
  console.log(JSON.stringify(ZoomMtg.checkSystemRequirements()));

  // it's option if you want to change the WebSDK dependency link resources. setZoomJSLib must be run at first
  // if (!china) ZoomMtg.setZoomJSLib('https://source.zoom.us/2.12.2/lib', '/av'); // CDN version default
  // else ZoomMtg.setZoomJSLib('https://jssdk.zoomus.cn/2.12.2/lib', '/av'); // china cdn option
  // ZoomMtg.setZoomJSLib('http://localhost:9999/node_modules/@zoomus/websdk/dist/lib', '/av'); // Local version default, Angular Project change to use cdn version
  ZoomMtg.preLoadWasm(); // pre download wasm file to save time.

  var CLIENT_ID = "LFlwAZulThuY3jZujKeO9g";
  /**
   * NEVER PUT YOUR ACTUAL SDK SECRET OR CLIENT SECRET IN CLIENT SIDE CODE, THIS IS JUST FOR QUICK PROTOTYPING
   * The below generateSignature should be done server side as not to expose your SDK SECRET in public
   * You can find an example in here: https://developers.zoom.us/docs/meeting-sdk/auth/#signature
   */
  var CLIENT_SECRET = "QYKHayNVpmD3aLG9QwtBYZouioJL4awm";
  var meeting_number = document.getElementById("meeting_number").value;
  var meeting_pwd = document.getElementById("meeting_pwd").value;
  var display_name = document.getElementById("display_name").value;
  

  // some help code, remember mn, pwd, lang to cookie, and autofill.
//   document.getElementById("display_name").value =
//     "CDN" +
//     ZoomMtg.getJSSDKVersion()[0] +
//     testTool.detectOS() +
//     "#" +
//     testTool.getBrowserInfo();
//   document.getElementById("meeting_number").value =
//     meeting_number || testTool.getCookie("meeting_number") ;
//   document.getElementById("meeting_pwd").value =
//      meeting_pwd || testTool.getCookie("meeting_pwd") ;

  (() => {
    testTool.deleteAllCookies();

    testTool.setCookie("meeting_number", meeting_number);
    testTool.setCookie("meeting_pwd", meeting_pwd);
    testTool.setCookie("display_name", display_name);
  })();

  // click join meeting button
  document
    .getElementById("join_meeting")
    .addEventListener("click", function (e) {
      e.preventDefault();
      var meetingConfig = testTool.getMeetingConfig();
      if (!meetingConfig.mn || !meetingConfig.name) {
        alert("Meeting number or username is empty");
        return false;
      }

      testTool.setCookie("meeting_number", meetingConfig.mn);
      testTool.setCookie("meeting_pwd", meetingConfig.pwd);

      var signature = ZoomMtg.generateSDKSignature({
        meetingNumber: meetingConfig.mn,
        sdkKey: CLIENT_ID,
        sdkSecret: CLIENT_SECRET,
        role: meetingConfig.role,
        success: function (res) {
          console.log(res.result);
          meetingConfig.signature = res.result;
          meetingConfig.sdkKey = CLIENT_ID;
          var joinUrl = "/mtn-live/live/meeting.php?" + testTool.serialize(meetingConfig);
          console.log(joinUrl);
          window.open(joinUrl, "_blank");
        },
      });
    });


}
