// Scroll Top
$(document).ready(function () {
  $(window).scrollTop(0);
});
// Radio CSS
const changeRadioInput = (radioIndex) => {
  const radio1 = document.getElementById("radio-1");
  const radio2 = document.getElementById("radio-2");
  if (radioIndex == 1) {
    radio2.classList.remove("radio-btn--checked");
    radio1.classList.add("radio-btn--checked");
    document.getElementById("outstation-trip").style.display = "flex";
    document.getElementById("hourly-trip").style.display = `none`;
  }
  if (radioIndex == 2) {
    radio1.classList.remove("radio-btn--checked");
    radio2.classList.add("radio-btn--checked");
    document.getElementById("outstation-trip").style.display = "none";
    document.getElementById("hourly-trip").style.display = `flex`;
  }
};

// Bike starting from details
const getActivaDetails = (imageId, activaId) => {
  document.getElementById(activaId).style.display = "flex";
  document.getElementById(imageId).style.display = "none";
};
const removeActivaDetails = (imageId, activaId) => {
  document.getElementById(imageId).style.display = "block";
  document.getElementById(activaId).style.display = "none";
  console.log("mouse out");
};

// Motorcycle header
const setHeaderTitle = (title) => {
  document.getElementById("offers").classList.remove("active-title");
  let motorcycleContent = document.getElementById("motorcycle-content");
  document.getElementById(title).classList.add("active-title");
  if (title == "offers") {
    document.getElementById("offers-section").classList.add("d-flex");
    document.getElementById("activa-section").classList.remove("d-flex");
    document.getElementById("activa-section").style.display = "none";
    document.getElementById("bikes").classList.remove("active-title");
  } else if (title == "bikes") {
    document.getElementById("offers-section").classList.remove("d-flex");
    document.getElementById("offers-section").style.display = "none";
    document.getElementById("activa-section").classList.add("d-flex");
    document.getElementById("offers").classList.remove("active-title");
  }
};
