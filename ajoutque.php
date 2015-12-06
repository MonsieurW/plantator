<?php 
include_once('../manuel/connexionmysql.php');
mysql_query("SET NAMES UTF8"); 
	$resume=[];
	$sql = "INSERT INTO `evalquestion` (`ID`, `Taxo`, `question`, `reponse`, `item`) VALUES "; 
	for($n=0;$n<100;$n++){
		if(isset($_GET['item'.$n])&&(isset($_GET['taxo'.$n]))){
			$sql.="(NULL,'".$_GET['taxo'.$n]."','".htmlentities($_GET['que'.$n], ENT_QUOTES, "UTF-8")."','".htmlentities($_GET['rep'.$n],ENT_QUOTES)."','".$_GET['item'.$n]."'),";
			$resume[$n]=array("Taxo"=>$_GET['taxo'.$n],'question'=>htmlentities($_GET['que'.$n], ENT_QUOTES, "UTF-8"),'reponse'=>htmlentities($_GET['rep'.$n], ENT_QUOTES, "UTF-8"),'item'=>$_GET['item'.$n]);
		}
		else{break;}
	}
	//print_r($resumehtmlentities($_GET['rep'.$n], ENT_QUOTES, "UTF-8")
	$sql=substr($sql,0,-1);$sql.=';';
	if((isset($_GET['envoi']))AND($_GET['envoi'])){
		$que = $bdd->query($sql)or die(print_r($bdd->errorInfo()));	
		$que->closeCursor();
		}
	echo json_encode($resume);
	?>
