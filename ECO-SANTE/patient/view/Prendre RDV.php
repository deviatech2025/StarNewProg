<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes RDV</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../assets/fontawesome-free-6.7.2-web/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/eco_sante.css">
</head>

<body>
    <!-- Navigation principale (commune à toutes les pages) -->
    <!-- Header -->
    <header>
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <i class="fas fa-heartbeat"></i>
                    <h1>Eco_santé</h1>
                </div>
                <nav>
                    <ul>
                        <div class="nav-bar">
                            <a href="./dashbord_patient.php" class="nav-link active">
                                <i class="fas fa-home"></i>Accueil
                            </a>

                            <a href="./consult.php" class="nav-link">
                                <i class="fas fa-stethoscope"></i>Consultation
                            </a>
                            <a href="./notification.php" class="nav-link">
                                <i class="fas fa-bell"></i>
                            </a>
                        </div>

                        <div class="user-profile ms-auto">
                            <div class="dropdown">
                                <a href="./profil.php" class="dropdown-toggle" id="dropdownMenuButton"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="./assets/images/selfie2.png" alt="User" class="avatar">
                                    <span class="user-name">Patient</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                    <li>
                                        <a class="dropdown-item" href="./profil.php">
                                            <i class="fas fa-cog me-2"></i>
                                            Paramètres
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- Page rendez-vous -->
     <div class="container aos-init aos-animate"  data-aos="fade-up" data-aos-delay="100">
         <h2 class="page-title">Prendre un rendez-vous</h2>

        <form action="forms/appointment.php" method="post" role="form" id="appointments-page" class="php-email-form">
          <div class="row">
            <div class="col-md-4 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Votre nom" required="">
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Votre e-mail" required="">
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Votre téléphone" required="">
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 form-group mt-3">
              <input type="datetime-local" name="date" class="form-control datepicker" id="date" placeholder="Date de rendez-vous" required="">
            </div>
            <div class="col-md-4 form-group mt-3">
              <select name="department" id="department" class="form-select" required="">
                <option value=""><font dir="auto" style="vertical-align: inherit;"><font dir="auto" style="vertical-align: inherit;">Sélectionnez le département</font></font></option>
                <option value="Department 1"><font dir="auto" style="vertical-align: inherit;"><font dir="auto" style="vertical-align: inherit;">Département 1</font></font></option>
                <option value="Department 2"><font dir="auto" style="vertical-align: inherit;"><font dir="auto" style="vertical-align: inherit;">Département 2</font></font></option>
                <option value="Department 3"><font dir="auto" style="vertical-align: inherit;"><font dir="auto" style="vertical-align: inherit;">Département 3</font></font></option>
              </select>
            </div>
            <div class="col-md-4 form-group mt-3">
              <select name="doctor" id="doctor" class="form-select" required="">
                <option value=""><font dir="auto" style="vertical-align: inherit;"><font dir="auto" style="vertical-align: inherit;">Sélectionnez un médecin</font></font></option>
                <option value="Doctor 1"><font dir="auto" style="vertical-align: inherit;"><font dir="auto" style="vertical-align: inherit;">Docteur </font></font></option>
                <option value="Doctor 2"><font dir="auto" style="vertical-align: inherit;"><font dir="auto" style="vertical-align: inherit;">généraliste</font></font></option>
                <option value="Doctor 3"><font dir="auto" style="vertical-align: inherit;"><font dir="auto" style="vertical-align: inherit;">Naturophate</font></font></option>
              </select>
            </div>
          </div>

          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message (facultatif)"></textarea>
          </div>
          <div class="mt-3">
            <div class="loading"><font dir="auto" style="vertical-align: inherit;"><font dir="auto" style="vertical-align: inherit;">Chargement</font></font></div>
            <div class="error-message"></div>
            <div class="sent-message"><font dir="auto" style="vertical-align: inherit;"><font dir="auto" style="vertical-align: inherit;">Votre demande de rendez-vous a bien été envoyée. Merci&nbsp;!</font></font></div>
            <div class="text-center"><button class="btn" type="submit" ><font dir="auto" style="vertical-align: inherit;"><font dir="auto" style="vertical-align: inherit;">Confirmer le rendez-vous</font></font></button></div>
          </div>
        </form>

      </div>
    <!-- <section id="appointments-page" class="page"> -->

        <!-- Prise de rendez-vous -->
        <!-- <div class="container">
            <h2 class="page-title">Prendre un rendez-vous</h2>

            <div class="card">
                <div class="form-group">
                    <label for="practitioner-type">Type de praticien</label>
                    <select id="practitioner-type" class="form-control">
                        <option value="">Tous les praticiens</option>
                        <option value="doctor">Médecin généraliste</option>
                        <option value="specialist">Médecin spécialiste</option>
                        <option value="naturopath">Naturopathe</option>
                    </select>
                </div>

                <div class="calendar-container">
                    <div class="calendar-header">
                        <button class="btn btn-outline"><i class="fas fa-chevron-left"></i></button>
                        <h3>Octobre 2023</h3>
                        <button class="btn btn-outline"><i class="fas fa-chevron-right"></i></button>
                    </div>

                    <div class="calendar">
                        <div class="calendar-day">Lun</div>
                        <div class="calendar-day">Mar</div>
                        <div class="calendar-day">Mer</div>
                        <div class="calendar-day">Jeu</div>
                        <div class="calendar-day">Ven</div>
                        <div class="calendar-day">Sam</div>
                        <div class="calendar-day">Dim</div> -->

                        <!-- Jours du calendrier -->
                        <!-- <div class="calendar-day">1</div>
                        <div class="calendar-day">2</div>
                        <div class="calendar-day">3</div>
                        <div class="calendar-day">4</div>
                        <div class="calendar-day">5</div>
                        <div class="calendar-day">6</div>
                        <div class="calendar-day">7</div>
                        <div class="calendar-day">8</div>
                        <div class="calendar-day">9</div>
                        <div class="calendar-day">10</div>
                        <div class="calendar-day current-day">11</div>
                        <div class="calendar-day">12</div>
                        <div class="calendar-day">13</div>
                        <div class="calendar-day">14</div> -->
                        <!-- ... autres jours -->
                    <!-- </div>

                    <h4 style="margin-top: 1.5rem;">Créneaux disponibles</h4>
                    <div class="time-slots">
                        <div class="time-slot">09:00</div>
                        <div class="time-slot">09:30</div>
                        <div class="time-slot">10:00</div>
                        <div class="time-slot">10:30</div>
                        <div class="time-slot">11:00</div>
                        <div class="time-slot">11:30</div>
                        <div class="time-slot">14:00</div>
                        <div class="time-slot">14:30</div>
                        <div class="time-slot">15:00</div>
                        <div class="time-slot">15:30</div>
                        <div class="time-slot">16:00</div>
                        <div class="time-slot">16:30</div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="appointment-reason">Motif de la consultation</label>
                    <textarea id="appointment-reason" class="form-control" rows="3"></textarea>
                </div>

                <button class="btn">Confirmer le rendez-vous</button>
            </div>
        </div>
    </section> -->

    <!-- Pied de page (commun à toutes les pages) -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>MediConnect</h3>
                    <p>Plateforme de téléconsultation médicale</p>
                </div>
                <div class="footer-section">
                    <h3>Liens rapides</h3>
                    <a href="#" id="footer-accueil">Accueil</a>
                    <a href="#about" id="footer-about">À propos</a>
                    <a href="#">Mentions légales</a>
                    <a href="#">Politique de confidentialité</a>
                </div>
                <div class="footer-section">
                    <h3>Contact</h3>
                    <p>contact@Eco_santé.fr</p>
                    <p>+237 93 45 67 89</p>
                    <p>123 Rue de la Santé, Douala</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2023 Eco_santé. Tous droits réservés.</p>
            </div>
        </div>
    </footer>
    <script src="../assets/js/eco_sante.js"></script>
</body>

</html>