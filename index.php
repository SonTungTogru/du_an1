<?php
session_start();
ob_start();

include "model/pdo.php";
include "model/sanpham.php";
include "model/color_size.php";
include "model/danhmuc.php";
include "model/taikhoan.php";
include "model/giohang.php";
include"global.php";

if(!isset($_SESSION['mycart'])) {
    $_SESSION['mycart'] = [];
}
// unset($_SESSION['mycart']);
$loadsp = loadall_sanpham_home();
$dsdm = loadall_danhmuc();
$dstop10 = loadall_sanpham_top10();
include "view/header.php";
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case "gioithieu":
            include "view/gioithieu.php";
            break;
        case "lienhe":
            include "view/lienhe.php";
            break;
        case "gopy":
            include "view/gopy.php";
            break;
        case "hoidap":
            include "view/hoidap.php";
            break;
                // sản phẩm
                case "sanpham":
                    if(isset($_POST['keyword']) &&  $_POST['keyword'] != 0 ){
                        $kyw = $_POST['keyword'];
                    }else{
                        $kyw = "";
                    }
                    if(isset($_GET['iddm']) && ($_GET['iddm']>0)){
                        $iddm=$_GET['iddm'];
                    }else{
                        $iddm=0;
                    }
                    $dssp = loadall_sanpham_home($kyw,$iddm);
                    include "view/sanpham.php";
                    break;
                     // sản phẩm ct
        case "sanphamct":
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sanpham = loadone_sanpham($_GET['id']);
                extract($sanpham);
                $sanphamcl = load_sp_cungloai($_GET['id'], $iddm);
                $spbt = loadone_spbt($_GET['id']);
                $slbt = load_soluongbt($_GET['id']);
            } else {
                include "view/trangchu.php";
            }
            $list_m = loadall_mau();
            $list_s = loadall_size();
            include "view/sanphamct.php";
            break;

        // giỏ hàng    
        case "addgiohang":
            if (isset($_POST['addgiohang']) && ($_POST['addgiohang'])) {
                $id = $_POST['id'];
                $img = $_POST['img'];
                $namepro = $_POST['namepro'];
                $price = $_POST['price'];
                $discount = $_POST['discount'];
                $mau = $_POST['mau'];
                $size = $_POST['size'];
                $soluong = $_POST['soluong'];
                $spbtgh = [$id, $img, $namepro, $price, $discount, $mau, $size, $soluong];
                array_push($_SESSION['mycart'], $spbtgh);
            }
            $uniqueProducts = [];
            foreach ($_SESSION['mycart'] as $cartItem) {
            //   echo '<pre>';
            //         // var_dump($cartItem[0]);
            //         var_dump($cartItem);
            //         // var_dump($variantKey = $cartItem[5] . '-' . $cartItem[6]);
            //   echo '</pre>';
                $productID = $cartItem[0];
                $quantityToAdd = (int)$cartItem[7];
                if (!isset($uniqueProducts[$productID])) {
                    $uniqueProducts[$productID] = $cartItem;
                } else {
                    // Nếu sản phẩm đã tồn tại, cộng thêm số lượng
                    $currentQuantity = (int)$uniqueProducts[$productID][7];
                    $uniqueProducts[$productID][7] = $currentQuantity + $quantityToAdd;
                }
            }

            // Gán lại giỏ hàng với các sản phẩm đã được gộp
            $_SESSION['mycart'] = array_values($uniqueProducts);
            include "view/giohang/giohang.php";
            break;
        case "delcart":
            if (isset($_GET['idcart'])) {
                $idCart = (int)$_GET['idcart'];
                array_splice($_SESSION['mycart'], $idCart, 1);
            } else {
                $_SESSION['mycart'] = [];
            }
            header("Location: index.php?act=addgiohang");
            break;
        case "delall":
            $_SESSION['mycart'] = [];
            include "view/giohang/giohang.php";
            break;

        // thanh toán
        case "thanhtoan":
            if (isset($_POST['thanhtoan']) && ($_POST['thanhtoan'])) {
                $id = $_POST['id'];
                $img = $_POST['img'];
                $namepro = $_POST['namepro'];
                $price = $_POST['price'];
                $discount = $_POST['discount'];
                $mau = $_POST['mau'];
                $size = $_POST['size'];
                $soluong = $_POST['soluong'];
                $spbtgh = [$id, $img, $namepro, $price, $discount, $mau, $size, $soluong];
                array_push($_SESSION['mycart'], $spbtgh);
            }
            include "view/giohang/thanhtoan.php";
            break;
        case "confirm":
            if (isset($_POST['order']) && ($_POST['order'])) {
                if (isset($_SESSION['user'])) {
                    $iduser = $_SESSION['user']['id'];
                } else {
                    $iduser = 0;
                }
                $username = $_POST['username'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $bill_pttt = $_POST['bill_pttt'];
                $ngaydathang = date('h:i:sa d/m/Y');
                $tongtien = tongtien();

                $idbill = insert_bill($iduser, $username, $email, $address, $tel, $bill_pttt, $ngaydathang, $tongtien);
                foreach($_SESSION['mycart'] as $cart) {
                    $tongtien = tongtien();
                    insert_cart($_SESSION['user']['id'], $cart[0], $cart[1], $cart[2], $cart[3], $cart[5], $cart[6], $cart[7], $tongtien, $idbill);
                }
                $_SESSION['mycart'] = [];
            }
            $thongbao = "Đặt hàng thành công";
            include "view/giohang/thanhtoan.php";
            break;

            case "yourorder":
                if (isset($_SESSION['user'])) {
                    $iduser = $_SESSION['user']['id'];
                } else {
                    $iduser = 0;
                }
                $loadallbill = load_order($iduser);
                include "view/giohang/donhangcuatoi.php";
                break;
            case "order":
                if (isset($_SESSION['user'])) {
                    $iduser = $_SESSION['user']['id'];
                } else {
                    $iduser = 0;
                }
            
                $keybill = loadid_bill($iduser);
                $found = false; // Biến flag để kiểm tra xem có phần tử nào khớp hay không
            
                foreach ($keybill as $key) {
                    extract($key);
            
                    if (isset($_GET['idbill']) && $_GET['idbill'] == $key['id']) {
                        $loadall_cart = loadall_cart($_GET['idbill'], $key['id']);
                        $found = true; // Đánh dấu là đã tìm thấy khớp
                        break; // Dừng vòng lặp vì đã tìm thấy khớp
                    }
                }
            
                if (!$found) {
                    // Nếu không tìm thấy khớp, chuyển hướng đến trang khác
                    header("Location: index.php?act=yourorder&message=Notfound");
                    exit(); // Dừng thực thi của mã sau khi chuyển hướng
                }
            
                include "view/giohang/chitietdonhang.php";
                break;
                
            case "test":
                if (isset($_SESSION['user'])) {
                    $iduser = $_SESSION['user']['id'];
                } else {
                    $iduser = 0;
                }
                $loadallbill = load_order($iduser);
                foreach($loadallbill as $bill) {
                    extract($bill);
    
    
                    $loadcart = loadcart($bill['id']);
                }
                // var_dump($loadallbill);
                include "view/giohang/test.php";
                break;
            // tài khoản
        // tài khoản
        case "dangky":
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $username = $_POST['username'];
                $pass = $_POST['pass'];
                $email    = $_POST['email'];
                $address    = $_POST['address'];
                $tel    = $_POST['tel'];
                insert_taikhoan($username, $pass, $email, $address,  $tel);
                $thongbao = "Chúc mừng bạn đã đăng ký thành công";
            }
            include "view/taikhoan/dangky.php";
            break;
        case "dangnhap":
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $pass = $_POST['pass'];
                $username   = $_POST['username'];
                $checkusername = checkusername($username, $pass);
                if (is_array($checkusername)) {
                    $_SESSION['user'] = $checkusername;
                    $_SESSION['role'] = $checkusername['role'];
                    //$thongbao = "da dang nhap thanh cong";
                    header('Location: index.php');
                } else {
                    $thongbao = "Tài khoản hoặc mật khẩu sai vui lòng nhập lại!";
                }
            }

            include "view/taikhoan/dangnhap.php";
            break;
             case "dangxuat":
                session_unset();
               header('Location:index.php');
                break;
        case "laymk":
            if (isset($_POST['gui']) && ($_POST['gui'])) {
                $email = $_POST['email'];
                $checkemail = checkemail($email);
                if (is_array($checkemail)) {
                    $thongbao = "mat khau cua ban la" . $checkemail['pass'];
                } else {
                    $thongbao = "email nay khong ton tai";
                }
            }
            include "view/taikhoan/quenmk.php";
            break;
        case "edit_tk":
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $pass = $_POST['pass'];
                $username = $_POST['username'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $id  = $_POST['id'];

                update_taikhoan($id, $username, $pass, $email, $address, $tel);
                $_SESSION['user'] = checkusername($username, $pass);
                header('Location: index.php?act=edit_tk');
            }
            include "view/taikhoan/edit_tk.php";
            break;
        default:
            include "view/trangchu.php";
            break;
    }
} else {
    include "view/trangchu.php";
}

include "view/footer.php";
