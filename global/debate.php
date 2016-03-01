<script type="text/javascript">
Gdebate(g_dips[g_url.id],g_dips[g_url.id].name);//data[0].asistencia)
function Gdebate(val,nombre){
	tiempo=val.debate_t.split(":");
	asistdata='[{"key": "Dip. Nombre Apellido","values": [ [ 1025409600000 , 50] , [ 1028088000000 , 67]  ]}]';
	grdiv='<nvd3 name="gr_asist" options="stackedAreaChart.options" data=\''+asistdata+'\' class="with-3d-shadow with-transitions"></nvd3>';
	$("#gr_debnum").attr("data",'[{"key": "Número","values": [ [ 1443657600000 , 0] , [ 1455580800000 , '+val.debate_num+']  ]}]');
	$("#gr_debtime").attr("data",'[{"key": "Tiempo (Min.)","values": [ [ 1443657600000 , 0] , [ 1455580800000 , '+tiempo[tiempo.length-1]+']  ]}]');
	
	//$('nvd3[name="gr_asist"]').attr("data",asistdata);

}

</script>
<div flex="100" layout="ropw" layout-wrap id="debateSection">
	<img src="img/works/debate.png" style="width:100%">
	<div class="graficas" flex-gt-md="50" flex="100" layout="row" layout-align="start start" layout-wrap>
		<div flex="100">

			<div flex="100" class="graficas-titulo" layout="row" layout-align="start center">
				<p>La gráfica compara el número de ocasiones que el legislador sube al pleno a debatir algún proyecto determinado</p>
				<div class="graficas-titulo-icon-rojo debate" layout="row" layout-align="center center">+i</div>
			</div>
			<div class="graficas-grafica" flex="100">
				<nvd3 id="gr_debnum" options="stackedAreaChart.options" data="" class="with-3d-shadow with-transitions"></nvd3>
			</div>
		</div>
	</div> 

	<div class="graficas" flex-gt-md="50" flex="100" layout="row" layout-wrap>
		<div flex="100">
			<div flex="100" class="graficas-titulo border-blue" layout="row" layout-align="start center" layout-wrap>
				<p>La gráfica compara el tiempo total que el legislador sube al pleno a debatir</p>
				<div class="graficas-titulo-icon-rojo debate" layout="row" layout-align="center center">+i</div>
				<div flex="100" class="graficas-titulo-puntos" layout="row" layout-align="space-between" layout-wrap>
					<div class="graficas-grafica" flex="100">
						<nvd3 id="gr_debtime" options="stackedAreaChart.options" data="" class="with-3d-shadow with-transitions"></nvd3>
					</div>
				</div>
			</div>
			
			
			
		</div>
	</div>
</div>
