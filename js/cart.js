// Scroll Top
$(document).ready(function () {
  $(window).scrollTop(0);
});
$(document).ready(function () {
  window.history.go("searchBikes-main.php");
});
var days = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
let today = new Date();
let month = today.getMonth() + 1; //As January is 0.
let fullYear = today.getFullYear().toString();
let year = fullYear.charAt(2) + fullYear.charAt(3);

let dateArr = today.toDateString().split(" ");
let dateReturn = dateArr[2] + " ";
let finalDate = dateArr[1] + "'" + year + ", ";
console.log(finalDate);
// Date
document.getElementById("pick-date").innerHTML = dateReturn;
document.getElementById("drop-date").innerHTML = dateReturn;
// Month and Year
document.getElementById("pick-month-year").innerHTML = finalDate;
document.getElementById("drop-month-year").innerHTML = finalDate;

let dayIndex = today.getDay();
let day = days[dayIndex];
console.log(dateReturn, finalDate, day);

// Day
document.getElementById("pick-day").innerHTML = day;
document.getElementById("drop-day").innerHTML = day;

// View Offers Section
$(document).ready(function () {
  $("#view-offers-btn").click(function () {
    $("#view-offers").toggle("slow");
  });
});

$(document).ready(function () {
  $("#refund-policy-btn").click(function () {
    $("#refund-policy").toggle("slow");
  });
});
$(document).ready(function () {
  $("#cancellation-policy-btn").click(function () {
    $("#cancellation-policy").toggle("slow");
  });
});
$(document).ready(function () {
  $("#accident-policy-btn").click(function () {
    $("#accident-policy").toggle("slow");
  });
});
