<?php 
		echo "Saisir le numéro du mois : " ; 
		$mois = fgets( STDIN) ;
		echo "Saisir l'année : " ; 
		$annee = fgets( STDIN) ;
		$annee % 400 == 0  || $annee % 4 == 0 && $annee % 100 != 0 ;
		echo "Il y a :" ,$annee ,"jours ";
?>
