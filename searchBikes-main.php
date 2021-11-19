<?php 
include "common/link.php";
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/header.css" />
    <link rel="stylesheet" href="css/header-resp.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <link rel="stylesheet" href="css/searchBikes-page.css" />
    <title>Search Bikes</title>
  </head>
  <body>
    <!-- Header HTML  -->
    <?php include "common/header.php"; ?>
    <!-- Details  -->
    <!-- Main Section  -->

    <div class="d-flex">
      <!-- Filters  -->
      <div class="filters">
        <!-- <div class="filter-text">FILTERS</div> -->
        <div class="date-time-div d-flex justify-content-around">
          <div class="details-item">
            <label for="sel4">
              <div class="details-card-text">BIKE SEARCH TYPE</div>
            </label>
            <select class="select-css-2 form-control" id="sel4" name="sellist1">
              <option>Outstation Round Trip</option>
              <option>Hourly Rental</option>
            </select>
          </div>
          <div class="details-item">
            <label for="sel5">
              <div class="details-card-text">PICKUP LOCATION</div>
            </label>
            <select class="select-css-2 form-control" id="sel5" name="sellist1">
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
        </div>
        <div class="date-time-div d-flex justify-content-around">
          <div class="details-item second-departure">
            <div class="details-card-text">
              <div class="d-flex align-items-center">
                DEPARTURE
                <span class="material-icons-outlined">
                  keyboard_arrow_down
                </span>
              </div>
            </div>
            <input class="date-second" type="date" />
          </div>
          <div class="details-item">
            <label for="sel6">
              <div class="details-card-text">PICKUP TIME</div>
            </label>
            <select class="select-css-2 form-control" id="sel6" name="sellist1">
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
        <div class="date-time-div d-flex justify-content-around">
          <div class="details-item second-return">
            <div class="details-card-text">
              <div class="d-flex align-items-center">
                RETURN
                <span class="material-icons-outlined">
                  keyboard_arrow_down
                </span>
              </div>
            </div>
            <input class="date-second" type="date" />
          </div>
          <div class="details-item">
            <label for="sel7">
              <div class="details-card-text">DROP TIME</div>
            </label>

            <select class="select-css-2 form-control" id="sel7" name="sellist1">
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
        <div class="d-flex justify-content-center">
          <button class="search-btn" type="submit">Search</button>
        </div>
        <div class="filter-bottom d-flex flex-column justify-content-between">
          <div class="details-item-bottom">
            <label for="sel8">
              <div class="details-card-text">PRICE RANGE</div>
            </label>

            <select class="select-css-2 form-control" id="sel8" name="sellist1">
              <option>1,000 to 2,000</option>
              <option>2,000 to 3,000</option>
            </select>
          </div>
          <hr class="hr-filter" />
          <div class="details-item-bottom">
            <label for="sel9">
              <div class="details-card-text">BIKE NAME</div>
            </label>

            <select class="select-css-2 form-control" id="sel9" name="sellist1">
              <option>Honda</option>
              <option>Avenger</option>
            </select>
          </div>
          <hr class="hr-filter" />
          <div class="details-item-bottom">
            <label for="sel10">
              <div class="details-card-text">BIKE TYPE</div>
            </label>

            <select
              class="select-css-2 form-control"
              id="sel10"
              name="sellist1"
            >
              <option>Petrol</option>
              <option>Electric Scooter</option>
            </select>
          </div>
        </div>
      </div>
      <div class="d-flex flex-column bike-list-main w-100">
        <!-- Sort By  -->
        <div class="sort-main d-flex align-items-center">
          <div class="sort-text">Sort By:</div>
          <div class="d-flex justify-content-around w-50">
            <div
              class="sort-item sort-item-active"
              id="sort-item-1"
              onclick="getSortActive('sort-item-1')"
            >
              Price - Low to High
            </div>
            <div
              class="sort-item"
              id="sort-item-2"
              onclick="getSortActive('sort-item-2')"
            >
              Price - High to Low
            </div>
          </div>
        </div>
        <hr class="hr-sort" />
        <!-- Cards  -->
        <div class="main-card d-flex flex-column">
          <div class="bike-main-card d-flex">
            <div class="bike-card d-flex w-100">
              <img
                class="card-bike-img"
                src="images/Bikes/Bike_Second.png"
                alt="error"
              />
              <div class="all-details d-flex flex-column w-100">
                <div
                  class="
                    d-flex
                    align-items-center
                    justify-content-between
                    w-100
                  "
                >
                  <div class="left-bike">
                    <span class="bike-name">Avenger, </span>
                    <span class="company-name">Bajaj</span>
                  </div>
                  <div class="right-bike">
                    <div class="available">4 Bikes Available</div>
                  </div>
                </div>
                <div class="delivery-section d-flex justify-content-between">
                  <div class="availability d-flex">
                    <div class="support d-flex align-items-center">
                      <span class="material-icons-outlined"> lightbulb </span>
                      24/7 Support&nbsp;
                    </div>
                    <div class="age-limit">| Age Limit: 18+</div>
                  </div>
                  <div class="home-delivery d-flex">
                    <span class="material-icons home-icon"> home </span>
                    <div class="delivery-text">Home Delivery Available</div>
                  </div>
                </div>
                <hr class="hr-bike" />
                <div class="bike-location d-flex align-items-center">
                  <span class="material-icons-outlined location-arrow">
                    arrow_downward
                  </span>
                  <div class="location-1">Karol Bagh</div>
                  <div class="more-locations">and 3 more locations</div>
                </div>
              </div>
            </div>
            <div class="rating d-flex flex-column justify-content-between w-25">
              <div class="d-flex flex-column align-items-end">
                <s class="original-price">1300</s>
                <b class="discount-price">₹ 1245</b>
              </div>
              <button class="book-now">
                <a class="cart-btn" target="_blank" href="cart-main.php">
                  BOOK NOW
                </a>
              </button>
            </div>
          </div>
          <div class="more-details-section" id="more-details-1">
            <hr class="hr-bike-card-main" />
            <div class="d-flex justify-content-around">
              <div class="d-flex flex-column align-items-center">
                <div class="more-detail-heading">Rs 2,000 Security Deposit</div>
                <div class="more-detail-text">
                  To be paid during pickup which will be refundable
                </div>
              </div>
              <div class="d-flex flex-column align-items-center">
                <div class="more-detail-heading">150 KM Limit</div>
                <div class="more-detail-text">
                  Rs 3 per additional KM after 150 KM
                </div>
              </div>
              <div class="d-flex flex-column align-items-center">
                <div class="more-detail-heading">60 Kmph Speed Limit</div>
                <div class="more-detail-text">
                  Rs 1000 penalty on over speeding
                </div>
              </div>
            </div>
            <div class="compulsion text-center">
              Valid Aadhar card and Driving license are compulsory to have
              during pickup
            </div>
            <!-- <div class="policies"> -->
            <div class="policies">
              <div>Policies</div>
              <div class="cancellation d-flex">
                <div class="text w-25">Cancellation:</div>
                <div class="cancel-policy policy">
                  <div>
                    No show during pick - 100% rent amount will be deducted and
                    only security deposit will be refunded (If paid in advance
                    by customer)
                  </div>
                  <div>
                    Between 0 - 24 hrs before the pickup time - No cancellation
                    &amp; 100% amount will be deducted.
                  </div>
                  <div>
                    Between 24-48 hrs before the pickup time: 75% of total
                    booking amount or total amount paid whichever will lower)
                  </div>
                  <div>
                    More than 48hrs before the pickup time: 50% of total booking
                    amount or total amount paid whichever is lower will be
                    refunded.
                  </div>
                </div>
              </div>
              <div class="late-return d-flex">
                <div class="text w-25">Late Return:</div>
                <div class="late-return-policy policy">
                  <div>
                    <div>
                      Non Geared Scooters: First 2 hours of delay would be
                      charged at ₹100 + more than 2 hr full day rent will be
                      charged
                    </div>
                    <div>
                      Geared two wheeler: First 2 hours of delay would be
                      charged at ₹200 + more than 2 hr full day rent will be
                      charged
                    </div>
                  </div>
                  <div>
                    Post 2 Hours:, Above hourly charges will be applicable on
                    weekdays (Mon–Fri)
                  </div>
                </div>
              </div>
              <div class="vehicle-damage d-flex">
                <div class="text">Accident Policy:</div>
                <div class="vehicle-damage-policy policy">
                  <div>
                    For any damages incurred to an Ridobiko asset (the
                    two-wheeler), the user will be held responsible for bearing
                    all the charges up to INR ₹10,000.
                  </div>
                  <div>
                    For any damages incurred to an Ridobiko asset (the
                    two-wheeler) amounting more than INR ₹10,000, the user is
                    eligible to claim insurance to cover the charges that imply
                    including the rental cost incurred during downtime period of
                    the asset which is a time period otherwise utilized by
                    another Ridobiko user
                  </div>
                </div>
              </div>
              <div class="penalties d-flex">
                <div class="text">Penalties:</div>
                <div class="penalty-list policy">Penalty for damaging</div>
              </div>
              <div class="more-policies">
                For more policies
                <a href="https://www.ridobiko.com/Policy">Click here</a>
              </div>
            </div>
          </div>
          <!-- </div> -->
        </div>
        <div
          class="more-details justify-content-between"
          id="more-details-btn-1"
          onclick="getMoreDetails('more-details-1','more-details-btn-1', 'less-details-1')"
        >
          More Details
          <span class="more-down-details material-icons-outlined">
            expand_more
          </span>
        </div>
        <div
          class="less-details justify-content-between"
          id="less-details-1"
          onclick="getLessDetails('more-details-1','more-details-btn-1', 'less-details-1')"
        >
          Less Details
          <span class="more-down-details material-icons-outlined">
            expand_less
          </span>
        </div>
        <div class="subscription d-flex" id="subscribe-card">
          <img
            class="activa-card"
            src="images/Bikes/Activa-card.png"
            alt="error"
          />
          <div
            class="
              subscribe-inner
              d-flex
              flex-column
              justify-content-between
              w-100
            "
          >
            <div
              class="
                heading-close
                d-flex
                justify-content-between
                align-items-center
              "
            >
              <div class="activa-card-heading">
                Introducing Ridobiko Long term subscription
              </div>
              <div class="close-div" onclick="deleteCard('subscribe-card')">
                <span class="material-icons"> cancel </span>
              </div>
            </div>
            <div class="d-flex justify-content-between align-items-center">
              <div class="description-card">
                Get a hassle-free personal two-wheeler for 1 month or more
              </div>
              <button class="activa-card-btn">Read More</button>
            </div>
          </div>
        </div>

        <div class="main-card d-flex flex-column">
          <div class="bike-main-card d-flex">
            <div class="bike-card d-flex w-100">
              <img
                class="card-bike-img"
                src="images/Bikes/Bike_Second.png"
                alt="error"
              />
              <div class="all-details d-flex flex-column w-100">
                <div
                  class="
                    d-flex
                    align-items-center
                    justify-content-between
                    w-100
                  "
                >
                  <div class="left-bike">
                    <span class="bike-name">Avenger, </span>
                    <span class="company-name">Bajaj</span>
                  </div>
                  <div class="right-bike">
                    <div class="available">4 Bikes Available</div>
                  </div>
                </div>
                <div class="delivery-section d-flex justify-content-between">
                  <div class="availability d-flex">
                    <div class="support d-flex align-items-center">
                      <span class="material-icons-outlined"> lightbulb </span>
                      24/7 Support&nbsp;
                    </div>
                    <div class="age-limit">| Age Limit: 18+</div>
                  </div>
                  <div class="home-delivery d-flex">
                    <span class="material-icons home-icon"> home </span>
                    <div class="delivery-text">Home Delivery Available</div>
                  </div>
                </div>
                <hr class="hr-bike" />
                <div class="bike-location d-flex align-items-center">
                  <span class="material-icons-outlined location-arrow">
                    arrow_downward
                  </span>
                  <div class="location-1">Karol Bagh</div>
                  <div class="more-locations">and 3 more locations</div>
                </div>
              </div>
            </div>
            <div class="rating d-flex flex-column justify-content-between w-25">
              <div class="d-flex flex-column align-items-end">
                <s class="original-price">1300</s>
                <b class="discount-price">₹ 1245</b>
              </div>
              <button class="book-now">
                <a class="cart-btn" target="_blank" href="cart-main.php">
                  BOOK NOW
                </a>
              </button>
            </div>
          </div>
          <div class="more-details-section" id="more-details-2">
            <hr class="hr-bike-card-main" />
            <div class="d-flex justify-content-around">
              <div class="d-flex flex-column align-items-center">
                <div class="more-detail-heading">Rs 2,000 Security Deposit</div>
                <div class="more-detail-text">
                  To be paid during pickup which will be refundable
                </div>
              </div>
              <div class="d-flex flex-column align-items-center">
                <div class="more-detail-heading">150 KM Limit</div>
                <div class="more-detail-text">
                  Rs 3 per additional KM after 150 KM
                </div>
              </div>
              <div class="d-flex flex-column align-items-center">
                <div class="more-detail-heading">60 Kmph Speed Limit</div>
                <div class="more-detail-text">
                  Rs 1000 penalty on over speeding
                </div>
              </div>
            </div>
            <div class="compulsion text-center">
              Valid Aadhar card and Driving license are compulsory to have
              during pickup
            </div>
            <!-- <div class="policies"> -->
            <div class="policies">
              <div>Policies</div>
              <div class="cancellation d-flex">
                <div class="text">Cancellation:</div>
                <div class="cancel-policy policy">
                  <div>Cancellation made after booking start: No refund</div>
                  <div>
                    Cancellation made more than 24 hours before the booking
                    start: Rs 200
                  </div>
                  <div>
                    Cancellation made with 24 hours of booking start: Rs 200 or
                    50% of Booking fee (whichever is greater)
                  </div>
                </div>
              </div>
              <div class="late-return d-flex">
                <div class="text">Late Return:</div>
                <div class="late-return-policy policy">
                  <div>
                    Standard hourly fee will be applicable per hour of delay.
                    Weekend or weekday delays will be charged accordingly.
                  </div>
                  <div>
                    In addition to the standard hourly fee, every hour of delay
                    would be charged at Rs. 300/hour
                  </div>
                </div>
              </div>
              <div class="vehicle-damage d-flex">
                <div class="text">Vehicle Damage:</div>
                <div class="vehicle-damage-policy policy">
                  <div>
                    Any unintentional damage or accident will be liable for
                    damage charge upto Rs 10000/-(full-wrap insurance covers the
                    rest)
                  </div>
                </div>
              </div>
              <div class="penalties d-flex">
                <div class="text">Penalties:</div>
                <div class="penalty-list policy">Penalty for damaging</div>
              </div>
              <div class="more-policies">
                For more policies
                <a href="https://www.ridobiko.com/Policy">Click here</a>
              </div>
            </div>
          </div>
          <!-- </div> -->
        </div>
        <div
          class="more-details justify-content-between"
          id="more-details-btn-2"
          onclick="getMoreDetails('more-details-2','more-details-btn-2','less-details-2')"
        >
          More Details
          <span class="more-down-details material-icons-outlined">
            expand_more
          </span>
        </div>
        <div
          class="less-details justify-content-between"
          id="less-details-2"
          onclick="getLessDetails('more-details-2','more-details-btn-2','less-details-2')"
        >
          Less Details
          <span class="more-down-details material-icons-outlined">
            expand_less
          </span>
        </div>
        <div class="main-card d-flex flex-column">
          <div class="bike-main-card d-flex">
            <div class="bike-card d-flex w-100">
              <img
                class="card-bike-img"
                src="images/Bikes/Bike_Second.png"
                alt="error"
              />
              <div class="all-details d-flex flex-column w-100">
                <div
                  class="
                    d-flex
                    align-items-center
                    justify-content-between
                    w-100
                  "
                >
                  <div class="left-bike">
                    <span class="bike-name">Avenger, </span>
                    <span class="company-name">Bajaj</span>
                  </div>
                  <div class="right-bike">
                    <div class="available">4 Bikes Available</div>
                  </div>
                </div>
                <div class="delivery-section d-flex justify-content-between">
                  <div class="availability d-flex">
                    <div class="support d-flex align-items-center">
                      <span class="material-icons-outlined"> lightbulb </span>
                      24/7 Support&nbsp;
                    </div>
                    <div class="age-limit">| Age Limit: 18+</div>
                  </div>
                  <div class="home-delivery d-flex">
                    <span class="material-icons home-icon"> home </span>
                    <div class="delivery-text">Home Delivery Available</div>
                  </div>
                </div>
                <hr class="hr-bike" />
                <div class="bike-location d-flex align-items-center">
                  <span class="material-icons-outlined location-arrow">
                    arrow_downward
                  </span>
                  <div class="location-1">Karol Bagh</div>
                  <div class="more-locations">and 3 more locations</div>
                </div>
              </div>
            </div>
            <div class="rating d-flex flex-column justify-content-between w-25">
              <div class="d-flex flex-column align-items-end">
                <s class="original-price">1300</s>
                <b class="discount-price">₹ 1245</b>
              </div>
              <button class="book-now">
                <a class="cart-btn" target="_blank" href="cart-main.php">
                  BOOK NOW
                </a>
              </button>
            </div>
          </div>
          <div class="more-details-section" id="more-details-3">
            <hr class="hr-bike-card-main" />
            <div class="d-flex justify-content-around">
              <div class="d-flex flex-column align-items-center">
                <div class="more-detail-heading">Rs 2,000 Security Deposit</div>
                <div class="more-detail-text">
                  To be paid during pickup which will be refundable
                </div>
              </div>
              <div class="d-flex flex-column align-items-center">
                <div class="more-detail-heading">150 KM Limit</div>
                <div class="more-detail-text">
                  Rs 3 per additional KM after 150 KM
                </div>
              </div>
              <div class="d-flex flex-column align-items-center">
                <div class="more-detail-heading">60 Kmph Speed Limit</div>
                <div class="more-detail-text">
                  Rs 1000 penalty on over speeding
                </div>
              </div>
            </div>
            <div class="compulsion text-center">
              Valid Aadhar card and Driving license are compulsory to have
              during pickup
            </div>
            <!-- <div class="policies"> -->
            <div class="policies">
              <div>Policies</div>
              <div class="cancellation d-flex">
                <div class="text">Cancellation:</div>
                <div class="cancel-policy policy">
                  <div>Cancellation made after booking start: No refund</div>
                  <div>
                    Cancellation made more than 24 hours before the booking
                    start: Rs 200
                  </div>
                  <div>
                    Cancellation made with 24 hours of booking start: Rs 200 or
                    50% of Booking fee (whichever is greater)
                  </div>
                </div>
              </div>
              <div class="late-return d-flex">
                <div class="text">Late Return:</div>
                <div class="late-return-policy policy">
                  <div>
                    Standard hourly fee will be applicable per hour of delay.
                    Weekend or weekday delays will be charged accordingly.
                  </div>
                  <div>
                    In addition to the standard hourly fee, every hour of delay
                    would be charged at Rs. 300/hour
                  </div>
                </div>
              </div>
              <div class="vehicle-damage d-flex">
                <div class="text">Vehicle Damage:</div>
                <div class="vehicle-damage-policy policy">
                  <div>
                    Any unintentional damage or accident will be liable for
                    damage charge upto Rs 10000/-(full-wrap insurance covers the
                    rest)
                  </div>
                </div>
              </div>
              <div class="penalties d-flex">
                <div class="text">Penalties:</div>
                <div class="penalty-list policy">Penalty for damaging</div>
              </div>
              <div class="more-policies">
                For more policies
                <a href="https://www.ridobiko.com/Policy">Click here</a>
              </div>
            </div>
          </div>
          <!-- </div> -->
        </div>
        <div
          class="more-details justify-content-between"
          id="more-details-btn-3"
          onclick="getMoreDetails('more-details-3','more-details-btn-3','less-details-3')"
        >
          More Details
          <span class="more-down-details material-icons-outlined">
            expand_more
          </span>
        </div>
        <div
          class="less-details justify-content-between"
          id="less-details-3"
          onclick="getLessDetails('more-details-3','more-details-btn-3','less-details-3')"
        >
          Less Details
          <span class="more-down-details material-icons-outlined">
            expand_less
          </span>
        </div>
      </div>
    </div>
    <!-- Footer -->
    <?php include "common/footer.php"; ?>

    <script src="js/header.js"></script>
    <script src="js/footer.js"></script>
    <script src="js/searchBikes-page.js"></script>
  </body>
</html>
