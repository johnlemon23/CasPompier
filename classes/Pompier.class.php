<?php

class Pompier
{

    // Attributs
    private $id;
    private $matricule;
    private $date_naissance;
    private $nom;
    private $prenom;
    private $sexe;
    private $grade;
    private $telephone;
    private $caserne;
    private $type_pompier;

    // Méthodes
    public function __construct()
    {
        // Initialisation des attributs
        $this->id = null;
        $this->matricule = null;
        $this->date_naissance = null;
        $this->nom = null;
        $this->prenom = null;
        $this->sexe = null;
        $this->grade = null;
        $this->telephone = null;
        $this->caserne = null;
        $this->type_pompier = null;
    }

    // Getters et setters
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getMatricule()
    {
        return $this->matricule;
    }

    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;
    }

    public function getDateNaissance()
    {
        return $this->date_naissance;
    }

    public function setDateNaissance($date_naissance)
    {
        $this->date_naissance = $date_naissance;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function getSexe()
    {
        return $this->sexe;
    }

    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    }

    public function getGrade()
    {
        return $this->grade;
    }

    public function setGrade($grade)
    {
        $this->grade = $grade;
    }

    public function getTelephone()
    {
        return $this->telephone;
    }

    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    public function getCaserne()
    {
        return $this->caserne;
    }

    public function setCaserne($caserne)
    {
        $this->caserne = $caserne;
    }

    public function getTypePompier()
    {
        return $this->type_pompier;
    }

    public function setTypePompier($type_pompier)
    {
        $this->type_pompier = $type_pompier;
    }

    // Méthode pour hydrater l'objet
    public function hydrate(array $data)
    {
        foreach ($data as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

}

?>