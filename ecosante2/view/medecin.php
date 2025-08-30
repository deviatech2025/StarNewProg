<?php include('../../ADMIN/views/erreur.php'); 
    require_once '../../ADMIN/controller/userController.php'; 
    require_once  "../../ADMIN/views/erreur.php" ;
    require_once '../../ADMIN/model/specialitedb.php';
    $all_medecins=$all_medecin;
    $b = new Pe();
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
    <title>specialist</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../assets/fontawesome-free-6.7.2-web/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/medecin.css">
    <link rel="stylesheet" href="../assets/css/eco_sante.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <script src="../assets/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <!-- Navigation principale (commune à toutes les pages) -->
    <!-- Header -->
    <!-- Header -->
    <header>
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <a href="../login.php"><i class="fas fa-heartbeat"></i></a> 
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


    <!-- Page spécialistes  -->

    <main class="container">
        <div class="search-bar-container">
            <input type="text" name="search" id="specialist-search" placeholder="Rechercher un spécialiste...">
        </div>
            <section id="specialist-list">
                    <?php if($all_medecins!=null && sizeof($all_medecin)>0):
                    foreach($all_medecins as $medecin):
                    ?>  
                    <div class="specialist-block">
                        <div class="specialist-info">
                            <img src="../../ADMIN/controller/files/user/<?= $medecin->photo ?>" alt="">
                            <div class="details">
                                <h3>DR. <?= $medecin->PRENOM ; $medecin->NOM ?></h3>
                                <p class="specialty" style="color:red"><?= $b->specialite($medecin->IDSPECIALITE)->intitule ?></p>
                            </div>
                        </div>
                        <div class="planning-info">
                            <p><strong>Planning :</strong>Lundi, Mercredi, Vendredi</p>
                            <p><strong>Crénaux :</strong>09:00, 11:00, 14:30</p>
                        </div>
                        <div class="rdv-action">

                            <!-- <button class="btn btn-rdv" data-id="1"><a href="./Prendre RDV.php">Prendre un rendez-vous</a></button> -->
                            <button class="btn btn-danger btn-md" data-bs-toggle="modal" data-bs-target="#formModal"
                                onclick="createForm()">
                                <!-- <i class="fas fa-plus me-1"></i>  -->
                                Prendre un rendez-vous
                            </button>
                        </div>
                    </div>
                    <?php
                    endforeach;
                    endif;
                    ?>
                </section>
    </main>

    <!-- <div id="rdv-modal" class="modal">
        <div class="modal-content">
            <span class="close-btn">×</span>
            <h2 id="modal-specialist-name">Prendre rendez-vous avec le Dr. [Nom]</h2>

            <form action="#" id="rdv-form">
                <div class="form-group">
                    <label for="rdv-title">Intitulé du rendez-vous</label>
                    <input type="text" name="intitulé" id="rdv-title" required="">
                </div>
                <div class="form-group">
                    <label for="rdv-motif">Motif du rendez-vous</label>
                    <input type="text" name="motif" id="rdv-motif" required="">
                </div>
                <div class="form-group">
                    <label for="rdv-description">Description</label>
                    <textarea name="description" id="rdv-description" rows="4" required=""></textarea>
                </div>
                <div class="form-group">
                    <label for="rdv-date">Date et heure</label>
                    <input type="datetime-local" name="date" id="rdv-date" required="">
                </div>
                <button type="submit" class="btn">Confirmer le rendez-vous</button>
            </form>
        </div>
    </div> -->


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
    <!-- <script src="./assets/js/eco_sante.js"></script> -->
    <div class="modal fade" id="formModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title">Informations sur le rendez-vous</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form name="form_edit" id="form_edit" method="POST" action="#" enctype="multipart/form-data">
                        <input type="hidden" name="users_id" id="users_id" />

                        <div class="form-group">
                            <label for="rdv-motif">Motif du rendez-vous</label>
                            <input type="text" name="motif" id="rdv-motif" required="">
                        </div>

                        <div class="form-group">
                            <label for="rdv-date">Date et heure</label>
                            <input type="datetime-local" name="date" id="rdv-date" required="">
                        </div>


                        <div class="form-group">
                            <label for="rdv-description">Description</label>
                            <textarea name="description" id="rdv-description" rows="4" required=""></textarea>
                        </div>

                        <div class="form-group">
                            <label for="rdv-hours">Durée</label>
                           <input type="time" id="rdv-hours" placeholder="09:00 - 12:00, 14:00 - 18:00" required="">
                        </div>

                        <div class="form-group">
                            <label for="rdv-status">Statut</label>
                            <input type="text" name="Status" id="rdv-status" placeholder="En cours" readonly>
                        </div>

                        <button type="submit" class="btns">Confirmer le rendez-vous</button>

                    </form>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>
    <script src="../assets/js/eco_sante.js"></script>

</body>

</html>