<div class="row">
            <div class="row frmtitle">
                <h1>DANH SÁCH ĐƠN HÀNG</h1>
            </div>
            <div class="row frmcontent">
                <div class="row mb10 frmdsloai">
                    <table>
                        <tr>
                            <th></th>
                            <th>MÃ ĐƠN HÀNG</th>
                            <th>THÔNG TIN KHÁCH HÀNG</th>
                            <th>SỐ LƯỢNG HÀNG</th>
                            <th>GIÁ TRỊ ĐƠN HÀNG</th>
                            <th>NGÀY ĐẶT HÀNG</th>
                            <th>TRẠNG THÁI ĐƠN HÀNG</th>
                            <th>THAO TÁC</th>
                        </tr>
                        <?php
                            foreach($listbill as $bill){
                                // extract($bill);
                                // echo '<pre>';
                                // var_dump($bill);
                                echo '</pre>';
                                $info = $bill['bill_name'].'<br>'.
                                        $bill['bill_email'].'<br>'.
                                        $bill['bill_address'].'<br>'.
                                        $bill['bill_tel'];
                                $suabill="index.php?act=updatebill&idbill=".$bill['id'];
                                $xoabill="index.php?act=xoabill&idbill=".$bill['id'];
                                echo '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>DA1 - '.$bill['id'].'</td>
                                <td>
                                    '.$info.'
                                </td>
                                <td>'.$bill['soluong'].'</td>
                                <td>'.format($bill['total']).'</td>
                                <td>'.$bill['ngaydathang'].'</td>
                                <td>'.$bill['bill_status'].'</td>
                                <td style="width: 200px;">
                                    <a href="'.$suabill.'"><input type="button" value="Xác nhận"></a>
                                    <a href="'.$xoabill.'"><input type="button" value="Chi tiết"></a>
                                </td>
                            </tr>';
                            }
                        ?>
                        
                    </table>
                </div>
                <div class="row mb10">
                    <input type="button" value="CHỌN TẤT CẢ">
                    <input type="button" value="BỎ CHỌN TẤT CẢ">
                    <input type="button" value="XÓA CÁC MỤC ĐÃ CHỌN">
                </div>
            </div>
        </div>