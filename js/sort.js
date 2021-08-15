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
const deleteCard = () => {
  document.getElementById("subscribe-card").style.display = "none";
  console.log("card delete");
};
