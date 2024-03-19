<?php
include("include/entete.inc.php");
echo generationEntete("Bienvenue", "Voici un large choix de photo " . $_SESSION['NomUtilisateur']);
?>

<style>
	/* Ajoutez du style CSS selon vos besoins */
	.flex-container {
		display: flex;
		flex-direction: row;
		flex-wrap: nowrap;
		justify-content: normal;
		align-items: normal;
		align-content: normal;
	}

	.flex-items:nth-child(1) {
		display: block;
		flex-grow: 0;
		flex-shrink: 1;
		flex-basis: auto;
		align-self: auto;
		order: 0;
	}

	.flex-items:nth-child(2) {
		display: block;
		flex-grow: 0;
		flex-shrink: 1;
		flex-basis: auto;
		align-self: auto;
		order: 0;
	}

	.flex-items:nth-child(3) {
		display: block;
		flex-grow: 0;
		flex-shrink: 1;
		flex-basis: auto;
		align-self: auto;
		order: 0;
	}
</style>

<div class="flex-container">

	<h1>Catalogue de Photos</h1>

	<div class="photo">
		<img src="https://www.referenseo.com/wp-content/uploads/2019/03/image-attractive-960x540.jpg" alt="Photo 1">
		<p>Description de la photo 1</p>
	</div>

	<div class="photo">
		<img src="https://static-cse.canva.com/blob/996500/Sanstitre.jpg" alt="Photo 2">
		<p>Description de la photo 2</p>
	</div>

	<div class="photo">
		<img src="https://us.123rf.com/450wm/liushengfilm123/liushengfilm1231809/liushengfilm123180905494/109274461-chine-paysage-de-montagne-huangshan.jpg?ver=6"
			alt="Photo 3">
		<p>Description de la photo 3</p>
	</div>

	<!-- Ajoutez d'autres div.photo selon le nombre d'images -->

</div>
<?php
include("include/piedDePage.inc.php");
?>