//Get navigation bar element
const navigationBar = document.getElementById("navigation-bar");

//Create navigation scroll function
function scrollFunction() {
  //Create scroll variable for windowy scroll position
  const scroll = window.scrollY;

  //Check if scroll is greater than 0
  if (scroll > 80) {
    //Add scroll class to navigation bar
    navigationBar.classList.add("scrolled");
  } else {
    //Remove scroll class from navigation bar
    navigationBar.classList.remove("scrolled");
  }
}

//Add scroll function to window event listener
document.addEventListener("scroll", scrollFunction);
