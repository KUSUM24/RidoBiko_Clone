<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined"
      />
    <link
    rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
      />
      <script
      src="https://kit.fontawesome.com/yourcode.js"
      crossorigin="anonymous"
      ></script>
    <script
    src="https://use.fontawesome.com/releases/v5.15.3/js/all.js"
    data-auto-replace-svg="nest"
    ></script>
    
    <link rel="stylesheet" href="/css/header.css" />
    <link rel="stylesheet" href="/css/trip.css" />
    <title>RidoBiko</title>
    <style>
        <?php include "css/header.css"; ?>
        <?php include "css/trip.css"; ?>
    </style>
</head>
<body class="">
    <!-- Background Image  -->
    <?php 
    echo "<a class=\"background-img\"  href=\"header.php\"><img src=\"images/background.jpeg\" alt=\"Background Image\" /></a>" 
    ?>
    <!-- Header HTML  -->
    <?php include "common/header.php"; ?>

    <!-- Trip Section  -->

    <div
      class="
        trip-main
        container
        d-flex
        justify-content-center
        flex-column
        align-items-center
      "
    >
      <div class="radio-div d-flex w-25 justify-content-between">
        <div class="outstation-trip d-flex align-items-center">
          <span class="radio"
            ><input type="radio" class="ant-radio-input" value="0"
          /></span>
          <div class="radio-text">Outstation Trip</div>
        </div>
        <div class="hourly-rental d-flex align-items-center">
          <span class="radio"
            ><input type="radio" class="ant-radio-input" value="0"
          /></span>
          <div class="radio-text">Hourly Rental</div>
        </div>
      </div>
      <div class="pickup-details d-flex w-100 justify-content-between">
        <div class="location pick-item">
          <div class="dropdown show">
            <a
              class="btn btn-light"
              href="#"
              role="button"
              id="dropdownMenuLink"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <div class="pickup-text">PICKUP LOCATION</div>
              <div class="city">Mumbai</div>
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>
        </div>
        <div class="date pick-item">updta</div>
        <div class="pickup-time pick-item">
          <div class="dropdown show">
            <a
              class="btn btn-light"
              href="#"
              role="button"
              id="dropdownMenuLink"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <div class="pickup-text">PICKUP TIME</div>
              <div class="city">12:00 AM</div>
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>
        </div>
        <div class="drop-time pick-item">
          <div class="dropdown show">
            <a
              class="btn btn-light"
              href="#"
              role="button"
              id="dropdownMenuLink"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <div class="pickup-text">DROP TIME</div>
              <div class="city">12:00 AM</div>
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script src="/js/scroll.js"></script>
  <script
    src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"
  ></script>
</html>
