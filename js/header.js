let header = document.getElementById("k");
const fixedHeader = () => {
  if (window.pageYOffset > 10) {
    header.classList.add("sticky");
    // let opacity = window.pageYOffset / 100;
    opacity = 0;
    if (opacity >= 1) {
      opacity = 1;
    }
    // if (opacity) header.style.backgroundColor = `rgba(0, 0, 0, ${opacity})`;
  } else {
    header.style.backgroundColor = `black`;
    header.classList.remove("sticky");
  }
};
window.onscroll = () => {
  fixedHeader();
};
const displayResend = () => {
  resendText = document.getElementById("resend-otp-text");
  resendBtn = document.getElementById("resend-otp-btn");
  btnMain = document.getElementById("resend-btn-main");
  resendText.classList.remove("d-flex");
  resendText.style.display = "none";
  resendBtn.classList.remove("disabled");
  resendBtn.removeAttribute("disabled");
  btnMain.classList.remove("justify-content-between");
  btnMain.classList.add("justify-content-end");
};
const sendOtp = () => {
  let mobileNumber = sessionStorage.getItem("mobileNumber");
  //Backend Code Here
  let randomOtp = Math.floor(1000 + Math.random() * 9000);
  // const verifyOtp = (otp) => {
  //   if (otp == randomOtp) return true;
  //   return false;
  // };
  console.log(randomOtp);
  $.ajax({
    url: "ajax/tenure_filter.php",
    type: "POST",
    data: { mob: mobileNumber, otp: randomOtp },
    success: function (data) {
      console.log(data);
    },
  });
  resetOtpTimer();
  resendBtn = document.getElementById("resend-otp-btn");
  resendBtn.setAttribute("disabled", true);
};
const verifyOtp = (otp) => {
  let myOtp = 4567;
  if (otp == myOtp) return true;
  return false;
};
const resetOtpTimer = () => {
  let otpTimer = document.getElementById("otp-timer");
  document.getElementById("resend-otp-text").style.display = "flex";
  let timer = 59;
  let downloadTimer = setInterval(function () {
    if (timer <= 0) {
      displayResend();
      clearInterval(downloadTimer);
    }
    if (timer < 10) otpTimer.innerHTML = "0:0" + timer;
    else otpTimer.innerHTML = "0:" + timer;
    timer -= 1;
    console.log("timer");
  }, 1000);
};
const getOtpDetails = (mobId, otpId) => {
  document.getElementById(mobId).style.display = "none";
  document.getElementById(otpId).style.display = "block";
  let mobileNumber = document.getElementById("signin-mobile").value;
  sessionStorage.setItem("mobileNumber", mobileNumber.toString());
  sendOtp();
};
$(`#send-otp--btn`)
  .off("click")
  .click(function (clickEvent) {
    clickEvent.preventDefault();
    clickEvent.stopPropagation();
    // console.log("submit-prevent");
  });

const submitOtpDetails = (mobId, otpId) => {
  //OTP Checker
  let userOtp = document.getElementById("user-otp").value;
  if (verifyOtp(userOtp)) {
    window.alert("otp matched");
    document.getElementById(mobId).style.display = "none";
    document.getElementById(otpId).style.display = "block";
  } else {
    window.alert("OTP not matched with 4567");
  }
  console.log(document.getElementById("signin-mobile").value);
};
// Hamburger Menu
const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");

hamburger.addEventListener("click", mobileMenu);

function mobileMenu() {
  hamburger.classList.toggle("active");
  navMenu.classList.toggle("active");
}

const navLink = document.querySelectorAll(".nav-link");

navLink.forEach((n) => n.addEventListener("click", closeMenu));

function closeMenu() {
  hamburger.classList.remove("active");
  navMenu.classList.remove("active");
}
// jQuery(document).ready(function ($) {
//   var $form_modal = $(".cd-user-modal"),
//     $form_login = $form_modal.find("#cd-login"),
//     $form_signup = $form_modal.find("#cd-signup"),
//     $form_forgot_password = $form_modal.find("#cd-reset-password"),
//     $form_modal_tab = $(".cd-switcher"),
//     $tab_login = $form_modal_tab.children("li").eq(0).children("a"),
//     $tab_signup = $form_modal_tab.children("li").eq(1).children("a"),
//     $forgot_password_link = $form_login.find(".cd-form-bottom-message a"),
//     $back_to_login_link = $form_forgot_password.find(
//       ".cd-form-bottom-message a"
//     ),
//     $main_nav = $(".main-nav");

//   //open modal
//   $main_nav.on("click", function (event) {
//     if ($(event.target).is($main_nav)) {
//       // on mobile open the submenu
//       $(this).children("ul").toggleClass("is-visible");
//     } else {
//       // on mobile close submenu
//       $main_nav.children("ul").removeClass("is-visible");
//       //show modal layer
//       $form_modal.addClass("is-visible");
//       //show the selected form
//       $(event.target).is(".cd-signup") ? signup_selected() : login_selected();
//     }
//   });

//   //close modal
//   $(".cd-user-modal").on("click", function (event) {
//     if (
//       $(event.target).is($form_modal) ||
//       $(event.target).is(".cd-close-form")
//     ) {
//       $form_modal.removeClass("is-visible");
//     }
//   });
//   //close modal when clicking the esc keyboard button
//   $(document).keyup(function (event) {
//     if (event.which == "27") {
//       $form_modal.removeClass("is-visible");
//     }
//   });

//   //switch from a tab to another
//   $form_modal_tab.on("click", function (event) {
//     event.preventDefault();
//     $(event.target).is($tab_login) ? signup_selected() : login_selected();
//   });

//   //hide or show password
//   $(".hide-password").on("click", function () {
//     var $this = $(this),
//       $password_field = $this.prev("input");

//     "password" == $password_field.attr("type")
//       ? $password_field.attr("type", "text")
//       : $password_field.attr("type", "password");
//     "Hide" == $this.text() ? $this.text("Show") : $this.text("Hide");
//     //focus and move cursor to the end of input field
//     $password_field.putCursorAtEnd();
//   });

//   //show forgot-password form
//   // $forgot_password_link.on("click", function (event) {
//   //   event.preventDefault();
//   //   forgot_password_selected();
//   // });

//   //back to login from the forgot-password form
//   // $back_to_login_link.on("click", function (event) {
//   //   event.preventDefault();
//   //   login_selected();
//   // });

//   // function login_selected() {
//   //   $form_login.addClass("is-selected");
//   //   $form_signup.removeClass("is-selected");
//   //   $form_forgot_password.removeClass("is-selected");
//   //   $tab_login.addClass("selected");
//   //   $tab_signup.removeClass("selected");
//   // }

//   function signup_selected() {
//     $form_login.removeClass("is-selected");
//     $form_signup.addClass("is-selected");
//     $form_forgot_password.removeClass("is-selected");
//     $tab_login.removeClass("selected");
//     $tab_signup.addClass("selected");
//   }

//   // function forgot_password_selected() {
//   //   $form_login.removeClass("is-selected");
//   //   $form_signup.removeClass("is-selected");
//   //   $form_forgot_password.addClass("is-selected");
//   // }

//   //REMOVE THIS - it's just to show error messages
//   $form_login.find('input[type="submit"]').on("click", function (event) {
//     event.preventDefault();
//     $form_login
//       .find('input[type="email"]')
//       .toggleClass("has-error")
//       .next("span")
//       .toggleClass("is-visible");
//   });
//   $form_signup.find('input[type="submit"]').on("click", function (event) {
//     event.preventDefault();
//     $form_signup
//       .find('input[type="email"]')
//       .toggleClass("has-error")
//       .next("span")
//       .toggleClass("is-visible");
//   });

//   //IE9 placeholder fallback
//   //credits http://www.hagenburger.net/BLOG/HTML5-Input-Placeholder-Fix-With-jQuery.html
//   if (!Modernizr.input.placeholder) {
//     $("[placeholder]")
//       .focus(function () {
//         var input = $(this);
//         if (input.val() == input.attr("placeholder")) {
//           input.val("");
//         }
//       })
//       .blur(function () {
//         var input = $(this);
//         if (input.val() == "" || input.val() == input.attr("placeholder")) {
//           input.val(input.attr("placeholder"));
//         }
//       })
//       .blur();
//     $("[placeholder]")
//       .parents("form")
//       .submit(function () {
//         $(this)
//           .find("[placeholder]")
//           .each(function () {
//             var input = $(this);
//             if (input.val() == input.attr("placeholder")) {
//               input.val("");
//             }
//           });
//       });
//   }
// });

// //credits https://css-tricks.com/snippets/jquery/move-cursor-to-end-of-textarea-or-input/
// jQuery.fn.putCursorAtEnd = function () {
//   return this.each(function () {
//     // If this function exists...
//     if (this.setSelectionRange) {
//       // ... then use it (Doesn't work in IE)
//       // Double the length because Opera is inconsistent about whether a carriage return is one character or two. Sigh.
//       var len = $(this).val().length * 2;
//       this.setSelectionRange(len, len);
//     } else {
//       // ... otherwise replace the contents with itself
//       // (Doesn't work in Google Chrome)
//       $(this).val($(this).val());
//     }
//   });
// };

// jQuery("#cody-info ul li")
//   .eq(1)
//   .on("click", function () {
//     $("#cody-info").hide();
//   });
