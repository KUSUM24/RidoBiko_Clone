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
