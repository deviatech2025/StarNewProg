<?php 
if(session_status() != PHP_SESSION_ACTIVE) {
    session_start();
}

if(isset($_SESSION['name']) == true ) {
    $erreur= $_SESSION['name'];
    echo '<script type="text/javascript">';
    echo 'alert("'. $erreur['message'] .'")';
    echo '</script>';
    unset($_SESSION['name']);
}

if(isset($_SESSION['profil']) == true){
    $us = $_SESSION['profil'];
}
?>