<div>
            <div class="">

    <div class="border-2 my-5" >
        <?php
        if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
            extract($_SESSION['user']);
        }
        ?>
        <form action="index.php?act=edit_taikhoan" method="post">
        <header align="center" class="text-white text-4xl bg-gray-500 tracking-wider py-3 pl-3 rounded-lg my-3 font-bold">CẬP NHẬT TÀI KHOẢN
        </header>
       <div align="center">
       <div class="py-3">
        <div class="font-bold text-[20px]">
            Tên đăng nhập
        </div>
        <input  type="text" class="  border-2 py-2 px-56 rounded-lg text-black-600" name="user" value="<?=$user?>">
       </div>
       <div class="py-3">
        <div class="font-bold text-[20px]">
           Mật khẩu
        </div>
        <input type="password" name="pass" class=" border-2 py-2 px-56 rounded-lg text-black-600" value="<?=$pass?>">
       </div>
       <div class="py-3">
        <div class="font-bold text-[20px]">
            Địa chỉ email
        </div>
        <input type="email" name="email" class=" border-2 py-2 px-56 rounded-lg text-black-600" value="<?=$email?>">
       <div class="py-3">
       <div class="font-bold text-[20px]">
            Địa chỉ 
        </div>
      
        <input type="text" name="address" class=" border-2 py-2 px-56 rounded-lg text-black-600" value="<?=$address?>">
        </div>
        <div class="py-3">
        <div class="font-bold text-[20px]">
           Điện thoại
        </div>
        <input type="text" name="tel" class=" border-2 py-2 px-56 rounded-lg text-black-600" value="<?=$tel?>">
        </div>
       </div>
       <div class="flex justify-center mb-3">
        <input type="hidden" name="id" value="<?=$id?>">
       <input class=" py-2 px-2 border-2 border-green-600 bg-green-600 text-white hover:font-bold  rounded-full mr-5" type="submit" value=" Cập nhật" name="capnhat">
       <input class=" py-2 px-2 border-2 border-green-600 bg-green-600 text-white hover:font-bold  rounded-full" type="reset" value="Nhập lại">
       </div>
     
       </div>
       
        </form>
        <h2 class="text-green-600 text-[18px] mb-3" align="center">
        <?php
        if(isset($thongbao)&&($thongbao!="")){
            echo $thongbao;
        }
        ?>
        </h2>
</div>
    
            </div>

            <div class="row ">
            <?php
                include "view/boxright.php";
            ?>
            </div>
                </div>