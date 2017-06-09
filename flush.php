<?php
include ('config/db_connect.php');

session_cache_limiter('nocache');
header('Expires: ' . gmdate('r', 0));

header('Content-type: application/json');

if($tipe = $_POST['area']){
    if($tipe == 'all'){
        $query = "UPDATE pengaturan SET area1=0, area2=0, area3=0, area4=0, area5=0 WHERE id='1'";
    }
    else{
        $query = "UPDATE pengaturan SET area$tipe=0 WHERE id='1'";
    }
    
    if($mysqli->query($query)){
        echo json_encode(array('status' => true));
    }
    else{
         echo json_encode(array('status' => false, 'error' => mysqli_error()));
    }
}
?>