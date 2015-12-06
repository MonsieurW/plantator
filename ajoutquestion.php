<?php session_start(); ?>

<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
   <meta http-equiv="content-type" content="text/html; charset=ANSI" />
	<link rel="shortcut icon" href="../commun/img/logomini.png" type="image/x-icon"/> 
	<title>Ajout question</title>
	<meta name="description" content="Découverte problème scolaires"/>
	<meta name="keywords" content="métaphysik,pourquoi, comment,physique,chimie, Paris,,cours,exercices,animations pour apprendre" />
	
	
	<link href="../manuel/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	
	
	<link rel="stylesheet" title="style_commun" media="screen" type="text/css" href="ajoutque.css"/>

	
	<link  href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
	<link href="../commun/font-awesome/css/font-awesome.min.css" rel="stylesheet">	

</head> 
<body>
<a href="http://metaphysik.fr"><img src="../commun/img/logomkB.png" alt="logo metaphysik"></a>
<!--<h1>Ajout questionnaire automatique </h1>
	<section id="themes"></section>
	<section id="main"></section>

-->

<textarea rows="10" cols="150"></textarea>
<h2 id="visu">Visualiser</h2>
<section id="visualisation"></section>
<h2 id="envoi">Envoyer</h2>


<h1>Verification question </h1>
<section id="themess"></section>
<section id="mains"></section>

<a href="https://docs.google.com/spreadsheets/d/188AGkIn3cW13_Wc2TYIbwVjt_B-VLVU9QGZnhx54mkY/edit#gid=0">Tableur de questions</a>


<section style="display:none" id="hidden">
<?php include_once('../tutorat/evalmysql.php');?>
</section>
	</body>
	
	 <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	 <script src="../tutorat/eval.js" type="text/javascript"></script>
	<script>
//Restafaire
//lien vers tableau prof
//récuperer progression et créer stockage ds table

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



html="";
for(var i in theme){
		for(var j in theme[i]){
			if(j=="0")html+='<h3>'+i+'/'+theme[i][j]+'</h3><article>';
			else html+='<h4 id="it'+i+j+'">'+j+'/'+theme[i][j]+'</h4>';
		}	
	html+='</article>';
}	
	$('#themes').append(html);
	$('#themess').append(html);



$('.fdbck').on('click', function(){	
	if($('.fdbck').hasClass('actif')){
		$('#fdbck').animate({right: "-600px"});$('.fdbck .awsm').html('&#xf0d8');}	
	else{
		$('#fdbck').animate({right: "0px"});$('.fdbck .awsm').html('&#xf0d7;');}
	$('h5.fdbck').toggleClass('actif');

}); 
input={};

$('#visu').on('click', function(){
	readtextarea();$('#mains').slideUp();
});

$('#envoi').on('click', function(){
	input['envoi']=true;$('#mains').slideUp();
	datas=readtextarea(); 
$('#envoi').css('background','green');	
});

function readtextarea(){
	
	donnees=escapeHtml($('textarea').val());
	//console.log(donnees);
	donnee=donnees.split("\n");
	var n=0;
	for(var i in donnee){
		unit=donnee[i].split("\t");
		input['taxo'+n]=unit[0];
		input['que'+n]=unit[1];
		input['rep'+n]=unit[2];
		input['item'+n]=unit[3];
	n++;
	}
	$.ajax({
					url:"ajoutque.php",
					data: input,
					dataType : 'html',
					type : 'GET', 
					error:function(jqHxr,statut,error){console.log('erreur:'+error)},	
					success:function(data) {console.log(data);			
					datas=JSON.parse(data);html="";
					for(var i in datas){
						html+=genquestion(datas[i]);
					}
					
					$('#visualisation').html(html);
					}						
				});  	
	
	
	
}


$('body').on('click','h3', function(){
	$('h3').removeClass('actif');
	$('#themess article').slideUp();
	$(this).addClass('actif').next('article').slideDown();
});

$('#themes').on('click','h4', function(){
	block='<section id="'+$(this).attr('id')+'"><h5>'+$(this).html()+'</h5><div class="taxo"><div data-val="1">Connaître</div><div data-val="2">Comprendre</div><div data-val="3">Appliquer</div><div data-val="4">Analyse</div></div><input class="que" type="text" placeholder="Ecris ici ta question"><div class="reponses"><input class="rep" type="text" placeholder="Réponse 1"><span title="cocher si réponse vraie" class="awsm"></span><input class="rep" type="text" placeholder="Réponse 2"><span title="cocher si réponse vraie" class="awsm"></span><input class="rep" type="text" placeholder="Réponse 3"><span title="cocher si réponse vraie" class="awsm"></span><input class="rep" type="text" placeholder="Réponse 4"><span title="cocher si réponse vraie" class="awsm"></span></div></section>';

	$('#main').append(block);
	
});

$('#main').on('click','.taxo div', function(){
	$(this).siblings('div').removeClass('choisi');
	$(this).addClass('choisi');
});
$('#main').on('click','.reponses .awsm', function(){
	$(this).toggleClass('choisi');
});
$('#env').on('click', function(){
	$('#main section').each(function(){
		id=$(this).attr('id');
		taxo=$(this).children('.taxo').children('.choisi').attr('data-val');
		que=$(this).children('.que').val();
		$(this).children('.reponses').children('.rep').each(function(){
			rep=$(this).val();
			if(rep!=""){
				if($(this).hasClass('choisi')){
				valrep=1;	
				}
				else{valrep=0;}
			}
		});
	});
	$.ajax({
					url:"../tutorat/ajoutajax.php",
					data: dataz,
					dataType : 'html',
					type : 'GET', 
					error:function(jqHxr,statut,error){console.log('erreur:'+error)},	
					success:function(data) {console.log(data);
					datas=JSON.parse(data);
						
					}
				
													
				});  	
	
});

$('#themess').on('click','h4', function(){
	$('#themess article h4').removeClass('actif');
	$(this).addClass('actif');
	i=parseInt($(this).attr('id').substring(2,7));console.log(i);
req={'item':i};
		$.ajax({
					url:"../tutorat/evalquestions.php",
					data: req,
					dataType : 'html',
					type : 'GET', 
					error:function(jqHxr,statut,error){console.log('erreur:'+error)},	
					success:function(data) {//console.log(data);
					datas=JSON.parse(data);console.log(datas);
					htmll="";
						dataitems=datas[i];
							for(var ID in dataitems){question=dataitems[ID];
								htmll+=genquestion(question);
								
							}
						
							
						$('#mains').html(htmll).slideDown();
					}							
				}); 
				
});
});

function genquestion(data){
if(data!=undefined){console.log(data);
	ht="";var elem = document.createElement('textarea');
elem.innerHTML = data['reponse'];
	reps=elem.value.split(';');
	
		var IDth=parseInt(data['item'].substring(0,3));
		var IDit=parseInt(data['item'].substring(3,5));
					//indications corrections
	
	ht+="<article class='ouvert' data-id='"+data['item']+"' data-taxo='"+data['Taxo']+"' title='"+data['item']+"'><span class='details'>Taxo"+data['Taxo']+" = "+taxonomie[data['Taxo']][0]+" <i>"+theme[IDth][IDit]+"</i></span><div class='querep'><p class='que'>"+data['question']+"<span class='awsm'>&#xf13e;</span></p>";

	for(var j in reps){
						split=reps[j].split('_');
						color="";
						//indications correction
						if(split[1]==0){color='#FFC269';}
						else if(split[1]>0){color='#23CF7A';}
						
						ht+="<p class='rep' style='color:"+color+";' data-val='"+split[1]+"' >"+split[0]+"</p>";
		}
				ht+="</div></article>";
			}	
	return ht;	
}	

function escapeHtml(text) { 
	var map = { '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;' }; 
	return text.replace(/[&<>"]/g, function(m) {
		return map[m]; }); 
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