// More Details Section
// const getMoreDetails = (id, moreId, lessId) => {
//   document.getElementById(id).style.display = "block";
//   document.getElementById(lessId).style.display = "flex";
//   document.getElementById(moreId).classList.remove("d-flex");
//   document.getElementById(moreId).style.display = "none";
// };
// const getLessDetails = (id, moreId, lessId) => {
//   document.getElementById(id).style.display = "none";
//   document.getElementById(lessId).style.display = "none";
//   document.getElementById(moreId).style.display = "flex";
// };
$(document).ready(function () {
  $("#more-details-btn-1").click(function () {
    $("#more-details-1").toggle("slow", () => {
      var isVisible = $("#more-details-1").is(":visible");
      console.log(isVisible);
      if (isVisible) {
        $("#more-details-btn-1").html(`<div class="d-flex">
        Less Details
        <span class="more-down-details material-icons-outlined">expand_less</span>
        </div>`);
      } else {
        $("#more-details-btn-1").html(`<div class="d-flex">
        More Details
        <span class="more-down-details material-icons-outlined">expand_more</span>
        </div>`);
      }
    });
  });
});

// Delete activa card
const deleteCard = (id) => {
  document.getElementById(id).classList.remove("d-flex");
  document.getElementById(id).style.display = "none";
};
// Sort By
const getSortActive = (id) => {
  let id1 = "sort-item-1";
  let id2 = "sort-item-2";
  let id3 = "sort-item-3";
  document.getElementById(id).classList.add("sort-item-active");
  if (id == id1) {
    document.getElementById(id2).classList.remove("sort-item-active");
    document.getElementById(id3).classList.remove("sort-item-active");
  } else if (id == id2) {
    document.getElementById(id1).classList.remove("sort-item-active");
    document.getElementById(id3).classList.remove("sort-item-active");
  } else {
    document.getElementById(id1).classList.remove("sort-item-active");
    document.getElementById(id2).classList.remove("sort-item-active");
  }

  console.log("ccked");
};
