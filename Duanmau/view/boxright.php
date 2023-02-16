<div class="col-3 border-2 mx-5">
                    <div class="bg-gray-600 text-white px-3 py-3 font-bold">
                        TÀI KHOẢN
                    </div>
                    <hr>
                    <?php
                    if(isset($_SESSION['user'])){
                        extract($_SESSION['user']);
                        
                        ?>
                         <label class="pt-2 text-red-500 text-[18px] text-blue-600 font-bold pl-28" for=""> Hello</label>
                        <span class="font-bold text-red-600 text-[18px]"><?=  $user?></span>
                        
                         <br>
                        <li><a class="hover:font-bold " href="index.php?act=quenmk">Quên mật khẩu</a></li>
                        <li><a class="hover:font-bold " href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a></li>
                        <?php
                        if($role==1){
                        ?>
                        <li><a class="hover:font-bold " href="admin/index.php">Đăng nhập admin</a></li>
                        <?php } ?>
                        <li><a class="hover:font-bold " href="index.php?act=thoat">Thoát</a></li>
                                
                         
                <?php   
                 }else{

                    
                    ?>
                 <form action="index.php?act=dangnhap" method="post">
                    <div class="py-3">
                        <label class="pt-2" for=""> Tên tài khoản</label>
                         <br>
                         <input class="the py-1 border-2 " type="text" name="user" >
                         <br>
                         <label  class="pt-2" for="">Mật khẩu</label>
                         <br>
                         <input class="the py-1 border-2 " type="password" name="pass">
                         <br>
                         <input class="py-3 " type="checkbox" name="" value="">Ghi nhớ tài khoản?
                         <br>
                         <br>
                         <input type="submit" class="px-1 py-1 hover:bg-gray-600 hover:text-white hover:font-bold border-2 rounded-lg" name="dangnhap" value="Đăng nhập">
                                
                                    <li><a class="hover:font-bold" href="#">Quên mật khẩu</a></li>
                                    <li><a class="hover:font-bold" href="index.php?act=dangky">Đăng ký thành viên</a></li>
                                   
                               
                             
                         
                     </div>
                     <?php } ?>
                 </form>
                </div>
                <div class="col-3 border-2 mx-5">

                    <div class="bg-gray-600 text-white px-3 py-3 font-bold">
                        DANH MỤC
                    </div>
                    <hr>
                    <div class="py-1">
                        <?php
                        foreach ($dsdm as $dm) {
                           extract ($dm);
                           $linkdm="index.php?act=sanpham&iddm=".$id;
                           echo'
                           <div> <a class="hover:font-bold" href="'.$linkdm.'">'.$name.'</a></div>
                        <hr>
                        <br>
                           ';
                        }
                        ?>
                    </div>

                   <form class="flex justify-between" action="index.php?act=sanpham" method="post">
                   <input class="the bg-gray-400 text-white px-2 py-1  rounded-lg" type="text" name="key"  value="Từ khoá tìm kiếm">
                   <input class="text-black-600 px-2 py-1 rounded-lg border-2 ml-2 hover:text-white hover:bg-gray-600" type="submit" name="timkiem" value="Tìm kiếm">
                   </form>
                        
                   
                </div>
                <div class="col-3 border-2 mx-5">
                    <div class="bg-gray-600 text-white px-3 py-3 font-bold">
                        TOP 10 YÊU THÍCH
                    </div>
                    <hr>
                 <table>
                    <?php
                    foreach ($dstop10 as $sp) {
                       extract($sp);
                       $linksp="index.php?act=sanphamct&idsp=".$id;
                       $img=$img_pass.$img;
                       echo'
                       <tr class="px-5">
                        <td><a class="hover:underline text-[18px]" href="'.$linksp.'"><img class="anh" src="'.$img.'" alt=""></a></td>
                        <td><a class="hover:underline text-[18px]" href="'.$linksp.'">'.$name.'</a></td>
                    </tr>
                       ';
                    }
                    ?>
                    <!-- <tr class="px-5">
                        <td><img class="anh" src="./view/img/may-anh-canon-eos-m200-kit-efm1545mm-f3563-is-stm-trang.webp" alt=""></td>
                        <td><a class="hover:underline text-[18px]" href="Chitiethanghoa.html">Sir Rodney's Mamadase</a></td>
                    </tr>
                    <tr class="mx-5">
                        <td><img class="anh" src="./view/img/may-anh-fujifilm-x100v-bac.webp" alt=""></td>
                        <td><a class="hover:underline text-[18px]" href="chitietHH.html">Cate de Blaye</a></td>
                    </tr>
                    <tr class="px-5">
                        <td><img class="anh" src="./view/img/shopping (1).webp" alt=""></td>
                        <td><a class="hover:underline text-[18px]" href="CThanghoa.html">Mishy kobe Niku</a></td>
                    </tr>
                    <tr class="px-5">
                        <td><img class="anh" src="./view/img/shopping (2).webp" alt=""></td>
                        <td><a class="hover:underline text-[18px]" href="CThanghoa4.html">Carmavone Tigers</a></td>
                    </tr>
                    <tr class="px-5">
                        <td><img class="anh" src="./view/img/banner2.jpg" alt=""></td>
                        <td><a class="hover:underline text-[18px]" href="ChitietHH5.html">Ipoh Coffe</a></td>
                    </tr>
                    <tr class="px-5">
                        <td><img class="anh" src="./view/img/shopping.webp" alt=""></td>
                        <td><a class="hover:underline text-[18px]" href="ChitietHH6.html">Russle Sauekraunt</a></td>
                    </tr>
                    <tr class="px-5">
                        <td><img class="anh" src="./view/img/shopping (3).webp" alt=""></td>
                        <td><a class="hover:underline text-[18px]" href="ChitietHH7.html">Ipoh fashion </a></td>
                    </tr> -->
                 </table>
            </div>