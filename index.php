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
    <!-- Copyright  -->
    <?php include "common/copyright.php" ?>
    <script src="js/scroll.js"></script>
  </body>
</html>
