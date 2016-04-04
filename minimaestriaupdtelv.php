<?php
include_once('../manuel/connexionmysql.php');
		$sql2 = "UPDATE `evaleleve` SET ";
		if(isset($_GET['ID'])&&(isset($_GET['sanction']))){
			$sql2 .="`sanction`='".$_GET['sanction']."' WHERE `ID`='".$_GET['ID']."';";	
			 $bdd2=$bdd->query($sql2)or die(print_r($bdd->errorInfo()));
			$bdd2->closeCursor(); 
			echo $sql2;
		}
   mysql_close();

   
   ?>