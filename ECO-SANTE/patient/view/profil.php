<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon profil</title>
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
        <!-- Page profil (cachée par défaut) -->
        <section id="profile-page" class="page" >
            <div class="container">
                <div class="profile-container">
                    <div class="profile-header">
                        <div class="profile-avatar">JD</div>
                        <div class="profile-info">
                            <h2>Profil utilisateur</h2>
                            <p>Gérez vos informations personnelles</p>
                        </div>
                    </div>

                    <form id="profile-form">
                        <div class="profile-form">
                            <div class="form-group">
                                <label for="profile-name">Nom complet</label>
                                <input type="text" id="profile-name" value="jahsauve yimele" >
                            </div>
                            <div class="form-group">
                                <label for="profile-email">Email</label>
                                <input type="email" id="profile-email" value="jahsauve@example.com" >
                            </div>
                            <div class="form-group">
                                <label for="profile-phone">Téléphone</label>
                                <input type="tel" id="profile-phone" value="698308780" >
                            </div>
                            <div class="form-group">
                                <label for="profile-role">Rôle</label>
                                <input type="text" id="profile-role" value="Patient" >
                            </div>
                            <div class="form-group">
                                <label for="profile-password">Mot de passe</label>
                                <input type="password" id="profile-password" value="" >
                            </div>
                            <div class="form-actions">
                                <button type="button" class="btn-primary" id="edit-profile">Modifier</button>
                                <button type="submit" class="btn-secondary" id="save-profile" disabled>Enregistrer</button>
                            </div>
                        </div>
                    </form>
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