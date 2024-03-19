<?php

function generationEntete(string $titre, string $sous_titre): string
{
  // Voir pour le traitement si besoins des chaines
  return '<div class="py-5 text-center">
                <img class="d-block mx-auto mb-2" src="images/logo.png" alt="logo photoforyou" width="170" height="115">
                <h1 class="display-5">' . $titre . '</h1>
                <p class="lead">' . $sous_titre . '</p>
          </div>';
}

function validatePost($data)
{
  $errors = [];

  // Validation du matricule
  if (!isset ($data['matricule']) || empty ($data['matricule'])) {
    $errors['matricule'] = 'Le matricule est obligatoire.';
  } else if (!preg_match('/^[0-9]{6}$/', $data['matricule'])) {
    $errors['matricule'] = 'Le matricule doit être composé de 6 chiffres.';
  }

  // Validation de la date de naissance
  if (!isset ($data['date_naissance']) || empty ($data['date_naissance'])) {
    $errors['date_naissance'] = 'La date de naissance est obligatoire.';
  } else if (!preg_match('/^\d{2,4}-\d{1,2}-\d{2,4}$/', $data['date_naissance'])) {
    $errors['date_naissance'] = 'La date de naissance n\'est pas valide.';
  }

  // Validation du nom
  if (!isset ($data['nom']) || empty ($data['nom'])) {
    $errors['nom'] = 'Le nom est obligatoire.';
  } else if (!preg_match('/^[a-zA-Zéèêëïîôùûüÿ]+$/', $data['nom'])) {
    $errors['nom'] = 'Le nom ne doit contenir que des lettres.';
  }

  // Validation du prenom
  if (!isset ($data['prenom']) || empty ($data['prenom'])) {
    $errors['prenom'] = 'Le prenom est obligatoire.';
  } else if (!preg_match('/^[a-zA-Zéèêëïîôùûüÿ]+$/', $data['prenom'])) {
    $errors['prenom'] = 'Le prenom ne doit contenir que des lettres.';
  }

  // Validation du sexe
  if (!isset ($data['sexe']) || empty ($data['sexe'])) {
    $errors['sexe'] = 'Le sexe est obligatoire.';
  } else if ($data['sexe'] != 'féminin' && $data['sexe'] != 'masculin') {
    $errors['sexe'] = 'Le sexe doit être féminin ou masculin.';
  }

  // Validation du grade
  if (!isset ($data['grade']) || empty ($data['grade'])) {
    $errors['grade'] = 'Le grade est obligatoire.';
  } else if (!preg_match('/^[a-zA-Zéèêëïîôùûüÿ]+$/', $data['grade'])) {
    $errors['grade'] = 'Le grade ne doit contenir que des lettres.';
  }

  // Validation du telephone
  if (!isset ($data['telephone']) || empty ($data['telephone'])) {
    $errors['telephone'] = 'Le telephone est obligatoire.';
  } else if (!preg_match('/^[0-9]{10}$/', $data['telephone'])) {
    $errors['telephone'] = 'Le telephone doit être composé de 10 chiffres.';
  }

  // Validation du caserne
  if (!isset ($data['caserne']) || empty ($data['caserne'])) {
    $errors['caserne'] = 'Le caserne est obligatoire.';
  } else if (!preg_match('/^[a-zA-Zéèêëïîôùûüÿ]+$/', $data['caserne'])) {
    $errors['caserne'] = 'Le caserne ne doit contenir que des lettres.';
  }

  // Validation du type-pompier
  if (!isset ($data['type-pompier']) || empty ($data['type-pompier'])) {
    $errors['type-pompier'] = 'Le type-pompier est obligatoire.';
  } else if ($data['type-pompier'] != 'professionnel' && $data['type-pompier'] != 'volontaire') {
    $errors['type-pompier'] = 'Le type-pompier doit être Professionel ou Volontaire.';
  }

  return $errors;
}

function isValidDate($date)
{
  // Décomposition de la date
  $parts = explode('-', $date);

  // Vérification du nombre de parties
  if (count($parts) != 3) {
    return false;
  }

  // Vérification de la validité des champs
  if (!is_numeric($parts[0]) || !is_numeric($parts[1]) || !is_numeric($parts[2])) {
    return false;
  }

  // Vérification de la validité du jour
  if ($parts[0] < 1 || $parts[0] > 31) {
    return false;
  }

  // Vérification de la validité du mois
  if ($parts[1] < 1 || $parts[1] > 12) {
    return false;
  }

  // Vérification de la validité de l'année
  if ($parts[2] < 1900 || $parts[2] > 2100) {
    return false;
  }

  // Vérification de la validité de la date
  if (!checkdate($parts[1], $parts[0], $parts[2])) {
    return false;
  }

  return true;
}
?>