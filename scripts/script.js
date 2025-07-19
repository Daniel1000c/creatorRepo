//Create strict mode
"use strict";

//Create section variable
const sections = document.querySelectorAll("section[data-title]");

//Create default tab title
const defaultTabTitle = "My Web Portfolio";

//Create observer variable
const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const sectionTitle = entry.target.getAttribute("data-title");
        document.title = `${defaultTabTitle} ● ${sectionTitle}`;
      }
    });
  },
  {
    threshold: 0.5,
  }
);

sections.forEach((section) => {
  observer.observe(section);
});

//Create function to change header theme on scroll

//Get header element
const header = document.querySelector("header");

//Create scroll toggle function
window.addEventListener("scroll", () => {
  if (window.scrollY > 50) {
    header.classList.add("scrolled");
  } else {
    header.classList.remove("scrolled"); //Remove scrolled class
  }
});

//Get all sections
const scrollSections = document.querySelectorAll("section .container");

// Create an intersection observer
const scrollObserver = new IntersectionObserver(
  (entries, observer) => {
    entries.forEach((entry) => {
      // If the section is in view, add the "visible" class
      if (entry.isIntersecting) {
        entry.target.classList.add("visible");
        observer.unobserve(entry.target); // Stop observing once it enters the viewport
      }
    });
  },
  {
    threshold: 0.5, // Adjust this value to control when the animation triggers (0.5 = 50% of the section is visible)
  }
);

// Observe each section
scrollSections.forEach((container) => {
  scrollObserver.observe(container);
});

//Create active links
const idSection = document.querySelectorAll("section[id]");
const navLinks = document.querySelectorAll(".nav-link");

//Create event listener
window.addEventListener("scroll", () => {
  let current = "";

  idSection.forEach((section) => {
    const sectionTop = section.offsetTop - 50;
    if (pageYOffset >= sectionTop) {
      current = section.getAttribute("id");
    }
  });

  navLinks.forEach((link) => {
    link.classList.remove("active");

    // Extract the hash from the href, e.g., "#about" from "index.php#about"
    const linkTarget = link.getAttribute("href").split("#")[1];

    if (linkTarget === current) {
      link.classList.add("active");
    }
  });
});

//Prevent auto scroll when page reloads
if (window.location.hash === "#contact") {
  //Wait until page fully loads
  window.scrollTo(0, 0);

  //Then scroll to contact if needed
  setTimeout(() => {
    const contactSection = document.getElementById("contact");
    if (contactSection) {
      contactSection.scrollIntoView({ behavior: "instant", block: "start" });
    }
  }, 10);
}

//Create pop up message before user submits
document
  .getElementById("contactForm")
  .addEventListener("submit", function (event) {
    event.preventDefault(); //Prevent form from submitting

    //Client side form input

    //Get fullName, email, clientmessage, and statusMessage elements
    const fullName = document.getElementById("fullName");
    const email = document.getElementById("email");
    const client_message = document.getElementById("client_message");
    const statusMessage = document.getElementById("statusMessage");

    //Clear the previous status message
    statusMessage.innerHTML = "";

    /*Format error message padding, background, font size, color and list style */
    statusMessage.style.padding = "15px";
    statusMessage.style.textAlign = "left";
    statusMessage.style.backgroundColor = "rgba(255, 255, 0, 0.7)";
    statusMessage.style.fontSize = "0.8rem";
    statusMessage.style.fontWeight = "bold";
    statusMessage.style.letterSpacing = "2px";
    statusMessage.style.lineHeight = "1.5rem";
    statusMessage.style.marginBottom = "25px";
    statusMessage.style.fontFamily = "var(--primary-nav-font)";
    statusMessage.style.color = "#fff";
    statusMessage.style.border = "2px solid red";
    statusMessage.style.borderRadius = "10px";
    statusMessage.style.listStyle = "list-style-type: disc;";

    //Create errors array
    let errors = [];

    if (fullName.value.trim() === "") {
      //Push error to error array
      errors.push("Please enter your full name.");
    }

    if (email.value.trim() === "") {
      //Push error to error array
      errors.push("Please enter your email address.");
    } else if (!/^\S+@\S+\.\S+$/.test(email.value.trim())) {
      //Push error to error array
      errors.push("Please enter a valid email address.");
    }

    if (client_message.value.trim() === "") {
      //Push error to error array
      errors.push("Please enter a message.");
    }

    //Create if errors array is not empty
    if (errors.length > 0) {
      statusMessage.innerHTML = errors
        .map((error) => `<span>*</span> ${error}`)
        .join("<br>");
      statusMessage.style.display = "block";
      return;
    }

    //If no errors hide the box before asking for confirmation
    statusMessage.style.display = "none";

    //If no errors, confirm form before submitting
    const confirmMessage = confirm(
      "Are you sure you want to submit this form?"
    );
    if (confirmMessage) {
      event.target.submit();
    }
  });
