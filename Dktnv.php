<!--
Into this file, we create a layout for registration page.
-->
<?php
include_once('header1.php');
include_once('link.php');
?>

<div id="frmRegistration">
<form class="form-horizontal" action="Dktnv_code.php" method="POST">
  <h1>Đăng kí tình nguyện viên</h1>
  <div class="form-group">
    <label class="control-label col-sm-2" for="ten">Họ và tên:</label>
    <div class="col-sm-6">
      <input type="text" name="ten" class="form-control" id="firstname" placeholder="Nhập họ và tên">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="diachi">Địa chỉ:</label>
    <div class="col-sm-6">
      <input type="text" name="diachi" class="form-control" id="lastname" placeholder="Nhập địa chỉ">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="sdt">Số điện thoại:</label>
    <div class="col-sm-6">
      <input type="" name="sdt" class="form-control" id="lastname" placeholder="Nhập số điện thoại">
    </div>
  </div>
<!--   <div class="form-group">
    <label class="control-label col-sm-2" for="lastname">Giới tính:</label>
    <div class="col-sm-6">
      <label class="radio-inline"><input type="radio" name="gender" value="Male">Nam</label>
    <label class="radio-inline"><input type="radio" name="gender" value="Female">Nữ</label>
    </div>
  </div> -->
  <div class="form-group">
    <label class="control-label col-sm-2" for="phuongtien">Phương tiện:</label>
    <div class="col-sm-6">
      <input type="" name="phuongtien" class="form-control" id="email" placeholder="Nhập phương tiện">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="thoigian">Thời gian:</label>
    <div class="col-sm-6">
      <input type="" name="thoigian" class="form-control" id="lastname" placeholder="Nhập thời gian tham gia">
    </div>
  </div>
  <!-- <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Mật khẩu:</label>
    <div class="col-sm-6"> 
      <input type="password" name="password" class="form-control" id="pwd" placeholder="Nhập mật khẩu">
    </div>
  </div> -->
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="dangkitnv" class="btn btn-primary">Đăng kí</button>
    </div>
  </div>
</form>
</div>