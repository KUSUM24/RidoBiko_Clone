// Radio CSS
const changeRadioInput = (radioIndex) => {
  const radio1 = document.getElementById("radio-1");
  const radio2 = document.getElementById("radio-2");
  if (radioIndex == 1) {
    radio2.classList.remove("radio-btn--checked");
    radio1.classList.add("radio-btn--checked");
    document.getElementById("outstation-trip").style.display = "flex";
    document.getElementById("hourly-trip").style.display = `none`;
  }
  if (radioIndex == 2) {
    radio1.classList.remove("radio-btn--checked");
    radio2.classList.add("radio-btn--checked");
    document.getElementById("outstation-trip").style.display = "none";
    document.getElementById("hourly-trip").style.display = `flex`;
  }
};

// Radio HTML

// Date.js
var days = [
  "Sunday",
  "Monday",
  "Tuesday",
  "Wednesday",
  "Thursday",
  "Friday",
  "Saturday",
];
let today = new Date();
let month = today.getMonth() + 1; //As January is 0.
let fullYear = today.getFullYear().toString();
let year = fullYear.charAt(2) + fullYear.charAt(3);

let dateArr = today.toDateString().split(" ");
let dateReturn = dateArr[2] + " ";
let finalDate = dateArr[1] + "'" + year;
console.log(finalDate);
// Date
document.getElementById("date-return").innerHTML = dateReturn;
// Month and Year
document.getElementById("month-return").innerHTML = finalDate;

let dayIndex = today.getDay();
let day = days[dayIndex];
console.log(day.toUpperCase());

// Day
document.getElementById("day-return").innerHTML = day.toUpperCase();
