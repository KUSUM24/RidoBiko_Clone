let header = document.getElementById("fixedHeader");
const fixedHeader = () => {
  console.log(window.pageYOffset);
  if (window.pageYOffset > 10) {
    console.log(header);
    header.classList.add("sticky");
    let opacity = window.pageYOffset / 100;
    if (opacity >= 1) {
      opacity = 1;
    }
    if (opacity) header.style.backgroundColor = `rgba(0, 0, 0, ${opacity})`;
  } else {
    console.log(header);
    header.style.backgroundColor = `transparent`;
    header.classList.remove("sticky");
  }
};
window.onscroll = () => {
  fixedHeader();
};
