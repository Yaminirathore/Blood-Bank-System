<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Donation - Contact Us</title>
    <link rel="stylesheet" href="styles.css">
    <script defer src="script.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            text-align: center;
            background-color: #f8f8f8;
        }
        header {
            background-color: #d9534f;
            color: white;
            padding: 10px;
            font-size: 24px;
        }
        section {
            margin: 20px 0;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        textarea {
            width: 75%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;}
        button {
            background-color: #d9534f;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #c9302c;
        }
        iframe {
            width: 80%;
            height: 300px;
            border: none;
        }
    </style>
</head>
<body>
    <header>
        <h1>Contact Us - Blood Donation System</h1>
    </header>
    
    <!-- Contact Details -->
    <section id="contact-details">
        <h2>Contact Information</h2>
        <p><strong>Phone:</strong> +1 234 567 890</p>
        <p><strong>Email:</strong> support@blooddonation.com</p>
        <p><strong>Address:</strong> 123 Blood Bank Street, City, Country</p>
        <p><strong>Follow Us:</strong>
            <a href="#">Facebook</a> |
            <a href="#">Twitter</a> |
            <a href="#">Instagram</a>
        </p>
    </section>
    
    <!-- Inquiry Form -->
    <section id="inquiry-form">
        <h2>Send Us a Message</h2>
        <input type="text" id="name" placeholder="Your Name">
        <input type="email" id="email" placeholder="Your Email">
        <input type="text" id="phone" placeholder="Your Phone (Optional)">
        <textarea id="message" placeholder="Your Message"></textarea>
        <button onclick="submitForm()">Submit</button>
        <p id="form-response"></p>
    </section>
    
    <!-- Emergency Helpline -->
    <section id="emergency">
        <h2>Emergency Contact</h2>
        <p>If you need urgent blood donation, call our 24/7 helpline:</p>
        <p><strong>Emergency Number:</strong> +1 800 555 911</p>
    </section>
    
    <!-- Map Location -->
    <section id="map">
        <h2>Find Us</h2>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8354345093704!2d144.95592831590457!3d-37.81720974202105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d43f1f9fd8b%3A0xa1b9d87a8a0e3c0!2sBlood%20Donation%20Center!5e0!3m2!1sen!2sus!4v1623895736098!5m2!1sen!2sus"
            allowfullscreen="" loading="lazy">
        </iframe>
    </section>

    <script>
        function submitForm() {
            const name = document.getElementById("name").value;
            const email = document.getElementById("email").value;
            const phone = document.getElementById("phone").value;
            const message = document.getElementById("message").value;
            
            if (!name || !email || !message) {
                document.getElementById("form-response").textContent = "Please fill in all required fields.";
                document.getElementById("form-response").style.color = "red";
                return;
            }
            
            document.getElementById("form-response").textContent = "Thank you, " + name + "! Your message has been sent.";
            document.getElementById("form-response").style.color = "green";
            
            // Clear form fields
            document.getElementById("name").value = "";
            document.getElementById("email").value = "";
            document.getElementById("phone").value = "";
            document.getElementById("message").value = "";
        }
    </script>
</body>
</html>
