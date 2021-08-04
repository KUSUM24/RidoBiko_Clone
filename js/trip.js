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

// Dropdown.js
let locateArr = [
  "Mumbai",
  "Bengaluru",
  "Ludiana",
  "Delhi",
  "Jaipur",
  "Mysore",
  "Barmer",
  "Patiala",
  "Gurgaon",
];
let cityList = "";

locateArr.map((item) => {
  return (cityList += `<option>${item}</option>`);
});
document.getElementById("location-items").innerHTML = cityList;

let dropArr = [
  "12:30 AM",
  "1:00 AM",
  "1:30 AM",
  "2:00 AM",
  "2:30 AM",
  "3:00 AM",
  "3:30 AM",
  "4:00 AM",
  "4:30 AM",
  "5:00 AM",
  "5:30 AM",
  "6:00 AM",
  "6:30 AM",
  "7:00 AM",
];
let timingList = "";
dropArr.map((item) => {
  return (timingList += `<option>${item}</option>`);
});
console.log(timingList);
document.getElementById("pickup-timing").innerHTML = timingList;
document.getElementById("drop-timing").innerHTML = timingList;
// const showDate = () => {
//   const dateInput = document.getElementById("date-input");
//   const dateView = document.getElementById("date-view");
//   console.log(dateView);
//   // dateView.style.display = "none !important";
//   dateInput.style.display = "flex";
// };

let durationArr = [
  "1hrs 10kms",
  "2hrs 20km",
  "3hrs 30km",
  "4hrs 40km",
  "5hrs 50km",
  "6hrs 60km",
  "7hrs 70km",
  "8hrs 80km",
  "9hrs 90km",
  "10hrs 100km",
];
const durationList = "";
durationArr.map((item) => {
  return (durationList += `<option>${item}</option>`);
});
document.getElementById("duration-list").innerHTML = durationList;
