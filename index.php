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
    <link rel="stylesheet" href="css/trip.css">
    <link rel="stylesheet" href="css/copyright.css">
    <link rel="stylesheet" href="css/motorcycle.css">
    <link rel="stylesheet" href="css/booking.css">
    <link rel="stylesheet" href="css/travelerStory.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>RidoBiko</title>
    
</head>
<body>
    <!-- Background Image  -->
    <img class="background-img" src="images/background.jpeg" alt="BACKGROUND">
    <!-- Header HTML  -->
    <?php include "common/header.php"; ?>
    <!-- Trip Section  -->
    <?php include "components/trip.php"; ?>
    <!-- Motorcycle Section  -->
    <?php include "components/motorcycle.php"; ?>
    <!-- Why Book With Us  -->
    <?php include "components/booking.php"; ?>
    <!-- Traveler Stories  -->
    <?php include "components/travelerStory.php"; ?>
    <!-- Footer -->
    <?php include "common/footer.php"; ?>
    <!-- Copyright  -->
    <?php include "common/copyright.php" ?>
    <script src="js/scroll.js"></script>
    <script src="js/location.js"></script>
    <script src="js/motorcycle-header.js"></script>
    <script src="js/date.js"></script>
  </body>
</html>
