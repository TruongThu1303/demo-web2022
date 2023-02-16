        <div>
            <div class="">

            <header class="border-2 my-5" >
                <?php
                extract($onesp);
                $img=$img_pass.$img;
                echo'
                <img class="image" src="'.$img.'" alt="" width="500px" height="500px">
        <nav class="px-3 text-[18px] py-3">
        <li>Mã sản phẩm:'.$id.'</li>
        <li>Tên sản phẩm: '.$name.'</li>
        <li>Đơn giá: '.$price.'	</li>
       
    
        </nav>
        <div class="px-3 text-[18px]">
           '.$mota.'
        </div> 
                ';
                ?>
        <!-- <img class="image" src="./view/img/may-anh-canon-eos-m200-kit-efm1545mm-f3563-is-stm-trang.webp" alt="" width="500px" height="500px">
        <nav class="px-3 text-[18px] py-3">
            
                <li>Mã HH:1001</li>
                <li>Tên HH:	Sir Rodney's Mamadase
                </li>
                <li>Đơn giá:$190.00	</li>
                <li>Giảm giá:0%</li>
            
        </nav>
        <div class="px-3 text-[18px]">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi esse deserunt, itaque, cumque iure perspiciatis facere sit sequi ad quibusdam nisi eveniet quisquam, iusto ea saepe consectetur dignissimos odit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni dignissimos mollitia sed iste numquam laudantium tenetur aspernatur quibusdam, modi repellat ad recusandae eius voluptatibus ipsam expedita ea, doloremque, non quis.
        </div> -->

    </header>
    
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script>
                        $(document).ready(function(){
                           
                            $("#binhluan").load("view/binhluan/binhluanform.php", {idpro: <?=$id?>});
                            
                        });
                </script>
                 <div class="" id="binhluan">
                
                </div>

    <div class="border-2 my-5">
        <div class="bg-gray-300 text-black-500 py-2 px-2 font-bold">HÀNG CÙNG LOẠI</div>
        <div class="pl-5">
            <?php
            foreach ($sp_cung_loai as $sp_cung_loai) {
             extract($sp_cung_loai);
             $linksp="index.php?act=sanphamct&idsp=".$id;
             echo'
             <li><a class="hover:font-bold" href="'.$linksp.'">'.$name.'</a></li>
             ';
            }
            ?>
        </div>
    </div>
            </div>

            <div class="row ">
            <?php
                include "boxright.php";
            ?>
            </div>
                </div>