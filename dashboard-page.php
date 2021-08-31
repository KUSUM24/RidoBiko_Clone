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
      <div class="status--container d-flex align-items-center">
        <span class="material-icons-outlined active-icon" id="numberStatus">
          check_circle_outline
        </span>
        <div>Mobile Number</div>
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
          <div class="booking-card-main flex flex-column">
            <div class="booking-card card d-flex flex-column">
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
                <a href="#">View Details</a>
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
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="ticket-main flex-column"  id="main-right-1">
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
            <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">New Request</button>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New Request</h5>
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
            <img class="referral-img" src="images/referral.jpg" alt="Refer and Earn">
            <div class="referral-heading">Invite Friends and get Cashback upto ₹99</div>
            <div class="referral-btn btn btn-dark">Coming Soon</div>
          </div>
        </div>
      </div>
    </div>
    <div class="account-main flex-column h-100" style="display:none" id="main-right-3">
      <div class="heading">MY PROFILE</div>
      <div class="card-body">
        <div class="account-form card">
          <div class="account-form--heading">Account Details</div>
          <div class="row form-group px-3 align-items-center">
            <label class="col-sm-2 p-t5 m-0">Name</label>
            <div class="col-sm-4 p-0">
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
            <div class="col-sm-6 p-0 d-flex flex-row align-items-center">
              <input
              name="aadhar-front"
              id="aadhar-front"
              accept=".png,.jpg,.jpeg"
              placeholder="John Doe"
              type="file"
              onChange="img_pathUrl(this,'front-img');"
              />
              <img src="" class="preview-img mt-2" style="display:none" id="front-img" alt="Front-image">
            </div>
          </div>
          <div class="row form-group px-3 align-items-center">
            <label class="col-sm-2 p-t5 m-0 pr-0" for="aadhar-back">Back Side</label>
            <div class="col-sm-6 p-0 d-flex flex-row align-items-center">
              <input
              name="aadhar-back"
              id="aadhar-back"
              accept=".png,.jpg,.jpeg"
              placeholder="John Doe"
              type="file"
              onChange="img_pathUrl(this,'back-img');"
              />
              <img src="" class="preview-img mt-2" style="display:none" id="back-img" alt="Back-image">
            </div>
          </div>
          <div class="sub-heading">Pan Card</div>
          <div class="row form-group px-3 align-items-center">
            <label class="col-sm-2 p-t5 m-0" for="pancard">Pan Card</label>
            <div class="col-sm-6 p-0 d-flex flex-row align-items-center">
              <input
              name="pancard"
              id="pancard"
              accept=".png,.jpg,.jpeg"
              placeholder="Pan Card"
              type="file"
              onChange="img_pathUrl(this,'pan-img');"
              />
              <img src="" class="preview-img mt-2" style="display:none" id="pan-img" alt="Pan-image">
            </div>
          </div>
          <div class="sub-heading">Driving License</div>
          <div class="row form-group px-3 align-items-center">
            <label class="col-sm-2 p-t5 m-0" for="license">Driving License</label>
            <div class="col-sm-6 p-0 d-flex flex-row align-items-center">
              <input
              name="license"
              id="license"
              accept=".png,.jpg,.jpeg"
              placeholder="Driving License"
              type="file"
              onChange="img_pathUrl(this,'license-img');"
              />
              <img src="" class="preview-img mt-2" style="display:none" id="license-img" alt="License-image">
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
            <!-- <a href="#" class="btn bg-primary text-white mt-2">Active Deposit</a> -->
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
            <a href="#" class="btn bg-success text-white mt-2">Add Deposit</a>
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
            <a href="#" class="btn bg-dark text-white mt-2">Withdraw Deposit</a>
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
    
  </div>
</div>
<script>
  
</script>
