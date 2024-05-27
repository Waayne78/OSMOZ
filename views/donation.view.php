<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Don</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@^2.2.19/dist/tailwind.min.css" rel="stylesheet">

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



<main id="donation-section">
        <h1>Faites un Don</h1>
        <div class="container">
            <div class="form-container">
                <div class="left-container">
                    <div class="left-inner-container">
                        <h2>Merci pour votre soutien!</h2>
                        <p>Votre générosité nous aide à continuer notre mission.</p>
                    </div>
                </div>
                <div class="right-container">
                    <div class="right-inner-container">
                        <form action="#" method="post">
                            <div class="form-group">
                                <label for="name">Nom</label>
                                <input type="text" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="amount">Montant du Don</label>
                                <input type="number" id="amount" name="amount" required>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea id="message" name="message" rows="4"></textarea>
                            </div>
                            <button type="submit" class="donate-button">Faire un Don</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>