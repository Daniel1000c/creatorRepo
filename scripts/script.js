//Get header by id
const header = document.getElementById("header");

//Create header scrolled function
const headerScrolled = () => {
  //Create scroll height variable
  const scrollHeight = window.scrollY;
  //If scroll height is greater than 0, add header scrolled class
  if (scrollHeight > 0) {
    header.classList.add("scrolled");
  } else {
    //Else remove header scrolled class
    header.classList.remove("scrolled");
  }
};

//Create header toggle function
const headerToggle = () => {
  //Toggle header scrolled class
  header.classList.toggle("scrolled");
};

//Add header scroll event listener
window.addEventListener("scroll", headerScrolled);

//Add header toggle event listener
header.addEventListener("click", headerToggle);
