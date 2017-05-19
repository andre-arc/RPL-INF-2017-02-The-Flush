
       <?php
        require_once 'config/db_connect.php';
        session_start();
        if(!isset($_SESSION['username'])){
            echo '<script>window.location.replace("'.BASE_URL.'login.php");</script>';
        }

        $query = "select * from pengaturan";
        $result = $mysqli->query($query);
        if($result == true){
            $data = $result->fetch_assoc();
        }
    ?>
                   <!DOCTYPE html>
<html lang="en">
    <head>
        
        <!-- Title -->
        <title>Dashboard - The Flush</title>
        
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
    
        <div class="mn-content fixed-sidebar">
            <header class="mn-header navbar-fixed">
                <nav class="blue darken-1">
                    <div class="nav-wrapper row">
                        <section class="material-design-hamburger navigation-toggle">
                            <a href="javascript:void(0)" data-activates="slide-out" class="button-collapse show-on-large material-design-hamburger__icon">
                                <span class="material-design-hamburger__layer"></span>
                            </a>
                        </section>
                        <div class="header-title col s3 m3">      
                            <span class="chapter-title">The FLush</span>
                        </div>
                        <form class="left search col s6 hide-on-small-and-down">
                            
                            <a href="javascript: void(0)" class="close-search"><i class="material-icons">close</i></a>
                        </form>
                        <ul class="right col s9 m3 nav-right-menu">
                            <li class="hide-on-small-and-down"><a href="javascript:void(0)" data-activates="dropdown1" class="dropdown-button dropdown-right show-on-large"><i class="material-icons">notifications_none</i><span class="badge">4</span></a></li>
                            <li class="hide-on-med-and-up"><a href="javascript:void(0)" class="search-toggle"><i class="material-icons">search</i></a></li>
                        </ul>
                        
                        <ul id="dropdown1" class="dropdown-content notifications-dropdown">
                            <li class="notificatoins-dropdown-container">
                                <ul>
                                    <li class="notification-drop-title">Today</li>
                                    <li>
                                        <a href="#!">
                                        <div class="notification">
                                            <div class="notification-icon circle blue"><i class="material-icons">done</i></div>
                                            <div class="notification-text"><p><b>Alan Grey</b> uploaded new theme</p><span>7 min ago</span></div>
                                        </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!">
                                        <div class="notification">
                                            <div class="notification-icon circle deep-purple"><i class="material-icons">cached</i></div>
                                            <div class="notification-text"><p><b>Tom</b> updated status</p><span>14 min ago</span></div>
                                        </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!">
                                        <div class="notification">
                                            <div class="notification-icon circle red"><i class="material-icons">delete</i></div>
                                            <div class="notification-text"><p><b>Amily Lee</b> deleted account</p><span>28 min ago</span></div>
                                        </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!">
                                        <div class="notification">
                                            <div class="notification-icon circle blue"><i class="material-icons">person_add</i></div>
                                            <div class="notification-text"><p><b>Tom Simpson</b> registered</p><span>2 hrs ago</span></div>
                                        </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!">
                                        <div class="notification">
                                            <div class="notification-icon circle green"><i class="material-icons">file_upload</i></div>
                                            <div class="notification-text"><p>Finished uploading files</p><span>4 hrs ago</span></div>
                                        </div>
                                        </a>
                                    </li>
                                    <li class="notification-drop-title">Yestarday</li>
                                    <li>
                                        <a href="#!">
                                        <div class="notification">
                                            <div class="notification-icon circle green"><i class="material-icons">security</i></div>
                                            <div class="notification-text"><p>Security issues fixed</p><span>16 hrs ago</span></div>
                                        </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!">
                                        <div class="notification">
                                            <div class="notification-icon circle indigo"><i class="material-icons">file_download</i></div>
                                            <div class="notification-text"><p>Finished downloading files</p><span>22 hrs ago</span></div>
                                        </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!">
                                        <div class="notification">
                                            <div class="notification-icon circle blue"><i class="material-icons">code</i></div>
                                            <div class="notification-text"><p>Code changes were saved</p><span>1 day ago</span></div>
                                        </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <div class="search-results">
                <div class="container search-container">
                    <div class="row">
                        <div class="col s12 search-head">
                            <div class="row">
                                <div class="col s12">
                                    <div class="left">
                                        <p class="search-results-title">Quick search results</p>
                                        <p class="search-filter left">
                                            <input type="checkbox" class="filled-in" id="filled-in-box" checked/>
                                            <label for="filled-in-box">Google search</label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="res-not-found">No results found</div>
                        </div>
                        <div class="col s12 m4 search-result-container">
                            <div class="card card-transparent">
                                <div class="row valign-wrapper">
                                    <div class="col s3">
                                        <img src="assets/images/profile-image-1.png" alt="" class="circle responsive-img z-depth-1">
                                    </div>
                                    <div class="col s9">
                                        <span class="search-result-text">
                                            Search <span class="search-text search-result-highlight"></span><br><span class="secondary-search-text">Last active 2 days ago</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-transparent">
                                <div class="row valign-wrapper">
                                    <div class="col s3">
                                        <img src="assets/images/profile-image-3.jpg" alt="" class="circle responsive-img z-depth-1">
                                    </div>
                                    <div class="col s9">
                                        <span class="search-result-text">
                                            News about <span class="search-text search-result-highlight"></span><br><span class="secondary-search-text">23 Blogs</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-transparent">
                                <div class="row valign-wrapper">
                                    <div class="col s3">
                                        <img src="assets/images/profile-image.png" alt="" class="circle responsive-img z-depth-1">
                                    </div>
                                    <div class="col s9">
                                        <span class="search-result-text">
                                            Tom King (Works at <span class="search-text search-result-highlight"></span>)<br><span class="secondary-search-text">Avaible for freelance work</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m4 search-result-container">
                            <div class="card card-transparent ">
                                <div class="row valign-wrapper">
                                    <div class="col s3">
                                        <span class="z-depth-1 circle search-circle indigo lighten-1">F</span>
                                    </div>
                                    <div class="col s9">
                                        <span class="search-result-text">
                                            <span class="search-text search-result-highlight"></span> on Facebook<br><span class="secondary-search-text"><a href="#">View website</a></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-transparent">
                                <div class="row valign-wrapper">
                                    <div class="col s3">
                                        <span class="z-depth-1 circle search-circle light-blue lighten-1">T</span>
                                    </div>
                                    <div class="col s9">
                                        <span class="search-result-text">
                                            <span class="search-text search-result-highlight"></span> on Twitter<br><span class="secondary-search-text"><a href="#">View website</a></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-transparent">
                                <div class="row valign-wrapper">
                                    <div class="col s3">
                                        <span class="z-depth-1 circle search-circle red darken-1">G</span>
                                    </div>
                                    <div class="col s9">
                                        <span class="search-result-text">
                                            Google+ <span class="search-text search-result-highlight"></span><br><span class="secondary-search-text"><a href="#">View website</a></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m4 search-result-container">
                            <div class="card card-transparent">
                                <div class="card-content first">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sunt in culpa qui<span class="search-text search-result-highlight"></span> quis.</p>
                                </div>
                                <div class="card-action">
                                    <span class="grey-text">Yesterday, 4:56 PM</span>
                                </div>
                            </div>
                            <div class="card card-transparent">
                                <div class="card-content">
                                    <p>Sunt in culpa qui <span class="search-text search-result-highlight"></span> officia deserunt mollit anim id est laborum. officia deserunt mollit anim id est laborum officia deserunt mollit anim</p>
                                </div>
                                <div class="card-action">
                                    <span class="grey-text">27 January 2016</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <aside id="chat-messages" class="side-nav white">
                <p class="sidebar-chat-name">Tom Simpson<a href="#" data-activates="chat-messages" class="chat-message-link"><i class="material-icons">keyboard_arrow_right</i></a></p>
                <div class="messages-container">
                    <div class="message-wrapper them">
                        <div class="circle-wrapper"><img src="assets/images/profile-image-1.png" class="circle" alt=""></div>
                        <div class="text-wrapper">Lorem Ipsum</div>
                    </div>
                    <div class="message-wrapper me">
                        <div class="circle-wrapper"><img src="assets/images/profile-image-3.jpg" class="circle" alt=""></div>
                        <div class="text-wrapper">Integer in faucibus diam?</div>
                    </div>
                    <div class="message-wrapper them">
                        <div class="circle-wrapper"><img src="assets/images/profile-image-1.png" class="circle" alt=""></div>
                        <div class="text-wrapper">Vivamus quis neque volutpat, hendrerit justo vitae, suscipit dui</div>
                    </div>
                    <div class="message-wrapper me">
                        <div class="circle-wrapper"><img src="assets/images/profile-image-3.jpg" class="circle" alt=""></div>
                        <div class="text-wrapper">Suspendisse condimentum tortor et lorem pretium</div>
                    </div>
                    <div class="message-wrapper them">
                        <div class="circle-wrapper"><img src="assets/images/profile-image-1.png" class="circle" alt=""></div>
                        <div class="text-wrapper">dolore eu fugiat nulla pariatur</div>
                    </div>
                    <div class="message-wrapper me">
                        <div class="circle-wrapper"><img src="assets/images/profile-image-3.jpg" class="circle" alt=""></div>
                        <div class="text-wrapper">Duis maximus leo eget massa porta</div>
                    </div>
                </div>
                <div class="message-compose-box">
                    <div class="input-field">
                        <input placeholder="Write message" id="message_compose" type="text">
                    </div>
                </div>
            </aside>
            <aside id="slide-out" class="side-nav white fixed">
                <div class="side-nav-wrapper">
                    <div class="sidebar-profile">
                        <div class="sidebar-profile-image">
                            <img src="assets/images/profile-image.png" class="circle" alt="">
                        </div>
                        <div class="sidebar-profile-info">
                            <a href="javascript:void(0);" class="account-settings-link">
                                <p><?= $_SESSION['username'];?></p>
                                <span><?= $_SESSION['username'];?><i class="material-icons right">arrow_drop_down</i></span>
                            </a>
                        </div>
                    </div>
                    <div class="sidebar-account-settings">
                        <ul>
                            
                            <li class="no-padding">
                                <a href="<?= BASE_URL.'logout.php'?>" class="waves-effect waves-grey"><i class="material-icons">exit_to_app</i>Log Out</a>
                            </li>
                        </ul>
                    </div>
                <ul class="sidebar-menu collapsible collapsible-accordion" data-collapsible="accordion">
                    <li class="no-padding active"><a class="waves-effect waves-grey active" href="index.php"><i class="material-icons">settings_input_svideo</i>Peta Area Pasar</a></li>
                    <li class="no-padding">
                        <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">apps</i>Area Pasar<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="mailbox.html">Area 1</a></li>
                                <li><a href="search.html">Area 2</a></li>
                                <li><a href="todo.html">Area 3</a></li>
								<li><a href="mailbox.html">Area 4</a></li>
								<li><a href="mailbox.html">Area 5</a></li>
                            </ul>
                        </div>
                    </li>
					<li class="no-padding">
                        <a href='mailbox.php' class="waves-effect waves-grey"><i class="material-icons">message</i>Mailbox</a>
                    </li>
					<li class="no-padding">
                        <a href="setting.php" class="waves-effect waves-grey"><i class="material-icons">settings</i>Pengaturan Auto Flush</a>
                    </li>
                    
                </ul>
                <div class="footer">
                    <p class="copyright">Kelompok 2 ©</p>
                    <a href="#!">Privacy</a> &amp; <a href="#!">Terms</a>
                </div>
                </div>
            </aside>
            <main class="mn-inner inner-active-sidebar">
                <div class="middle-content">
                    <div class="row no-m-t no-m-b">
                        <div class="col s12 m12 l8">
                            <div class="card white visitors-card">
                                <div class="card-content">
								<form action="" method="post">
                                  <h4>Pengaturan</h4>
								  
								  <div class="time_period">
								  <p>Pengaturan Periode Waktu</p>
									  <select onchange="setTimePeriod(this.value)" name="periode">
									   <?php
                                          if($data['periode'] >= 60){
                                              $periode = $data['periode'] / 60 ." jam";
                                          }
                                          else{
                                              $periode = $data['periode'] ." menit";
                                          }
                                          echo "<option value='$data[periode]' />$periode</option>";
                                          ?>
										<option value="15" />15 Menit</option>
										<option value="30" />30 Menit</option>
										<option value="45" />45 Menit</option>
										<option value="60" />1 Jam</option>
										<option value="120" />2 Jam</option>
										<option value="180" />3 Jam</option>
									  </select>
								  <p>Area</p>
									  <select onchange="setAreaPertime(this.value)" name="area_p">
									   <?php
                                          if($data['area_p'] != 'semua'){
                                              $area_p = ucwords("area ".$data['area_p']);
                                          }
                                          else{
                                              $area_p = ucwords($data['area_p']." area");
                                          }
                                          echo "<option value='$data[area_p]' />$area_p</option>";
                                          ?>
										<option value="semua" />Semua Area</option>
										<option value="1" />Area 1</option>
										<option value="2" />Area 2</option>
										<option value="3" />Area 3</option>
										<option value="4" />Area 4</option>
										<option value="5" />Area 5</option>
									  </select>
									</div>
									
									<h4>Notifikasi</h4>
									<div class="water_level">
									<p>Tingkat Air</p>
									  <select onchange="setWaterLevel(this.value)" name="tingkat_air">
									   <?php echo "<option value='$data[tingkat_air]' />$data[tingkat_air] %</option>"?>
										<option value="20" />20 %</option>
										<option value="40" />40 %</option>
										<option value="50" />50 %</option>
										<option value="60" />60 %</option>
										<option value="80" />80 %</option>
										<option value="100" />100 %</option>
									  </select>
									  
									<p>Area</p>
									  <select onchange="setTimePerlevel(this.value)" name="area_t">
									   <?php
                                          if($data['area_t'] != 'semua'){
                                              $area_t = ucwords("area ".$data['area_t']);
                                          }
                                          else{
                                              $area_t = ucwords($data['area_t']." area");
                                          }
                                          echo "<option value='$data[area_t]' />$area_t</option>";
                                          ?>
										<option value="semua" />Semua Area</option>
										<option value="1" />Area 1</option>
										<option value="2" />Area 2</option>
										<option value="3" />Area 3</option>
										<option value="4" />Area 4</option>
										<option value="5" />Area 5</option>
									  </select>
									</div>
									
									<div class="submit"><input type="submit" name="submit" value="Submit" onClick="" /></div>
								</form>
                                </div>
                            </div>
                        </div>
					</div>
					<?php
                    if(isset($_POST['submit'])){
                        $tingkat_air = $_POST['tingkat_air'];
                        $area_p = $_POST['area_p'];
                        $periode = $_POST['periode'];
                        $area_t = $_POST['area_t'];
                        
                        $query = "update pengaturan set periode='$periode', tingkat_air='$tingkat_air', area_p='$area_p',area_t='$area_t'";
                        $result = $mysqli->query($query);
                        if($result === true){
                            echo "<script>alert('pengaturan berhasil di update');</script>";
                        }
                    }

                    ?>
                    </div>
                <script type="text/javascript">
					function Flush(){
						document.getElementById("progress1").style.width="0%";
						document.getElementById("progress2").style.width="0%";
						document.getElementById("progress3").style.width="0%";
						document.getElementById("progress4").style.width="0%";
						document.getElementById("progress5").style.width="0%";
			
					}
        
				</script>
            </main>
        </div>
        <div class="left-sidebar-hover"></div>
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