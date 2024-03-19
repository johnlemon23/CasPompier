<?php
require ("include/entete.inc.php");
include ("include/connection.inc.php");
require_once 'classes/Pompier.class.php';
require_once 'classes/PompierManager.class.php';
if (isset ($_POST['valider'])) {
    // Récupération des données POST
    $data = $_POST;

    // Validation des données
    $errors = validatePost($data);

    if (empty ($errors)) {
        // Création d'un objet Pompier
        $pompier = new Pompier();
        $pompier->hydrate($data);
        // Ajout du pompier en base de données
        $pompierManager = new PompierManager($db);
        $pompierManager->add($pompier);
        header('Location: inscriptionOK.php');
        exit;
    } else {
        // Affichage des erreurs
        foreach ($errors as $error) {
            echo '<p>' . $error . '</p>';
        }
    }
}
?>