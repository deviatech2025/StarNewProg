<?php 
require_once 'config.php'; 
include(BACKEND_PATH_ERREUR);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Éco-Santé - Téléconsultation</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="./assets/fontawesome-free-6.7.2-web/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/eco_sante.css">
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
                <nav class="nav-bar">
                    <ul>
                        <li><a href="./eco_sante.php" class="active" id="nav-accueil">Accueil</a></li>
                        <li><a href="#about" class="nav-link" id="nav-about">À propos</a></li>
                        <li><a href="#Contacts" class="nav-link" data-section="Contacts">Urgence</a></li>
                        <li><a href="./login.php" class="nav-link" class="btn" id="btn-login">Se connecter</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!-- Conteneur principal pour le changement de pages -->
    <main id="main-content">
        <!-- Page d'accueil -->
        <div class="container " id="description">
            <div class="hero">
                <div class="container">
                    <h1>Bienvenue sur Éco-Santé</h1>
                    <p>La téléconsultation médicale simple, rapide et sécurisée. Consultez un professionnel de santé
                        depuis chez vous, à tout moment.
                    </p>
                    <div class="cta-buttons">
                        <button class="btn-primary" data-page="signup-page">
                            <a href="./register.php">S'inscrire</a>
                        </button>
                        <button class="btn-secondary">
                            <a href="view/CONNEXION.php">Vous êtes soignant</a>
                        </button>
                    </div>
                </div>
            </div>


            <section class="features">
                <div class="feature-card">
                    <i class="fas fa-video"></i>
                    <h3>Consultations en ligne</h3>
                    <p>Des consultations sécurisées par vidéo avec des professionnels de santé.</p>
                </div>
                <div class="feature-card">
                    <i class="fas fa-clock"></i>
                    <h3>Disponibilité 24/7</h3>
                    <p>Accédez à des soins à tout moment, selon vos besoins.</p>
                </div>
                <div class="feature-card">
                    <i class="fas fa-file-prescription"></i>
                    <h3>Ordonnances en ligne</h3>
                    <p>Recevez vos ordonnances directement après la consultation.</p>
                </div>
            </section>
        </div>

        <!-- Section À propos -->
        <section id="about" class="partners">
            <div class="container">
                <h3>À propos de Eco_santé</h3>
                <p>Eco_santé est une plateforme innovante de téléconsultation médicale qui vise à rendre les soins
                    de santé accessibles à tous, partout et à tout moment.
                    Imaginer pour deplacer l'Hôpital jusque chez vous ; 
                    mettant l'accent sur les bienfaits de la medecine naturel et l'efficacite des soins modernes
                </p>

                <h3 style="margin-top: 40px;">Hôpitaux partenaires</h3>
                <div class="partner-logos">
                    <div>Hôpital Central</div>
                    <div>Clinique Saint-Louis</div>
                    <div>Institut Médical</div>
                    <div>Centre Hospitalier Universitaire</div>
                </div>
            </div>
        </section>

        <!-- CONSULTER URGEMMENT -->
        <section class="container" id="Contacts">
            <div class="container">
                <div class="urgence">
                    <div class="contact">
                        <h2 class="section-title">
                            <span dir="auto" style="vertical-align: inherit;">
                                <span dir="auto" style="vertical-align: inherit;">Contactez-nous</span>
                            </span>
                        </h2>
                        <ul class="ps-0">
                            <li class="d-flex mb-30"><i class="round-icon me-3 ti-mobile"></i>
                                <div class="align-self-center font-primary">
                                    <div class="text-dark">
                                        <span dir="auto" style="vertical-align: inherit;">
                                            <span dir="auto" style="vertical-align: inherit;">+237 98 30 87 80</span>
                                        </span><br>
                                        <span dir="auto" style="vertical-align: inherit;">
                                            <span dir="auto" style="vertical-align: inherit;">+237 93 30 40 49</span>
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-30"><i class="round-icon me-3 ti-email"></i>
                                <div class="align-self-center font-primary">
                                    <div class="text-dark"><a href="mailto:jahsauveyimele@gmail.com">
                                            <span dir="auto" style="vertical-align: inherit;">
                                                <span dir="auto" style="vertical-align: inherit;">
                                                    jahsauveymele@gmail.com
                                                </span>
                                            </span>
                                        </a><br><a href="mailto:jahsauveyimele@gmail.com">
                                            <span dir="auto" style="vertical-align: inherit;">
                                                <span dir="auto" style="vertical-align: inherit;">
                                                    jahsauveyimele@gmail.com
                                                </span>
                                            </span>
                                        </a></div>
                                </div>
                            </li>
                            <li class="d-flex mb-30"><i class="round-icon me-3 ti-map-alt"></i>
                                <div class="align-self-center font-primary">
                                    <div class="text-dark">
                                        <span dir="auto" style="vertical-align: inherit;">
                                            <span dir="auto" style="vertical-align: inherit;">BONABERI-DOUALA.
                                            </span>
                                        </span><br>
                                        <span dir="auto" style="vertical-align: inherit;">
                                            <span dir="auto" style="vertical-align: inherit;">Nord, Garoua,
                                                Littoral</span>
                                        </span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="contact appel">
                        <div class="cards">
                            <form action="#">
                                <div class="col-lg-12">
                                    <h3 class="mb-4">
                                        <span dir="auto" style="vertical-align: inherit;">
                                            <span dir="auto" style="vertical-align: inherit;">Formulaire de contact
                                            </span>
                                        </span>
                                    </h3>
                                </div>
                                <div class="col-6">
                                    <div class="col-lg-6">
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Nom"
                                            required="">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Adresse email" required="">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" name="subject" id="subject" class="form-control"
                                        placeholder="Votre contact" required="">
                                </div>
                                <div class="col-6">
                                    <textarea class="form-control p-2" name="message" id="message"
                                        placeholder="Votre message ici..." required="" style="height:150px">
                                    </textarea>
                                </div>
                                <div class="col-lg-12">
                                    <button class="btn btn-primary" type="submit">
                                        <span dir="auto" style="vertical-align: inherit;">
                                            <span dir="auto" style="vertical-align: inherit;">Soumettre</span>
                                        </span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Pied de page (commun à toutes les pages) -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Eco_santé</h3>
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
                    <p>+237 98 30 87 80</p>
                    <p>123 Rue de la Santé, Douala</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2023 Eco_santé. Tous droits réservés.</p>
            </div>
        </div>
    </footer>
    <script src="./assets/js/eco_sante.js"></script>
</body>

</html>