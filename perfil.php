<?php include("header.php") ?>
<?php include("global/menu.php") ?>
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
			<div class="perfil-header-cont-img">
				<div class="globo-rojo-grande" layout="row" layout-align="center center">
					<p class="globo-rojo-grande-num">95</p>
				</div>
			</div>
		</div>
		<div class='perfil-text' flex="50" hide-sm hide-gt-md layout="column" layout-align="center center">
			<div>
				<p class="nombre" flex="70"><strong>DIP. Julian Mondragon Gil</strong></p>
				<p class="puesto numero" flex="100">Lider parlamentario del pro en la camara de diputados presidente de la comision de puntos constitucionales primera</p>
			</div>
		</div>
		<div class="perfil-header-cont perfil-charts separation-margin" flex-gt-md="40" flex-md="65" flex="100" layout="row" layout-align="start start" layout-wrap>
			<p class="numero" flex="100">500 Diputados en 100 lugares</p>
			<div class="grafica" flex="100">
				 <nvd3 options="perfilChart.options" data="perfilChart.data"></nvd3>
			</div>
			<div hide-md show-gt-md>
				<p class="nombre" flex="70"><strong>DIP. Julian Mondragon Gil</strong></p>
				<p class="puesto numero" flex="100">Lider parlamentario del pro en la camara de diputados presidente de la comision de puntos constitucionales primera</p>
			</div>
		</div>
		<div class="perfil-header-cont perfil-charts" flex-gt-md="25" flex-md="35" flex="100" layout="row" layout-align="start start" layout-wrap>
			<p class="nombre" flex="70">Political Compass</p>
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
		        	<p>98</p>
		        	<div class="icon">
		        		<i class="icon-asistencia"></i>
		        	</div>
		        </div>
		        Asistencia
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
		        	<p>98</p>
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
		        	<p>98</p>
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
		        	<p>98</p>
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
		        	<p>98</p>
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
		        	<p>98</p>
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
	  	<?php include("global/asistenciaComplemento.php") ?>
	  </div>
</div>
<div flex="100">
<?php include("footer.php") ?>
</div>
<!-- NETWORK CHART -->
<script src="http://fperucic.github.io/treant-js/vendor/raphael.js"></script>
<script src="http://fperucic.github.io/treant-js/Treant.js"></script>
<script src="js/tree.js"></script>
<!--
<script src="js/all.min.js"></script>
<script src="js/Main.js"></script>
<script src="js/NetworkInterface.js"></script>
-->