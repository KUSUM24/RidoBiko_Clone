<div class="container d-flex">
  <div class="left-body d-flex flex-column">
    <div class="section-userinfo">
      <img src="assets/img/userinfo.png" alt="userinfo" />
      <div class="name content"><b>John doe</b></div>
      <div class="number content">9999988888</div>
      <div class="email content">johndoe@gmail.com</div>
    </div>
    <hr class="userinfo-hr" />
    <div class="section-status">
      <div class="status--container d-flex align-items-center">
        <span
          class="tab_icons fa fl fa-times-circle-o"
          style="color: rgb(190, 50, 50)"
        ></span>
        <div>Profile Document</div>
      </div>
      <div class="status--container d-flex align-items-center">
        <span
          class="tab_icons fa fa-check-circle-o fl"
          id="numberStatus"
          style="color: rgb(120, 182, 67)"
        ></span>
        <div>Mobile Number</div>
      </div>
      <div class="status--container d-flex align-items-center">
        <span
          class="tab_icons fa fl fa-times-circle-o"
          style="color: rgb(190, 50, 50)"
        ></span>
        <div>Payment Wallet</div>
      </div>
      <hr />
    </div>
    <div class="section-balance">
      <div class="d-flex">
        <img src="assets/img/creds.jpg" width="12%" height="10%" alt="cred" />
        <div class="h5 mx-2">₹ 0</div>
      </div>
      <div class="d-flex justify-content-around">
        <div>Credits Balance</div>
        <div>Show History</div>
      </div>
      <!-- <hr class="balance-hr" /> -->
    </div>
    <div class="section-navbar">
      <li class="item">My Bookings</li>
      <li class="item">Saved Cards</li>
      <li class="item">Account</li>
      <li class="item">Profile Verification</li>
      <li class="item">Co-driver</li>
    </div>
  </div>
  <div class="right-body card">
    <div class="heading">My ACCOUNT</div>
    <div class="card-body">
      <div class="account-form card">
        <div class="account-form--heading">Account Details</div>
        <div class="row form-group px-3 align-items-center">
          <div class="col-sm-2 p-t5">Name</div>
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
          <div class="col-sm-2 p-t5">Email</div>
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
          <div class="col-sm-2 p-t5">Mobile</div>
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
            <div class="col-sm-4 p-t5">Address 1</div>
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
            <div class="col-sm-4 p-t5">Address 2</div>
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
            <div class="col-sm-4 p-t5">City</div>
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
            <div class="col-sm-4 p-t5">Zipcode</div>
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
              <div class="col-sm-4 p-t5">Address 1</div>
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
              <div class="col-sm-4 p-t5">Address 2</div>
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
              <div class="col-sm-4 p-t5">City</div>
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
              <div class="col-sm-4 p-t5">Zipcode</div>
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
</div>
<script>
  const permanentAddress = () => {
    const checkBox = document.getElementById("permanentAddress");
    const permanentAddressForm = document.getElementById(
      "permanentAddressForm"
    );
    if (checkBox.checked == true) {
      permanentAddressForm.style.display = "none";
    } else {
      permanentAddressForm.style.display = "block";
    }
  };
</script>
