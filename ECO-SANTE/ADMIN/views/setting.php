<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">PARAMETRES</h1>
</div>


<div class="row">
    <!-- Colonne de gauche - Profil Admin -->
    <div class="col-lg-5 mb-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Mon Profil</h6>
            </div>
            <div class="card-body text-center">

                <form id="profileForm">
                    <div class="mb-3">
                        <label for="adminNom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="adminNom" value="Admin">
                    </div>

                    <div class="mb-3">
                        <label for="adminPrenom" class="form-label">Prénom</label>
                        <input type="text" class="form-control" id="adminPrenom" value="Principal">
                    </div>

                    <div class="mb-3">
                        <label for="adminEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="adminEmail" value="admin@pharmatri.com">
                    </div>

                    <div class="mb-3">
                        <label for="adminTelephone" class="form-label">Téléphone</label>
                        <input type="tel" class="form-control" id="adminTelephone" value="690123456">
                    </div>

                    <h1 class="btn btn-primary">
                        <i class="fas fa-save me-1"></i> Enregistrer les modifications
                    </h1>
                </form>
            </div>
        </div>

        <div class="card shadow mb-4">
            <div class="card-header py-3 bg-warning">
                <h6 class="m-0 font-weight-bold text-white">Changer le mot de passe</h6>
            </div>
            <div class="card-body">
                <form id="passwordForm">
                    <div class="mb-3">
                        <label for="currentPassword" class="form-label">Mot de passe actuel</label>
                        <input type="password" class="form-control" id="currentPassword" required>
                    </div>

                    <div class="mb-3">
                        <label for="newPassword" class="form-label">Nouveau mot de passe</label>
                        <input type="password" class="form-control" id="newPassword" required>
                        <div class="form-text">Minimum 8 caractères</div>
                    </div>

                    <div class="mb-3">
                        <label for="confirmPassword" class="form-label">Confirmer le mot de passe</label>
                        <input type="password" class="form-control" id="confirmPassword" required>
                    </div>

                    <button type="submit" class="btn btn-warning text-white">
                        <i class="fas fa-key me-1"></i> Changer le mot de passe
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Colonne de droite - Autres paramètres -->
    <div class="col-lg-7 mb-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3 bg-info text-white">
                <h6 class="m-0 font-weight-bold">Préférences système</h6>
            </div>
            <div class="card-body">
                <form id="systemForm">
                    <div class="mb-3">
                        <label for="language" class="form-label">Langue</label>
                        <select class="form-select" id="language">
                            <option value="fr" selected>Français</option>
                            <option value="en">English</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="timezone" class="form-label">Fuseau horaire</label>
                        <select class="form-select" id="timezone">
                            <option value="UTC+1" selected>UTC+1 (Afrique Centrale)</option>
                            <option value="UTC+0">UTC+0 (GMT)</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="theme" class="form-label">Thème</label>
                        <select class="form-select" id="theme">
                            <option value="light" selected>Clair</option>
                            <option value="dark">Sombre</option>
                            <option value="system">Système</option>
                        </select>
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="notifications" checked>
                        <label class="form-check-label" for="notifications">Activer les notifications</label>
                    </div>

                    <h1  class="btn btn-info text-white">
                        <i class="fas fa-save me-1"></i> Enregistrer les préférences
                    </h1>
                </form>
                 <hr>
                <div class="mb-3">
                    <h6 class="fw-bold">Réinitialisation</h6>
                    <p>Réinitialiser tous les paramètres par défaut</p>
                    <h1 class="btn btn-outline-warning reset-settings-btn">
                        <i class="fas fa-undo me-1"></i> Réinitialiser les paramètres
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>       