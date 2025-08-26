<?php 
   
    require_once 'routes/service.php';
    require_once 'views/erreur.php';
    require_once 'routes/routes.php';
    require_once 'controller/userController.php';
$us= null;
    if(isset($_SESSION['profil']) == true) {
        $us= $_SESSION['profil'];
    }
    else {
        header('Location:../patient/login.php');
    }
 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="profil_user visible">
        <label for="changeProfil" style="font-size: 20px;" ><i class="fa-regular fa-pen-to-square"></i> Changer de Profil</label>
        <hr style="background-color: rgb(125, 124, 124);">
        <a href="index.php?view=settings"><i class="fa-solid fa-gear"></i> Parametres</a>
        <hr style="background-color: rgb(125, 124, 124);">
        <a href="controller/userController.php?action=deconnexion"><i class="fa-solid fa-right-to-bracket"></i> Deconnexion</a>
    </div>
    <div class="contener">
        <div class="sidebar">
            <div class="sidebar-header"> 
                <span id="site_name">ECO-SANTE</span>
            </div>
            <ul class="sidebar-menu">
                <li><a href="index.php?view=dashboard" class="a <?php echo  $_GET['view'] == 'dashboard' ? 'active':'' ?>"><i class="fa-solid fa-house-chimney-medical"></i> ACCUEIL</a></li>
                <li><a href="index.php?view=soignant" class="a <?php echo $_GET['view'] == 'soignant' ? 'active':'' ?>"><i class="fa-solid fa-hospital-user"></i> LISTE DES  MEDECINS</a></li>
                <li><a href="index.php?view=patients" class="a <?php echo $_GET['view'] == 'patients' ? 'active':'' ?>"><i class="fa-solid fa-user"></i> PATIENTS</a></li>
                <li><a href="index.php?view=consultation" class="a <?php echo $_GET['view'] == 'consultation' ? 'active':'' ?>"><i class="fa-solid fa-house-medical"></i> CONSULTATIONS</a></li>
                <li><a href="index.php?view=notif" class="a <?php echo $_GET['view'] == 'notif' ? 'active':'' ?>"><i class="fa-solid fa-message"></i> Notifications</a></li>
                <li><a href="index.php?view=planning" class="a <?php echo $_GET['view'] == 'planning'?'active':'' ?>"><i class="fa-solid fa-gears"></i> Planning</a></li>
                <li><a href="index.php?view=ordonnance" class="a <?php echo $_GET['view'] == 'ordonnance'?'active':'' ?>"><i class="fa-solid fa-gears"></i> Ordonnance</a></li>
                <li><a href="index.php?view=exem" class="a <?php echo $_GET['view'] == 'exem'?'active':'' ?>"><i class="fa-solid fa-gears"></i> Examen</a></li>
                                                                                
                <li><a href="index.php?view=settings" class="a <?php echo $_GET['view'] == 'settings'?'active':'' ?>"><i class="fa-solid fa-gears"></i> PARAMETRES GENERAUX</a></li>
            </ul>
        </div>
       <main>
        <div class="header">
             <div class="text-primary fs-2 d-none icon-bar">
                <i class="fa-classic fa-solid fa-bars"></i>
            </div>
            <div class="logo">
                <i class="fas fa-heartbeat"></i>
            </div>
            <div class="input">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="search" placeholder="Effectuer une recherche">
            </div>
            <div class="profil">   
               <!-- <a href=""> <img src="assets/ressources/fdepc4K_pont_sous_le_ciel_bleu.jpg" alt="" id="img_profil"></a>
               <input type="file" id="changeProfil" style="display: none;">  -->
               <span><?= $us['prenom'] ?><span>
                 
            </div>
        </div>
        <section>
            <!-- chargement des views -->
             <?php include($view) ?>
        </section>
       </main>
    </div>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>