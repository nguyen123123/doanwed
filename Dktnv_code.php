<!--
Here, we write code for registration.
-->
<?php
require_once('connection.php');
$ten = $diachi = $sdt = $phuongtien = $thoigian  = '';

$ten = $_POST['ten'];
$diachi = $_POST['diachi'];
$sdt = $_POST['sdt'];
$phuongtien = $_POST['phuongtien'];
$thoigian = $_POST['thoigian'];
//$password = MD5($pwd);

$sql = "INSERT INTO tnvDB (Tentnv,Diachi,Sdt_tnv,Phuongtien,Thoigian) VALUES ('$ten','$diachi','$sdt','$phuongtien','$thoigian')";
$result = mysqli_query($conn, $sql);
if($result)
{
	header("Location: welcome.php");
}
else
{
	echo "Error :".$sql;
}
?>
<?php

?>
