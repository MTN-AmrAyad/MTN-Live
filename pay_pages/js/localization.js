// localization.js
const translations = {
  en: {
    "Adam & Eve": "Adam & Eve",
    "Main Level": "Main Level",
    "25% discount": "25% discount",
    "Buy It": "Buy It",
    "(5 Ratings)": "(5 Ratings)",
    Trainings: "Trainings",
    "20 hrs Live training": "20 hrs Live training",
    Videos: "Videos",
    Access: "Access",
    "Access on 3 devices": "Access on 3 devices",
    Availability: "Availability",
    Documents: "Documents",
    Certificate: "Certificate",
    Instructor: "Instructor",
    "Life time access": "Life time access",
    "Manual Included": "Manual Included",
    "Certificate On Completion": "Certificate On Completions",
    "Dr. Ahmed Eldemellawy": "Dr. Ahmed Eldemellawy",
    "20 hrs On-demand videos": "20 hrs On-demand videos",
    "Copyright © 2024 MTN LIve | Powered by MTN (Manage The Now)":
      "Copyright © 2024 MTN LIve | Powered by MTN (Manage The Now)",
  },
  ar: {
    "Adam & Eve": "آدم وحواء",
    "Main Level": "المستوي الأساسي",
    "25% discount": "25% خصم",
    "Buy It": "اشتر الان !",
    "(5 Ratings)": "(تقييم 5 نجوم)",
    Trainings: "التدريبات",
    "20 hrs Live training": "20 ساعه من التدريب المباشر",
    Videos: "الفيديوهات",
    Access: "الوصول",
    "Access on 3 devices": "امكانيه الوصول من 3 اجهزه",
    Availability: "الاتاحه",
    Documents: "المستندات",
    Certificate: "الشهادة",
    Instructor: "المحاضر",
    "Life time access": "الوصول مدى الحياه",
    "Manual Included": "الدليل متضمن",
    "Certificate On Completion": "الشهادة عند الانتهاء",
    "Dr. Ahmed Eldemellawy": "الدكتور احمد الدملاوي",
    "20 hrs On-demand videos": "20 ساعه من الفيديوهات حسب الطلب",
    "Copyright © 2024 MTN LIve | Powered by MTN (Manage The Now)":
      "حقوق الطبع والنشر © 2024 MTN LIve | تم تطويره بواسطة MTN (Manage The Now)",
  },
  // Add more languages as needed
};

window.onload = function () {
  getLang = getCookie("language");
  if (getLang == "ar") {
    setLanguage("ar");
  } else {
    setLanguage("en");
  }
};

// Function to change language
function setLanguage(language) {
  const elements = document.querySelectorAll("[data-translate]");
  elements.forEach((element) => {
    const key = element.getAttribute("data-translate");
    if (translations[language] && translations[language][key]) {
                console.log(translations[language][key])

      element.textContent = translations[language][key];
      
      if (language == "ar") {
        element.classList.add("font-[Cairo]");
      } else {
        element.classList.remove("font-[Cairo]");
      }
    }
  });
  // check if there is a value in the cookies with the name of language then update using updateCookie function else set the cookie with the value of 1
  if (getCookie("language") && getCookie("language") == "ar") {
    updateCookie("language", language == "ar" ? "ar" : "en");
  } else {
    setCookie("language", language == "ar" ? "ar" : "en", 7);
  }
  // console.log(getCookie("language"));
  // setCookie("language", language, 30);
  document.documentElement.dir = language === "ar" ? "rtl" : "ltr";
  let changeBtn = document.querySelector(".changeLang .text-span");
  changeBtn.textContent = language === "ar" ? "EN" : "العربيه";
}

// Determine user's preferred language (you can implement this differently based on your needs)
let userLanguage = navigator.language.substring(0, 2);

// Set initial language
// setLanguage(userLanguage);

// Function to change language on button click
function changeLanguage() {
  // For demonstration purposes, toggle between English and French
  userLanguage = userLanguage === "en" ? "ar" : "en";
  setLanguage(userLanguage);
}

function setCookie(name, value, days) {
  const expires = new Date();
  expires.setTime(expires.getTime() + days * 24 * 60 * 60 * 1000);
  document.cookie = `${name}=${value};expires=${expires.toUTCString()};path=/`;
}

function getCookie(name) {
  const cookies = document.cookie.split(";");
  for (const cookie of cookies) {
    const [cookieName, cookieValue] = cookie.trim().split("=");
    if (cookieName == name) {
      return cookieValue;
    }
  }
  return null;
}

function updateCookie(cookieName, newValue) {
  setCookie(cookieName, newValue, 7); // Update the cookie value, expires in 7 days
}
