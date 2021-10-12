<!-- <div class="header-main">
  <div
    class="header d-flex justify-content-between align-items-center"
    id="fixedHeader"
  >
    <img class="logo" src="images/icon.png" alt="LOGO" />
    <div class="navbar text-white w-50">
      <div class="item-header item-header--clicked d-flex align-items-center" id='item-header' onclick="document.getElementById('item-header').style.color = '#1dc0a2' ">
        <span class="material-icons-outlined icon"> home </span>
        <div class="text-header">Home</div>
      </div>
      <div class="item-header d-flex align-items-center">
        <span class="material-icons-outlined icon"> description </span>
        <div class="text-header">Blog</div>
      </div>
      <div class="item-header d-flex align-items-center">
        <div class="text-header">More</div>
        <span class="material-icons-outlined icon"> keyboard_arrow_down </span>
      </div>
     
	  <nav class="main-nav">
		  <div class="item-header d-flex align-items-center"  data-toggle="modal" data-target="#loginModal">
			  <span class="material-icons-outlined icon"> person </span>
			  <div class="text-header">Login/Signup</div>
			</div>
		</nav>
      <div class="item-header d-flex align-items-center" id="mobile">
        <span class="material-icons-outlined icon"> call </span>
        <div class="text-header">9191919191</div>
      </div>
    </div>
  </div>
  
	<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true" >
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="loginModalLabel">LOG IN</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form class="cd-form">
					<div class="mobile-form" id="mobile-form-signup">
						<p class="fieldset">
							<label class="image-replace cd-email" for="signin-mobile">Mobile Number</label>
							<input id="mobile-input" class="full-width has-padding has-border" id="signin-mobile" type="number" placeholder="Mobile Number">
						</p>
						
					<p class="fieldset">
						<input  class="full-width" type="button" value="Send OTP" onclick="getOtpDetails('mobile-form-signup','otp-form-signup')">
					</p>
					</div>
					<div class="OTP-form" id="otp-form-signup" style="display:none">
						<p class="fieldset mb-3">
							<label class="image-replace cd-email" for="user-otp">Enter OTP</label>
							<input class="full-width has-padding has-border" id="user-otp" type="number" placeholder="Enter OTP">
						</p>
						<div class="d-flex justify-content-between align-items-center">
							<div class=" d-flex align-items-center" id="resend-otp-text">
								<div>Resend OTP in &nbsp;</div>
								<div id="otp-timer">1:00</div>
							</div>
							<div class="d-flex align-items-center" id="resend-btn-main">
								<button class="disabled btn btn-primary" type="button" id="resend-otp-btn" disabled onclick="sendOtp()">Resend OTP</button>
							</div>
						</div>
						<p class="fieldset mt-3">
							<input id="send-otp--btn" class="full-width" type="button" value="Submit"  onclick="submitOtpDetails('otp-form-signup','signup-form')">
						</p>
					</div>
					<div id="signup-form" style="display:none">
						<p class="fieldset">
							<label class="image-replace cd-email" for="signin-mobile">First Name</label>
							<input class="full-width has-padding has-border" id="signin-mobile" type="text" placeholder="First Name">
						</p>
						
						<p class="fieldset">
							<label class="image-replace cd-email" for="signup-email">Last Name</label>
							<input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="Last Name">
						</p>

						<p class="fieldset">
							<label class="image-replace cd-email" for="signup-email">E-mail</label>
							<input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail">
						</p>
						
						<p class="fieldset">
							<label class="image-replace cd-email" for="signup-email">City</label>
							<input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="City">
						</p>

						<p class="fieldset">
							<input class="full-width has-padding" type="button" value="Create account">
						</p>
					</div>
				</form>
			</div>
			</div>
		</div>
	</div>
</div> -->
<div class="header bg-dark">
  <nav class="navbar navbar-expand-md">
    <!-- Brand -->
    <a class="navbar-brand" href="index.html">
      <div class="logo">
        <img class="logo-img" src="../images/icon.png" alt="LOGO" />
      </div>
    </a>

    <!-- Toggler/collapsibe Button -->
    <button
      class="navbar-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#collapsibleNavbar"
    >
      <span>
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="30"
          height="30"
          fill="currentColor"
          class="bi bi-list"
          viewBox="0 0 16 16"
        >
          <path
            fill-rule="evenodd"
            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"
          />
        </svg>
      </span>
    </button>

    <!-- Navbar links -->
    <div
      class="collapse navbar-collapse justify-content-end"
      id="collapsibleNavbar"
    >
      <ul class="navbar-nav">
        <li class="nav-item">
          <div
            class="item-header item-header--clicked d-flex align-items-center"
            id="item-header"
            onclick="document.getElementById('item-header').style.color = '#1dc0a2' "
          >
            <span class="material-icons-outlined icon"> home </span>
            <div class="text-header">Home</div>
          </div>
        </li>
        <li class="nav-item">
          <div class="item-header d-flex align-items-center">
            <span class="material-icons-outlined icon"> description </span>
            <div class="text-header">Blog</div>
          </div>
        </li>
        <li class="nav-item">
          <div class="item-header d-flex align-items-center">
            <div class="text-header">More</div>
            <span class="material-icons-outlined icon">
              keyboard_arrow_down
            </span>
          </div>
        </li>
        <li class="nav-item">
          <div
            class="item-header d-flex align-items-center"
            data-toggle="modal"
            data-target="#loginModal"
          >
            <span class="material-icons-outlined icon"> person </span>
            <div class="text-header">Login/Signup</div>
          </div>
        </li>
        <li class="nav-item">
          <div class="item-header d-flex align-items-center" id="mobile">
            <span class="material-icons-outlined icon"> call </span>
            <div class="text-header">9191919191</div>
          </div>
        </li>
      </ul>
    </div>
  </nav>
</div>

