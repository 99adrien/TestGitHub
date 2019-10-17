<?php
	/* Détermination du nom de la page à charger après vérification de sa validité */
	$affiche = "pages/";
	$config = "config/";
	if (!isset($_GET['page']) || ($_GET['page'] == "")) {
		$affiche .= "Accueil.php";
	} else if ($_GET['page'] == "Accueil") {
		$affiche .= "Acceuil.php";
	} else if ($_GET['page'] == "GroupeA") {
		$affiche .= "GroupA.php";
	} else if ($_GET['page'] == "GroupeB") {
		$affiche .= "GroupB.php";
	} else if ($_GET['page'] == "F1") {
		$affiche .= "F1.php";
	} else if ($_GET['page'] == "GroupeC") {
		$affiche .= "GroupC.php";
	} else {
		$affiche .= "404.php";
	}
	/* Chargement page de config par défaut */
	include($config.'default-config.php');
	/* Par convention, il peut exister une page de configuration du même nom mais avec un préfixe "config-" */
	$config .= "config-".$affiche;
	@include($config); // l'arobas permet de ne pas afficher d'erreur si le fichier de configuration de la page n'existe pas (par exemple pour page 2)
?>