document.addEventListener("DOMContentLoaded", function() {
    const feedbackForm = document.getElementById("feedbackForm");
    const stars = document.querySelectorAll(".star");
    let rating = 0;

    // Event listener for star rating selection
    stars.forEach((star) => {
        star.addEventListener("click", function() {
            rating = this.getAttribute("data-value");
            updateStars();
        });
    });

    // Function to update star rating visual
    function updateStars() {
        stars.forEach((star) => {
            if (star.getAttribute("data-value") <= rating) {
                star.classList.add("selected");
            } else {
                star.classList.remove("selected");
            }
        });
    }

});


