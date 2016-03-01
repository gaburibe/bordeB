<script type="text/javascript">
Gmedios(g_dips[g_url.id].news,g_dips[g_url.id].name);//data[0].asistencia)
function Gmedios(news,nombre){
	var bajo=0;
	var alto=0;
	$.each(news,function(ind,val){
		console.log("impacto",val);
		if (val.impact=="Bajo" || val.impact<=3 || !val.impact) {bajo+=1;}
		if (val.impact=="Alto" || val.impact>3) {alto+=1;}
	})
	time=new Date().getTime();
	asistdata='[{"key": "Bajo impacto","values": [ [ 1443657600000 , 0] , [ 1455580800000 , '+bajo+']  ]},{"key": "Alto impacto","values": [ [ 1443657600000 , 0] , [ 1455580800000 , '+alto+']  ]}]';
	grdiv='<nvd3 name="gr_asist" options="stackedAreaChart.options" data=\''+asistdata+'\' class="with-3d-shadow with-transitions"></nvd3>';
	$("#gr_medios").attr("data",asistdata);
	
	//$('nvd3[name="gr_asist"]').attr("data",asistdata);

}

</script>
<div flex="100" layout="ropw" layout-wrap>
	<div class="graficas" flex-gt-md="50" flex="100" layout="row" layout-align="start start" layout-wrap>
		<div flex="100">
			<div flex="100" class="graficas-titulo" layout="row" layout-align="start center">
				<p>La gráfica muestra la cantidad de veces que un legislador es mencionado en medios de comunicación digitales. Asimismo, las notas son divididas según su contenido y relevancia mediática.</p>
				<div class="graficas-titulo-icon-rojo" layout="row" layout-align="center center">+i</div>
			</div>
			<div flex="100">
				<nvd3 id="gr_medios" options="stackedAreaChart.options" data='' class="with-3d-shadow with-transitions"></nvd3>
			</div>
		</div>
		<!-- <div flex="100">
			<div flex="100" class="graficas-titulo" layout="row" layout-align="start center">
				<p>Impacto de menciones</p>
				<div class="graficas-titulo-icon-rojo" layout="row" layout-align="center center">+i</div>
			</div>
			<div flex="100">
				<nvd3 options="stackedAreaChart.options" data="stackedAreaChart.data" class="with-3d-shadow with-transitions"></nvd3>
			</div>
		</div> -->
		<!-- <div flex="100">
			<div flex="100" class="graficas-titulo" layout="row" layout-align="start center">
				<p>Integración del indicador de medios</p>
				<div class="graficas-titulo-icon-rojo" layout="row" layout-align="center center">+i</div>
			</div>
			<div layout="row" layout-align="center center">
				<div class="graficas-medios" flex="70" flex-md="80" flex-sm="100" layout="row" layout-align="space-around center">
					<div layout="row" layout-align="center center">
						<div class="graficas-medios-text" layout="column" layout-align="center center">
							<p>047</p>
							<p class="top"><small>borde</small></p>
						</div>
						<img src="img/logo/logo.svg" alt="">
					</div>
					<p class="mas">+</p>
					<div layout="row" layout-align="center center">
						<img src="img/logo/logo.svg" alt="">
						<div class="graficas-medios-text" layout="column" layout-align="center center">
							<p>067</p>
							<p class="top"><small>cloud</small></p>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<div flex="100">
			<div flex="100" class="graficas-titulo" layout="row" layout-align="start center">
				<p>Fuentes</p>
				<div class="graficas-titulo-icon-rojo" layout="row" layout-align="center center">+i</div>
			</div>
			<div layout="row" layout-align="center center">
				<div class="graficas-medios" flex="70" flex-md="80" flex-sm="100" layout="row" layout-align="space-around center">
					<div flex="100" layout="column" id="newssource">
						<!-- <div class="graficas-medios-cont" layout="row" layout-align="center center">
							<div class="num" layout="row" layout-align="center center"><p>1</p></div>
							<div>El informador</div>
						</div> -->
						<!-- <div class="graficas-medios-cont" layout="row" layout-align="center center">
							<div class="num" layout="row" layout-align="center center"><p>1</p></div>
							<div><img src="img/logo/logo.svg" alt=""></div>
						</div>
						<div class="graficas-medios-cont" layout="row" layout-align="center center">
							<div class="num" layout="row" layout-align="center center"><p>1</p></div>
							<div><img src="img/logo/logo.svg" alt=""></div>
						</div>
						<div class="graficas-medios-cont" layout="row" layout-align="center center">
							<div class="num" layout="row" layout-align="center center"><p>1</p></div>
							<div><img src="img/logo/logo.svg" alt=""></div>
						</div>
						<div class="graficas-medios-cont" layout="row" layout-align="center center">
							<div class="num" layout="row" layout-align="center center"><p>1</p></div>
							<div><img src="img/logo/logo.svg" alt=""></div>
						</div>
						<div class="graficas-medios-cont" layout="row" layout-align="center center">
							<div class="num" layout="row" layout-align="center center"><p>1</p></div>
							<div><img src="img/logo/logo.svg" alt=""></div>
						</div>
						<div class="graficas-medios-cont" layout="row" layout-align="center center">
							<div class="num" layout="row" layout-align="center center"><p>1</p></div>
							<div><img src="img/logo/logo.svg" alt=""></div>
						</div> -->
					</div>
					<!-- <div flex="50" layout="column">
						<div class="graficas-medios-cont" layout="row" layout-align="center center">
							<div class="num" layout="row" layout-align="center center"><p>1</p></div>
							<div><img src="img/logo/logo.svg" alt=""></div>
						</div>
						<div class="graficas-medios-cont" layout="row" layout-align="center center">
							<div class="num" layout="row" layout-align="center center"><p>1</p></div>
							<div><img src="img/logo/logo.svg" alt=""></div>
						</div>
						<div class="graficas-medios-cont" layout="row" layout-align="center center">
							<div class="num" layout="row" layout-align="center center"><p>1</p></div>
							<div><img src="img/logo/logo.svg" alt=""></div>
						</div>
						<div class="graficas-medios-cont" layout="row" layout-align="center center">
							<div class="num" layout="row" layout-align="center center"><p>1</p></div>
							<div><img src="img/logo/logo.svg" alt=""></div>
						</div>
						<div class="graficas-medios-cont" layout="row" layout-align="center center">
							<div class="num" layout="row" layout-align="center center"><p>1</p></div>
							<div><img src="img/logo/logo.svg" alt=""></div>
						</div>
						<div class="graficas-medios-cont" layout="row" layout-align="center center">
							<div class="num" layout="row" layout-align="center center"><p>1</p></div>
							<div><img src="img/logo/logo.svg" alt=""></div>
						</div>
						<div class="graficas-medios-cont" layout="row" layout-align="center center">
							<div class="num" layout="row" layout-align="center center"><p>1</p></div>
							<div><img src="img/logo/logo.svg" alt=""></div>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</div>
	<div class="graficas" flex-gt-md="50" flex="100" layout="row" layout-wrap>
		<div flex="100">
			<div flex="100" class="graficas-titulo" layout="row" layout-align="start center">
				<p>Menciones en medios</p>
				<div class="graficas-titulo-icon-rojo" layout="row" layout-align="center center">+i</div>
			</div>
			<div bval="news"></div>
			
			
			
		</div>
	</div>
</div>
