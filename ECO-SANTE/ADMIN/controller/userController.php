<?php 
//inscription du patient
    if(isset($_GET['action']) == true){
        $path_dest= 'controller/files/user/'; 
        if($_GET['action'] == 'createPatient' || $_GET['action'] == 'createPatientBack' || $_GET['action'] == 'createMedecin' ){
            
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $phone = $_POST['phone'];
            $sexe=$_POST['sexe'];
            $role=$_POST['role'];
            $photo= $package->upload_image($_FILES['photo'], 'user', 300, 300, $path_dest);
            
            if($photo == null) {
                $_SESSION['name']= array(
                    'type' => 'warning',
                    'message' => "La photo ne respecte pas les dimensions 300 x 300 requises"
                );
            } else {
                if($_GET['action'] == 'createPatient'){
                    $userdb->create($nom,$prenom,$sexe,$email,$phone,$password,$role,$photo);
                    $_SESSION['name']= array(
                        'type'=>'succes',
                        'message'=>"L\'utilisateur $nom . $prenom  a ete ajoute"
                    );
                    $_SESSION['profil'] = array(
                        'nom'=>$nom,
                        'prenom'=>$prenom
                    );
                    header('Location:../FRONT-END/view/dashbord_patient.php');
                } else if( $_GET['action'] == 'createPatientBack') {
                    $userdb->create($nom,$prenom,$sexe,$email,$phone,$password,"patient",$photo);
                    $_SESSION['name']= array(
                        'type'=>'succes',
                        'message'=>"L\'utilisateur $nom . $prenom  a ete ajoute avec succes"
                    );
                    header('Location:index.php?view=patients');
                } else if($_GET['action'] == 'createMedecin') {
                    $userdb->create($nom,$prenom,$sexe,$email,$phone,$password,$role,$photo);
                     $_SESSION['name']= array(
                        'type'=>'succes',
                        'message'=>"Medecin $nom . $prenom  a ete ajoute avec succes"
                    );
                    header('Location:index.php?view=soignant');
                }
            }
        }

        if($_GET['action'] == 'connect') {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $data = $userdb->connect2($email,$password);
            if(isset($data) == true) {
                $_SESSION['name']= array(
                    'type'=>"succes",
                    'message'=>"bienvenue $data->NOM"
                );
                $_SESSION['profil']= array(
                    'nom'=>$data->NOM,
                    'prenom'=>$data->PRENOM,
                    'id'=>$data->IDUSER
                );
               
                if($data->ROLE == 'admin') {
                    header('Location:index.php?view=dashboard');
                } else {
                    header('Location:../patient/view/dashbord_patient.php'); 
                }
            } else if($data == false){
                $_SESSION['name']= array(
                    'type'=>"succes",
                    'message'=>"Echec de connexion"
                );
                header('Location:../patient/login.php');
                  
            }
        }

        if($_GET['action'] == 'deconnexion') {
            session_unset();
            header('Location:../../index.php');
        }

        if($_GET['action'] == 'deletePatient' || $_GET['action'] == 'deleteSoignant' ) {
            $id = $_GET['id'];
            $usd = $userdb->read($id);
            unlink($path_dest . $usd->photo);
            $userdb->delete($id);
            
            if($_GET['action'] == 'deletePatient' ){
                  header('Location:index.php?view=patients');
            }else if($_GET['action'] == 'deleteSoignant') {
                  header('Location:index.php?view=soignant');
            }
          
        }
    }
?>