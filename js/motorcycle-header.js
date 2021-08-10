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
