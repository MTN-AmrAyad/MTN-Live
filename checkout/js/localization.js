// localization.js
const translations = {
  en: {
    "You are almost there": "You are almost there",
    Information: "Information",
    Checkout: "Checkout",
    Finish: "Finish",
    "Choose Attendance Type": "Choose Attendance Type",
    // "Online Attendance": "Standard Package",
    Standard: "Standard",
    or: "or",
    // "Live In the hall (+ 150$)": "Premium Package",
    Premium: "Premium",
    "Payment Details": "Payment Details",
    Fullname: "Fullname",
    Email: "Email",
    "Phone Number": "Phone Number",
    "Search Country Name": "Search Country Name",
    "Submit Payment": "Submit Payment",
    "Stripe Amount": "  The amount you will be charged by Stripe is 4%.",
    "Your Order": "Your Order",
    "Original Price": "Original Price",
    Discount: "Discount",
    "Applies Coupon": "Applies Coupon",
    "Live Attendance Fees": "Live Attendance Fees",
    "Gateway Fees": "Gateway Fees",
    Total: "Total",
    "info-alert": "Info Alert!",
    "info-alert-msg-standard":
      "Standard attendance is through live stream only.",
    "info-alert-msg-premium":
      "Premium Attendance live from the hall is an additional fee of 150$.",
  },
  ar: {
    "You are almost there": " تفاصيل الدفع",
    Information: " المعلومات الشخصية",
    Checkout: " تفاصيل الدفع",
    Finish: " الانتهاء",
    "Choose Attendance Type": " اختر نوع الحضور",
    Standard: "حضور عادي",
    "(Free)": " (مجاني)",
    or: " أو",
    Premium: "حضور متميز",
    "Payment Details": " تفاصيل الدفع",
    Fullname: "الاسم الكامل",
    Email: " البريد الالكتروني",
    "Phone Number": " رقم الهاتف",
    "Search Country Name": " ابحث عن اسم الدولة",
    "Submit Payment": " تأكيد الدفع",
    "Stripe Amount": "  سيتم خصم 4% من القيمة الإجمالية للدفع عبر Stripe.",
    "Your Order": " التفاصيل",
    "Original Price": " السعر الأصلي",
    Discount: " الخصم",
    "Applies Coupon": " كوبون الخصم",
    "Live Attendance Fees": " رسوم الحضور في القاعة",
    "Gateway Fees": "  رسوم بوابة الدفع",
    Total: " الإجمالي",
    "info-alert": "ملاحظة!",
    "info-alert-msg-standard": "الحضور العادي من خلال البث اونلاين فقط",
    "info-alert-msg-premium": "الحضور مباشرة من القاعة رسوم اضافية 150$.",
  },
  // Add more languages as needed
};

window.onload = function () {
  let getLang = getCookie("language");
  getLang == "ar" ? setLanguage("ar") : setLanguage("en");
};

// Function to change language
function setLanguage(language) {
  const elements = document.querySelectorAll("[data-translate]");
  const paymentInputs = document.querySelectorAll(".payment-inputs input");
  paymentInputs.forEach((input) => {
    const key = input.getAttribute("data-translate");
    if (translations[language] && translations[language][key]) {
      input.setAttribute("placeholder", translations[language][key]);
    }
  });

  elements.forEach((element) => {
    const key = element.getAttribute("data-translate");
    if (translations[language] && translations[language][key]) {
      element.textContent = translations[language][key];
      if (language == "ar") {
        element.classList.add("font-[Cairo]");
      } else {
        element.classList.remove("font-[Cairo]");
      }
    }
  });
  if (getCookie("language") && getCookie("language") == "ar") {
    updateCookie("language", language == "ar" ? "ar" : "en");
  } else {
    setCookie("language", language == "ar" ? "ar" : "en", 7);
  }
  document.documentElement.dir = language === "ar" ? "rtl" : "ltr";
  let btnText = document.querySelector(".text-span");
  btnText.textContent = language === "ar" ? "EN" : "العربيه";
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
