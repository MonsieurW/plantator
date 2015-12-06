<?php
include_once('../manuel/connexionmysql.php');
		$sql2 = "UPDATE `groupe` SET ";
		if(isset($_GET['ID'])&&(isset($_GET['valeur']))){
			$sql2 .="`points`='".$_GET['valeur']."' WHERE `ID`='".$_GET['ID']."';";	
			$bdd2=$bdd->query($sql2)or die(print_r($bdd->errorInfo()));
			$bdd2->closeCursor(); 
		}
   mysql_close();

   
   ?>