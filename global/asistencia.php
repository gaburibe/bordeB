<div id="asistencia" flex="100" layout="ropw" layout-wrap>
	<div class="graficas" flex-gt-md="50" flex="100" layout="row" layout-align="start start" layout-wrap>
		<div flex="100">
			<div flex="100" class="graficas-titulo" layout="row" layout-align="start center">
				<p>Índice de puntos de representación</p>
				<div class="graficas-titulo-icon-rojo" layout="row" layout-align="center center">+i</div>
			</div>
			<div flex="100">
				<nvd3 options="stackedAreaChart.options" data="stackedAreaChart.data" class="with-3d-shadow with-transitions"></nvd3>
			</div>
		</div>
		<div flex="100">
			<div flex="100" class="graficas-titulo" layout="row" layout-align="start center">
				<p>% de representantes por partido</p>
				<div class="graficas-titulo-icon-rojo" layout="row" layout-align="center center">+i</div>
			</div>
			<div flex="100">
				<nvd3 options="donutChart.options" data="donutChart.data"></nvd3>
			</div>
		</div>
	</div>
	<div class="graficas" flex-gt-md="50" flex="100" layout="row" layout-wrap>
		<div flex="100">
			<div flex="100" class="graficas-titulo" layout="row" layout-align="start center">
				<p>Votaciones Principales</p>
				<div class="graficas-titulo-icon-rojo" layout="row" layout-align="center center">+i</div>
			</div>
			<div flex="100" class="graficas-reforma" layout="column">
				<p class="titulo"><strong>Reforma</strong></p>
				<p class="titulo"><strong>Fiscal.</strong></p>
				<div class="graficas-reforma-content" layout="row" layout-wrap>
					<p class="titulo-iniciativa" flex="100">
						Titulos resumido de la iniciativa en un máximo de 100 caracteres con espacios.
					</p>
					<p class="parrafo">
						Lorem ipsum dolor sit amet, consectetur adipiscing.Sed eleifend diam ut odio
						dapibus, sed convallis nunc vehicula. Proin eleifend vitae eros quis rhoncus.
						Etiam tempor dapibus aliquet. Vestibulum in lectus rhoncus, blandit arcu faucibus,
						pulvinar nunc. Cras vulputate metus urna, at lacina nulla rhoncus ac. Morbi purus
						turpis, vulputate eu accumsan ac, imperdiet et quam.Aliquam quis suscipit orcí. Etian
					</p>
					<div layout="row" layout-align="space-between start" flex="100">
						<div flex="50" class="postura" layout="row" layout-align="start center" layout-wrap>
							<p flex="100"> ¿Cuál es tu postura?</p>
							<a href=""  class="icon" layout="column" layout-align="center center">
								<img src="img/votos/favor.svg" alt="">
								<p>A favor</p>
							</a>
							<a href=""  class="icon" layout="column" layout-align="center center">
								<img src="img/votos/neutral.svg" alt="">
								<p>neutral</p>
							</a>
							<a href=""  class="icon" layout="column" layout-align="center center">
								<img src="img/votos/contra.svg" alt="">
								<p>en contra</p>
							</a>
						</div>
						<div flex="50" class="redes" layout="row" layout-align="end start">
							<a href=""><i class="icon-dowload"></i></a>
							<a href=""><i class="icon-twiter"></i></a>
							<a href=""><i class="icon-facebook"></i></a>
						</div>
					</div>
					<div flex="100">
						<div flex="100" class="graficas-titulo" layout="row" layout-align="start center">
							<p>Posicionamiento</p>
							<div class="graficas-titulo-icon-rojo" layout="row" layout-align="center center">+i</div>
						</div>
						<div layout="row" layout-align="center center" flex="100">
							<div flex="50" id='donutChart3'>
								<nvd3 style="position:relative;left:{{leftPosition}}px" options="donutChart3.options" data="donutChart3.data"></nvd3>
							</div>
							<div flex="50">
								<div><div id="map-asis"></div></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="score" flex="100" layout="column">
		<div class="score-cont score-cont-img padding" layout="row" layout-sm="column" layout-align="start center">
			<div class="globo-verde-grande2" layout="row" layout-align="center center">
				<p class="globo-verde-grande2-num">+2</p>
			</div>
			<i class="icon-pri score"></i>
			<div class="score-cont-info" layout="column">
				<p><strong>Borde score</strong></p>
				<p>de grupo parlamentario</p>
			</div>
		</div>
		<!--<div class="score-cont" layout="row" layout-align="center start" layout-wrap>
			<div class="score-cont-cifras" layout="column" layout-align="start center">
				<div layout="row" layout-align="center center">
					<p>+25</p>
					<i class="icon-lupa"></i>
				</div>
				<p>Transparencia y fiscalización</p>
			</div>
			<div class="score-cont-cifras" layout="column" layout-align="start center">
				<div layout="row" layout-align="center center">
					<p>+25</p>
					<i class="icon-economia2"></i>
				</div>
				<p>Economia y desarrollo</p>
			</div>
			<div class="score-cont-cifras" layout="column" layout-align="start center">
				<div layout="row" layout-align="center center">
					<p>+25</p>
					<i class="icon-candado"></i>
				</div>
				<p>Seguridad y justicia</p>
			</div>
			<div class="score-cont-cifras" layout="column" layout-align="start center">
				<div layout="row" layout-align="center center">
					<p>+25</p>
					<i class="icon-educacion"></i>
				</div>
				<p>Educación y justicia</p>
			</div>
			<div class="score-cont-cifras" layout="column" layout-align="start center">
				<div layout="row" layout-align="center center">
					<p>+25</p>
					<i class="icon-democraciajovem"></i>
				</div>
				<p>Democracia joven</p>
			</div>
			<div class="score-cont-cifras" layout="column" layout-align="start center">
				<div layout="row" layout-align="center center">
					<p>+25</p>
					<i class="icon-transporte"></i>
				</div>
				<p>Servicios públicos</p>
			</div>
		</div>-->
	</div>
	<!-- Aquñi iban las gráficas -->
</div>
