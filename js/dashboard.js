console.log("Inside js");
const permanentAddress = () => {
  const checkBox = document.getElementById("permanentAddress");
  const permanentAddressForm = document.getElementById("permanentAddressForm");
  if (checkBox.checked == true) {
    permanentAddressForm.style.display = "block";
  } else {
    permanentAddressForm.style.display = "none";
  }
};
