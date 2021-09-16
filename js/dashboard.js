// Scroll Top
$(document).ready(function () {
  $(window).scrollTop(0);
});

// Left Sidebar functioning
const getRightSection = (id) => {
  let n = 10;
  for (let i = 0; i <= n; i++) {
    let main = document.getElementById(`main-right-${i}`);
    let item = document.getElementById(`item-${i}`);
    if (id == i) {
      main.style.display = "flex";
      item.classList.add("active-status");
    } else {
      main.style.display = "none";
      item.classList.remove("active-status");
    }
  }
};
// My profile section
const permanentAddress = () => {
  const checkBox = document.getElementById("permanentAddress");
  const permanentAddressForm = document.getElementById("permanentAddressForm");
  if (checkBox.checked == true) {
    permanentAddressForm.style.display = "none";
  } else {
    permanentAddressForm.style.display = "block";
  }
};
// Booking NavBar
const getBookingSection = (bookingId) => {
  let n = 3;
  for (let i = 0; i < n; i++) {
    let bookingItem = document.getElementById(`booking-${i}`);
    let bookingSection = document.getElementById(`booking-section-main-${i}`);
    console.log(bookingId, `booking-${i}`);
    if (bookingId == i) {
      bookingItem.classList.add("active-booking");
      bookingSection.style.display = "flex";
    } else {
      bookingItem.classList.remove("active-booking");
      bookingSection.style.display = "none";
    }
  }
};
//Profile-Image functioning
function getProfileImg(input, id, btnId, defaultId) {
  $(`#${id}`).css("display", "block");
  $(`#${id}`)[0].src = (window.URL ? URL : webkitURL).createObjectURL(
    input.files[0]
  );
  $(`#${btnId}`).css("display", "flex");
  $(`#${defaultId}`).css("display", "none");
}
// More Details Toggle - SearchBike section
function img_pathUrl(input, id, btnId) {
  $(`#${id}`).css("display", "block");
  $(`#${id}`)[0].src = (window.URL ? URL : webkitURL).createObjectURL(
    input.files[0]
  );
  $(`#${btnId}`).css("display", "flex");
}
console.log("dashboard");
// Deposit Section
const getAddInput = () => {
  let addBtn = document.getElementById("add-deposit--btn");
  let addInput = document.getElementById("add-deposit--input");
  addBtn.style.display = "none";
  addInput.style.display = "flex";
};
// View Details Section
for (let i = 1; i < 4; i++) {
  $(document).ready(function () {
    $(`#view-details-btn-${i}`).click(function () {
      $(`#view-details-${i}`).toggle("slow");
      console.log("toggled");
    });
  });
  $(document).ready(function () {
    $(`#subscription-details-btn-${i}`).click(function () {
      $(`#subscription-details-${i}`).toggle("slow");
      console.log("toggled");
    });
  });
}
// OTP Verification
const getOtp = () => {
  document.getElementById("otp-verification").style.display = "block";
  document.getElementById("mobile-form").style.display = "none";
  console.log("otp reached");
};
// OTP Emergency
const getOtpEmergency = () => {
  document.getElementById("emergency-otp").style.display = "block";
  document.getElementById("emergency-mobile").style.display = "none";
  console.log("otp reached");
};

// Cancel Preview Image
$(function () {
  var inputElement = $("#testFile");
  var cancelButton = $("#pseudoCancel");
  var numFiles = 0;

  inputElement.on("change", function (e) {
    var target = e.target || e.srcElement;
    console.log(target, "changed.");
    console.log(e);
    if ($(target).val().length == 0) {
      console.log("Suspect Cancel was hit, no files selected.");
      if (numFiles == target.files.length) {
        cancelButton.click();
      }
    } else {
      console.log("File selected: ", target.value);
      numFiles = target.files.length;
    }
  });

  cancelButton.click(function (e) {
    console.log("Pseudo Cancel button clicked.");
  });
});
