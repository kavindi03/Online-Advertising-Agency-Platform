const form = document.querySelector('form');
const fullName = document.getElementById('name');
const email = document.getElementById('email');
const phone = document.getElementById('phone');
const subject = document.getElementById('subject');
const mess = document.getElementById('message');

function sendEmail() {
    const bodyMessage = `
        Full Name: ${fullName.value}<br>
        Email: ${email.value}<br>
        Phone Number: ${phone.value}<br>
        Message: ${mess.value}
    `;

    Email.send({
        SecureToken: "7a818986-9342-4837-8eee-dd24bc545d1f", // Ensure this token is correct for SMTPJS
        To: 'nishatrhythm@gmail.com',
        From: "nishatrhythm@gmail.com",
        Subject: subject.value,
        Body: bodyMessage
    }).then(
        message => {
            if (message === "OK") {
                Swal.fire({
                    title: "Success!",
                    text: "Message sent successfully!",
                    icon: "success"
                });
            } else {
                Swal.fire({
                    title: "Error!",
                    text: "Failed to send message. Please try again later.",
                    icon: "error"
                });
            }
        }
    );
}

function checkInputs() {
    const items = document.querySelectorAll(".item");

    for (const item of items) {
        if (item.value.trim() === "") {
            item.classList.add("error");
            item.parentElement.classList.add("error");
        } else {
            item.classList.remove("error");
            item.parentElement.classList.remove("error");
        }

        if (item === email) {
            checkEmail();
        }

        item.addEventListener("input", () => {
            if (item.value.trim() !== "") {
                item.classList.remove("error");
                item.parentElement.classList.remove("error");
            } else {
                item.classList.add("error");
                item.parentElement.classList.add("error");
            }
        });
    }
}

function checkEmail() {
    const emailRegex = /^([a-z\d\.-]+)@([a-z\d-]+)\.([a-z]{2,3})(\.[a-z]{2,3})?$/;
    const errorTxtEmail = document.querySelector(".error-txt.email");

    if (!email.value.match(emailRegex)) {
        email.classList.add("error");
        email.parentElement.classList.add("error");

        if (email.value !== "") {
            errorTxtEmail.innerText = "Enter a valid email address";
        } else {
            errorTxtEmail.innerText = "Email Address cannot be empty";
        }
    } else {
        email.classList.remove("error");
        email.parentElement.classList.remove("error");
    }
}

form.addEventListener("submit", (e) => {
    e.preventDefault(); // Prevent form submission to server
    checkInputs();

    // Only send email if all fields are valid
    if (
        !fullName.classList.contains("error") &&
        !email.classList.contains("error") &&
        !phone.classList.contains("error") &&
        !subject.classList.contains("error") &&
        !mess.classList.contains("error")
    ) {
        sendEmail();
        form.reset(); // Reset the form after successful submission
    }
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