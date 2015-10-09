<?php session_start(); ?>

<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
   <meta http-equiv="Content-Type" content="text/HTML; charset=ANSI_ç" />
	<link rel="shortcut icon" href="../commun/img/logomini.png" type="image/x-icon"/> 
	<title>Evaluation Automatique</title>
	<meta name="description" content="Découverte problème scolaires"/>
	<meta name="keywords" content="métaphysik,pourquoi, comment,physique,chimie, Paris,,cours,exercices,animations pour apprendre" />
	
	
	<link href="../manuel/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	
	
	<link rel="stylesheet" title="style_commun" media="screen" type="text/css" href="Teval.css"/>

	
	<link  href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
	<link href="../commun/font-awesome/css/font-awesome.min.css" rel="stylesheet">	

</head> 
<body>
<a id="logo" href="http://metaphysik.fr"><img src="../commun/img/logomkB.png" alt="logo metaphysik"></a>
<h1>Evaluation Automatique </h1>
<header>
	<section id="cour">
		<section id="noform">
			<h4>Bac à sable</h4>
			Avoir un code Métaphysik te permettrait de suivre ta progression. Dommage...
		</section>
		<section id="form">
			<h4>Entraînement</h4>
			<form>
				<label for="code">Code Metaphysik</label><input name="code" type="text" id="code" placeholder="Code Métaphysik"><br/>
				<span id="erreur"></span>
				<h4 class="validform">Valider</h4>
			</form>
		</section>
		<section id="certif">
			<h4>Je veux que cette évaluation compte</h4>
			<form>
				<!--<label for="code">Code Metaphysik</label>-->
				<input name="codecertif" type="text" id="codecertif" placeholder="Code Métaphysik"><br/>
				<?php if(isset($_SESSION['pwd'])){
							echo '<input name="pwd" id="pwd" type="password" value="'.$_SESSION['pwd'].'" style="display:none;">';
							}
						else{
							echo'<label for="pwd" >Validation professeur</label><input name="pwd" id="pwd" type="password">';}	
				?>
				<span id="erreur"></span>
				<h4 class="validcertif">Valider</h4>
			</form>
		</section>
	</section>

<section id="choix">
	<section id="niveaux"></section>
	<section id="themes"></section>
</section>
<h2 id="chosen">Commencer l'évaluation! (environ <span class="index"></span> questions)</h2>
</header>

<div id="index"></div>

<div id="questionnaire">
Une seule réponse possible par question. La valider en décidant de son degré de confiance. Les résultats s'afficheront une fois que toutes les questions auront été traitées.




</div>

<section id="rethemes"></section>
<section id="fdbck">
<h5 class="fdbck"> Commentaire <span class="awsm">&#xf0d8;</span></h5>
<iframe src="https://docs.google.com/forms/d/1KnmUyQ4N_RL3_oHCmqlm3I4sdd_fdhF8tQ-EX6fFJiM/viewform?embedded=true" width="600" height="500" frameborder="0" marginheight="0" marginwidth="0">Chargement en cours...</iframe>
</section>
<section style="display:none" id="hidden">
<?php include_once('evalmysql.php');?>
</section>
	</body>
	
	 <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<script>
//Restafaire
//
//Affich resultat avant et après

$(document).ready(function() {

//themes={'5<sup>ème</sup>':[41005,60105,61205,62605],'4<sup>ème</sup>':[41004,30104,64004,65004,65504],'3<sup>ème</sup>':[13503,14003,18003,33503,33703,34003,50103,51003,53003,54003,55003,65003,66003,91203],'2<sup>nde</sup>':[33002,33302,33502,44002,51002,52002,13502,35002,41002,60102,62002,62602,30102,64002,65002,63002,,91202],'1<sup>S</sup>':[43001,42001,44001,65001,63001,64001,51001,33501,51201,62001,64501,34001,14001,12001,64501,65401,54001],'1<sup>ES/L</sup>':[43001,42001,44004,61501,62001,62201,64501,65001,65201,65401,14001,65501,51201,62601]};
themes={
	'5<sup>ème</sup>':[43005,91205],
	'4<sup>ème</sup>':[43004,91204,44004],
	'3<sup>ème</sup>':[51003,91203],
	'2<sup>nde</sup>':[44002,51002,52002,91202],
	'1<sup>S</sup>':[43001,44001,51001,52001,91201],
	'1<sup>ES/L</sup>':[42001,43001,44004,91202]};
tables={
	'2<sup>nde</sup>':'evalseconde','1<sup>ES/L</sup>':'evalpremieres'};
classes={'2<sup>nde</sup>':'210','1<sup>ES/L</sup>':'101,102'};
taxonomie={
	1:["Connaître","Révise ton sommaire plus régulièment, de préférence, les soirs où tu as eu cours."],2:["Comprendre","Il faut que tu réexplique ton cours à quelqu'un. Tu peux aussi construire une carte mentale avec tes connaissances afin de mieux les comprendre;"],3:["Appliquer","Faire davantage d'exercices serait un excellent moyen de progresser pour toi!"],4:['Synthèse',"Tu peux progresser davantage en aidant les autres"]};
	autoeval={"A":"C'est sûr!","B":"Peut-être","C":"Au hasard"};

////////////////////////////////////////////acquisition php
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

res_autoeval=["",0];progression={};voeux={};datatemp=[];
taxo={1:"",2:"",3:"",4:""};moytaxo="";NomEleve="";
questiontemp={};validation={};
valid="<span class='awsm'>&#xf00c;</span>";	
invalid="<span class='awsm'>&#xf00d;</span>";
///////////////Affichage niveau
$('.ouvert cour section').on('click', function(){
	$('header cour section').css('opacity','0.4').removeClass('actif');
	$(this).addClass('actif').css('opacity','1');
	$('body').css('background',$(this).css('background'));
	if($(this).is('#noform')){
		elvmk=false;afficheniveau("");}
});


$('.ouvert .validcertif').on('click', function(){
	pwd=$('#pwd').val();
	if((pwd=='mkmolo')||(pwd=='MKMOLO')||(pwd=='mkmolop')||(pwd=='MKMOLOP')){
		certif=true;
		code=$(this).sibling('input[type="text"]').val();
		controlID(code,pwd);
	}
	else{erreur='Mot de passe incorrect';}
	
	$('#erreur').html(erreur);
	
});
$('.ouvert .validform').on('click', function(){	
	erreur="";
	certif=false;
	code=$(this).sibling('input[type="text"]').val();
	if((code>10000)&&(code<100000)){
		controlID(code,"");
	}
	else erreur='Code Metaphysik incorrect';
	$('#erreur').html(erreur);
	
});
function controlID(code,pwd){
	
	//a changer qd table unique élève
	IDclasse=code.substring(0,3);
	for(var l in classes){
		if(classes[l]==IDclasse){table=tables[l];break;}
		else{table=""}		
	}
	//console.log(table);
	if(table!=undefined){
		
			cocode={"code":code,"table":table,"pwd":pwd};//console.log(cocode);
				$.ajax({
					url:"Tctrl_id_rslt.php",
					data: cocode,
					dataType : 'html',
					type : 'GET', 
					error:function(jqHxr,statut,error){console.log('erreur:'+error)},	
					success:function(data) {//console.log(data);
					datas=JSON.parse(data);//console.log(datas);
						if(datas['v']==1){elvmk=true;}
						$('#erreur').html(datas['valid']);
						niv=afficheniveau((datas['ID']+"").substring(0,3));
						NomEleve=datas['Nom'];
						affichetheme(niv);

						achoisi();
					}						
				});  	
			}
	$('#erreur').html(erreur);
}	



function afficheniveau(IDclasse){
	html="<div>";nivchoiz="";
	for(niveau in themes){
		if(classes[niveau]==IDclasse){
			html+='<h3 class="choisi">'+niveau+'</h3>';
			nivchoiz=niveau;
		} 
		else{
			html+='<h3>'+niveau+'</h3>';
			}
	}
	html+="</div>";
	$('#niveaux').html(html); 
	return nivchoiz;	
}

$('.ouvert #niveaux').on('click','h3', function(){
	$('#niveaux h3').removeClass('choisi');
	$(this).addClass('choisi');
	affichetheme($(this).html());
});
	
function affichetheme(niv){
	
	html="";
	if(elvmk){html+='<div id="progres">Progres:';
		if((datas['progres']!="")&&(datas['progres']!="undefined")){
		prog=datas['progres'].split('_');lg=prog.length;//console.log(prog);
			
			for(var i=lg-4;i<lg;i++){
				if((typeof prog[i]!="undefined")&&(prog[i]!="")){//console.log(prog[i]);
					pro=parseInt(prog[i]);progg= 2*pro;
					progg=(progg>100)? 100: progg;
					html+='<span style="'+couleur(progg)+hauteur(progg)+'">'+pro+'</span>';	
				}
					
			}
		html+='</div>';	
		}
	else{html+='Aucun</div>';}	
	}
	for(var n in themes[niv]){
		var ID=parseInt((themes[niv][n]+"").substring(0,3));
		var nivomin=parseInt((themes[niv][n]+"").substring(3,5));
		html+="<article class='theme' data-id='"+themes[niv][n]+"'><h4 >"+theme[ID][0]+" (<span>0</span>)</h4><article>";
		if(elvmk){rslt=datas[ID].split("");}
		for(var n in theme[ID]){
			if(n!=0){
				if(elvmk){
					switch(rslt[parseInt(n)-1]){
					case '0':
					bckgnd='255,0,50';symbole=invalid;//console.log('1 validé');
					break;
					case '1':
					bckgnd='0,255,50';symbole=valid;
					break;
					case '5':
					bckgnd='255,200,50';//console.log('1 validé');
					break;
					case '6':
					bckgnd='50,255,240';
					break;
					default: //verif syntaxe
					bckgnd='255,255,255';
					}
				}
				else{bckgnd='255,255,255';}
				grise="";
				nivitem=parseInt(nivo[ID][parseInt(n)-1]);
				if(nivomin>nivitem){grise=" grise";}
				html+="<h5 class='"+grise+"' style='background:rgba("+bckgnd+",0.8);' data-id='"+ID+""+n+"'>"+n+"/"+theme[ID][n]+symbole+"</h5>";	
			}
		}
		html+="</article></article>";
	}
	$('#themes').css('display','block').html(html); html="";	
}
	
	



$('.ouvert #themes,#rethemes').on('click','h4', function(){
	$(this).next('article').slideToggle();		
});



$('.ouvert #themes').on('click','h5', function(){
	$(this).toggleClass('choisi');
	$ceTheme=$(this).parents('.theme');
	nbritem=$ceTheme.find('h5.choisi').length;
	if(nbritem>0){$ceTheme.attr('data-choiz',1);}
	nombrequestions=($('#themes h5.choisi').length)*3;
	$ceTheme.find('h4 span').html(nbritem);
	$('.index').html(nombrequestions);
	$('#chosen').slideDown();
});

$('.ouvert #chosen').on('click',function(){
	achoisi();
	$('#index').html('Il te reste '+nombrequestions+' questions').slideDown();
	$('.theme article').slideUp();
});

function achoisi(){
html="";

	$('#themes [data-choiz="1"]').each(function(){
		voeux[($(this).data('id')+"").substring(0,3)]={};
		//console.log($(this).data('id'));
			$(this).find(' h5.choisi').each(function(){
				var ID=parseInt(($(this).data('id')+'').substring(0,3));
				var IDit=parseInt(($(this).data('id')+'').substring(3,5));	
				voeux[ID][IDit]="";	
			});
	});
	//console.log(voeux);
	for(var th in voeux){//console.log(th);
	req={'item':th};htmll="";
		$.ajax({
					url:"evalquestions.php",
					data: req,
					dataType : 'html',
					type : 'GET',
					async:false,					
					error:function(jqHxr,statut,error){console.log('erreur:'+error)},	
					success:function(data) {//console.log(data);
					datas=JSON.parse(data);//console.log(datas);
					
					
							for(var it in voeux[th]){//console.log(voeux[th]);
								dataitems=datas[th+""+it];//console.log(th+""+it);
								if(dataitems!=undefined){
									n=0;datatemp.length=0;
									for(var ID in dataitems){
										datatemp[n]=ID;	n++;
									}
									shuffle(datatemp);//console.log(datatemp);
									for(var i=0;i<3;i++){
										if(dataitems[datatemp[i]]!=undefined){
											htmll+=genquestion(dataitems[datatemp[i]]);
											//console.log(i);console.log(dataitems[datatemp[i]]);
										}
									}	
								}
								else{htmll+="<br><article>Les questions pour l'item "+th+""+it+" ne sont pas encore créées </article>";
								}
								
								
								
							}	
					//	console.log(htmll);
						$('#questionnaire').slideDown().append(htmll);
						}	
						
													
				}); 
	}		
		
}


				
//////////////////////////////////Acquisition réponse
$('#questionnaire').on('click','.ouvert .rep', function(){
		$(this).parent('div').children('.rep').removeClass('actif');
		$(this).addClass('actif');
		$(this).parent('div').next('.autoeval').css('opacity','1');
	
});		
$('#questionnaire').on('click','.ouvert .autoeval div', function(){
	$(this).siblings('div').css('visibility','hidden');
	$article=$(this).parents('.ouvert');
	$reponse=$article.find('.rep.actif');
	
	IDquestion=$article.data('id')+"";
		var ID=parseInt(IDquestion.substring(0,3));
		var IDit=parseInt(IDquestion.substring(3,5));	
	taxoquestion=parseInt($article.data('taxo'));
	valeurrep=parseInt($reponse.data('val'));
	nombrequestions--;
	nombrequestions=$('#questionnaire .ouvert').length -1;
	$('#index').html('Il te reste '+nombrequestions+' questions '+NomEleve);
	
	voeux[ID][IDit]+=valeurrep;
	taxo[taxoquestion]+=valeurrep;
	autoevaluation($(this).attr('class'),valeurrep);
	if(valeurrep==0){$reponse.css('color','#FFC269');
	$article.children('.querep').css('background','#FFC269');}
	else if(valeurrep>0){$reponse.css('color','#23CF7A');
	$article.children('.querep').css('background','#23CF7A');}
	$reponse.siblings('[data-val="1"]').css('color','#23CF7A');
	$article.removeClass('ouvert').find('.awsm').html('&#xf023;');
	if($('article.ouvert').length==0){
/* 		console.log('voeux');console.log(voeux);
console.log('valid');console.log(validation);	
console.log('res_autoeval');console.log(res_autoeval);
console.log('taxo');console.log(taxo); */
		nbrquestion=$('.que').length;
		calculrslt();
	if(elvmk)contactbdd();	
	}
});	

	
	//génération html +validation en fonction des résultats
function calculrslt(){	///////////////résultat item
	for (var firstKey in voeux) break;
	oldth=firstKey;	valid="<span class='awsm'>&#xf00c;</span>";
	html="<section id='resultat'><article id='rslt"+firstKey+"'><h6>"+theme[firstKey][0]+"</h6>";validation[firstKey]='8888888888';
	$('#rethemes').html($('#themes').clone(false)); 
	if(certif){rpvraie=1;rpfausse=0;}
	else{rpvraie=5;rpfausse=6;}
	for(var m in voeux){
		for(var n in voeux[m]){
			prcent=Math.round(moyenne(voeux[m][n])*100);
					
					if(oldth!=m){html+="</article><article id='rslt"+m+"'><h6>"+theme[m][0]+"</h6><div>";
						validation[m]='8888888888';
						oldth=m;
					}
					else{ html+="<div>";}
					
					if(prcent==100){
							
						validation[m]=validation[m].substring(0,n-1)+rpvraie+validation[m].substring(n);	
						$('#rethemes [data-id='+m+''+n+']').append(valid).css('background','rgba(0,255,50,0.8)');
					}
					else{
						valid="<span></span>";
						validation[m]=validation[m].substring(0,n-1)+rpfausse+validation[m].substring(n);
						$('#rethemes [data-id='+m+''+n+']').append(invalid).css('background','rgba(255,0,50,0.8)');
					}
					
					html+='<a href="http://metaphysik.fr/manuel/index.php?id='+m+'0088#item'+n+'" style="'+couleur(prcent)+'">'+
					valid+'<span class="numero">'+n+'/</span><span class="item"> '+theme[m][n]+' : '+prcent+'%</span></a></div>';
		}
	}	
		
		///////////////résultat taxo
		
	html+="</article></section><div id='taxo'><h4>Niveau taxonomique</h4><section>";
	minus=1000;index=1;//définition de la solution taxo à afficher
	for(var n in taxo){
			if(taxo[n]!=""){
					if(minus>moyenne(taxo[n])){minus=moyenne(taxo[n]);index=parseInt(n);}
			}	
	}
	for(var n in taxo){//edition html résultat taxo
					if(taxo[n]!=""){
						html+='<div class="elmttaxo">';
						
						moy=Math.round(moyenne(taxo[n])*100);
						html+='<div style="width:'+(160+moy*3)+'px;'+couleur(moy)+'"> '+taxonomie[n][0]+' : '+moy+' %</div>';
						if(n==index){solus='<span class="solution">'+taxonomie[n][1]+'</span>';}
						html+='</div>';
					}	
					else{moy="NN";}
					moytaxo+=moy+'_';
	}
	moytaxo=moytaxo.substring(0,moytaxo.length-1);
	html+="</section>"+solus+"</div><div id='autoeval'><h4>Autoévaluation</h4><section>";
	
		//////////////////////////////Resultats autoeval
	moy=Math.round(moyenne(res_autoeval[0])*50);
	if(res_autoeval[1]>0){cred=Math.round(100*(1-res_autoeval[1]/nbrquestion));}else{cred=100;}
	html+='<div style="width:'+(160+moy*3)+'px;'+couleur(moy)+'">Précision : '+moy+'%</div><div style="width:'+(160+cred*3)+'px;'+couleur(cred)+'">Crédibilité : '+cred+'%</div></section><span class="solution">'; 
	if(res_autoeval[1]>0)html+="Tu as tendance à répondre sans vérifier tes informations, ce qui te fait perdre en crédibilité";
	if(res_autoeval[1]<0)html+="Tu as tendance à te dévaluer. Tu travailles mieux que tu ne le penses.";
	html+="</span></div>";	
	//html+="<a href='minimaestria2.php'><h4>Voir le bilan de ton travail</h4></a>";
		//////////////////////////////Ajax
			
	


		
		
				
		$('#questionnaire').after(html);	
			
}

function contactbdd(){

var currentDate = new Date()
    var day = currentDate.getDate()
    var month = currentDate.getMonth() + 1;
	if(month<10)month="0"+month;
    var year = currentDate.getFullYear()
    date=year + "-" + month + "-" + day;
	if(table!=undefined){
		datas={"IDelv" : code, "taxo" :moytaxo ,"date": date,"table":table};	
			
			var j=0;	
			for(var IDs in validation){j++;
					datas['theme'+j]=IDs;	
					datas['valeur'+j]=validation[IDs];
					
			}
								
	$.ajax({
				url:"Teval_updatefin.php",
				data: datas,
				dataType : 'html',
				type : 'GET', 
				error:function(jqHxr,statut,error){console.log('erreur:'+error)},	
				success:function(data) {//console.log(data);
					
					datas=JSON.parse(data);	
					
					$('#resultat').append("<div class='progres'>Progression actuelle:"+datas['progres']+" items/semaine</div>");
					
				}		
	});  
	}
}
//essai

$('.fdbck').on('click', function(){	
	if($('.fdbck').hasClass('actif')){
		$('#fdbck').animate({right: "-600px"});$('.fdbck .awsm').html('&#xf0d8');}	
	else{
		$('#fdbck').animate({right: "0px"});$('.fdbck .awsm').html('&#xf0d7;');}
	$('h5.fdbck').toggleClass('actif');

}); 

}); 
function moyenne(string){
	if(string!=""){
		tab=(string+"").split("");
		effectif=tab.length;
		total=tab.reduce(function(a, b) {
			return parseInt(a) + parseInt(b);
		});
	return total/effectif;
	}
	
}
				
function genquestion(data){
if(data!=undefined){
	ht="";
	reps=data['reponse'].split(';');
	shuffle(reps);
	

		var IDth=parseInt(data['item'].substring(0,3));
		var IDit=parseInt(data['item'].substring(3,5));
					//indications corrections
		//ht+="<span class='details'>Taxo"+data['Taxo']+" = "+taxonomie[data['Taxo']][0]+"<br/>"+IDit+"/ "+theme[IDth][IDit]+"</span>";
	
	ht+="<article class='ouvert' data-id='"+data['item']+"' data-taxo='"+data['Taxo']+"' title='"+data['item']+"'><div class='querep'><p class='que'>"+data['question']+"<span class='awsm'>&#xf13e;</span></p>";

	for(var j in reps){
						split=reps[j].split('_');
						color="";
						//indications correction
						//if(split[1]==0){color='#FFC269';}
						//else if(split[1]>0){color='#23CF7A';}
						
						ht+="<p class='rep' style='color:"+color+";' data-val='"+split[1]+"' >"+split[0]+"</p>";
		}
				ht+="</div><div class='autoeval'>";
				for(var m in autoeval){
					ht+="<div class='"+m+"'>"+autoeval[m]+"</div>";	
				}
				ht+="</div></article>";
			}	
	return ht;	
}	
	
	
function shuffle(array) {
  var currentIndex = array.length, temporaryValue, randomIndex ;
  // While there remain elements to shuffle...
  while (0 !== currentIndex) {
    // Pick a remaining element...
    randomIndex = Math.floor(Math.random() * currentIndex);
    currentIndex -= 1;
    // And swap it with the current element.
    temporaryValue = array[currentIndex];
    array[currentIndex] = array[randomIndex];
    array[randomIndex] = temporaryValue;
  }
  return array;
}

function autoevaluation(lettre,rep){
	if(rep==1){
		switch(lettre) {
			 case "A":
				res_autoeval[0]+=""+2;
			break;
			case "B":
				res_autoeval[0]+=""+1;
				res_autoeval[1]+=-1;
			break;
			case "C":
				res_autoeval[0]+=""+0;
				res_autoeval[1]+=-1;
			break;
		}
	}
	else{
		switch(lettre) {
			 case "A":
				res_autoeval[0]+=""+0;
				res_autoeval[1]+=1;
			break;
			case "B":
				res_autoeval[0]+=""+1;
			break;
			case "C":
				res_autoeval[0]+=""+0;
			break;
		}
		
	}	
}

function couleur(val){
rge=255;vert=255;bleu=0;
if(val>50){rge=Math.round(255-5*(val-50));}
else if(val<50){vert=Math.round(5*val);}
else if(val=50){vert=255;rge=255;}
else if(val="undefined"){vert=244;rge=244;bleu=244;}
style='background:rgba('+rge+","+vert+','+bleu+',0.8);';
return style;
}		
function hauteur(val){
	txt='height:'+(15+parseInt(val)/5)+'px;';
	return txt;
}
	</script>	
	<script type="text/javascript"><!-- Google analytics -->

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-31682286-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script> 
	</html>		