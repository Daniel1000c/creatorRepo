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