/*
var treeData = [
  {
    "name": "",
    "parent": "null",
    'specialClass': 'icon-eco',
    "children": [
      {
        "name": "Level 2: A",
        "parent": "Top Level",
        "children": [
          {
            "name": "Son of A",
            "parent": "Level 2: A"
            ,"children" : [
              {
                "name": "Daughter of A",
                "parent": "Level 2: A"
              },{
                "name": "Daughter of A",
                "parent": "Level 2: A"
              },{
                "name": "Daughter of A",
                "parent": "Level 2: A"
              }
            ]
          },
          {
            "name": "Daughter of A",
            "parent": "Level 2: A"
          }
        ]
      },
      {
        "name": "Level 2: B",
        "parent": "Top Level"
      }
    ]
  }
];
var tree;
var margin,width,height;
  
var i = 0,
  duration = 750,
  root;

var diagonal,svg;
$(document).ready(function() {
  // ************** Generate the tree diagram  *****************
  margin = {top: 20, right: 50, bottom: 20, left: 50};
  width = $('#diagram').width() - margin.right - margin.left;
  height = 500 - margin.top - margin.bottom;
  tree = d3.layout.tree().size([height, width]);

  diagonal = d3.svg.diagonal().projection(function(d){ return [d.y, d.x]; });

  svg = d3.select('#diagram').append("svg")
    .attr("width", width + margin.right + margin.left)
    .attr("height", height + margin.top + margin.bottom)
    .append("g")
    .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

  root = treeData[0];
  root.x0 = height / 2;
  root.y0 = 0;
    
  update(root);

  d3.select(self.frameElement).style("height", "500px");
});
function update(source) {

  // Compute the new tree layout.
  var nodes = tree.nodes(root).reverse(),
    links = tree.links(nodes);

  // Normalize for fixed-depth.
  nodes.forEach(function(d){ 
    d.y = d.depth * 100; 
    d3.select("[id_node='" + d.id + "']")
    .attr("class", 'node ' + d.specialClass?d.specialClass:'');
    console.log('node',d3.select("[id_node='" + d.id + "']"));
  });

  // Update the nodes…
  var node = svg.selectAll("g.node")
    .data(nodes, function(d) { return d.id || (d.id = ++i); });

  // Enter any new nodes at the parent's previous position.
  var nodeEnter = node.enter().append("g")
    .attr("class", "node")
    .attr("transform", function(d) { return "translate(" + source.y0 + "," + source.x0 + ")"; })
    .on("click", click);

  nodeEnter.append("circle").attr("r", 1e-6);

  nodeEnter.append("text")
    .attr("x", function(d) { return d.children || d._children ? -13 : 13; })
    .attr("dy", ".35em")
    .attr("text-anchor", function(d) { return d.children || d._children ? "end" : "start"; })
    .text(function(d) { return d.name; })
    .style("fill", '#EF485A');

  // Transition nodes to their new position.
  var nodeUpdate = node.transition()
    .duration(duration)
    .attr("transform", function(d) { return "translate(" + d.y + "," + d.x + ")"; });

  nodeUpdate.select("circle").attr("r", 10);

  nodeUpdate.select("text")
    .style("fill-opacity", 1);

  // Transition exiting nodes to the parent's new position.
  var nodeExit = node.exit().transition()
    .duration(duration)
    .attr("transform", function(d) { return "translate(" + source.y + "," + source.x + ")"; })
    .remove();

  //nodeExit.select("circle").attr("r", 1e-6);

  nodeExit.select("text")
    .style("fill-opacity", 1e-6);

  // Update the links…
  var link = svg.selectAll("path.link")
    .data(links, function(d) { return d.target.id; });

  // Enter any new links at the parent's previous position.
  link.enter().insert("path", "g")
    .attr("class", "link")
    .attr("d", function(d) {
    var o = {x: source.x0, y: source.y0};
    return diagonal({source: o, target: o});
    });

  // Transition links to their new position.
  link.transition()
    .duration(duration)
    .attr("d", diagonal);

  // Transition exiting nodes to the parent's new position.
  link.exit().transition()
    .duration(duration)
    .attr("d", function(d) {
    var o = {x: source.x, y: source.y};
    return diagonal({source: o, target: o});
    })
    .remove();

  // Stash the old positions for transition.
  nodes.forEach(function(d) {
  d.x0 = d.x;
  d.y0 = d.y;
  });
  nodes.forEach(function(d){ 
    d3.select("[id_node='" + d.id + "']")
    .attr("class", 'node ' + d.specialClass?d.specialClass:'');
    console.log('node',d3.select("[id_node='" + d.id + "']"));
  });
}

// Toggle children on click.
function click(d) {
  if (d.children) {
  d._children = d.children;
  d.children = null;
  } else {
  d.children = d._children;
  d._children = null;
  }
  update(d);
}
*/

// fix arrow end issues:
// https://github.com/DmitryBaranovskiy/raphael/issues/471

var chart_config = {
  chart: {
    container: "#diagram",
    levelSeparation: 45,
    rootOrientation: "WEST",
    nodeAlign: "BOTTOM",
    connectors: {
      type: "step",
      style: {
        "stroke-width": 2
        ,"stroke" : '#ed485a'
      }
    },
    node: {
      HTMLclass: "treeItem"
    }
  },

  nodeStructure: {
    text: { name: "x1" },
    HTMLclass: "bigCircle",
    innerHTML: "<i class='icon-eco'></i>",
    children: [
      {
        text: { name: "Tema" },
        innerHTML: "<span class='number'>2</span> Tema",
        stackChildren: true,
        children: [
              {
                text: {name: "Tema"},
                HTMLclass: "smallCircle",
                innerHTML: "Título terciario",
              },
              {
                pseudo: true,
                children: [
                  {
                    text: {name: "Tema"},
                  HTMLclass: "smallCircle",
                  innerHTML: "Título terciario",
                  },
                  {
                    text: {name: "Tema"},
                  HTMLclass: "smallCircle",
                  innerHTML: "Título terciario",
                  }
                ]
              },
              {
                text: {name: "Tema"},
                HTMLclass: "smallCircle",
                innerHTML: "Título terciario",
              }
            ]
      },
      {
        text: { name: "Tema" },
        innerHTML: "<span class='number'>3</span> Tema",
        stackChildren: true,
      },
      {
        text: { name: "Tema" },
        innerHTML: "<span class='number'>4</span> Tema",
        stackChildren: true,
      },
      {
        text: { name: "Tema" },
        innerHTML: "<span class='number'>5</span> Tema",
        stackChildren: true,
      }
      ,
      {
        text: { name: "Tema" },
        innerHTML: "<span class='number'>6</span> Tema",
        stackChildren: true,
      }
      ,
      {
        text: { name: "Tema" },
        innerHTML: "<span class='number'>7</span> Tema",
        stackChildren: true,
        children: [
              {
                text: {name: "Tema"},
                HTMLclass: "smallCircle",
                innerHTML: "Título terciario",
              },
              {
                pseudo: true,
                children: [
                  {
                    text: {name: "Tema"},
                  HTMLclass: "smallCircle",
                  innerHTML: "Título terciario",
                  },
                  {
                    text: {name: "Tema"},
                  HTMLclass: "smallCircle",
                  innerHTML: "Título terciario",
                  }
                ]
              },
              {
                text: {name: "Tema"},
                HTMLclass: "smallCircle",
                innerHTML: "Título terciario",
              }
            ]
      }
    ]
  }
};

$(document).ready(function() {
  new Treant( chart_config );
});