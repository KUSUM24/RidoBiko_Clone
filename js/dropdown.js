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
