
<?php
include("config/config.php");
include("config/db_connect.php");

session_start();
if(!isset($_SESSION['username'])){
    echo '<script>window.location.replace("'.BASE_URL.'login.php");</script>';
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
	
	<style type="text/css">

		
	.time_period, .water_level{
	margin: 20px;
	}
	.submit{
		text-align:center;
	}
	</style>
        
        <!-- Title -->
        <title>Dashboard - The Flush</title>
		
        <link rel="stylesheet" type="type/css" href="main.css" />
		
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8">
        <meta name="description" content="Responsive Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />
        
        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="assets/plugins/materialize/css/materialize.min.css"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">    
        <link href="assets/plugins/metrojs/MetroJs.min.css" rel="stylesheet">
        <link href="assets/plugins/weather-icons-master/css/weather-icons.min.css" rel="stylesheet">
		

        	
        <!-- Theme Styles -->
        <link href="assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
        
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
    <body>
    
      
                    <div class="row no-m-t no-m-b">
                        <div class="col s12 m12 l8">
                            <div class="card white visitors-card">
                                <div class="card-content">
								<form>
                                  <h4>Pengaturan</h4>
								  
								  <div class="time_period">
								  <p>Pengaturan Periode Waktu</p>
									  <select">
										<option value="15" />15 Menit</option>
										<option value="30" />30 Menit</option>
										<option value="45" />45 Menit</option>
										<option value="60" />1 Jam</option>
										<option value="120" />2 Jam</option>
										<option value="180" />3 Jam</option>
									  </select>
								  <p>Area</p>
									  <select ">
										<option value="" />Semua Area</option>
										<option value="area1" />Area 1</option>
										<option value="area2" />Area 2</option>
										<option value="area3" />Area 3</option>
										<option value="area4" />Area 4</option>
										<option value="area5" />Area 5</option>
									  </select>
									</div>
									
									<h4>Notifikasi</h4>
									<div class="water_level">
									<p>Tingkat Air</p>
									  <select onchange="setWaterLevel(this.value)">
										<option value="active" />20 %</option>
										<option value="active" />40 %</option>
										<option value="active" />50 %</option>
										<option value="active" />60 %</option>
										<option value="active" />80 %</option>
										<option value="active" />100 %</option>
									  </select>
									<p>Area</p>
									  <select onchange="setTimePerlevel(this.value)">
										<option value="semua" />All Area</option>
										<option value="area1" />Area 1</option>
										<option value="area2" />Area 2</option>
										<option value="area3" />Area 3</option>
										<option value="area4" />Area 4</option>
										<option value="area5" />Area 5</option>
									  </select>
									</div>
									
									<div class="submit"><input type="button" value="Submit" onClick="" /></div>
								</form>
                                </div>
                            </div>
                        </div>
					</div>
                      
        
        <!-- Javascripts -->
        <script src="assets/plugins/jquery/jquery-2.2.0.min.js"></script>
        <script src="assets/plugins/materialize/js/materialize.min.js"></script>
        <script src="assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
        <script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="assets/plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="assets/plugins/counter-up-master/jquery.counterup.min.js"></script>
        <script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="assets/plugins/chart.js/chart.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.time.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.symbol.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.resize.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.tooltip.min.js"></script>
        <script src="assets/plugins/curvedlines/curvedLines.js"></script>
        <script src="assets/plugins/peity/jquery.peity.min.js"></script>
        <script src="assets/js/alpha.min.js"></script>
        <script src="assets/js/pages/dashboard.js"></script>
        
    </body>
</html>