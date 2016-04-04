<?php
include_once('../manuel/connexionmysql.php');
if(isset($_GET['item'])){
			
	$sql2 = "SELECT * FROM `evalquestion` WHERE `item` LIKE '".$_GET['item']."%' ORDER BY 'item'";
	$bdd2=$bdd->query($sql2)or die(print_r($bdd->errorInfo()));
	while ($e = $bdd2->fetch()){
		foreach($e as $key =>$v){
			$que[$e['item']][$e['ID']][$key]=utf8_encode($v);
		}
	}
	$bdd2->closeCursor(); 
	echo json_encode($que);
}
   mysql_close();

   
   ?>