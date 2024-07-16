const attendSelectWeb = document.getElementById("attendSelect");
const attendSelectMobile = document.getElementById("attendSelectMobile");

const selectBtns = document.querySelectorAll("#attendance-type button");

const liveAttendCheckout = document.getElementById(
  "live-attendance-fees-checkout"
);

const itemPriceTag = document.getElementById("item-price");
const itemDiscountTag = document.getElementById("item-discount");
const paymetGetwayFeesTag = document.getElementById("paymet-getway-fees");
const liveAttendFeesTag = document.getElementById("live-attend-fees");
const totalPriceTag = document.getElementById("total-price");
const amountStript = document.getElementById("amount");

var itemPrice = getNumber(itemPriceTag.innerText);
var itemDiscount = getNumber(itemDiscountTag.innerText);
var paymetGetwayFees = getNumber(paymetGetwayFeesTag.innerText);
var totalPrice = getNumber(totalPriceTag.innerText);

var liveAttendFees = 0;
var stripeFees = 0.04;

function getNumber(price) {
  return parseFloat(String(price).split("$")[1]);
}

function updatePaymetGetwayFees(liveAttendFees = 0) {
  paymetGetwayFees = (itemPrice - itemDiscount + liveAttendFees) * stripeFees;
  paymetGetwayFeesTag.innerText = `$${paymetGetwayFees}`;
  updateTotalPrice();
}

function updateTotalPrice() {
  totalPrice = itemPrice - itemDiscount + paymetGetwayFees + liveAttendFees;
  totalPriceTag.innerText = `$${totalPrice}`;
  amountStript.value = totalPrice * 100;
  amountStript.setAttribute("value", totalPrice * 100);
}

// for (const selectBtn of selectBtns) {
//   selectBtn.addEventListener("click", function (e) {
//     for (const btn of selectBtns) {
//       btn.classList.remove("bg-blue-700", "text-white");
//     }

//     selectBtn.classList.add("bg-blue-700", "text-white");

//     if (selectBtn.name === "live") {
//       liveAttendCheckout.classList.remove("hidden");
//       liveAttendCheckout.classList.add("flex");
//       liveAttendFees = getNumber(liveAttendFeesTag.innerText);
//     } else {
//       liveAttendCheckout.classList.add("hidden");
//       liveAttendCheckout.classList.remove("flex");
//       liveAttendFees = 0;
//     }
//     updatePaymetGetwayFees(liveAttendFees);
//   });
// }

const textMap = {
  ar: {
    "info-alert-msg-standard":
      "الرجاء العلم أنه سيتم تحصيل رسوم الحضور المباشر",
    "info-alert-msg-premium":
      "انت الالتسجيل للحضور في القاعة مقابل 150 دولارًا.",
  },
  en: {
    "info-alert-msg-standard":
      "Please note that the live attendance fees will be collected",
    "info-alert-msg-premium":
      "You are registering to attend in person for $150.",
  },
};

const alertMessageStandard = document.querySelector("#alertMessageStandard");
const alertMessageStandard2 = document.querySelector("#alertMessageStandard2");
const alertMessagePremium = document.querySelector("#alertMessagePremium");
const alertMessagePremium2 = document.querySelector("#alertMessagePremium2");

function selectHandler(e) {
  console.log(e.target.value);
  let currentLang = document.documentElement.dir === "rtl" ? "ar" : "en";

  if (e.target.value === "live") {
    alertMessageStandard.classList.add("hidden");
    alertMessagePremium.classList.remove("hidden");
    alertMessagePremium.classList.add("flex");
    alertMessageStandard2.classList.add("hidden");
    alertMessagePremium2.classList.remove("hidden");
    alertMessagePremium2.classList.add("flex");

    liveAttendCheckout.classList.remove("hidden");
    liveAttendCheckout.classList.add("flex");
    liveAttendFees = getNumber(liveAttendFeesTag.innerText);
  } else {
    alertMessageStandard.classList.remove("hidden");
    alertMessageStandard.classList.add("flex");
    alertMessagePremium.classList.add("hidden");
    alertMessageStandard2.classList.remove("hidden");
    alertMessageStandard2.classList.add("flex");
    alertMessagePremium2.classList.add("hidden");
    // alertMessage.textContent = textMap[currentLang]["info-alert-msg-premium"];
    // alertMessage2.textContent = textMap[currentLang]["info-alert-msg-premium"];
    liveAttendCheckout.classList.remove("flex");
    liveAttendCheckout.classList.add("hidden");
    liveAttendFees = 0;
  }
  updatePaymetGetwayFees(liveAttendFees);
}

updatePaymetGetwayFees();
