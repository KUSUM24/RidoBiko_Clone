const getMoreDetails = (id) => {
  document.getElementById(id).style.display = "block";
  document.getElementById("less-details").style.display = "flex";
  document.getElementById("more-details-btn").classList.remove("d-flex");
  document.getElementById("more-details-btn").style.display = "none !important";
};
const getLessDetails = (id) => {
  document.getElementById(id).style.display = "none";
  document.getElementById("less-details").style.display = "none";
  document.getElementById("more-details-btn").style.display = "flex";
};
