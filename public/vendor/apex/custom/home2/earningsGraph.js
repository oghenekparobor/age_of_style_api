var options={chart:{height:150,width:"100%",type:"area",zoom:{enabled:!1},toolbar:{show:!1}},dataLabels:{enabled:!1},stroke:{curve:"smooth",width:7},series:[{name:"Orders",data:[50,300,270,70,150,290,320,430]}],grid:{borderColor:"#bede68",strokeDashArray:0,show:!1,xaxis:{lines:{show:!1}},yaxis:{lines:{show:!1}},padding:{top:-20,right:0,bottom:0,left:0}},xaxis:{labels:{show:!1}},yaxis:{show:!1},fill:{type:"gradient",gradient:{type:"vertical",shadeIntensity:1,inverseColors:!1,opacityFrom:.6,opacityTo:0,stops:[15,100]}},colors:["#FFFFFF"],markers:{size:0,opacity:.2,colors:["#FFFFFF"],strokeColor:"#f98faa",strokeWidth:2,hover:{size:10}},tooltip:{y:{formatter:function(e){return e}}}},chart=new ApexCharts(document.querySelector("#earningsGraph"),options);chart.render();