<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <br><br><br><br>
    <title>contact us</title>
    <link rel="stylesheet" href="contactus/contactstyle.css">
    
    <script src="contactscript.js"></script>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">
            <img src="contactus/white-logo.png" alt="Agency Logo"> 
            <a href="index.php">SAKURA</a>
        </div> 
        <nav class="navibar">
        <div class="nav-links">
            <a href="home.php">Home</a>
            <a href="Offers&Packagers.php">Offers & Packages</a>
            <a href="index.php">Portfolio</a>
            <a href="contactpage.php">Contact</a>
            <a href="aboutUsPage.php">About Us</a>
            <a href="faq.php">FAQs</a>
        </div>
        </nav>
        <a href="profile.php" class="cta-btn" id="signin-btn">My Profile</a>
    </nav>
    <section class="contact">
        <br><br><h2>Contact Us</h2>

        <form id="contact-form" action="contactinsertphp.php" method="POST">
            <div class="input-box">
                <div class="input-field field">
                    <input type="text" placeholder="Full Name" id="name" name="name" class="item">
                    <div class="error-txt">Full Name cannot be empty</div>
                </div>
                <div class="input-field field">
                    <input type="email" placeholder="Email Address" id="email" name="email" class="item">
                    <div class="error-txt email">Email Address cannot be empty</div>
                </div>
            </div>

            <div class="input-box">
                <div class="input-field field">
                    <input type="text" placeholder="Phone Number" name="phone" id="phone" class="item">
                    <div class="error-txt">Phone Number cannot be empty</div>
                </div>
                <div class="input-field field">
                    <input type="text" placeholder="Subject" id="subject" name="subject" class="item">
                    <div class="error-txt">Subject cannot be empty</div>
                </div>
            </div>

            <div class="textarea-field field">
                <textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message" class="item"></textarea>
                <div class="error-txt">Message cannot be empty</div>
            </div>

            <button type="submit">Submit</button>
        </form>
        <br><br><br>

    </section>
    <script>
        
        const form = document.getElementById('contact-form');
        const nameInput = document.getElementById('name');
        const emailInput = document.getElementById('email');
        const phoneInput = document.getElementById('phone');
        const subjectInput = document.getElementById('subject');
        const messageInput = document.getElementById('message');

        
        form.addEventListener('submit', function (event) {
            event.preventDefault(); 

            let isValid = true;

            
            if (nameInput.value.trim() === '') {
                setError(nameInput, "Full Name cannot be empty");
                isValid = false;
            } else {
                setSuccess(nameInput);
            }

            
            if (emailInput.value.trim() === '') {
                setError(emailInput, "Email Address cannot be empty");
                isValid = false;
            } else if (!isValidEmail(emailInput.value)) {
                setError(emailInput, "Enter a valid email address");
                isValid = false;
            } else {
                setSuccess(emailInput);
            }

            
            if (phoneInput.value.trim() === '') {
                setError(phoneInput, "Phone Number cannot be empty");
                isValid = false;
            } else {
                setSuccess(phoneInput);
            }

            
            if (subjectInput.value.trim() === '') {
                setError(subjectInput, "Subject cannot be empty");
                isValid = false;
            } else {
                setSuccess(subjectInput);
            }

          
            if (messageInput.value.trim() === '') {
                setError(messageInput, "Message cannot be empty");
                isValid = false;
            } else {
                setSuccess(messageInput);
            }

            
            if (isValid) {
                Swal.fire({
                    title: 'Success!',
                    text: 'Your message has been sent successfully!',
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit(); 
                    }
                });
            }
        });

       
        function setError(input, message) {
            const parent = input.parentElement;
            const errorTxt = parent.querySelector('.error-txt');
            errorTxt.textContent = message;
            errorTxt.style.display = 'block';
            parent.classList.add('error');
        }

        
        function setSuccess(input) {
            const parent = input.parentElement;
            const errorTxt = parent.querySelector('.error-txt');
            errorTxt.style.display = 'none';
            parent.classList.remove('error');
        }

        
        function isValidEmail(email) {
            const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@(([^<>()[\]\.,;:\s@"]+\.)+[^<>()[\]\.,;:\s@"]{2,})$/i;
            return re.test(email);
        }
    </script>

    
   
    <!--footer-->
    <footer>
        <p>&copy; 2024 Online Advertising Agency. All Rights Reserved.</p>
        <div class="social-media">
            <a href="https://www.facebook.com" target="_blank" aria-label="Facebook">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://www.twitter.com" target="_blank" aria-label="Twitter">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="https://www.instagram.com" target="_blank" aria-label="Instagram">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://www.linkedin.com" target="_blank" aria-label="LinkedIn">
                <i class="fab fa-linkedin-in"></i>
            </a>
        </div>
    </footer>

    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
</body>

</html>