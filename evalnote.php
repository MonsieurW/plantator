<?php session_start(); ?>

<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
   <meta http-equiv="Content-Type" content="text/HTML; charset=UTF-8" />
	<link rel="shortcut icon" href="../commun/img/logomini.png" type="image/x-icon"/> 
	<title>Contrôle Métaphysik</title>
	<meta name="description" content="Découverte problème scolaires"/>
	<meta name="keywords" content="métaphysik,pourquoi, comment,physique,chimie, Paris,,cours,exercices,animations pour apprendre" />
	
	 <meta property="og:url"           content="http://metaphysik.fr/eval/eval.php" />
    <meta property="og:type"          content="website" />
    <meta id="fbdes" property="og:description"   content="<?echo $_GET['msg'];?>.Je m'approche du niveau héros! " />
    <meta property="og:title"         content="Auto-évaluation Métaphysik" />
    <meta property="og:image"         content="http://metaphysik.fr/commun/img/eval.jpg" />
	
	
	<link href="../manuel/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	
	
	<link rel="stylesheet" title="style_commun" media="screen" type="text/css" href="eval.css"/>

	
	<link  href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
	<link href="../commun/font-awesome/css/font-awesome.min.css" rel="stylesheet">	

</head> 
<body id="evalnote" oncontextmenu="return false"> <!---->
  

<a id="logo" href="http://metaphysik.fr"><img src="../commun/img/logomkB.png" alt="logo metaphysik"></a>
<h1>Certification</h1>
<section id="com">Choisis ton mode d'évaluation</section>
<div class='info invisu'>
Cette évaluation ne pourra être faîte qu'une seule fois. Il est fortement conseillé de s'entraîner sur les thèmes de l'évaluation lors d'<a href="eval.php">entraînements</a> préalables sur les thèmes du contrôle. <br><br>L'évaluation sera conduite sur un temps limité . Les questions de cette évaluation seront similaires à celle de l'entraînement pour la plupart d'entre elles. Chaque bonne réponse ajoutera 1point et chaque mauvaise enlevera 1point.Le niveau de certitude appliquera un coefficient à ce nombre de points(Sûr : x2; Peut-être: pas de coefficient; Au hasard: x0,5). Les questions qui n'auront pas obtenue de réponses à la fin du temps imparti vaudront -0,5 points<br/><br/>
Lors du choix d'une évaluation, tu peux voir les thèmes qui y seront abordés ainsi que tes résultats précédents sur ces thèmes.(bleu /vert = validé ; orange/rouge = il faut essayer encore).
</div>
<header >


<article >
	<h2 class="code">
		<input name="code" type="text" id="code" placeholder="Code Métaphysik" <?php echo 'value="'.$_COOKIE['codeMk'].'"'; ?>>
			<span class="awsm ouvert" id="validcode" style="cursor:pointer">&#xf00c;</span>
			<span class="awsm" data-com="Grâce à ton code Metaphysik, les items validés seront enregistrés. Tu pourras ainsi visualiser ton avancement et être efficace dans ton travail. Entraîne-toi à la maison pour être sûr de valider tes résultats lors des évaluations certifiées.">&#xf05a;</span></h2>
</article>	
<article id="choixeval">
</article>
<article id="certif">
				<h2 class="certif" <?php if(isset($_SESSION['pwd'])){echo 'id="certif"';}?>>
					<span class="awsm" data-com="Le mode certifié permet au professeur de vérifier ton identité">&#xf05a;</span><?php 
				if(!isset($_SESSION['pwd'])){
					echo'<input name="pwd" id="pwd" type="password" placeholder="Code de certification" style="font-size: 12px;"><span class="awsm" id="validcertif" style="cursor:pointer">&#xf00c;</span>';
				}
				else
				{echo'Certifié<input name="pwd" id="pwd"  style="display:none;" value="mkmolop">';}?></h2>
	
</article>	
		<span id="erreur"></span>




</header>

<div id="index">
	<div id="lesque"></div>
	<div id="letaxo">
		<div id="letaxo1">
			<div class="diag">
				<div class="artefact"></div>
				<div class="ancien"></div>
				<div class="nouveau"></div>
			</div>
			<div class="awsm"></div>
		</div>
		<div id="letaxo2">
		<div class="diag">
				<div class="artefact"></div>
				<div class="ancien"></div>
				<div class="nouveau"></div>
			</div>
			<div class="awsm"></div>
		</div>
		<div id="letaxo3">
			<div class="diag">
				<div class="artefact"></div>
				<div class="ancien"></div>
				<div class="nouveau"></div>
			</div>
			<div class="awsm"></div>
		</div>
		<div id="letaxo4">
			<div class="diag">
				<div class="artefact"></div>
				<div class="ancien"></div>
				<div class="nouveau"></div>
			</div>
			<div class="awsm"></div>
		</div>
	</div>
	<div id="lesthem"><span id="lenom"></span><span id="letps"></span><img id="fbsh" src="https://www.techrevolutions.fr/wp-content/plugins/social-media-widget/images/default/32/facebook.png" alt="Facebook share" >
		
	</div>
	<div id="lautoeval">
		<div id="leprecis">
			<div class="diag">
				<div class="artefact"></div>
				<div class="nouveau"></div>
			</div>
			<div class="awsm">&#xf05b;</div>
		</div>
		<div id="lecred">
			<div class="diag">
				<div class="artefact"></div>
				<div class="nouveau"></div>
			</div>
			<div class="awsm">&#xf19c;</div>
		</div>
	</div>	
	
</div>

<div id="questionnaire">





</div>



<section id="lafin">
	<section id="rethemes"></section>
	<section id="autoeval"></section>
	<section id="taxo"></section>
	<section id="note"></section>
</section>
<section id="fdbck">
<h5 class="fdbck"> Commentaire <span class="awsm">&#xf0d8;</span></h5>
<h5 class="fdbck nv"><a href="eval.php">RAZ<span class="awsm">&#xf021;</span></a></h5>
<iframe src="https://docs.google.com/forms/d/1neaeiLjMiZxhF8MUKbdXhseiCk66FHoBh5Wi06E93vM/viewform?embedded=true" width="600" height="500" frameborder="0" marginheight="0" marginwidth="0">Chargement en cours...</iframe>
</section>

			


<section style="display:none" id="hidden">
<?php include_once('../tutorat/evalmysql.php');?>
</section>
	</body>
	
	 <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	 <script src="themes.js" type="text/javascript"></script>
	<script>
//Restafaire
//
//ajouter bonus d'experience

$(document).ready(function() {



	


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

res_autoeval=["",0];progression={};datatemp=[];
taxo={1:"",2:"",3:"",4:""};moytaxo="";NomEleve="";m=0;score=0;scoretotal=0;nbrque=0;
questiontemp={};validation={};NiveauUtilise={};pas=0;widthdiv=0;lestaxos=[];scoretheme=[5,5];IDniv=0;nonote=0;tpsfin=0;anciennesnote="";notefinale=0;evalnote={};
evalchoisie="";voeux={};

validate="&#xf00c;";	
invalidate="&#xf00d;";
///////////////Affichage niveau

$('body').on('click','[data-com]', function(){
	if($(this).is('.actif')){
		$('#com').slideUp();
		$('[data-com]').removeClass('actif');
	}
	else{
		$('[data-com]').removeClass('actif');
		$(this).toggleClass('actif');
		$('#com').html($(this).data("com")).slideDown();
	}
});

$('#aide').on('click','.evidence', function(){
	$(this).removeClass('evidence');
});
$('header').on('click','#validcode.ouvert', function(){
	if($('body').hasClass('fini')){}
	else{
	code=escapeHtml($('#code').val());//console.log(code);
	if((code>10000)&&(code<100000)){
		controlID(code);
		
		}
	else{erreur='Identifiant incorrect';}
	//a virer apres essai
		/* IDniv=2;
		evalchoisie='Eval trimestre 2';
		achoisi(); */
	
	
	$('#erreur').append(erreur);
	}
});

function controlID(code){
			cocode={"code":code};
			//console.log(cocode);
				$.ajax({
					url:"evalnotectrlID.php",
					data: cocode,
					dataType : 'html',
					type : 'GET', 
					error:function(jqHxr,statut,error){console.log('erreur:'+error)},	
					success:function(data) {//console.log(data);
					datas=JSON.parse(data);//console.log(datas);
					if(datas['v']==1){
						
						$('.info').removeClass('invisu');
						$('#validcode').removeClass('ouvert');
						
						NomEleve=datas['Nom'];
						$('#code h2').html(NomEleve);
						IDniv=parseInt((datas['ID']+"").substring(0,1));
						anciennesnote=datas['notes'];
						notes=(datas['notes']).split('_');
						for(var i in notes){
							note=notes[i].split('|');
							evalnote[note[0]]=note[1];
						}	
						
						
						$('#aide2').removeClass('evidence');
						$('#index #lenom').html(NomEleve);
						lestaxos=datas['taxo'].split('_');console.log(lestaxos);
							for(var i=1;i<5;i++){
								$('#index #letaxo'+i+' .ancien').height(Math.round(parseInt(lestaxos[i-1]*0.39)+1)+'px');	
								$('#index #letaxo'+i+' .awsm').html(taxonomie[i][2]);
							}	
					afficheevals(IDniv);
					$('#index').slideDown();	
					}	
					else $('#erreur').html(datas['valid']);
					}						
				});  	
}	

function afficheevals(IDniv){
	html="";html2="";symbole="";
	
	for(var t in classs[IDniv]['items']){
		NiveauUtilise[classs[IDniv]['items'][t]]=t;	
	}
	
	
	////////////////////////////////////Affichage themes
	for(var i in evaluations[IDniv]){html2="";nbreth=0;IDancien=0;
		for(var j in evaluations[IDniv][i]){html="";nbreth++;
			ID=(evaluations[IDniv][i][j]+"").substring(0,3);
			
			if(IDancien!=ID){
					var nivomin=parseInt("0"+IDniv);
				//console.log(ID);
				//console.log(NiveauUtilise[ID]);
				scoretheme=[0,0];html3="";
				rslt=datas[('theme'+NiveauUtilise[ID])].split("");//rslt de l'eleve
				for(var n in theme[ID]){
					if(n!=0){
							switch(rslt[parseInt(n)-1]){
							case '0':
							bckgnd=clritems[rslt[parseInt(n)-1]];symbole="<span class='awsm'>"+invalidate+"</span>";
							break;
							case '1':
							bckgnd=clritems[rslt[parseInt(n)-1]];symbole="<span class='awsm'>"+validate+"</span>";score++;scoretheme[0]++;
							break;
							case '5':
							bckgnd=clritems[rslt[parseInt(n)-1]];symbole="";
							break;
							case '6':
							bckgnd=clritems[rslt[parseInt(n)-1]];symbole="";score++;scoretheme[0]++;
							break;
							default: //verif syntaxe
							bckgnd=clritems['8'];symbole="";
							}
						
						//else{bckgnd='255,255,255';}
						grise="";
						nivitem=parseInt(nivo[ID][parseInt(n)-1]);
						nivv=nivomin;
						if(nivomin>nivitem){grise=" grise";nivv='0';}
						else{scoretotal++;scoretheme[1]++;}
							
						html3+="<span class='"+grise+"' style='background:rgba("+bckgnd+",1);' data-id='"+ID+""+n+"'>"+n+"</span>";
						}
				}
				html2+="<h4>"+theme[ID][0]+html3+"</h4>";
				IDancien=ID;
			}
			
			
		}
		if(evalnote.hasOwnProperty(i)){	
			html+="<div class='choideval'><h3 ><span class='titre grise'>"+i+" : "+evalnote[i]+"/20</span></div>";
		}
		else{html+="<div class='choideval'>"+html2+"<h3 class='ouvert'><span class='titre'>"+i+"</span> ("+Math.round(evaltemps[IDniv]*nbreth/60)+"mn)</h3>";
		html+="</div>";}
		$('#choixeval').append(html);
		
	}
	$('#choixeval').addClass('invisu');
	$('#code').removeClass('invisu');
}

$('header').on('click','#choixeval h3', function(){
	$('#choixeval h3').removeClass('actif')
	$(this).addClass('actif');
	$('#certif').addClass('invisu');
	$('#choixeval').removeClass('invisu');
	evalchoisie=$('#choixeval h3.actif .titre').html();
	$('#validcertif').addClass('ouvert');
});

$('header').on('click','#certif #validcertif.ouvert', function(){
	if($('body').hasClass('fini')){}
	else{
		if(evalchoisie!=""){
			pwd=escapeHtml($('#pwd').val());
			if((pwd=='mkmolo')||(pwd=='MKMOLO')){
				certif=true;$('.certif').html('Certifié');
				$('#choixeval h3').slideUp();
				$('#choixeval h3.actif').slideDown();
				
				$(this).removeClass('.ouvert');	
				achoisi();
				}
			else{erreur='Mot de passe incorrect';}
			
		}
		else erreur="Pas d'évaluation choisie";
	}
$('#erreur').append(erreur);
	
	
});

function achoisi(){
	
html="";IDancien=0;nbrque=0;
	//console.log(voeux);
	for(var j in evaluations[IDniv][evalchoisie]){
			ID=evaluations[IDniv][evalchoisie][j];
			IDth=(ID+"").substring(0,3);
			IDit=(ID+"").substring(3,5);//console.log(IDth +' '+IDit);
			if(IDancien!=IDth){
				IDancien=IDth;
				voeux[IDth]={};
				//console.log(voeux);
			}
			
			voeux[IDth][IDit]="";
			//console.log(voeux);
	nbrque++;
	}
	$('#com').html('<span class="awsm" data-com="Les résultats seront enregistrés une fois toutes les questions traitées.">&#xf05a;</span>');
	var numeroque=1;
	for(var th in voeux){//console.log(th);
	////////////////
	htmll='';
	req={'item':th};
		$.ajax({
					url:"evalnotequestions.php",
					data: req,
					dataType : 'html',
					type : 'GET',
					async:false,					
					error:function(jqHxr,statut,error){console.log('erreur:'+error)},	
					success:function(data) {//console.log(data);
						if(data!='null'){
							datas=JSON.parse(data);//console.log(datas);
							for(var it in voeux[th]){//console.log(voeux[th]);
							
								dataitems=datas[th+""+it];
								//console.log(dataitems);
								if(dataitems!=undefined){
									//$('#lesthem').append('<div data-id="'+th+""+it+'">'+theme[th][0]+' /'+it+'<span class="awsm"></span></div>');
		
									n=0;datatemp.length=0;
									for(var ID in dataitems){
										datatemp[n]=ID;n++;
									}
									
									shuffle(datatemp);//console.log(datatemp);
									if(dataitems[datatemp[0]]!=undefined){	
										
										htmll+=genquestion(dataitems[datatemp[0]],numeroque);numeroque++;//console.log(i);console.log(dataitems[datatemp[i]]);
									}
								
								}
								else{htmll+="<br><article>Les questions pour l'item "+th+""+it+"/"+theme[th][it]+" ne sont pas encore créées </article>";
								}
								
									
							}
						
							
						}
						else{
							htmll+="<br><article>Les questions pour le theme "+th+"/"+theme[th][0]+" ne sont pas encore créées </article>";
								}
					//	console.log(htmll);
					
						pas=Math.round(360/nbrque);
						m=0;
						$('#lesque div').each(function(){
							$(this).css('transform','rotate('+m+'deg)');
							m+=pas;
						});
						
						$('#questionnaire').append(htmll).slideDown();	
						 $('#laque1').addClass('invisu');
						tpseval=evaltemps[IDniv]*nbrque*1000;
						var d = new Date();
						tpsfin = d.getTime()+tpseval;
						horloge();
						}
						
													
				}); 
	}		
		
}
//chque seconde reactuliser le tps

function horloge(){
					var d = new Date();
					tpsrestant =Math.round((tpsfin-d.getTime())/1000);//console.log(tpsrestant);
					if((tpsrestant>0)&&(!$('body').hasClass('fini'))){
						$('#letps').html(Math.round((tpsrestant-tpsrestant%60)/60)+"mn"+tpsrestant%60+"s");
						repeat=setTimeout(horloge,1000);
					}
					else {//console.log('else');
						clearTimeout(repeat); 
						if($('body').hasClass('fini')){
							$('#letps').html(Math.round((tpsrestant-tpsrestant%60)/60)+"mn"+tpsrestant%60+"s");
						}
						else {$('#letps').html('Fini!');
							$('#questionnaire article.ouvert').each(function(){
								
								$(this).removeClass('invisu').removeClass('ouvert');
								$(this).children('.querep').css('background','#D61108');
								$('.'+$(this).attr('id')).css('color','#D61108');
		
													
								IDquestion=$article.data('id')+"";
							var IDth=parseInt(IDquestion.substring(0,3));
							var IDit=parseInt(IDquestion.substring(3,5));	
								taxoquestion=parseInt($(this).data('taxo'));
								valeurrep=0;
								
								voeux[IDth][IDit]+=valeurrep;
								taxo[taxoquestion]+=valeurrep;
								actualiserCurseurs();
										
								
								
								$(this).find('.points').html('-0,5 points ');
								nonote-=0.5;
							});
							
							cloture();
						}
						
						
						
					}
}

	function genquestion(data,n){
		
if(data!=undefined){

	div="<div class='awsm laque"+n+"' >"+taxonomie[data['Taxo']][2]+"</div>"
	
	$('#lesque').append(div);
	ht="";
	var elem = document.createElement('textarea');
	elem.innerHTML = data['reponse'];
	reps=elem.value.split(';');
	shuffle(reps);
	

		var IDth=parseInt(data['item'].substring(0,3));
		var IDit=parseInt(data['item'].substring(3,5));
					//indications corrections
		//ht+="<span class='details'>Taxo"+data['Taxo']+" = "+taxonomie[data['Taxo']][0]+"<br/>"+IDit+"/ "+theme[IDth][IDit]+"</span>";
	
ht+="<article class='ouvert' id='laque"+n+"' data-id='"+data['item']+"' data-taxo='"+data['Taxo']+"' title='"+data['item']+"'><div class='points'></div><div class='querep'><p class='que'><span class='awsm' title='"+taxonomie[data['Taxo']][0]+"'>"+taxonomie[data['Taxo']][2]+"</span>"+data['question']+"<span class='awsm lock'>&#xf13e;</span></p>";

	for(var j in reps){
						split=reps[j].split('_');
						color="";
						//indications correction
						//if(split[1]==0){color='#FFC269';}
						//else if(split[1]>0){color='#A1F184';}
						
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
//////////////////////////////////Acquisition réponse
	
// clair #03DBDB  rgb(3, 219, 219) intermédiare #16D9DD plus foncé rgb#30BAC7 rouge 214 17 8

$('#questionnaire').on('click','.ouvert .rep', function(){
		$(this).parent('div').children('.rep').removeClass('actif');
		$(this).addClass('actif');
		$(this).parent('div').next('.autoeval').slideDown();
	
});		
$('#questionnaire').on('click','.ouvert .autoeval div', function(){
	autoev=$(this).attr('class');
	$(this).siblings('div').css('visibility','hidden');
	$article=$(this).parents('.ouvert');
	$reponse=$article.find('.rep.actif');
	
	IDquestion=$article.data('id')+"";
		var IDth=parseInt(IDquestion.substring(0,3));
		var IDit=parseInt(IDquestion.substring(3,5));	
	taxoquestion=parseInt($article.data('taxo'));
	valeurrep=parseInt($reponse.data('val'));
	
	voeux[IDth][IDit]+=valeurrep;
	taxo[taxoquestion]+=valeurrep;
	autoevaluation(autoev,valeurrep);
	actualiserCurseurs();
	
	if(valeurrep<=0){valeurrep=-1;
		$reponse.css('color','#D61108');
		$article.children('.querep').css('background','#D61108');
		$('.'+$article.attr('id')).css('color','#D61108');
		$('#index [data-id="'+IDquestion+'"] .awsm').append(invalidate);
	}
	else if(valeurrep>0){
		$reponse.css('color','#A1F184').css('text-shadow','1px 1px 1px black');
		$article.children('.querep').css('background','#A1F184');
		$('.'+$article.attr('id')).css('color','#A1F184');
		$('#index [data-id="'+IDquestion+'"] .awsm').append(validate);
	}
	//console.log(valeurrep);
	points=valeurrep*coeffautoeval[autoev];
	$article.find('.points').html(' '+points+' points ');
	nonote+=points;
	

	
		$reponse.siblings('[data-val="1"]').css('color','#A1F184');
		$article.removeClass('ouvert').find('.lock').html('&#xf023;');
	if($('#questionnaire article.ouvert').length==0){
		$('#questionnaire article').removeClass('invisu');
		cloture();
	}
	else{
		visualiserElmt('#'+$article.next('article').attr('id'));
		//console.log('#'+$article.next('article').attr('id'));
	}
});	

function cloture(){console.log('cloture');
	
						$('#com').slideUp();
						calculrslt();
						contactbdd();	
						$('#taxo').after("<section id='neweval'><a href='eval.php'><h2>Nouvelle évaluation</h2></a></section>");
	
}



function actualiserCurseurs(){
	for(var i=1;i<5;i++){
		$('#letaxo'+i+' .nouveau').height(Math.round(moyenne(taxo[i])*39) +1+'px');	
	}
	$('#leprecis .nouveau').height(Math.round(moyenne(res_autoeval[0])*19.5 + 1)+'px');
	
	cred=(res_autoeval[1]>0) ? Math.round(39*(1-res_autoeval[1]/(nbrque-$('article.ouvert').length))+1):40;
	$('#lecred .nouveau').height(cred+'px');
}
function visualiserElmt(curseur){
 $('html, body').animate({
        scrollTop: $(curseur).offset().top-180
    }, 1000);
	$('#questionnaire article').removeClass('invisu');
	$(curseur).addClass('invisu');
	$('#lesque div').removeClass('minivisu');
	$('.'+$(curseur).attr('id')).addClass('minivisu');
	$('#lesthem div').removeClass('actif');
	$('#lesthem [data-id="'+$(curseur).attr('data-id')+'"]').addClass('actif');
}
	
	//génération html +validation en fonction des résultats
function calculrslt(){	///////////////résultat item
	for (var firstKey in voeux) break;
	oldth=firstKey;	valid="<span class='awsm'>&#xf00c;</span>";
	html="<section id='resultat'><article id='rslt"+firstKey+"'><h6>"+theme[firstKey][0]+"</h6>";validation[firstKey]='8888888888';
	$('#rethemes').html($('#themes').clone(false)); 
	if(certif){rpvraie=1;rpfausse=0;}
	else{rpvraie=6;rpfausse=5;validate="";invalidate="";}
	//console.log(certif);
	for(var m in voeux){
		for(var n in voeux[m]){
			prcent=Math.round(moyenne(voeux[m][n])*100);
					if(oldth!=m){
						html+="</article><article id='rslt"+m+"'><h6>"+theme[m][0]+"</h6><div>";
						validation[m]='8888888888';
						oldth=m;
					}
					else{ html+="<div>";}
					
					if(prcent==100){
						valid="<span class='awsm'>"+validate+"</span>";	
						validation[m]=validation[m].substring(0,n-1)+rpvraie+validation[m].substring(n);	
						$('#rethemes [data-id='+m+''+n+']').prepend(valid).css('background','rgb('+clritems[""+rpvraie]+')');
						score++;
					}
					else{
						valid="<span class='awsm'>"+invalidate+"</span>";
						validation[m]=validation[m].substring(0,n-1)+rpfausse+validation[m].substring(n);
						$('#rethemes [data-id='+m+''+n+']').prepend(valid).css('background','rgb('+clritems[""+rpfausse]+')');
					}
					
					html+='<a href="http://metaphysik.fr/manuel/index.php?id='+m+'0088#item'+n+'" style="'+couleur(prcent)+'" target="blank">'+
					valid+'<span class="numero">'+n+'/</span><span class="item"> '+theme[m][n]+' : '+prcent+'%</span></a></div>';
		}
	}
	html+="</article></section>";	
	$('#rethemes').prepend(html);
		//////////////////////////////Resultats autoeval
	html="<h6>Autoévaluation</h6><section>";	
	moy=Math.round(moyenne(res_autoeval[0])*50);					
	html+='<article><span class="awsm logotaxo" style="'+couleur(moy)+'">&#xf05b;</span><span class="nomtaxo">Précision<br/>'+moy+' %</span>';
						
						if(moy>60)html+="<span class='solution actif'>Tu t'autoévalues correctement, bravo</span>";
							else html+="<span class='solution actif'>Tu ne parais pas être sûr de ce que tu sais et ne sais pas. Tu ne sais pas encore bien t'autoévaluer</span>";							
	
	if(res_autoeval[1]>0){cred=Math.round(100*(1-res_autoeval[1]/nbrque));}else{cred=100;}
	html+='</article><article><span class="awsm logotaxo" style="'+couleur(cred)+'">&#xf19c;</span><span class="nomtaxo">Crédibilité<br/>'+cred+' %</span><span class="solution actif">';
						if(res_autoeval[1]>0)html+="Tu as tendance à répondre sans vérifier tes informations, ce qui te fait perdre en crédibilité";
						if(res_autoeval[1]<0)html+="Tu as tendance à te dévaluer. Tu travailles mieux que tu ne le penses.";
	html+="</span><article></section>";
	
		$('#autoeval').html(html).slideDown();	
		///////////////résultat taxo
		
	html="<h6>Niveau taxonomique</h6><section>";
	minus=1000;index=1;//définition de la solution taxo à afficher
	for(var n in taxo){
			if(taxo[n]!=""){
					if(minus>moyenne(taxo[n])){minus=moyenne(taxo[n]);index=parseInt(n);}
			}	
	}
console.log(taxo);
	for(var n in taxo){//edition html résultat taxo
					if(taxo[n]!=""){
						
						moy=Math.round(moyenne(taxo[n])*100);console.log(n+":"+moy);
						html+='<article><span class="awsm logotaxo" style="'+couleur(moy)+'">'+taxonomie[n][2]+'</span><span class="nomtaxo">'+taxonomie[n][0]+'<br/>'+moy+' %</span>';
						lestaxos[n-1]=(lestaxos[n-1]=='NN')?0:lestaxos[n-1];
						html+=(moy>=lestaxos[n-1])?'<span class="awsm">&#xf14c;</span>':'<span class="awsm" style="transform:rotate(90deg)">&#xf14c;</span>';

						if(n==index){
							if(moy==100)html+='<span class="solution actif">Excellent travail! Félicitations!<br/> Tu peux progresser encore en réexpliquant aux autres ce que tu as compris</span></article>';
							else html+='<span class="solution actif">'+taxonomie[n][1]+'</span></article>';}
						else html+='<span class="solution">'+taxonomie[n][1]+'</span></article>';	
						
					}	
					else{moy=lestaxos[n-1];console.log(n+":"+moy);
					html+='<article><span class="awsm logotaxo" style="background:rgb(245, 243, 243)">'+taxonomie[n][2]+'</span><span class="nomtaxo">'+taxonomie[n][0]+'<br/>Non évalué </span><span></span><span class="solution">Non évalué cette fois-ci</span></article>';
					}
					moytaxo+=moy+'_';
					console.log(moytaxo);
	}
	html+='</section>';
	moytaxo=moytaxo.substring(0,moytaxo.length-1);console.log(moytaxo);
	$('#taxo').html(html).slideDown();
	var d = new Date();
	var restetps =tpsfin- d.getTime();console.log('il te restait '+restetps/1000 +'secondes');
	notefinaledure=Math.round(20*nonote/(nbrque*coeffautoeval['A']));
	notefinale=Math.round(20*nonote/(nbrque*coeffautoeval['B']));
	if(notefinale>20){notefinale=20;}
	else if(notefinale<0){notefinale=0;}
	htmlnote="<h6>Note</h6><section><div class='info invisu'>Les conseils au-dessus te permettront de faire encore mieux la prochaine fois. Tu as obtenu "+nonote+" sur "+nbrque+" questions ce qui correspond à "+notefinale+"/20 <br/>Un professeur plus dur que moi estimant que tu devrais être sûr(e) de tes réponses t'aurait plutôt mis "+notefinaledure+"<br/><br/>N'hésites pas à me donner ton point de vue en ouvrant l'onglet Commentaires en haut à droite, ça me permettra de l'améliorer (ou tu peux m'en parler si je suis disponible)<br/><br/><br/><a id='neweval' href='evalnote.php'><h2>Nouveau contrôle</h2></a></div></section>";
	
		$('#note').html(htmlnote);
		$('body').addClass('fini');
			
}

$('html').on('click','.fini #letaxo', function(){
	//console.log('coucou');
	$('html, body').animate({
        scrollTop: $('#taxo').offset().top-50
    }, 1000);
$('#lafin section').removeClass('invisu');		
$('#taxo').addClass('invisu');	
});
$('html').on('click','.fini #lautoeval', function(){
	
	$('html, body').animate({
        scrollTop: $('#autoeval').offset().top-50
    }, 1000);
$('#lafin section').removeClass('invisu');		
$('#autoeval').addClass('invisu');		
});
$('html').on('click','.fini #lesthem', function(){
	$('html, body').animate({
        scrollTop: $('#rethemes').offset().top-50
    }, 1000);
$('#lafin section').removeClass('invisu');		
$('#rethemes').addClass('invisu');		
});

function contactbdd(){

var currentDate = new Date();
	var h = currentDate.getHours();
    var m = currentDate.getMinutes();
    var day = currentDate.getDate()
    var month = currentDate.getMonth() + 1;
	if(month<10)month="0"+month;
    var year = currentDate.getFullYear()
    date=year + "-" + month + "-" + day+" "+h+":"+m+":00";
	//datas={"IDelv" : 21030, "taxo" :'20_20_20_20' ,"date": '1896-20-12',"table":'evalseconde','theme1':'510','valeur1':'5566001156','theme2':'520','valeur2':'8888888568'};	table='evalseconde';
	
	notebdd=anciennesnote+"_"+evalchoisie+"|"+notefinale;
		 datas={"IDelv" : code, "taxo" :moytaxo ,"date": date,"notes":notebdd};	console.log(datas);
			console.log(moytaxo);
			var j=0;	
			for(var IDs in validation){j++;
					datas['titre'+j]='theme'+NiveauUtilise[IDs];	
					datas['valeur'+j]=validation[IDs];
					
			} 
	 $.ajax({
				url:"evalnote_updatefin.php",
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


$('.fdbck').on('click', function(){	
	if($('.fdbck').hasClass('actif')){
		$('#fdbck').animate({right: "-600px"});$('.fdbck .awsm').html('&#xf0d8');}	
	else{
		$('#fdbck').animate({right: "0px"});$('.fdbck .awsm').html('&#xf0d7;');}
	$('h5.fdbck').toggleClass('actif');

}); 

$('#index').on('click','#lesque div', function(){	
		visualiserElmt('#laque'+$(this).attr('class').substr(10,11));
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
function escapeHtml(text) { 
	var map = { '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#039;' }; 
	return text.replace(/[&<>"']/g, function(m) {
		return map[m]; }); 
}
function couleur(val){
rge=255;vert=255;bleu=0;
if(val>50){rge=Math.round(255-5*(val-50));}
else if(val<50){vert=Math.round(5*val);}
else if(val=50){vert=255;rge=255;}
else if(val="undefined"){vert=244;rge=244;bleu=244;}
style='background:rgba('+rge+","+vert+','+bleu+',0.6);';
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