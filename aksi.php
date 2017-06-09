<?php 
include 'config/db_connect.php';
$dari = $_POST['dari'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];
 
$sql =  "insert into pesan(dari,email,pesan) values('$dari','$email','$pesan')";
$mysqli->query($sql);
if($mysqli){
    echo "<script>alert('Pesan telah dikirim')
    window.location.href='pengunjung.php';
    </script>";
}
?>
