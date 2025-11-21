// Wait until the web page is fully loaded
document.addEventListener("DOMContentLoaded", function () {

    // Select all FAQ question headers
    const faqItemHeaders = document.querySelectorAll(".faq-item-head");

    // Loop through each FAQ header
    faqItemHeaders.forEach(function (faqHeader) {

        // When a FAQ header is clicked
        faqHeader.addEventListener("click", function () {

            // Get the related answer section (the next element)
            const faqBody = faqHeader.nextElementSibling;

            // Toggle the 'show-para' class to show or hide the answer
            faqBody.classList.toggle("show-para");

            // Find the icon inside the clicked header
            const icon = faqHeader.querySelector(".faq-item-icon");

            // Change the icon to '-' if the answer is visible, '+' if hidden
            if (faqBody.classList.contains("show-para")) {
                icon.textContent = "-";
            } else {
                icon.textContent = "+";
            }
        });
    });
});

// Scroll effect for the navbar
window.addEventListener('scroll', function () {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 50) {
        navbar.style.backgroundColor = 'rgba(0, 0, 0, 0.9)';
    } else {
        navbar.style.backgroundColor = 'rgba(0, 0, 0, 0.8)';
    }
});

// Smooth scroll to section on click
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        const target = document.querySelector(this.getAttribute('href'));
        target.scrollIntoView({
            behavior: 'smooth'
        });
    });
});
