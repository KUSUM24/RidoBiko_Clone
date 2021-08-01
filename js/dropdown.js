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
dropArr.map((item) => {
  document.getElementById(
    "pickup-items"
  ).innerHTML = `<a class="dropdown-item" href="#">${item}</a>`;
});
