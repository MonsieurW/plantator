<?php session_start();?>
<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
   <meta http-equiv="Content-Type" content="text/HTML; charset=UTF-8" />
	<link rel="shortcut icon" href="../commun/img/logomini.png" type="image/x-icon"/> 
	<title>Mini-Maestria</title>
	<meta name="description" content="Découverte problème scolaires"/>
	<meta name="keywords" content="métaphysik,pourquoi, comment,physique,chimie, Paris,évaluation automatique,cours,exercices,animations pour apprendre" />
	
	
	<link href="../manuel/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	
	
	<link rel="stylesheet" title="style_commun" media="screen" type="text/css" href="minimaestria.css"/>

	
	<link  href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
	<link href="../commun/font-awesome/css/font-awesome.min.css" rel="stylesheet">	

</head> 
<body>
<header>
<img src="../commun/img/maestria.png" alt="logo maestria" id="logo"/><h1><a href="minimaestria.php">Mini-Maestria</a></h1>
<section id="choixclasse">	<span id="pwd"><input name="pwd" type="password">	<span id="erreur"></span><h4 id="valid">Valider</h4></span><span id="alphabetix">Alphabétique</span><span id="savelv">Save elv</span></section>
<section id="titres">
	<h3 id="groupe">Groupe</h3><h3 id="date">Dernière éval</h3><h3 id="progres">Progrès (items/semaine)</h3><h3 id="taxo">Niveaux taxonomiques</h3><h3 id="nom">Nom</h3>
	<article></article>
</section>
</header>
<section id="resultats" class="prog"></section>
<section style="display:none" id="hidden">
<?php include_once('../tutorat/evalmysql.php');?>
</section>	
	
	
<section id="popup"></section>	<section id="contenu"></section>

 <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
  <script src="themes.js" type="text/javascript"></script>
	<script>
//Restafaire
//validations items à la volée
classes={'2<sup>nde</sup>':'2','1<sup>ES/L</sup>':'1','1<sup>S</sup>':'7'}

$(document).on('ready',function(){





	var d=new Date();
year = d.getFullYear();
month = d.getMonth()+1;
day=d.getDate();
	
	clritems={'0':'255,0,50','1':'0,255,50','5':'255,108,50','6':'50,255,200','8':'255,255,255'};alphatix=false;
	domaine={};theme={};nivo={};
dom=$('#hidden #domaine').html().split('|');	
for(var d in dom){
	sp=dom[d].split(':');
	if(sp[0]!="")domaine[sp[0]]=sp[1];
}	
th=$('#hidden #th').html().split('||');	
for(var d in th){
	sp=th[d].split(':');
	if(sp[0]!=""){theme[sp[0]]=[];
		s=sp[1].split('|');
		for(var o in s){
			theme[sp[0]].push(s[o]);
		}
	}
}	
ni=$('#hidden #nivo').html().split('||');	
for(var d in ni){
	sp=ni[d].split(':');
	if(sp[0]!=""){nivo[sp[0]]=[];
		s=sp[1].split('|');
		for(var o in s){
			nivo[sp[0]].push(s[o]);
		}
	}
}	
	
	
	
infosgpe=[];identification=false;	
html="";NiveauUtilise={};NivoUtilise=0;

for(var l in classes){
	html+='<h2 id="'+classes[l]+'">'+l+'</h2>';
}
$('#choixclasse').prepend(html);	

IDtodisplay=[];		
 
$('#choixclasse').on('click','h2', function(){
	$('#resultats').empty();
	$(this).addClass('actif');
	var ID=$(this).attr('id');
	NivoUtilise=parseInt(ID);
	for(var t in classs[ID]['items']){
		NiveauUtilise[classs[ID]['items'][t]]=t;
	} 
	
	dataz=ChoixClasse(ID);
	
});
$('#titres').on('dblclick','article h3', function(){
	var IDtheme=$(this).hide().attr('id');
	$('.'+IDtheme).hide();
});
/* $('#titres').on('click','article h3', function(){
	var IDtheme=$(this).attr('id');
	$('#resultats article').each(function(index){
		
		$(this).children('.nom').append(' '+$(this).find('.'+IDtheme+' .valid').length);
		
	});
}); */
//. ChoixClasse($(this).html(),$(this).attr('id')))

$('#resultats').on('click','.date', function(){
	$(this).toggleClass('actif');
});

//A modifier pour
$('#titres').on('click','#progres', function(){
	//$('.progres').each(function(index){
	//$(this).slideUp();
	//$(this).next('div').slideDown();}
	/* if($(this).hasClass('nots')){
		//$('.notes').slideUp();
		//$('.progres').slideDown();
		$('.notes,.progres').slideToggle();
	}
	else{
		//$('.progres').slideUp();
		//$('.notes').slideDown();
		
		} */
	 if($('#resultats').hasClass('not')){
		$('#resultats').removeClass('not').addClass('prog');
	 }
	 else{
		 $('#resultats').removeClass('prog').addClass('not');
	 }
		
});


$('#resultats').on('click','button', function(){
	$points=$(this).siblings('.pts').find('.nouveau');
	
	nbpoints=parseInt($points.html());console.log(nbpoints)
	$points.attr('data-modif','true');
	nbpoints+= ($(this).hasClass('plus'))?1:-1;
	$points.html(nbpoints);
});
$('#resultats').on('click','.nom', function(){
	$level=$(this).children('.level');
	level=(isNaN(parseInt($level.html())))? 1 : parseInt($level.html())+1;
	level=(level>5)?0:level;
	$level.attr('data-level','actif').html(level).attr('style','background:'+couleur(100-level*20));console.log(couleur(level));$(this).css('background',"rgba(255,15,50,0.8);");
	$(this).attr('data-chgelv','actif');
});
$('#pwd h4').on('click', function(){
	var pwd=escapeHtml($('#pwd input').val());
	if(pwd=="mkmolo"){
		$('#pwd').hide();
		$('#choixclasse').append('<h6 id="save">SAVE</h6>');
		identification=true;
	}
else{$('#erreur').html('Try again!');}	
});
$('#titres').on('click','.boutons .cierto', function(){
		var IDtheme=$(this).parents('h3').attr('id');
	$('#resultats article').each(function(index){
		$(this).find('.nom .rsltinst').html(theme[parseInt(IDtheme.substr(1,3))][0]+':'+$(this).find('.'+IDtheme+' .valid').length).css('background','rgb('+clritems['1']+')');   

	});
});
$('#titres').on('click','.boutons .train', function(){
	var IDtheme=$(this).parents('h3').attr('id');
	$('#resultats article').each(function(index){
		$(this).find('.nom .rsltinst').html(theme[parseInt(IDtheme.substr(1,3))][0].substr(0,10)+':'+$(this).find('.'+IDtheme+' .validtr').length).css('background','rgb('+clritems['6']+')');   

	});
});
/* $('#resultats ').on('click','.lesitems div', function(){
	$('#contenu').html($(this).clone());
	$('#contenu').slideDown();
	$('#popup').slideDown();
});
$('#popup').on('click', function(){
		$('#popup').slideUp();
		$('#contenu').slideUp();
		
}); */

$('#alphabetix').on('click', function(){
	alphatix=true;$(this).addClass('actif');groupe='total';
});

$('#choixclasse').on('click','#save', function(){
	$('[data-modif]').each(function(index){
		ID=$(this).parents('section').attr('id');
		val=parseInt($(this).html())+parseInt($(this).siblings('.ancien').html());

		 datas={'ID':$(this).parents('section').attr('id'),'valeur':val};//console.log(datas);
	
		$.ajax({
					url:"minimaestriaupdtgpe.php",
					data: datas,
					dataType : 'html',
					type : 'GET', 
					error:function(jqHxr,statut,error){console.log('erreur:'+error)},	
					success:function(data) {//console.log(data);
						//	datas=JSON.parse(data);	//console.log(datas);
						$('#save').css('color','green');
					}
		});  
	});
});
$('#choixclasse').on('click','#savelv', function(){
	$('[data-chgelv]').each(function(index){
		ID=$(this).parents('article').attr('id');
		val=parseInt($(this).find('.level').html());

		 datas={'ID':ID,'sanction':val};console.log(datas);
	
		$.ajax({
					url:"minimaestriaupdtelv.php",
					data: datas,
					dataType : 'html',
					type : 'GET', 
					error:function(jqHxr,statut,error){console.log('erreur:'+error)},	
					success:function(data) {console.log(data);
						//datas=JSON.parse(data);	//console.log(datas);
						$('#savelv').css('color','green');
					}
		});  
	});
});


});

function ChoixClasse(nomniveau){//console.log(table);
	html="";
	themsDuNiveau=themes[nomniveau];
	for(var i in themsDuNiveau){
		IDt=parseInt((themsDuNiveau[i]+"").substring(0,3));
		IDtodisplay.push(IDt);
		html+="<h3 id='r"+IDt+"'>"+theme[IDt][0]+"<span class='boutons'><span class='train awsm'>&#xf0ae;</span><span class='cierto awsm'>&#xf0ae;</span></span></h3>";
	}
	if(alphatix)theURL="minimaestriacontrolalpha.php";
	else theURL="minimaestriacontrol.php";

	$('#titres article').html(html);
	dataz={"classe":nomniveau};//console.log(dataz);
	$.ajax({
				url:theURL,
				data: dataz,
				dataType : 'html',
				type : 'GET', 
				error:function(jqHxr,statut,error){console.log('erreur:'+error)},	
				success:function(data) {////console.log(data);
					datas=JSON.parse(data);	//console.log(datas);
					//initialisation tableaux:
					moyenne={};
					moyenne['total']={'taxo1':0,'taxo1t':0,'taxo2':0,'taxo2t':0,'taxo3':0,'taxo3t':0,'taxo4':0,'taxo4t':0,'progres':0,'progrest':0,'date':0,'datet':0};
					for(var i in IDtodisplay){
						for(var j=1;j<11;j++){
							moyenne['total'][IDtodisplay[i]+""+j]=0;
							moyenne['total'][IDtodisplay[i]+""+j+'t']=0;
						}
					}
					infosgpe=datas['groupes'];//console.log(infosgpe);
					delete(datas['groupes']);//console.log(datas);
					
					
					if(alphatix){html="";
						for(var Nom in datas){
							html+=laligne(datas[Nom],datas[Nom]['ID']);
						}
						$('#resultats').html(html);	
					}
					else affichedonnees(datas);
				
				}
	}); 

}


function affichedonnees(datas){
	html="";
	for(groupe in datas){
	//groupe=0;
			moyenne[groupe]={'taxo1':0,'taxo1t':0,'taxo2':0,'taxo2t':0,'taxo3':0,'taxo3t':0,'taxo4':0,'taxo4t':0,'progres':0,'progrest':0,'date':0,'datet':0};
			for(var i in IDtodisplay){
				for(var j=1;j<11;j++){
							moyenne[groupe][IDtodisplay[i]+""+j]=0;
							moyenne[groupe][IDtodisplay[i]+""+j+'t']=0;
					}
			}
			html+='<section id="'+infosgpe[groupe]['IDgpe']+'"><div class="groupe"><span class="pts"><span class="ancien">'+infosgpe[groupe]['points']+'</span>+(<span class="nouveau">0</span>)</span><h4>'+groupe+'</h4>';
			html+='<button type="button" class="plus">+</button><button type="button" class="moins">-</button></div>';
			for(var ID in datas[groupe]){
				html+=laligne(datas[groupe][ID],ID);
			}
			
			html+=affichemoyenne(moyenne[groupe],'groupe');
			
			//html+=afficheligne(datas[groupe][ID]);	
	
		
			
			html+='</section>';	
			for(var z in moyenne[groupe]){
			moyenne['total'][z]+=parseInt(moyenne[groupe][z]);
			}
			//console.log(moyenne['total']);
		}
	html+=affichemoyenne(moyenne['total'],'totale');
$('#resultats').html(html);	
}	 

function affichemoyenne(moyen,titre){
	balises='<article class="moygpe">'; 
				date=Math.round(moyen['date']/moyen['datet']);
				balises+='<div class="date" style="background:'+couleur(100-date)+';" >'+date+'j</div>';
				proggg=Math.round(moyen['progres']/moyen['progrest']);
				balises+='<div class="progres"><span style="background:'+couleur(proggg)+';'+hauteur(proggg)+'">'+proggg+'</div><div class="taxo">';
				for(var i=1;i<5;i++){
					tax=Math.round(moyen['taxo'+i]/moyen['taxo'+i+'t']);
					balises+='<span style="background:'+couleur(tax)+';'+hauteur(tax)+'" class="awsm">'+taxonomie[i][2]+'</span>';
				}
				balises+='</div><div class="nom"><span class="level">0</span>Moyenne '+titre+'</div><section class="lesitems">';
				for(var i in IDtodisplay){
					ID=IDtodisplay[i];
					balises+='<div class="r'+ID+'">';
						
						for(var k=1;k<11;k++){
						it=moyen[ID+''+k]/moyen[ID+''+k+'t'];
						attrib="";
						if(parseInt(nivo[ID][k-1])<NivoUtilise){
							attrib="cache";
						}
							balises+='<span style="background:'+couleur(Math.round(it*100))+';" class="'+attrib+'" >'+k+'</span>';
							
						}
					balises+='</div>';
				}		
				balises+='</section></article>';//console.log(html);
	return balises;	
}
function laligne(infos,ID){	
htm='';
		if(alphatix){htm+='<section><div class="groupe">Groupe'+infos['groupe']+'('+infosgpe[infos['groupe']]['points']+'pts)';}
				htm+='<article id="'+ID+'">'; 
				htm+=depuisquand(infos['Date']);
				htm+='<div class="progres">'+affchprogres(infos['progres'])+'</div>';
				htm+='<div class="notes">'+affchnotes(infos['notes'])+'</div>';
				htm+='<div class="taxo">'+affchtaxo(infos['taxo'])+'</div>';
				htm+='<div class="nom" ><span class="level" style="background:'+couleur(parseInt(100-20*infos['sanction']))+'">'+infos['sanction']+'</span>'+infos['Nom']+'<span class="rsltinst"></span></div>';
				htm+='<section class="lesitems">'+rsltItems(infos)+'</section>';	
				htm+='</article>';
		if(alphatix){htm+='</section>';}		
			
return htm;
}

function affchnotes(notes){
	txt="";
	note=notes.split('_');
	for(var i in note){
		if(note[i]!=""){
			not=note[i].split('|');
			txt+='<span style="background:'+couleur(not[1]*5)+'">'+not[0]+':'+not[1]+'</span>';
		}
	}
		
return txt;
}

function rsltItems(infos){
//console.log(infos);
	texte="";clr="";
	for(var i in IDtodisplay){
		ID=IDtodisplay[i];its=infos[['theme'+NiveauUtilise[ID]]].split('');
		var txt="";moy=[0,0];
		for(var k=0;k<10;k++){j=k+1;rslt=parseInt(its[k]);
			moyenne[groupe][ID+''+j+'t']++;
		attrib="";//console.log(parseInt(nivo[ID][j])+'alorsquon est à '+NivoUtilise+' pour litem'+j);
		if(parseInt(nivo[ID][k])<NivoUtilise){
			attrib="cache"; 
		}
			txt+='<span style="background:rgb('+clritems[its[k]]+');"';
			if(its[k]=='1'){
						moy[0]++;
						moyenne[groupe][ID+''+j]++;	
						attrib+=' valid"';				
			}
			else if(its[k]=='6'){
				attrib+=' validtr"';
				moy[0]++;
				moyenne[groupe][ID+''+j]++;
			}	
			else if(its[k]=='0'){
				moy[1]--;
			}
			moy[1]++;
			txt+='class="'+attrib+'">'+j+'</span>';
		}
		
		
		texte+='<div class="r'+ID+'" style="border-bottom:6px solid '+couleur(100*moy[0]/moy[1])+';">'+txt+'</div>';//console.log(moy);		
	}	
return texte;	
}



function depuisquand(sg){
	split=sg.split('-');
	jours=(year-parseInt(split[0]))*365;
	jours+=(month-parseInt(split[1]))*30;
	jours+=day-parseInt(split[2]);
	jours= (jours>100)?100:jours;////console.log(jours);
	
	moyenne[groupe]['date']+=jours;
	moyenne[groupe]['datet']++;
	var txt='<div class="date" style="background:'+couleur(100-jours)+';" >'+jours+'j</div>';
	return txt;
}

function affchtaxo(sg){
	if((sg!="")&&(sg!="undefined")){
		nivtaxo=sg.split('_');
		var txt="";
		for(var i=0;i<4;i++){j=i+1;
			if(nivtaxo[i]!='NN'){
				moyenne[groupe]['taxo'+j]+=parseInt(nivtaxo[i]);
				moyenne[groupe]['taxo'+j+'t']++;
				txt+='<span style="background:'+couleur(nivtaxo[i])+';'+hauteur(nivtaxo[i])+'" class="awsm">'+taxonomie[j][2]+'</span>';	
			}	
			else{txt+='<span class="awsm">'+taxonomie[j][2]+'</span>';}
		}
	}
	else{txt='Aucun';}		
	return txt;
}
function affchprogres(sg){
	if((sg!="")&&(sg!="undefined")){
		prog=sg.split('_');lg=prog.length;//console.log(prog);
		var txt="";
		for(var i=lg-4;i<lg;i++){
			if((typeof prog[i]!="undefined")&&(prog[i]!="")){//console.log(prog[i]);
				pro=parseInt(prog[i]);progg= 10*pro;
				progg=(progg>100)? 100: progg;
				txt+='<span style="background:'+couleur(progg)+';'+hauteur(progg)+'" >'+pro+'</span>';
				moyenne[groupe]['progres']+=pro;
				moyenne[groupe]['progrest']++;	
			}
				
		}
	}
	else{txt='Aucun';}	
	return txt;
}
////console.log();

function convrt(v){
	tx=0;
	switch(v){
		case 0:
		tx=0;break;
		case 1:
		tx=100;break;
		case 8:
		tx='NN';break;
	}
	return tx;	
}
function couleur(val){
rge=255;vert=255;bleu=50;
if(val>50){rge=Math.round(255-5*(val-50));}
else if(val<50){vert=Math.round(5*val);}
else if(val=50){vert=255;rge=255;}
else if(val="undefined"){vert=244;rge=244;bleu=244;}
style='rgba('+rge+","+vert+','+bleu+',0.8);';
return style;
}	

function hauteur(val){
	txt='height:'+(15+parseInt(val)/5)+'px;';
	return txt;
}


function escapeHtml(text) { 
	var map = { '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#039;' }; 
	return text.replace(/[&<>"']/g, function(m) {
		return map[m]; }); 
}
</script>
</body>
</html>