<div class="">
    <div class="">
    <div class="">
        <div  class="pl-96 font-bold text-gray-600 text-[24px] py-3">GIỎ HÀNG</div>
        <div class="">
            <table align="center">
                <tr class="header bg-gray-600 text-white font-bold mt-3">
                    <th class="px-10">Hình</th>
                    <th class="px-10">Sản phẩm</th>
                    <th class="px-10">Đơn giá</th>
                    <th class="px-10">Số lượng</th>
                    <th class="px-10">Thành tiền</th>
                    <th class="px-10">Thao tác</th>
                </tr>
                <?php 
                    $tong=0;
                    $i=0;
                    foreach ($_SESSION['mycart'] as $cart) {
                        $hinh=$img_pass.$cart[2];
                        $thanhtien=$cart[3] * $cart[4];
                        $tong+=$thanhtien;
                        $delsp='<a href="index.php?act=delcart&idcart='.$i.'"><input class="border-2 px-1 py-1 hover:bg-red-600 hover:text-white" type="button" value="Xóa" ></a>';
                       echo '<tr>
                                    <td class="px-10"><img src="'.$hinh.'" alt="" width="100px" height="100px"></td>
                                    <td class="px-10">'.$cart[1].'</td>
                                    <td class="px-10">'.$cart[3].'</td>
                                    <td class="px-10">'.$cart[4].'</td>
                                    <td class="px-10">'.$thanhtien.'</td>
                                    <td class="px-10">'.$delsp.'</td>
                            </tr>';
                        $i+=1;
                    }
                    echo '<tr>
                            <td colspan="4" class="px-10 text-[20px] font-bold pt-3">Tổng đơn hàng</td>
                           
                            <td  class="px-10">'.$tong.'</td>
                            <td></td>
                        </tr>';
                ?>
                <!-- <tr>
                    <td>1</td>
                    <td><img src="images/balo.jpg" alt="" height="80px"></td>
                    <td>Balo</td>
                    <td>50</td>
                    <td>2</td>
                    <td>50$</td>
                    <td><input type="button" value="Xóa" ></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><img src="images/balo1.jpg" alt="" height="80px"></td>
                    <td>Balo</td>
                    <td>50</td>
                    <td>2</td>
                    <td>50$</td>
                    <td><input type="button" value="Xóa" ></td>
                </tr> -->
            </table>
        </div>
    </div>
    <div class="mt-3 ">
            <input class="border-2 px-2 py-2 rounded-lg hover:text-white hover:bg-gray-500 pr-10" type="submit" value="ĐỒNG Ý ĐẶT HÀNG"> 
            <a href="index.php?act=decart"><input class="border-2 px-2 py-2 rounded-lg hover:text-white hover:bg-gray-500" type="button" value="XÓA GIỎ HÀNG"></a>
    </div>
    </div>
    <hr>
    <div class="row mt-5 ">
            <?php include "view/boxright.php";?>
            </div>
</div>