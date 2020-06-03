<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link href="hover.css" rel="stylesheet">
    <link href="contact.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
          integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400&family=Montserrat&family=Open+Sans&family=Roboto&display=swap" rel="stylesheet">

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>
<body>
<nav class="navbar" style="border-bottom: none; margin-bottom: -3px">
    <ul class="nav-links">
        <li class="nav-item hvr-underline-from-left"><a style="color: white;" href="index.html">Welkom</a></li>
        <li class="nav-item hvr-underline-from-left"><a style="color: white;" href="about.html">Kennis maken met Ed</a>
        </li>
        <li class="nav-item hvr-underline-from-left"><a style="color: white;" href="cajon.html">Kennismaken met de
                Cajon</a></li>
    </ul>
</nav>
<nav class="navbar" style="height: 39px">
    <ul class="nav-links" style="margin-top: 4px;">
        <li class="nav-item hvr-underline-from-left"><a style="color: white;" href="gallery.html">Ed's Galerij</a></li>
        <li class="nav-item hvr-underline-from-left"><a style="color: white;" href="contact.php">Contact met Ed</a></li>
    </ul>
</nav>

<section>
    <h1 class="contact-title">Stuur Ed een berichtje</h1>
    <div class="container">
        <form action="contactform.php"
              class="contact-form" id="form" method="post">
            <label for="fname">Volledige Naam</label>
            <input type="text" id="fname" name="name" placeholder="Uw naam" required>

            <label for="lname">E-Mail</label>
            <input type="email" id="mail" name="mail" placeholder="Uw E-Mail" required>

            <label for="subject">Onderwerp</label>
            <input type="text" id="subject" name="subject" placeholder="Uw onderwerp" required>

            <label for="message">Uw bericht</label>
            <textarea id="message" name="message" placeholder="Typ hier uw bericht" style="height:200px"></textarea>
            <div class="g-recaptcha" data-sitekey="6LfFjPwUAAAAAIutISYX4UB7vsopwIhqUo7pHFRt"></div>
            <input type="submit" value="Submit" name="submit">
        </form>
    </div>

</section>
</body>
</html>