<?php  
include("header.php");
?>
<div class="background-image1" style="height: 797px"> 
<div class="container-fluid ">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-1 col-xl-2 px-sm-0 px-0 bg-dark"> 
            
            <div class="d-flex flex-column align-items-center align-items-sm-start px-1 pt-0 text-white min-vh-100">
                <a href="menu.php" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Menu</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
        
                    </li>
                    <li>
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span> </a>
                        <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                            
                        </ul>
                    </li>
                  
                    <li>
                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                            <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Travels</span></a>
                        <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                            <li class="w-100 whitefontlink">
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">One-way</span></a>
                            </li>
                            <li> 
                            <li class="w-100 whitefontlink">

                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Round trip</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Reservations</span> </a>
                            <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                            <li class="w-100 whitefontlink">
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Hotels</span></a>
                            </li>
                            <li>
                            <li class="w-100 whitefontlink">

                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Food</span></a>
                            </li>
                            <li>
                            <li class="w-100 whitefontlink">

                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Activities</span></a>
                            </li>
                           
                        </ul>
                    </li>
                    
                </ul>
                <hr>
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="images/loloa.jpg" alt="hugenerd" width="30" height="30" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1">Users</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col py-3">
        <div class="d-flex justify-content-between flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
        <!-- User's name on the left side -->
        <div class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <img src="images/loloa.jpg" alt="hugenerd" width="30" height="30" class="rounded-circle me-2">
            <span class="fs-6 d-none d-sm-inline">Users</span>
        </div>

        <!-- Search bar on the right side -->
        <form class="d-flex align-items-center">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light" type="submit">Search</button>
        </form>
<!-- Carousel -->

<div id="demo" class="carousel slide" data-bs-ride="carousel">
  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>

  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/lu.jpg" alt="Los Angeles" class="d-block" style="width : 500px" > 
    </div>
    <div class="carousel-item">
      <img src="images/li.jpeg" alt="Chicago" class="d-block" style="width : 500px">
    </div>
    <div class="carousel-item">
      <img src="images/lo.jpeg" alt="New York" class="d-block" style="width : 500px">
    </div>
  </div>

  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
        <!-- Menu items -->
        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
            <!-- Menu items here -->
        </ul>

        <!-- Dropdown menu for user options -->
        <hr>
        <div class="dropdown pb-4">
            <!-- Dropdown menu content -->
            
        </div>
        <?php

 $dataPoints = array(
     array("x"=> 10, "y"=> 41),
     array("x"=> 20, "y"=> 35, "indexLabel"=> "Lowest"),
     array("x"=> 30, "y"=> 50),
     array("x"=> 40, "y"=> 45),
     array("x"=> 50, "y"=> 52),
     array("x"=> 60, "y"=> 68),
     array("x"=> 70, "y"=> 38),
     array("x"=> 80, "y"=> 71, "indexLabel"=> "Highest"),
     array("x"=> 90, "y"=> 52),
     array("x"=> 100, "y"=> 60),
     array("x"=> 110, "y"=> 36),
     array("x"=> 120, "y"=> 49),
     array("x"=> 130, "y"=> 41)
 );
     
 ?>
 <!DOCTYPE HTML>
 <html>
 <head>  
 <script>
 window.onload = function () {
  
 var chart = new CanvasJS.Chart("chartContainer", {
     animationEnabled: true,
     exportEnabled: true,
     theme: "light1", // "light1", "light2", "dark1", "dark2"
     title:{
         text: "Members"
     },
     axisY:{
         includeZero: true
     },
     data: [{
         type: "column", //change type to bar, line, area, pie, etc
         //indexLabel: "{y}", //Shows y value on all Data Points
         indexLabelFontColor: "#5A5757",
         indexLabelPlacement: "outside",   
         dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
     }]
 });
 chart.render();
  
 }
 </script>

<style>
    #chartContainer {
        height: 250px;
        width: 500px;
        float: left;
        margin-top: 0px;
    }
</style
</head>
 <body>
 <div id="chartContainer" </div>
 <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
 </body>
 </html>                
 
</div>



    </div>
</div>
        </div>
    </div>
</div>
</div>
<?php  
include("footer.php");
?>
