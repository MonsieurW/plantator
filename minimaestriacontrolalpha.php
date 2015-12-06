<?php 
include_once('../manuel/connexionmysql.php');
if(isset($_GET['classe'])){
	$sql = "SELECT * FROM `evaleleve` WHERE `ID` LIKE '".$_GET['classe']."%' ORDER BY `Nom` ;";
	$eleves = $bdd->query($sql)or die(print_r($bdd->errorInfo()));
	while ($e = $eleves->fetch()){
		foreach($e as $key =>$v){
			$eleve[$e['Nom']][$key]=$v;
		}
	}	 
	
	$eleves->closeCursor();
}
//echo $_GET['classe'];
$sql2 = "SELECT * FROM `groupe` WHERE `classe`='".$_GET['classe']."' ORDER BY `Nom`;";
	$gpes = $bdd->query($sql2)or die(print_r($bdd->errorInfo()));
	while ($g = $gpes->fetch()){
		$groupe[$g['nom']]=array($g['ID'],$g['points']);
	}
	$gpes->closeCursor();
	//print_r($groupe);
	foreach($groupe as $key =>$v){
		$eleve['groupes'][$key]['IDgpe']=$v[0];	
		$eleve['groupes'][$key]['points']=$v[1];
	}
	
		
	//print_r($eleve)	;
	echo json_encode($eleve);
	   mysql_close();	
	/* SELECT j.nom nom_jeu, p.prenom prenom_proprietaire
FROM proprietaires p
INNER JOIN jeux_video j
ON j.ID_proprietaire = p.ID */	
?>

