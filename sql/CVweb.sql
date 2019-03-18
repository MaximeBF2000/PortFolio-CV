-- Creation des tables

CREATE TABLE CV (
    id_cv INT NOT NULL PRIMARY KEY,
    nom_cv VARCHAR NOT NULL,
    prenom_cv VARCHAR NOT NULL,
    age_cv INT NOT NULL,
    status_cv VARCHAR NOT NULL,
    adress_cv VARCHAR,
    mail_cv VARCHAR,
    CONSTRAINT fk_cv_experience FOREIGN KEY (id_experience) REFERENCES EXPERIENCE (id_experience),
    CONSTRAINT fk_cv_caractere FOREIGN KEY (id_caractere) REFERENCES CARACTERE (id_caractere),
    CONSTRAINT fk_cv_competence FOREIGN KEY (id_competence) REFERENCES COMPETENCE (id_competence),
    CONSTRAINT fk_cv_projet FOREIGN KEY (id_projet) REFERENCES PROJET (id_projet)
);

CREATE TABLE EXPERIENCE (
    id_experience INT NOT NULL PRIMARY KEY,
    nom_experience VARCHAR NOT NULL,
    dateAquisition_experience DATE,
    dureeAquisition_experience VARCHAR,
    lieuAquisition_experience VARCHAR,
    diplome_experience VARCHAR
);

CREATE TABLE CARACTERE (
    id_caractere INT NOT NULL PRIMARY KEY,
    nom_caractere VARCHAR NOT NULL,
    description_caractere VARCHAR NOT NULL
);

CREATE TABLE COMPETENCE (
    id_competence INT NOT NULL PRIMARY KEY,
    nom_competence VARCHAR NOT NULL,
    domaine_competence VARCHAR NOT NULL,
    level_competence VARCHAR NOT NULL
);

CREATE TABLE PROJET (
    id_projet INT NOT NULL PRIMARY KEY,
    nom_projet VARCHAR NOT NULL,
    description_projet VARCHAR NOT NULL
);

CREATE TABLE UTILISATEUR (
    id_utilisateur INT NOT NULL,
    nom_utilisateur VARCHAR NOT NULL,
    prenom_utilisateur VARCHAR NOT NULL,
    message_utilisateur VARCHAR NOT NULL,
    mail_utilisateur VARCHAR NOT NULL,
    password_utilisateur VARCHAR NOT NULL
);


-- INSERTION

INSERT INTO CV VALUES ("1", "BOUNAAS", "Maxime", "18", "Etudiant Ynov Lyon", "monAdresse", "maxime.bounaas@gmail.com");

INSERT INTO EXPERIENCE VALUES ("1", "Etude général collège", "2010", "4 ans", "Collège Pierre Brossolette", "Brevet des collège");
INSERT INTO EXPERIENCE VALUES ("2", "Etude scientifique lycée", "2015", "3 ans", "Lycée Parc Chabrière", "Bac S option Ingénieur");
INSERT INTO EXPERIENCE VALUES ("3", "Etude informatique", "2018", "3 ans", "Ynov Lyon", "Bachelor Informatique");

INSERT INTO CARACTERE VALUES ("1", "Dynamique", "Déterminé dans la réalisation de mes projets, je m'assure d'être le plus efficace et énérgique possible dans tout ce que je fais. Je fais également attention à avoir un style de vie sain pour toujours regorger d'énergie.")
INSERT INTO CARACTERE VALUES ("2", "Autodidacte", "L'envie de créer des choses d'une manière plus créative que le commun m'a inscité très tôt à apprendre les choses par moi même et en utilisant mes propres méthodes. La lecture, l'apprentissage par le test et via des formations en ligne sont les principaux outils que j'utilise.")
INSERT INTO CARACTERE VALUES ("3", "Déterminé", "");
INSERT INTO CARACTERE VALUES ("4", "Social", "");

INSERT INTO COMPETENCE VALUES ("1", "HTML / CSS", "Développement web", "80%");
INSERT INTO COMPETENCE VALUES ("2", "Javascript", "Développement web", "55%");
INSERT INTO COMPETENCE VALUES ("3", "PHP", "Développement web", "10%");
INSERT INTO COMPETENCE VALUES ("4", "SQL", "Développement web", "40%");

INSERT INTO PROJET VALUES ("1", "Foodtruck online", "");
INSERT INTO PROJET VALUES ("2", "Site vitrine pour commerce de vin", "");
INSERT INTO PROJET VALUES ("3", "Todo List web application", "");



--REQUETES








