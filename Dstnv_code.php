<!--
Here, we write code for registration.
-->
<?php
require_once('connection.php');
// $fname = $lname = $gender = $email = $password = $pwd = '';

// $fname = $_POST['firstname'];
// $lname = $_POST['lastname'];
// $gender = $_POST['gender'];
// $email = $_POST['email'];
// $pwd = $_POST['password'];
// $password = MD5($pwd);
$Idtnv=$_GET['Idtnv']


$sql = "SELECT INTO Chitiet (Idtnv) VALUES ('$Idtnv')";
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