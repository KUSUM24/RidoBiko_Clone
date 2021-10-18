<?php 
include "common/link.php";
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/index-page.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="css/header-resp.css">

    <title>RidoBiko</title>
    
</head>
<body>
    <!-- Background Image  -->
    <img class="background-img" src="images/background.jpeg" alt="BACKGROUND">
    <!-- Header HTML  -->
    <?php include "common/header.php"; ?>
    <!-- Trip Section  -->
    <div class="trip-main d-flex justify-content-center flex-column align-items-center">
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
        <label id="radio-3" class="radio-btn trip-time-container radio-3 mx-0"
          >SHORT TERM RENTAL
          <input onchange="changeRadioInput(3)" type="radio" name="trip-time" />
          <span class="trip-time-checkmark"></span>
        </label>
      </div>
      <div
        class="row pickup-details w-100 justify-content-start"
        style="display: flex"
        id="radio-content-1"
      >
        <div class="location-title city-main pick-item col-md-3 col-xs-15">
          <label class="pickup-text" for="sel1"> PICKUP LOCATION </label>
          <select class="select-css form-control" id="sel1" name="sellist1">
            <option>Mumbai</option>
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
        <div class="date pick-item col-md-4 col-xs-15 pt-1">
          <div id="date-view" class="date-flex d-flex justify-content-around">
            <a class="date-div btn">
              <div class="pickup-text d-flex align-items-center ml-4 mb-2">
                DEPARTURE
                <span class="material-icons-outlined"> keyboard_arrow_down </span>
              </div>

              <input class="input-date" type="date" value="<?php echo date('Y-m-d'); ?>" />
            </a>

            <a class="date-div btn">
              <div class="pickup-text d-flex align-items-center ml-4 mb-2">
                RETURN
                <span class="material-icons-outlined"> keyboard_arrow_down </span>
              </div>
              
              <input class="input-date" type="date" value="<?php echo date('Y-m-d'); ?>" />
            </a>
          </div>
        </div>
        <div class="time-main-div d-flex justify-content-between w-100 col-md-5 col-xs-15">

          <div class="pickup-time pick-item ">
            <label for="sel1">
                <div class="pickup-text">PICKUP TIME</div>
            </label>
            <select class="select-css-timing form-control" id="sel1" name="sellist1">
              <option>12:00 AM</option>
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
          <div class="drop-time pick-item ">
            <label for="sel1">
                <div class="pickup-text">DROP TIME</div>
            </label>
            <select
            class="select-css-timing form-control"
            id="drop-timing"
            name="sellist1"
            >
            <option>12:00 AM</option>
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
      </div>
      <div
        class="row pickup-details w-100 justify-content-start"
        id="radio-content-2"
        style="display: none"
      >
        <div class="location-title city-main pick-item col-md-4 col-xs-15">
          <label for="sel1">
            <span>
              <div class="pickup-text">PICKUP LOCATION</div>
            </span>
          </label>
          <select class="select-css form-control" id="sel1" name="sellist1">
            <option>Mumbai</option>
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
        <div class="date pick-item col-md-3 col-xs-15">
          <div
            onclick="showDate()"
            id="date-view"
            class="date-flex d-flex justify-content-start"
          >
            <div class="dropdown show">
              <a class="btn dropdown-btn">
                <div class="pickup-text d-flex align-items-center ml-2 mb-2">
                  DEPARTURE
                  <span class="material-icons-outlined"> keyboard_arrow_down </span>
                </div>
                <input class="input-date" type="date"  />
              </a>
            </div>
          </div>
        </div>
        <div class="time-main-div d-flex justify-content-between w-100 col-md-5 col-xs-15">
          <div class="pickup-time pick-item">
            <label for="sel1">
              <span>
                <div class="pickup-text">PICKUP TIME</div>
              </span>
            </label>
            <select class="select-css-timing form-control" id="sel1" name="sellist1">
              <option>12:00 AM</option>
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
         <div class="drop-time pick-item">
            <label for="sel1">
            <span>
              <div class="pickup-text">DURATION</div>
            </span>
            </label>
            <select class="select-css-timing form-control" id="sel1" name="sellist1">
              <option>1hrs 10kms</option>
              <option>2hrs 20kms</option>
              <option>3hrs 30kms</option>
              <option>4hrs 40kms</option>
              <option>5hrs 50kms</option>
              <option>6hrs 60kms</option>
              <option>7hrs 70kms</option>
              <option>8hrs 80kms</option>
              <option>9hrs 90kms</option>
              <option>10hrs 100kms</option>
            </select>
          </div>
        </div>
      </div>
      <div id="radio-content-3"></div>
      <button class="ridobiko-btn">
        <a class="btn-inner" href="searchBikes-main.php" target="_blank">
          SEARCH
        </a>
      </button>
    </div>

    <!-- Motorcycle Section  -->
    <div class="motorcycle">
        <div class="motorcycle-heading h1 text-center">
                Select From 1000+ Motorcycles
        </div>
        <div class="motorcycle-scroll d-flex justify-content-between align-items-center">
            <div class="scroll-title-main w-25 d-flex justify-content-between">
                <div class="scroll-title active-title" id="offers" onclick="setHeaderTitle('offers')">Super Offers</div>
                <div class="scroll-title" id="bikes" onclick="setHeaderTitle('bikes')">Bikes Starting From</div>
            </div>
            <div class="scroll-icons-1 d-flex">
                <div class="scroll-icon">
                <span class="material-icons-outlined">
                    chevron_left
                </span>
                </div>
                <div class="scroll-icon">
                <span class="material-icons-outlined">
                    chevron_right
                </span>
                </div>
            </div>
        </div>
        <hr class="hr-motor">
        <div class="motorcycle-content" id="motorcycle-content" >
          <div class="offers-section d-flex justify-content-between" id='offers-section' data-ride="carousel">
            <div class="card-motorcycle">
              <div class="d-flex align-items-center">
                    <div class="image-expire d-flex flex-column text-center align-items-center">
                        <img class="bike-image-motor" src="images/Bikes/Bike-1.jpg" alt="">
                        <div class="expire-date">Expires 16 Jan 20</div>
                    </div>
                        <div class="d-flex flex-column text-bike">
                        <div class="bike-offer">10% instant off on you first ride</div>
                        <div class="limited">Limited period offer</div>
                    </div>
                </div>
                <div class="bike-coupon text-center">
                    COUPON: <span class="coupon-name">RIDOBIKOFIRST</span>
                </div>
                <div class="bike-footer d-flex justify-content-around align-items-center">
                    <div class="terms">T&C's Apply</div>
                    <div class="book-now">Book Now</div>
                </div>
            </div>
                <div class="card-motorcycle">
                  <div class="d-flex align-items-center">
                    <div class="image-expire d-flex flex-column text-center align-items-center">
                        <img class="bike-image-motor" src="images/Bikes/Bike-2.jpg" alt="">
                        <div class="expire-date">Expires 16 Jan 20</div>
                    </div>
                    <div class="d-flex flex-column text-bike">
                        <div class="bike-offer">10% instant off on you first ride</div>
                        <div class="limited">Limited period offer</div>
                      </div>
                    </div>
                    <div class="bike-coupon text-center">
                      COUPON: <span class="coupon-name">RIDOBIKOFIRST</span>
                    </div>
                    <div class="bike-footer d-flex justify-content-around align-items-center">
                      <div class="terms">T&C's Apply</div>
                    <div class="book-now">Book Now</div>
                  </div>
                </div>
              <div class="card-motorcycle">
                <div class="d-flex align-items-center justify-content-between">
                  <div class="image-expire d-flex flex-column text-center align-items-center">
                    <img class="bike-image-motor" src="images/Bikes/Bike-3.jpg" alt="">
                    <div class="expire-date">Expires 16 Jan 20</div>
                  </div>
                  <div class="d-flex flex-column text-bike">
                    <div class="bike-offer ">10% instant off on you first ride</div>
                    <div class="limited">Limited period offer</div>
                  </div>
                </div>
                <div class="bike-coupon text-center">
                  COUPON: <span class="coupon-name">RIDOBIKOFIRST</span>
                </div>
                <div class="bike-footer d-flex justify-content-around align-items-center">
                    <div class="terms">T&C's Apply</div>
                    <div class="book-now">Book Now</div>
                </div>
              </div>
            </div>
            <div class="activa-section justify-content-between"  id='activa-section'>
              <div class="scooter-card d-flex align-items-start">
                <img onmouseover="getActivaDetails('img-activa-1', 'activa-1')" onmouseout="removeActivaDetails('img-activa-1', 'activa-1')" id='img-activa-1' class="activa-img" src="images/Bikes/Activa-1.png" alt="error">
                <div id="activa-1" class="details-div  flex-column justify-content-center align-items-center">
                  <div>Activa</div>
                    <hr class="activa-hr">
                    Your first activa ride on us
                    <div>Starting from <span class="activa-price">₹450</span></div>
                    <div class="terms_book d-flex justify-content-between w-75">
                      <div>T&C apply</div>
                      <div class="book-now-activa">
                        <a href="google.com"></a>
                        Book Now
                      </div>
                    </div>
                  </div>
                </div>
              <div class="scooter-card d-flex align-items-start" >
                <img onmouseover="getActivaDetails('img-activa-2', 'activa-2')" onmouseout="removeActivaDetails('img-activa-2', 'activa-2')" class="activa-img" src="images/Bikes/Activa-1.png" id='img-activa-2' alt="error">
                <div  id="activa-2" class="details-div flex-column justify-content-center align-items-center">
                <div>Activa</div>
                    <hr class="activa-hr">
                    Your first activa ride on us
                    <div>Starting from <span class="activa-price">₹450</span></div>
                    <div class="terms_book d-flex justify-content-between w-75">
                      <div>T&C apply</div>
                      <div class="book-now-activa">
                        <a href="google.com"></a>
                        Book Now
                      </div>
                    </div>
                  </div>
              </div>
              <div class="scooter-card d-flex align-items-start">
                <img onmouseover="getActivaDetails('img-activa-3', 'activa-3')" onmouseout="removeActivaDetails('img-activa-3', 'activa-3')" class="activa-img" src="images/Bikes/Activa-1.png" id='img-activa-3' alt="error">
                <div  id="activa-3" class="details-div flex-column justify-content-center align-items-center">
                  <div>Activa</div>
                    <hr class="activa-hr">
                    Your first activa ride on us
                    <div>Starting from <span class="activa-price">₹450</span></div>
                    <div class="terms_book d-flex justify-content-between w-75">
                      <div>T&C apply</div>
                      <div class="book-now-activa">
                        <a href="google.com"></a>
                        Book Now
                      </div>
                    </div>
                  </div>
                </div>
                <div class="scooter-card d-flex align-items-start">
                  <img onmouseover="getActivaDetails('img-activa-4', 'activa-4')" onmouseout="removeActivaDetails('img-activa-4', 'activa-4')" class="activa-img" src="images/Bikes/Activa-1.png" id='img-activa-4' alt="error">
                  <div  id="activa-4" class="details-div flex-column justify-content-center align-items-center">
                    <div>Activa</div>
                    <hr class="activa-hr">
                    Your first activa ride on us
                    <div>Starting from <span class="activa-price">₹450</span></div>
                    <div class="terms_book d-flex justify-content-between w-75">
                      <div>T&C apply</div>
                      <div class="book-now-activa">
                        <a href="google.com"></a>
                        Book Now
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>

    <!-- Booking Section  -->
    <div class="booking-main">
        <div class="booking">
            <div class="booking-heading h1 text-center">
                Why Book with Ridobiko ?
            </div>
        <hr>
        <div class="row images-main justify-content-around ">
            <div class="pair-images d-flex justify-content-between ">
                <div class="img-col col-md-3">
                    <img class="book-1 img-book" src="images/booking/book-1.png" alt="error">
                </div>
                <div class="img-col col-md-3">
                    <img class="book-2 img-book " src="images/booking/book-2.png" alt="error">
                </div>
            </div>
            <div class="pair-images d-flex justify-content-between ">
                <div class="img-col col-md-3">
                    <img class="book-3 img-book" src="images/booking/book-3.png" alt="error">
                </div>
                <div class="img-col col-md-3">
                <img class="book-4 img-book" src="images/booking/book-4.png" alt="error">
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Traveler Section  -->
    <div class="traveler-main">

        <div class="traveler-story">
            <div class="d-flex justify-content-between align-items-center px-3">
            <div class="traveler-heading h1">
                <b>
                    Traveler Stories
                </b>
            </div>
            <div class="scroll-icons-2 d-flex">
                <div class="scroll-icon">
                <span class="material-icons-outlined">
                    chevron_left
                </span>
                </div>
                <div class="scroll-icon">
                    <span class="material-icons-outlined">
                    chevron_right
                </span>
            </div>
            </div>
        </div>
        <hr class="hr-traveler w-100 mb-5">
        <div class="traveler-content-main d-flex justify-content-between " id="motorcycle-content" >
            <div class="card-traveler">
                <div class="d-flex align-items-center">
                    <div class="image-expire d-flex flex-column text-center align-items-center">
                        <img class="bike-image-travel" src="images/Traveler/Travel-1.jpg" alt="">
                        <div class="traveler-date">16 Jan 20</div>
                    </div>
                    <div class="d-flex flex-column text-bike">
                        <div class="traveler-title">One Mile At A Time, Rajasthan This Time</div>
                        <div class="traveler-name">Traveller : Mr. Ritik</div>
                    </div>
                </div>
                <div class="traveler-content">
                Ritik is self–employed and runs his own coaching institute in Bhopal, Madhya Pradesh for the students who are preparing for the engineering and medical entrance exams
                </div>
                <div class="bike-footer d-flex justify-content-around align-items-center">
                    <div class="read-more">Read More</div>
                </div>

            </div>
            <div class="card-traveler">
                <div class="d-flex align-items-center">
            <div class="image-expire d-flex flex-column text-center align-items-center">
                <img class="bike-image-travel" src="images/Traveler/Travel-2.jpg" alt="">
                        <div class="traveler-date">16 Jan 20</div>
                    </div>
                    <div class="d-flex flex-column text-bike">
                        <div class="traveler-title">One Mile At A Time, Rajasthan This Time</div>
                        <div class="traveler-name">Traveller : Mr. Ritik</div>
                    </div>
                </div>
                <div class="traveler-content">
                    Ritik is self–employed and runs his own coaching institute in Bhopal, Madhya Pradesh for the students who are preparing for the engineering and medical entrance exams
                </div>
                <div class="bike-footer d-flex justify-content-around align-items-center">
                    <div class="read-more">Read More</div>
                </div>
            </div>
            <div class="card-traveler">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="image-expire d-flex flex-column text-center align-items-center">
                        <img class="bike-image-travel" src="images/Traveler/Travel-3.jpg" alt="">
                        <div class="traveler-date">16 Jan 20</div>
                    </div>
                    <div class="d-flex flex-column text-bike">
                        <div class="traveler-title ">One Mile At A Time, Rajasthan This Time</div>
                        <div class="traveler-name">Traveller : Mr. Ritik</div>
                    </div>
                </div>
                <div class="traveler-content">
                    Ritik is self–employed and runs his own coaching institute in Bhopal, Madhya Pradesh for the students who are preparing for the engineering and medical entrance exams
                </div>
                <div class="bike-footer d-flex justify-content-around align-items-center">
                    <div class="read-more">Read More</div>
                </div>
            </div>
        </div>
    </div>
    </div>



    <!-- Footer -->
    <?php include "common/footer.php"; ?>


    <script src="js/header.js"></script>
    <script src="js/footer.js"></script>
    <script src="js/index.js"></script>
    <script src="js/carousel.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script>
     
    </script>
  </body>
</html>
