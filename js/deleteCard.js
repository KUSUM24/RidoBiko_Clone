const deleteCard = (id) => {
  document.getElementById(id).classList.remove("d-flex");
  document.getElementById(id).style.display = "none";
};
