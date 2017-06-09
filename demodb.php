<?php
	include ('config/db_connect.php');
	$area1= $_POST['area1'];
	$area2= $_POST['area2'];
	$area3= $_POST['area3'];
	$area4= $_POST['area4'];
	$area5= $_POST['area5'];
	
	

				$sql="UPDATE pengaturan SET area1='$area1', area2='$area2', area3='$area3', area4='$area4', area5='$area5' WHERE id='1'";
				
				$mysqli->query($sql);
			
					If($mysqli){
						//echo"<meta name="aaa" content='url=RegSuc.php'>";
						echo"<script>alert('Data telah diinsert')</script>";
			
					}else{
						echo"<script>alert('Gagal )</script>";
						
						}
		
	
?>