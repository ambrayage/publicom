DROP DATABASE IF EXISTS mlr_publicom;

CREATE DATABASE IF NOT EXISTS mlr_publicom;
USE mlr_publicom;
# -----------------------------------------------------------------------------
#       TABLE : UTILISATEUR
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS UTILISATEUR
 (
   IDUTILISATEUR INTEGER NOT NULL AUTO_INCREMENT,
   IDENTIFIANTUTILISATEUR VARCHAR(32) NULL  ,
   MOTDEPASSEUTILISATEUR VARCHAR(255) NULL  ,
   NOMUTILISATEUR VARCHAR(32) NULL  ,
   PRENOMUTILISATEUR VARCHAR(32) NULL  
   , PRIMARY KEY (IDUTILISATEUR) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : HISTORIQUE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS HISTORIQUE
 (
   IDHISTORIQUE INTEGER NOT NULL AUTO_INCREMENT,
   IDMESSAGE INTEGER NOT NULL  ,
   IDUTILISATEUR INTEGER NOT NULL  ,
   HISTORIQUETITREMESSAGE VARCHAR(32) NULL  ,
   HISTORIQUETEXTEMESSAGE VARCHAR(160) NULL  ,
   HISTORIQUEDATEHEUREMESSAGE DATETIME NULL  
   , PRIMARY KEY (IDHISTORIQUE) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : MESSAGE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS MESSAGE
 (
   IDMESSAGE INTEGER NOT NULL AUTO_INCREMENT,
   IDUTILISATEUR INTEGER NOT NULL  ,
   TITREMESSAGE VARCHAR(32) NULL  ,
   TEXTEMESSAGE VARCHAR(160) NULL  ,
   DATEHEUREMESSAGE DATETIME NULL  ,
   STATUTMESSAGE BOOL NULL  ,
   CREATEURMESSAGE VARCHAR(32) NULL  
   , PRIMARY KEY (IDMESSAGE) 
 ) 
 comment = "";


# -----------------------------------------------------------------------------
#       CREATION DES REFERENCES DE TABLE
# -----------------------------------------------------------------------------


ALTER TABLE HISTORIQUE 
  ADD FOREIGN KEY FK_HISTORIQUE_MESSAGE (IDMESSAGE)
      REFERENCES MESSAGE (IDMESSAGE) ;


ALTER TABLE HISTORIQUE 
  ADD FOREIGN KEY FK_HISTORIQUE_UTILISATEUR (IDUTILISATEUR)
      REFERENCES UTILISATEUR (IDUTILISATEUR) ;


ALTER TABLE MESSAGE 
  ADD FOREIGN KEY FK_MESSAGE_UTILISATEUR (IDUTILISATEUR)
      REFERENCES UTILISATEUR (IDUTILISATEUR) ;

