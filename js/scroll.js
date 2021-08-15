let header = document.getElementById("fixedHeader");
const fixedHeader = () => {
  if (window.pageYOffset > 10) {
    header.classList.add("sticky");
    // let opacity = window.pageYOffset / 100;
    opacity = 0;
    if (opacity >= 1) {
      opacity = 1;
    }
    // if (opacity) header.style.backgroundColor = `rgba(0, 0, 0, ${opacity})`;
  } else {
    header.style.backgroundColor = `black`;
    header.classList.remove("sticky");
  }
};
window.onscroll = () => {
  fixedHeader();
};
