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
    <link rel="stylesheet" href="css/searchBikes-mobile.css" />
    <title>Search Bikes</title>
  </head>
  <body>
    <!-- Header HTML  -->
    <?php include "common/header.php"; ?>
    <!-- Details  -->
    <!-- Main Section  -->
    <div class="mobile-main">
      <div class="search-main"></div>
      <div
        class="btn btn-dark w-25 mb-2"
        id="show-filters"
        data-toggle="modal"
        data-target="#filterModal"
      >
        Filters
      </div>
      <div class="sort-main d-flex align-items-center">
        <div class="sort-text">Sort By:</div>
        <div class="d-flex justify-content-around">
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
      <div class="bike-card-main my-2 d-flex w-100">
        <div class="bike-card w-100 justify-content-between">
          <img
            class="card-bike-img"
            src="images/Bikes/Bike_Second.png"
            alt="error"
          />
          <div class="bike-details">
            <div class="bike-name-card">
              <div><span>Avenger,</span> Bajaj</div>
              <div class="home-card">
                <span class="material-icons">home</span>
              </div>
            </div>
            <div class="bike-location">4 Bikes Available</div>
            <div class="bike-location">
              <span class="material-icons-outlined"> location_on </span>
              Karol Bagh
            </div>
          </div>
          <div class="rating d-flex flex-column justify-content-between w-25">
            <div class="d-flex flex-column align-items-end">
              <s class="original-price">1300</s>
              <b class="discount-price">₹ 1245</b>
            </div>
            <button class="book-now mb-2">
              <a class="cart-btn" target="_blank" href="cart-main.php">
                BOOK NOW
              </a>
            </button>
          </div>
        </div>
        <div class="bike-coverage">
          <div class="bike-coverage-detail">
            <div class="number">Rs. 2000</div>
            <div class="detail">Security Deposit</div>
          </div>
          <div class="bike-coverage-detail">
            <div class="number">150</div>
            <div class="detail">KM Limit</div>
          </div>
          <div class="bike-coverage-detail">
            <div class="number">60Kmph</div>
            <div class="detail">Speed Limit</div>
          </div>
        </div>
      </div>
      <div class="more-details-btn d-flex justify-content-center">
        <div class="button-details">More Details</div>
      </div>
      <div class="bike-card-main my-2 d-flex w-100">
        <div class="bike-card w-100 justify-content-between">
          <img
            class="card-bike-img"
            src="images/Bikes/Bike_Second.png"
            alt="error"
          />
          <div class="bike-details">
            <div class="bike-name-card">
              <div><span>Avenger,</span> Bajaj</div>
              <div class="home-card">
                <span class="material-icons">home</span>
              </div>
            </div>
            <div class="bike-location">4 Bikes Available</div>
            <div class="bike-location">
              <span class="material-icons-outlined"> location_on </span>
              Karol Bagh
            </div>
          </div>
          <div class="rating d-flex flex-column justify-content-between w-25">
            <div class="d-flex flex-column align-items-end">
              <s class="original-price">1300</s>
              <b class="discount-price">₹ 1245</b>
            </div>
            <button class="book-now mb-2">
              <a class="cart-btn" target="_blank" href="cart-main.php">
                BOOK NOW
              </a>
            </button>
          </div>
        </div>
        <div class="bike-coverage">
          <div class="bike-coverage-detail">
            <div class="number">Rs. 2000</div>
            <div class="detail">Security Deposit</div>
          </div>
          <div class="bike-coverage-detail">
            <div class="number">150</div>
            <div class="detail">KM Limit</div>
          </div>
          <div class="bike-coverage-detail">
            <div class="number">60Kmph</div>
            <div class="detail">Speed Limit</div>
          </div>
        </div>
      </div>
      <div class="more-details-btn d-flex justify-content-center">
        <div class="button-details">More Details</div>
      </div>
      <div class="subscription d-flex align-items-center" id="subscribe-card">
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
          <div class="heading-close d-flex justify-content-between">
            <div class="activa-card-heading">
              Introducing Ridobiko Long Term Subscription
            </div>
            <div class="close-div" onclick="deleteCard('subscribe-card')">
              <span class="material-icons"> cancel </span>
            </div>
          </div>
          <div class="d-flex justify-content-between align-items-center">
            <div class="description-card">
              Get a hassle-free two-wheeler for 1 month or more
            </div>
            <button class="activa-card-btn">Read More</button>
          </div>
        </div>
      </div>
      <div class="bike-card-main my-2 d-flex w-100">
        <div class="bike-card w-100 justify-content-between">
          <img
            class="card-bike-img"
            src="images/Bikes/Bike_Second.png"
            alt="error"
          />
          <div class="bike-details">
            <div class="bike-name-card">
              <div><span>Avenger,</span> Bajaj</div>
              <div class="home-card">
                <span class="material-icons">home</span>
              </div>
            </div>
            <div class="bike-location">4 Bikes Available</div>
            <div class="bike-location">
              <span class="material-icons-outlined"> location_on </span>
              Karol Bagh
            </div>
          </div>
          <div class="rating d-flex flex-column justify-content-between w-25">
            <div class="d-flex flex-column align-items-end">
              <s class="original-price">1300</s>
              <b class="discount-price">₹ 1245</b>
            </div>
            <button class="book-now mb-2">
              <a class="cart-btn" target="_blank" href="cart-main.php">
                BOOK NOW
              </a>
            </button>
          </div>
        </div>
        <div class="bike-coverage">
          <div class="bike-coverage-detail">
            <div class="number">Rs. 2000</div>
            <div class="detail">Security Deposit</div>
          </div>
          <div class="bike-coverage-detail">
            <div class="number">150</div>
            <div class="detail">KM Limit</div>
          </div>
          <div class="bike-coverage-detail">
            <div class="number">60Kmph</div>
            <div class="detail">Speed Limit</div>
          </div>
        </div>
      </div>
      <div class="more-details-btn d-flex justify-content-center">
        <div class="button-details">More Details</div>
      </div>
    </div>
    <div
      class="modal fade"
      id="filterModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="filterModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="filterModalLabel">Modal title</h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="filters">
              <div
                class="filter-header d-flex justify-content-between p-2 pb-0"
              >
                <div class="filter-title h5 m-0">Search</div>
                <div class="drop-down">
                  <span class="material-icons-outlined"> arrow_drop_down </span>
                </div>
              </div>
              <div class="bike-main px-2 pb-3">
                <div class="bike-location">
                  <select
                    class="mobile-select form-control"
                    id="sel5"
                    name="sellist1"
                  >
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
                <div class="date-time-main d-flex align-items-center">
                  <div class="pick-date-main">
                    <input class="date-second" type="date" value="2021-07-22" />
                    <select
                      class="mobile-select form-control"
                      id="sel6"
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
                  <span class="time-arrow material-icons-outlined">
                    arrow_circle_right
                  </span>
                  <div class="drop-date-main">
                    <input class="date-second" type="date" value="2021-08-22" />
                    <select
                      class="mobile-select form-control"
                      id="sel6"
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
                <div class="d-flex justify-content-center align-items-center">
                  <div class="btn btn-light w-50 mb-2">Search</div>
                </div>
                <div class="additional-filters" id="additional-filters">
                  <div class="details-item-bottom">
                    <label for="sel8">
                      <div class="details-card-text">PRICE RANGE</div>
                    </label>
                    <select
                      class="mobile-select form-control"
                      id="sel8"
                      name="sellist1"
                    >
                      <option>1,000 to 2,000</option>
                      <option>2,000 to 3,000</option>
                    </select>
                  </div>
                  <div class="details-item-bottom">
                    <label for="sel9">
                      <div class="details-card-text">BIKE NAME</div>
                    </label>
                    <select
                      class="mobile-select form-control"
                      id="sel9"
                      name="sellist1"
                    >
                      <option>Honda</option>
                      <option>Avenger</option>
                    </select>
                  </div>
                  <div class="details-item-bottom">
                    <label for="sel10">
                      <div class="details-card-text">BIKE TYPE</div>
                    </label>
                    <select
                      class="mobile-select form-control"
                      id="sel10"
                      name="sellist1"
                    >
                      <option>Petrol</option>
                      <option>Electric Scooter</option>
                    </select>
                  </div>
                  <div class="d-flex justify-content-center">
                    <div class="apply-filters btn btn-light mt-2">Apply</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-dismiss="modal"
            >
              Close
            </button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
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
