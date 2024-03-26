<?php
include ("include/entete.inc.php");
include ("include/connection.inc.php");
require_once 'classes/Pompier.class.php';
require_once 'classes/PompierManager.class.php';
$pompierManager = new PompierManager($db);
?>
<div class="container">

  <div class="jumbotron">
    <h2>Inscription</h2>
    <legend>Merci de remplir ce formulaire d'inscription.</legend>
    <hr />
  </div>
  <form action="traitement.php" method="post">
    <div class="form-group">
      <label for="matricule">Matricule</label>
      <input type="text" class="form-control" id="matricule" name="matricule" placeholder="Ex: 876524" required>
    </div>
    <div class="form-group">
      <label for="date-naissance">Date de Naissance</label>
      <input type="date" class="form-control" id="date-naissance" name="date_naissance" required>
    </div>
    <div class=" form-group">
      <label for="nom">Nom</label>
      <input type="text" class="form-control" id="nom" name="nom" required />
    </div>
    <div class="form-group">
      <label for="prenom">Prénom</label>
      <input type="text" class="form-control" id="prenom" name="prenom" required />
    </div>
    <div class="form-group">
      <label for="sexe">Sexe</label>
      <select class="form-control" id="sexe" name="sexe" required>
        <option value="féminin">Féminin</option>
        <option value="masculin">Masculin</option>
      </select>
    </div>
    <div class="form-group">
      <label for="grade">Grade</label>
      <select class="form-control" id="grade" name="grade">
        <?php foreach ($pompierManager->getAllGrade() as $grade): ?>
          <option value="<?php echo $grade->idGrade; ?>">
            <?php echo $grade->LblGrade; ?>
          </option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="form-group">
      <label for="telephone">Téléphone</label>
      <input type="text" class="form-control" id="telephone" name="telephone" required />
    </div>
    <div class="form-group">
      <label for="caserne">Caserne</label>
      <select class="form-control" id="caserne" name="caserne">
        <?php foreach ($pompierManager->getAllCaserne() as $caserne): ?>
          <option value="<?php echo $caserne->idCaserne; ?>">
            <?php echo $caserne->NomCaserne; ?>
          </option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="form-group">
      <label for="type-pompier">Type pompier</label>
      <select class="form-control" id="type-pompier" name="type_pompier" required>
        <option value="professionnel">Professionnel</option>
        <option value="volontaire">Volontaire</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary" name="valider">Valider</button>
  </form>
</div>