<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
    <header>
        <img src="assets/images/logo.png" alt="Logo" class="logo">
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
    <main>
        <section id="contact-section">
            <h1 class="title">Contactez-nous</h1>
            <form class="form">
                <div class="form-group">
                    <label for="name">Nom complet</label>
                    <input type="text" id="name" placeholder="Entrez votre nom complet">
                </div>
                <div class="form-group">
                    <label for="email">Adresse e-mail</label>
                    <input type="email" id="email" placeholder="Entrez votre adresse e-mail">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" placeholder="Entrez votre message"></textarea>
                </div>
                <button class="submit-button" type="submit">Envoyer</button>
            </form>
        </section>
        <img class="bg-img" src="../assets/images/bg-element.svg" alt="">
    </main>
</body>
</html>