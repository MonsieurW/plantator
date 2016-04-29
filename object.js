

latable='plantetest';latabletemp='plantetemptest';//plantetest,plantetemptest

//froid<span class="awsm">&#xf069;</span>

titreschoisis=['noms','calendar','vies','enver','soleil','solriche','compagnons','autres']


titres={//quelles sont les différentes cases et leurs contenus
	noms:{desc:'Nom',chp:['nom','famille'],colorbox:'white'},
	calendar:{desc:'Calendrier',chp:['semisext','semisabri','semisint','RECOLTE','repiq'],colorbox:'#3EF53E'},
	vies:{
		desc:'Durée de vie',chp:['vie','vivace','type'],colorbox:'#54CEAD'
	},
	compagnons:{
		desc:'compagnonage',chp:['associe','antiassocie']
	,colorbox:'#0FA500'},
	solriche:{
		desc:'Occupation du sol ',chp:['solriche','racine'],colorbox:'#FFA500'},
	enver:{
		desc:'Envergure',chp:['hauteur','largeur'],colorbox:'&#xf07d;'},
	soleil:{
		desc:'Ensoleillement ',chp:['soleil'],colorbox:'#54CEAD'
	},
	multip:{desc:'Multiplication',chp:['multi','Tmin'],colorbox:'#00C2FF'},
	semis:{desc:'Semis',chp:['prof','drang','dligne'],colorbox:'#D8D5D5'},
	sol:{desc:'Sol',chp:['pH','eau'],colorbox:'#E8ADAD'},
	autres:{desc:'Autres',chp:['rendement','tpslevee','tpsconserv','utilisation','commentaire'],colorbox:'#E0ADAD'}
		
};

//A rajouter :
//multii={1:'bouture',2:'division',3:'marcottage',4:'rejet',5:'semis',6:'greffe'};
//nomlatin: {descr:'nom latin',type:'text',clr:'white',img:'' } ,
	// moistaille: {descr:'Mois de taille',type:'mois',clr:'#D8D5D5',img:''} ,
	//moisflo: {descr:'Mois de floraison',type:'mois',clr:'#D8D5D5',img:''} ,
champsdb={
		'nom':{
			type:'text',avt:'',aps:'',expl:'nom usuel '},
		
		
		'associe':{
			type:'plant',expl:'Bons compagnons: ',img:'&#xf164;',width:500},
		'antiassocie':{
			type:'plant',expl:'Associations néfastes: ',img:'&#xf165;',width:500},
		'commentaire':{expl:'Commentaire',type:'text',img:'',avt:'',aps:'' } ,
			conservalimt: {expl:"Conservation de l'aliment(en jours)",type:'nbr',img:'' },	
		'drang':{
			expl:'espacement dans le rang(cm)',type:'nbr',clr:'#D8D5D5',img:'',avt:'&#xf07e;',aps:'cm'} , 
		'dligne':{
			expl:'espacement dans la ligne(cm)',type:'nbr',clr:'#D8D5D5',img:'',avt:'&#xf07d;',aps:'cm'} ,
		
		'eau':{
			type:'color',expl:'sol ',clr:["",'#BFBB00','brown','#FF0000'],img:'&#xf1b3;',lgd:["",'sableux/léger','équilibré','argileux/lourd']},
		'famille':{
			type:'text',avt:'',aps:'',expl:'famille'},	
		
		'racine':{
			type:'picto',expl:'racine ',lgd:["",'pivotante','traçante','fasciculée'],img:["",'Y','W','^']},	
		'hauteur':{
			expl:'hauteur ',type:'nbr',avt:'&#xf07d;',aps:'cm'},
		'largeur':{
			expl:'largeur ',type:'nbr',avt:'&#xf07e;',aps:'cm'},
		'multi':{
			expl:'multiplication par ',type:'text',avt:'',aps:''},
			
		'pH':{
			type:'color',clr:['','red','green','blue'],img:'pH',expl:'pH',lgd:["",'acide','neutre','basique']},
		
		
		'prof':{
			expl:'profondeur ',type:'nbr',avt:'&#xf175;',aps:'cm'},
		
		'recolteDeb':{
			type:'mois',img:'Rd',expl:'Début de la récolte '},
		'recolteFin':{
			type:'mois',img:'Rf',expl:'Fin de la récolte '},
		'RECOLTE':{
			type:'periode',debPer:'recolteDeb',finPer:'recolteFin',img:'R',expl:'Récolte: ',top:48},
		'rendement':{
			expl:'Nombre de kg/m² lors de la récolte',type:'nbr',img:'' ,avt:'',aps:'kg/m²'},
		'repiq':{
			type:'mois',img:'Rq',expl:'Repiquage ',top:29},
		'semisext':{
			type:'mois',img:'Se',expl:'Semis extérieur ',top:10},
		'semisabri':{
			type:'mois',img:'Sa',expl:'Semis abri ',top:5},
		'semisint':{
			type:'mois',img:'Si',expl:'Semis intérieur ',top:0},
		'solriche':{
			type:'picto',expl:'besoins en nutriments ',lgd:['','faibles','moyens','élevés'],img:['','&#xf006;','&#xf123;','&#xf005;']},
		
		'soleil':{
			type:'picto',expl:'ensoleillement ',lgd:['','important','moyen','faible'],img:["",'&#xf185;','&#xf185;/&#xf0c2;','&#xf0c2;']},
		
	
		'Tmin':{
			expl:'Température mini=',type:'nbrnul',avt:'&#xf069;',aps:'°C'},
		
		'tpslevee':{
			expl:'Nombre de jours de la graine à la plantule',type:'nbr',img:'' } ,
	
			
		 'tpsconserv':{
			expl:'Durée de conservation des semences (années)',type:'nbr',img:'' } ,
			
		'utilisation':{
			expl:'Autres utilisation de la plante',		type:'text',img:'' } ,
	// medecine: {descr:'Utilisation médecinale de la plante',type:'medecin',clr:'#54CEAD',img:'' } ,
		
			
		'type':{
			expl:'partie comestible de la plante',type:'pictomulti',lgd:['','feuille','fruit','fleur','racine','tige'],img:['','&#xf06c;','&#xf094;','&#xf1e9;','&radic;','I']},
		
		'vie':{
			type:'nbr',avt:'Vit ',aps:' an(s)',expl:'espérance de vie (ans) '},
			
		'vivace':{
			type:'bool',1:'vivace&#xf0e2;',0:"annuelle",expl:'Vivace '
			}
};
criteretri={
	'famille':'text',	
	'hauteur':'nbr',
	'soleil':'nbr',
	'eau':'nbr',
	'pH':'nbr'
};


criterefiltre={
	'vivace':{expl:'',
		typ:'val',values:{0:'annuelle',1:'vivace'}},
	'hauteur':{expl:'',
		typ:'categorie',values:{'0_15':'couvre-sol',
					'15_100':'petite plante',
					'100_200':'arbuste',
					'200_10000':'arbre'}},	
	'solriche':{expl:"Besoin en nutriments",
				typ:'val',values:{
					1:'faible',2:'moyen',3:'élevé'}},
	'semisext':{expl:"semis exterieur",
		typ:'val',values:{
			1:"Janvier",2:"Février", 3:"Mars",4:"Avril",5:"Mai",6:"Juin",7:"Juillet",8:"Août",9:"Septembre",10:"Octobre",11:"Novembre",12:"Décembre"}},	
	'recolte':{expl:"récolte",
		typ:'period',deb:'recolteDeb',fin:'recolteFin',values:{1:"Janvier",2:"Février", 3:"Mars",4:"Avril",5:"Mai",6:"Juin",7:"Juillet",8:"Août",9:"Septembre",10:"Octobre",11:"Novembre",12:"Décembre"}}
};



nvlentree='<h6><span>Nouvelle plante </span><span class="famille">Inconnue</span></h6><div><span class="awsm edit" id="NULL" style="margin-left: 200px;">&#xf044;</span></div>';

mois={0:'',1:"Janvier",2:"Février", 3:"Mars",4:"Avril",5:"Mai",6:"Juin",7:"Juillet",8:"Août",9:"Septembre",10:"Octobre",11:"Novembre",12:"Décembre"};


function generer_chps_acqu(p,pt){
	comp=(pt!=0)?1:0;
	//html="";
	//console.log(p);
for(var d in titres){
		clrBx=titres[d]['colorbox'];
	for(var c in titres[d]['chp']){
		diff="differe";
		Chp=titres[d]['chp'][c];
		propChamp=champsdb[Chp];//console.log(propChamp);
		if(propChamp['type']!='periode'){
			w=(propChamp['width'])?'width:'+propChamp['width']+'px;':'';
			if(comp)diff=(p[Chp]==pt[Chp])?"pareil":"differe";
			html+='<div class="'+Chp+' '+diff+'" style="'+w+'background:'+clrBx+'" id="'+Chp+'">'+propChamp['expl'];
			switch(propChamp['type']){
				case 'mois':
					html+='<select name="'+Chp+'">';
					for(var m in mois){
						html+='<option value="'+m+'"';
						if(p[Chp]==m)html+=' selected="selected"';	
						html+='>'+mois[m]+'</option>';
					}
					html+='</select>'; 
				break;
				
				case 'picto':
				html+='<select name="'+Chp+'">';
					for(var i in propChamp['lgd']){
						html+='<option value="'+i+'"';
						if(p[Chp]==i)html+=' selected="selected"';	
						html+='>'+propChamp['lgd'][i];
						html+=(propChamp['img'])?propChamp['img'][i]:'';
						html+='</option>';
					}
					html+='</select>'; 
				break;
				case 'color':
				html+='<select name="'+Chp+'">';
					for(var i in propChamp['lgd']){
						html+='<option style="color:'+propChamp['clr'][i]+'" value="'+i+'"';
						if(p[Chp]==i)html+=' selected="selected"';	
						html+='>'+propChamp['lgd'][i]+'</option>';
					}
					html+='</select>'; 
				break;
				
				case 'pictomulti':
					splited=p[Chp].split('_');
					for(var i in propChamp['lgd']){
						if(i!=0){html+='<label><input class="chk" type="checkbox" name="'+Chp+'" value="'+propChamp['lgd'][i]+'"';
						if($.inArray(propChamp['lgd'][i],splited)!=-1)html+=' checked';	
						html+='>'+propChamp['lgd'][i]+propChamp['img'][i]+'</option>';}
					} 
				break;
				
				case 'bool':
					html+=(propChamp['img'])?propChamp['img']:'';
					html+='<select name="'+Chp+'">';
					html+='<option value="0"';
					if(p[Chp]==0)html+=' selected="selected"';	
					html+='>'+propChamp[0]+'</option><option value="1"';
					if(p[Chp]==1)html+=' selected="selected"';	
					html+='>'+propChamp[1]+'</option>';
					html+='</select>'; 
				break;
				
				
				case 'typlant':
				typesss=p[Chp].split('_');
				for(var i in typlant){
						html+='<label><input class="chk" type="checkbox" name="'+Chp+'" value="'+i+'"';
						if($.inArray(typlant[i],typesss)!=-1)html+=' checked';	
						html+='>'+i+'</label>';
					}
				break;
				
				case 'multii':
				typesss=p[Chp].split('_');
				for(var i in multii){
						html+='<label><input class="chk" type="checkbox" name="'+Chp+'" value="'+i+'"';
						if($.inArray(typlant[i],typesss)!=-1)html+=' checked';	
						html+='>'+multii[i]+'</label>';
					}
				break;
				
				case 'plant':
				autresplantes=p[Chp].split('_');
				famille=plante[keysSorted[0]]['famille'].toLowerCase();num_famille=0;html2="";html3="";
				for(k in keysSorted){
					if(plante[keysSorted[k]]['famille'].toLowerCase()!=famille){
						famille=plante[keysSorted[k]]['famille'].toLowerCase();num_famille++;}
						html2+='<label class="f'+num_famille+'"><input class="chk" type="checkbox" name="'+Chp+'" value="'+plante[keysSorted[k]].ID+'"';
						if($.inArray(plante[keysSorted[k]].ID,autresplantes)!=-1)html2+=' checked';	
						html2+='>'+plante[keysSorted[k]].nom+'</label>';
						//html3+=plante[keysSorted[k]].nom+', ';
					}
				html+='<img class="deroul" src="../commun/img/plusspetit.png"><div class="tiroir">'+html2;
				html+='</div>';	
				break;
				
				default:
				html+=(propChamp['img'])?propChamp['img']:'';
				html+='<input type="text" name="'+Chp+'" placeholder="'+propChamp['expl']+'" value="'+p[Chp]+'">';
				break;
				
		}
		html+='</div>';
	}
	}
	
		
	}
}	

function recup_donnees($obj,typ){
	value='';
		switch(typ){
			case 'color':
			case 'bool':
			case 'mois':
			case 'picto':
				value=$obj.find('select option:selected').attr('value');
			break;
			case 'pictomulti':
				$obj.find('input:checked').each(function(index){
					value+=$(this).attr('value')+'_';
				});
			break;
			case 'plant':
				$obj.find('input:checked').each(function(index){
					value+=$(this).attr('value')+'_';
				});
			break;
			default:
				value=$obj.find('input').val();
			break;
		}console.log(value);
		return value;
	}

function clefsordonnees(critere){console.log('trie');
	return 	Object.keys(plante).sort(function(a,b){
		return plante[a][critere].toLowerCase().localeCompare(plante[b][critere].toLowerCase());
	});
}
function clefsordonneesnbr(critere){
	return 	Object.keys(plante).sort(function(a,b){
		critera=(plante[a][critere]!="")?parseInt(plante[a][critere]):0;
		criterb=(plante[b][critere]!="")?parseInt(plante[b][critere]):0;
		return critera-criterb;
	});
}

/*function aide(){
contenu="<h1>Bienvenue sur le plantator!</h1>Tu peux obtenir des informations en cliquant sur ce que tu ne comprends pas.<br/>Dans le plantator, tout est open-source et libre de droit! Si tu es motivé pour aider <a style='color:cyan' href='http://padlet.com/adressedallan/w54pkq3y9p75'>viens voir par là</a> ou <a href='http://padlet.com/adressedallan/mrgogmsycyur'>t'exprimer par là</a> <br/>Tu peux compléter les infos manquantes grâce au bouton <span class='awsm edit' style='display:inline'>'"+pictos.edition+"'</span> pour faire plaisir aux suivants! Pour la recherche d'un nom particulier tape Control+F (sous Windows) ou Cmd+F (sous Mac)";
affchbulle(contenu,$('#logo'),'titre')

}
*/
/*function affchbulle(contenu,obj,type){
	$('.actif').removeClass('actif');
	obj.addClass('actif');
	x=obj.offset().left;
	if(type=='titre'){
	content='<div style="left:'+x+'px;top:59px;position:fixed">'+contenu+'<span id="close">X</span></div>';
	}
	else{
	y=obj.offset().top;//console.log(x+','+y);
	content='<div style="left:'+x+'px;top:'+(y+40)+'px">'+contenu
	+'<span id="close">X</span></div>';}
	$('#comment').html(content);
}
*/
	