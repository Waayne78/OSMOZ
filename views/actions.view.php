<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Actions - OSM'OZ</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>

<body>
    <header>
        <a href="../index.php">
            <img src="../assets/images/logo.svg" alt="Logo" class="logo">
        </a>
        <nav>
            <ul>
                <li><a href="../index.php">Accueil</a></li>
                <li><a href="actions.view.php">Nos Actions</a></li>
                <li><a href="formation.view.php">Nos Formations</a></li>
                <li><a href="news.view.php">Actualités</a></li>
                <li><a href="contact.view.php">Contact</a></li>
                <li><a class="donation" href="donation.view.php">Faire un don</a></li>
            </ul>
        </nav>
    </header>

    <section id="actions">
        <h1 class="section-title">Nos Actions</h1>
        <div class="actions-container">
            <div class="action-card animated fadeInUp">
                <ion-icon name="school-outline" class="action-icon"></ion-icon>
                <h2 class="action-title">Ateliers Éducatifs</h2>
                <p class="action-description">Nos ateliers éducatifs sont conçus pour enseigner les bases de l'intelligence artificielle et du développement aux jeunes esprits.</p>
            </div>
            <div class="action-card animated fadeInUp">
                <ion-icon name="megaphone-outline" class="action-icon"></ion-icon>
                <h2 class="action-title">Conférences et Séminaires</h2>
                <p class="action-description">Nous organisons régulièrement des conférences et des séminaires avec des experts de l'industrie pour partager des connaissances avancées.</p>
            </div>
            <div class="action-card animated fadeInUp">
                <ion-icon name="people-outline" class="action-icon"></ion-icon>
                <h2 class="action-title">Projets Communautaires</h2>
                <p class="action-description">Nos projets communautaires visent à appliquer la technologie pour résoudre des problèmes locaux et améliorer la qualité de vie.</p>
            </div>
            <div class="action-card animated fadeInUp">
                <ion-icon name="briefcase-outline" class="action-icon"></ion-icon>
                <h2 class="action-title">Formation Professionnelle</h2>
                <p class="action-description">Nous proposons des programmes de formation professionnelle pour aider les individus à se préparer aux carrières dans le domaine de la technologie.</p>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h3>Liens Rapides</h3>
                <ul class="footer-links">
                    <li><a href="../index.php">Accueil</a></li>
                    <li><a href="about.view.php">À propos de nous</a></li>
                    <li><a href="services.view.php">Nos Services</a></li>
                    <li><a href="contact.view.php">Contact</a></li>
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
