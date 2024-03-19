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

        $query->bindValue(':Matricule', $pompier->getMatricule());
        $query->bindValue(':DateNaissPompier', $pompier->getDateNaissance());
        $query->bindValue(':NomPompier', $pompier->getNom());
        $query->bindValue(':PrenomPompier', $pompier->getPrenom());
        $query->bindValue(':SexePompier', $pompier->getSexe());
        $query->bindValue(':idGrade', $pompier->getGrade());
        $query->bindValue(':TelPompier', $pompier->getTelephone());

        $query->execute();
    }

    // Méthode pour récupérer tous les pompiers
    public function getAll()
    {
        $query = $this->db->query('SELECT * FROM pompier');
        $pompiers = [];

        while ($data = $query->fetch(PDO::FETCH_ASSOC)) {
            $pompier = new Pompier();
            $pompier->hydrate($data);
            $pompiers[] = $pompier;
        }

        return $pompiers;
    }

    // Méthode pour récupérer un pompier par son id
    public function getById($matricule)
    {
        $query = $this->db->prepare('SELECT * FROM pompier WHERE Matricule = :Matricule');
        $query->bindValue(':Matricule', $matricule);
        $query->execute();

        $data = $query->fetch(PDO::FETCH_ASSOC);

        if ($data) {
            $pompier = new Pompier();
            $pompier->hydrate($data);
            return $pompier;
        } else {
            return null;
        }
    }

    // Méthode pour mettre à jour un pompier
    public function update(Pompier $pompier)
    {
        $query = $this->db->prepare('UPDATE pompier SET matricule = :matricule, date_naissance = :date_naissance, nom = :nom, prenom = :prenom, sexe = :sexe, grade = :grade, telephone = :telephone, caserne = :caserne, type_pompier = :type_pompier WHERE id = :id');

        $query->bindValue(':id', $pompier->getId());
        $query->bindValue(':matricule', $pompier->getMatricule());
        $query->bindValue(':date_naissance', $pompier->getDateNaissance());
        $query->bindValue(':nom', $pompier->getNom());
        $query->bindValue(':prenom', $pompier->getPrenom());
        $query->bindValue(':sexe', $pompier->getSexe());
        $query->bindValue(':grade', $pompier->getGrade());
        $query->bindValue(':telephone', $pompier->getTelephone());
        $query->bindValue(':caserne', $pompier->getCaserne());
        $query->bindValue(':type_pompier', $pompier->getTypePompier());

        $query->execute();
    }

    // Méthode pour supprimer un pompier
    public function delete($id)
    {
        $query = $this->db->prepare('DELETE FROM pompiers WHERE id = :id');
        $query->bindValue(':id', $id);
        $query->execute();
    }

}

?>