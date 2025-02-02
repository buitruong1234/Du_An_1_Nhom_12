<?php
session_start();
include "../models/pdo.php";
include "../models/taikhoan.php";

include "header.php";

if (isset($_GET['act']) && ($_GET['act'] != "" )) {
    $act = $_GET['act'];
    switch($act){
        case'danhmuc':
            include "danhmuc.php";
            break;
        case'dangky':
            if(isset($_POST['dangky']) && ($_POST['dangky'])){
                $username = $_POST['username'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                $ho_ten = $_POST['ho_ten'];
                $phone = $_POST['phone'];
                $role = $_POST['role'];
                $address = $_POST['address'];
                // insert_taikhoan($username, $password, $email);
                // $thongbao = "Đăng ký thành công!";
            }

            if($ho_ten==""||$phone=="" ||$email==""||$address=="" || $username ==""||$password==""){
                $thongbao ="Vui lòng nhập đủ dữ liệu !";
            }
            else{
                insert_user($username, $password, $ho_ten, $email, $phone, $role, $address);
                $thongbao ="Đăng ký thành công";
            }

            include "taikhoan/dangky.php";
            break;

            case 'dangnhap':
                if (isset($_POST['btn-dangnhap'])&&($_POST['btn-dangnhap'])=="") {
                    $username=$_POST['username'];
                    $password=$_POST['password'];
                    $checkuser = checkuser($username,$password);
                    if (is_array($checkuser)) {
                        $_SESSION['username']=$checkuser;
                        header("Location:index.php");
                    }else{
                        $thongBao="Tài khoản không tồn tại. Vui lòng đăng kí tài khoản!";
                    }
                }
            include "taikhoan/dangnhap.php";
            break;

            case 'edit_taikhoan':
                if (isset($_POST['capnhat'])&&($_POST['capnhat'])) {
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $email = $_POST['email'];
                    $ho_ten = $_POST['ho_ten'];
                    $phone = $_POST['phone'];
                    $role = $_POST['role'];
                    $address = $_POST['address'];
                    $id_user = $_POST['id_user'];
                    
                    update_taikhoan($id_user, $username, $password, $ho_ten, $email, $phone, $role, $address);
                    $_SESSION['username'] = checkuser($username,$password);
                    header("Location:index.php?act=edit_taikhoan"); 
                }
            include "taikhoan/edit_taikhoan.php";
            break;

            case 'dangxuat':
                session_unset();
                header("Location:/index.php");
            break;

        default:
            include 'home.php';
            break;
    }
}else{
    include 'home.php';
}
// include 'home.php';
include 'footer.php';
include "header.php";

                       
