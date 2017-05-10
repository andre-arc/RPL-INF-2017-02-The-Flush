<?php
include('config/config.php');
session_start();
session_destroy();
echo '<script>window.location.replace("'.BASE_URL.'");</script>';
?>
