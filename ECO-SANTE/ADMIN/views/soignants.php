  <?php $med = $userdb->readmedecinandNaturaupate();?>
 <div class="d-sm-flex align-items-center justify-content-between mt-2 border border p-2 bg-info rounded-3">
    <h1 class="h3 mb-0 text-gray-800 text-danger fw-1">Soignants</h1>
  <button class="btn btn-primary btn-md" data-bs-toggle="modal" data-bs-target="#formModal">
        <i class="fas fa-plus me-1"></i> 
        Ajouter un soignant
    </button>
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Liste des soignants</h6>
        <div class="dropdown">
            <button aria-label="Ouvrir le menu" class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button"
                id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-cog"></i>
            </button>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item export-excel" href="#"><i class="fas fa-file-excel me-2"></i>Exporter en
                        Excel</a></li>
                <li><a class="dropdown-item export-pdf" href="#"><i class="fas fa-file-pdf me-2"></i>Exporter en PDF</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="medicamentsTable" class="table table-striped table-bordered" style="width:100%">
                <thead class="table-light">
                    <tr>
                        <th>N°</th>
                        <th>Photo</th>
                        <th>NOM</th>
                        <th>PRENOM</th>
                        <th>EMAIL</th>
                        <th>TELEPHONE</th>
                        <th>SEXE</th>
                        <th>ROLE</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Les données seront chargées dynamiquement -->
                   <?php 
                         foreach ($med as $m) {
                    ?>
                             <tr>
                                <td><?= $m->IDUSER ?></td>
                                <td>
                                    <?php
                                        if($m->photo != null && $m->photo != '') {
                                            echo '<img src="controller/files/user/' . $m->photo . '" width="100px" />';
                                        }
                                        else {
                                            echo '<span style="color:gray;"><i class="fa fa-user-circle fa-2x"></i></span>';
                                        }
                                    ?>
                                </td>
                                <td><?= $m->NOM ?></td>
                                <td><?= $m->PRENOM ?></td>
                                <td><?= $m->EMAIL ?></td>
                                <td><?= $m->TELEPHONE ?></td>
                                <td><?= $m->SEXE ?></td>
                                <td><?= $m->ROLE ?></td>
                                <td>
                                    <button aria-label="Modifier l'utilisateur" type="submit" id="update_user" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#formModal" onclick="update(<?= $m->IDUSER ?>)">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button aria-label="Supprimer l'utilisateur"  class="btn btn-sm btn-danger" onclick="dele(<?= $m->IDUSER?>)">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="formModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">Ajouter un Utilisateur</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form name="form_edit" method="POST" action="index.php?action=createMedecin" enctype="multipart/form-data">
                    <p>
                        <label class="form-label fw-bold">
                            Entrez le nom 
                        </label>
                        <input type="text" name="nom" id="nom" required class="form-control" />
                    </p>

                    <p>
                        <label class="form-label fw-bold">
                            Entrez le prenom
                        </label>
                        <input type="text" name="prenom" id="prenom" required class="form-control" />
                    </p>

                    <p>
                        <label class="form-label fw-bold">
                            Entrez le sexe
                        </label>
                        <input type="text" name="sexe" id="sexe" required class="form-control" />
                    </p>

                    <p>
                        <label class="form-label fw-bold">
                            Entrez votre adresse
                        </label>
                        <input type="text" name="adresse" id="adresse" required class="form-control" />
                    </p>

                    <p>
                        <label class="form-label fw-bold">
                            Entrez l'email
                        </label>
                        <input type="email" name="email" id="email" required class="form-control" />
                    </p>

                    <p>
                        <label class="form-label fw-bold">
                            Entrez le numero de telephone 
                        </label>
                        <input type="tel" name="tel" id="tel" required class="form-control" />
                    </p>
                     <p>
                        <label class="form-label fw-bold">
                            Entrer votre role
                        </label>
                        <select name="role" id="">
                            <option value="medecin">Medecin</option>
                            <option value="naturaupate">Naturaupate</option>
                        </select>
                    </p>     
                    <p>
                        <label class="form-label fw-bold">
                            Entrer votre mot de passe 
                        </label>
                        <input type="password" name="password" id="password" required class="form-control" />
                    </p>

                    <p>
                        <label class="form-label fw-bold">
                            Entrez votre photo
                        </label>
                        <input type="file" name="photo" id="nom" required class="form-control" entype/>
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
        document.location.href=`index.php?action=deleteSoignant&id=${id}`
    }
</script>