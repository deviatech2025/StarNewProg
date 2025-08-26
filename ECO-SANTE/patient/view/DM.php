<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ordonnances</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../assets/fontawesome-free-6.7.2-web/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/eco_sante.css">
</head>

<body>
        <!-- Header -->
    <header>
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <i class="fas fa-heartbeat"></i>
                    <h1>Eco_santé</h1>
                </div>
                <nav class="register">

                    <div class="header-content">
                        <ul class="parent-bar-register"></ul>
                        <div class="bar-register">
                            <a href="./dashbord_patient.php" class="nav-link active">
                                <i class="fas fa-home"></i>Accueil
                            </a>

                            <a href="./consult.php" class="nav-link">
                                <i class="fas fa-stethoscope"></i>Consultation
                            </a>
                            <a href="./notification.php" class="nav-link">
                                <i class="fas fa-bell"></i>notifications
                            </a>
                            <a href="./profil.php" class="nav-link">
                                <i class="fas fa-cog me-2"></i>
                                Paramètres
                            </a>
                        </div>
                        <div class="profil">
                            <input type="file">
                            <a href="./eco_sante.php" id="show-login">
                                Déconnexion
                            </a>
                        </div>
                        </ul>
                    </div>

                    <span><i class="fa-solid fa-bars fa-2x icon-bar-register"></i></span>
                </nav>
            </div>
        </div>
    </header>
    <section id="dashboard-page" class="page">

        <div class="dashboard-header">
            <h2> Espace Patient</h2>
        </div>

        <nav class="dashboard-nav">
            <a href="./medecin.php" class="nav-link">
                <i class="fas fa-user-md"></i>Consultez un medecin
            </a>
            <a href="./DM.php" class="nav-link">
                <i class="fas fa-file-prescription"></i>DM

            </a>
            <a href="./naturophate.php" class="nav-link">
                <i class="fa-solid fa-seedling"></i>Consultez un Naturopathe
            </a>
        </nav>
    </section>

    <!-- Page ordonnances -->
    <section id="prescriptions-page" class="page">
        <div class="container">
            <h2>Mes ordonnances</h2>

            <div class="prescriptions-list" id="prescriptions-container">
                <!-- Les ordonnances seront ajoutées ici dynamiquement -->
            </div>
        </div>
    </section>

    <!-- Pied de page (commun à toutes les pages) -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Eco_santé</h3>
                    <p>Plateforme de téléconsultation médicale</p>
                </div>
                <div class="footer-section">
                    <h3>Liens rapides</h3>
                    <a href="#" id="footer-accueil">Accueil</a>
                    <a href="#about" id="footer-about">À propos</a>
                    <a href="#">Mentions légales</a>
                    <a href="#">Politique de confidentialité</a>
                </div>
                <div class="footer-section">
                    <h3>Contact</h3>
                    <p>contact@Eco_santé.fr</p>
                    <p>+33 1 23 45 67 89</p>
                    <p>123 Rue de la Santé, Douala</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2023 Eco_santé. Tous droits réservés.</p>
            </div>
        </div>
    </footer>
    <script src="../assets/js/eco_sante.js"></script>
</body>

</html>