const header = document.getElementById("header");
const navbarCollapse = document.querySelector(".navbar-collapse");

//Create scroll event function
const scrollFunction = () => {
  //Get current scroll position
  let scrollPosition = window.scrollY;

  //Check if header is scrolled down
  if (scrollPosition > 0) {
    header.classList.add("scrolled");
  } else {
    header.classList.remove("scrolled");
  }
};

//Create function when menu opens on mobile
navbarCollapse.addEventListener("show.bs.collapse", () => {
  //Add open class
  header.classList.add("open");
});

//Create function when menu closes on mobile
navbarCollapse.addEventListener("hide.bs.collapse", () => {
  //Remove open class
  header.classList.remove("open");
});

//Create scroll event listener
document.addEventListener("scroll", scrollFunction);
