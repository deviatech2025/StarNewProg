// ===== MENU MOBILE =====
// const mobileMenu = document.getElementById("mobile-menu");
// const navMenu = document.querySelector(".nav-menu");

// mobileMenu.addEventListener("click", function () {
//   navMenu.classList.toggle("active");
// });
/*  javascript menu burger register */
const icon_bar_register=document.querySelector('.icon-bar-register');
const parent_bar_register=document.querySelector('.parent-bar-register');
console.log(parent_bar_register);
icon_bar_register.addEventListener('click',()=>
{ console.log(parent_bar_register);
  parent_bar_register.classList.toggle("vue");
  
})
/*end  javascript menu burger register */

// /*  javascript menu burger register */
// const icons_nav_bar=document.querySelector('.icons-nav-bar');
// const parents_nav_bar=document.querySelector('.parents-nav-bar');
// console.log(parents-nav-bar);
// icons_bar_register.addEventListener('click',()=>
// { console.log(parents-nav-bar);
//   parents-nav-bar.classList.toggle("vue");
  
// })
/*end  javascript menu burger register */
// ===== VALIDATION DES FORMULAIRES =====
// Regex pour validation
// const patterns = {
//   name: /^[a-zA-ZàâäéèêëïîôöùûüçÀÂÄÉÈÊËÏÎÔÖÙÛÜÇ\s-]{2,50}$/,
//   email: /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/,
//   phone: /^[0-9]{10}$/,
//   password: /^(?=.[a-z])(?=.[A-Z])(?=.*[0-9]).{8,}$/,
// };

// // Fonction de validation en temps réel
// function validateField(field, pattern) {
//   const value = field.value.trim();
//   const errorElement = field.nextElementSibling;

//   if (value === "") {
//     field.classList.remove("valid", "invalid");
//     errorElement.style.display = "none";
//     return false;
//   }

//   if (pattern.test(value)) {
//     field.classList.remove("invalid");
//     field.classList.add("valid");
//     errorElement.style.display = "none";
//     return true;
//   } else {
//     field.classList.remove("valid");
//     field.classList.add("invalid");
//     errorElement.style.display = "block";
//     return false;
//   }
// }

// // Validation formulaire d'inscription
// document.addEventListener("DOMContentLoaded", function () {
//   // Récupération des éléments du formulaire
//   const form = document.getElementById("register-form");
//   const fullnameInput = document.getElementById("fullname");
//   const emailInput = document.getElementById("register-email");
//   const passwordInput = document.getElementById("register-password");
//   const confirmPasswordInput = document.getElementById("confirm-password");
//   const phoneInput = document.getElementById("phone");
//   const submitButton = document.getElementById("register-btn");

//   // Expressions régulières pour la validation
//   const nameRegex = /^[a-zA-ZÀ-ÿ\s'-]{2,50}$/;
//   const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
//   const passwordRegex =
//     /^(?=.[a-z])(?=.[A-Z])(?=.\d)(?=.[@$!%?&])[A-Za-z\d@$!%?&]{8,}$/;
//   const phoneRegex = /^(?:\+237|237)?[2368]7$/;

//   // État de validation des champs
//   const validationState = {
//     fullname: false,
//     email: false,
//     password: false,
//     confirmPassword: false,
//     phone: false,
//   };

//   // Fonction pour mettre à jour l'état du bouton de soumission
//   function updateSubmitButton() {
//     const allValid = Object.values(validationState).every((state) => state);
//     submitButton.disabled = !allValid;
//   }

//   // Validation du nom complet
//   fullnameInput.addEventListener("input", function () {
//     const errorElement = document.getElementById("NameError");

//     if (!this.value.trim()) {
//       errorElement.textContent = "Le nom complet est requis";
//       this.classList.add("invalid");
//       this.classList.remove("valid");
//       validationState.fullname = false;
//     } else if (!nameRegex.test(this.value)) {
//       errorElement.textContent =
//         "Le nom doit contenir entre 2 et 50 caractères alphabétiques";
//       this.classList.add("invalid");
//       this.classList.remove("valid");
//       validationState.fullname = false;
//     } else {
//       errorElement.textContent = "";
//       this.classList.remove("invalid");
//       this.classList.add("valid");
//       validationState.fullname = true;
//     }

//     updateSubmitButton();
//   });

//   // Validation de l'email
//   emailInput.addEventListener("input", function () {
//     const errorElement = document.getElementById("loginEmailError");

//     if (!this.value.trim()) {
//       errorElement.textContent = "L'email est requis";
//       this.classList.add("invalid");
//       this.classList.remove("valid");
//       validationState.email = false;
//     } else if (!emailRegex.test(this.value)) {
//       errorElement.textContent = "Veuillez entrer une adresse email valide";
//       this.classList.add("invalid");
//       this.classList.remove("valid");
//       validationState.email = false;
//     } else {
//       errorElement.textContent = "";
//       this.classList.remove("invalid");
//       this.classList.add("valid");
//       validationState.email = true;
//     }

//     updateSubmitButton();
//   });

//   // Validation du mot de passe
//   passwordInput.addEventListener("input", function () {
//     const errorElement = document.getElementById("passwordError");

//     if (!this.value) {
//       errorElement.textContent = "Le mot de passe est requis";
//       this.classList.add("invalid");
//       this.classList.remove("valid");
//       validationState.password = false;
//     } else if (!passwordRegex.test(this.value)) {
//       errorElement.textContent =
//         "Le mot de passe doit contenir au moins 8 caractères, une majuscule, une minuscule, un chiffre et un caractère spécial";
//       this.classList.add("invalid");
//       this.classList.remove("valid");
//       validationState.password = false;
//     } else {
//       errorElement.textContent = "";
//       this.classList.remove("invalid");
//       this.classList.add("valid");
//       validationState.password = true;
//     }

//     // Re-valider la confirmation si le mot de passe change
//     if (confirmPasswordInput.value) {
//       confirmPasswordInput.dispatchEvent(new Event("input"));
//     }

//     updateSubmitButton();
//   });

//   // Validation de la confirmation du mot de passe
//   confirmPasswordInput.addEventListener("input", function () {
//     const errorElement = document.getElementById("ConfirmError");

//     if (!this.value) {
//       errorElement.textContent = "Veuillez confirmer votre mot de passe";
//       this.classList.add("invalid");
//       this.classList.remove("valid");
//       validationState.confirmPassword = false;
//     } else if (this.value !== passwordInput.value) {
//       errorElement.textContent = "Les mots de passe ne correspondent pas";
//       this.classList.add("invalid");
//       this.classList.remove("valid");
//       validationState.confirmPassword = false;
//     } else {
//       errorElement.textContent = "";
//       this.classList.remove("invalid");
//       this.classList.add("valid");
//       validationState.confirmPassword = true;
//     }

//     updateSubmitButton();
//   });

//   // Validation du numéro de téléphone
//   phoneInput.addEventListener("input", function () {
//     const errorElement = document.getElementById("TelError");

//     if (!this.value.trim()) {
//       errorElement.textContent = "Le numéro de téléphone est requis";
//       this.classList.add("invalid");
//       this.classList.remove("valid");
//       validationState.phone = false;
//     } else if (!phoneRegex.test(this.value)) {
//       errorElement.textContent =
//         "Veuillez entrer un numéro de téléphone français valide";
//       this.classList.add("invalid");
//       this.classList.remove("valid");
//       validationState.phone = false;
//     } else {
//       errorElement.textContent = "";
//       this.classList.remove("invalid");
//       this.classList.add("valid");
//       validationState.phone = true;
//     }

//     updateSubmitButton();
//   });

//   // Empêcher la soumission du formulaire si invalide
//   form.addEventListener("submit", function (e) {
//     if (submitButton.disabled) {
//       e.preventDefault();
//       // Forcer la validation de tous les champs
//       fullnameInput.dispatchEvent(new Event("input"));
//       emailInput.dispatchEvent(new Event("input"));
//       passwordInput.dispatchEvent(new Event("input"));
//       confirmPasswordInput.dispatchEvent(new Event("input"));
//       phoneInput.dispatchEvent(new Event("input"));
//     } else {
//       // Ici, normalement, on enverrait les données au serveur

//       alert("Formulaire validé avec succès! ");
//     }
//   });
// });

// ---- Données des spécialistes ----

const specialistsData = [
  {
    id: 1,
    nom: "Dr. Andre Dzudie",
    specialite: "Cardiologue",
    planning: "Lundi, Mercredi, Vendredi",
    creneaux: ["09:00", "11:00", "14:30"],
    image: "images/dr_Andre.jpg",
  },

  {
    id: 2,
    nom: "Dr. Joel Foko",
    specialite: "Neurologue",
    planning: "Mardi, Jeudi",
    creneaux: ["10:00", "15:00"],
    image: "images/dr_Joel.jpg",
  },

  {
    id: 3,
    nom: "Dr. Marc Santa",
    specialite: "Phytothérapeute",
    planning: "Tous les jours",
    creneaux: ["09:30", "11:30", "16:00"],
    image: "favorite/1750099474543.jpg",
  },

  {
    id: 4,
    nom: "Dr. Marc Santa",
    specialite: "Phytothérapeute",
    planning: "Tous les jours",
    creneaux: ["09:30", "11:30", "16:00"],
    image: "images/dr_Marc.jpg",
  },
];

// ---- Fonction pour afficher les spécialistes ----

function displaySpecialist(specialists) {
  // console.log("La fonction displaySpecialists est appelée.");
  const listContainer = document.getElementById("specialist-list");
  listContainer.innerHTML = ""; // Nettoyer la liste existante

  if (specialists.lengh === 0) {
    listContainer.innerHTML = "<p>Aucun spécialiste trouvé.</p>";
    return;
  }

  specialistsData.forEach((specialist) => {
    const specialistBlock = document.createElement("div");
    specialistBlock.classList.add("specialist-block");
    specialistBlock.innerHTML = `
        <div class="specialist-info">
            <img src="${specialist.image}" alt="Photo de ${specialist.nom}">
            <div class="details">
                <h3>${specialist.nom}</h3>
                <p class="specialty">${specialist.specialite}</p>
            </div>    
        </div>
        <div class="planning-info">
            <p><strong>Planning :</strong>${specialist.planning}</p>
         <p><strong>Crénaux :</strong>${specialist.creneaux.join(", ")}</p>
        </div>
        <div class="rdv-action">
            
            <button class="btn btn-rdv" data-id="${
              specialist.id
            }">Prendre un rendez-vous</button>
        </div>
        `;

    listContainer.appendChild(specialistBlock);
  });

  // ---- Ajout des évènements sur les boutons "Prendre un rendez-vous" ----

  document.querySelectorAll(".btn-rdv").forEach((button) => {
    button.addEventListener("click", (event) => {
      const specialistId = event.target.dataset.id;
      const specialist = specialistsData.find((s) => s.id == specialistId);
      if (specialist) {
        showModal(specialist);
      }
    });
  });
}

// ---- Fonctionnalité de recherche dynamique ----

const searchInput = document.getElementById("specialist-search");
searchInput.addEventListener("input", (event) => {
  const searchTerm = event.target.value.toLowerCase();
  const filteredSpecialists = specialistsData.filter(
    (specialist) =>
      specialist.nom.toLowerCase().includes(searchTerm) ||
      specialist.specialite.toLowerCase().includes(searchTerm)
  );
  displaySpecialist(filteredSpecialists);
});

// ---- Gestion du Modal ----

const modal = document.getElementById("rdv-modal");
const closeBtn = document.querySelector(".close-btn");

function showModal(specialist) {
  document.getElementById(
    "modal-specialist-name"
  ).textContent = `Prendre rendez-vous avec ${specialist.nom}`;
  modal.style.display = "block"; // Afficher le modal
}

function hideModal() {
  modal.style.display = "none"; // Cacher le modal
}

// Cacher le modal si l'utilisateur clique sur le bouton de fermeture ou en dehors du modal

closeBtn.addEventListener("click", hideModal);
window.addEventListener("click", (event) => {
  if (event.target === modal) {
    hideModal();
  }
});

// ---- Gestion de la soumission du formulaire du modal ----

const rdvForm = document.getElementById("rdv-form");
rdvForm.addEventListener("submit", (event) => {
  event.preventDefault(); // Empeche le chargement de la page

  const formData = new formData(rdvForm);
  const rdvData = Object.fromEntries(formData.entries());

  // Affichage des données dans la console

  console.log("Rendez-vous confirmé :", rdvData);

  // Fermeture du modal après soumission

  hideModal();

  // Redirection vers la page des rendez-vous

  window.location.href = "Rendezvous.html";
});

// Affichage de tous les specialistes au chargement de la page

document.addEventListener("DOMContentLoaded", () => {
  displaySpecialist(specialistsData);
});


// Afficher les notifications
const notificationsContainer = document.getElementById(
  "notifications-container"
);
if (notificationsContainer) {
  displayNotifications();
}

function displayNotifications() {
  notificationsContainer.innerHTML = "";

  notifications.forEach((notification) => {
    const notificationCard = document.createElement("div");
    notificationCard.className = "notification-card";
    // notificationCard.innerHTML = `
    //                 <div class="notification-header">
    //                     <h3>${notification.title}</h3>
    //                     <span class="notification-date">${
    //                       notification.date
    //                     }</span>
    //                 </div>
    //                 <p>${notification.content}</p>
    //                 <div class="notification-actions">
    //                     ${
    //                       notification.title.includes("visioconférence") ? (
    //                         <a href="#" class="video-link">
    //                           Rejoindre la visioconférence
    //                         </a>
    //                       ) : (
    //                         ""
    //                       )
    //                     }
    //                 </div>
    //             `;

    notificationsContainer.appendChild(notificationCard);
  });
}

// Afficher les ordonnances
const prescriptionsContainer = document.getElementById(
  "prescriptions-container"
);
if (prescriptionsContainer) {
  displayPrescriptions();
}

function displayPrescriptions() {
  prescriptionsContainer.innerHTML = "";

  prescriptions.forEach((prescription) => {
    const prescriptionCard = document.createElement("div");
    prescriptionCard.className = "prescription-card";
    prescriptionCard.innerHTML = `
                    <div class="prescription-header">
                        <h3>Ordonnance du ${prescription.date}</h3>
                        <span>Par ${prescription.doctor}</span>
                    </div>
                    <div class="prescription-details">
                        <div class="prescription-item">
                            <strong>Observations:</strong> ${prescription.observations}
                        </div>
                        <div class="prescription-item">
                            <strong>Recommandations:</strong> ${prescription.recommendations}
                        </div>
                        <div class="prescription-item">
                            <strong>Prochain rendez-vous:</strong> ${prescription.nextAppointment}
                        </div>
                        <div class="prescription-item">
                            <strong>Examens à faire:</strong> ${prescription.exams}
                        </div>
                    </div>
                `;

    prescriptionsContainer.appendChild(prescriptionCard);
  });
}

// ===== GESTION DU PROFIL =====
const editProfileBtn = document.getElementById("edit-profile");
const saveProfileBtn = document.getElementById("save-profile");
const profileForm = document.getElementById("profile-form");

if (editProfileBtn && saveProfileBtn && profileForm) {
  editProfileBtn.addEventListener("click", function () {
    // Activer l'édition des champs
    document.getElementById("profile-name").disabled = false;
    document.getElementById("profile-email").disabled = false;
    document.getElementById("profile-phone").disabled = false;
    document.getElementById("profile-password").disabled = false;

    // Changer le mot de passe en texte vide pour la modification
    document.getElementById("profile-password").value = "";

    // Activer le bouton de sauvegarde
    saveProfileBtn.disabled = false;
  });

  profileForm.addEventListener("submit", function (e) {
    e.preventDefault();

    // Désactiver l'édition des champs
    document.getElementById("profile-name").disabled = true;
    document.getElementById("profile-email").disabled = true;
    document.getElementById("profile-phone").disabled = true;
    document.getElementById("profile-password").disabled = true;

    // Remettre le mot de passe en placeholder
    document.getElementById("profile-password").value = "";

    // Désactiver le bouton de sauvegarde
    saveProfileBtn.disabled = true;

    // Afficher un message de confirmation
    alert("Profil mis à jour avec succès !");
  });
}

// ===== SIMULATION DE CHAT =====
const chatMessages = document.getElementById("chat-messages");
if (chatMessages) {
  // Messages initiaux de simulation
  const initialMessages = [
    {
      sender: "Médecin",
      text: "Bonjour, comment puis-je vous aider aujourd'hui ?",
      time: "10:30",
    },
    {
      sender: "Vous",
      text: "Bonjour docteur, j'ai des douleurs à la poitrine depuis ce matin.",
      time: "10:31",
    },
    {
      sender: "Médecin",
      text: "Pouvez-vous décrire la nature de cette douleur ?",
      time: "10:32",
    },
  ];

  // Afficher les messages initiaux
  initialMessages.forEach((message) => {
    addMessageToChat(message.sender, message.text, message.time);
  });

  // Simulation de réponse automatique après un délai
  setTimeout(() => {
    addMessageToChat(
      "Médecin",
      "Je vais vous prescrire un électrocardiogramme pour plus de sécurité.",
      "10:35"
    );
  }, 5000);
}

function addMessageToChat(sender, text, time) {
  const messageElement = document.createElement("div");
  messageElement.className =
    chat - message`${sender === "Vous" ? "own-message" : ""}`;
  messageElement.innerHTML = `
                <strong>${sender}:</strong> ${text} <span class="message-time">${time}</span>
            `;
  chatMessages.appendChild(messageElement);
  chatMessages.scrollTop = chatMessages.scrollHeight;
}
