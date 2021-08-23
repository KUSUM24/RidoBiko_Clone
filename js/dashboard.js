const permanentAddress = () => {
  const checkBox = document.getElementById("permanentAddress");
  const permanentAddressForm = document.getElementById("permanentAddressForm");
  if (checkBox.checked == true) {
    permanentAddressForm.style.display = "none";
  } else {
    permanentAddressForm.style.display = "block";
  }
};
const getRightSection = (id, itemId) => {
  document.getElementById(id).style.display = "flex";
  document.getElementById(itemId).classList.add("active-status");
  if (id == "account-main") {
    document.getElementById("verify-main").style.display = "none";
    document.getElementById("item-6").classList.remove("active-status");
    console.log(itemId);
  } else {
    document.getElementById("account-main").style.display = "none";
    document.getElementById("item-5").classList.remove("active-status");
  }
  // itemIdList = [
  //   "item-1",
  //   "item-2",
  //   "item-3",
  //   "itme-4",
  //   "item-5",
  //   "item-6",
  //   "item-7",
  // ];
  // for (let i = 0; i < itemIdList.length; i++) {
  //   if (itemIdList[i] == itemId) {
  //   } else {
  //     document.getElementById(id).style.display = "none";
  //     document.getElementById(itemIdList[i]).classList.remove("active-status");
  //   }
  // }
};
