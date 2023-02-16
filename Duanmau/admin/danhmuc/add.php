<header class="text-black-500 text-4xl bg-gray-300 tracking-wider py-3 pl-3 rounded-lg my-3">THÊM MỚI LOẠI HÀNG
        </header>

            <form action="index.php?act=adddm" method="post">
            <div>
                <div class="text-body font-bold text-xl">
                    Mã loại
                </div>
                <input type="text" class="number bg-gray-100 py-3 rounded-lg mt-3" name="maloai" disabled value="Auto number">
                <div class="text-body font-bold text-xl my-3">
                    Tên loại
                </div>
                <input type="text" class="ten rounded-lg border-2 border-gray-300" name="tenloai">
                
                <div class="flex justify-start space-x-5" >
                    <input type="submit" class="px-2 py-2 border-2 rounded-lg hover:font-bold hover:text-white hover:bg-blue-600" name="themmoi"  value="Thêm mới">
                    <input type="reset" class="px-2 py-2 border-2 rounded-lg hover:font-bold hover:text-white hover:bg-blue-600" value="Nhập lại">
                    <a href="index.php?act=listdm"><input class="px-2 py-2 border-2 rounded-lg hover:font-bold hover:text-white hover:bg-blue-600" type="button" value="Danh sách"></a>
                </div>
            </div>
            <?php
            if(isset($thongbao) && ($thongbao!=""))
            echo $thongbao;
            ?>
           </form>
    </div>