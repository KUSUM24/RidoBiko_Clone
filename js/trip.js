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
