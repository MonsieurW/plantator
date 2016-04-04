<?php include_once('../manuel/connexionmysql.php');

header('Content-Type: text/html; charset=utf-8');
$sql ="INSERT INTO `db471039562`.`plantetemp` (`IDtemp`,";
$champs=['ID','nom','famille','semisint','semisabri','semisext','recolteDeb','recolteFin','soleil','pH','eau','solriche','vie','hauteur','largeur','racine','commentaire','multi','Tmin','vivace','tpslevee','prof','dligne','drang','repiq','rendement','tpsconserv','utilisation','conservalimt','type','associe','antiassocie'];
$sqlvaleur=" VALUES (NULL, ";
foreach($champs as $k){
	$sql .='`'.$k.'`,';
	if(isset($_GET[$k])){
			$sqlvaleur.="'".$_GET[$k]."',";
			//echo mysql_real_escape_string($_GET[$k]);
	}
}
$sql1=substr($sql,0,-1);
$sql2=substr($sqlvaleur,0,-1);
//echo $sql2;
$sqlfinal=$sql1.')'.$sql2.');';
echo $sqlfinal;

$sql = $bdd->query($sqlfinal)or die(print_r($bdd->errorInfo()));
 		
		$sql->closeCursor();
	//print_r($pl);
	
	 mysql_close(); 
	 
	 
	 
	 
	//INSERT INTO `db471039562`.`plante` (`ID`, `nom`, `prof`, `dligne`, `drang`, `semisint`, `semisabri`, `semisext`, `repiq`, `recolteDeb`, `recolteFin`, `vie`, `soleil`, `pH`, `eau`, `solriche`, `hauteur`, `largeur`, `type`, `racine`, `commentaire`, `multi`, `Tmin`, `famille`, `vivace`) VALUES (NULL, 'Aubergine', '1', '50', '50', '2', '3', '4', '4', '7', '10', '1', '1', '2', '1', '2', '40', '20', 'fruit', '3', '', 'semis', '0', 'solanacée', '0'),(autres);
	//INSERT INTO `db471039562`.`plante` (`ID`, `nom`, `prof`, `dligne`, `drang`, `semisint`, `semisabri`, `semisext`, `repiq`, `recolteDeb`, `recolteFin`, `vie`, `soleil`, `pH`, `eau`, `solriche`, `hauteur`, `largeur`, `type`, `racine`, `commentaire`, `multi`, `Tmin`, `famille`, `vivace`) VALUES (NULL, 'Aubergine', '1', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''), (NULL, 'hree', '', '', '', '', '', '', '', '', '', '', '', '', '5', '', '', '', '', '', '', '', '', '', '');
	//<script>plante=<?php echo json_encode($d);	
		
		?>