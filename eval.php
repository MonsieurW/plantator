<?php session_start(); ?>

<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
   <meta http-equiv="Content-Type" content="text/HTML; charset=ANSI_ç" />
	<link rel="shortcut icon" href="../commun/img/logomini.png" type="image/x-icon"/> 
	<title>Auto-évaluation Métaphysik</title>
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
<body <!--oncontextmenu="return false"-->>
  

<a id="logo" href="http://metaphysik.fr"><img src="../commun/img/logomkB.png" alt="logo metaphysik"></a>
<h1>Auto-évaluation</h1>
<section id="com">Choisis ton mode d'évaluation</section>
<header >
<h2 id="noform">Sans code<span class="awsm" data-com="Si tu n'as pas de code Metaphysik, tu peux toujours jouer avec le mode bac à sable, même si tu ne pourras pas visualiser ta progression.Tu peux <a href='newuser.html'>avoir un code Metaphysik</a>">&#xf05a;</span></h2><h2>input code</h2>
					<h2>Entrainement</h2>    <h2>Certification input</h2>


	<section id="cour" class='ouvert invisu'>
		< class="actif">
			<h4>Tu n'as pas de code</h4>
			Avoir un code Métaphysik te permettrait de suivre ta progression. Dommage...A moins que tu veuilles 
		</section>
		<section id="form" class="actif">
			<span class="awsm" data-com="Grâce à ton code Metaphysik, les items validés seront enregistrés. Tu pourras ainsi visualiser ton avancement et être efficace dans ton travail. Entrâine-toi à la maison pour être sûr de valider tes résultats lors des évaluations certifiées.">&#xf05a;</span><h4>Tu as un code</h4>
			
			<form>
				<input name="code" type="text" id="code" placeholder="Code Métaphysik" <?php echo 'value="'.$_COOKIE['codeMk'].'"'; ?>>
				<h4 class="validform">Entraînement</h4>
				<h4><?php if(!isset($_SESSION['pwd'])){
				echo'<input name="pwd" id="pwd" type="password" placeholder="Code de certification" style="font-size: 12px;">';
				}
				else
				{echo'Certification<input name="pwd" id="pwd" " style="display:none;" value="mkmolop">';}?>
				
				
					<input name="codecertif" type="text" id="codecertif" placeholder="Code Métaphysik"  <?php echo 'value="'.$_COOKIE['codeMk'].'"'; ?>>
						
			
		</section>
		<section id="certif" class="actif"><span class="awsm" data-com="Les résultats certifiés par le professeur pourront compter dans la moyenne.">&#xf05a;</span>
			
					<h4 class="validcertif">Valider</h4>
				</form>
			
		</section>
		<span id="erreur"></span>
	</section>

<section id="choix" class='ouvert'>
	<section id="niveaux"></section>
	<div id='progres'>Progres (items validés/semaine):</div>
	<section id="themes"></section>
</section>
<h2 id="chosen" class='ouvert'>Commencer l'évaluation! (environ <span class="index"></span> questions)</h2>
</header>

<div id="index">
	
	<div id="leniveau">
		<div id="lecompte"></div>
		<div id="lerang"></div>
	</div>
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
	<div id="lesthem"><span id="lenom"></span><img id="fbsh" src="https://www.techrevolutions.fr/wp-content/plugins/social-media-widget/images/default/32/facebook.png" alt="Facebook share" >
		
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

res_autoeval=["",0];progression={};voeux={};datatemp=[];
taxo={1:"",2:"",3:"",4:""};moytaxo="";NomEleve="";m=0;score=0;scoretotal=0;nbrque=0;
questiontemp={};validation={};NiveauUtilise={};pas=0;widthdiv=0;lestaxos=[];scoretheme=[5,5];

level={0:'Débutant',1:'Novice',2:'Apprenti',3:'Padawan',4:'Confirmé',5:'Chevalier',6:'Maître',7:'Grand Maître',8:'Expert',9:'Héros',10:'Metaphysicien'}
validate="&#xf00c;";	
invalidate="&#xf00d;";
///////////////Affichage niveau
$('header ').on('click','#cour.ouvert section', function(){
	$('#cour section').removeClass('actif');
	$(this).addClass('actif');
	if($(this).is('#noform')){
		elvmk=false;certif=false;afficheniveau("");}
});

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

$('header').on('click','.ouvert .validcertif', function(){
	pwd=escapeHtml($('#pwd').val());
	if((pwd=='mkmolo')||(pwd=='MKMOLO')||(pwd=='mkmolop')||(pwd=='MKMOLOP')){
		certif=true;$('#certif h4').html('Certifié');
		code=$(this).siblings('input[type="text"]').val();
		controlID(code,pwd);
	}
	else{erreur='Mot de passe incorrect';}
	
	$('#erreur').html(erreur);
	
});
$('header').on('click','.ouvert .validform', function(){	
	erreur="";
	certif=false;
	code=escapeHtml($(this).siblings('input[type="text"]').val());
	if((code>10000)&&(code<100000)){
		controlID(code,"");
	}
	else erreur='Code Metaphysik incorrect';
	$('#erreur').html(erreur);
	
});
function controlID(code,pwd){
	var currentDate = new Date();
	var h = currentDate.getHours();
    var m = currentDate.getMinutes();
    var day = currentDate.getDate()
    var month = currentDate.getMonth() + 1;
	if(month<10)month="0"+month;
    var year = currentDate.getFullYear()
    
	
	
			cocode={"code":code,"pwd":pwd};
			//console.log(cocode);
				$.ajax({
					url:"ctrl_id_rslt.php",
					data: cocode,
					dataType : 'html',
					type : 'GET', 
					error:function(jqHxr,statut,error){console.log('erreur:'+error)},	
					success:function(data) {//console.log(data);
					datas=JSON.parse(data);//console.log(datas);
						if(datas['v']==1){elvmk=true;}
						$('#erreur').html(datas['valid']);
						IDniveau=(datas['ID']+"").substring(0,1);
						afficheniveau(IDniveau);
						$('#aide2').removeClass('evidence');
						NomEleve=datas['Nom'];
						sepa=datas['Date'].split(" ");
						jour=sepa[0].split("-");
						min=sepa[1].split(":");
						temps=60*(h-min[0])+m-min[1];
						if(((jour[0]<year)||(jour[1]<month)||(jour[2]<day))||(temps>60)||(certif==true)){
							$('#index #lenom').html(NomEleve);
							affichetheme(IDniveau);
							lestaxos=datas['taxo'].split('_');
							for(var i=1;i<5;i++){
								$('#index #letaxo'+i+' .ancien').height(Math.round(parseInt(lestaxos[i-1]*0.39)+1)+'px');
							}	
							achoisi();
						}
						else {$('#niveaux').html('Tu dois encore attendre '+(60-temps)+' minutes avant de rejouer.');
						}						
						
						
					}						
				});  	
	
	$('#erreur').html(erreur);
}	

$('header').on('click',' .ouvert #niveaux h3', function(){
	$('#niveaux h3').removeClass('choisi');
	$(this).addClass('choisi');
	affichetheme($(this).data('niv'));
});



function afficheniveau(IDniveau){
	html="<div>";nivchoiz="";
	for(niveau in themes){
		var Name=classs[niveau]['nom'];
			if(elvmk){
				if(IDniveau==niveau)html+='<h3 class="choisi" data-niv="'+niveau+'">'+Name+'</h3>';
			}
		else{
			html+='<h3 data-niv="'+niveau+'">'+Name+'</h3>';
		}
	}
	html+="</div>";
	$('#niveaux').html(html);
	
	if(!elvmk){
		$('#niveaux').addClass('invisu');
		$('#cour').removeClass('invisu');
		$('#com').html("Choisis ton niveau scolaire").slideDown(); }
	else{
		$('#com').html("Choisis les items sur lesquels tu veux être évalué en cliquant sur les thèmes. Les items grisés ne sont pas de ton niveau.<br/><u>Code couleur:</u><br/> <b>Vert:</b> validé et certifié<br><b>Cyan:</b>validé sans être certifié<br><b>Orange et Rouge:</b> non-validé").slideDown();
	$('#themes').addClass('invisu');
	$('html, body').animate({
        scrollTop: $('#themes').offset().top-180
    }, 1000);
	$('#niveaux').removeClass('invisu');
	}	
}


	
function affichetheme(IDniv){
	
	html="";symbole="";
	
	//Affichage progression
	if(elvmk){html+="";
		if((datas['progres']!="")&&(datas['progres']!="undefined")){
		prog=datas['progres'].split('_');lg=prog.length;//console.log(prog);
			
			for(var i=lg-4;i<lg;i++){
				if((typeof prog[i]!="undefined")&&(prog[i]!="")){//console.log(prog[i]);
					pro=parseInt(prog[i]);progg= 10*pro;
					progg=(progg>100)? 100: progg;
					html+='<span style="'+couleur(progg)+hauteur(progg)+'">'+pro+'</span>';	
				}
					
			}
		}
	else{html+="Aucun";}	
	}
	$('#progres').html(html); html="";
	
	//console.log(IDniv);
	for(var t in classs[IDniv]['items']){
		NiveauUtilise[classs[IDniv]['items'][t]]=t;
		
	}
	////////////////////////////////////Affichage themes
	for(var n in themes[IDniv]){
	if(scoretheme[0]/scoretheme[1]>0.8){
		
		IDthLong=themes[IDniv][n];
		var ID=parseInt((IDthLong+"").substring(0,3));
		var nivomin=parseInt((IDthLong+"").substring(3,5));
		console.log(ID);
		console.log(NiveauUtilise[ID]);
		
		html2="";html3="";scoretheme=[0,0];
		if(elvmk){rslt=datas[('theme'+NiveauUtilise[ID])].split("");}
		for(var n in theme[ID]){
			if(n!=0){
				if(elvmk){
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
				}
				else{bckgnd='255,255,255';}
				grise="";
				nivitem=parseInt(nivo[ID][parseInt(n)-1]);
				nivv=nivomin;
				if(nivomin>nivitem){grise=" grise";nivv='0';}
				else{scoretotal++;scoretheme[1]++;}
				if(certif){
					if((rslt[parseInt(n)-1]=='5')||(rslt[parseInt(n)-1]=='8')){
					grise+=" inchoisissable";symbole+="<span class='awsm'>&#xf023;</span>";
					}
				}		
				html2+="<h5 class='"+grise+"' style='background:rgba("+bckgnd+",0.6);' data-id='"+ID+""+n+"'><a title='Ressources sur cet item' target='blank' class='lienmk'  href='http://metaphysik.fr/manuel/index.php?id="+ID+"0"+nivv+"88#item"+n+"'><img src='../commun/img/logomkpicBarrow.png'></a>"+symbole+n+"/"+theme[ID][n]+"</h5>";
					
				html3+="<span class='"+grise+"' style='background:rgba("+bckgnd+",1);' data-id='"+ID+""+n+"'>"+n+"</span>";
				}
		}
		
		html+="<article class='theme' data-id='"+IDthLong+"'>";
		html+="<h4 >"+theme[ID][0]+" (<span class='leschoiz'>0</span>)<div class='resume'>"+html3+"</div></h4><article>"+html2+"</article></article>";	
	}	
		
		
	}
	$('#themes').css('display','block').html(html); html="";
	scorefinal=Math.round(score/scoretotal*100);
	$('#lecompte').width(4.5*scorefinal+'px');
	$('#lerang').html(level[Math.round(scorefinal/10)]);
	$('#fbsh').attr('onclick',"window.open('https://www.facebook.com/sharer/sharer.php?u=metaphysik.fr%2Feval%2Feval.php?msg=Je suis passé "+level[Math.round(scorefinal/10)]+"!', 'facebook_share', 'height=320, width=640, toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, directories=no, status=no');");
	for(var i=1;i<5;i++){
		$('#index #letaxo'+i+' .awsm').html(taxonomie[i][2]);
	}
	$('#index').slideDown();
	$('#com').html("Choisis les items sur lesquels tu veux être évalué en cliquant sur les thèmes. Les items grisés ne sont pas de ton niveau.<br/><u>Code couleur:</u><br/> <b>Vert:</b> validé et certifié<br><b>Cyan:</b>validé sans être certifié<br><b>Orange et Rouge:</b> non-validé").slideDown();
	$('#themes').addClass('invisu');
	$('#niveaux,#cour').removeClass('invisu');
}

	



$('body').on('click','.ouvert #themes h4,#rethemes h4', function(){
	$(this).next('article').slideToggle();		
});

$('header').on('click','.ouvert #themes h5:not(.inchoisissable)', function(){
	$(this).toggleClass('choisi');
	$ceTheme=$(this).parents('.theme');
	nbritem=$ceTheme.find('h5.choisi').length;
	if(nbritem>0){$ceTheme.attr('data-choiz',1);}
	nombrequestions=($('#themes h5.choisi').length)*3;
	$ceTheme.find('h4 .leschoiz').html(nbritem);
	$('.index').html(nombrequestions);
	$('#chosen').slideDown();
	$('#lesthem div').remove();
	$('#themes h5.choisi').each(function(){
		var ID=parseInt(($(this).data('id')+'').substring(0,3));
		var IDit=parseInt(($(this).data('id')+'').substring(3,5));	
		$('#lesthem').append('<div data-id="'+ID+""+IDit+'">'+theme[ID][0]+' /'+IDit+'<span class="awsm"></span></div>');
	});
});

$(' #chosen.ouvert').on('click',function(){
	$('#lesthem div').remove();
	achoisi();$('header section').removeClass('ouvert');
	$(this).removeClass('ouvert');
	$('.theme article').slideUp();
	$('#com').html("Réponds à la question mise en exergue et suis tes résultats sur le tableau de bord à gauche.<br/>Des détails te seront données quand toutes les questions seront traitées").slideDown();
	
	$('#themes').removeClass('invisu');
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
	req={'item':th};htmll='<span class="awsm" data-com="On valide un item avec 100% de bonnes réponses. Les résultats seront enregistrés une fois toutes les questions traitées.">&#xf05a;</span>';
		$.ajax({
					url:"../tutorat/evalquestions.php",
					data: req,
					dataType : 'html',
					type : 'GET',
					async:false,					
					error:function(jqHxr,statut,error){console.log('erreur:'+error)},	
					success:function(data) {//console.log(data);
						if(data!='null'){
							datas=JSON.parse(data);//console.log(datas);
							for(var it in voeux[th]){//console.log(voeux[th]);
							
								dataitems=datas[th+""+it];//console.log(dataitems);
								if(dataitems!=undefined){
									$('#lesthem').append('<div data-id="'+th+""+it+'">'+theme[th][0]+' /'+it+'<span class="awsm"></span></div>');
		
									n=0;datatemp.length=0;
									for(var ID in dataitems){
										datatemp[n]=ID;n++;
									}
									
									shuffle(datatemp);//console.log(datatemp);
									for(var i=0;i<3;i++){
										if(dataitems[datatemp[i]]!=undefined){	
											htmll+=genquestion(dataitems[datatemp[i]]);
											//console.log(i);console.log(dataitems[datatemp[i]]);
										}
									}
									pas=Math.round(360/nbrque);
									m=0;
									$('#lesque div').each(function(){
									$(this).css('transform','rotate('+m+'deg)');
									m+=pas;
									});
								}
								else{htmll+="<br><article>Les questions pour l'item "+th+""+it+"/"+theme[th][it]+" ne sont pas encore créées </article>";
								}
							}	
						}
						else{
							htmll+="<br><article>Les questions pour le theme "+th+"/"+theme[th][0]+" ne sont pas encore créées </article>";
								}
					//	console.log(htmll);
						$('#questionnaire').append(htmll).slideDown();	
						 $('#laque1').addClass('invisu');
						
						}
						
													
				}); 
	}		
		
}
				
//////////////////////////////////Acquisition réponse
	
// clair #03DBDB  rgb(3, 219, 219) intermédiare #16D9DD plus foncé rgb#30BAC7 rouge 214 17 8

$('#questionnaire').on('click','.ouvert .rep', function(){
		$(this).parent('div').children('.rep').removeClass('actif');
		$(this).addClass('actif');
		$(this).parent('div').next('.autoeval').slideDown();
	
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
	
	
	voeux[ID][IDit]+=valeurrep;
	taxo[taxoquestion]+=valeurrep;
	autoevaluation($(this).attr('class'),valeurrep);
	actualiserCurseurs();
	if(valeurrep==0){
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
		$reponse.siblings('[data-val="1"]').css('color','#A1F184');
		$article.removeClass('ouvert').find('.lock').html('&#xf023;');
	if($('#questionnaire article.ouvert').length==0){
		$('#questionnaire article').removeClass('invisu');
		$('#com').slideUp();
		calculrslt();
		if(elvmk)contactbdd();	
		$('#taxo').after("<section id='neweval'><a href='eval.php'><h2>Nouvelle évaluation</h2></a></section>");
	}
	else{
		visualiserElmt('#'+$article.next('article').attr('id'));
	}
	
});	
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
					
					if(oldth!=m){html+="</article><article id='rslt"+m+"'><h6>"+theme[m][0]+"</h6><div>";
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
					
					html+='<a href="http://metaphysik.fr/manuel/index.php?id='+m+'0088#item'+n+'" style="'+couleur(prcent)+'">'+
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
							else html+='<span class="solution actif">Tu peux encore progresser dans ton auto-évaluation</span>';							
	
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

	for(var n in taxo){//edition html résultat taxo
					if(taxo[n]!=""){
						
						moy=Math.round(moyenne(taxo[n])*100);
						html+='<article><span class="awsm logotaxo" style="'+couleur(moy)+'">'+taxonomie[n][2]+'</span><span class="nomtaxo">'+taxonomie[n][0]+'<br/>'+moy+' %</span>';
						lestaxos[n-1]=(lestaxos[n-1]=='NN')?0:lestaxos[n-1];
						html+=(moy>=lestaxos[n-1])?'<span class="awsm">&#xf14c;</span>':'<span class="awsm" style="transform:rotate(90deg)">&#xf14c;</span>';

						if(n==index){
							if(moy==100)html+='<span class="solution actif">Excellent travail! Félicitations!<br/> Tu peux progresser encore en réexpliquant aux autres ce que tu as compris</span></article>';
							else html+='<span class="solution actif">'+taxonomie[n][1]+'</span></article>';}
						else html+='<span class="solution">'+taxonomie[n][1]+'</span></article>';	
						
					}	
					else{moy="NN";
					html+='<article><span class="awsm logotaxo" style="background:rgb(245, 243, 243)">'+taxonomie[n][2]+'</span><span class="nomtaxo">'+taxonomie[n][0]+'<br/>Non évalué </span><span></span><span class="solution">Non évalué cette fois-ci</span></article>';
					}
					moytaxo+=moy+'_';
	}
	html+='</section>';
	moytaxo=moytaxo.substring(0,moytaxo.length-1);
	$('#taxo').html(html).slideDown();
	
	
	
		scorefinal2=Math.round(score/scoretotal*100);
		$('#leniveau').append('<div id="lecompte" class="new" style="width: '+4.5*(scorefinal2-scorefinal)+'px;left:'+4.5*(scorefinal)+'px;"></div>');
	
		$('#lerang').html(level[Math.round(scorefinal2/10)]);
		$('#fbdes').attr('content',"J'ai testé ma maîtrise de la matière! Je suis arrivé jusqu'au niveau "+level[Math.round(scorefinal2/10)]);
		
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
		 datas={"IDelv" : code, "taxo" :moytaxo ,"date": date};	
			
			var j=0;	
			for(var IDs in validation){j++;
					datas['titre'+j]='theme'+NiveauUtilise[IDs];	
					datas['valeur'+j]=validation[IDs];
					
			} 
			//console.log(datas);					
	$.ajax({
				url:"eval_updatefin.php",
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
//essai

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
				
function genquestion(data){
if(data!=undefined){

	nbrque++;
	div="<div class='awsm laque"+nbrque+"' >"+taxonomie[data['Taxo']][2]+"</div>"
	
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
	
ht+="<article class='ouvert' id='laque"+nbrque+"' data-id='"+data['item']+"' data-taxo='"+data['Taxo']+"' title='"+data['item']+"'><div class='querep'><p class='que'><span class='awsm' title='"+taxonomie[data['Taxo']][0]+"'>"+taxonomie[data['Taxo']][2]+"</span>"+data['question']+"<span class='awsm lock'>&#xf13e;</span></p>";

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