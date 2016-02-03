var app = angular.module('bordepolitico',['ngMaterial','nvd3','chart.js'])

app.config(['ChartJsProvider', function (ChartJsProvider) {
	// Configure all charts
	ChartJsProvider.setOptions({
	  colours: ['#F69755','#F0505A']
	});
	// Configure all line charts
	ChartJsProvider.setOptions('Line', {
	  datasetFill: false
	});
}])
