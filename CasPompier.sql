-- Création des tables

CREATE TABLE Employeur (
    idEmployeur INT PRIMARY KEY,
    NomEmployeur VARCHAR(255) NOT NULL,
    PrenomEmployeur VARCHAR(255) NOT NULL,
    TelEmployeur VARCHAR(255) NOT NULL
);

CREATE TABLE Habilitation (
    idHabilitation INT PRIMARY KEY,
    LblHabilitation VARCHAR(255) NOT NULL
);

CREATE TABLE Caserne (
    idCaserne INT PRIMARY KEY,
    NomCaserne VARCHAR(255) NOT NULL
);

CREATE TABLE TypeEngin (
    idTypeEngin INT PRIMARY KEY,
    LblEngincol VARCHAR(255) NOT NULL
);

CREATE TABLE NatureSinistre (
    idNatureSinistre INT PRIMARY KEY,
    LblNatureSinistre VARCHAR(255) NOT NULL
);

CREATE TABLE Grade (
    idGrade INT PRIMARY KEY,
    LblGrade VARCHAR(255) NOT NULL
);

CREATE TABLE Pompier (
    Matricule INT PRIMARY KEY,
    NomPompier VARCHAR(255) NOT NULL,
    PrenomPompier VARCHAR(255) NOT NULL,
    DateNaissPompier DATE NOT NULL,
    TelPompier VARCHAR(255) NOT NULL,
    SexePompier VARCHAR(1) NOT NULL,
    idGrade INT,
    FOREIGN KEY (idGrade) REFERENCES Grade (idGrade)
);

CREATE TABLE Professionnel (
    MatPro INT PRIMARY KEY,
    DateEmbauche DATE NOT NULL,
    Indice INT NOT NULL
);

CREATE TABLE Volontaire (
    MatVolontaire INT PRIMARY KEY,
    Bip VARCHAR(255) NOT NULL,
    idEmployeur INT,
    FOREIGN KEY (idEmployeur) REFERENCES Employeur (idEmployeur)
);

CREATE TABLE Réclamer (
    idTypeEngin INT,
    idHabilitation INT,
    nb INT,
    PRIMARY KEY (idTypeEngin, idHabilitation)
);

CREATE TABLE Prévoir (
    idTypeEngin INT,
    idNatureSinistre INT,
    PRIMARY KEY (idTypeEngin, idNatureSinistre)
);

CREATE TABLE Exercer (
    Matricule INT,
    idHabilitation INT,
    Date DATE,
    PRIMARY KEY (Matricule, idHabilitation)
);

CREATE TABLE Affectation (
    Matricule INT,
    Date DATE,
    idCaserne INT,
    PRIMARY KEY (Matricule, Date)
);

CREATE TABLE Engin (
    Numéro VARCHAR(255) NOT NULL,
    idCaserne INT,
    idTypeEngin INT,
    PRIMARY KEY (Numéro, idCaserne, idTypeEngin)
);

-- Définir les clés étrangères

ALTER TABLE Pompier
    ADD FOREIGN KEY (idGrade)
    REFERENCES Grade (idGrade);

ALTER TABLE Volontaire
    ADD FOREIGN KEY (idEmployeur)
    REFERENCES Employeur (idEmployeur);

ALTER TABLE Réclamer
    ADD FOREIGN KEY (idTypeEngin)
    REFERENCES TypeEngin (idTypeEngin);

ALTER TABLE Réclamer
    ADD FOREIGN KEY (idHabilitation)
    REFERENCES Habilitation (idHabilitation);

ALTER TABLE Prévoir
    ADD FOREIGN KEY (idTypeEngin)
    REFERENCES TypeEngin (idTypeEngin);

ALTER TABLE Prévoir
    ADD FOREIGN KEY (idNatureSinistre)
    REFERENCES NatureSinistre (idNatureSinistre);

ALTER TABLE Exercer
    ADD FOREIGN KEY (Matricule)
    REFERENCES Pompier (Matricule);

ALTER TABLE Exercer
    ADD FOREIGN KEY (idHabilitation)
    REFERENCES Habilitation (idHabilitation);

ALTER TABLE Affectation
    ADD FOREIGN KEY (Matricule)
    REFERENCES Pompier (Matricule);

ALTER TABLE Affectation
    ADD FOREIGN KEY (idCaserne)
    REFERENCES Caserne (idCaserne);

ALTER TABLE Engin
    ADD FOREIGN KEY (idCaserne)
    REFERENCES Caserne (idCaserne);

ALTER TABLE Engin
    ADD FOREIGN KEY (idTypeEngin)
    REFERENCES TypeEngin (idTypeEngin);
