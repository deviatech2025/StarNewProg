<div>
 <div class=" w-100  my-5 bg-warning bg-gradient bg-opacity-50 btn btn-outline-danger shadow-lg">BIENVENUE DANS VOTRE ESPACE DE MISE EN PLACE DE VOS ORDONNANCES POUR VOS PATIENTS!!!!!</div>
 <div>
    <div class="text-center pb-3">
            <button class="btn btn-outline-danger btn-lg shadow-lg btn-md" data-bs-toggle="modal" data-bs-target="#formModal">
        <i class="fas fa-plus me-1"></i> 
        Créer une nouvelle ordonnance
    </button>
        </div>
        <div class="table-responsive">
                    <table class="table table-bordered usersTable" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="text-info">N°</th>
                                <th class="text-info">Id suivie</th>
                                <th class="text-info">Intitilé de l'ordonnance</th>
                                <th class="text-info">Description</th>
                                <th class="text-info">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
<!--                         donnees dynamiques -->
                      </tbody>
                    </table>
                </div>
    <div class="modal fade" id="formModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">Informations ordonnances </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form name="form_edit" id="form_edit" method="POST" action="model/ordonnance.php?action=create" enctype="multipart/form-data">
                     <p>
                        <input type="hidden" name="intitule" id="intitule" required readonly   class="form-control" />
                    </p>

                       <p>
                        <label class="form-label fw-bold">
                            Entrer l'adresse e-mail du patient
                        </label>
                        <input type="text" name="intitule" id="intitule" required class="form-control" />
                    </p>
                
                   <p>
                        <label class="form-label fw-bold">
                            Entrer l'intitulé de l'ordonnance
                        </label>
                        <input type="text" name="intitule" id="intitule" required class="form-control" />
                    </p>

                    <p>
                        <label class="form-label fw-bold">
                            Entrer la description de l'ordonnance
                        </label>
                           <textarea name="description" id="description" class="form-control"></textarea>
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
</div>