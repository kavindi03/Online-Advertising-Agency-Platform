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

document.addEventListener('DOMContentLoaded', function() {
    const cardPaymentSection = document.getElementById('card-payment');
    const bankTransferSection = document.getElementById('bank-transfer');
    const paymentOptions = document.querySelectorAll('input[name="payment"]');

    function togglePaymentMethod() {
        const selectedPayment = document.querySelector('input[name="payment"]:checked').value;
        if (selectedPayment === 'card') {
            cardPaymentSection.classList.remove('hidden');
            bankTransferSection.classList.add('hidden');
        } else if (selectedPayment === 'bank') {
            cardPaymentSection.classList.add('hidden');
            bankTransferSection.classList.remove('hidden');
        }
    }

    // Add event listener to each radio button
    paymentOptions.forEach((radio) => {
        radio.addEventListener('change', togglePaymentMethod);
    });

    // Initial call to set the correct section on page load
    togglePaymentMethod();
});

function confirmPayment() {
    alert("Your payment has been recorded.");
    return true; // Allows form to submit after the alert
}


    