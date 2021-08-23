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
      <li class="item" id="item-1" onclick="getRightSection('','item-1')">Live Orders</li>
      <li class="item" id="item-2" onclick="getRightSection('','item-2')">My Booking History</li>
      <li class="item" id="item-3" onclick="getRightSection('','item-3')">Raise Ticket</li>
      <li class="item" id="item-4" onclick="getRightSection('','item-4')">Refer and Earn</li>
      <li class="item" id="item-5" onclick="getRightSection('account-main','item-5')">My Profile</li>
      <li class="item" id="item-6" onclick="getRightSection('verify-main','item-6')">Profile Verification</li>
      <li class="item" id="item-7" onclick="getRightSection('','item-7')">Security Deposit</li>
    </div>
  </div>
  <div class="right-body card w-100">
    <div class="account-main flex-column h-100" style="display:none" id="account-main">
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
    <div class="verify-main flex-column h-100" id="verify-main">
      <div class="heading">PROFILE VERIFICATION</div>
      <div class="card-body">
        <div class="account-form card">
          <div class="account-form--heading">Aadhar Card</div>
          <div class="row form-group px-3 align-items-center">
            <label class="col-sm-2 p-t5 m-0" for="aadhar-front">Front Side</label>
            <div class="col-sm-4">
              <input
              class=" size-13"
              name="aadhar-front"
              id="aadhar-front"
              accept=".png,.jpg,.jpeg"
              placeholder="John Doe"
              type="file"
              />
            </div>
          </div>
          <div class="row form-group px-3 align-items-center">
            <label class="col-sm-2 p-t5 m-0" for="aadhar-back">Back Side</label>
            <div class="col-sm-4">
              <input
              class=" size-13"
              name="aadhar-back"
              id="aadhar-back"
              accept=".png,.jpg,.jpeg"
              placeholder="John Doe"
              type="file"
              />
            </div>
          </div>
          <div class="account-form--heading">Pan Card</div>
          <div class="row form-group px-3 align-items-center">
            <label class="col-sm-2 p-t5 m-0" for="pancard">Pan Card</label>
            <div class="col-sm-4">
              <input
              class=" size-13"
              name="pancard"
              id="pancard"
              accept=".png,.jpg,.jpeg"
              placeholder="Pan Card"
              type="file"
              />
            </div>
          </div>
          <div class="account-form--heading">Driving License</div>
          <div class="row form-group px-3 align-items-center">
            <label class="col-sm-2 p-t5 m-0" for="license">Driving License</label>
            <div class="col-sm-4">
              <input
              class=" size-13"
              name="license"
              id="license"
              accept=".png,.jpg,.jpeg"
              placeholder="Driving License"
              type="file"
              />
            </div>
          </div>
          
        </div>
        <div class="submit-dashboard">
          <button type="submit" class="submit-btn">UPDATE </button>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  
</script>
