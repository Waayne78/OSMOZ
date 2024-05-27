<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Osmoz</title>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <header>
        <img src="assets/images/logo" alt="Logo" class="logo">
        <nav>
            <ul>
                <li><a href="#">A Propos</a></li>
                <li><a href="#">Nos Actions </a></li>
                <li><a href="#">Nos Formations </a></li>
                <li><a href="#">Actualités</a></li>
                <li><a href="views/contact.view.php">Contact</a></li>
                <li><a class="donation" href="#">Faire un don</a></li>
            </ul>
        </nav>
    </header>
    <section class="first-bg-image">
        <img loading="lazy" src="assets/images/first-bg-image.svg" alt="Image">
    </section>

    <section id="presentation">
        <h2>L'avenir de la data avec</h2>
        <div class="osmoz-img">
            <img src="assets/images/osmoz-img.svg" alt="Osmoz">
        </div>

        <p class="first-p">
            Plongez dans l'univers de la data lors de notre conférence spéciale ouverte à tous le mercredi 21 février
            2024 à 14h00 au Conservatoire de <br> musique et de danse à Trappes. Découvrez les dernières tendances et
            posez vos questions directement à Gauthier Vasseur, Directeur Exécutif du <br> Berkeley Fisher Center.
        </p>

        <a class="sub" href="#">Je m'inscris</a>
    </section>

    <section id="video-section">
        <div class="video-container">
            <video src="video.mp4" controls></video>
        </div>
    </section>

    <section id="discover">
        <div class="discover-text">
            <h1>Découvrez le monde</h1>
            <h1>de la data</h1>
            <p>Un événement incontournable pour s’initier et explorer les perspectives offertes par la data, animé par
                <br> Gauthier Vasseur.</p>
        </div>

        <div class="card-container">
            <div class="card">
                <div class="calendar" id="card">
                    <img src="assets/images/calendar.svg" alt="calendar">
                    <br>
                    <p>21/02/24</p>
                </div>
                <div class="speaker" id="card">
                    <img src="assets/images/speaker.svg" alt="speaker">
                    <p>Intervenant</p>
                </div>
                <div class="info" id="card">
                    <img src="assets/images/info.svg" alt="info">
                    <p>Informations <br> Pratiques</p>
                </div>
                <div class="programme" id="card">
                    <img src="assets/images/program.svg" alt="programme">
                    <p>Programme</p>
                </div>
            </div>
        </div>
    </section>

    <section id="news">
        <h1>Actualités</h1>
        <div class="event-card">
            <div class="event">
                <p>Discover Sillicon Valley</p>
                <br>
                <img src="assets/images/sillicon-valley.svg" alt="">
                <a class="sub" href="#">Je m'inscris</a>

            </div>
            <div class="event">
                <p>IA Tech</p>
                <br>
                <img src="assets/images/ia.svg" alt="">
                <a class="sub" href="#">Je m'inscris</a>
            </div>

            <div class="event">
                <p>DATA</p>
                <br>
                <img src="assets/images/data.svg" alt="">
                <a class="sub" href="#">Je m'inscris</a>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="waves">
            <div class="wave" id="wave1"></div>
            <div class="wave" id="wave2"></div>
            <div class="wave" id="wave3"></div>
            <div class="wave" id="wave4"></div>
        </div>
        <ul class="social-icon">
            <li class="social-icon__item"><a class="social-icon__link" href="#">
                    <ion-icon name="logo-facebook"></ion-icon>
                </a></li>
            <li class="social-icon__item"><a class="social-icon__link" href="#">
                    <ion-icon name="logo-twitter"></ion-icon>
                </a></li>
            <li class="social-icon__item"><a class="social-icon__link" href="#">
                    <ion-icon name="logo-linkedin"></ion-icon>
                </a></li>
            <li class="social-icon__item"><a class="social-icon__link" href="https://www.instagram.com/osmoz.center/">
                    <ion-icon name="logo-instagram"></ion-icon>
                </a></li>
        </ul>
        <ul class="menu">
            <li class="menu__item"><a class="menu__link" href="#">Home</a></li>
            <li class="menu__item"><a class="menu__link" href="#">About</a></li>
            <li class="menu__item"><a class="menu__link" href="#">Services</a></li>
            <li class="menu__item"><a class="menu__link" href="#">Team</a></li>
            <li class="menu__item"><a class="menu__link" href="#">Contact</a></li>

        </ul>
        <p>&copy; Osmoz | Tout droits reservés </p>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>