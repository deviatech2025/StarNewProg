 <?php $patient = $userdb->readPatient();?>
    
<div class="d-sm-flex align-items-center justify-content-between mt-4">
    <h1>PATIENTS</h1>
     <button class="btn btn-primary btn-md" style="" data-bs-toggle="modal" data-bs-target="#formModal">
        <i class="fas fa-plus me-1"></i> 
        Ajouter un Patient
</button>
</div>

<!-- Liste des Utilisateurs -->
<div class="row mt-4">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Liste des Patients</h6>
                <div class="dropdown no-arrow">
                    <a aria-label="Ouvrir le menu" class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#"><i class="fas fa-file-export me-2"></i>Exporter</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-filter me-2"></i>Filtrer</a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                      Afficher : <select name="" id=""> 
                        <option value=""> 10 </option>
                        <option value=""> 20 </option>
                        <option value=""> 30 </option>
                        <option value=""> 40 </option>
                        <option value=""> 50 </option>
                    </select> Elements
                    <table class="table table-bordered usersTable" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th  style="color: blue;">numero</th>
                                <th  style="color: blue;">Photo</th>
                                <th  style="color: blue;">Nom</th>
                                <th  style="color: blue;">Prénom</th>
                                <th  style="color: blue;">Email</th>
                                <th  style="color: blue;">Téléphone</th>
                                <th  style="color: blue;">sexe</th>
                                <th  style="color: blue;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- charger les donnees dynamiquements -->
                            <?php 
                                foreach ($patient as $pat) {
                            ?>
                                <tr>
                                    <td><?= $pat->IDUSER ?></td>
                                    <td>
                                        <?php
                                            if($pat->photo != null && $pat->photo != '') {
                                                echo '<img src="controller/files/user/'. $pat->photo .'" width="100px" />';
                                            }
                                            else {
                                                echo '<span style="color:gray;"><i class="fa fa-user-circle fa-2x"></i></span>';
                                            }
                                    ?>
                                    </td>
                                    <td><?= $pat->NOM ?></td>
                                    <td><?= $pat->PRENOM ?></td>
                                    <td><?= $pat->EMAIL ?></td>
                                    <td><?= $pat->TELEPHONE ?></td>
                                    <td><?= $pat->SEXE ?></td>
                                    <td>
                                        <button aria-label="Modifier l'utilisateur" type="submit" id="update_user" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#formModal" onclick="update(<?= $pat->IDUSER ?>)">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button aria-label="Supprimer l'utilisateur"  class="btn btn-sm btn-danger" onclick="dele(<?= $pat->IDUSER?>)">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Form Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form  method="POST" action="index.php?action=createPatientBack" enctype="multipart/form-data">
                    <p>
                        <label class="form-label fw-bold">
                            Entrer le nom
                        </label>
                        <input type="text" name="nom" id="name" required class="form-control" />
                    </p>

                    <p>
                        <label class="form-label fw-bold">
                            Entrer le prenom
                        </label>
                        <input type="text" name="prenom" id="prenom" required class="form-control" />
                    </p>
                                    
                    <p>
                        <label class="form-label fw-bold">
                            ENtrer l'email
                        </label>
                        <input type="email" name="email" id="email" required class="form-control" />
                    </p>
                    
                    <p>
                        <label class="form-label fw-bold">
                            Entrer votre localisation
                        </label>
                        <input type="text" name="location" id="location" required class="form-control" />
                    </p>

                    <p>
                        <label class="form-label fw-bold">
                            Entrer numero de telephone
                        </label>
                        <input type="text" name="phone" id="phone" required class="form-control" />
                    </p>

                    <p>
                        <label class="form-label fw-bold">
                            Entrer votre Mot de passe
                        </label>
                        <input type="password" name="password" id="role" required class="form-control" />
                    </p>

                    <p>
                        <label class="form-label fw-bold">
                            Entrer votre sexe
                        </label>
                        <input type="text" name="sexe" id="sexe" required class="form-control" />
                    </p>

                      <p>
                        <label class="form-label fw-bold">
                            Entrer votre role
                        </label>
                        <input type="text" name="role" id="role"  required class="form-control" />
                    </p>
                    
                    
                    <p>
                        <label class="form-label fw-bold">
                            Sélectionnez une photo
                        </label>
                        <input type="file" name="photo" id="photo"  accept=".jpg, .png, .jpeg, .gif" required class="form-control"/>
                        <div id="photo_view"></div>
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


<script>
    function dele(id) {
        document.location.href=`index.php?action=deletePatient&id=${id}`
    }
</script>