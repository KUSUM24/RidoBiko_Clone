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
    <!-- <?php include "common/header.php"; ?> -->
    <!-- Details  -->
    <!-- Main Section  -->
    <div class="search-main">
      <div class="filters">
        <div class="filter-header d-flex justify-content-between p-2 pb-0">
          <div class="filter-title h5 m-0">Search</div>
          <div class="drop-down">
            <span class="material-icons-outlined"> arrow_drop_down </span>
          </div>
        </div>
        <div class="bike-main px-2">
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
              <input class="date-second" type="date" />
              <select
                class="select-css-2 form-control"
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
            <span class="material-icons-outlined"> arrow_circle_right </span>
            <div class="drop-date-main">
              <input class="date-second" type="date" />
              <select
                class="select-css-2 form-control"
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
        </div>
      </div>
    </div>
    <!-- Footer -->
    <!-- <?php include "common/footer.php"; ?> -->

    <script src="js/header.js"></script>
    <script src="js/footer.js"></script>
    <script src="js/searchBikes-page.js"></script>
  </body>
</html>
