<div
      class="
        trip-main
        d-flex
        justify-content-center
        flex-column
        align-items-center
      "
    >
      <div class="radio-div d-flex justify-content-between align-items-center">
        <label id="radio-1" class="radio-btn trip-time-container radio-1 radio-btn--checked">OUTSTATION ROUND TRIP
          <input  onchange="changeRadioInput(1)" type="radio" name="trip-time" checked>
          <span class="trip-time-checkmark"></span>
        </label>
        <label id="radio-2" class="radio-btn trip-time-container  radio-2">HOURLY RENTAL
          <input onchange="changeRadioInput(2)" type="radio" name="trip-time">
          <span class="trip-time-checkmark"></span>
        </label>
      </div>
      <div class="row pickup-details d-flex w-100 justify-content-start">
        <div class="location-title pick-item col-md-3 col-xs-15">
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

            <div class="dropdown-menu" id='location-items' aria-labelledby="dropdownMenuLink">
              
            </div>
          </div>
        </div>
        <div class="date pick-item col-md-4 col-xs-15">
          <div class="date-flex d-flex justify-content-around">
          <!-- <div class="dropdown show">
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
                <span class="material-icons-outlined">
                  keyboard_arrow_down
                </span>
              </div>
              <div class="d-flex align-items-center">
                <div class="city bold-text h1">23</div>
                <div class="month">
                  JUL'21
                </div>
              </div>
              <div class="day">FRIDAY</div>

            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div> -->
          <!-- <label for="abcd">
            button
            </label> -->
            <input class="input-date" id="abcd" type="date" value="2018-07-22">

          <!-- <div class="dropdown show"> -->
            <a
              class="btn "
              href="#"
              role="button"
              id="dropdownMenuLink"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <div class="pickup-text d-flex align-items-center" >RETURN
                <span class="material-icons-outlined">
                  keyboard_arrow_down
                </span>
              </div>
              <div class="d-flex align-items-center">
              <div class="date-return bold-text h1" id="date-return">23</div>
                <div class="month-return" id="month-return">
                  JUL'21
                </div>
              </div>
              <div class="day-return" id='day-return'>FRIDAY</div>

            </a>

            
        <!-- </div> -->
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
              <span class="city bold-text h1 ">12:00 AM</span>
            </span>
            </a>

            <div class="dropdown-menu" id='pickup-timing'  aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="#">12:30 AM</a>
              <a class="dropdown-item" href="#">1:00 AM</a>
              <a class="dropdown-item" href="#">1:30 AM</a>
              <a class="dropdown-item" href="#">2:00 AM</a>
              <a class="dropdown-item" href="#">2:30 AM</a>
              <a class="dropdown-item" href="#">3:00 AM</a>
              <a class="dropdown-item" href="#">3:30 AM</a>
              <a class="dropdown-item" href="#">4:00 AM</a>
              <a class="dropdown-item" href="#">4:30 AM</a>
              <a class="dropdown-item" href="#">5:00 AM</a>
              <a class="dropdown-item" href="#">5:30 AM</a>
              <a class="dropdown-item" href="#">6:00 AM</a>
              <a class="dropdown-item" href="#">6:30 AM</a>
              <a class="dropdown-item" href="#">7:00 AM</a>
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

            <div class="dropdown-menu" id='drop-timing' aria-labelledby="dropdownMenuLink">
            </div>
          </div>
        </div>
      </div>
      <button class="ridobiko-btn">
        <a class="btn-inner" href="https://www.ridobiko.com/Blog" target="_blank">
        RIDOBIKO
      </a>
      </button>
    </div>