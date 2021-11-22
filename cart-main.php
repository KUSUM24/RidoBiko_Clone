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
    <link rel="stylesheet" href="css/cart.css" />

    <title>Cart Page</title>
  </head>
  <body>
    <!-- Header HTML  -->
    <?php include "common/header.php"; ?>
    <!-- Main Section  -->
    <div class="cart-main d-flex justify-content-center">
      <div class="summary d-flex flex-column text-center">
        <div class="summary-text">SUMMARY</div>
        <!-- <div class="text-center"> -->
        <img
          class="cart-bike-img"
          src="images/Bikes/Bike_Second.png"
          alt="Bike-image"
        />
        <!-- </div> -->
        <div class="name-bike">
          <b> AVENGER </b>
          , Bajaj
        </div>
        <hr class="hr-summary" />
        <div
          class="pick-drop d-flex align-items-center justify-content-between"
        >
          <div class="pick-date-time">
            <div class="time-text" id="pick-time">7:00 PM</div>
            <div class="pick-date-div d-flex">
              <div id="pick-date"></div>
              &nbsp;
              <div id="pick-month-year"></div>
              &nbsp;
              <div id="pick-day"></div>
            </div>
          </div>
          <div class="d-flex align-items-center">
            <span class="material-icons-outlined"> horizontal_rule </span>
            <div class="to">To</div>
            <span class="material-icons-outlined"> horizontal_rule </span>
          </div>
          <div class="drop-date-time">
            <div class="time-text" id="drop-time">7:00 PM</div>
            <div class="drop-date-div d-flex justify-content-between">
              <div id="drop-date"></div>
              &nbsp;
              <div id="drop-month-year"></div>
              &nbsp;
              <div id="drop-day"></div>
            </div>
          </div>
        </div>
        <hr class="hr-summary" />
        <div class="d-flex align-items-center">
          <span class="material-icons"> location_on </span>
          <div class="location-summary">Mumbai, Terminal</div>
          <a href=""> (View Map)</a>
        </div>
        <hr class="hr-summary" />
        <div>
          <div class="d-flex justify-content-between mb-2">
            <div>Speed Limit (?)</div>
            <div>50 Km/Hr</div>
          </div>
          <div class="d-flex justify-content-between mb-2">
            <div>KM Limit (?)</div>
            <div>72.0 Km</div>
          </div>
          <div class="d-flex justify-content-between mb-2">
            <div>Excess Km (?)</div>
            <div>₹ 18/Km</div>
          </div>
          <div class="d-flex justify-content-between">
            <div>Security Deposit (?)</div>
            <div>₹ 0</div>
          </div>
        </div>
      </div>
      <div class="checkout d-flex flex-column">
        <div class="checkout-box d-flex flex-column">
          <div class="checkout-text px-4 py-3">CHECKOUT</div>
          <hr class="hr-checkout" />
          <div class="d-flex justify-content-between px-4 py-3">
            <div>Rental Fee</div>
            <div>₹ 2,200</div>
          </div>
          <hr class="hr-checkout" />
          <a
            class="view-offers"
            href="#"
            id="view-offers-btn"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >
            <div class="d-flex justify-content-between px-4 py-3">
              <div class="d-flex justify-content-between align-items-center">
                <span class="material-icons"> stars </span>
                <div class="view-offers-text mx-2">View Offers</div>
              </div>
              <span class="material-icons"> chevron_right </span>
            </div>
          </a>
          <div id="view-offers" style="display: none">
            <hr class="hr-checkout" />
            <div class="d-flex justify-content-between px-4 py-3">
              <b>Special Price</b>
              <div>Get extra 10% off (price inclusive of discount)</div>
            </div>
            <hr class="hr-checkout" />
            <div class="d-flex justify-content-between px-4 py-3">
              <b>Bank Offer</b>
              <div>Get extra 10% off on Bank of Baroda Credit Card</div>
            </div>
          </div>
          <hr class="hr-checkout" />
          <div class="d-flex justify-content-between px-4 py-3">
            <div>CGST(14%)</div>
            <div>₹ 50</div>
          </div>
          <hr class="hr-checkout" />
          <div class="d-flex justify-content-between px-4 py-3">
            <div>SGST(14%)</div>
            <div>₹ 60</div>
          </div>

          <hr class="hr-checkout" />
          <div class="total-amt-div d-flex justify-content-between px-4 py-3">
            <div class="total-amt">Total Payable Amount</div>
            <div>₹ 2,500</div>
          </div>
        </div>
        <div>
          <form>
            <div class="p-2 d-flex align-items-center">
              <input
                type="radio"
                id="input-radio-1"
                name="fav_language"
                value="Pay 100%"
                checked
              />
              <div class="custom-label px-2" for="input-radio-1">Pay 100% (Rs. 10400)</div>
              <input
                type="radio"
                id="input-radio-2"
                name="fav_language"
                value="Pay 20%"
              />
              <div class="custom-label px-2" for="input-radio-2">Pay 20% (Rs. 2000)</div>
            </div>
            <div class="px-2 d-flex align-items-center">
              <input class="custom-label" type="checkbox" id="input-check-1" name="wallet-money" />
              <div class="custom-label px-2" for="input-check-1">Use Rs.0 Wallet Money</div>
            </div>
          </form>
        </div>
        <div class="d-flex justify-content-center">
          <button class="payment-button bg-success">Proceed To Pay</button>
        </div>
        <div class="policy-section">
          <div class="policy">
            <div class="policy-heading">POLICIES</div>
          </div>
          <hr class="hr-checkout" />
          <div
            class="policy"
            id="refund-policy-btn"
            onclick='togglePolicy("refund-policy-btn","refund-policy")'
          >
            <div>Refund Policy</div>
            <span class="material-icons-outlined"> expand_more </span>
          </div>
          <div class="hidden-policy" id="refund-policy">
            <hr class="hr-checkout" />
            <div class="policy-details px-4 py-3">
              <b
                >1) Deposit refund - Deposit will be refunded within 2 working
                days.</b
              >
            </div>
            <hr class="hr-checkout" />
            <div class="policy-details px-4 py-3">
              <b
                >2) Cancelled booking refund - Refund will be processed within
                3- 4 working days. Refund amount will be decided based on the
                cancellation policy. Further, 2% of booking amount will be
                charged and deducted as payment gateway charges.</b
              >
            </div>
          </div>
          <hr class="hr-checkout" />
          <div
            class="policy"
            id="cancellation-policy-btn"
            onclick='togglePolicy("cancellation-policy-btn","cancellation-policy")'
          >
            <div>Cancellation Policy</div>
            <span class="material-icons-outlined"> expand_more </span>
          </div>
          <div class="hidden-policy" id="cancellation-policy">
            <hr class="hr-checkout" />
            <div class="policy-details px-4 py-3">
              <b
                >1) No show during pick - 100% rent amount will be deducted and
                only security deposit will be refunded (If paid in advance by
                customer).</b
              >
            </div>
            <hr class="hr-checkout" />
            <div class="policy-details px-4 py-3">
              <b
                >2) Between 0 - 24 hrs before the pickup time - No cancellation
                & 100% amount will be deducted.</b
              >
            </div>
            <div class="policy-details px-4 py-3">
              <b
                >3) Between 24-48 hrs before the pickup time: 75% of total
                booking amount or total amount paid whichever is higher will be
                deducted.</b
              >
            </div>
            <div class="policy-details px-4 py-3">
              <b
                >4) More than 48hrs before the pickup time: 50% of total booking
                amount or total amount paid whichever is higher will be
                deducted.</b
              >
            </div>
          </div>
          <hr class="hr-checkout" />
          <div
            class="policy"
            id="accident-policy-btn"
            onclick='togglePolicy("accident-policy-btn","accident-policy")'
          >
            <div>Accident Policy</div>
            <span class="material-icons-outlined"> expand_more </span>
          </div>
          <div class="hidden-policy" id="accident-policy">
            <hr class="hr-checkout" />
            <div class="policy-details px-4 py-3">
              <b
                >1) For any damages incurred to an Ridobiko asset (the
                two-wheeler), the user will be held responsible for bearing all
                the charges up to INR ₹10,000.</b
              >
            </div>
            <hr class="hr-checkout" />
            <div class="policy-details px-4 py-3">
              <b
                >2) For any damages incurred to an Ridobiko asset (the
                two-wheeler) amounting more than INR ₹10,000, the user is
                eligible to claim insurance to cover the charges that imply
                including the rental cost incurred during downtime period of the
                asset which is a time period otherwise utilized by another
                Ridobiko user.</b
              >
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer -->
    <?php include "common/footer.php"; ?>

    <script src="js/header.js"></script>
    <script src="js/footer.js"></script>
    <script src="js/cart.js"></script>
  </body>
</html>
