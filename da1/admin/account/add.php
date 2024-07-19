<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Trang Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="index.php" class="d-block">BDT Fashion</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Quản Lý
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="index.php?act=addtk" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thống kê</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?act=adddm" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh Mục</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?act=addsp" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sản Phẩm</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?act=adddh" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Đơn Hàng</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?act=listk" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Khách Hàng</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?act=addpq" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Phân Quyền</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<form action="index.php?act=adduser" method="post" enctype="multipart/form-data" style="margin-left:260px;">
    <h1>Thêm Người dùng</h1>
    <?php
    if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
    ?>
    <div class="card-body">
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
    </div>

    <div class="card-body">
        <input type="submit" class="btn btn-primary" name="themmoi" value="Thêm Mới">
        <a href="index.php?act=listk"><input type="button" class="btn btn-success" name="danhsach" value="Danh Sách"></a>
    </div>
</form>