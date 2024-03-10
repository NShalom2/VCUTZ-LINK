<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$comment = $_POST['comment'];

$conn = new mysqli('sql5.freesqldatabase.com', 'sql5683955', 'zLqyRd7hQe', 'sql5683955');
if ($conn->connect_error) {
    die('Connection Failed : ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into comments2(firstName, lastName, email, comment)
    values(?, ?, ?, ?)");
    $stmt->bind_param("ssss", $firstName, $lastName, $email, $comment);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Thank you for your comment">
    <title>Comment Submitted</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" href="img/logo.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Inter:wght@100..900&family=Jacques+Francois+Shadow&display=swap" rel="stylesheet">
</head>
<body>
<section class="header" id="header">
    <div class="header-logo">
        <a href="index.html">
            <img src="img/logo.png" alt="Logo Image" class="logo-image">
        </a>
    </div>
    <div class="header-menu">
        <nav class="nav-menu">
            <ul>
                <li class="menu-element">
                    <a href="https://vcutz.ca">HOME</a>
                </li>
                <li class="menu-element">
                    <a href="https://www.picktime.com/0067897c-1dcc-4784-aac2-5c0a117edb51" target="_blank">BOOK NOW</a>
                </li>
                <li class="menu-element">
                    <a href="services.html">SERVICES</a>
                </li>
                <li class="menu-element">
                    <a href="https://mybarberportfolio.my.canva.site/">PORTFOLIO</a>
                </li>
                <li class="menu-element">
                    <a href="contact.html">CONTACT US</a>
                </li>
            </ul>
            <div class="toggle-btn">
                <i class="fa-solid fa-bars"></i>
            </div>
        </nav>
        <div class="dropdown-menu">
            <li class="menu-element">
                <a href="index.html">HOME</a>
            </li>
            <li class="menu-element">
                <a href="https://www.picktime.com/0067897c-1dcc-4784-aac2-5c0a117edb51" target="_blank">BOOK NOW</a>
            </li>
            <li class="menu-element">
                <a href="services.html">SERVICES</a>
            </li>
            <li class="menu-element">
                <a href="https://mybarberportfolio.my.canva.site/" target="_blank">PORTFOLIO</a>
            </li>
            <li class="menu-element">
                <a href="contact.html">CONTACT US</a>
            </li>
        </div>
    </div>
</section>

<section class="content-message">
    <div class="thank-you-message">
        <h1>Your comment has been submitted</h1>
        <p>Thank you for your feedback. We will get back to you within a few days.</p>
    </div>
    <div class="button-2 btn-2-1">
        <a href="http://vcutz.ca">
            <button class="buttons btn-2">
                <span>Go Back</span>
            </button>
        </a>
    </div>
</section>

<footer class="footer" id="footer">
    <div class="footer-logo">
        <a href="index.html">
            <img src="img/logo.png" alt="Footer Image" class="footer-image">
        </a>
    </div>
    <div class="footer-links">
        <div class="footer-links-1">
            <h2>LOCATIONS</h2>
            <div class="locations">
                <ul>
                    <li>Barrie</li>
                    <li>Toronto</li>
                    <li>Mississauga</li>
                    <li>Hamilton</li>
                </ul>
            </div>
        </div>
        <div class="footer-links-2">
            <h2>MENU</h2>
            <div class='footer-menu'>
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="services.html">SERVICES</a></li>
                    <li><a href="https://www.picktime.com/0067897c-1dcc-4784-aac2-5c0a117edb51" target="_blank">BOOK NOW</a></li>
                    <li><a href="contact.html">CONTACT US</a></li>
                </ul>
            </div>
        </div>
        <div class="contact">
            <h2>CONTACT</h2>
            <div class="phone-and-email">
                <p>Phone: + 1 (438) 308 7627</p>
                <p>Email: promesseca@gmail.com</p>
            </div>
            <div class="socials">
                <p>CHECK OUT OUR SOCIALS</p>
                <div class="icons">
                    <div class="facebook">
                        <a href="https://facebook.com">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    </div>
                    <div class="twitter">
                        <a href="https://twitter.com">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                    </div>
                    <div class="Instagram">
                        <a href="https://www.instagram.com/homebarber_vcuts/">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <p>&copy Copyrighted 2024 - V-CUTZ</p>
    </div>
</footer>

</body>
</html>

