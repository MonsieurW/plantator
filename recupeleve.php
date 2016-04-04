<?php include_once('../manuel/connexionmysql.php');?>
<script>classe={};</script>
<?php


header('Content-Type: text/html; charset=utf-8');
$condition="";//" WHERE 'ID'=`210` ";

/* mysql_client_encoding()
msqli_character_set_name()
alter table ''convert TO CHARACTER SET */
//echo mysqli_character_set_name($bdd);
 //echo mysql_client_encoding($bdd);
$classereq = $bdd->query("SELECT * FROM QCMclasse ".$condition)or die(print_r($bdd->errorInfo()));
$i=0;
 		while ($d = $classereq->fetch()){
		$classe[$i++]=$d;
			if($d[nom]!=""){
				print_r($d);echo '<br/>';
			?>
			<script>classe[<?php echo $d[ID] ?>]=<?php echo json_encode($d);?>;</script>
			<?php
			}
		} 
		$classereq->closeCursor();
		echo '<br/><br/>/////<br/>';
		stripslashes(htmlentities(print_r($classe)));
		echo '<br/><br/>/=///<br/>';
		echo json_encode($classe[0]);
		
$cla = $bdd->query("INSERT INTO `db471039562`.`QCMclasse` (`ID`, `nom`, `niveau`) VALUES ('7', 'ménaliçge', '56')")or die(print_r($bdd->errorInfo()));	
$cla->closeCursor();	
		
		faire page admin : créer classe+creer groupe +creer éleve+modifier groupe+ modifier élève
		
		
?>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script>
//classe=<?php echo json_encode($classe[0]);?>;
console.log(classe);
classeJSON=jQuery.parseJSON(classe);
console.log(classeJSON);

/* classe={
	nom
	ID(lettresutilisateurs+num classe)
	niveau
}
groupe={
	nom
	ID(indique appartenance classe)
	nbrpoints
}
eleve = {
	ID
	IDgpe
	IDclasse
	nom
	date
	nbreval
	score
	taxo
	mdp
	sanction
	mail
	th1
	th2
	th3
	th4
	...
	
	
} */




</script>

