<?php include_once('../manuel/connexionmysql.php');

header('Content-Type: text/html; charset=utf-8');
$condition="";//" WHERE 'ID'=`210` ";
$pl=[];$table="`".($_GET['table'])."`";
$plantes = $bdd->query("SELECT * FROM ".$table." ;")or die(print_r($bdd->errorInfo()));
 		while ($d = $plantes->fetch()){
			$pl[$d['ID']]=[];
			foreach ($d as $k => $v){//echo$v;
			//asort
				$pl[$d['ID']][$k]=$v;
			}
		} 
		$plantes->closeCursor();
	//print_r($pl);
	
	//usort($pl, 'compareByName');
	echo json_encode($pl);	
	 mysql_close();
	 
	 function compareByName($a, $b) {
		return strcmp(strtolower($a['nom']), strtolower($b["nom"]));
		}	
		
		
		
	//INSERT INTO `db471039562`.`plante` (`ID`, `nom`, `prof`, `dligne`, `drang`, `semisint`, `semisabri`, `semisext`, `repiq`, `recolteDeb`, `recolteFin`, `vie`, `soleil`, `pH`, `eau`, `solriche`, `hauteur`, `largeur`, `type`, `racine`, `commentaire`, `multi`, `Tmin`, `famille`, `vivace`) VALUES (NULL, 'Aubergine', '1', '50', '50', '2', '3', '4', '4', '7', '10', '1', '1', '2', '1', '2', '40', '20', 'fruit', '3', '', 'semis', '0', 'solanacée', '0'),(autres);
	//INSERT INTO `db471039562`.`plante` (`ID`, `nom`, `prof`, `dligne`, `drang`, `semisint`, `semisabri`, `semisext`, `repiq`, `recolteDeb`, `recolteFin`, `vie`, `soleil`, `pH`, `eau`, `solriche`, `hauteur`, `largeur`, `type`, `racine`, `commentaire`, `multi`, `Tmin`, `famille`, `vivace`) VALUES (NULL, 'Aubergine', '1', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''), (NULL, 'hree', '', '', '', '', '', '', '', '', '', '', '', '', '5', '', '', '', '', '', '', '', '', '', '');
	//<script>plante=<?php echo json_encode($d);	
	?>