<div class="container d-flex">
  <div class="left-body d-flex flex-column">
    <div class="section-userinfo">
      <img src="images/userinfo.png" alt="userinfo" />
      <div class="name content"><b>John doe</b></div>
      <div class="number content">9999988888</div>
      <div class="email content">johndoe@gmail.com</div>
    </div>
    <hr class="userinfo-hr" />
    <div class="section-status">
      <div class="status--container d-flex align-items-center">
        <span class="material-icons-outlined inactive-icon" id="documentStatus">
        highlight_off
        </span>
        <div>Profile Document</div>
      </div>
      <div class="status--container d-flex align-items-center" onclick="getRightSection('6')">
        <span class="material-icons-outlined active-icon" id="numberStatus">
          check_circle_outline
        </span>
        <div>Mobile Number</div>
      </div>
      <div class="status--container d-flex align-items-center" onclick="getRightSection('7')">
        <span class="material-icons-outlined inactive-icon" id="emergencyNumberStatus">
          highlight_off
        </span>
        <div>Emergency Mobile Number</div>
      </div>
      <div class="status--container d-flex align-items-center">
        <span class="material-icons-outlined inactive-icon" id="paymentStatus">
          highlight_off
        </span>
        <div>Payment Wallet</div>
      </div>
      <hr />
    </div>
    <div class="section-balance">
      <div class="d-flex align-items-start px-2">
        <img src="images/creds.png" width="12%" height="10%" alt="cred" />
        <div class="d-flex flex-column w-100">
          <div class="h5 mx-2 my-0">₹ 0</div>
          <div class="d-flex justify-content-around w-100">
            <div>Credits Balance</div>
            <div>Show History</div>
          </div>   
        </div>
      </div>
      <!-- <hr class="balance-hr" /> -->
    </div>
    <div class="section-navbar">
      <li class="item active-status" id="item-0" onclick="getRightSection('0')">My Bookings</li>
      <li class="item" id="item-1" onclick="getRightSection('1')">Raise Ticket</li>
      <li class="item" id="item-2" onclick="getRightSection('2')">Refer and Earn</li>
      <li class="item" id="item-3" onclick="getRightSection('3')">My Profile</li>
      <li class="item" id="item-4" onclick="getRightSection('4')">Profile Verification</li>
      <li class="item" id="item-5" onclick="getRightSection('5')">Security Deposit</li>
    </div>
  </div>
  <div class="right-body card w-100">
    <div class="bookings-main flex-column h-100" style="display:none" id="main-right-0">
      <div class="heading">MY BOOKINGS</div>
      <div class="card-body">
        <div class="card">
          <div class="booking--heading">
            <div class="bookings-nav d-flex justify-content-around">
              <div class="item active-booking" id="booking-0" onclick="getBookingSection('0')">
                LIVE BOOKINGS
              </div>
              <div class="item" id="booking-1" onclick="getBookingSection('1')">
                BOOKING HISTORY
              </div>
              <div class="item" id="booking-2" onclick="getBookingSection('2')">
                SUBSCRIPTION
              </div>
            </div>
          </div>
          <div class="booking-card-main flex flex-column" id="booking-section-main-0" > 
            <div class="booking-card mt-3 mx-3 card d-flex flex-column ">
              <div class="d-flex justify-content-end">
                <div class="py-2">
                  BOOKING STATUS: <span class="booking-status booking-confirm px-1"> <b> CONFIRM </b></span>
                </div>
              </div>
              <!-- <hr class="m-0"> -->
              <div class="d-flex flex-row align-items-center justify-content-between">
                <img src="images/Bikes/Bike_Second.png" class="booking-img w-25" alt="">
                <div class="bike-name d-flex flex-column">
                  <b>
                    AVENGER,
                  </b>
                  <span>
                    Bajaj
                  </span>
                </div>
                <div class="pick-drop d-flex align-items-center justify-content-between">
                  <div class="pick-date-time d-flex flex-column align-items-center">
                    <div class=" time-text" id="pick-time">7:00 PM</div>
                    <div class="pick-date-div d-flex">
                      <div id="pick-date"></div>
                      &nbsp;
                      <div id="pick-month-year"></div>
                      &nbsp;
                      <div id="pick-day"></div>
                    </div>
                  </div>
                  <div class="d-flex align-items-center">
                    <span class="material-icons-outlined">
                      horizontal_rule
                    </span>
                    <div class="to">
                      To 
                    </div>
                    <span class="material-icons-outlined">
                      horizontal_rule
                    </span>
                  </div>
                  <div class="drop-date-time d-flex flex-column align-items-center px-2">
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
                <div class="view-details-btn" id="view-details-btn-1">View Details</div>
              </div>
              <hr class="w-100 mt-0">
              <div class="order-details d-flex justify-content-between w-100">
                <div class="d-flex flex-column">
                  <div>Order Date:</div>
                  <div class="order-item--bold" id="orderDate">2021-08-23</div>
                </div>
                <div class="d-flex flex-column">
                  <div>Order ID:</div>
                  <div class="order-item--bold">#2456FHN788990M</div>
                </div>
                <div class="d-flex flex-column">
                  <div>Order Type:</div>
                  <div class="order-item--bold">Subscribed</div>
                </div>
                <div class="d-flex flex-column">
                  <div>Total Rent:</div>
                  <div class="order-item--bold">₹3300</div>
                </div>
              </div>
              <hr>
              <div class="d-flex justify-content-center"  >
                <div class="card view-details-section" id="view-details-1" style="display:none">
                  <div class="card-body">
                    <div class="card-text">
                      Booking Details
                    </div>
                    <table class="table">
                      <tbody>
                        <tr>
                          <th scope="row">Booking Date</th>
                          <td>2021-06-17</td>
                        </tr>
                        <tr>
                          <th scope="row">Pickup Date</th>
                          <td>2021-06-17 <span>09:00:00</span></td>
                        </tr>
                        <tr>
                          <th scope="row">Drop Date</th>
                          <td>2021-06-17 <span>09:00:00</span></td>
                        </tr>
                        <tr>
                          <th scope="row">Total Rent</th>
                          <td>₹1,150</td>
                        </tr>
                        <tr>
                          <th scope="row">Amount Paid</th>
                          <td>₹1,000</td>
                        </tr>
                        <tr>
                          <th scope="row">Remaining Amount</th>
                          <td>₹150</td>
                        </tr>
                        <tr>
                          <th scope="row">Booking Status</th>
                          <td class="view-details--pending" style="color:red"><b> Pending </b></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="booking-card m-3 card d-flex flex-column">
              <div class="d-flex justify-content-end">
                <div class="py-2">
                  BOOKING STATUS: <span class="booking-status booking-cancel px-1"><b> CANCEL </b></span>
                </div>
              </div>
              <!-- <hr class="m-0"> -->
              <div class="d-flex flex-row align-items-center justify-content-between">
                <img src="images/Bikes/Bike_Second.png" class="booking-img w-25" alt="">
                <div class="bike-name d-flex flex-column">
                  <b>
                    AVENGER,
                  </b>
                  <span>
                    Bajaj
                  </span>
                </div>
                <div class="pick-drop d-flex align-items-center justify-content-between">
                  <div class="pick-date-time d-flex flex-column align-items-center">
                    <div class=" time-text" id="pick-time">7:00 PM</div>
                    <div class="pick-date-div d-flex">
                      <div id="pick-date"></div>
                      &nbsp;
                      <div id="pick-month-year"></div>
                      &nbsp;
                      <div id="pick-day"></div>
                    </div>
                  </div>
                  <div class="d-flex align-items-center">
                    <span class="material-icons-outlined">
                      horizontal_rule
                    </span>
                    <div class="to">
                      To 
                    </div>
                    <span class="material-icons-outlined">
                      horizontal_rule
                    </span>
                  </div>
                  <div class="drop-date-time d-flex flex-column align-items-center px-2">
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
                <div class="view-details-btn" id="view-details-btn-2">View Details</div>
              </div>
              <hr class="w-100 mt-0">
              <div class="order-details d-flex justify-content-between w-100">
                <div class="d-flex flex-column">
                  <div>Order Date:</div>
                  <div class="order-item--bold" id="orderDate">2021-08-23</div>
                </div>
                <div class="d-flex flex-column">
                  <div>Order ID:</div>
                  <div class="order-item--bold">#2456FHN788990M</div>
                </div>
                <div class="d-flex flex-column">
                  <div>Order Type:</div>
                  <div class="order-item--bold">Subscribed</div>
                </div>
                <div class="d-flex flex-column">
                  <div>Total Rent:</div>
                  <div class="order-item--bold">₹3300</div>
                </div>
              </div>
              <hr>
              <div class="d-flex justify-content-center"  >
                <div class="card view-details-section" id="view-details-2" style="display:none">
                  <div class="card-body">
                    <div class="card-text">
                      Booking Details
                    </div>
                    <table class="table">
                      <tbody>
                        <tr>
                          <th scope="row">Booking Date</th>
                          <td>2021-06-17</td>
                        </tr>
                        <tr>
                          <th scope="row">Pickup Date</th>
                          <td>2021-06-17 <span>09:00:00</span></td>
                        </tr>
                        <tr>
                          <th scope="row">Drop Date</th>
                          <td>2021-06-17 <span>09:00:00</span></td>
                        </tr>
                        <tr>
                          <th scope="row">Total Rent</th>
                          <td>₹1,150</td>
                        </tr>
                        <tr>
                          <th scope="row">Amount Paid</th>
                          <td>₹1,000</td>
                        </tr>
                        <tr>
                          <th scope="row">Remaining Amount</th>
                          <td>₹150</td>
                        </tr>
                        <tr>
                          <th scope="row">Booking Status</th>
                          <td class="view-details--pending"><b> Pending </b></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <div class="booking-card m-3 card d-flex flex-column">
              <div class="d-flex justify-content-end">
                <div class="py-2">
                  BOOKING STATUS: <span class="booking-status booking-pending px-1"> <b> PENDING </b> </span>
                </div>
              </div>
              <!-- <hr class="m-0"> -->
              <div class="d-flex flex-row align-items-center justify-content-between">
                <img src="images/Bikes/Bike_Second.png" class="booking-img w-25" alt="">
                <div class="bike-name d-flex flex-column">
                  <b>
                    AVENGER,
                  </b>
                  <span>
                    Bajaj
                  </span>
                </div>
                <div class="pick-drop d-flex align-items-center justify-content-between">
                  <div class="pick-date-time d-flex flex-column align-items-center">
                    <div class=" time-text" id="pick-time">7:00 PM</div>
                    <div class="pick-date-div d-flex">
                      <div id="pick-date"></div>
                      &nbsp;
                      <div id="pick-month-year"></div>
                      &nbsp;
                      <div id="pick-day"></div>
                    </div>
                  </div>
                  <div class="d-flex align-items-center">
                    <span class="material-icons-outlined">
                      horizontal_rule
                    </span>
                    <div class="to">
                      To 
                    </div>
                    <span class="material-icons-outlined">
                      horizontal_rule
                    </span>
                  </div>
                  <div class="drop-date-time d-flex flex-column align-items-center px-2">
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
                <div class="view-details-btn" id="view-details-btn-3">View Details</div>
              </div>
              <hr class="w-100 mt-0">
              <div class="order-details d-flex justify-content-between w-100">
                <div class="d-flex flex-column">
                  <div>Order Date:</div>
                  <div class="order-item--bold" id="orderDate">2021-08-23</div>
                </div>
                <div class="d-flex flex-column">
                  <div>Order ID:</div>
                  <div class="order-item--bold">#2456FHN788990M</div>
                </div>
                <div class="d-flex flex-column">
                  <div>Order Type:</div>
                  <div class="order-item--bold">Subscribed</div>
                </div>
                <div class="d-flex flex-column">
                  <div>Total Rent:</div>
                  <div class="order-item--bold">₹3300</div>
                </div>
              </div>
              <hr>
              <div class="d-flex justify-content-center"  >
                <div class="card view-details-section" id="view-details-3" style="display:none">
                  <div class="card-body">
                    <div class="card-text">
                      Booking Details
                    </div>
                    <table class="table">
                      <tbody>
                        <tr>
                          <th scope="row">Booking Date</th>
                          <td>2021-06-17</td>
                        </tr>
                        <tr>
                          <th scope="row">Pickup Date</th>
                          <td>2021-06-17 <span>09:00:00</span></td>
                        </tr>
                        <tr>
                          <th scope="row">Drop Date</th>
                          <td>2021-06-17 <span>09:00:00</span></td>
                        </tr>
                        <tr>
                          <th scope="row">Total Rent</th>
                          <td>₹1,150</td>
                        </tr>
                        <tr>
                          <th scope="row">Amount Paid</th>
                          <td>₹1,000</td>
                        </tr>
                        <tr>
                          <th scope="row">Remaining Amount</th>
                          <td>₹150</td>
                        </tr>
                        <tr>
                          <th scope="row">Booking Status</th>
                          <td class="view-details--pending"><b> Pending </b></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="booking-card-main flex flex-column" id="booking-section-main-1"  style="display:none"> 
            <div class="booking-card mt-3 mx-3 card d-flex flex-column ">
              <div class="d-flex justify-content-end">
                <div class="py-2">
                  BOOKING STATUS: <span class="booking-status booking-confirm px-1"> <b> CONFIRM </b></span>
                </div>
              </div>
              <!-- <hr class="m-0"> -->
              <div class="d-flex flex-row align-items-center justify-content-between">
                <img src="images/Bikes/Bike_Second.png" class="booking-img w-25" alt="">
                <div class="bike-name d-flex flex-column">
                  <b>
                    AVENGER,
                  </b>
                  <span>
                    Bajaj
                  </span>
                </div>
                <div class="pick-drop d-flex align-items-center justify-content-between">
                  <div class="pick-date-time d-flex flex-column align-items-center">
                    <div class=" time-text" id="pick-time">7:00 PM</div>
                    <div class="pick-date-div d-flex">
                      <div id="pick-date"></div>
                      &nbsp;
                      <div id="pick-month-year"></div>
                      &nbsp;
                      <div id="pick-day"></div>
                    </div>
                  </div>
                  <div class="d-flex align-items-center">
                    <span class="material-icons-outlined">
                      horizontal_rule
                    </span>
                    <div class="to">
                      To 
                    </div>
                    <span class="material-icons-outlined">
                      horizontal_rule
                    </span>
                  </div>
                  <div class="drop-date-time d-flex flex-column align-items-center px-2">
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
                <div class="view-details-btn" id="view-details-btn-1">View Details</div>
              </div>
              <hr class="w-100 mt-0">
              <div class="order-details d-flex justify-content-between w-100">
                <div class="d-flex flex-column">
                  <div>Order Date:</div>
                  <div class="order-item--bold" id="orderDate">2021-08-23</div>
                </div>
                <div class="d-flex flex-column">
                  <div>Order ID:</div>
                  <div class="order-item--bold">#2456FHN788990M</div>
                </div>
                <div class="d-flex flex-column">
                  <div>Order Type:</div>
                  <div class="order-item--bold">Short Term Rental</div>
                </div>
                <div class="d-flex flex-column">
                  <div>Total Rent:</div>
                  <div class="order-item--bold">₹3300</div>
                </div>
              </div>
              <hr>
              <div class="d-flex justify-content-center"  >
                <div class="card view-details-section" id="view-details-1" style="display:none">
                  <div class="card-body">
                    <div class="card-text">
                      Booking Details
                    </div>
                    <table class="table">
                      <tbody>
                        <tr>
                          <th scope="row">Booking Date</th>
                          <td>2021-06-17</td>
                        </tr>
                        <tr>
                          <th scope="row">Pickup Date</th>
                          <td>2021-06-17 <span>09:00:00</span></td>
                        </tr>
                        <tr>
                          <th scope="row">Drop Date</th>
                          <td>2021-06-17 <span>09:00:00</span></td>
                        </tr>
                        <tr>
                          <th scope="row">Total Rent</th>
                          <td>₹1,150</td>
                        </tr>
                        <tr>
                          <th scope="row">Amount Paid</th>
                          <td>₹1,000</td>
                        </tr>
                        <tr>
                          <th scope="row">Remaining Amount</th>
                          <td>₹150</td>
                        </tr>
                        <tr>
                          <th scope="row">Booking Status</th>
                          <td class="view-details--pending" style="color:red"><b> Pending </b></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="booking-card m-3 card d-flex flex-column">
              <div class="d-flex justify-content-end">
                <div class="py-2">
                  BOOKING STATUS: <span class="booking-status booking-cancel px-1"><b> CANCEL </b></span>
                </div>
              </div>
              <!-- <hr class="m-0"> -->
              <div class="d-flex flex-row align-items-center justify-content-between">
                <img src="images/Bikes/Bike_Second.png" class="booking-img w-25" alt="">
                <div class="bike-name d-flex flex-column">
                  <b>
                    AVENGER,
                  </b>
                  <span>
                    Bajaj
                  </span>
                </div>
                <div class="pick-drop d-flex align-items-center justify-content-between">
                  <div class="pick-date-time d-flex flex-column align-items-center">
                    <div class=" time-text" id="pick-time">7:00 PM</div>
                    <div class="pick-date-div d-flex">
                      <div id="pick-date"></div>
                      &nbsp;
                      <div id="pick-month-year"></div>
                      &nbsp;
                      <div id="pick-day"></div>
                    </div>
                  </div>
                  <div class="d-flex align-items-center">
                    <span class="material-icons-outlined">
                      horizontal_rule
                    </span>
                    <div class="to">
                      To 
                    </div>
                    <span class="material-icons-outlined">
                      horizontal_rule
                    </span>
                  </div>
                  <div class="drop-date-time d-flex flex-column align-items-center px-2">
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
                <div class="view-details-btn" id="view-details-btn-2">View Details</div>
              </div>
              <hr class="w-100 mt-0">
              <div class="order-details d-flex justify-content-between w-100">
                <div class="d-flex flex-column">
                  <div>Order Date:</div>
                  <div class="order-item--bold" id="orderDate">2021-08-23</div>
                </div>
                <div class="d-flex flex-column">
                  <div>Order ID:</div>
                  <div class="order-item--bold">#2456FHN788990M</div>
                </div>
                <div class="d-flex flex-column">
                  <div>Order Type:</div>
                  <div class="order-item--bold">Subscribed</div>
                </div>
                <div class="d-flex flex-column">
                  <div>Total Rent:</div>
                  <div class="order-item--bold">₹3300</div>
                </div>
              </div>
              <hr>
              <div class="d-flex justify-content-center"  >
                <div class="card view-details-section" id="view-details-2" style="display:none">
                  <div class="card-body">
                    <div class="card-text">
                      Booking Details
                    </div>
                    <table class="table">
                      <tbody>
                        <tr>
                          <th scope="row">Booking Date</th>
                          <td>2021-06-17</td>
                        </tr>
                        <tr>
                          <th scope="row">Pickup Date</th>
                          <td>2021-06-17 <span>09:00:00</span></td>
                        </tr>
                        <tr>
                          <th scope="row">Drop Date</th>
                          <td>2021-06-17 <span>09:00:00</span></td>
                        </tr>
                        <tr>
                          <th scope="row">Total Rent</th>
                          <td>₹1,150</td>
                        </tr>
                        <tr>
                          <th scope="row">Amount Paid</th>
                          <td>₹1,000</td>
                        </tr>
                        <tr>
                          <th scope="row">Remaining Amount</th>
                          <td>₹150</td>
                        </tr>
                        <tr>
                          <th scope="row">Booking Status</th>
                          <td class="view-details--pending"><b> Pending </b></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <div class="booking-card m-3 card d-flex flex-column">
              <div class="d-flex justify-content-end">
                <div class="py-2">
                  BOOKING STATUS: <span class="booking-status booking-pending px-1"> <b> PENDING </b> </span>
                </div>
              </div>
              <!-- <hr class="m-0"> -->
              <div class="d-flex flex-row align-items-center justify-content-between">
                <img src="images/Bikes/Bike_Second.png" class="booking-img w-25" alt="">
                <div class="bike-name d-flex flex-column">
                  <b>
                    AVENGER,
                  </b>
                  <span>
                    Bajaj
                  </span>
                </div>
                <div class="pick-drop d-flex align-items-center justify-content-between">
                  <div class="pick-date-time d-flex flex-column align-items-center">
                    <div class=" time-text" id="pick-time">7:00 PM</div>
                    <div class="pick-date-div d-flex">
                      <div id="pick-date"></div>
                      &nbsp;
                      <div id="pick-month-year"></div>
                      &nbsp;
                      <div id="pick-day"></div>
                    </div>
                  </div>
                  <div class="d-flex align-items-center">
                    <span class="material-icons-outlined">
                      horizontal_rule
                    </span>
                    <div class="to">
                      To 
                    </div>
                    <span class="material-icons-outlined">
                      horizontal_rule
                    </span>
                  </div>
                  <div class="drop-date-time d-flex flex-column align-items-center px-2">
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
                <div class="view-details-btn" id="view-details-btn-3">View Details</div>
              </div>
              <hr class="w-100 mt-0">
              <div class="order-details d-flex justify-content-between w-100">
                <div class="d-flex flex-column">
                  <div>Order Date:</div>
                  <div class="order-item--bold" id="orderDate">2021-08-23</div>
                </div>
                <div class="d-flex flex-column">
                  <div>Order ID:</div>
                  <div class="order-item--bold">#2456FHN788990M</div>
                </div>
                <div class="d-flex flex-column">
                  <div>Order Type:</div>
                  <div class="order-item--bold">Subscribed</div>
                </div>
                <div class="d-flex flex-column">
                  <div>Total Rent:</div>
                  <div class="order-item--bold">₹3300</div>
                </div>
              </div>
              <hr>
              <div class="d-flex justify-content-center"  >
                <div class="card view-details-section" id="view-details-3" style="display:none">
                  <div class="card-body">
                    <div class="card-text">
                      Booking Details
                    </div>
                    <table class="table">
                      <tbody>
                        <tr>
                          <th scope="row">Booking Date</th>
                          <td>2021-06-17</td>
                        </tr>
                        <tr>
                          <th scope="row">Pickup Date</th>
                          <td>2021-06-17 <span>09:00:00</span></td>
                        </tr>
                        <tr>
                          <th scope="row">Drop Date</th>
                          <td>2021-06-17 <span>09:00:00</span></td>
                        </tr>
                        <tr>
                          <th scope="row">Total Rent</th>
                          <td>₹1,150</td>
                        </tr>
                        <tr>
                          <th scope="row">Amount Paid</th>
                          <td>₹1,000</td>
                        </tr>
                        <tr>
                          <th scope="row">Remaining Amount</th>
                          <td>₹150</td>
                        </tr>
                        <tr>
                          <th scope="row">Booking Status</th>
                          <td class="view-details--pending"><b> Pending </b></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="booking-card-main flex flex-column" id="booking-section-main-2" style="display:none"> 
            <div class="booking-card mt-3 mx-3 card d-flex flex-column ">
              <div class="d-flex justify-content-end">
                <div class="py-2">
                  BOOKING STATUS: <span class="booking-status booking-confirm px-1"> <b> CONFIRM </b></span>
                </div>
              </div>
              <!-- <hr class="m-0"> -->
              <div class="d-flex flex-row align-items-center justify-content-between">
                <img src="images/Bikes/Bike_Second.png" class="booking-img w-25" alt="">
                <div class="bike-name d-flex flex-column">
                  <b>
                    AVENGER,
                  </b>
                  <span>
                    Bajaj
                  </span>
                </div>
                <div class="pick-drop d-flex align-items-center justify-content-between">
                  <div class="pick-date-time d-flex flex-column align-items-center">
                    <div class=" time-text" id="pick-time">7:00 PM</div>
                    <div class="pick-date-div d-flex">
                      <div id="pick-date"></div>
                      &nbsp;
                      <div id="pick-month-year"></div>
                      &nbsp;
                      <div id="pick-day"></div>
                    </div>
                  </div>
                  <div class="d-flex align-items-center">
                    <span class="material-icons-outlined">
                      horizontal_rule
                    </span>
                    <div class="to">
                      To 
                    </div>
                    <span class="material-icons-outlined">
                      horizontal_rule
                    </span>
                  </div>
                  <div class="drop-date-time d-flex flex-column align-items-center px-2">
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
                <div class="view-details-btn" id="subscription-details-btn-1">View Details</div>
              </div>
              <hr class="w-100 mt-0">
              <div class="order-details d-flex justify-content-between w-100">
                <div class="d-flex flex-column">
                  <div>Order Date:</div>
                  <div class="order-item--bold" id="orderDate">2021-08-23</div>
                </div>
                <div class="d-flex flex-column">
                  <div>Order ID:</div>
                  <div class="order-item--bold">#2456FHN788990M</div>
                </div>
                <div class="d-flex flex-column">
                  <div>Order Type:</div>
                  <div class="order-item--bold">Subscribed</div>
                </div>
                <div class="d-flex flex-column">
                  <div>Total Rent:</div>
                  <div class="order-item--bold">₹3300</div>
                </div>
              </div>
              <hr>
              <div class="d-flex flex-column align-items-center"  >
                <div class="card view-details-section" id="subscription-details-1" style="display:none">
                  <div class="card-body">
                    <div class="card-text text-center booking-details-heading mb-3">
                      Booking Details
                    </div>
                    <table class="table">
                      <tbody>
                        <tr>
                          <th scope="row">Subscription Date</th>
                          <td>2021-06-17</td>
                        </tr>
                        <tr>
                          <th scope="row">Pickup Date</th>
                          <td>2021-06-17 <span>09:00:00</span></td>
                        </tr>
                        <tr>
                          <th scope="row">Tenure</th>
                          <td>3 Months</td>
                        </tr>
                        <tr>
                          <th scope="row">Rent per Month</th>
                          <td>₹4,150</td>
                        </tr>
                        <tr>
                          <th scope="row">Booking Status</th>
                          <td class="view-details--pending" style="color:red"><b> Pending </b></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="table-responsive table2 m-2">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Order ID</th>
                        <th>Tenure</th>
                        <th>Total Rent</th>
                        <th>Late Fee (₹100/ day)</th>
                        <th>Amount Paid</th>
                        <th>Amount Left</th>
                        <th>Payment Status</th>
                        <th>Pay Now</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>JOKSHURVGY456BSY</td>
                        <td>01 May 2021 - 21 Aug 2021</td>
                        <td>₹4,105</td>
                        <td>₹0</td>
                        <td>₹4,105</td>
                        <td>₹0</td>
                        <td>Done</td>
                        <td><button class="btn btn-success px-2 py-1">Pay</button></td>
                      </tr>
                      <tr>
                        <td>JOKSHURVGY456BSY</td>
                        <td>01 May 2021 - 21 Aug 2021</td>
                        <td>₹4,105</td>
                        <td>₹0</td>
                        <td>₹4,105</td>
                        <td>₹0</td>
                        <td>Done</td>
                        <td><button class="btn btn-success px-2 py-1">Pay</button></td>
                      </tr>
                      <tr>
                        <td>JOKSHURVGY456BSY</td>
                        <td>01 May 2021 - 21 Aug 2021</td>
                        <td>₹4,105</td>
                        <td>₹0</td>
                        <td>₹4,105</td>
                        <td>₹0</td>
                        <td>Done</td>
                        <td><button class="btn btn-success px-2 py-1">Pay</button></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="booking-card m-3 card d-flex flex-column">
              <div class="d-flex justify-content-end">
                <div class="py-2">
                  BOOKING STATUS: <span class="booking-status booking-cancel px-1"><b> CANCEL </b></span>
                </div>
              </div>
              <!-- <hr class="m-0"> -->
              <div class="d-flex flex-row align-items-center justify-content-between">
                <img src="images/Bikes/Bike_Second.png" class="booking-img w-25" alt="">
                <div class="bike-name d-flex flex-column">
                  <b>
                    AVENGER,
                  </b>
                  <span>
                    Bajaj
                  </span>
                </div>
                <div class="pick-drop d-flex align-items-center justify-content-between">
                  <div class="pick-date-time d-flex flex-column align-items-center">
                    <div class=" time-text" id="pick-time">7:00 PM</div>
                    <div class="pick-date-div d-flex">
                      <div id="pick-date"></div>
                      &nbsp;
                      <div id="pick-month-year"></div>
                      &nbsp;
                      <div id="pick-day"></div>
                    </div>
                  </div>
                  <div class="d-flex align-items-center">
                    <span class="material-icons-outlined">
                      horizontal_rule
                    </span>
                    <div class="to">
                      To 
                    </div>
                    <span class="material-icons-outlined">
                      horizontal_rule
                    </span>
                  </div>
                  <div class="drop-date-time d-flex flex-column align-items-center px-2">
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
                <div class="view-details-btn" id="subscription-details-btn-2">View Details</div>
              </div>
              <hr class="w-100 mt-0">
              <div class="order-details d-flex justify-content-between w-100">
                <div class="d-flex flex-column">
                  <div>Order Date:</div>
                  <div class="order-item--bold" id="orderDate">2021-08-23</div>
                </div>
                <div class="d-flex flex-column">
                  <div>Order ID:</div>
                  <div class="order-item--bold">#2456FHN788990M</div>
                </div>
                <div class="d-flex flex-column">
                  <div>Order Type:</div>
                  <div class="order-item--bold">Subscribed</div>
                </div>
                <div class="d-flex flex-column">
                  <div>Total Rent:</div>
                  <div class="order-item--bold">₹3300</div>
                </div>
              </div>
              <hr>
              <div class="d-flex justify-content-center"  >
                <div class="card view-details-section" id="subscription-details-2" style="display:none">
                  <div class="card-body">
                    <div class="card-text">
                      Booking Details
                    </div>
                    <table class="table">
                      <tbody>
                        <tr>
                          <th scope="row">Booking Date</th>
                          <td>2021-06-17</td>
                        </tr>
                        <tr>
                          <th scope="row">Pickup Date</th>
                          <td>2021-06-17 <span>09:00:00</span></td>
                        </tr>
                        <tr>
                          <th scope="row">Drop Date</th>
                          <td>2021-06-17 <span>09:00:00</span></td>
                        </tr>
                        <tr>
                          <th scope="row">Total Rent</th>
                          <td>₹1,150</td>
                        </tr>
                        <tr>
                          <th scope="row">Amount Paid</th>
                          <td>₹1,000</td>
                        </tr>
                        <tr>
                          <th scope="row">Remaining Amount</th>
                          <td>₹150</td>
                        </tr>
                        <tr>
                          <th scope="row">Booking Status</th>
                          <td class="view-details--pending"><b> Pending </b></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <div class="booking-card m-3 card d-flex flex-column">
              <div class="d-flex justify-content-end">
                <div class="py-2">
                  BOOKING STATUS: <span class="booking-status booking-pending px-1"><b> PENDING </b></span>
                </div>
              </div>
              <!-- <hr class="m-0"> -->
              <div class="d-flex flex-row align-items-center justify-content-between">
                <img src="images/Bikes/Bike_Second.png" class="booking-img w-25" alt="">
                <div class="bike-name d-flex flex-column">
                  <b>
                    AVENGER,
                  </b>
                  <span>
                    Bajaj
                  </span>
                </div>
                <div class="pick-drop d-flex align-items-center justify-content-between">
                  <div class="pick-date-time d-flex flex-column align-items-center">
                    <div class=" time-text" id="pick-time">7:00 PM</div>
                    <div class="pick-date-div d-flex">
                      <div id="pick-date"></div>
                      &nbsp;
                      <div id="pick-month-year"></div>
                      &nbsp;
                      <div id="pick-day"></div>
                    </div>
                  </div>
                  <div class="d-flex align-items-center">
                    <span class="material-icons-outlined">
                      horizontal_rule
                    </span>
                    <div class="to">
                      To 
                    </div>
                    <span class="material-icons-outlined">
                      horizontal_rule
                    </span>
                  </div>
                  <div class="drop-date-time d-flex flex-column align-items-center px-2">
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
                <div class="view-details-btn" id="subscription-details-btn-3">View Details</div>
              </div>
              <hr class="w-100 mt-0">
              <div class="order-details d-flex justify-content-between w-100">
                <div class="d-flex flex-column">
                  <div>Order Date:</div>
                  <div class="order-item--bold" id="orderDate">2021-08-23</div>
                </div>
                <div class="d-flex flex-column">
                  <div>Order ID:</div>
                  <div class="order-item--bold">#2456FHN788990M</div>
                </div>
                <div class="d-flex flex-column">
                  <div>Order Type:</div>
                  <div class="order-item--bold">Subscribed</div>
                </div>
                <div class="d-flex flex-column">
                  <div>Total Rent:</div>
                  <div class="order-item--bold">₹3300</div>
                </div>
              </div>
              <hr>
              <div class="d-flex justify-content-center"  >
                <div class="card view-details-section" id="subscription-details-3" style="display:none">
                  <div class="card-body">
                    <div class="card-text text-center">
                      Booking Details
                    </div>
                    <table class="table">
                      <tbody>
                        <tr>
                          <th scope="row">Booking Date</th>
                          <td>2021-06-17</td>
                        </tr>
                        <tr>
                          <th scope="row">Pickup Date</th>
                          <td>2021-06-17 <span>09:00:00</span></td>
                        </tr>
                        <tr>
                          <th scope="row">Drop Date</th>
                          <td>2021-06-17 <span>09:00:00</span></td>
                        </tr>
                        <tr>
                          <th scope="row">Total Rent</th>
                          <td>₹1,150</td>
                        </tr>
                        <tr>
                          <th scope="row">Amount Paid</th>
                          <td>₹1,000</td>
                        </tr>
                        <tr>
                          <th scope="row">Remaining Amount</th>
                          <td>₹150</td>
                        </tr>
                        <tr>
                          <th scope="row">Booking Status</th>
                          <td class="view-details--pending"><b> Pending </b></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="ticket-main flex-column" style="display:none" id="main-right-1">
      <div class="heading">
        <div>Raise Ticket</div>
      </div>
      <div class="card-body">
        <div class="raise-ticket card">
          <div class="sub-heading d-flex justify-content-between">
            Raise New Ticket
            <b class="d-flex align-items-center">
              <span class="material-icons">
              phone
              </span>  
              9971770131
            </b>
          </div>
          <div class="new-request px-3">
            <div>Need some more help? Create a New Request.</div>
            <button class="btn btn-primary" data-toggle="modal" data-target="#ticketModal">New Request</button>
            <div class="modal fade" id="ticketModal" tabindex="-1" role="dialog" aria-labelledby="ticketModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="ticketModalLabel">New Request</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form class="request-form" action method="POST" id="new-request">
                      <div class="form-group mt-2">
                        <label for="inputState">Request Type: </label>
                        <select id="inputState" class="form-control" name="type">
                          <option value="select" hidden> Select Type </option>
                          <option value="booking-issue"> Booking Issue </option>
                          <option value="payment-refund"> Payment and Refund</option>
                          <option value="dealer-issue"> Dealer Issue </option>
                          <option value="corporate-banking">Corporate Banking </option>
                          <option value="careers"> Careers </option>
                          <option value="suggestion">Suggestion </option>
                          <option value="others"> Others </option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="comment">Description:</label>
                        <textarea class="form-control" rows="5" id="comment" name="description"></textarea>
                      </div>
                      <button type="button" class="btn btn-primary">Save Request</button>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="sub-heading">
            Raised Requests
          </div>
          <div class="request-cards--main d-flex justify-content-between">
            <div class="card" id="request-card-0">
              <div class="card-body ">
                <div class="card-title d-flex justify-content-between">
                  <div class="d-flex flex-column">
                    <span>Type:</span>
                    <b>
                      Suggestion
                    </b>
                  </div>
                  <div class="d-flex flex-column">
                    <span>Id:</span>
                    <b>#13BHNJ</b>
                  </div>
                </div>
                <hr class="request-hr">
                <div class="card-text">
                  I think you should add the search functionality
                </div>
                <hr class="request-hr">
                <div class="card-text d-flex justify-content-between">
                <div class="d-flex flex-column">
                    <span>Date:</span>
                    <b>2019-07-20</b>
                  </div>
                  <div class="d-flex flex-column">
                    <span>Status:</span>
                    <b>Pending...</b>
                  </div>
                </div>
              </div>
            </div>
            <div class="card" id="request-card-1">
              <div class="card-body ">
                <div class="card-title d-flex justify-content-between">
                  <div class="d-flex flex-column">
                    <span>Type:</span>
                    <b>
                      Suggestion
                    </b>
                  </div>
                  <div class="d-flex flex-column">
                    <span>Id:</span>
                    <b>#13BHNJ</b>
                  </div>
                </div>
                <hr class="request-hr">
                <div class="card-text">
                  I think you should add the search functionality
                </div>
                <hr class="request-hr">
                <div class="card-text d-flex justify-content-between">
                <div class="d-flex flex-column">
                    <span>Date:</span>
                    <b>2019-07-20</b>
                  </div>
                  <div class="d-flex flex-column">
                    <span>Status:</span>
                    <b>Pending...</b>
                  </div>
                </div>
              </div>
            </div>
            <div class="card" id="request-card-2">
              <div class="card-body ">
                <div class="card-title d-flex justify-content-between">
                  <div class="d-flex flex-column">
                    <span>Type:</span>
                    <b>
                      Suggestion
                    </b>
                  </div>
                  <div class="d-flex flex-column">
                    <span>Id:</span>
                    <b>#13BHNJ</b>
                  </div>
                </div>
                <hr class="request-hr">
                <div class="card-text">
                  I think you should add the search functionality
                </div>
                <hr class="request-hr">
                <div class="card-text d-flex justify-content-between">
                <div class="d-flex flex-column">
                    <span>Date:</span>
                    <b>2019-07-20</b>
                  </div>
                  <div class="d-flex flex-column">
                    <span>Status:</span>
                    <b>Pending...</b>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="refer-main flex-column h-100" style="display:none" id="main-right-2">
      <div class="heading">REFER AND EARN</div>
      <div class="card-body">
        <div class="card">
          <div class="sub-heading">Refer & Earn</div>
          <div class="referral-div d-flex flex-column align-items-center justify-content-center">
            <div class="referral-first">
              <div class="referral-left text-center m-2">
                <div class="referral-heading">Invite Friends to get Cashback upto <span class="refer-money"> ₹99</span></div>
                <hr class="w-100">
                <div class="referral-email input-group mb-3">
                  <input type="text" class="form-control" placeholder="Enter Email Address" aria-label="Enter Email Address" aria-describedby="button-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-primary" type="button" id="button-addon2">Invite</button>
                  </div>
                </div>
              </div>
              <img class="refer-image" src="images/refer-and-earn.png" alt="Refer and earn">
            </div>
            <hr class="w-100">
            <div class="referral-second">
              <div class="no-referrals">
                No Referrals 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="account-main flex-column h-100" id="main-right-3">
      <div class="heading">MY PROFILE</div>
      <div class="card-body">
        <div class="account-form card">
          <div class="account-form--heading">Account Details</div>
          <div class="row form-group px-3 align-items-center">
            <label class="col-sm-2 p-t5 m-0">Name</label>
            <div class="col-sm-4">
              <input
              class="form-control size-13"
              name="name"
              placeholder="John Doe"
              type="text"
              />
            </div>
          </div>
          <div class="row form-group px-3 align-items-center">
            <label class="col-sm-2 p-t5">Email</label>
            <div class="col-sm-4">
              <input
              class="form-control size-13"
              name="email"
              placeholder="johndoe@gmail.com"
              type="email"
              />
            </div>
          </div>
          <div class="row form-group px-3 align-items-center">
            <label class="col-sm-2 p-t5">Mobile</label>
            <div class="col-sm-4">
              <input
              class="form-control size-13"
              name="mobile"
              placeholder="10 digit mobile no."
              type="number"
              />
            </div>
          </div>
          <div class="account-form--heading">Current Address</div>
          <div class="d-flex">
            <div class="row form-group px-3 align-items-center w-100">
              <label class="col-sm-4 p-t5">Address 1</label>
              <div class="col-8">
                <input
                class="form-control size-13"
                name="address-1"
                placeholder="Apartment, House number"
                type="text"
                />
              </div>
            </div>
            <div class="row form-group px-3 align-items-center w-100">
              <label class="col-sm-4 p-t5">Address 2</label>
              <div class="col-8">
                <input
                class="form-control size-13"
                  name="address-2"
                  placeholder="Landmark, Street Name"
                  type="text"
                  />
              </div>
            </div>
          </div>
          <div class="d-flex">
            <div class="row form-group px-3 align-items-center w-100">
              <label class="col-sm-4 p-t5">City</label>
              <div class="col-8">
                <input
                class="form-control size-13"
                name="city"
                placeholder="Mumbai, New York"
                type="text"
                />
              </div>
            </div>
            <div class="row form-group px-3 align-items-center w-100">
              <label class="col-sm-4 p-t5">Zipcode</label>
              <div class="col-8">
                <input
                class="form-control size-13"
                name="zipcode"
                placeholder="500000"
                  type="text"
                  />
              </div>
            </div>
          </div>
          <div class="permanent-address form-check">
            <input
            class="form-check-input"
            type="checkbox"
            value="Permanent"
            id="permanentAddress"
            onclick="permanentAddress()"
            checked
            />
            <label class="form-check-label" for="permanentAddress">
              Permanent Address same as current Address
            </label>
          </div>
          <div id="permanentAddressForm" style="display: none">
            <div class="account-form--heading">Permanent Address</div>
            <div class="d-flex">
              <div class="row form-group px-3 align-items-center w-100">
                <label class="col-sm-4 p-t5">Address 1</label>
                <div class="col-8">
                  <input
                  class="form-control size-13"
                  name="address-1"
                  placeholder="Apartment, House number"
                  type="text"
                  />
                </div>
              </div>
              <div class="row form-group px-3 align-items-center w-100">
                <label class="col-sm-4 p-t5">Address 2</label>
                <div class="col-8">
                  <input
                  class="form-control size-13"
                    name="address-2"
                    placeholder="landmark, Street Name"
                    type="text"
                    />
                </div>
              </div>
            </div>
            <div class="d-flex">
              <div class="row form-group px-3 align-items-center w-100">
                <label class="col-sm-4 p-t5">City</label>
                <div class="col-8">
                  <input
                    class="form-control size-13"
                    name="city"
                    placeholder="Mumbai, New York"
                    type="text"
                    />
                  </div>
              </div>
              <div class="row form-group px-3 align-items-center w-100">
                <label class="col-sm-4 p-t5">Zipcode</label>
                <div class="col-8">
                  <input
                  class="form-control size-13"
                    name="zipcode"
                    placeholder="500000"
                    type="text"
                    />
                  </div>
                </div>
              </div>
          </div>
        </div>
        <div class="submit-dashboard">
          <button type="submit" class="submit-btn">UPDATE </button>
        </div>
      </div>
    </div>
    <div class="verify-main flex-column h-100" style="display:none" id="main-right-4">
      <div class="heading">PROFILE VERIFICATION</div>
      <div class="card-body">
        <div class="card">
          <div class="sub-heading">Aadhar Card</div>
          <div class="row form-group px-3 align-items-center">
            <label class="col-sm-2 p-t5 m-0 pr-0" for="aadhar-front">Front Side</label>
            <div class="col-sm-10 p-0 d-flex flex-row align-items-center">
              <input
              name="aadhar-front"
              id="aadhar-front"
              accept=".png,.jpg,.jpeg"
              placeholder="John Doe"
              type="file"
              onChange="img_pathUrl(this,'front-img','btn-preview-section-0');"
              />
              <img src="" class="preview-img mt-2" style="display:none" id="front-img" alt="Front-image">
              <div id="btn-preview-section-0" class="profile-view-image align-items-between" style="display:none" >
                  <button class="btn btn-primary m-2 ml-3">Save</button>
                  <label for="aadhar-front" class="label-preview--change btn btn-danger m-2">Change</label>
              </div>
            </div>
          </div>
          <div class="row form-group px-3 align-items-center">
            <label class="col-sm-2 p-t5 m-0 pr-0" for="aadhar-back">Back Side</label>
            <div class="col-sm-10 p-0 d-flex flex-row align-items-center">
              <input
              name="aadhar-back"
              id="aadhar-back"
              accept=".png,.jpg,.jpeg"
              placeholder="John Doe"
              type="file"
              onChange="img_pathUrl(this,'back-img','btn-preview-section-1');"
              />
              <img src="" class="preview-img mt-2" style="display:none" id="back-img" alt="Back-image">
              <div id="btn-preview-section-1" class="profile-view-image align-items-between" style="display:none" >
                  <button class="btn btn-primary m-2 ml-3">Save</button>
                  <label for="aadhar-back" class="label-preview--change btn btn-danger m-2">Change</label>
              </div>
            </div>
          </div>
          <div class="sub-heading">Pan Card</div>
          <div class="row form-group px-3 align-items-center">
            <label class="col-sm-2 p-t5 m-0" for="pancard">Pan Card</label>
            <div class="col-sm-10 p-0 d-flex flex-row align-items-center">
              <input
              name="pancard"
              id="pancard"
              accept=".png,.jpg,.jpeg"
              placeholder="Pan Card"
              type="file"
              onChange="img_pathUrl(this,'pan-img','btn-preview-section-2');"
              />
              <img src="" class="preview-img mt-2" style="display:none" id="pan-img" alt="Pan-image">
              <div id="btn-preview-section-2" class="profile-view-image align-items-between" style="display:none" >
                  <button class="btn btn-primary m-2 ml-3">Save</button>
                  <label for="pancard" class="label-preview--change btn btn-danger m-2">Change</label>
              </div>
            </div>
          </div>
          <div class="sub-heading">Driving License</div>
          <div class="row form-group px-3 align-items-center">
            <label class="col-sm-2 p-t5 m-0" for="license">Driving License</label>
            <div class="col-sm-10 p-0 d-flex flex-row align-items-center">
              <input
              name="license"
              id="license"
              accept=".png,.jpg,.jpeg"
              placeholder="Driving License"
              type="file"
              onChange="img_pathUrl(this,'license-img','btn-preview-section-3');"
              />
              <img src="" class="preview-img mt-2" style="display:none" id="license-img" alt="License-image">
              <div id="btn-preview-section-3" class="profile-view-image align-items-between" style="display:none" >
                  <button class="btn btn-primary m-2 ml-3">Save</button>
                  <label for="license" class="label-preview--change btn btn-danger m-2">Change</label>
              </div>
            </div>
          </div>
          
        </div>
        <div class="submit-dashboard">
          <button type="submit" class="submit-btn">UPDATE </button>
        </div>
      </div>
    </div>
    <div class="deposit-main flex-column px-4" style="display:none" id="main-right-5">
      <div class="deposit-heading heading">Security Deposit</div>
      <div class="deposit-body card-body d-flex justify-content-between px-0">
        <div class="card" id="card-0">
          <div class="card-body ">
            <div class="deposit--heading card-tite">
              ACTIVE DEPOSIT
            </div>
            <div class="card-text deposit-amt">
              ₹360
            </div>
            <hr class="deposit-hr">
            <div class="card-text">
              This includes the active deposit you have in your account
            </div>
          </div>
        </div>
        <div class="card" id="card-1">
          <div class="card-body">
            <div class="deposit--heading card-tite">
              ADDED AMOUNT
            </div>
            <div class="card-text deposit-amt">
              ₹360
            </div>
            <hr class="deposit-hr">
            <div class="card-text">
              This includes the amount you want to add to your current account
            </div>
            <a href="#" class="btn bg-success text-white mt-2" id="add-deposit--btn" onclick="getAddInput()">Add Deposit</a>
            <form action method="post" class="add-deposit--form mt-2" id="add-deposit--input">
              <input class="form-control mr-3" type="number">
              <button class="btn btn-primary" type="submit">ADD</button>
            </form>
          </div>
        </div>
        <div class="card" id="card-2">
          <div class="card-body">
            <div class="deposit--heading card-tite">
              WITHDRAWABLE AMOUNT
            </div>
            <div class="card-text deposit-amt">
              ₹360
            </div>
            <hr class="deposit-hr w-100">
            <div class="card-text">
              This includes the amount you want to withdraw from your account 
            </div>
            <a href="#" class="btn bg-dark text-white mt-2" data-toggle="modal" data-target="#depositModal">Withdraw Deposit</a>
            <div class="modal fade" id="depositModal" tabindex="-1" role="dialog" aria-labelledby="depositModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="depositModalLabel">Withdraw Amount</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form class="request-form" action method="POST" id="new-request">
                      <div class="form-group">
                        <div>Withdrawable Amount: </div>
                        <div>₹360</div>
                      </div>
                      <div class="form-group">
                        <label for="withdraw-amount">Amount to Withdraw</label>
                        <input type="number" class="form-control" id="withdraw-amount" placeholder="Amount">
                      </div>
                      <div class="form-group">
                        <label for="withdraw-amount">Account No.</label>
                        <input type="number" class="form-control" id="withdraw-amount" placeholder="Account No.">
                      </div>
                      <div class="form-group">
                        <label for="withdraw-amount">IFSC Code</label>
                        <input type="text" class="form-control" id="withdraw-amount" placeholder="IFSC Code">
                      </div>
                      <button type="button" class="btn btn-dark">Withdraw</button>
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <table class="table table-hover px-2">
        <thead>
          <tr>
            <!-- <th scope="col">#</th> -->
            <th scope="col">Deposit Paid On</th>
            <th scope="col">Mode of Payment</th>
            <th scope="col">Transaction ID/Ref No.</th>
            <th scope="col">Amount</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <!-- <th scope="row">1</th> -->
            <td scope="row">07 Apr 2021</td>
            <td>Online Payment</td>
            <td>order_cb02h78hnk5pave70k49cioe89</td>
            <td>₹360/-</td>
          </tr>
          <tr>
            <!-- <th scope="row">2</th> -->
            <td scope="row">07 Apr 2021</td>
            <td>Online Payment</td>
            <td>order_cb02h78hnk5pave70k49cioe89</td>
            <td>₹360/-</td>
          </tr>
          <tr>
            <!-- <th scope="row">1</th> -->
            <td scope="row">07 Apr 2021</td>
            <td>Online Payment</td>
            <td>order_cb02h78hnk5pave70k49cioe89</td>
            <td>₹360/-</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="otp-verify-main flex-column" style="display:none" id="main-right-6">
      <div class="heading">
        <div>OTP Verification</div>
      </div>
      <div class="card-body">
        <div class="card">
          <div class="sub-heading">OTP Verification</div>
          <form action="" method="POST" id="mobile-form">
            <div class="row form-group px-3 align-items-center">
              <label class="col-sm-3 p-t5 m-0" for="mobile-otp">Mobile Number</label>
              <div class="col-sm-4 mt-2" >
                <input
                class="form-control size-13"
                name="name"
                placeholder="9875689248"
                type="text"
                id="mobile-otp"
                />
              </div>
            </div>
            <div class="text-center">
              <button class="otp-verify-btn bg-white" onclick="getOtp()">Send OTP</button>
            </div>
          </form>
          <form action="" method="POST" id="otp-verification" style="display:none">
            <div class="row form-group px-3 align-items-center">
              <label class="col-sm-3 p-t5 m-0" for="mobile-otp">Verify OTP</label>
              <div class="col-sm-4 mt-2" >
                <input
                class="form-control size-13"
                name="name"
                placeholder="Enter OTP"
                type="text"
                id="mobile-otp"
                />
              </div>
            </div>
            <div class="text-center ">
              <button class="otp-verify-btn bg-white">SUBMIT</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="otp-verify-main flex-column" style="display:none" id="main-right-7">
      <div class="heading">
        <div>OTP Verification</div>
      </div>
      <div class="card-body">
        <div class="card">
          <div class="sub-heading">Emergency OTP Verification</div>
          <form action="" method="POST" id="emergency-mobile" >
            <div class="row form-group px-3 align-items-center">
              <label class="col-sm-4 p-t5 m-0" for="mobile-otp">Emergency Mobile Number</label>
              <div class="col-sm-4 mt-2" >
                <input
                class="form-control size-13"
                name="name"
                placeholder="9875689248"
                type="text"
                id="mobile-otp"
                />
              </div>
            </div>
            <div class="text-center ">
              <button class="otp-verify-btn bg-white" onclick="getOtpEmergency()">Send OTP</button>
            </div>
          </form>
          <form action="" method="POST" id="emergency-otp" style="display:none">
            <div class="row form-group px-3 align-items-center">
              <label class="col-sm-3 p-t5 m-0" for="emergency-mobile-otp">Verify OTP</label>
              <div class="col-sm-4 mt-2" >
                <input
                class="form-control size-13"
                name="name"
                placeholder="Enter OTP"
                type="text"
                id="emergency-mobile-otp"
                />
              </div>
            </div>
            <div class="text-center">
              <button class="otp-verify-btn bg-white">SUBMIT</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  
  </script>
