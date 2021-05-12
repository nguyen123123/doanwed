<!--
Into this file, we create a layout for registration page.
-->
<?php
// include_once('header.php');
include_once('link.php');
include_once('header1.php');
require_once('connection.php');
?>

<div id="frmRegistration">
<form class="form-horizontal" action="Dkuh_code.php" method="POST">
	<h1>Đăng kí ủng hộ</h1>
	<div class="form-group">
    <label class="control-label col-sm-2" for="ten">Họ và tên:</label>
    <div class="col-sm-6">
      <input type="text" name="ten" class="form-control" id="firstname" placeholder="Nhập họ và tên">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="daichi">Địa chỉ:</label>
    <div class="col-sm-6">
      <input type="text" name="diachi" class="form-control" id="lastname" placeholder="Nhập địa chỉ">
    </div>
  </div>
  <!-- <div class="form-group">
    <label class="control-label col-sm-2" for="lastname">Giới tính:</label>
    <div class="col-sm-6">
      <label class="radio-inline"><input type="radio" name="gioitinh" value="Nam">Nam</label>
	  <label class="radio-inline"><input type="radio" name="gioitinh" value="Nu">Nữ</label>
    </div>
  </div> -->
  <div class="form-group">
    <label class="control-label col-sm-2" for="sdt">Số điện thoại:</label>
    <div class="col-sm-6">
      <input type="text" name="sdt" class="form-control" id="sdt" placeholder="Nhập số điện thoại">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="vatpham">Vật phẩm:</label>
    <div class="col-sm-6">
      <input type="text" name="vatpham" class="form-control" id="sdt" placeholder="Nhập vật phẩm">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="ghichu">Ghi chú:</label>
    <div class="col-sm-6">
       <input type="text" name="ghichu" class="form-control" id="sdt" placeholder="Nhập nội dung">
      <!-- <label class="radio-inline"><input type="radio" name="phuongtien" value="Co">Có</label>
    <label class="radio-inline"><input type="radio" name="phuongtien" value="Khong">Không</label> -->
    </div>
    <!-- <div class="col-sm-6"> 
      <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password">
    </div> -->
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="dangki" class="btn btn-primary">Đăng kí</button>
    </div>
  </div>
</form>
</div>