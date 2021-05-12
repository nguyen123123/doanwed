<!--
this is second header file which is visible after login.
-->

<?php
include_once('link.php');
session_start();

$email = $_SESSION['email'];

?>

<div>
		<img src="tin.png">
	</div>
<nav class="navbar navbar-default">

	<div class="container-fluid">
		<div class="navbar-header">
			<a href="welcome.php" class="navbar-brand">Trang chủ</a>

		</div>
		<ul class="nav navbar-nav">
			<li><a href="Dktnv.php">Đăng kí làm TNV</a></li>
			<li><a href="Dkuh.php">Đăng kí ủng hộ</a></li>		
			<li><a href="listtnv.php">Danh sách TNV</a></li>
			<li><a href="listuh.php">Danh sách ủng hộ</a></li>
			<li><a href="listnn.php">Danh sách người nhận</a></li>
			<li><a href="Phancong.php">Phân công công việc</a></li>
		</ul>
		<div class="dropdown navbar-right" id="right">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $email;?>
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
  	<li><a href="Account.php">Thông tin cá nhân</a></li>
    <li><a href="logout.php">Đăng xuất</a></li>
  </ul>
</div>
	</div>
</nav>