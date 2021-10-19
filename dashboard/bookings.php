<div class="bookings-main flex-column h-100"  id="main-right-0">
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