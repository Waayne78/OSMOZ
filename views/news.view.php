<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Actualités - OSM'OZ</title>
    <link rel="stylesheet" href="../styles/news.css">
    <script defer src="../script/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">

</head>

<body>
    <header>
        <a href="../index.php">
            <img src="../assets/images/logo.svg" alt="Logo" class="logo">
        </a>
        <nav>
            <div class="menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul>
                <li><a href="about.view.php">A Propos</a></li>
                <li><a href="actions.view.php">Nos Actions</a></li>
                <li><a href="formation.view.php">Nos Formations</a></li>
                <li><a href="news.view.php">Actualités</a></li>
                <li><a href="contact.view.php">Contact</a></li>
                <li><a class="donation" href="donation.view.php">Faire un don</a></li>
            </ul>
        </nav>
    </header>

    <section class="splide" aria-labelledby="carousel-heading">


        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide"><img src="../assets/images/ia.svg" alt=""></li>
                <li class="splide__slide"><img src="../assets/images/sillicon-valley.svg" alt=""></li>
                <li class="splide__slide"><img src="../assets/images/data.svg" alt=""></li>
            </ul>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var splide = new Splide('.splide',
                {
                    type: 'loop',
                    perPage: 1,
                    autoplay: true,
                    interval: 3000,
                    pauseOnHover: false,
                    resetProgress: false,
                }
            );
            splide.mount(

            );
        });
    </script>

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
            <div class="footer-section">
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