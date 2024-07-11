<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OSM'OZ</title>
    <link rel="stylesheet" href="styles/style.css">
    <script src="script/app.js" defer></script>

</head>

<body>
    <header>
        <a href="index.php">
            <img src="assets/images/logo.svg" alt="Logo" class="logo">
        </a>
        <nav>
            <div class="menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul>
                <li><a href="views/about.view.php">À Propos</a></li>
                <li><a href="views/actions.view.php">Nos Actions </a></li>
                <li><a href="views/formation.view.php">Nos Formations </a></li>
                <li><a href="views/news.view.php">Actualités</a></li>
                <li><a href="views/contact.view.php">Contact</a></li>
                <li><a class="donation" href="views/donation.view.php">Faire un don</a></li>
            </ul>
        </nav>
    </header>
    <div class="first-bg-image">
        <img loading="lazy" src="assets/images/first-bg-image.svg" alt="Image">
    </div>
    <section id="presentation">
        <h2 class="animated fadeInDown">L'avenir de la data avec</h2>
        <div class="osmoz-img animated zoomIn">
            <img src="assets/images/osmoz-img.svg" class="omsoz-first-img" alt="Osmoz">
        </div>
        <p class="first-p animated fadeInUp">
            Rejoignez-nous pour explorer les frontières de l'intelligence artificielle, du développement et de la data
            chez OSM'OZ. <br> Découvrez nos initiatives innovantes, participez à nos formations spécialisées, et restez
            informé des dernières tendances technologiques <br> grâce à nos événements et ateliers interactifs.
        </p>
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
                <br> Gauthier Vasseur.
            </p>
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
        <div class="footer-content">
            <div class="footer-section">
                <h3>Liens Rapides</h3>
                <ul class="footer-links">
                    <li><a href="#">Accueil</a></li>
                    <li><a href="#">À propos de nous</a></li>
                    <li><a href="#">Nos Services</a></li>
                    <li><a href="views/contact.view.php">Contact</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Autres liens</h3>
                <ul class="footer-links">
                    <li><a href="#">Accessibility</a></li>
                    <li><a href="#">Terms of use</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Responsible Disclosure</a></li>
                </ul>
            </div>
            <div class="footer-section ">
                <h3>Contact</h3>
                <p>
                    <ion-icon name="call-outline"></ion-icon>
                    <a href="tel:+33782053199" style="color: inherit; text-decoration: none;">
                        +33 7 82 05 31 99
                    </a>
                </p>
                <p>
                    <ion-icon name="mail-outline"></ion-icon>
                    <a href="mailto:contact@osmoz.center" style="color: inherit; text-decoration: none;">
                        contact@osmoz.center
                    </a>
                </p>
                <p>
                    <ion-icon name="location-outline"></ion-icon>
                    <a href="https://www.google.com/maps?q=22+Rue+Maurice+Ravel,+78190+Trappes" target="_blank"
                        style="color: inherit; text-decoration: none;">
                        22 Rue Maurice Ravel, 78190 Trappes
                    </a>
                </p>
                <ul class="social-icon">
                    <li class="social-icon__item">
                        <a class="social-icon__link" href="https://www.tiktok.com/@osmoz.center">
                            <ion-icon name="logo-tiktok"></ion-icon>
                        </a>
                    </li>
                    <li class="social-icon__item">
                        <a class="social-icon__link" href="https://twitter.com/osmozcenter">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>
                    </li>
                    <li class="social-icon__item">
                        <a class="social-icon__link" href="https://www.linkedin.com/company/osmoz-center/">
                            <ion-icon name="logo-linkedin"></ion-icon>
                        </a>
                    </li>
                    <li class="social-icon__item">
                        <a class="social-icon__link" href="https://www.instagram.com/osmoz.center/">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <p class="footer-text">Copyright © 2024 OSM'OZ. Tous droits réservés.</p>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>