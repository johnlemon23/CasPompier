<?php

require_once 'Pompier.class.php';

class PompierManager
{

    private $db;

    public function __construct(PDO $db)
    {
        // Connexion à la base de données
        $this->db = $db;
    }

    // Méthode pour ajouter un pompier
    public function add(Pompier $pompier)
    {
        $query = $this->db->prepare('INSERT INTO pompier (Matricule, DateNaissPompier, NomPompier, PrenomPompier, SexePompier, idGrade, TelPompier) VALUES (:matricule, :date_naissance, :nom, :prenom, :sexe, :grade, :telephone)');

        $query->bindValue(':matricule', $pompier->getMatricule());
        $query->bindValue(':date_naissance', $pompier->getDateNaissance());
        $query->bindValue(':nom', $pompier->getNom());
        $query->bindValue(':prenom', $pompier->getPrenom());
        $query->bindValue(':sexe', $pompier->getSexe());
        $query->bindValue(':grade', $pompier->getGrade());
        $query->bindValue(':telephone', $pompier->getTelephone());

        $query->execute();
    }

    // Méthode pour récupérer tous les pompiers
    public function getAllGrade()
    {
        // Exécute la requête SQL pour récupérer tous les grades
        $query = $this->db->query('SELECT * FROM grade');

        // Vérifie si la requête a réussi
        if ($query) {
            // Récupère les résultats de la requête
            $grades = $query->fetchall(PDO::FETCH_CLASS);
            var_dump($grades);

            // Retourne la liste des grades
            return $grades;
        } else {
            // Retourne false en cas d'échec de la requête
            return false;
        }
    }
    public function getAllCaserne()
    {
        // Exécute la requête SQL pour récupérer tous les grades
        $query = $this->db->query('SELECT * FROM caserne');

        // Vérifie si la requête a réussi
        if ($query) {
            // Récupère les résultats de la requête
            $casernes = $query->fetchall(PDO::FETCH_CLASS);
            var_dump($casernes);

            // Retourne la liste des grades
            return $casernes;
        } else {
            // Retourne false en cas d'échec de la requête
            return false;
        }
    }
}

?>