<?php
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/color_size.php";
include "../model/binhluan.php";
include "../model/taikhoan.php";
include "../model/thongke.php";
include "../model/giohang.php";
include "header.php";

//controller
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        //danh mục
        case 'adddm':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tendm = $_POST['tendm'];
                insert_danhmuc($tendm);
                $thongbao = "Thêm thành công";
            }
            include "danhmuc/add.php";
            break;
        case 'listdm':
            if (isset($_POST['block'], $_GET['id'])) {
                update_status_dm0($_GET['id']);
            } elseif (isset($_POST['active'], $_GET['id'])) {
                update_status_dm1($_GET['id']);
            }
            $listdm = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $dm = loadone_danhmuc($_GET['id']);
            }
            include "danhmuc/update.php";
            break;
        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $namedm = $_POST['tendm'];
                update_danhmuc($id, $namedm);
                $thongbao = "Cập nhật thành công";
            } else {
                $thongbao = "Cập nhật không thành công";
            }
            $listdm = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
            case "xoadm":
                if(isset($_GET['id']) && $_GET['id'] != ""){
                    $id = $_GET['id'];
                    delete_danhmuc($id);
                }   
                $listdm = loadall_danhmuc();
                include "danhmuc/list.php";
                break;



        //tài khoản
        case 'addtk':   
            include "taikhoan/add.php";
            break;
        case 'dskh':
            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
            break;
        case 'xoatk':
            include "taikhoan/list.php";
            break;
        case 'updatetk':
            include "taikhoan/list.php.php";
            break;
        //sản phẩm
        case 'addsp':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $iddm = $_POST['iddm'];
                $namepro = $_POST['namepro'];
                $price = $_POST['price'];
                $discount = $_POST['discount'];
                $mota = $_POST['mota'];
                $img = $_FILES['img']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['img']['name']);
                if (move_uploaded_file($_FILES['img']['tmp_name'], $target_file)) {
                    echo "Tải hình Thành công";
                } else {
                    echo "Thất bại";
                }
                if (empty($discount)) {
                    $discount = 0;
                }
                insert_sanpham($namepro, $price, $discount, $img, $mota, $iddm);
                $thongbao = "Thêm thành công";
            }
            $listdm = loadall_danhmuc();
            include "sanpham/add.php";
            break;
        case 'addmau_size':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $color = $_POST['color'];
                $size = $_POST['size'];
                if (!empty($color) && empty($size)) {
                    insert_color($color);
                    $thongbao = "Thêm thành công";
                } else if (!empty($size) && empty($color)) {
                    insert_size($size);
                    $thongbao = "Thêm thành công";
                } else if ((!empty($color)) && (!empty($size))) {
                    insert_color($color);
                    insert_size($size);
                    $thongbao = "Thêm thành công";
                } else {
                    $thongbao = "Dữ liệu không được để trống";
                }
            }
            include "color_size/addcolor_size.php";
            break;
        case 'listms':
            $list_m = loadall_mau();
            $list_s = loadall_size();
            include "color_size/listcolor_size.php";
            break;
        case 'suamau':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $mau = loadone_mau($_GET['id']);
            }
            include "color_size/update_m.php";
            break;
        case 'updatemau':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $tenmau = $_POST['mau'];
                update_mau($id, $tenmau);
                $thongbao = "Cập nhật thành công";
            }
            $list_m = loadall_mau();
            $list_s = loadall_size();
            include "color_size/listcolor_size.php";
            break;
        case 'suasize':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $size = loadone_size($_GET['id']);
            }
            include "color_size/update_s.php";
            break;
        case 'updatesize':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $sosize = $_POST['size'];
                update_size($id, $sosize);
                $thongbao = "Cập nhật thành công";
            }
            $list_m = loadall_mau();
            $list_s = loadall_size();
            include "color_size/listcolor_size.php";
            break;
        case 'listsp':
            if (isset($_POST['block'], $_GET['id'])) {
                update_status_sp0($_GET['id']);
            } elseif (isset($_POST['active'], $_GET['id'])) {
                update_status_sp1($_GET['id']);
            }
            $listsp = loadall_sanpham();
            $listdm = loadall_danhmuc();
            include "sanpham/list.php";
            break;

        // Sản phẩm biến thể
        case 'suasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $pro = loadone_sanpham($_GET['id']);
            }
            $list_m = loadall_mau();
            $list_s = loadall_size();
            $listdm = loadall_danhmuc();
            include "sanpham/update.php";
            break;
        case 'updatesp':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $iddm = $_POST['iddm'];
                $namepro = $_POST['namepro'];
                $price = $_POST['price'];
                $discount = $_POST['discount'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['img']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['img']['name']);
                if (move_uploaded_file($_FILES['img']['tmp_name'], $target_file)) {
                } else {
                }
                update_sanpham($id, $iddm, $namepro, $price, $discount, $hinh, $mota);
                $thongbao = "Cập nhật thành công";
            }
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $idpro = $_POST['id'];
                $idmau = $_POST['idmau'];
                $idsize = $_POST['idsize'];
                $soluong = $_POST['soluong'];
                insertOrUpdate_spbt($idpro, $idmau, $idsize, $soluong);
            }
            $list_m = loadall_mau();
            $list_s = loadall_size();
            $listdm = loadall_danhmuc();
            $listsp = loadall_sanpham();
            include "sanpham/list.php";
            break;
            case "xoasp":
                if(isset($_GET['id']) && $_GET['id'] > 0){
                    $id = $_GET['id'];
                    delete_sanpham($id);
                }

                if($_SERVER['REQUEST_METHOD'] == "POST"){
                    if (isset($_POST["selectedIds"])) {
                        $selectedIds = $_POST["selectedIds"];
                        delete_sanpham($selectedIds);
                };
                }

                $listsp = loadall_sanpham();
                include "sanpham/list.php";
                break;


        //binhluan
        case "dsbl": 
            $listbl = loadall_binhluan(0);
            include "binhluan/list.php";
            break;
        case 'xoabl&id':
            include "binhluan/list.php";
            break;
        case 'thongke':
            $listthongke = loadall_thongke();
            include "thongke/list.php";
            break;
        case 'bieudo':
            $listthongke = loadall_thongke();
            include "thongke/bieudo.php";
            break;

        // đơn hàng
        case 'donhang':
            $listbill = loadall_bill_admin();
            include "donhang/list.php";
            break;



        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}
include "footer.php";
