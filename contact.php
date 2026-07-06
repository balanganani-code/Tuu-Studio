<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<section>
    <h1>Get in touch</h1>

    <p>We would love to hear from you! Whether you have a question, want to discuss a project, or just want to say hello, feel free to reach out to us. You can contact us through the following channels:</p>

    <ul>
        <li>Email: <a href="mailto:tuustudio@gmail.com">tuustudio@gmail.com</a></li>
        <li>Phone: 073 106 2668</li>
        <li>Address: 30 Ballyclare Drive, Bryanston, Sandton, 2021</li>
        <li>Business Hours: Monday - Friday, 9:00 AM - 5:00 PM</li>
    </ul>


</section>

<section>
    <h2>Send us a</h2>
    <p>If you prefer to send us a message directly, please fill out the contact form below and we will get back to you as soon as possible.</p>

    <form action="submit_contact.php" method="post">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Send Message</button>
    </form>


    <h1>Ready to start your project?</h1>
    <p>Contact us today and let's create something amazing together!</p>

    <button class="btn btn-first">Get in touch</button>
    <button class="btn btn-second">Email us</button>
</section>

<?php include 'includes/footer.php'; ?>