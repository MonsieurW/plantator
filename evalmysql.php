<?php  
header( 'content-type: text/html; charset=utf-8' );   
include_once('../manuel2/connexionmysql.php');	

		$niveaux_req = $bdd->query('SELECT * FROM e_niveau WHERE ID>100 AND ID<1000')or die(print_r($bdd->errorInfo()));
		while ($nivel = $niveaux_req->fetch()){
			$niveauxx[$nivel[0]]=$nivel;} 
		$niveaux_req->closeCursor();
		
		$titres0 = $bdd->query('SELECT * FROM e_titre WHERE ID>100 AND ID<1000')or die(print_r($bdd->errorInfo()));
		while ($donnees = $titres0->fetch()){
		$theme[$donnees[0]]=$donnees;} 
		$titres0->closeCursor();

		
		$domaine=array(1=>"Electromagnétisme",3=>'Mécanique',4=>"Optique",5=>"Matière",6=>"Chimie",7=>"Mathématiques",9=>"Transversal");
	 	echo'<div id="domaine">';
		foreach($domaine as $k => $dom){echo $k.':'.$dom.'|';}
		echo'</div>';

		echo'<div id="th">';
foreach($theme as $them){$ID=$them['ID'];//echo $ID;

	echo $ID.':'.utf8_encode($them[1]);
		for($i=2;$i<12;$i++){
			if($them[$i]!='')echo'|'.utf8_encode($them[$i]);	
		} 
	echo'||';
}
	echo'</div>';
	echo'<div id="nivo">';
foreach($niveauxx as $nivo){$ID=$nivo['ID'];
	echo $ID.':'.$nivo[2];
		for($i=3;$i<12;$i++){
			if($nivo[$i]!='')echo'|'.$nivo[$i];	
		}
	echo'||';
}
	echo'</div>';
	
	//print_r($theme);print_r($niveauxx);


 ?>