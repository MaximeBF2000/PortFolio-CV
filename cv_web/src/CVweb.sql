--Old CV database : updated version directly created on phpmyadmin

-- Drop tables

DROP TABLE IF EXISTS CV;
DROP TABLE IF EXISTS EXPERIENCE;
DROP TABLE IF EXISTS CARACTERE;
DROP TABLE IF EXISTS COMPETENCE;
DROP TABLE IF EXISTS PROJET;
DROP TABLE IF EXISTS UTILISATEUR;


-- Creation des tables

CREATE TABLE CV (
    id INT NOT NULL PRIMARY KEY,
    nom_cv VARCHAR(255) NOT NULL,
    prenom_cv VARCHAR(255) NOT NULL,
    dateNaissance_cv DATE NOT NULL,
    status_cv VARCHAR(255) NOT NULL,
    adress_cv VARCHAR(255),
    mail_cv VARCHAR(255),
    id_experience INT NOT NULL,
    id_caractere INT NOT NULL,
    id_competence INT NOT NULL,
    id_projet INT NOT NULL,
    CONSTRAINT fk_cv_experience FOREIGN KEY (id_experience) REFERENCES EXPERIENCE (id_experience),
    CONSTRAINT fk_cv_caractere FOREIGN KEY (id_caractere) REFERENCES CARACTERE (id_caractere),
    CONSTRAINT fk_cv_competence FOREIGN KEY (id_competence) REFERENCES COMPETENCE (id_competence),
    CONSTRAINT fk_cv_projet FOREIGN KEY (id_projet) REFERENCES PROJET (id_projet)
);

CREATE TABLE EXPERIENCE (
    id_experience INT NOT NULL PRIMARY KEY,
    nom_experience VARCHAR(255) NOT NULL,
    dateAquisition_experience DATE,
    dureeAquisition_experience VARCHAR(255),
    lieuAquisition_experience VARCHAR(255),
    diplome_experience VARCHAR(255)
);

CREATE TABLE CARACTERE (
    id_caractere INT NOT NULL PRIMARY KEY,
    nom_caractere VARCHAR NOT NULL,
    description_caractere VARCHAR(800) NOT NULL
);

CREATE TABLE COMPETENCE (
    id_competence INT NOT NULL PRIMARY KEY,
    nom_competence VARCHAR(255) NOT NULL,
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

INSERT INTO CV VALUES (1, "BOUNAAS", "Maxime", 18, "Etudiant Ynov Lyon", "monAdresse", "maxime.bounaas@gmail.com");

INSERT INTO EXPERIENCE VALUES (1, "Etude general college", "2010", "4 ans", "College Pierre Brossolette", "Brevet des college");
INSERT INTO EXPERIENCE VALUES (2, "Etude scientifique lycee", "2015", "3 ans", "Lycee Parc Chabriere", "Bac S option Ingenieur");
INSERT INTO EXPERIENCE VALUES (3, "Etude informatique", "2018", "3 ans", "Ynov Lyon", "Bachelor Informatique");

INSERT INTO CARACTERE VALUES (1, "Dynamique", "Determine dans la realisation de mes projets, je m'assure d'etre le plus efficace et energique possible dans tout ce que je fais. Je fais egalement attention à avoir un style de vie sain pour toujours regorger d'energie.")
INSERT INTO CARACTERE VALUES (2, "Autodidacte", "L'envie de creer des choses d'une maniere plus creative que le commun m'a inscite tres tôt à apprendre les choses par moi même et en utilisant mes propres methodes. La lecture, l'apprentissage par le test et via des formations en ligne sont les principaux outils que j'utilise.")
INSERT INTO CARACTERE VALUES (3, "Determine", "...");
INSERT INTO CARACTERE VALUES (4, "Social", "...");

INSERT INTO COMPETENCE VALUES (1, "HTML / CSS", "Developpement web", "80%");
INSERT INTO COMPETENCE VALUES (2, "Javascript", "Developpement web", "55%");
INSERT INTO COMPETENCE VALUES (3, "PHP", "Developpement web", "10%");
INSERT INTO COMPETENCE VALUES (4, "SQL", "Developpement web", "40%");

INSERT INTO PROJET VALUES (1, "Foodtruck online", "...");
INSERT INTO PROJET VALUES (2, "Site vitrine pour commerce de vin", "...");
INSERT INTO PROJET VALUES (3, "Todo List web application", "...");


--REQUETES









