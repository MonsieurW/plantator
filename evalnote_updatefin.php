
<?php 
include_once('../manuel/connexionmysql.php');

 

 $IDelv=$_GET['IDelv'];

 $IDth="";
 $values['taxo']=$_GET['taxo'];	 
 $values['Date']=$_GET['date'];
 $values['notes']=$_GET['notes'];
 $table=$_GET['table'];
for($n=1;$n<10;$n++){
	if(isset($_GET['titre'.$n])&&(isset($_GET['valeur'.$n]))){
		$theme=$_GET['titre'.$n];
		$values[$theme]=$_GET['valeur'.$n];
		$clefs[$n]=$theme;
		$IDth.="'".$theme."',";	
	}
	else{break;}
}	
	$IDth=substr($IDth,0,-1);
	$items=substr($items,0,-1);
	
 //récupération des données
	$sql = 'SELECT `progres`,';
	$max=count($values);$j=0;
	foreach($values as $key => $value){$j++;
		$sql .='`'.$key.'`';
		if($j<$max){$sql .=','; }
	}

	$sql.=' FROM `evaleleve` WHERE ID='.$IDelv.';';
		$bdd1=$bdd->query($sql)or die(print_r($bdd->errorInfo()));
	while ($e = $bdd1->fetch()){
		foreach($e as $key =>$v){
			$eleve[$key]=$v;
		}
	}
	$bdd1->closeCursor();
	
	$dates = explode("-", $eleve['Date']);
	$day=0;
	$day+=365*(date(Y)-intval($dates[0]));
	$day+=30*(date(m)-intval($dates[1]));
	$week=($day +1+date(d)-intval($dates[2]))/7;
	$prog=0;
	
	foreach($clefs as $clef){
		$it=str_split($values[$clef]);
		$itbdd=str_split($eleve[$clef]);
		$strg="";
		foreach($it as $l=>$val){
			if($val=='8'){
			$strg.=$itbdd[$l];	
			}
			elseif(($val=='0')OR($val=='1')){
			$strg.=$val;
			}
			elseif(($val=='5')OR($val=='6')){
				if($itbdd[$l]=='1'){
					$strg.=$itbdd[$l];	
				}
				else{
					$strg.=$val;	
				}
			}
			else{
				$strg.='8';
			}
			if((($val=='1')OR($val=='6'))AND(($itbdd[$l]!='0')OR($val=='5'))){$prog++;}
			elseif((($val==0)OR($val=='5'))AND(($itbdd[$l]=='1')OR($val=='6'))){$prog--;}
			}
			
	$values[$clef]=$strg;		
	}
		

	
	$values["progres"]=$eleve["progres"].'_'.round($prog/$week);
	
	//changement dans la bdd
	$eleve["progres"]=round($prog/$week);
	echo json_encode($eleve);
	
	 $sql2 = "UPDATE `evaleleve` SET ";
	$max=count($values);$j=0;
	foreach($values as $key => $value){$j++;
			$sql2 .="`".$key."`='".$value."'";	
		if($j<$max){$sql2 .=','; }
	}
	$sql2 .=' WHERE ID='.$IDelv.';';	
		$bdd2=$bdd->query($sql2)or die(print_r($bdd->errorInfo()));
		$bdd2->closeCursor(); 

   mysql_close();	
		
?>