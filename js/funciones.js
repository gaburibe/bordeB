var partidos = ['PRI','PAN','PVD','Morena','MC','PT','PANAL','PH','ES','PRD','PRD-PT','PRI-PVM'];
var barChart1DataP;
var barChart1DataC = [
    {
        name: 'Participación',
        data: [15,13, 11, 6, 9,15,13, 11, 6, 9, 6, 9]
    },
    {
        name: 'Salud',
        data: [9, 11, 8, 5, 8,9, 11, 8, 5, 8, 5, 8]
    },
    {
        name: 'Educación',
        data: [6, 9, 5, 4, 7.5,6, 9, 5, 4, 7.5, 4, 7.5]
    },
    {
        name: 'M. Jóvenes',
        data: [3, 8, 1, 3, 7,3, 8, 1, 3, 7, 3, 7]
    },
    {
        name: 'Empleo',
        data: [1, 4, -1, 2, 6,1, 4, -1, 2, 6, 2, 6]
    },
    {
        name: 'Violencia',
        data: [-1, 1, -3, 1, 5,-1, 1, -3, 1, 5, 1, 5]
    },
    {
        name: 'DSYR',
        data: [-3, 0, -7, 0, 4,-3, 0, -7, 0, 4, 0, 4]
    },
];
var barChart1Data = [
    {
        name: 'Participación',
        data: [15,13, 11, 6, 9,15,13, 11, 6, 9, 6, 9]
    },
    {
        name: 'Salud',
        data: [9, 11, 8, 5, 8,9, 11, 8, 5, 8, 5, 8]
    },
    {
        name: 'Educación',
        data: [6, 9, 5, 4, 7.5,6, 9, 5, 4, 7.5, 4, 7.5]
    },
    {
        name: 'M. Jóvenes',
        data: [3, 8, 1, 3, 7,3, 8, 1, 3, 7, 3, 7]
    },
    {
        name: 'Empleo',
        data: [1, 4, -1, 2, 6,1, 4, -1, 2, 6, 2, 6]
    },
    {
        name: 'Violencia',
        data: [-1, 1, -3, 1, 5,-1, 1, -3, 1, 5, 1, 5]
    },
    {
        name: 'DSYR',
        data: [-3, 0, -7, 0, 4,-3, 0, -7, 0, 4, 0, 4]
    },
];
var barChart1Data2 = [
    {
        name: 'Participación',
        data: [13,11, 11, 6, 9,15,13, 11, 16, 9, 15, 9]
    },
    {
        name: 'Salud',
        data: [9, 10, 8, 5, 8,9, 11, 8, 5, 8, 5, 8]
    },
    {
        name: 'Educación',
        data: [6, 9, 5, 4, 7.5,6, 9, 5, 4, 7.5, 4, 7.5]
    },
    {
        name: 'M. Jóvenes',
        data: [2, 5, 1, 3, 7,3, 8, 1, 3, 7, 3, 7]
    },
    {
        name: 'Empleo',
        data: [1, 4, -1, 2, 6,1, 4, -1, 2, 6, 2, 6]
    },
    {
        name: 'Violencia',
        data: [-1, 1, -2, -6, -5,-4, 1, -3, 1, -5, 1, 5]
    },
    {
        name: 'DSYR',
        data: [-3, 0, -7, 0, 4,-3, 0, -7, 0, 4, 0, 4]
    },
];
var radar1Data = [{
    name: 'Example',
    data: [43, 19, 60, 35, 17, 10],
    pointPlacement: 'on'
}];
var donut1Data = [{
    name : 'x'
    ,data : [
        ['Aprobadas', 10]
        ,['Dictaminadas', 40]
        ,['Presentadas', 50]
    ]
}];
var radar1Categories = ['Ambiente','Cultura','Gob.','Seguridad','Economía','Desarrollo'];
var radar1CategoriesIcons = {'Ambiente':'eco','Cultura':'edu','Gob.':'jus','Seguridad':'candado','Economía':'economia','Desarrollo':'desa'};
$(document).ready(function() {
  var owl = $("#slider-home");
  owl.owlCarousel({
      navigation : false, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true
    });   
  var barChart1 = InitBarChart(false,barChart1DataC,'barChart1');
  var barChart2 = InitBarChart(false,barChart1DataC,'barChart2');
  var radarChart1 = initRadarChart(false,radar1Data,'radarChart1',radar1Categories);
  var radarChart2 = initRadarChart(false,radar1Data,'radarChart2',radar1Categories);
  var donutChartCustom = initCustomDonuChart(donut1Data,'donutChartCustom',radar1Categories);
  $('.evaluacion-cont-box').on('click',function(e){
    e.preventDefault();
    console.log($(this).index()%2);
    var aux = [];
    if( ($(this).index() % 2) === 0 ){
        aux = barChart1Data2.slice(0);
        console.log('barChart1Data2',barChart1Data2);
    }else{
        aux = barChart1Data.slice(0);
        console.log('barChart1Data',barChart1Data);
    }
    setDataBarChar(barChart1,aux);
    setDataBarChar(barChart2,aux);
  });
});
//mapa home
$(function () {
    // Prepare demo data
    var data = [
        {
            "hc-key": "mx-3622",
            "value": 0
        },
        {
            "hc-key": "mx-bc",
            "value": 1
        },
        {
            "hc-key": "mx-bs",
            "value": 2
        },
        {
            "hc-key": "mx-so",
            "value": 3
        },
        {
            "hc-key": "mx-cl",
            "value": 4
        },
        {
            "hc-key": "mx-na",
            "value": 5
        },
        {
            "hc-key": "mx-cm",
            "value": 6
        },
        {
            "hc-key": "mx-qr",
            "value": 7
        },
        {
            "hc-key": "mx-mx",
            "value": 8
        },
        {
            "hc-key": "mx-mo",
            "value": 9
        },
        {
            "hc-key": "mx-df",
            "value": 10
        },
        {
            "hc-key": "mx-qt",
            "value": 11
        },
        {
            "hc-key": "mx-tb",
            "value": 12
        },
        {
            "hc-key": "mx-cs",
            "value": 13
        },
        {
            "hc-key": "mx-nl",
            "value": 14
        },
        {
            "hc-key": "mx-si",
            "value": 15
        },
        {
            "hc-key": "mx-ch",
            "value": 16
        },
        {
            "hc-key": "mx-ve",
            "value": 17
        },
        {
            "hc-key": "mx-za",
            "value": 18
        },
        {
            "hc-key": "mx-ag",
            "value": 19
        },
        {
            "hc-key": "mx-ja",
            "value": 20
        },
        {
            "hc-key": "mx-mi",
            "value": 21
        },
        {
            "hc-key": "mx-oa",
            "value": 22
        },
        {
            "hc-key": "mx-pu",
            "value": 23
        },
        {
            "hc-key": "mx-gr",
            "value": 24
        },
        {
            "hc-key": "mx-tl",
            "value": 25
        },
        {
            "hc-key": "mx-tm",
            "value": 26
        },
        {
            "hc-key": "mx-co",
            "value": 27
        },
        {
            "hc-key": "mx-yu",
            "value": 28
        },
        {
            "hc-key": "mx-dg",
            "value": 29
        },
        {
            "hc-key": "mx-gj",
            "value": 30
        },
        {
            "hc-key": "mx-sl",
            "value": 31
        },
        {
            "hc-key": "mx-hg",
            "value": 32
        }
    ];
    // Initiate the chart
    $('#map-home').highcharts('Map', {
        title : { text : '' },
        subtitle : { text : '' },
        mapNavigation: {
            enabled: true,
            buttonOptions: {
                verticalAlign: 'bottom'
            }
        },
        exporting: { enabled: false },
         colorAxis: {

                        dataClasses: [{
                            from: 0,
                            to: 50,
                            color: '#CFCFCD',
                            name: 'México'
                        },
                        ]
                    },
        tooltip: { pointFormat: '<div class=""><span>{point.name} </span> <span>Representantes : 628</span></div>' },
        series : [{
            data : data,
            borderColor: 'none',
            mapData: Highcharts.maps['countries/mx/mx-all'],
            joinBy: 'hc-key',
            name: 'Ciudad',
            states: {
                hover: { color: '#EE4657' }
            },
            dataLabels: {
                enabled: false,
                format: '{point.name}'
            },
        }]
    });
});
//mapa home

//mapa asistencia

$(function () {
    // Prepare demo data
    var data = [
        {
            "hc-key": "mx-3622",
            "value": 0,
        },
        {
            "hc-key": "mx-bc",
            "value": 1
        },
        {
            "hc-key": "mx-bs",
            "value": 2
        },
        {
            "hc-key": "mx-so",
            "value": 3
        },
        {
            "hc-key": "mx-cl",
            "value": 4
        },
        {
            "hc-key": "mx-na",
            "value": 5
        },
        {
            "hc-key": "mx-cm",
            "value": 6
        },
        {
            "hc-key": "mx-qr",
            "value": 7
        },
        {
            "hc-key": "mx-mx",
            "value": 8
        },
        {
            "hc-key": "mx-mo",
            "value": 9
        },
        {
            "hc-key": "mx-df",
            "value": 10
        },
        {
            "hc-key": "mx-qt",
            "value": 11
        },
        {
            "hc-key": "mx-tb",
            "value": 12
        },
        {
            "hc-key": "mx-cs",
            "value": 13
        },
        {
            "hc-key": "mx-nl",
            "value": 14
        },
        {
            "hc-key": "mx-si",
            "value": 15
        },
        {
            "hc-key": "mx-ch",
            "value": 16
        },
        {
            "hc-key": "mx-ve",
            "value": 17
        },
        {
            "hc-key": "mx-za",
            "value": 18
        },
        {
            "hc-key": "mx-ag",
            "value": 19
        },
        {
            "hc-key": "mx-ja",
            "value": 20
        },
        {
            "hc-key": "mx-mi",
            "value": 21
        },
        {
            "hc-key": "mx-oa",
            "value": 22
        },
        {
            "hc-key": "mx-pu",
            "value": 23
        },
        {
            "hc-key": "mx-gr",
            "value": 24
        },
        {
            "hc-key": "mx-tl",
            "value": 25
        },
        {
            "hc-key": "mx-tm",
            "value": 26
        },
        {
            "hc-key": "mx-co",
            "value": 27
        },
        {
            "hc-key": "mx-yu",
            "value": 28
        },
        {
            "hc-key": "mx-dg",
            "value": 29
        },
        {
            "hc-key": "mx-gj",
            "value": 30
        },
        {
            "hc-key": "mx-sl",
            "value": 31
        },
        {
            "hc-key": "mx-hg",
            "value": 32
        }
    ];
    // Initiate the chart
    $('#map-asis').highcharts('Map', {
        title : { text : '' },
        subtitle : { text : '' },
        mapNavigation: {
            enabled: true,
            buttonOptions: { verticalAlign: 'bottom' }
        },
        exporting: { enabled: false },
        chart: { backgroundColor: 'transparent' },
        colorAxis: {
                        dataClasses: [{
                            from: 0,
                            to: 10,
                            color: '#EF485A',
                            name: 'PRD'
                        },
                        {
                            from: 11,
                            to: 30,
                            color: '#F9CD48',
                            name: 'PAN'
                        },
                        {
                            from: 31,
                            to: 50,
                            color: '#F89753',
                            name: 'PRI'
                        },
                        ]
                    },
        series : [{
            data : data,
            borderColor: 'none',
            mapData: Highcharts.maps['countries/mx/mx-all'],
            joinBy: 'hc-key',
            name: 'Ciudad',
            states: {
                hover: { color: '#989998' }
            },
            dataLabels: {
                enabled: false,
                format: '{point.name}'
            }
        }]
    });
});
function InitBarChart(params,data,ID){
    barChart1DataP = data.slice(0);
    var options = params || {
        chart: {
            type: 'column'
            ,renderTo: ID
            ,backgroundColor: 'transparent'
            ,height : 250
        },
        colors: ['#ACD26F','#95BE84','#7CAB97','#6497AA','#4D84BD', '#356FD0','#1E5CE3'],
        exporting: { enabled: false },
        xAxis: {
            categories: partidos
        },
        title : {
            text : ''
        },
        yAxis: {
            min: -10,
            title: {
                text: ''
            },
        },
        legend : { enabled : false },
        tooltip: {
            headerFormat: '<b>{point.x}</b><br/>',
            pointFormat: '{series.name}: {point.y}'
        },
        plotOptions: {
            column: {
                stacking: 'normal',
                dataLabels: {
                    enabled: false,
                    color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white',
                    style: {
                        textShadow: '0 0 3px black'
                    }
                }
            }
        },
        series : barChart1DataP
    };
    var mychart = new Highcharts.Chart(options);
    return mychart;
}
function setDataBarChar(mychart,data){
    //console.log(data);
    var mydata = data.slice(0);
    for( var x in mychart.series )mychart.series[x].setData(mydata[x].data);
}
function initCustomDonuChart(data,ID,categories){
    var options = {
        chart: {
            renderTo: ID
            ,type: 'pie'
            ,backgroundColor : 'transparent'
        },
        colors : ['#F0505A','#F69755','#FCCD4B','#F0505A','#F69755','#FCCD4B','#F0505A','#F69755','#FCCD4B'],
        title: {
            text: "<span >"+data[0].data.length+"</span>" + ' <br>Iniciativas'
            ,align : 'center'
            ,verticalAlign : 'middle'
            ,useHTML : true
            ,y : -10
        },
        plotOptions: {
            pie: {
                innerSize: "70%"
                ,dataLabels: {
                        enabled: false
                        ,connectorWidth: 0
                        ,distance : -30
                    },
            }
        },
        /*pane: {
            size: '100%'
        },*/
        exporting: { enabled: false },
        xAxis: {
            categories: categories
            //,tickmarkPlacement: 'on'
            //,lineWidth: 0
            ,labels : {
                enabled : false
                //useHTML : true,
                //formatter : function(){ return "<i style='font-size:20px' class='icon-"+radar1CategoriesIcons[this.value]+"'></i>"; }
            }
        },
        yAxis: {
            //gridLineInterpolation: 'polygon'
            //,lineWidth: 0
            //,min: 0
            labels : {
                enabled : false
            }
        },
        legend : { enabled : false },
        tooltip: {
            //headerFormat: '<b>{point.x}</b><br/>',
            pointFormat: '{point.y}%'
        },
        series : data
    };
    var mychart = new Highcharts.Chart(options);
    return mychart;
}
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