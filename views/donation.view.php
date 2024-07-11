<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faire un Don - OSM'OZ</title>
    <link rel="stylesheet" href="../styles/donation.css">
    <script src="../script/app.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://raw.githubusercontent.com/jerryluk/jquery.autogrow/master/jquery.autogrow-min.js"></script>
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

    <div class="donation-container">
        <div class="donation-box">
            <div class="title">Informations de Donation</div>
            <div class="fields">
                <input type="text" id="firstName" placeholder="Prénom" required>
                <input type="text" id="lastName" placeholder="Nom" required>
                <input type="email" id="email" placeholder="Email" required>
            </div>
            <div class="amount">
                <div class="button">30 €</div>
                <div class="button">50 €</div>
                <div class="button">100 €</div>
                <div class="button">€<input type="text" class="set-amount" placeholder="Autre"></div>
            </div>
            <div class="switch">
                <input type="radio" class="switch-input" name="view" value="Ponctuel" id="ponctuel" checked>
                <label for="ponctuel" class="switch-label switch-label-off">Ponctuel</label>
                <input type="radio" class="switch-input" name="view" value="Mensuel" id="mensuel">
                <label for="mensuel" class="switch-label switch-label-on">Mensuel</label>
                <span class="switch-selection"></span>
            </div>
            <div class="donate-button"><i class="fa fa-credit-card"></i> Donner maintenant</div>
        </div>
    </div>
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