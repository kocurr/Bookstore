var navbar = document.getElementById("nav1");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
  navbar.classList.add("sticky")
  } else {
  navbar.classList.remove("sticky");
  }
}
