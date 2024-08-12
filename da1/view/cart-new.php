<?php 
session_start();
include "../global.php";
include "../model/giohang.php";
include "../model/taikhoan.php";
include "../model/pdo.php";

// Kiểm tra nếu người dùng đã đăng nhập
if(isset($_SESSION['taikhoan']) && isset($_SESSION['taikhoan']['id'])) {
    $id_taikhoan = $_SESSION['taikhoan']['id'];
} else {
    echo "Bạn cần đăng nhập để thêm sản phẩm vào giỏ hàng.";
    exit;
}

$listgiohang = loadall_giohang($id_taikhoan);

foreach($listgiohang as $giohang):
    extract($giohang);
?>

<tr>
    <td class="text-center"><input type="checkbox" name="id_giohang[]" class="checkbox" value="<?=$id?>" checked></td>
    <td class="text-center" scope="row">
        <img src="upload/<?=$hinh?>" alt="img" />
    </td>
    <td class="text-center">
        <span class="whish-title"><?=$ten?></span>
    </td>
    <td class="text-center">
        <span class="whish-title"><?=number_format($gia,0,",",".")."<u>đ</u>"?></span>
    </td>
    <td class="text-center">
        <div class="style">
            <div class="count d-flex justify-content-center">
                <input id="soluong_<?=$id?>" type="number" min="1" step="1" value="<?=$soluong?>" oninput="updateSoLuong(<?=$id?>)" />
                <div class="button-group">
                </div>
            </div>
        </div>
    </td>
    <td class="text-center">
        <span class="whish-list-price"> <?=number_format($gia*$soluong,0,",",".")."<u>đ</u>"?></span>
    </td>
    <td class="text-center">
        <a href="index.php?act=xoagiohang&id_giohang=<?=$id?>" onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này chứ ?')">
            <span class="trash"><i class="fas fa-trash-alt"></i> </span>
        </a>
    </td>
    <td class="text-center">
        <a href="index.php?act=thanhtoan&id_giohang=<?=$id?>" class="btn btn-dark btn--lg">Đặt Hàng</a>
    </td>
</tr>

<?php endforeach; ?>
