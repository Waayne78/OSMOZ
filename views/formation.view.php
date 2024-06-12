<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Formations - OSM'OZ</title>
    <link rel="stylesheet" href="../styles/formation.css">
    <script src="../script/app.js" defer></script>
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

    <main class="formations-container">
        <h1 class="title">Nos Formations</h1>

        <section class="card">
            <h2 class="formation-title">Formation IA</h2>
            <ion-icon class="formation-icon" name="bulb-outline"></ion-icon>
            <div class="card-content">
                <p class="formation-description">Plongez dans le monde de l'intelligence artificielle. Cette formation
                    couvre les concepts de base, les algorithmes, et les applications pratiques de l'IA.</p>
                <button class="formation-button">En savoir plus</button>
            </div>
        </section>
        <section class="card">
            <h2 class="formation-title">Formation Data</h2>
            <ion-icon class="formation-icon" name="cloud-download-outline"></ion-icon>
            <div class="card-content">
                <p class="formation-description">Apprenez les fondamentaux de l'analyse de données, y compris la
                    collecte, le nettoyage, et l'analyse des données. Cette formation couvre également les techniques de
                    visualisation des données et l'utilisation d'outils et langages comme Python...</p>
                <button class="formation-button">En savoir plus</button>
            </div>
        </section>
        <section class="card">
            <h2 class="formation-title">Formation Développement Web</h2>
            <ion-icon class="formation-icon" name="code-slash-outline"></ion-icon>
            <div class="card-content">
                <p class="formation-description">Apprenez à créer des sites web modernes et interactifs. Cette formation
                    couvre les langages de programmation essentiels comme HTML, CSS et JavaScript, ainsi que les
                    frameworks et outils populaires pour le développement front-end et back-end.</p>
                <button class="formation-button">En savoir plus</button>
            </div>
        </section>
        <div class="first-bg-image">
            <img loading="lazy" src="../assets/images/first-bg-image.svg" alt="Image">
        </div>
        <section id="testimonials">
            <h2 class="testimonials-title">Témoignages</h2>
            <p>Découvrez les retours de participants précédents et comment les événements organisé par OSMOZ ont enrichi
                leur compréhension de la data.
            </p>
            <div class="testimonial">
                <p class="testimonial-text">"Cette formation m'a permis d'acquérir des compétences essentielles en IA.
                    Je recommande vivement !"</p>
                <p class="testimonial-author">- Antoine</p>
            </div>
            <div class="testimonial">
                <p class="testimonial-text">"La formation en Data d'OSM'OZ m'a aidé à mieux comprendre les bases de
                    l'analyse de données et à les appliquer dans mon travail quotidien."</p>
                <p class="testimonial-author">- Milane</p>
            </div>
            <div class="testimonial">
                <p class="testimonial-text">"Participer aux actions de bénévolat d'OSM'OZ m'a permis de rencontrer des
                    gens formidables et de contribuer à des projets locaux."</p>
                <p class="testimonial-author">- Fatima</p>
            </div>
        </section>


    </main>

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
                    <li><a href="#">Accessibilité</a></li>
                    <li><a href="#">Conditions d'utilisation</a></li>
                    <li><a href="#">Politique de confidentialité</a></li>
                    <li><a href="#">Divulgation responsable</a></li>
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