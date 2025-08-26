<?php 
    session_start();
    require_once 'model/userdb.php';
    require_once 'model/plannings.php';
    require_once 'tools/Package.php';

    $planningdb = new PlanningDB();
    $userdb = new UserDB();
    $package = new Package();
?>