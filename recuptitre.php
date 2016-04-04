<?php  
header( 'content-type: text/html; charset=utf-8' );   
include_once('../manuel2/connexionmysql.php');	

		$titres0 = $bdd->query('SELECT * FROM e_titre WHERE ID>100 AND ID<1000')or die(print_r($bdd->errorInfo()));
		while ($donnees = $titres0->fetch()){
		$theme[$donnees[0]]=$donnees;} 
		$titres0->closeCursor();
?>

<script>

var domaine={
	IDmin:000,
	IDmax:999;
}
//faire une boucle pour créer les diff domaines (new?)

//creer les thèmes dans ces domaine
var theme= Object.create(domaine);

var theme={
	ID:000,
	titre:'La vie des électrons';
}

var item = Object.create(theme);
item={
	ID:0,
	Titre:'les électrons sont gentils',
	explication:{2:"Pour bien comprendre....",
				3:"Pour bien appliquer...",
				4:"Pour aller au fond des choses..."},
				
	
}
var question = Object.create(item);
var exo = Object.create(item);
</script>		
