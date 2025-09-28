const navbar = document.querySelector(".navbar");
const navbarCollapse = document.querySelector(".navbar-collapse");

//Create scroll event function
const scrollFunction = () => {
  //Get current scroll position
  let scrollPosition = window.scrollY;

  //Check if header is scrolled down
  if (scrollPosition > 0) {
    navbar.classList.add("scrolled");
  } else {
    navbar.classList.remove("scrolled");
  }
};

//Create function when menu opens on mobile
navbarCollapse.addEventListener("show.bs.collapse", () => {
  //Add open class
  navbar.classList.add("open");
});

//Create function when menu closes on mobile
navbarCollapse.addEventListener("hide.bs.collapse", () => {
  //Remove open class
  navbar.classList.remove("open");
});

//Create scroll event listener
document.addEventListener("scroll", scrollFunction);
