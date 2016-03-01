<script type="text/javascript">
Gini(g_dips[g_url.id].work,g_dips[g_url.id].name);//data[0].asistencia)
function Gini(work,nombre){
	acuerdos=0;
	for (var i = work.length - 1; i >= 0; i--) {
        	console.log(work[i]);
        	if (work[i].type.indexOf("uerdo")>0) {acuerdos+=1;}
        	if (work[i].type.indexOf("iciativa")>0) {}
        	
        };
	asistdata='[{"key": "Número","values": [ [ 1443657600000 , 0] , [ 1455580800000 , '+acuerdos+']  ]}]';
	grdiv='<nvd3 name="gr_asist" options="stackedAreaChart.options" data=\''+asistdata+'\' class="with-3d-shadow with-transitions"></nvd3>';
	$("#gr_acuerdo").attr("data",asistdata);
	
	//$('nvd3[name="gr_asist"]').attr("data",asistdata);

}

</script>
<div id="acuerdoSeccion" flex="100" layout="ropw" layout-wrap>
	<div class="graficas" flex-gt-md="50" flex="100" layout="row" layout-align="start start" layout-wrap>
		<div flex="100">
			<div flex="100" class="graficas-titulo" layout="row" layout-align="start center">
				<p>Número de puntos de acuerdo</p>
				<div class="graficas-titulo-icon-rojo debate" layout="row" layout-align="center center">+i</div>
			</div>
			<div class="graficas-grafica" flex="100">
				<nvd3 id="gr_acuerdo" options="stackedAreaChart.options" data="" class="with-3d-shadow with-transitions"></nvd3>
			</div>
		</div>
		
	</div>
	<div class="graficas" flex-gt-md="50" flex="100" layout="row" layout-wrap>
		<div flex="100" bval="acuerdos">
			<div flex="100" class="graficas-titulo border-blue" layout="row" layout-align="start center" layout-wrap>
				<p>Puntos de acuerdo presentados</p>
				<div class="graficas-titulo-icon-rojo debate" layout="row" layout-align="center center">+i</div>
				
			</div>
			<div flex="100" class="graficas-reforma" layout="column">
				<!-- <div class="graficas-reforma-content" layout="row" layout-wrap>
					<p flex="100" class="parrafo">
						Las reformas que se plantean posibilitaran un andamiaje normativo para la mejor operación de la Educación 
						Media Superior, en un marco de corresponsabilidad entre los órdenes de gobierno...
					</p>
					<p flex="100" class="parrafo"><small>Tema específico: Educación / planes de estudio en educación media superior / Universidades / UNAM</small></p>
					<div flex="100" class="graficas-iconos debate" flex="100" layout="row" layout-align="space-between">
						<div layout="row" layout-align="center center">
						    <div class="graficas-titulo-icon-rojo debate" layout="row" layout-align="center center">+i</div>
						    <a href=""><i class="icon-dowload"></i></a>
						    <p class="fecha">10/10/2015</p>
						 </div>
						<div layout="row">
							<a href=""><i class="icon-twiter"></i></a>
							<a href=""><i class="icon-facebook"></i></a>
						</div>
					</div>
				</div> -->
			</div>
			
		</div>
	</div>
</div>