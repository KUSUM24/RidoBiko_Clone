const getMoreDetails = (id, moreId, lessId) => {
  document.getElementById(id).style.display = "block";
  document.getElementById(lessId).style.display = "flex";
  document.getElementById(moreId).classList.remove("d-flex");
  document.getElementById(moreId).style.display = "none";
};
const getLessDetails = (id, moreId, lessId) => {
  document.getElementById(id).style.display = "none";
  document.getElementById(lessId).style.display = "none";
  document.getElementById(moreId).style.display = "flex";
};
