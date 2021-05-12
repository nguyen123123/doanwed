<!--
Into this file, we create a layout for registration page.
-->
<?php
include_once('header.php');
include_once('link.php');
?>

<div id="frmRegistration">
<form class="form-horizontal" action="registration_code.php" method="POST">
	<h1>Đăng kí</h1>
	<div class="form-group">
    <label class="control-label col-sm-2" for="firstname">Họ và tên:</label>
    <div class="col-sm-6">
      <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Nhập tên đăng nhập">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="lastname">Số điện thoại:</label>
    <div class="col-sm-6">
      <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Nhập số điện thoại">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="lastname">Giới tính:</label>
    <div class="col-sm-6">
      <label class="radio-inline"><input type="radio" name="gender" value="Nam">Nam</label>
	  <label class="radio-inline"><input type="radio" name="gender" value="Nữ">Nữ</label>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-6">
      <input type="email" name="email" class="form-control" id="email" placeholder="Nhập email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Mật khẩu:</label>
    <div class="col-sm-6"> 
      <input type="password" name="password" class="form-control" id="pwd" placeholder="Nhập mật khẩu">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="create" class="btn btn-primary">Đăng kí</button>
    </div>
  </div>
</form>
</div>