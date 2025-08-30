<?php include('../../ADMIN/views/erreur.php'); 
require_once '../../ADMIN/controller/userController.php';
   $us= null;
    if(isset($_SESSION['profil']) == true) {
        $us = $_SESSION['profil'];
    }
    else {
        header('Location:../login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>notification</title>
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
                        <ul class="parent-bar-register">
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
                        </ul>
                        <div class="profil">
                            <a href="../../ADMIN/index.php?action=deconnexionBack" id="show-login">
                                Déconnexion
                            </a>
                        </div>
                        <div class="profil">
                            <img src="../../ADMIN/controller/files/user/<?= $us['photo'] ?>" style="width:50px;" alt="">
                            <h3><?= $us['nom'], $us['prenom'] ?></h3>
                        </div>
                       
                    </div>

                    <span><i class="fa-solid fa-bars fa-2x icon-bar-register"></i></span>
                </nav>
            </div>
        </div>
    </header>

    
    <!-- Section Notifications -->
    <section id="dashboard-section" class="page" >
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Notifications</h3>
            </div>
            <div style="max-height: 400px; ">
                <div style="padding: 16px; border-bottom: 1px solid #9db6ce;">
                    <p><strong>Nouveau rendez-vous</strong> - M. Martin à 14:30 aujourd'hui</p>
                    <small style="color: #1d1f20;">Il y a 10 minutes</small>
                </div>
                <div style="padding: 16px; border-bottom: 1px solid #e9ecef;">
                    <p><strong>Rappel</strong> - Formation continue le 15/11/2023</p>
                    <small style="color: #1d1f20;">Hier</small>
                </div>
                <div style="padding: 16px; border-bottom: 1px solid #e9ecef;">
                    <p><strong>Annulation</strong> - Mme. Dubois a annulé son rendez-vous</p>
                    <small style="color: #1d1f20;">Il y a 2 jours</small>
                </div>
                <div style="padding: 16px; border-bottom: 1px solid #e9ecef;">
                    <p><strong>Nouveau message</strong> - Vous avez reçu un message d'un Naturopathe</p>
                    <small style="color: #1d1f20;">Il y a 3 jours</small>
                </div>
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