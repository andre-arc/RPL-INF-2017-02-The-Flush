<?php
include("config/config.php");
include("config/db_connect.php");



     $query = "select * from pengaturan";
    $result = $mysqli->query($query);
    if($result == true){
        $data = $result->fetch_assoc();
    } 
    $mysqli->close();
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        
        <!-- Title -->
        <title>The Flush</title>
        
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
		<link href="assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet">  
		<link href="assets/plugins/simditor/styles/simditor.css" rel="stylesheet"/> 
        	
        <!-- Theme Styles -->
        <link href="assets/css/alpha.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
        
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
    <body>
    

            <header class="mn-header navbar-fixed">
                <nav class="blue darken-1">
                    <div class="nav-wrapper row">
                        
                        <div class="header-title col s3 m3">      
                            <span class="chapter-title">The FLush</span>
                        </div>
                        <form class="left search col s6 hide-on-small-and-down">
                            
                            <a href="javascript: void(0)" class="close-search"><i class="material-icons">close</i></a>
                        </form>
                        <ul class="right col s9 m3 nav-right-menu">
                            <li class="hide-on-small-and-down"><a href="login.php" class="btn">Login</a></li>
                            <li class="hide-on-med-and-up"><a href="javascript:void(0)" class="search-toggle"><i class="material-icons">search</i></a></li>
                        </ul>
                    </div>
                </nav>
            </header>
            
            
           
               
  
            <main class="mn-inner inner-active-sidebar">
                <div class="middle-content">
                    
                    
                    <div class="row no-m-t no-m-b">
                        <div class="col s12 m12 l8">
                            <div class="card visitors-card">
                                <div class="card-content">
                                    <div class="card-options">
                                        <ul>
                                            <li><a href="javascript:void(0)" class="card-refresh"><i class="material-icons">refresh</i></a></li>
                                        </ul>
                                    </div>
                                    <span class="card-title">Peta Area Pasar Rukoh</span>
                                    <div class="container">
                                        <canvas id="canvas" width="903" height="750"></canvas>
                                    </div>
<!--
                                            <div id="flotchart1">
												<img src="peta.png">
											</div>
											
-->
										<br><br>
										  <div class="footer">
											<p class="copyright">Kelompok 2 ©</p>
											<a href="#!">Privacy</a> &amp; <a href="#!">Terms</a>
										  </div>	
                                </div>
								
                            </div>
							
                        </div>
                        <div class="col s12 m12 l4">
                            <div class="card server-card">
                                <div class="card-content"> 
                                    <span class="card-title">Tingkat Genangan Air</span>
                                       
                                    <div class="row">
									
										<div id="area">
											<p>Area 1</p>
												<div class="progress">
													<div class="determinate" style="width: <?php echo $data['area1'];?>%" id="progress1"></div>
												</div>
										</div>
										<div id="area">
											<p>Area 2</p>
												<div class="progress">
													<div class="determinate" style="width: <?php echo $data['area2'];?>%" id="progress2"></div>
												</div>
										</div>
										<div id="area">
											<p>Area 3</p>
												<div class="progress">
													<div class="determinate" style="width: <?php echo $data['area3'];?>%" id="progress3"></div>
												</div>
										</div>
										<div id="area">
											<p>Area 4</p>
												<div class="progress">
													<div class="determinate" style="width: <?php echo $data['area4'];?>%" id="progress4"></div>
												</div>
										</div>
										<div id="area">
											<p>Area 5</p>
												<div class="progress">
													<div class="determinate" style="width: <?php echo $data['area5'];?>%" id="progress5"></div>
												</div>
										</div>
										
									</div>
                                </div>
                            </div>
                        </div>
						
                    </div>
                    
                </div>
				 <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
                    <a class="btn-floating btn-large waves-effect waves-light red modal-trigger" href="#compose">
                        <i class="material-icons">mode_edit</i>
                    </a>
                </div>
            </main>

			 <div id="compose" class="modal modal-fixed-footer">
                <div class="modal-content">
                    <h4>New Message</h4>
                    <div class="row">
                        <form method="POST" action="aksi.php" class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="to" type="text" class="validate" name="dari">
                                    <label for="to">Dari</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="subject" type="email" class="validate" name="email">
                                    <label for="subject">E-mail</label>
                                </div>
                                <div class="input-field col s12">
                                    <textarea name="pesan" id="editor" autofocus></textarea>
                                </div>
                            </div>
                        
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" value="kirim" class="btn">
                </div>
				
            </div>
			</form>
        <div class="left-sidebar-hover"></div>
		
        
        <!-- Javascripts -->
        <script src="assets/plugins/jquery/jquery-2.2.0.min.js"></script>
        <script src="assets/plugins/materialize/js/materialize.min.js"></script>
        <script src="assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
        <script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="assets/plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="assets/plugins/counter-up-master/jquery.counterup.min.js"></script>
        <script type="text/javascript" src="assets/plugins/fabricjs/dist/fabric.min.js"></script>
        <script type="text/javascript" src="assets/js/custom.js"></script>
        <script src="assets/plugins/simditor/scripts/module.js"></script>
        <script src="assets/plugins/simditor/scripts/hotkeys.js"></script>
        <script src="assets/plugins/simditor/scripts/uploader.js"></script>
        <script src="assets/plugins/simditor/scripts/simditor.js"></script>
        <script src="assets/js/alpha.min.js"></script>
        <script src="assets/js/pages/mailbox.js"></script>
<!--
        <script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="assets/plugins/chart.js/chart.min.js"></script>
-->
<!--
        <script src="assets/plugins/flot/jquery.flot.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.time.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.symbol.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.resize.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.tooltip.min.js"></script>
        <script src="assets/plugins/curvedlines/curvedLines.js"></script>
        <script src="assets/plugins/peity/jquery.peity.min.js"></script>
-->
        <script src="assets/js/alpha.min.js"></script>
        <script src="assets/js/pages/dashboard.js"></script>
        <script>
            init();
            var timer = new Array();
            for(var i = 1; i<=5; i++){
                if(getPersen('progress'+i) >= <?php echo $data['tingkat_air'];?>){
                    $('#progress'+i).addClass('red')
                    timer['progress'+i] = showAlert(i, 'red');
                }
            }
            
            if(getPersen('progress'+i) >= <?php echo $data['tingkat_air'];?>){
                document.getElementById("progress1").style.width="0%";
                removeAlert(timer['progress1'],1);
            }
            
            function Flush(tipe){
                if(tipe == 'all'){
                    for(var i = 1; i<=5; i++){
                        document.getElementById('progress'+i).style.width="0%";
                        removeAlert(timer['progress'+i],i);
                    }
                }
                else{
                    document.getElementById('progress'+tipe).style.width="0%";
                }

            }
                      
            function getPersen(id){
                var width = parseInt( 100 * parseFloat($('#'+id).css('width')) / parseFloat($('#'+id).parent().css('width')));
                return width;
            }
            
         function ajaxFlush(tipe){
                  //do ajax proses
             $.ajax({
               url : "flush.php", 
               type: "post", //form method
               data: {area : tipe},
               success:function(result){
                     Flush(tipe);
               },
               error: function(xhr, Status, err) {
                 alert("Terjadi error : "+Status);
               }
                 });
         }
        </script>
        
    </body>
</html>