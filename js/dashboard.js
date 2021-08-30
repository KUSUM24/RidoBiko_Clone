const permanentAddress = () => {
  const checkBox = document.getElementById("permanentAddress");
  const permanentAddressForm = document.getElementById("permanentAddressForm");
  if (checkBox.checked == true) {
    permanentAddressForm.style.display = "none";
  } else {
    permanentAddressForm.style.display = "block";
  }
};

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
