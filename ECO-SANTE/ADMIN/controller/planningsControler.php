<?php
require_once './routes/service.php';
 
$action= $_GET['action'];

if($action =='create') {
    try {
    /*on doit recuperer l'id du medecin pour pouvoir  enregistrer un planning*/
        $idmedecin = $us['id'];
        $date= $_POST['date'];
        $heuredebut= $_POST['start'];
        $heurefin= $_POST['end'];
        $Planningdb->create($idmedecin,$date,$heuredebut,$heurefin);
         $_SESSION['name']= array(
            'type' => 'success',
            'message' => "Votre planification à étè enregistrer avec succès"
        );
        
    }
    catch(Exception $ex) {
        $_SESSION['name']= array(
            'type' => 'danger',
            'message' => "ERROR REQUEST : $ex->getMessage()"
        );
    }
    finally {
        header('Location:../index.php?view=plannings');
    }
}


if($action == 'read') {
    header('Content-Type: application/json');
    try {
        $planning_id= $_GET['IDPLANNING'];
        $planning=$Planningdb->read($planning_id);
        http_response_code(200);
        echo json_encode($planning);
    }
    catch(Exception $ex) {
        http_response_code(500);
        echo json_encode(array(
            'type' => 'danger',
            'message' => "ERROR REQUEST : $ex->getMessage()"
        ));
    }
}



if($action == 'update') {
    try {
        $all_medicament_id= $_POST['all_medicament_id'];
        $all_medicament= $all_medicamentdb->read($all_medicament_id);

        $name= $_POST['name'];
        $description= $_POST['description'];
        $photo= $all_medicament->photo;

        if(isset($_FILES['photo']) == true && $_FILES['photo']['size'] > 0) {
            unlink($path_dest . $all_medicament->photo);
            $photo= $package->upload_image($_FILES['photo'], 'med', 300, 300, $path_dest);
        }
        
        if($photo == null) {
            $_SESSION['erreur']= array(
                'type' => 'warning',
                'message' => "La photo ne respecte pas les dimensions 300 x 300 requises"
            );
        }
        else {
            $all_medicamentdb->update($all_medicament_id, $name, $description, $photo);
            $_SESSION['erreur']= array(
                'type' => 'success',
                'message' => "Le médicament $name a été modifiée avec succès"
            );
        }
    }
    catch(Exception $ex) {
        $_SESSION['erreur']= array(
            'type' => 'danger',
            'message' => "ERROR REQUEST : $ex->getMessage()"
        );
    }
    finally {
        header('Location:../index.php?view=all_medicament');
    }
}




if($action == 'delete') {
    try {
        $all_medicament_id= $_GET['all_medicament_id'];
        $all_medicament= $all_medicamentdb->read($all_medicament_id);

        unlink($path_dest . $all_medicament->photo);
        $all_medicamentdb->delete($all_medicament_id);
        $_SESSION['erreur']= array(
            'type' => 'success',
            'message' => "Le médicament $name a été supprimée avec succès"
        );
    }
    catch(Exception $ex) {
        $_SESSION['erreur']= array(
            'type' => 'danger',
            'message' => "ERROR REQUEST : $ex->getMessage()"
        );
    }
    finally {
        header('Location:../index.php?view=all_medicament');
    }
}




?>
?>