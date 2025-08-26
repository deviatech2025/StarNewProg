<!-- on recupere d'arbord l'id du medecin encore appele iduser-->
<?php
$all_planning= $planningdb->readAll($us['id']);
?>
<div class="" style="min-height:100vh" >
    <h2 class="py-5 ps-3 planing">BIENVENUE DANS VOTRE ESPACE DE PLANIFICATION</h2>
        <div class="text-center pb-3">
            <button class="btn btn-outline-danger btn-lg shadow-lg btn-md" data-bs-toggle="modal" data-bs-target="#formModal">
        <i class="fas fa-plus me-1"></i> 
        Créer un planning
    </button>
        </div>
     <div class="table-responsive">
                    <table class="table table-bordered usersTable" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="text-info">Date</th>
                                <th class="text-info">Heure de début</th>
                                <th class="text-info">Heure de fin</th>
                                <th class="text-info">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
<!--  donnees dynamiques -->
                        <?php
                           if($all_planning!=null && sizeof($all_planning)>0):
                             foreach($all_planning as $planning):
                        ?>
                        <tr>
                            <td><?=$planning->JOUR?></td>
                            <td><?=$planning->HEURE_DEBUT?></td>
                            <td><?=$planning->HEURE_FIN?></td>
                            <td>
                                    <button aria-label="Modifier" class="btn btn-sm btn-warning btn-update" data-bs-toggle="modal" data-bs-target="#formModal" onclick="editForm(<?= $planning->IDPLANNING ?>)">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button aria-label="Supprimer" class="btn btn-sm btn-danger btn-delete" onclick="deleteForm(<?= $planning->IDPLANNING ?>)">
                                        <i class="fas fa-trash"></i>
                                    </button>
                            </td>
                         </tr>
                         <?php
                         endforeach;
                        endif;
                         ?>
                      </tbody>
                    </table>
                </div>
    <div class="modal fade" id="formModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">Informations planning </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form name="form_edit" id="form_edit" method="POST" action="" enctype="multipart/form-data">
                    <p>
                        <label class="form-label fw-bold">
                            Entrer la date du planning
                        </label>
                        <input type="date" name="date" id="date" required class="form-control" />
                    </p>

                    <p>
                        <label class="form-label fw-bold">
                            Entrer l'heure de début du planning
                        </label>
                        <input type="time" name="start" id="start" required class="form-control" />
                    </p>

                    <p>
                        <label class="form-label fw-bold">
                            Entrer l'heure de fin du planning
                        </label>
                        <input type="time" name="end"  id="end"  required class="form-control" />
                    </p>

                    <p class="text-right">
                        <input type="reset" class="btn btn-danger" value="Effacer" data-bs-dismiss="modal" />
                        <input type="submit" class="btn btn-success" value="Enregistrer" />
                    </p>
                </form>
            </div>
            <div class="modal-footer">
                
            </div>
        </div>
    </div>
</div>

</div>
<script type="text/javascript">
    // const controllerName= 'controller/all_medicamentsController.php';
    // const tableid= 'all_medicament_id';

    function createForm() {
        document.querySelector("#form_edit").setAttribute('action', `controller/planningsControler.php?action=create`);
        document.querySelector("#form_edit").reset();
    }



    async function editForm(id) {
        try {
            const response= await fetch(`controller/planningsControler.php?IDPLANNING=${id}&action=read`);
            if(response.status == 200) {
                const data= await response.json();
                document.querySelector("#date").value= data.JOUR;
                document.querySelector("#start").value= data.HEURE_DEBUT;
                document.querySelector("#end").value= data.HEURE_FIN;
                document.querySelector("#form_edit").setAttribute('action', `controller/planningsControler.php?IDPLANNING=${id}&action=update`);
            }
        }
        catch(error) {
            console.error('Erreur  : ', error);
        }
    }


    
    function deleteForm(id) {
        document.location.href= `controller/planningsControler.php?IDPLANNING=${id}&action=delete`;
    }
</script>
