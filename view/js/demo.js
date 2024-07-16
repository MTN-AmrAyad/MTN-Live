function toggleMenu(e) {
    
    
    var classes =e.target.className
    
    var arr = classes.split(" ");
    arr = arr[1].split("-");
    
  if (arr[1] === "bars") {

    document.getElementById("dropdown-menu").classList.remove("d-none");
    document.getElementById("overlay").style.display = "block";
    document.getElementById("body-container").style.overflow = "hidden";
    document.getElementById("body-container").style.height = "90vh";
  } else if (arr[1] === "xmark") {
    document.getElementById("dropdown-menu").classList.add("d-none");
    document.getElementById("overlay").style.display = "none";
    document.getElementById("body-container").style.overflow = "visible";
    document.getElementById("body-container").style.height = "100%";
  }
}

// function toggleCoursesMenu(e) {
//   document.getElementById("dropdown-courses-menu").classList.toggle("d-none");

//   document.getElementById("add-course-icon").innerText =
//     document.getElementById("add-course-icon").innerText === "add"
//       ? "close"
//       : "add";
// }

if(document.getElementById("overlay-loading")){
    
setInterval(function () {
    document.getElementById("overlay-loading").style.display = "none";
}, 5000);
}

function on() {
        document.getElementById("overlay-clips").style.display = "block";
      }

      function off() {
        document.getElementById("overlay-clips").style.display = "none";
      }