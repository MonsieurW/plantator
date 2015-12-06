<?php session_start();
include_once('../manuel/connexionmysql.php');

	if(isset($_GET['code'])){
		if(isset($_GET['pwd'])AND(($_GET['pwd']=='mkmolop')OR($_GET['pwd']=='MKMOLOP'))){
			$_SESSION['pwd']=$_GET['pwd'];//echo $_GET['pwd'];
		}
		$code=$_GET['code'];
		$sql = "SELECT * FROM `evaleleve` WHERE `ID`='".$code."';";
		$bdd3=$bdd->query($sql)or die(print_r($bdd->errorInfo()));
		while ($e = $bdd3->fetch()){			
			if($e['ID']==$code){
				foreach($e as $key =>$v){
					$sortie[$key]=$v;
				}
				$sortie['v']=1;
				$sortie['valid']='Bonjour '.$e['Nom'];
				$trouve=true;
				//récupérer nb points du groupe
			break;	
			} 
		}
		if(!$trouve){$sortie=array('v'=>0,'valid'=>"Retaper le code Metaphysik");}
		$bdd3->closeCursor();
				
	}
	else{$sortie=array('v'=>0,'valid'=>"Retaper le code Metaphysik");}
	setcookie('codeMk', $_GET['code'], time() + 365*24*3600, null, null, false, true); 
	mysql_close();
	echo json_encode($sortie);
?>