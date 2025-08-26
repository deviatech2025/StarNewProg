<div class="d-sm-flex align-items-center justify-content-between mt-2 border border p-2 bg-info rounded-3">
    <h1 class="h3 mb-0 text-gray-800 text-danger fw-1">CONSULTATIONS</h1>
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Liste des consulations</h6>
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
         <span class="text-success fs-4">  Select   </span><select class="form-select mb-5 d-inline-block " style="width: 80px;" >
                    <option  value="10" selected>10</option>
                    <option value="20">20</option>
                    <option value="30">30</option>
                    <option value="40">40</option>
                </select>
        <div class="table-responsive">
            <table id="medicamentsTable" class="table table-striped table-bordered" style="width:100%">
                <thead class="table-light">
                    <tr>
                        <th>REFERENCE</th>
                        <th>POIDS</th>
                        <th>TAILLE</th>
                        <th>TENSION</th>
                        <th>MONTANT</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Les données seront chargées dynamiquement -->
                    <td>1</td>
                    <td>momo</td>
                    <td>mopo</td>
                    <td>lkl</td>
                    <td>500</td>
                    <td>
                        <button aria-label="Modifier l'utilisateur" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></button>
                        <button aria-label="Supprimer un médecin" class="btn btn-sm btn-danger d-inline-block"><i class="fas fa-trash"></i></button>         
                    </td>
                </tbody>
            </table>
        </div>
    </div>
</div>