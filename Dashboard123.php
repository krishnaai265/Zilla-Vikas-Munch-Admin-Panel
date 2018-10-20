<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="st.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
  <script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>
  <script>
$(document).ready(function() {
var chart1 = new CanvasJS.Chart("chartContainer1",
    {
        animationEnabled: true,
        title: {
            text: "Spline Area Chart"
        },
        axisX: {
            interval: 10,
        },
        data: [
        {
            type: "splineArea",
            color: "rgba(255,12,32,.3)",
            type: "splineArea",
            dataPoints: [
                { x: new Date(1992, 0), y: 2506000 },
                { x: new Date(1993, 0), y: 2798000 },
                { x: new Date(1994, 0), y: 3386000 },
                { x: new Date(1995, 0), y: 6944000 },
                { x: new Date(1996, 0), y: 6026000 },
                { x: new Date(1997, 0), y: 2394000 },
                { x: new Date(1998, 0), y: 1872000 },
                { x: new Date(1999, 0), y: 2140000 },
                { x: new Date(2000, 0), y: 7289000 },
                { x: new Date(2001, 0), y: 4830000 },
                { x: new Date(2002, 0), y: 2009000 },
                { x: new Date(2003, 0), y: 2840000 },
                { x: new Date(2004, 0), y: 2396000 },
                { x: new Date(2005, 0), y: 1613000 },
                { x: new Date(2006, 0), y: 2821000 }
            ]
        },
        ]
    });
chart1.render();
});
$(document).ready(function() {
var chart2 = new CanvasJS.Chart("chartContainer2",
    {
        animationEnabled: true,
        title: {
            text: "Pie Chart",
        },
        data: [
        {
            type: "pie",
            showInLegend: true,
            dataPoints: [
                { y: 4181563, legendText: "PS 3", indexLabel: "PlayStation 3" },
                { y: 2175498, legendText: "Wii", indexLabel: "Wii" },
                { y: 3125844, legendText: "360", indexLabel: "Xbox 360" },
                { y: 1176121, legendText: "DS", indexLabel: "Nintendo DS" },
                { y: 1727161, legendText: "PSP", indexLabel: "PSP" },
                { y: 4303364, legendText: "3DS", indexLabel: "Nintendo 3DS" },
                { y: 1717786, legendText: "Vita", indexLabel: "PS Vita" }
            ]
        },
        ]
    });
chart2.render();
});
$(document).ready(function() {
var chart3 = new CanvasJS.Chart("chartContainer3",
    {
        animationEnabled: true,
        title: {
            text: "Line Chart"
        },
        axisX: {
            valueFormatString: "MMM",
            interval: 1,
            intervalType: "month"
        },
        axisY: {
            includeZero: false
        },
        data: [
        {
          type: "line",
          dataPoints: [
              { x: new Date(2012, 00, 1), y: 450 },
              { x: new Date(2012, 01, 1), y: 414 },
              { x: new Date(2012, 02, 1), y: 520, indexLabel: "highest", markerColor: "red", markerType: "triangle" },
              { x: new Date(2012, 03, 1), y: 460 },
              { x: new Date(2012, 04, 1), y: 450 },
              { x: new Date(2012, 05, 1), y: 500 },
              { x: new Date(2012, 06, 1), y: 480 },
              { x: new Date(2012, 07, 1), y: 480 },
              { x: new Date(2012, 08, 1), y: 410, indexLabel: "lowest", markerColor: "DarkSlateGrey", markerType: "cross" },
              { x: new Date(2012, 09, 1), y: 500 },
              { x: new Date(2012, 10, 1), y: 480 },
              { x: new Date(2012, 11, 1), y: 510 }
            ]
        }
        ]
    });
chart3.render();
});
$(document).ready(function() {
var chart4 = new CanvasJS.Chart("chartContainer4",
    {
        animationEnabled: true,
        title: {
            text: "Column Chart"
        },
        axisX: {
            interval: 10,
        },
        data: [
        {
            type: "column",
            legendMarkerType: "triangle",
            legendMarkerColor: "green",
            color: "rgba(255,12,32,.3)",
            showInLegend: true,
            legendText: "Country wise population",
            dataPoints: [
                { x: 10, y: 297571, label: "India" },
                { x: 20, y: 267017, label: "Saudi" },
                { x: 30, y: 175200, label: "Canada" },
                { x: 40, y: 154580, label: "Iran" },
                { x: 50, y: 116000, label: "Russia" },
                { x: 60, y: 97800, label: "UAE" },
                { x: 70, y: 20682, label: "US" },
                { x: 80, y: 20350, label: "China" }
            ]
        },
        ]
    });
chart4.render();
});
</script>
</head>
<body>
<!-- Bootstrap NavBar -->
<?php include('top-navbar.php'); ?>
<!-- NavBar END -->


<!-- Bootstrap row -->
<div class="row" id="body-row">
    <!-- Sidebar -->
    <?php include('side-navbar.php'); ?>
    <!-- MAIN -->
	
    <div class="col">
    <h1>
            Dashboard            
        </h1>    
	<div style="float:left;border-radius:10px; margin:10px 10px 30px 10px;color:#ffffff;">
	    <div style="background-color: #f5f5f5;">
		<div style="width:220px; background-color:#0062cc;">
  <span style="margin-left:5px;">Department of Water</span>
		</div>
		<pre style="margin-bottom:0;">
  Submitted Problems: 120
  Pending Problems: 20
  <a href="blank.html" style="color:#333333;">Add a Problem</a>
		</pre">
		</div>
		<div style="margin-left:auto;background-color: rgba(0,0,255,0.4);">
		<a href="Submitted Problems.php" style="margin-left:45px;color:#ffffff;">See Problems</a>
		</div>
	</div>
	<div style="float:left; height: 130px; width:220px; margin:10px 10px 0px 10px;color:#333333;">
	    <div style="width:220px; height:100px;background-color: #f5f5f5;">
		<div style="width:220px; background-color:#d9534f;">
  <span style="margin-left:5px;">Department of Tax</span> 		
		</div>
		<pre>
  Submitted Problems: 120
  Pending Problems: 20
  <a href="blank.html" style="color:#333333;">Add a Problem</a>
		</pre>
		</div>
		<div style="margin-left:auto;background-color: rgba(255, 0, 0, 0.4);">
		<a href="Submitted Problems.php" style="margin-left:45px;color:#333333;">See Problems</a>
		</div>
	</div>
	<div style="float:left;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);margin:10px 10px 0px 10px;color:#333333;border-radius:9px;">
	    <div style="width:220px; height:80px; background-color: #0062cc;color:white; border-radius:9px 9px 0 0;">
		<div style="width:220px; border-radius:4px;background-color:#0062cc;color:white;">
  <span style="margin-left:5px;line-height:35px">Department of Tax</span> 		
		</div>
		<pre style="color:white;background-color:#0062cc;border-radius:9px">  Submitted Problems: 120
  Pending Problems: 20
  <a href="blank.html" style="color:white;margin-bottom:20px;"><b>Add a Problem</b></a><br>
		</pre><br>
		</div>
		<br><div style="margin-left:auto;height:35.5px;border-radius:0 0 9px 9px;background-color:#5DADE2">
		<a href="Submitted Problems.php" style="line-height:30px;margin-left:26%;color:white;">See Problems</a>
		</div>
	</div>
	    <div style="width:220px; height:100px;background-color: rgba(0,128,0, 0.2);">
		<div style="width:220px; background-color:rgba(0,128,0, 0.4);">
  <span style="margin-left:5px;">Department of Engineering</span> 		
		</div>
		<pre>
  Submitted Problems: 120
  Pending Problems: 20
  <a href="blank.html" style="color:#333333;">Add a Problem</a>
		</pre>
		</div>
		<div style="margin-left:auto;background-color: rgba(0,128,0, 0.4);">
		<a href="Submitted Problems.php" style="margin-left:45px;color:#333333;">See Problems</a>
		</div>
	</div>
	<div style="float:left; height: 130px; width:220px; margin:10px 10px 0px 10px;color:#333333;">
	    <div style="width:220px; height:100px;background-color: rgba(128,0,0, 0.2);">
		<div style="width:220px; background-color:rgba(128,0,0, 0.4);">
  <span style="margin-left:5px;">Department of Road</span> 		
		</div>
		<pre>
  Submitted Problems: 120
  Pending Problems: 20
  <a href="blank.html" style="color:#333333;">Add a Problem</a>
		</pre>
		</div>
		<div style="background-color: rgba(128,0,0, 0.4);">
		<a href="Submitted Problems.php" style="margin-left:45px;color:#333333;">See Problems</a>
		</div>
	</div>
<div id="chartContainer1" style="width: 45%; height: 400px;display: inline-block;"></div> <br/>
<div id="chartContainer2" style="width: 45%; height: 400px;display: inline-block;margin-left:23%"></div><br/>
<div id="chartContainer3" style="width: 45%; height: 400px;display: inline-block;"></div>
<div id="chartContainer4" style="width: 45%; height: 400px;display: inline-block;"></div>
    <br>
 <!--       <h1>
            Collapsing Menu
            <small class="text-muted">Version 2.1</small>
        </h1>
        
        
        <div class="card">
            <h4 class="card-header">Requirements</h4>
            <div class="card-body">
                <ul>
                    <li>JQuery</li>
                    <li>Bootstrap 4 beta-3</li>
                </ul>
            </div>
        </div>
       

-->
    </div><!-- Main Col END -->
    
</div><!-- body-row END -->
</body>
</html>