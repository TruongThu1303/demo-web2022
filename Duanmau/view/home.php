<div>
            <div class="bander_title_1 mt-3">

                <img class="bander_show_img" src="./view/img/banner1.jpg" alt="">
                <p class="title_item_1"> Chef Anton's Cajun Seasoning</p>

                <script src="./js/banershow.js"></script>
            </div>
            <div class="text-black-500 font-bold my-3 text-[34px]">
                TRANG HÀNG HOÁ
            </div>


            
            <div class="row p-5">
            <?php
              
                 foreach ($spnew as $sp) {
                    extract($sp);
                    $linksp="index.php?act=sanphamct&idsp=".$id;
                    $hinh=$img_pass.$img;
                    echo '
                 
                    <div class="col-2 mr-28 border-2 border-black-600 hover:border-red-600 hover:border-4 mt-3">
                    <a href="'.$linksp.'"><img class=" p-5" src="'.$hinh.'" alt=""></a>
                        <div class="pb-3 pl-3 font-bold text-[24px]">'.$price.'</div>
                        <div class="pb-3 pl-3 text-success text-[18px] hover:font-bold hover:underline"><a href="'.$linksp.'">'.$name.'</a></div>
                        <div class="row btnaddtocart">
                        <form action="index.php?act=addtocart" method="post"> 
                            <input type="hidden" name="id" value="'.$id.'">
                            <input type="hidden" name="name" value="'.$name.'">
                            <input type="hidden" name="img" value="'.$img.'">
                            <input type="hidden" name="price" value="'.$price.'">
                            <input class="border-2 px-1 py-1 rounded-lg hover:bg-gray-500 hover:text-white" type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                        </form>
                        </div>
                       
                    </div>   
                    ';
                   
                 }
            ?>
              </div>  

                <!-- <div class="row p-5">
                    <div class="col-2 border-2 border-black-600 mr-28 hover:border-red-600 hover:border-4">
                        <img class="img p-5" src="./view/img/may-anh-canon-eos-m200-kit-efm1545mm-f3563-is-stm-trang.webp"
                            alt="">
                        <div class="pb-3 pl-3 font-bold text-[24px]">$21.35</div>
                        <div class="pb-3 pl-3 text-success text-[18px] hover:font-bold hover:underline"><a href="Chitiethanghoa.html">Chef Antons
                            Cajun Seasoning</a></div>
                    </div>
                    <div class="col-2  border-2 border-black-600 mr-28  hover:border-red-600 hover:border-4">
                        <img class="img p-5" src="./view/img/may-anh-fujifilm-x100v-bac.webp" alt="">
                        <div class="pb-3 pl-3 font-bold text-[24px]">$17.45</div>
                        <div class="pb-3 pl-3 text-success text-[18px] hover:font-bold hover:underline"><a href="chitietHH.html">Pavlova</a></div>
                    </div>
                    <div class="col-2  border-2 border-black-600 mr-28  hover:border-red-600 hover:border-4">
                        <img class="img p-5" src="./view/img/shopping.webp" alt="">
                        <div class="pb-3 pl-3 font-bold text-[24px]">$9.20</div>
                        <div class="pb-3 pl-3 text-success text-[18px] hover:font-bold hover:underline"><a href="CThanghoa.html">Teatime
                            Chocolate Biscuits</a></div>
                    </div>
                    <div class="col-2  border-2 border-black-600 hover:border-red-600 hover:border-4">
                        <img class="img p-5" src="./view/img/shopping (1).webp" alt="">
                        <div class="pb-3 pl-3 font-bold text-[24px]">$9.20</div>
                        <div class="pb-3 pl-3 text-success text-[18px] hover:font-bold hover:underline"><a href="CThanghoa4.html">Teatime
                            Chocolate Biscuits</a></div>
                    </div>
                </div>
                <div class="row m-5 ">
                    <div class="col-2 border-2 border-black-600 mr-28 hover:border-red-600 hover:border-4">
                        <img class="img p-5" src="./view/img/shopping (2).webp" alt="">
                        <div class="pb-3 pl-3 font-bold text-[24px]">$81.00</div>
                        <div class="pb-3 pl-3 text-success text-[18px] hover:font-bold hover:underline"><a href="ChitietHH5.html">Sir Rodneys
                            Marmalade</a></div>
                    </div>
                    <div class="col-2 border-2 border-black-600 mr-28 hover:border-red-600 hover:border-4">
                        <img class="img p-5" src="./view/img/shopping (3).webp" alt="">
                        <div class="pb-3 pl-3 font-bold text-[24px]">$10.00</div>
                        <div class="pb-3 pl-3 text-success text-[18px] hover:font-bold hover:underline"><a href="ChitietHH6.html">Sir Rodney's
                            Scones</a></div>
                    </div>
                    <div class="col-2 border-2 border-black-600 mr-28 hover:border-red-600 hover:border-4">
                        <img class="img p-5" src="./view/img/shopping.webp" alt="">
                        <div class="pb-3 pl-3 font-bold text-[24px]">$14.00</div>
                        <div class="pb-3 pl-3 text-success text-[18px] hover:font-bold hover:underline"><a href="ChitietHH7.html">NuNuca Nuaa
                            Y-Nougat-Creme</a></div>
                    </div>
                    <div class="col-2 border-2 border-black-600  hover:border-red-600 hover:border-4">
                        <img class="img p-5" src="./view/img/shopping (2).webp" alt="">
                        <div class="pb-3 pl-3 font-bold text-[24px]">$81.00</div>
                        <div class="pb-3 pl-3 text-success text-[18px] hover:font-bold hover:underline"><a href="ChitietHH8.html">Sir Rodneys
                            Marmalade</a></div>
                    </div>
                </div> -->
            

            <div class="row ">
                <?php
                include "boxright.php";
                ?>
            </div>
                </div>