<div>
            <div class="">

    <div class="border-2 my-5" >
        <form action="index.php?act=quenmk" method="post">
        <header align="center" class="text-white text-4xl bg-gray-500 tracking-wider py-3 pl-3 rounded-lg my-3 font-bold">QUÊN MẬT KHẨU
        </header>
       <div align="center">
      
       
       <div class="py-3">
        <div class="font-bold text-[20px]">
            Địa chỉ email
        </div>
        <input type="email" name="email" class=" border-2 py-2 px-56 rounded-lg text-black-600">
       </div>
       <div class="flex justify-center mb-3">
       <input class=" py-2 px-2 border-2 border-green-600 bg-green-600 text-white hover:font-bold  rounded-full mr-5" type="submit" value="Gửi" name="guiemail">
       <input class=" py-2 px-2 border-2 border-green-600 bg-green-600 text-white hover:font-bold  rounded-full" type="reset" value="Nhập lại">
       </div>
     
       </div>
       
        </form>
        <h2 class="text-red-600 text-[18px] mb-3" align="center">
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