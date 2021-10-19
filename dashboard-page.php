<div class="container d-flex">
  <div class="left-body d-flex flex-column">
    <div class="section-userinfo">
      <img src="images/userinfo.png" alt="userinfo" id="default-profile" />
      <img src="" class="profile-img mt-2" style="display:none" id="profile-img" alt="Profile-image">
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
    <?php include "dashboard/bookings.php"; ?>
    <?php include "dashboard/raise-ticket.php"; ?>
    <?php include "dashboard/refer-earn.php"; ?>
    <?php include "dashboard/profile.php"; ?>
    <?php include "dashboard/profile-verification.php"; ?>
    <?php include "dashboard/security-deposit.php"; ?>
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
