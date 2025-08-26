DROP DATABASE IF EXISTS Eco-Sante;

CREATE DATABASE IF NOT EXISTS Eco-Sante;
USE Eco-Sante;
# -----------------------------------------------------------------------------
#       TABLE : NOTIFICATION
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS NOTIFICATION
 (
   IDNOTIFICATION INTEGER NOT NULL auto_increment ,
   IDUSER INTEGER NOT NULL  ,
   OBJET VARCHAR(128)   ,
   DESCRIPTION TEXT   ,
   STATUT VARCHAR(128)   
   , PRIMARY KEY (IDNOTIFICATION) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE NOTIFICATION
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_NOTIFICATION_USER
     ON NOTIFICATION (IDUSER ASC);

# -----------------------------------------------------------------------------
#       TABLE : USER
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS USER
 (
   IDUSER INTEGER NOT NULL auto_increment ,
   IDSPECIALITE INTEGER   ,
   NOM VARCHAR(128)   ,
   PRENOM VARCHAR(128)   ,
   SEXE VARCHAR(128)   ,
   ADRESSE TEXT   ,
   TELEPHONE VARCHAR(128)  ,
   EMAIL VARCHAR(128)   ,
   PASSWORD VARCHAR(128)   ,
   ROLE VARCHAR(128)   ,
   photo text ,
   STATUT VARCHAR(128)   
   , PRIMARY KEY (IDUSER) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE USER
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_USER_SPECIALITE
     ON USER (IDSPECIALITE ASC);

# -----------------------------------------------------------------------------
#       TABLE : RDV
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS RDV
 (
   IDRDV INTEGER NOT NULL  auto_increment,
   IDUSER INTEGER NOT NULL  ,
   IDUSER_ASSO_8 INTEGER NOT NULL  ,
   MOTIF TEXT   ,
   DUREE REAL   ,
   DATE_RDV DATETIME   ,
   STATUT VARCHAR(128)   
   , PRIMARY KEY (IDRDV) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE RDV
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_RDV_USER
     ON RDV (IDUSER ASC);

CREATE  INDEX I_FK_RDV_USER1
     ON RDV (IDUSER_ASSO_8 ASC);

# -----------------------------------------------------------------------------
#       TABLE : COMPOSITION
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS COMPOSITION
 (
   IDCOMPOSITION INTEGER NOT NULL auto_increment  ,
   IDSUIVIE INTEGER NOT NULL  ,
   INTITULE VARCHAR(128) NULL  ,
   DESCRIPTION TEXT NULL  
   , PRIMARY KEY (IDCOMPOSITION) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE COMPOSITION
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_COMPOSITION_SUIVIE
     ON COMPOSITION (IDSUIVIE ASC);

# -----------------------------------------------------------------------------
#       TABLE : AVIS
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS AVIS
 (
   IDAVIS INTEGER NOT NULL auto_increment ,
   IDUSER INTEGER NOT NULL  ,
   NOTE REAL NULL  ,
   MESSAGE TEXT NULL  
   , PRIMARY KEY (IDAVIS) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE AVIS
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_AVIS_USER
     ON AVIS (IDUSER ASC);

# -----------------------------------------------------------------------------
#       TABLE : EXAMEN
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS EXAMEN
 (
   IDEXAMEN INTEGER NOT NULL  auto_increment,
   IDSUIVIE INTEGER NOT NULL  ,
   INTITULE VARCHAR(128)   ,
   DESCRIPTION TEXT 
   , PRIMARY KEY (IDEXAMEN) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE EXAMEN
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_EXAMEN_SUIVIE
     ON EXAMEN (IDSUIVIE ASC);

# -----------------------------------------------------------------------------
#       TABLE : SPECIALITE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS SPECIALITE
 (
   IDSPECIALITE INTEGER NOT NULL auto_increment ,
   INTITULE VARCHAR(128)   ,
   MONTANT_CONSULTATION REAL   ,
   TAUX REAL
   , PRIMARY KEY (IDSPECIALITE) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : SUIVIE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS SUIVIE
 (
   IDSUIVIE INTEGER NOT NULL  auto_increment ,
   OBSERVATION TEXT NULL  ,
   RECOMMENDATIONS TEXT  ,
   NATURE_RDV VARCHAR(128)   ,
   DATE_RDV DATETIME  
   , PRIMARY KEY (IDSUIVIE) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : CONSULTATION
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS CONSULTATION
 (
   IDCONSULTATION INTEGER NOT NULL auto_increment ,
   IDUSER INTEGER NOT NULL  ,
   IDUSER_ASSO_5 INTEGER NOT NULL  ,
   IDSUIVIE INTEGER NOT NULL  ,
   IDMODE_PAIEMENT INTEGER NOT NULL  ,
   REFERENCE VARCHAR(128)   ,
   POIDS REAL   ,
   TAILLE REAL   ,
   TENSION VARCHAR(128)   ,
   MONTANT REAL   ,
   STATUT VARCHAR(128) 
   , PRIMARY KEY (IDCONSULTATION) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE CONSULTATION
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_CONSULTATION_USER
     ON CONSULTATION (IDUSER ASC);

CREATE  INDEX I_FK_CONSULTATION_USER1
     ON CONSULTATION (IDUSER_ASSO_5 ASC);

CREATE  INDEX I_FK_CONSULTATION_SUIVIE
     ON CONSULTATION (IDSUIVIE ASC);

CREATE  INDEX I_FK_CONSULTATION_MODE_PAIEMENT
     ON CONSULTATION (IDMODE_PAIEMENT ASC);

# -----------------------------------------------------------------------------
#       TABLE : MODE_PAIEMENT
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS MODE_PAIEMENT
 (
   IDMODE_PAIEMENT INTEGER NOT NULL  ,
   INTITULE VARCHAR(128) NULL  
   , PRIMARY KEY (IDMODE_PAIEMENT) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : PLANNING
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS PLANNING
 (
   IDPLANNING INTEGER NOT NULL auto_increment ,
   IDUSER INTEGER NOT NULL  ,
   JOUR VARCHAR(128)  ,
   HEURE_DEBUT TIME  ,
   HEURE_FIN TIME   
   , PRIMARY KEY (IDPLANNING) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE PLANNING
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_PLANNING_USER
     ON PLANNING (IDUSER ASC);


# -----------------------------------------------------------------------------
#       CREATION DES REFERENCES DE TABLE
# -----------------------------------------------------------------------------


ALTER TABLE NOTIFICATION 
  ADD FOREIGN KEY FK_NOTIFICATION_USER (IDUSER)
      REFERENCES USER (IDUSER) ;


ALTER TABLE USER 
  ADD FOREIGN KEY FK_USER_SPECIALITE (IDSPECIALITE)
      REFERENCES SPECIALITE (IDSPECIALITE) ;


ALTER TABLE RDV 
  ADD FOREIGN KEY FK_RDV_USER (IDUSER)
      REFERENCES USER (IDUSER) ;


ALTER TABLE RDV 
  ADD FOREIGN KEY FK_RDV_USER1 (IDUSER_ASSO_8)
      REFERENCES USER (IDUSER) ;


ALTER TABLE COMPOSITION 
  ADD FOREIGN KEY FK_COMPOSITION_SUIVIE (IDSUIVIE)
      REFERENCES SUIVIE (IDSUIVIE) ;


ALTER TABLE AVIS 
  ADD FOREIGN KEY FK_AVIS_USER (IDUSER)
      REFERENCES USER (IDUSER) ;


ALTER TABLE EXAMEN 
  ADD FOREIGN KEY FK_EXAMEN_SUIVIE (IDSUIVIE)
      REFERENCES SUIVIE (IDSUIVIE) ;


ALTER TABLE CONSULTATION 
  ADD FOREIGN KEY FK_CONSULTATION_USER (IDUSER)
      REFERENCES USER (IDUSER) ;


ALTER TABLE CONSULTATION 
  ADD FOREIGN KEY FK_CONSULTATION_USER1 (IDUSER_ASSO_5)
      REFERENCES USER (IDUSER) ;


ALTER TABLE CONSULTATION 
  ADD FOREIGN KEY FK_CONSULTATION_SUIVIE (IDSUIVIE)
      REFERENCES SUIVIE (IDSUIVIE) ;


ALTER TABLE CONSULTATION 
  ADD FOREIGN KEY FK_CONSULTATION_MODE_PAIEMENT (IDMODE_PAIEMENT)
      REFERENCES MODE_PAIEMENT (IDMODE_PAIEMENT) ;


ALTER TABLE PLANNING 
  ADD FOREIGN KEY FK_PLANNING_USER (IDUSER)
      REFERENCES USER (IDUSER) ;

