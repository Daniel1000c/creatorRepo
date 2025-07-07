//Create strict mode
"use strict";

//Create section variable
const sections = document.querySelectorAll("section[data-title]");

//Create default tab title
const defaultTabTitle = "My Web Portfolio";

//Create observer variable
const observer = new IntersectionObserver (
    (entries) => {
        entries.forEach((entry) => {
           if (entry.isIntersecting) {
               const sectionTitle = entry.target.getAttribute("data-title");
               document.title = `${defaultTabTitle} ● ${sectionTitle}`;
           } 
        });
    },
    {
        threshold: 0.5
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
        header.classList.remove("scrolled");//Remove scrolled class
    } 
});

//Get all sections
const scrollSections = document.querySelectorAll('section .container');

// Create an intersection observer
const scrollObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
        // If the section is in view, add the "visible" class
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            observer.unobserve(entry.target);  // Stop observing once it enters the viewport
        }
    });
}, {
    threshold: 0.5 // Adjust this value to control when the animation triggers (0.5 = 50% of the section is visible)
});

// Observe each section
scrollSections.forEach(container => {
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
       if(pageYOffset >= sectionTop) {
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