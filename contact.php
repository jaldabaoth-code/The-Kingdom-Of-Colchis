<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width" />
        <title>The kingdom of Colchis - Contact</title>
        <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet" />
        <link href="assets/styles/style.css" rel="stylesheet" type="text/css" />
        <link href="assets/styles/contact.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <?php
            /* header included */
            include 'header.html';
        ?>
        <h1>Contact The Kingdom of Colchis</h1>
        <h2>we would like to know you, do not hesitate to contact us</h2>
        <form class="contact_form" id="contactForm">
            <label for="firstName">First name :</label><br />
            <input type="text" class="first_name" name="firstName" value="First name" /><br />
            <label for="lastName">Last name :</label><br />
            <input type="text" class="last_name" name="lastName" value="Last name" /><br />
            <label for="email">Email :</label><br />
            <input type="email" class="email" name="email" value="example@mail.com" /><br />
            <label for="message">Message :</label><br />
            <textarea class="message" name="message"></textarea><br /><br />
            <input type="submit" class="submit" name="submit" value="SUBMIT" />
        </form>
        <script src="assets/js/script.js"></script>
    </body>
</html>
