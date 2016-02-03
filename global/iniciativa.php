<div flex="100" layout="ropw" layout-wrap>
	<div class="graficas" flex-gt-md="50" flex="100" layout="row" layout-align="start start" layout-wrap>
		<div flex="100">
			<div flex="100" class="graficas-titulo" layout="row" layout-align="start center">
				<p>Índice de iniciativas</p>
				<div class="graficas-titulo-icon-rojo debate" layout="row" layout-align="center center">+i</div>
			</div>
			<div class="graficas-grafica" flex="100">
				<nvd3 options="stackedAreaChart.options" data="stackedAreaChart.data" class="with-3d-shadow with-transitions"></nvd3>
			</div>
			<div class="graficas-grafica" flex="100" layout="row" layout-align="center center">
				<div flex="50">
					<!--<nvd3 options="donutChart3.options" data="donutChart3.data"></nvd3>-->
					<div id="donutChartCustom"></div>
				</div>
				<div flex="50">
					<div id="radarChart2"></div>
					<!--<canvas height="210" id="radar" class="chart chart-radar"
				  		chart-data="radarChart.data" chart-labels="radarChart.labels">
					</canvas>-->
				</div>
			</div>
		</div>
		<div flex="100">
			<div flex="100" class="graficas-titulo" layout="row" layout-align="start center">
				<p>Información cualitativa de iniciativas</p>
				<div class="graficas-titulo-icon-rojo debate" layout="row" layout-align="center center">+i</div>
			</div>
			<div class="graficas-grafica" flex="100">
				<nvd3 options="vulnerableChart.options" data="vulnerableChart.data"></nvd3>
			</div>
		</div>
	</div>
	<div class="graficas" flex-gt-md="50" flex="100" layout="row" layout-wrap>
		<div flex="100">
			<div flex="100" class="graficas-titulo" layout="row" layout-align="start center" layout-wrap>
				<p>Iniciativas</p>
				<div class="graficas-titulo-icon-rojo debate" layout="row" layout-align="center center">+i</div>
			</div>
			<div ng-repeat="x in [0,1,2]" flex="100" class="graficas-reforma" layout="column">
				<div class="graficas-reforma-content" layout="row" layout-wrap>
					<p flex="100" class="titulo-iniciativa iniciativa">
						Lorem ipsum dolor sit amet, consectetuer adipiscing
					</p>
					<p flex="100" class="parrafo iniciativa">
						Resumen de la iniciatva en un maximo de 300 caracteres con espacios dividida en 4 bullets
					</p>
					<p flex="100" class="parrafo iniciativa">
						Resumen de la iniciatva en un maximo de 300 caracteres con espacios dividida en 4 bullets
					</p>
					<p flex="100" class="parrafo iniciativa">
						Resumen de la iniciatva en un maximo de 300 caracteres con espacios dividida en 4 bullets
					</p>
					<p class="parrafo leyenda">
						Se turnó a las comisiones unidas de justicia , de derechos humanos y de estudios legislativos
					</p>
					<div flex="100" class="graficas-iconos iniciativa" flex="100" layout="row" layout-align="space-between" layout-wrap>
						<div class="graficas-iconos-dictamin" flex="100" layout="row" layout-align="space-between center">
							<p class='gray'>10/10/2015</p>
							<p class="dictamin">DICTAMINADA</p>
						</div>
						<div layout="row" layout-align="center center" layout-wrap>
						    <a href=""><i class="icon-firma"></i></a>
						    <p>Firmar iniciativa</p>
						 </div>
						<div layout="row">
							<a href=""><i class="icon-dowload"></i></a>
							<a href=""><i class="icon-twiter"></i></a>
							<a href=""><i class="icon-facebook"></i></a>
						</div>
					</div>
					<a href="" flex="100" class="graficas-reforma-boton" layout="row" layout-align="center center" >
						ver +
					</a>
				</div>
			</div>
			<!--<div flex="100" class="graficas-reforma" layout="column">
				<div class="graficas-reforma-content" layout="row" layout-wrap>
					<p flex="100" class="titulo-iniciativa iniciativa">
						Lorem ipsum dolor sit amet, consectetuer adipiscing
					</p>
					<p flex="100" class="parrafo iniciativa">
						Resumen de la iniciatva en un maximo de 300 caracteres con espacios dividida en 4 bullets
					</p>
					<p flex="100" class="parrafo iniciativa">
						Resumen de la iniciatva en un maximo de 300 caracteres con espacios dividida en 4 bullets
					</p>
					<p flex="100" class="parrafo iniciativa">
						Resumen de la iniciatva en un maximo de 300 caracteres con espacios dividida en 4 bullets
					</p>
					<p class="parrafo leyenda">
						Se turnó a las comisiones unidas de justicia , de derechos humanos y de estudios legislativos
					</p>
					<div flex="100" class="graficas-iconos iniciativa" flex="100" layout="row" layout-align="space-between" layout-wrap>
						<div class="graficas-iconos-dictamin" flex="100" layout="row" layout-align="space-between center">
							<p class='gray'>10/10/2015</p>
							<p class="dictamin">DICTAMINADA</p>
						</div>
						<div layout="row" layout-align="center center" layout-wrap>
						    <a href=""><i class="icon-firma"></i></a>
						    <p>Firmar iniciativa</p>
						 </div>
						<div layout="row">
							<a href=""><i class="icon-dowload"></i></a>
							<a href=""><i class="icon-twiter"></i></a>
							<a href=""><i class="icon-facebook"></i></a>
						</div>
					</div>
					<a href="" flex="100" class="graficas-reforma-boton" layout="row" layout-align="center center" >
						ver +
					</a>
				</div>
			</div>
			<div flex="100" class="graficas-reforma" layout="column">
				<div class="graficas-reforma-content" layout="row" layout-wrap>
					<p flex="100" class="titulo-iniciativa iniciativa">
						Lorem ipsum dolor sit amet, consectetuer adipiscing
					</p>
					<p flex="100" class="parrafo iniciativa">
						Resumen de la iniciatva en un maximo de 300 caracteres con espacios dividida en 4 bullets
					</p>
					<p flex="100" class="parrafo iniciativa">
						Resumen de la iniciatva en un maximo de 300 caracteres con espacios dividida en 4 bullets
					</p>
					<p flex="100" class="parrafo iniciativa">
						Resumen de la iniciatva en un maximo de 300 caracteres con espacios dividida en 4 bullets
					</p>
					<p class="parrafo leyenda">
						Se turnó a las comisiones unidas de justicia , de derechos humanos y de estudios legislativos
					</p>
					<div flex="100" class="graficas-iconos iniciativa" flex="100" layout="row" layout-align="space-between" layout-wrap>
						<div class="graficas-iconos-dictamin" flex="100" layout="row" layout-align="space-between center">
							<p class='gray'>10/10/2015</p>
							<p class="dictamin">DICTAMINADA</p>
						</div>
						<div layout="row" layout-align="center center" layout-wrap>
						    <a href=""><i class="icon-firma"></i></a>
						    <p>Firmar iniciativa</p>
						 </div>
						<div layout="row">
							<a href=""><i class="icon-dowload"></i></a>
							<a href=""><i class="icon-twiter"></i></a>
							<a href=""><i class="icon-facebook"></i></a>
						</div>
					</div>
					<a href="" flex="100" class="graficas-reforma-boton" layout="row" layout-align="center center" >
						ver +
					</a>
				</div>
			</div>-->
		</div>
	</div>
</div>