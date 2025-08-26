<?php 
    $views = array(
        'settings'=>'views/setting.php',
        'patients'=>'views/patients.php',
        'dashboard'=>'views/dashboard.php',
        'soignant'=>'views/soignants.php',
        'consultation'=>'views/consultations.php',
        'planning'=>'views/planning.php',
        'ordonnance'=>'views/ordonnance.php',
        'notif'=>'views/notifications.php',
        'exem'=>'views/examen.php'
    );
    $view = $_GET['view'];
    if(array_key_exists($view,$views) == true) {
        $view = $views[$view];
    } else {
        // retourne dans une page 404
        $view = 'views/404.php';
    }
?>