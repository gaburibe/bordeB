var deliciousTags;

//var scienceBlogs = new StringList("http://scienceblogs.com/clock/", "http://scienceblogs.com/illconsidered/", "http://scienceblogs.com/voteforscience/", "http://scienceblogs.com/aardvarchaeology/", "http://scienceblogs.com/ethicsandscience/");


//// data

var urlsList;
var titles;
var categories;
//var urlsListForDeliciousTags;

var table;
var numberTable;
//var minMaxInterval;

var tags;
var tagsColorsSoft;
var tagsColorsHard;

var network;
var itemsNetwork;
var networkInterface;

//// parameters
var TEST_REPETITIONS = true;

var vis_mode = 0; //0:network 1:comparative
var launchIcon;

init=function(){
	Loader.loadData("./resources/vis_tags.csv", loadedCSV, this);
}
function iconLoaded(e){
	launchIcon = e.result;
}

function loadedCSV(e){
	table = TableEncodings.CSVtoTable(e.result, true, ',');
	urlsList = table.getRow(0).getSubList(new Interval(1, table.length-1));
	//var tagsTable = table.sliceRows(2);
	
	//numberTable = tagsTable.getSubList(new Interval(1, tagsTable.length-1));
	
	tags = table[0].getSubList(new Interval(2,  table[0].length-1));
	
	categories = table.getRow(1).getSubList(new Interval(1, table.length-1));
	
	//titles = table.getNames().getSubList(new Interval(1, table.length-1));
	
	//itemsNetwork = CreateNetwork.createItemsNetwork(tagsTable);
	//c.log('itemsNetwork', itemsNetwork);
	
	networkInterface = new NetworkInterface();
	//addInteractionEventListener('mousedown', this.mousedown, this);
}

mousedown=function(e){
	networkInterface.mousedown(e);
}

networkBuilt = function(){
}

cycle=function(){
	if(network==null){
		DrawTexts.setContextTextProperties('white', 24);
		context.fillText('loading data | building network', canvasWidth - 340, canvasHeight - 40);
		return;
	}
	canvas.style.cursor = 'default';
	networkInterface.draw();
}

resizeWindow = function(){
	networkInterface.setFrame(new Rectangle(0,0,canvasWidth,canvasHeight));
	//panel.heightChanged();
}

updateHash = function(){
	var md;
	var newHash = "";
	var node;
	window.location.hash = String(vis_mode)+newHash;
}

colorFromHardness = function(hardnessValue, alpha){
	return ColorOperators.addAlpha(ColorOperators.grayToOrange(Math.pow(1-hardnessValue, 3)), alpha);
}

drawIcon = function(type, x, y, w, h, color){
	x-=w*3;
	y-=h*3;
	context.fillStyle = color;
	switch(type){
		case "blogs":
			context.beginPath();
			context.fillRect(x,y,6*w,h);
			context.fillRect(x,y+3*h,6*w,h);
			context.fillRect(x,y+6*h,6*w,h);
			break;
		case "people":
			context.beginPath();
			context.moveTo(x+2*w,y);
			context.lineTo(x+4*w,y);
			context.lineTo(x+4*w,y+1.7*h);
			context.lineTo(x+5*w,y+1.7*h);
			context.lineTo(x+5*w,y+4.5*h);
			context.lineTo(x+4*w,y+4.5*h);
			context.lineTo(x+4*w,y+7*h);
			context.lineTo(x+2*w,y+7*h);
			context.lineTo(x+2*w,y+4.2*h);
			context.lineTo(x+1*w,y+4.2*h);
			context.lineTo(x+1*w,y+1.7*h);
			context.lineTo(x+2*w,y+1.7*h);
			context.lineTo(x+2*w,y);
			context.fill();
			break;
		case "companies/studios":
			context.beginPath();
			context.moveTo(x,y+3*h);
			context.lineTo(x+3*w,y-0.5*h);
			context.lineTo(x+6*w,y+3*h);
			context.lineTo(x+6*w,y+6*h);
			context.lineTo(x,y+6*h);
			context.lineTo(x,y+3*h);
			context.fill();
			break;
		case "resources/tools/applications/frameworks":
			context.beginPath();
			context.moveTo(x+3*w,y);
			context.lineTo(x+6*w,y+3*h);
			context.lineTo(x+3*w,y+6*h);
			context.lineTo(x,y+3*h);
			context.lineTo(x+3*w,y);
			context.fill();
			break;
		case "books":
			context.beginPath();
			context.moveTo(x+1*w,y);
			context.lineTo(x+5*w,y);
			context.lineTo(x+5*w,y+6*h);
			context.lineTo(x+1*w,y+6*h);
			context.lineTo(x+1*w,y);
			context.fill();
			break;
	}
}

