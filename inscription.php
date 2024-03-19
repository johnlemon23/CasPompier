<?php include ("include/entete.inc.php") ?>
<div class="container">

  <div class="jumbotron">
    <h2>Inscription</h2>
    <legend>Merci de remplir ce formulaire d'inscription.</legend>
    <hr />
  </div>
  <form action="traitement.php" method="post">
    <div class="form-group">
      <label for="matricule">Matricule</label>
      <input type="text" class="form-control" id="matricule" placeholder="Ex: 876524" />
    </div>
    <div class="form-group">
      <label for="date-naissance">Date de Naissance</label>
      <input type="date" class="form-control" id="date-naissance" />
    </div>
    <div class="form-group">
      <label for="nom">Nom</label>
      <input type="text" class="form-control" id="nom" />
    </div>
    <div class="form-group">
      <label for="prenom">Prénom</label>
      <input type="text" class="form-control" id="prenom" />
    </div>
    <div class="form-group">
      <label for="sexe">Sexe</label>
      <select class="form-control" id="sexe">
        <option value="féminin">Féminin</option>
        <option value="masculin">Masculin</option>
      </select>
    </div>
    <div class="form-group">
      <label for="grade">Grade</label>
      <input type="text" class="form-control" id="grade" value="Capitaine" />
    </div>
    <div class="form-group">
      <label for="telephone">Téléphone</label>
      <input type="text" class="form-control" id="telephone" />
    </div>
    <div class="form-group">
      <label for="caserne">Caserne</label>
      <input type="text" class="form-control" id="caserne" value="Oussant" />
    </div>
    <div class="form-group">
      <label for="type-pompier">Type pompier</label>
      <select class="form-control" id="type-pompier">
        <option value="professionnel">Professionnel</option>
        <option value="volontaire">Volontaire</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary" name="valider">Valider</button>
  </form>
</div>