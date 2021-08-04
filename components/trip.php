<div
  class="trip-main d-flex justify-content-center flex-column align-items-center"
>
  <div class="radio-div d-flex justify-content-between align-items-center">
    <label
      id="radio-1"
      class="radio-btn trip-time-container radio-1 radio-btn--checked"
      >OUTSTATION ROUND TRIP
      <input
        onchange="changeRadioInput(1)"
        type="radio"
        name="trip-time"
        checked
      />
      <span class="trip-time-checkmark"></span>
    </label>
    <label id="radio-2" class="radio-btn trip-time-container radio-2"
      >HOURLY RENTAL
      <input onchange="changeRadioInput(2)" type="radio" name="trip-time" />
      <span class="trip-time-checkmark"></span>
    </label>
  </div>
  <div class="row pickup-details d-flex w-100 justify-content-start" id='trip-content'>
    <div class="location-title pick-item col-md-3 col-xs-15">
      <!-- <div class="dropdown show location-drop">
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
      </div> -->
      <label for="sel1">
        <span>
            <div class="pickup-text">PICKUP LOCATION</div>
            <!-- <span class="city bold-text h1">Mumbai</span> -->
      </span>
    </label>
      <select class="select-css form-control" id="sel1" name="sellist1" >
        <option >
          Mumbai
        </option>
        <option>Bengaluru</option>
        <option>Ludiana</option>
        <option>Delhi</option>
        <option>Jaipur</option>
        <option>Mysore</option>
        <option>Barmer</option>
        <option>Patiala</option>
        <option>Gurgaon</option>
      </select>
    </div>
    <div class="date pick-item col-md-4 col-xs-15">
      <div
        id="date-view"
        class="date-flex d-flex justify-content-around"
      >
          <a
            class="date-div btn "
            
          >
            <div class="pickup-text d-flex align-items-center">
              DEPARTURE
              <span class="material-icons-outlined"> keyboard_arrow_down </span>
            </div>
            
            <input type="date">

          </a>
         
        <a
          class="date-div btn"
         
        >
          <div class="pickup-text d-flex align-items-center">
            RETURN
            <span class="material-icons-outlined"> keyboard_arrow_down </span>
          </div>
          <!-- <div class="d-flex align-items-center">
            <div class="date-return bold-text h1" id="date-return">23</div>
            <div class="month-return" id="month-return">JUL'21</div>
          </div>
          <div class="day-return" id="day-return">FRIDAY</div> -->
          <input type="date">

        </a>
      </div>
      
    </div>
    <div class="pickup-time pick-item col-md-3 col-xs-15">
      <!-- <div class="dropdown show">
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
      </div> -->
      <label for="sel1">
        <span>
        <div class="pickup-text">PICKUP TIME</div>
      </span>
    </label>
      <select class="select-css-timing form-control" id="sel1" name="sellist1" >
        <option >12:00 AM</option>
        <option>12:30 AM</option>
        <option>1:00 AM</option>
        <option>1:30 AM</option>
        <option>2:00 AM</option>
        <option>2:30 AM</option>
        <option>3:00 AM</option>
        <option>3:30 AM</option>
        <option>4:00 AM</option>
        <option>4:30 AM</option>
        <option>5:00 AM</option>
        <option>5:30 AM</option>
        <option>6:00 AM</option>
        <option>6:30 AM</option>
        <option>7:00 AM</option>

      </select>

    </div>
    <div class="drop-time pick-item col-md-2 col-xs-15">
      <!-- <div class="dropdown show">
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
            <span class="city h1">12:00 AM</span>
          </span>
        </a>

        <div
          class="dropdown-menu"
          id="drop-timing"
          aria-labelledby="dropdownMenuLink"
        ></div>
      </div> -->
      <label for="sel1">
        <span>
        <div class="pickup-text">DROP TIME</div>
      </span>
    </label>
      <select class="select-css-timing form-control" id="drop-timing" name="sellist1" >
      <option >12:00 AM</option>
        <option>12:30 AM</option>
        <option>1:00 AM</option>
        <option>1:30 AM</option>
        <option>2:00 AM</option>
        <option>2:30 AM</option>
        <option>3:00 AM</option>
        <option>3:30 AM</option>
        <option>4:00 AM</option>
        <option>4:30 AM</option>
        <option>5:00 AM</option>
        <option>5:30 AM</option>
        <option>6:00 AM</option>
        <option>6:30 AM</option>
        <option>7:00 AM</option>
      </select>
    </div>

    
  </div>
  
  <button class="ridobiko-btn">
    <a class="btn-inner" href="https://www.ridobiko.com/Blog" target="_blank">
      RIDOBIKO
    </a>
  </button>
</div>
