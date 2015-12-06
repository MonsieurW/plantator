<?php
include_once('../manuel/connexionmysql.php');

$retour=array('mail'=>false,'dernier'=>'','nouveau'=>'');
if(isset($_GET['mail'])){
	$sql = "SELECT * FROM `evaleleve` WHERE `ID` LIKE '".$_GET['niveau']."%' ORDER BY `ID`;";
	$eleves = $bdd->query($sql)or die(print_r($bdd->errorInfo()));
	while ($e = $eleves->fetch()){
		if($e['mail']==$_GET['mail']){$retour['mail']=$e['ID'];break;}
		foreach($e as $key =>$v){
			$eleve[$e['ID']][$key]=$v;
			
		}
		$dernier=$e['ID'];
	}
	$eleves->closeCursor();
$retour['dernier']= $dernier;

	//print_r($retour);echo $retour['mail'];
	if($retour['mail']==false){
		//print_r($retour);
		$newID=intval($dernier)+1;
		
	
		$sql = "INSERT INTO `evaleleve` (`ID`,`Nom`,`mail`) VALUES ('".$newID."','".$_GET['nom']."','".$_GET['mail']."');";
		$ajout = $bdd->query($sql)or die(print_r($bdd->errorInfo()));
		$ajout->closeCursor();
	}
	else{$newID=$retour['mail'];}
	$retour['nouveau']=$newID;
  mysql_close();	
echo json_encode($retour);

//inserer une nouvelle entree et récupérer ID





$mail = $_GET['mail']; // Déclaration de l'adresse de destination.

if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
{ $passage_ligne = "\r\n";
}
else
{ $passage_ligne = "\n";}
//=====Déclaration des messages au format texte et au format HTML.
$message_txt = "Bonjour ".$_GET['nom'].", tu as demandé un code Metaphysik afin de pouvoir suivre tes progrès, le voici:".$newID."Ce code te permettra de suivre trs progrès en sachant à tout moment ce que tu paraît maîtriser et ce qu'il reste à travailler.Attention, le niveau indiqué n'assure pas une maîtrise complète des items validés. C'est toutefois un bon indicateur.";

$message_html = "<html><head><style>a:hover{opacity:0.8;}</style></head><body style='font-size:15px;padding:45px;font-family: Verdana;color:#2B2F3A;'>Bonjour ".$_GET['nom'].", tu as demandé un code Metaphysik afin de pouvoir suivre tes progrès, le voici:<b> ".$newID."</b><br/><ul><li>Ce code te permettra de savoir à tout moment ce que tu paraîs maîtriser et ce qu'il reste à travailler.</li>Tu peux apprendre à ton rythme</li>
<li>Recevoir à chaque fois des conseils et des infos pour améliorer tes méthodes de travail et ta capacité à t'auto-évaluer.</li></ul><i>Attention, le niveau indiqué n'assure pas une maîtrise complète des items validés. C'est toutefois un bon indicateur.</i>Pense à retenir ton code!!!<section><a href='http://metaphysik.fr/tutorat/eval.php' style='font-size:30px;padding:10px;background:#00A5D4;    border-radius:10px;display:block;text-align:center;text-decoration:none;color:black;box-shadow:1px 1px 5px;'>Aller s'évaluer</a><section></body></html>";
//=====Création de la boundary

$boundary = "-----=".md5(rand());
//=====Définition du sujet.
$sujet = "Code Metaphysik";

//=====Création du header de l'e-mail.
$header = "From: \"Métaphysik\"<metaphysik@mail.fr>".$passage_ligne;
$header.= "Reply-to: \"Métaphysik\" <metaphysik@mail.fr>".$passage_ligne;
$header.= "MIME-Version: 1.0".$passage_ligne;
$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;

//=====Création du message.
$message = $passage_ligne."--".$boundary.$passage_ligne;

//=====Ajout du message au format texte.
$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_txt.$passage_ligne;
$message.= $passage_ligne."--".$boundary.$passage_ligne;

//=====Ajout du message au format HTML

$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_html.$passage_ligne;
$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
//=====Envoi de l'e-mail.
mail($mail,$sujet,$message,$header);
}
?>