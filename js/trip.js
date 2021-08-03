// Radio CSS
const changeRadioInput = (radioIndex) => {
  const radio1 = document.getElementById("radio-1");
  const radio2 = document.getElementById("radio-2");
  if (radioIndex == 1) {
    radio2.classList.remove("radio-btn--checked");
    radio1.classList.add("radio-btn--checked");
    document.getElementById(
      "trip-content"
    ).innerHTML = `<div class="location-title pick-item col-md-3 col-xs-15">
    <div class="dropdown show location-drop">
      <a
        class="btn dropdown-btn dropdown-toggle"
        href="#"
        role="button"
        id="dropdownMenuLink"
        data-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false"
      >
        <span>
          <div class="pickup-text">PICKUP LOCATION</div>
          <span class="city bold-text h1">Mumbai</span>
        </span>
      </a>

      <div
        class="dropdown-menu"
        id="location-items"
        aria-labelledby="dropdownMenuLink"
      ></div>
    </div>
  </div>
  <div class="date pick-item col-md-4 col-xs-15">
    <div
      onclick="showDate()"
      id="date-view"
      class="date-flex d-flex justify-content-around"
    >
      <div class="dropdown show">
        <a
          class="btn dropdown-btn"
          href="#"
          role="button"
          id="dropdownMenuLink"
          data-toggle="dropdown"
          aria-haspopup="true"
          aria-expanded="false"
        >
          <div class="pickup-text d-flex align-items-center">
            DEPARTURE
            <span class="material-icons-outlined"> keyboard_arrow_down </span>
          </div>
          <div class="d-flex align-items-center">
            <div class="city bold-text h1">23</div>
            <div class="month">JUL'21</div>
          </div>
          <div class="day">FRIDAY</div>
        </a>

        <!-- <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div> -->
      </div>
      <a
        class="btn"
        href="#"
        role="button"
        id="dropdownMenuLink"
        data-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false"
      >
        <div class="pickup-text d-flex align-items-center">
          RETURN
          <span class="material-icons-outlined"> keyboard_arrow_down </span>
        </div>
        <div class="d-flex align-items-center">
          <div class="date-return bold-text h1" id="date-return">23</div>
          <div class="month-return" id="month-return">JUL'21</div>
        </div>
        <div class="day-return" id="day-return">FRIDAY</div>
      </a>
    </div>
    <div id="date-input" class="date-input">
      <input type="date" class="form-control" />
      <input type="date" class="form-control" />
    </div>
  </div>
  <div class="pickup-time pick-item col-md-3 col-xs-15">
    <div class="dropdown show">
      <a
        class="btn dropdown-btn dropdown-toggle"
        href="#"
        role="button"
        id="dropdownMenuLink"
        data-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false"
      >
        <span>
          <div class="pickup-text">PICKUP TIME</div>
          <span class="city bold-text h1">12:00 AM</span>
        </span>
      </a>

      <div
        class="dropdown-menu"
        id="pickup-timing"
        aria-labelledby="dropdownMenuLink"
      >
        
      </div>
    </div>
  </div>
  <div class="drop-time pick-item col-md-2 col-xs-15">
    <div class="dropdown show">
      <a
        class="btn dropdown-btn dropdown-toggle"
        href="#"
        role="button"
        id="dropdownMenuLink"
        data-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false"
      >
        <span>
          <div class="pickup-text">DROP TIME</div>
          <span class="city bold-text h1">12:00 AM</span>
        </span>
      </a>

      <div
        class="dropdown-menu"
        id="drop-timing"
        aria-labelledby="dropdownMenuLink"
      ></div>
    </div>
  </div>`;
  }
  if (radioIndex == 2) {
    radio1.classList.remove("radio-btn--checked");
    radio2.classList.add("radio-btn--checked");
    document.getElementById(
      "trip-content"
    ).innerHTML = `<div class="location-title pick-item col-md-4 col-xs-15">
    <div class="dropdown show location-drop">
      <a
        class="btn dropdown-btn dropdown-toggle"
        href="#"
        role="button"
        id="dropdownMenuLink"
        data-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false"
      >
        <span>
          <div class="pickup-text">PICKUP LOCATION</div>
          <span class="city bold-text h1">Mumbai</span>
        </span>
      </a>

      <div
        class="dropdown-menu"
        id="location-items"
        aria-labelledby="dropdownMenuLink"
      ></div>
    </div>
  </div>
  <div class="date pick-item col-md-3 col-xs-15">
    <div
      onclick="showDate()"
      id="date-view"
      class="date-flex d-flex justify-content-around"
    >
      <div class="dropdown show">
        <a
          class="btn dropdown-btn"
          href="#"
          role="button"
          id="dropdownMenuLink"
          data-toggle="dropdown"
          aria-haspopup="true"
          aria-expanded="false"
        >
          <div class="pickup-text d-flex align-items-center">
            DEPARTURE
            <span class="material-icons-outlined"> keyboard_arrow_down </span>
          </div>
          <div class="d-flex align-items-center">
            <div class="city bold-text h1">23</div>
            <div class="month">JUL'21</div>
          </div>
          <div class="day">FRIDAY</div>
        </a>
      </div>
      
    </div>
    <div id="date-input" class="date-input">
      <input type="date" class="form-control" />
      <input type="date" class="form-control" />
    </div>
  </div>
  <div class="pickup-time pick-item col-md-2 col-xs-15">
    <div class="dropdown show">
      <a
        class="btn dropdown-btn dropdown-toggle"
        href="#"
        role="button"
        id="dropdownMenuLink"
        data-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false"
      >
        <span>
          <div class="pickup-text">PICKUP TIME</div>
          <span class="time-pickup bold-text h1">12:00 AM</span>
        </span>
      </a>

      <div
        class="dropdown-menu"
        id="pickup-timing"
        aria-labelledby="dropdownMenuLink"
      >
        
      </div>
    </div>
  </div>
  <div class="drop-time pick-item col-md-3 col-xs-15">
    <div class="dropdown show">
      <a
        class="btn dropdown-btn dropdown-toggle"
        href="#"
        role="button"
        id="dropdownMenuLink"
        data-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false"
      >
        <span>
          <div class="pickup-text">DURATION </div>
          <span class="duration bold-text h1">2hrs 20km</span>
        </span>
      </a>

      <div
        class="dropdown-menu"
        id="duration-list"
        aria-labelledby="dropdownMenuLink"
      ></div>
    </div>
  </div>`;
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
  return (timingList += `<a class="dropdown-item" href="#">${item}</a>`);
});
document.getElementById("pickup-timing").innerHTML = timingList;
document.getElementById("drop-timing").innerHTML = timingList;
const showDate = () => {
  const dateInput = document.getElementById("date-input");
  const dateView = document.getElementById("date-view");
  console.log(dateView);
  dateView.style.display = "none !important";
  dateInput.style.display = "flex";
};

let durationArr = [
  "1hrs 10km",
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
  return (durationList += `<a class="dropdown-item" href="#">${item}</a>`);
});
document.getElementById("duration-list").innerHTML = durationList;
