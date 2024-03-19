
INSERT INTO grade (idGrade, LblGrade) VALUES
(1, 'auxiliaire'),
(2, 'sapeur 2ème classe'),
(3, 'sapeur 1ère classe'),
(4, 'caporal'),
(5, 'caporal-chef'),
(6, 'sergent'),
(7, 'sergent-chef'),
(8, 'adjudant'),
(9, 'adjudant-chef'),
(10, 'lieutenant'),
(11, 'capitaine'),
(12, 'commandant'),
(13, 'lieutenant-colonel');

INSERT INTO caserne (idCaserne, NomCaserne) VALUES
(1, 'Ouessant'),
(2, 'Carcassonne'),
(3, 'Lille');

INSERT INTO employeur (idEmployeur, NomEmployeur, PrenomEmployeur, TelEmployeur) VALUES
(3, 'VERSE', 'Alain', '0676542431'),
(4, 'NALINE', 'André', '0454245142'),
(5, 'ZOLE', 'Camille', '0676524156');

INSERT INTO habilitation (idHabilitation, LblHabilitation) VALUES
(1, 'conducteur de véhicule de secours à personne et d\'autres matériels'),
(2, 'chef d\'agrès fourgon pompe tonne secours à victimes'),
(3, 'équipier incendie'),
(4, 'équipier échelle pivotante automatique');

INSERT INTO naturesinistre (idNatureSinistre, LblNatureSinistre) VALUES
(1, 'feu dans un appartement'),
(2, 'feu de forêt'),
(3, 'autre');

INSERT INTO typeengin (idTypeEngin, LblEngincol) VALUES
('EPA', 'échelle pivotante automatique'),
('FPT', 'fourgon pompe-tonne'),
('VSAV', 'véhicule de secours aux victimes');

INSERT INTO pompier (Matricule, NomPompier, PrenomPompier, DateNaissPompier, TelPompier, SexePompier, idGrade) VALUES
('654352', 'Clette', 'Lara', '1987-03-11', '0642786352', 'féminin', '3'),
('782312', 'Esur', 'Janette', '1982-02-11', '0627371273', 'féminin', '3'),
('786572', 'Abri', 'Gauthier', '1972-05-12', '0676542532', 'masculin', '10'),
('986995', 'Dumonte!', 'Robert', '1969-10-10', '0298568542', 'masculin', '11'),
('992312', 'Balle', 'Jean', '1982-07-12', '0678652354', 'masculin', '2');

INSERT INTO professionnel (MatPro, DateEmbauche, Indice) VALUES
('786572', '1997-06-05', '300');

INSERT INTO volontaire (MatVolontaire, Bip, IdEmployeur) VALUES
('986995', '15', '3');

INSERT INTO exercer (Matricule, IdHabilitation, Date) VALUES
('782312', '3', '2019-10-12'),
('986995', '1', '1980-12-03'),
('986995', '2', '1982-08-12');

INSERT INTO affectation (Matricule, Date, IdCaserne) VALUES
('986995', '2005-05-14', '1'),
('986995', '1984-03-10', '2'),
('986995', '1980-02-12', '3'),
('986995', '2001-07-12', '3');

INSERT INTO engin (Numéro, idCaserne, idTypeEngin) VALUES
('1', 1, 'EPA'),
('2', 1, 'EPA');

