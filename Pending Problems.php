<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "aicte3";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
  <script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
  <link rel="stylesheet" href="st.css">
  
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
            Pending Problems
            
        </h1>    
	
	
	

              <?php
		
		$sql = "Select problemId,problemHead,problemSumm,problemStatus,problemSolvedBy,problemDeptId,problemCategory from prob_bijnor";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
			$a=$row["problemSumm"];
			$read =file_get_contents($a);
			echo '<div class="row" style="clear:left;margin-bottom:10px">
            
            <div class="col-sm-11" style="margin-top:10px;"><button type="button" class="w-100 btn" data-toggle="collapse" data-target="#i'.$row["problemId"].'" style="background-color:#5DADE2;color:white;margin-left:20px;text-align:left;">
		
'.$row["problemHead"].'                    
<pre style="overflow:hidden;color:#d8d8d8;">
Ministry/State : '.$row["problemDeptId"].' Category : '.$row["problemCategory"].' Total Submissions : 144
</pre>
                </button></div>
        </div>

        <div id="i'.$row["problemId"].'" class="collapse" style="margin:-15px 0px 10px 20px;width:91.5%;border-style:solid;border-color:#5DADE2;border-width: 2px;">
            <div style="margin:10px;">'.$read.'</div>
       </div>';
 /*           echo '<div class="row" style="clear:left;margin-bottom:10px;">
            
            
            <div class="col-sm-11"><button type="button" class="w-100 btn btn-primary" data-toggle="collapse" data-target="#'.$row["id"].' style="background-color:#D3D3D3;margin-left:20px;text-align:left;">'

                   .$row["pstate"].
              '<pre>
Ministry/State : '.$row["mini"].' Sector : '.$row["sector"].' Category : '.$row["cate"].' Priority : '.$row["peri"].' Total Submissions : 144
</pre>
                </button></div>
        </div>

        <div id="'.$row["id"].'" class="collapse" style="margin:-15px 0px 10px 20px;width:91.5%;border-style:solid;border-color:#D3D3D3;border-width: 2px;"><div style="margin:10px">'
            .$row["pdesc"].
            '</div>';*/
        }
        }
?>


<!--
<div class="rounded-circle" style="clear:left;margin-top:100px;width: 50px; height: 50px;background-color:rgba(255, 0, 0, 0.8); "></div>
<h3 style="float:left;">Zila Vikas Manch (ZIVIMA) – District Development Portal</h3>
-->


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
<br/>    
</div><!-- body-row END -->
</body>
</html>