<?php include("header.php") ?>
<?php include("global/menu.php") ?>
<script src="js/jquery.min.js"></script>

<script type="text/javascript" src="jsonf/dips.js"></script>
<script type="text/javascript">
function QueryString () {
  // This function is anonymous, is executed immediately and 
  // the return value is assigned to QueryString!
  var query_string = {};
  var query = window.location.search.substring(1);
  var vars = query.split("&");
  for (var i=0;i<vars.length;i++) {
    var pair = vars[i].split("=");
        // If first entry with this name
    if (typeof query_string[pair[0]] === "undefined") {
      query_string[pair[0]] = decodeURIComponent(pair[1]);
        // If second entry with this name
    } else if (typeof query_string[pair[0]] === "string") {
      var arr = [ query_string[pair[0]],decodeURIComponent(pair[1]) ];
      query_string[pair[0]] = arr;
        // If third or later entry with this name
    } else {
      query_string[pair[0]].push(decodeURIComponent(pair[1]));
    }
  } 
    return query_string;
};
g_url=QueryString();
person={ 
  "data": 
   { "_id": "56ba112c5b64f22e449e55de"},
   "populate":["news","work"]
};

// $.ajax({
//     url: 'http://borde-api-59068.onmodulus.net/diputados/get',
//     type: 'post',
//     dataType: 'json',
//     success: function (data) {
//         console.log(data);
//         $('[bval="name"]').html(data[0].name);
//         $('[bval="party"]').html(data[0].party);
//         $('[bval="phone"]').html(data[0].phone);
//         $('[bval="mail"]').html(data[0].mail);
//         $('[bval="office"]').html(data[0].office);
//         //Gasistencia(20);
//         $(".perfil-header-cont-img").css( "background", "url(./img/diputados/56ba112c5b64f22e449e55de.jpg)");
//         $(".perfil-header-cont-img").css( "background-size", "cover");
        
//         news=data[0].news;
//         for (var i = news.length - 1; i >= 0; i--) {
//         	addnews(news[i]);
//         };
//         work=data[0].work;
//         for (var i = work.length - 1; i >= 0; i--) {
//         	console.log(work[i]);
//         	if (work[i].type.indexOf("uerdo")>0) {addacuerdos(work[i]);}
//         	if (work[i].type.indexOf("iciativa")>0) {addinis(work[i]);}
        	
//         };
//         addcoms(data[0].comisiones)

//     },
//     data: person
// });
function addnews(obj){
	var n='<div class="graficas-reforma layout-column flex-100">\
			<div class="graficas-reforma-content layout-wrap layout-row">\
				<p class="titulo-iniciativa flex-100"><a href="'+obj.link+'" target="_blank">'+obj.headline+'</a></p>\
				<p class="parrafo">'+obj.resumed+'</p>\
				<div class="graficas-iconos layout-align-space-between layout-row flex-100">\
					<div class="layout-row"></div>\
				</div>\
			</div>\
		</div>';
		$('[bval="news"]').append(n);
}
function addinis(obj){
	var n='<div  flex="100" class="graficas-reforma ng-scope layout-column flex-100" layout="column">\
				<div class="graficas-reforma-content" layout="row" layout-wrap>\
					<p flex="100" class="titulo-iniciativa iniciativa">'+obj.type+'</p>\
					<p flex="100" class="parrafo iniciativa">'+obj.resumen+'</p>\
					<p class="parrafo leyenda">turnado a '+obj.com+'</p>\
					<div flex="100" class="graficas-iconos iniciativa" flex="100" layout="row" layout-align="space-between" layout-wrap>\
						<div class="graficas-iconos-dictamin" flex="100" layout="row" layout-align="space-between center">\
							<p class="gray">'+obj.fecha+'</p>\
						</div>\
						<div layout="row" layout-align="center center" layout-wrap>\
						 </div>\
						<div layout="row">\
							<a href="'+obj.link+'" target="_blank"><i class="icon-dowload"></i></a>\
						</div>\
					</div>\
				</div>\
			</div><Hr>';
		$('[bval="inis"]').append(n);
}
function addacuerdos(obj){
	var n='<div  flex="100" class="graficas-reforma ng-scope layout-column flex-100" layout="column">\
				<div class="graficas-reforma-content" layout="row" layout-wrap>\
					<p flex="100" class="titulo-iniciativa iniciativa">'+obj.type+'</p>\
					<p flex="100" class="parrafo iniciativa">'+obj.resumen+'</p>\
					<p class="parrafo leyenda"> '+obj.com+'</p>\
					<div flex="100" class="graficas-iconos iniciativa" flex="100" layout="row" layout-align="space-between" layout-wrap>\
						<div class="graficas-iconos-dictamin" flex="100" layout="row" layout-align="space-between center">\
							<p class="gray">'+obj.fecha+'</p>\
						</div>\
						<div layout="row" layout-align="center center" layout-wrap>\
						 </div>\
						<div layout="row">\
							<a href="'+obj.link+'" target="_blank"><i class="icon-dowload"></i></a>\
						</div>\
					</div>\
				</div>\
			</div><Hr>';
		$('[bval="acuerdos"]').append(n);
}
function addcoms(coms){
	for (var i = coms.length - 1; i >= 0; i--) {
        	var n='<p class="titulo-iniciativa" flex="100">'+coms[i].namecom+':</p><p class="parrafo" bval="party">'+coms[i].puestocom+'</p><Br>';//'<p class="titulo-iniciativa" flex="100">'+coms[i].namecom+'</p>'+coms[i].puestocom+'<Br>';
			$('[bval="coms"]').append(n);
        }
	
}
</script>
<script type="text/javascript">


$(document).ready(function() {
	
});
function initRadarChart(params,data,ID,categories){
    var options = params || {
        chart: {
            polar : true
            ,type: 'line'
            ,renderTo: ID
            ,backgroundColor : 'transparent'
        },
        pane: {
            size: '80%'
        },
        exporting: { enabled: false },
        xAxis: {
            categories: categories
            ,tickmarkPlacement: 'on'
            ,lineWidth: 0
            ,labels : {
                useHTML : true,
                formatter : function(){ return "<i style='font-size:20px' class='icon-"+radar1CategoriesIcons[this.value]+"'></i>"; }
            }
        },
        title : {
            text : ''
        },
        yAxis: {
            gridLineInterpolation: 'polygon'
            ,lineWidth: 0
            ,min: 0
            //,gridLineColor : '#FF0000'
        },
        legend : { enabled : false },
        tooltip: {
            //headerFormat: '<b>{point.x}</b><br/>',
            pointFormat: '{series.name}: {point.y}'
        },
        series : data
    };
    var mychart = new Highcharts.Chart(options);
    return mychart;
}
</script>
<?php $footer = 'gray'; ?>

<div id="perfil" ng-controller="perfilController" flex layout="row" layout-align="center center" layout-wrap>
	<div class="perfil-header" flex="100" layout="row" layout-align="space-between " layout-wrap>
		<div class="perfil-header-cont" flex-gt-md="30" flex-md="40" flex="100">
			<div class="perfil-header-cont-redes" flex="100">
				<a href="" class="icon">
					<img src="img/icons/icon_secciones/twiter.svg">
				</a>
				<a href="" class="icon">
					<img src="img/icons/icon_secciones/facebook.svg">
				</a>
				<a href="" class="icon">
					<img src="img/icons/icon_secciones/youtube.svg">
				</a>
			</div>
			<div class="globo-naranja" layout="row" layout-align="center center">
				<p>BIO.</p>
			</div>
			<div class="perfil-header-cont-img" style="">
				<div class="globo-rojo-grande" layout="row" layout-align="center center">
					<p class="globo-rojo-grande-num">--</p>
				</div>
			</div>
		</div>
		<div class='perfil-text' flex="50" hide-sm hide-gt-md layout="column" layout-align="center center">
			<div>
				<p class="nombre" flex="70"><strong bval="name"> Nombre</strong></p>
				<p class="puesto numero" flex="100" bval="intro"></p>
			</div>
		</div>
		<div class="perfil-header-cont perfil-charts separation-margin" flex-gt-md="40" flex-md="65" flex="100" layout="row" layout-align="start start" layout-wrap>
			
			<!-- <p class="numero" flex="100">500 Diputados en 100 lugares</p>
			<div class="grafica" flex="100">
				 <nvd3 options="perfilChart.options" data="perfilChart.data"></nvd3>
			</div> -->
			
			<div hide-md show-gt-md>
				<p class="nombre" flex="70"><strong bval="name"></strong></p>
			<div id="radarChart1" style="margin-top:-5%"></div>

				<p class="puesto numero" flex="100"></p>

			</div>

		</div>
		<div class="perfil-header-cont perfil-charts" flex-gt-md="25" flex-md="35" flex="100" layout="row" layout-align="start start" layout-wrap>
			<!-- <p class="nombre" flex="70">Political Compass</p> -->
			<div flex="100" layout="row" layout-align="center center">
				<canvas id="lienzo1">
            		Este texto se mostrara unicamente si tu navegador
            		no soporta el elemento canvas de html5
        		</canvas>
			</div>
		</div>
	</div>
	<div class="perfil-content" flex="100">
		<md-tabs class="tabsMenu"  flex="100" md-center-tabs md-dynamic-height md-no-ink-bar md-stretch-tabs md-no-pagination md-stretch-tabs="always auto">
		    <md-tab md-on-select="asistenciaSelection=true" md-on-deselect="asistenciaSelection=false">
		      <md-tab-label>
		        <div class="perfil-opc" flex layout="row" layout-sm="column" layout-align="center center" layout-align-gt-md="start center">
		        	<p>--</p>
		        	<div class="icon">
		        		<i class="icon-asistencia"></i>
		        	</div>
		        </div>
		        Perfil
		      </md-tab-label>
		      <md-tab-body>
		      	<div flex="100">
		      		<?php include("global/asistencia.php") ?>
		      	</div>
		      	
		      </md-tab-body>
		    </md-tab>
		    <md-tab>
		      <md-tab-label>
		        <div class="perfil-opc" flex layout="row" layout-sm="column" layout-align="center center" layout-align-gt-md="start center">
		        	<p>--</p>
		        	<div class="icon">
		        		<i class="icon-news"></i>
		        	</div>
		        </div>
		        Medios
		      </md-tab-label>
		      <md-tab-body>
		      	<div flex="100">
		      		<?php include("global/medios.php") ?>
		      	</div>
		      </md-tab-body>
		    </md-tab>
		    <md-tab>
		      <md-tab-label>
		        <div class="perfil-opc" flex layout="row" layout-sm="column" layout-align="center center" layout-align-gt-md="start center">
		        	<p>--</p>
		        	<div class="icon">
		        		<i class="icon-debate"></i>
		        	</div>
		        </div>
		        Debate
		      </md-tab-label>
		      <md-tab-body>
		      	<div flex="100">
		      		<?php include("global/debate.php") ?>
		      	</div>
		      </md-tab-body>
		    </md-tab>
		    <md-tab>
		      <md-tab-label>
		        <div class="perfil-opc" flex layout="row" layout-sm="column" layout-align="center center" layout-align-gt-md="start center">
		        	<p>--</p>
		        	<div class="icon">
		        		<i class="icon-propuestas"></i>
		        	</div>
		        </div>
		        Iniciativa
		      </md-tab-label>
		      <md-tab-body>
		      	<div flex="100">
		      		<?php include("global/iniciativa.php") ?>
		      	</div>
		      </md-tab-body>
		    </md-tab>
		    <md-tab>
		      <md-tab-label>
		        <div class="perfil-opc" flex layout="row" layout-sm="column" layout-align="center center" layout-align-gt-md="start center">
		        	<p>--</p>
		        	<div class="icon">
		        		<i class="icon-califica"></i>
		        	</div>
		        </div>
		        Califica
		      </md-tab-label>
		      <md-tab-body>
		      	<div flex="100">
		      		<?php include("global/califica.php") ?>
		      	</div>
		      </md-tab-body>
		    </md-tab>
		    <md-tab>
		      <md-tab-label>
		        <div class="perfil-opc" flex layout="row" layout-sm="column" layout-align="center center" layout-align-gt-md="start center">
		        	<p>--</p>
		        	<div class="icon">
		        		<i class="icon-puntosA"></i>
		        	</div>
		        </div>
		        P.Acuerdo
		      </md-tab-label>
		      <md-tab-body>
		      	<div flex="100">
		      		<?php include("global/acuerdo.php") ?>
		      	</div>
		      </md-tab-body>
		    </md-tab>
	  	</md-tabs>
	  	<!-- Tabs para Asistencia -->
	  	<?php //include("global/asistenciaComplemento.php") ?>
	  </div>
</div>
<div flex="100">
<?php include("footer.php") ?>
</div>
<!-- NETWORK CHART -->
<script src="http://fperucic.github.io/treant-js/vendor/raphael.js"></script>
<script src="http://fperucic.github.io/treant-js/Treant.js"></script>
<script src="js/tree.js"></script>
<script type="text/javascript">
fillme();
function fillme(){
	data=g_dips[g_url.id];
	console.log("g_url",g_url);
	console.log("dta",data.name)
	$('[bval="name"]').html(data.name);
        $('[bval="party"]').html(data.party.toUpperCase());
        $('[bval="phone"]').html(data.phone);
        $('[bval="mail"]').html(data.mail);
        $('[bval="office"]').html(data.office);
        //Gasistencia(20);
        $(".perfil-header-cont-img").css( "background", "url("+data.imgurl+")");
        $(".perfil-header-cont-img").css( "background-size", "cover");
        
        news=data.news;
        sources={};
        for (var i = news.length - 1; i >= 0; i--) {
        	if (!sources[news[i].source]) {sources[news[i].source]=0;}
        	sources[news[i].source]+=1;
        	addnews(news[i]);
        };
        $.each(sources,function(key,source){
        	if (key) {
        		$("#newssource").append('<div class="graficas-medios-cont" layout="row" layout-align="center center">\
							<div class="num" layout="row" layout-align="center center"><p style="font-size:30px;">'+source+'</p></div>\
							<div>'+key+'</div>\
						</div>')
        	};
        	
        })
        work=data.work;
        for (var i = work.length - 1; i >= 0; i--) {
        	console.log(work[i]);
        	if (work[i].type.indexOf("uerdo")>0) {addacuerdos(work[i]);}
        	if (work[i].type.indexOf("iciativa")>0) {addinis(work[i]);}
        	
        };
        addcoms(data.comisiones)
        temasa=[parseInt(data.temas.sustentabilidad)+1,
        parseInt(data.temas.educacionycultura)+1,
        parseInt(data.temas.gobierno)+1,
        parseInt(data.temas.seguridadyjusticia)+1,
        parseInt(data.temas.economia)+1,
        parseInt(data.temas.salud)+1,
        ];
        var radar1Categories = ['Sustentabilidad','Educación y cultura','Gobierno','Seguridad y justicia','Economía','Salud'];
        console.log("temas",data.temas.sustentabilidad, data.temas.educacionycultura, data.temas.gobierno, data.temas.seguridadyjusticia, data.temas.economia, data.temas.salud);
        var radar1Data2 = [{
		    name: "Calificación",
		    data: temasa,//[parseInt(data.temas.sustentabilidad), 1, 9, 4, 1, 0],//[data.temas.sustentabilidad, data.temas.educacionycultura, data.temas.gobierno, data.temas.seguridadyjusticia, data.temas.economia, data.temas.salud],
		    pointPlacement: 'on'
		}];
		var radar1CategoriesIcons = {'Ambiente1':'eco','Cultura1':'edu','Gob.':'jus','Seguridad1':'candado','Economía1':'economia','Desarrollo1':'desa'};

		
        var radarChart1 = initRadarChart(false,radar1Data2,'radarChart1',radar1Categories);
}

</script>
<!--
<script src="js/all.min.js"></script>
<script src="js/Main.js"></script>
<script src="js/NetworkInterface.js"></script>
-->