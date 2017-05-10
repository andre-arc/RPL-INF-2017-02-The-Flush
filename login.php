<?php include('config/config.php');?>
<?php include('config/db_connect.php');?>
<?php 
    session_start();
    if(isset($_SESSION['username'])){
        echo '<script>window.location.replace("'.BASE_URL.'");</script>';
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        
        <!-- Title -->
        <title>Login - The Flush</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8">
        <meta name="description" content="Responsive Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />
        
        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="assets/plugins/materialize/css/materialize.min.css"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet">        

        	
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
    <body class="signin-page">
        <div class="mn-content valign-wrapper">
            <main class="mn-inner container">
                <div class="valign">
                      <div class="row">
                          <div class="col s12 m6 l4 offset-l4 offset-m3">
                              <div class="card white darken-1">
                                  <div class="card-content ">
                                      <span class="card-title">Login Admin</span>
                                       <div class="row">
                                           <form class="col s12" method="post">
                                              <div class='input-field col s12'>
                                                <input class='validate' type='text' name='username' id='username' />
                                                <label for='email'>Enter username</label>
                                              </div>
                                               <div class='input-field col s12'>
                                                <input class='validate' type='password' name='password' id='password' />
                                                <label for='password'>Enter your password</label>
                                              </div>
                                               <div class="col s12 right-align m-t-sm">
                                                   <center>
                                                      <div class='row'>
                                                        <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect blue darken-1'>Login</button>
                                                      </div>
                                                    </center>
                                               </div>
                                           </form>
                                      </div>
                                  </div>
                              </div>
                          </div>
                    </div>
                </div>
            </main>
        </div>
        
        <!-- Javascripts -->
        <script src="assets/plugins/jquery/jquery-2.2.0.min.js"></script>
        <script src="assets/plugins/materialize/js/materialize.min.js"></script>
        <script src="assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
        <script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="assets/js/alpha.min.js"></script>
        
    </body>
</html>

<?php
    if(isset($_POST['btn_login'])){
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        
        $query = "select * from user where username='$username' and password='$password'";
        $result = $mysqli->query($query);
        
        if($result->num_rows == 1){
            $data = $result->fetch_object();
           $_SESSION['username'] = $data->username;
           echo '<script>window.location.replace("'.BASE_URL.'");</script>';
        }
    }
?>