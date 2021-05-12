<!--
Here, we write code for registration.
-->
<?php
require_once('connection.php');
$ten = $diachi = $sdt = $vatpham = $ghichu  = '';

$ten = $_POST['ten'];
$diachi = $_POST['diachi'];
$sdt = $_POST['sdt'];
$vatpham = $_POST['vatpham'];
$ghichu = $_POST['ghichu'];
//$password = MD5($pwd);

$sql = "INSERT INTO uhDB (Ten,Diachi,Sdt,Vatpham,Ghichu) VALUES ('$ten','$diachi','$sdt','$vatpham','$ghichu')";
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