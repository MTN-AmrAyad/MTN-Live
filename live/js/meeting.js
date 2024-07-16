// ********************************
// EDIT HERE MEETING PASSWORD && WHERE TO LEAVE
// ********************************

window.addEventListener("DOMContentLoaded", function (event) {
  // console.log('DOM fully loaded and parsed');
  websdkready();
});

function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  // console.log(decodedCookie);
  let ca = decodedCookie.split(";");
  for (let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == " ") {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

var meeting_number = 88663715513;
var meeting_pwd = 150418;
var display_name = getCookie("display_name");
var userpwd = getCookie("user");

function websdkready() {
  var testTool = window.testTool;

  var tmpArgs = testTool.parseQuery();

  var meetingConfig = {
    sdkKey: tmpArgs.sdkKey,
    meetingNumber: tmpArgs.mn,
    userName: (function () {
      if (tmpArgs.name) {
        try {
          return testTool.b64DecodeUnicode(tmpArgs.name);
        } catch (e) {
          return tmpArgs.name;
        }
      }
      return "MTN-User";
    })(),
    passWord: meeting_pwd,
    //  passWord: (function () {
    //   if (tmpArgs.pwd) {
    //     try {
    //         return testTool.b64DecodeUnicode(tmpArgs.pwd);
    //     } catch (e) {
    //       return testTool.b64DecodeUnicode(tmpArgs.pwd);
    //     }
    //   }
    //   return "Test dev";
    // })(),

    // *************************************
    // EDIT HERE WHERRE TO LEAVE
    // *************************************
    leaveUrl: `https://managethenow.net/mtn-live/live/index.php?id=${userpwd}&lang=en`,
    // leaveUrl: "https://managethenow.net/mtn-live/live/index.php?id="+userpwd+"&lang=en",
    role: parseInt(tmpArgs.role, 10),
    userEmail: (function () {
      try {
        return testTool.b64DecodeUnicode(tmpArgs.email);
      } catch (e) {
        return tmpArgs.email;
      }
    })(),
    lang: tmpArgs.lang,
    signature: tmpArgs.signature || "",
    china: tmpArgs.china === "1",
  };

  // a tool use debug mobile device
  if (testTool.isMobileDevice()) {
    vConsole = new VConsole();
  }
  // console.log(JSON.stringify(ZoomMtg.checkSystemRequirements()));

  // it's option if you want to change the WebSDK dependency link resources. setZoomJSLib must be run at first
  // ZoomMtg.setZoomJSLib("https://source.zoom.us/2.12.2/lib", "/av"); // CDN version defaul
  if (meetingConfig.china)
    ZoomMtg.setZoomJSLib("https://jssdk.zoomus.cn/2.12.2/lib", "/av"); // china cdn option
  ZoomMtg.preLoadWasm();
  ZoomMtg.prepareJssdk();
  function beginJoin(signature) {
    ZoomMtg.init({
      leaveUrl: meetingConfig.leaveUrl,
      webEndpoint: meetingConfig.webEndpoint,
      disableCORP: !window.crossOriginIsolated, // default true
      // disablePreview: false, // default false
      meetingInfo: ["topic", "host"],
      externalLinkPage: "./externalLinkPage.html",
      success: function () {
        // console.log(meetingConfig);
        // console.log("signature", signature);
        ZoomMtg.i18n.load(meetingConfig.lang);
        ZoomMtg.i18n.reload(meetingConfig.lang);
        ZoomMtg.join({
          meetingNumber: meetingConfig.meetingNumber,
          userName: meetingConfig.userName,
          signature: signature,
          sdkKey: meetingConfig.sdkKey,
          userEmail: meetingConfig.userEmail,

          // *************************************
          // edit here Password
          // *************************************

          passWord: 150418,
          success: function (res) {

            // Disable the invite button
            ZoomMtg.showInviteFunction({
              show: false,
            });
        
            ZoomMtg.getAttendeeslist({});
            ZoomMtg.getCurrentUser({
              success: function (res) {
                // console.log("success getCurrentUser", res.result.currentUser);
              },
            });
          },
          error: function (res) {
            console.log(res);
          },
        });
      },
      error: function (res) {
        console.log(res);
      },
    });

    ZoomMtg.inMeetingServiceListener("onUserJoin", function (data) {
      // console.log('inMeetingServiceListener onUserJoin', data);
    });

    ZoomMtg.inMeetingServiceListener("onUserLeave", function (data) {
      // console.log('inMeetingServiceListener onUserLeave', data);
    });

    ZoomMtg.inMeetingServiceListener("onUserIsInWaitingRoom", function (data) {
      // console.log('inMeetingServiceListener onUserIsInWaitingRoom', data);
    });

    ZoomMtg.inMeetingServiceListener("onMeetingStatus", function (data) {
      // console.log('inMeetingServiceListener onMeetingStatus', data);
    });
  }

  beginJoin(meetingConfig.signature);
}
