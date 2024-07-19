<?php
include "../models/pdo.php";
include "../models/category.php";
include "../models/products.php";
include "../models/account.php";
include "header.php";

if (isset($_GET['act'])) {
    $act = ($_GET['act']);
    switch ($act) {
        case 'adddm':
            //Kiểm tra
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                insert_category($tenloai);
                $thongbao = "Thêm thành công";
            }
            include "category/add.php";
            break;
        case 'listdm':
            $listdm = loadAll_category();
            include "category/list.php";
            break;
        case 'delete':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_category($_GET['id']);
            }
            $listdm = loadAll_category();
            include "category/list.php";
            break;

        case 'update':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $dm = loadOnce_category($_GET['id']);
            }
            include "category/update.php";
            break;
        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id_cata'];
                update_category($id, $tenloai);
                $thongbao = "Cập nhật thành công";
            }
            $listdm = loadAll_category();
            include "category/list.php";
            break;

            /* Sản Phẩm */
        case 'addsp':
            //Kiểm tra
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $id_cata = $_POST['id_cata'];
                $name = $_POST['name'];
                $price = $_POST['price'];

                $image = $_FILES['image']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["image"]["name"]);
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }

                $date = $_POST['date'];
                $view = $_POST['view'];
                $description = $_POST['description'];

                insert_products($name, $price, $image, $date, $view, $description, $id_cata);
                $thongbao = "Thêm thành công";
            }
            $listdm = loadAll_category();
            // var_dump($listdm);
            include "products/add.php";
            break;
        case 'listsp':
            $listsp = loadAll_products();
            include "products/list.php";
            break;
        case 'deletesp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_products($_GET['id']);
            }
            $listsp = loadAll_products();
            include "products/list.php";
            break;

        case 'updatesp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sp = loadOnce_products($_GET['id']);
            }
            include "products/update.php";
            break;
        case 'updateSp':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id_cata'];
                update_products($id, $tenloai);
                $thongbao = "Cập nhật thành công";
            }
            $listsp = loadAll_products();
            include "products/list.php";
            break;
        case 'listk':
            $listtk = loadAll_user();
            include "account/list.php";
            break;
        case 'adduser':
            //Kiểm tra
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $ho_ten = $_POST['ho_ten'];
                $Total_bill = $_POST['Total_bill'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $role = $_POST['role'];
                $address = $_POST['address'];

                insert_user($username, $password, $ho_ten, $Total_bill, $email, $phone, $role, $address);
                $thongbao = "Thêm thành công";
            }
            $listtk = loadAll_user();
            include "account/add.php";
            break;
        default:
            include "home.php";
            break;
        case 'updatetk':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $username = $_POST['username'];
                $id = $_POST['id_user'];
                update_products($id, $username);
                $thongbao = "Cập nhật thành công";
            }
            $listsp = loadAll_user();
            include "account/list.php";
            break;
        case 'deletetk':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_user($_GET['id']);
            }
            $listsp = loadAll_user();
            include "account/list.php";
            break;
    }
} else {
    include "home.php";
}

include "footer.php";
