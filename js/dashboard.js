// Left Sidebar functioning
const getRightSection = (id) => {
  for (let i = 0; i <= 5; i++) {
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
  for (let i = 0; i < 3; i++) {
    let bookingItem = document.getElementById(`booking-${i}`);
    console.log(bookingId, `booking-${i}`);
    if (bookingId == i) {
      bookingItem.classList.add("active-booking");
    } else {
      bookingItem.classList.remove("active-booking");
    }
  }
};
// More Details Toggle - SearchBike section
function img_pathUrl(input, id) {
  $(`#${id}`).css("display", "block");
  $(`#${id}`)[0].src = (window.URL ? URL : webkitURL).createObjectURL(
    input.files[0]
  );
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
}
$(document).ready(function () {
  $(`#view-details-btn-1`).click(function () {
    $(`#view-details-1`).toggle("slow");
    console.log("toggled");
  });
});
