<!DOCTYPE html>
<html lang="en">
    <head>
        
		<?php
		include("config/config.php");
		include("config/db_connect.php");

		session_start();
		if(!isset($_SESSION['username'])){
		echo '<script>window.location.replace("'.BASE_URL.'login.php");</script>';
		}
		?>
	   <!-- Title -->
        <title>Mailbox</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8">
        <meta name="description" content="Responsive Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />
        
        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="assets/plugins/materialize/css/materialize.min.css"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet">  
        <link href="assets/plugins/simditor/styles/simditor.css" rel="stylesheet"/>  

        	
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
    <body class="mailbox">
        <div class="loader-bg"></div>
        <div class="loader">
            <div class="preloader-wrapper big active">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-spinner-teal lighten-1">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
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
						
                    </div>
                </nav>

            </header>
            
            <aside id="chat-sidebar" class="side-nav white">
                <div class="side-nav-wrapper">
                    <div class="col s12">
                        <ul class="tabs tab-demo" style="width: 100%;">
                            <li class="tab col s3"><a href="#sidebar-chat-tab" class="active">chat</a></li>
                            <li class="tab col s3"><a href="#sidebar-more-tab">settings</a></li>
                        </ul>
                    </div>
                    <div id="sidebar-chat-tab" class="col s12 sidebar-messages right-sidebar-panel">
                        <p class="right-sidebar-heading">CHAT LIST</p>
                        <div class="chat-list">
                            <a href="javascript:void(0)" class="chat-message">
                                <div class="chat-item">
                                    <div class="chat-item-image">
                                        <img src="assets/images/profile-image.png" class="circle" alt="">
                                    </div>
                                    <div class="chat-item-info">
                                        <p class="chat-name">John Doe</p>
                                        <span class="chat-message">Hello</span>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0)" class="chat-message">
                                <div class="chat-item">
                                    <div class="chat-item-image">
                                        <img src="assets/images/profile-image-1.png" class="circle" alt="">
                                    </div>
                                    <div class="chat-item-info">
                                        <p class="chat-name">Tom Simpson</p>
                                        <span class="chat-message">How are you?</span>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0)" class="chat-message">
                                <div class="chat-item">
                                    <div class="chat-item-image">
                                        <img src="assets/images/profile-image-3.jpg" class="circle" alt="">
                                    </div>
                                    <div class="chat-item-info">
                                        <p class="chat-name">Alan Grey</p>
                                        <span class="chat-message">Call me later</span></div>
                                </div>
                            </a>
                            <a href="javascript:void(0)" class="chat-message">
                                <div class="chat-item">
                                    <div class="chat-item-image">
                                        <img src="assets/images/profile-image.png" class="circle" alt="">
                                    </div>
                                    <div class="chat-item-info">
                                        <p class="chat-name">Michael Fisher</p>
                                        <span class="chat-message">How's it going?</span>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0)" class="chat-message">
                                <div class="chat-item">
                                    <div class="chat-item-image">
                                        <img src="assets/images/profile-image-1.png" class="circle" alt="">
                                    </div>
                                    <div class="chat-item-info">
                                        <p class="chat-name">Amily Lee</p>
                                        <span class="chat-message">We're good</span>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0)" class="chat-message">
                                <div class="chat-item">
                                    <div class="chat-item-image">
                                        <img src="assets/images/profile-image.png" class="circle" alt="">
                                    </div>
                                    <div class="chat-item-info">
                                        <p class="chat-name">Sandra Smith</p>
                                        <span class="chat-message">See you later!</span>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0)" class="chat-message">
                                <div class="chat-item">
                                    <div class="chat-item-image">
                                        <img src="assets/images/profile-image-3.jpg" class="circle" alt="">
                                    </div>
                                    <div class="chat-item-info">
                                        <p class="chat-name">Sandra Smith</p>
                                        <span class="chat-message">Can we meet?</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="chat-sidebar-options">
                            <a href="#" class="left"><i class="material-icons">edit</i></a>
                            <a href="#" class="right"><i class="material-icons">settings</i></a>
                        </div>
                    </div>
                    <div id="sidebar-more-tab" class="col s12 sidebar-more right-sidebar-panel">
                        <p class="right-sidebar-heading">SYSTEM</p>
                        <div class="settings-list">
                            <div class="setting-item">
                                <div class="setting-text">Notifications</div>
                                <div class="setting-set">
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox" checked>
                                            <span class="lever"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="setting-item">
                                <div class="setting-text">Quick Results</div>
                                <div class="setting-set">
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox" checked>
                                            <span class="lever"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="setting-item">
                                <div class="setting-text">Auto Updates</div>
                                <div class="setting-set">
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox">
                                            <span class="lever"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="right-sidebar-heading">ACCOUNT</p>
                        <div class="settings-list">
                            <div class="setting-item">
                                <div class="setting-text">Offline Mode</div>
                                <div class="setting-set">
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox">
                                            <span class="lever"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="setting-item">
                                <div class="setting-text">Location</div>
                                <div class="setting-set">
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox">
                                            <span class="lever"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="setting-item">
                                <div class="setting-text">Show Offline Users</div>
                                <div class="setting-set">
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox">
                                            <span class="lever"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="setting-item">
                                <div class="setting-text">Save History</div>
                                <div class="setting-set">
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox">
                                            <span class="lever"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
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
                            
                            <li class="divider"></li>
                            <li class="no-padding">
                                <a class="waves-effect waves-grey"><i class="material-icons">exit_to_app</i>Log Out</a>
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
                        <a class="waves-effect waves-grey"><i class="material-icons">settings</i>Pengaturan Auto Flush</a>
                    </li>
					
                    
                </ul>
                <div class="footer">
                    <p class="copyright">Kelompok 2 ©</p>
                    <a href="#!">Privacy</a> &amp; <a href="#!">Terms</a>
                </div>
                </div>
            </aside>
            <div class="mailbox-bg"></div>
            <main class="mn-inner">
                <div class="row no-m-t no-m-b">
                    <div class="col s12 m12 l12 no-p-h">
                        <div class="card mailbox-content">
                            <div class="card-content">
                                <div class="row no-m-t no-m-b">
                                   
                                    <div class="col s12 m7 l9">
                                        <table>
                                        <div class="mailbox-view">
										<?php
											echo '<h4>Kotak Masuk<h4>
												 <tr>
													<th>Dari</th>
													<th>Email Pengirim</th>
													<th>Pesan</th>
												  </tr>';
												$tampil = "SELECT * FROM pesan";
											
												$sql = $mysqli->query($tampil);
												
												while($data = mysqli_fetch_array($sql))
												{
													$i=$data['id'];
													echo "
													<tr>
													<td>".$data['dari']."</td>
													<td>".$data['email']."</td>
													<td>".$data['pesan']."</td>
													</tr>";
												}
 
										?>
										</table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </main>
            
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
		
        
    </body>
</html>