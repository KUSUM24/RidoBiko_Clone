const changeRadioInput = (radioIndex) => {
  const radio1 = document.getElementById("radio-1");
  const radio2 = document.getElementById("radio-2");
  if (radioIndex == 1) {
    radio2.classList.remove("radio-btn--checked");
    radio1.classList.add("radio-btn--checked");
  }
  if (radioIndex == 2) {
    radio1.classList.remove("radio-btn--checked");
    radio2.classList.add("radio-btn--checked");
  }
};

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
  console.log(item);
  return (cityList += `<a class="dropdown-item" href="#">${item}</a>`);
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
  console.log(item);
  return (timingList += `<a class="dropdown-item" href="#">${item}</a>`);
});
console.log(timingList);
document.getElementById("pickup-timing").innerHTML = timingList;
document.getElementById("drop-timing").innerHTML = timingList;
const showDate = () => {
  const dateInput = document.getElementById("date-input");
  const dateView = document.getElementById("date-view");
  console.log(dateView);
  dateView.style.display = "none !important";
  dateInput.style.display = "flex";
};
