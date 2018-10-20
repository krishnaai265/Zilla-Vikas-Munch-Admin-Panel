<?php
$servername = "localhost:3306";
$username = "root";
$password = "root";
$database = "hack";
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="theme.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
  <script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
  
  
<style>
#body-row {
    margin-left:0;
    margin-right:0;
}
#sidebar-container {
    min-height: 100vh;   
    background-color: #333;
    padding: 0;
}

/* Sidebar sizes when expanded and expanded */
.sidebar-expanded {
    width: 230px;
}
.sidebar-collapsed {
    width: 60px;
}

/* Menu item*/
#sidebar-container .list-group a {
    height: 50px;
    color: white;
}

/* Submenu item*/
#sidebar-container .list-group .sidebar-submenu a {
    height: 45px;
    padding-left: 30px;
}
.sidebar-submenu {
    font-size: 0.9rem;
}

/* Separators */
.sidebar-separator-title {
    background-color: #333;
    height: 35px;
}
.sidebar-separator {
    background-color: #333;
    height: 25px;
}
.logo-separator {
    background-color: #333;    
    height: 60px;
}

/* Closed submenu icon */
#sidebar-container .list-group .list-group-item[aria-expanded="false"] .submenu-icon::after {
  content: " \f0d7";
  font-family: FontAwesome;
  display: inline;
  text-align: right;
  padding-left: 10px;
}
/* Opened submenu icon */
#sidebar-container .list-group .list-group-item[aria-expanded="true"] .submenu-icon::after {
  content: " \f0da";
  font-family: FontAwesome;
  display: inline;
  text-align: right;
  padding-left: 10px;
}
</style>	
</head>
<body>
<!-- Bootstrap NavBar -->
<nav class="navbar navbar-expand-md navbar-dark bg-primary">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">
    <img src="https://v4-alpha.getbootstrap.com/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    <span class="menu-collapsed">ADMIN PANEL</span>
  </a>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
  
  <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="">Welcome DC</a>
            </li>
        </ul>
    <ul class="navbar-nav">
      
      <!-- This menu is hidden in bigger devices with d-sm-none. 
           The sidebar isn't proper for smaller screens imo, so this dropdown menu can keep all the useful sidebar itens exclusively for smaller screens  -->
      <li class="nav-item dropdown d-sm-block d-md-none">
        <a class="nav-link dropdown-toggle" href="#" id="smallerscreenmenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Menu
        </a>
        <div class="dropdown-menu" aria-labelledby="smallerscreenmenu">
            <a class="dropdown-item" href="#">Dashboard</a>
            <a class="dropdown-item" href="#">Profile</a>
            <a class="dropdown-item" href="#">Tasks</a>
            <a class="dropdown-item" href="#">Etc ...</a>
        </div>
      </li><!-- Smaller devices menu END -->
      
    </ul>
  </div>
</nav><!-- NavBar END -->


<!-- Bootstrap row -->
<div class="row" id="body-row">
    <!-- Sidebar -->
    <div id="sidebar-container" class="sidebar-expanded d-none d-md-block"><!-- d-* hiddens the Sidebar in smaller devices. Its itens can be kept on the Navbar 'Menu' -->
        <!-- Bootstrap List Group -->
        <ul class="list-group">
            <!-- Separator with title -->
            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                <small>MAIN MENU</small>
            </li>
            <!-- /END Separator -->
            <!-- Menu with submenu -->
            <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-dashboard fa-fw mr-3"></span> 
                    <span class="menu-collapsed">Dashboard</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a>
            <!-- Submenu content -->
            <div id='submenu1' class="collapse sidebar-submenu">
                <a href="Submitted%20Problems.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Submitted Problems</span>
                </a>
				<a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Student Solutions</span>
                </a>
                <a href="Pending Problems.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Pending Problems</span>
                </a>
				<a href="Student Problems.html" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Student Problems</span>
                </a>				
                <a href="blank.html" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Add a Problems</span>
                </a>
            </div>
            <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-user fa-fw mr-3"></span>
                    <span class="menu-collapsed">Profile</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a>
            <!-- Submenu content -->
            <div id='submenu2' class="collapse sidebar-submenu">
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Settings</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Password</span>
                </a>
            </div>            
            <a href="#" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-tasks fa-fw mr-3"></span>
                    <span class="menu-collapsed">Tasks</span>    
                </div>
            </a>
            <!-- Separator with title -->
            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                <small>OPTIONS</small>
            </li>
            <!-- /END Separator -->
            <a href="#" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-calendar fa-fw mr-3"></span>
                    <span class="menu-collapsed">Calendar</span>
                </div>
            </a>
            <a href="#" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-envelope-o fa-fw mr-3"></span>
                    <span class="menu-collapsed">Messages <span class="badge badge-pill badge-primary ml-2">5</span></span>
                </div>
            </a>
            <!-- Separator without title -->
            <li class="list-group-item sidebar-separator menu-collapsed"></li>            
            <!-- /END Separator -->
            <a href="#" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-question fa-fw mr-3"></span>
                    <span class="menu-collapsed">Help</span>
                </div>
            </a>
            <a href="#" data-toggle="sidebar-colapse" class="bg-dark list-group-item list-group-item-action d-flex align-items-center">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span id="collapse-icon" class="fa fa-2x mr-3"></span>
                    <span id="collapse-text" class="menu-collapsed">Collapse</span>
                </div>
            </a>
            <!-- Logo -->
            <li class="list-group-item logo-separator d-flex justify-content-center">
                <img src='https://v4-alpha.getbootstrap.com/assets/brand/bootstrap-solid.svg' width="30" height="30" />    
            </li>   
        </ul><!-- List Group END-->
    </div><!-- sidebar-container END -->

    <!-- MAIN -->
	
    <div class="py-5 text-white opaque-overlay" style="float:left;width:82%;background-image: url(&quot;https://pingendo.github.io/templates/sections/assets/cover_restaurant.jpg&quot;);">
    <div class="container">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <h1 class="text-gray-dark">Insert Problem</h1>
          <p class="lead mb-4">Complete all the fields below to insert problem</p>
          <form class="" method="post" action="http://localhost:63342/untitled/sp.php">
            <div class="form-group"> <label for="exampleFormControlTextarea1">Problem Statement</label> <textarea class="form-control" name="text1" rows="3"></textarea> </div>
            <div class="form-group"> <label for="exampleFormControlTextarea1">Problem Description</label> <textarea class="form-control" rows="10" name="text2"></textarea> </div>
            <div class="form-row">
              <div class="form-group col-md-6"> <label for="inputCity">Ministry</label> <select id="inputState" class="form-control" name="min">
                  <option value="Choose..." selected="">Choose...</option>
                  
                  <option value="AICTE">AICTE</option>
                            <option value="Council of Scientific and Industrial Research (CSIR)">Council of Scientific and Industrial Research (CSIR)</option>
                            <option value="DBT, Ministry of Science and Technology">DBT, Ministry of Science and Technology</option>
                            <option value="Department of Agriculture Research and education &amp; ICAR">Department of Agriculture Research and education &amp; ICAR</option>
                            <option value="Department of Atomic Energy">Department of Atomic Energy</option>
                            <option value="Department of Commerce, Ministry of Commerce &amp; Industry">Department of Commerce, Ministry of Commerce &amp; Industry</option>
                            <option value="Department of Defence Production, Ministry of Defence">Department of Defence Production, Ministry of Defence</option>
                            <option value="Department of Economic Affairs, Ministry of Finance">Department of Economic Affairs, Ministry of Finance</option>
                            <option value="Department of Empowerment of Persons with Disabilities, Ministry of Social Justice &amp; Empowerment">Department of Empowerment of Persons with Disabilities, Ministry of Social Justice &amp; Empowerment</option>
                            <option value="Department of Food and Public Distribution, Ministry of Consumer affairs, food and public distribution">Department of Food and Public Distribution, Ministry of Consumer affairs, food and public distribution</option>
                            <option value="Department of Post, Ministry of State(IC) of Communications">Department of Post, Ministry of State(IC) of Communications</option>
                            <option value="Department of Space (ISRO)">Department of Space (ISRO)</option>
                            <option value="Department of Telecommunications. Ministry of Communication">Department of Telecommunications. Ministry of Communication</option>
                            <option value="Dept. of Administrative Reforms &amp; Public Grievances">Dept. of Administrative Reforms &amp; Public Grievances</option>
                            <option value="DIPP, Ministry of Commerce &amp; Industry">DIPP, Ministry of Commerce &amp; Industry</option>
                            <option value="DRDO, Ministry of Defence">DRDO, Ministry of Defence</option>
                            <option value="DST, Ministry of Science and Technology">DST, Ministry of Science and Technology</option>
                            <option value="Ministry of Agriculture &amp; Farmers Welfare">Ministry of Agriculture &amp; Farmers Welfare</option>
                            <option value="Ministry of AYUSH">Ministry of AYUSH</option>
                            <option value="Ministry of Coal">Ministry of Coal</option>
                            <option value="Ministry of Earth Sciences">Ministry of Earth Sciences</option>
                            <option value="Ministry of Electronics and Information Technology(MeitY)">Ministry of Electronics and Information Technology(MeitY)</option>
                            <option value="Ministry of Environment, Forest and Climate Change">Ministry of Environment, Forest and Climate Change</option>
                            <option value="Ministry of Food Processing">Ministry of Food Processing</option>
                            <option value="Ministry of Health &amp; Family Welfare">Ministry of Health &amp; Family Welfare</option>
                            <option value="Ministry of Home Affairs">Ministry of Home Affairs</option>
                            <option value="Ministry of HRD">Ministry of HRD</option>
                            <option value="Ministry of Information and Broadcasting">Ministry of Information and Broadcasting</option>
                            <option value="Ministry of Petroleum and Natural Gas">Ministry of Petroleum and Natural Gas</option>
                            <option value="Ministry of Power">Ministry of Power</option>
                            <option value="Ministry of Railways">Ministry of Railways</option>
                            <option value="Ministry of Road Transport and Highways">Ministry of Road Transport and Highways</option>
                            <option value="Ministry of Shipping">Ministry of Shipping</option>
                            <option value="Ministry of Skill Development &amp; Entrepreneurship">Ministry of Skill Development &amp; Entrepreneurship</option>
                            <option value="Ministry of Statistics and Programme Implementation">Ministry of Statistics and Programme Implementation</option>
                            <option value="Ministry of Textiles">Ministry of Textiles</option>
                            <option value="Ministry of Tourism">Ministry of Tourism</option>
                            <option value="Ministry of Tribal Affairs">Ministry of Tribal Affairs</option>
                            <option value="Ministry of Urban development">Ministry of Urban development</option>
                            <option value="Ministry of Water Resources, River Development and Ganga Rejuvenation">Ministry of Water Resources, River Development and Ganga Rejuvenation</option>
                            <option value="Ministry of Women and Child Development">Ministry of Women and Child Development</option>
               </select> </div>
              <div class="form-group col-md-6"> <label for="inputState">Sector</label> <select id="inputState" class="form-control" name="sec">
        <option selected="">Choose...</option>
                <option value="Economy">Economy</option>
                            <option value="Education &amp; Skills">Education &amp; Skills</option>
                            <option value="Farmer Welfare">Farmer Welfare</option>
                            <option value="Governance">Governance</option>
                            <option value="Health &amp; Social Welfare">Health &amp; Social Welfare</option>
                            <option value="India &amp; the World">India &amp; the World</option>
                            <option value="Infrastructure">Infrastructure</option>
                            <option value="Rural Development">Rural Development</option>
                            <option value="Technology">Technology</option>
      </select> </div>
              <div class="form-row">
                <div class="form-group col-md-6"> <label for="inputCity">Category</label> <select id="inputState" class="form-control" name="cate">
                  
        <option selected="">Choose...</option>
                  

                            <option value="Hardware">Hardware</option>
                            <option value="Software">Software</option>
               </select> </div>
                <div class="form-group col-md-5"> <label for="inputState">Periority</label> <select id="inputState" class="form-control" name="per">
        <option selected="">Choose...</option>
                <option value="Low">Low</option>
                            <option value="Meadium">Meadium</option>
                            <option value="High">High</option>
                        
      </select> </div>
                <button type="submit" class="btn btn-primary">Submit
                  <br> </button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </div>
  </div><!-- Main Col END -->
<br/>    
</div><!-- body-row END -->
</body>
</html>