<?php include_once('../manuel/connexionmysql.php');

header('Content-Type: text/html; charset=utf-8');
$sqlf ="UPDATE `db471039562`.`plante2` SET ";
$champs=$_GET['titres'];
//echo $champs;

foreach($champs as $k){
	$sqlf .='`'.$k.'`';
	if(isset($_GET[$k])){
			$sqlf.="='".$_GET[$k]."',";
	}
}
$sqlf2=substr($sqlf,0,-1);
$sqlf2 .=" WHERE `ID`='".$_GET['ID']."';";
//echo $sql2;

echo $sqlf2;

$sql = $bdd->query($sqlf2)or die(print_r($bdd->errorInfo()));
 		
		$sql->closeCursor();
	//print_r($pl);
	
	 mysql_close(); 
	 
	 
	 
	 
	//INSERT INTO `db471039562`.`plante` (`ID`, `nom`, `prof`, `dligne`, `drang`, `semisint`, `semisabri`, `semisext`, `repiq`, `recolteDeb`, `recolteFin`, `vie`, `soleil`, `pH`, `eau`, `solriche`, `hauteur`, `largeur`, `type`, `racine`, `commentaire`, `multi`, `Tmin`, `famille`, `vivace`) VALUES (NULL, 'Aubergine', '1', '50', '50', '2', '3', '4', '4', '7', '10', '1', '1', '2', '1', '2', '40', '20', 'fruit', '3', '', 'semis', '0', 'solanacée', '0'),(autres);
	//INSERT INTO `db471039562`.`plante` (`ID`, `nom`, `prof`, `dligne`, `drang`, `semisint`, `semisabri`, `semisext`, `repiq`, `recolteDeb`, `recolteFin`, `vie`, `soleil`, `pH`, `eau`, `solriche`, `hauteur`, `largeur`, `type`, `racine`, `commentaire`, `multi`, `Tmin`, `famille`, `vivace`) VALUES (NULL, 'Aubergine', '1', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''), (NULL, 'hree', '', '', '', '', '', '', '', '', '', '', '', '', '5', '', '', '', '', '', '', '', '', '', '');
	//<script>plante=<?php echo json_encode($d);	
	//INSERT INTO `db471039562`.`plante` (`ID`, `nom`, `prof`, `dligne`, `drang`, `semisint`, `semisabri`, `semisext`, `repiq`, `recolteDeb`, `recolteFin`, `vie`, `soleil`, `pH`, `eau`, `solriche`, `hauteur`, `largeur`, `type`, `racine`, `commentaire`, `multi`, `Tmin`, `famille`, `vivace`, `tpslevee`, `rendement`, `tpsconserv`, `associe`, `antiassocie`, `utilisation`, `conservalimt`) VALUES (NULL, 'houblon', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', ''), (NULL, 'hierba buena', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '');
	
		
		?>