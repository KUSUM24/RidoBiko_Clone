const setHeaderTitle = (title) => {
  document.getElementById("offers").classList.remove("active-title");
  let motorcycleContent = document.getElementById("motorcycle-content");
  document.getElementById(title).classList.add("active-title");
  if (title == "offers") {
    motorcycleContent.innerHTML = "Name: Kusum";
    document.getElementById("bikes").classList.remove("active-title");
  } else if (title == "bikes") {
    motorcycleContent.innerHTML = "Name: Khushboo";
    document.getElementById("offers").classList.remove("active-title");
  }
};
