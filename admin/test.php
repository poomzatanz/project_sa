<html>
<head><script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js">
</script>
</head>
<body>
<canvas id="myChart" width="200" height="200"></canvas>
<canvas id="chartTwoContainer" width="200" height="200"></canvas>
<script>

var optionsOne = {
type: 'horizontalBar',
data: {
    labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
 datasets: [ 
		 {
			 label: '10 อันดับแรกความคิดเห็นเชิงบวก',
             data: [12, 19, 3, 5, 2, 3],
			 backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","#ca29b2","#996def","#6ee97e","#366517","#6fc6a8"],
			 borderWidth: 1
		 }
	 ]
},
options: {
    scales: {
        yAxes: [{
            ticks: {
                beginAtZero:true
            }
        }]
    },
onClick:function(e){
    var activePoints = myChart.getElementsAtEvent(e);
    var selectedIndex = activePoints[0]._index;
    alert(this.data.labels[selectedIndex]);


}
}
}
var optionsTwo = {
type: 'line',
data: {
 labels: ["Green", "Purple", "Orange"],
 datasets: [ 
		 {
			 label: 'Colors Two',
			 data: [8, 3, 7],
			 borderWidth: 1
		 }
	 ]
},
options: {
 scales: {
	 xAxes: [{
	 ticks: {
				 display: true
	 }
   }]
 }
}
}
var ctxOne = document.getElementById('myChart');
var myChart =  new Chart(ctxOne, optionsOne);

var ctxTwo = document.getElementById('chartTwoContainer');
new Chart(ctxTwo, optionsTwo);
</script>
</body>
</html>