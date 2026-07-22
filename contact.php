<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

<main class="contact-body">
    <div class="contact-us">
        <form action="contact.php" class="contact-left" method="POST" onsubmit="sendEmail(); return false;">
            <div class="contact-left-title">
                <h2> Say Hellow</h2>
                <hr>

            </div>

            <input type="text" name="name" placeholder="Your name" class="contact-inputs" id="name" required>
            <input type="text" name="subject" placeholder="Subject" class="contact-inputs">

            <input type="email" name="email" placeholder="Your email" class="contact-inputs" id="email" required>
            <textarea name="message" placeholder="Talk to us" class="contact-inputs" id="message"></textarea>
            <button type="submit"> Submit<img src="assets/images/arrow_icon.png" alt=""></button>


        </form>
        <div class="contact-right">
            <img src="assets/images/Khutso.jpg" alt="">

        </div>
    </div>


    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = trim($_POST["name"]);
        $email = trim($_POST["email"]);
        $subject = trim($_POST["subject"]);
        $message = trim($_POST["message"]);

        $to = "tendanisadiki2005@gmail.com";
        $emailsubject = "Contact Form Submission";



        $txt = "Name:$name";
        $txt .= "\r\n email:$email";
        $txt .= "\r\nsubject:$subject";
        $txt .= "\r\n\r\nMessage:";
        $txt .= "Name:$name";


        $headers = "From: noreply@demosite.com" . "\r\n" .
            $headers = "Reply-To:$email\r\n";

        if (mail($to, $emailsubject, $txt, $headers)) {
            echo "Message sent succcessfully!";
        } else {
            echo "Message failed to send.";
        }
    }
    ?>

</main>

<?php include 'includes/footer.php'; ?>