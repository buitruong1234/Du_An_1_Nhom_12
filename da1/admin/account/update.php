<?php
if (is_array($tk)) {
  extract($tk);
}
?>
<form action="index.php?act=updatetk" method="post" enctype="multipart/form-data" style="margin-left:260px;">
  <h1>Thêm Người dùng</h1>
  <div class="form-group">
    <label for="exampleInputEmail1">UserName</label>
    <input type="text" name="username" class="form-control" placeholder="Nhập tên Người dùng">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Password</label>
    <input type="text" name="password" class="form-control" placeholder="Nhập Mật khẩu">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Full Name</label>
    <input type="text" name="ho_ten" id="" class="form-control" placeholder="Họ và tên">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Total Bill</label>
    <input type="number" name="Total_bill" class="form-control" placeholder="Tổng tiền">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Emai;</label>
    <input type="email" name="email" class="form-control" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Phone Number</label>
    <input type="number" name="phone" class="form-control" placeholder="SDT">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Role</label><br>
    <label>
      <input type="checkbox" name="role" value="value1">Người dùng
    </label><br>
    <label>
      <input type="checkbox" name="role" value="value1">Admin
    </label><br>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Address</label>
    <input type="text" name="address" class="form-control" placeholder="Nhập Địa chỉ">
  </div>
  <?php
  if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
  ?>
</form>