<header class="text-black-500 text-4xl bg-gray-300 tracking-wider py-3 pl-3 rounded-lg my-3">THÊM MỚI SẢN PHẨM
        </header>

            <form action="index.php?act=addsp" enctype="multipart/form-data" method="post">
        <div class="row mt-4">
            <div class="col-4 font-bold">DANH MỤC </div>
            <div class="col-4 font-bold">TÊN HÀNG HOÁ</div>
            <div class="col-4 font-bold">ĐƠN GIÁ</div>
        </div>
        <div class="row space-x-28  mt-3 ">
           <select name="iddm" class=" col-3 border-2 bg-gray-100 py-2 px-20 rounded-lg">
            <?php
            foreach ($listdanhmuc as $danhmuc){
                extract($danhmuc);
                echo '<option value="'.$id.'">'.$name.'</option>';
            }
            ?>
           
           </select>
            <input type="text" name="tensp" class=" col-3 border-2 bg-gray-100 py-2 px-15 rounded-lg">
            <input type="text" name="gia" class=" col-3 border-2 bg-gray-100 py-2 px-20 rounded-lg">
        </div>
        <div class="row mt-4">
            <div class="col-6 font-bold">SỐ LƯỢT XEM </div>
            <div class="col-6 font-bold">HÌNH ẢNH</div>
           
        </div>
        <div class="row space-x-28  mt-3 ">
        <input class=" col-3 border-2 bg-gray-100 py-2 px-20 rounded-lg " type="text" name="view" >
            <button  class=" col-3 border-2 bg-gray-100 py-2 px-15 rounded-lg"> 
                <input name="hinh" type="file"  id="file" class="inputfile" />
             </button>
            
        </div>
        <div class=" font-bold mt-3">MÔ TẢ</div>
        <textarea name="mota"  cols="185" rows="5" class="border-2"></textarea>
        
        <div class="flex justify-start space-x-5 mt-3" >
            <input type="submit" class="px-2 py-2 border-2 rounded-lg hover:font-bold hover:text-white hover:bg-blue-600" name="themmoi" value="Thêm mới">
            <input type="reset" class="px-2 py-2 border-2 rounded-lg hover:font-bold hover:text-white hover:bg-blue-600" value="Nhập lại">
           <a href="index.php?act=listsp"> <input type="button" class="px-2 py-2 border-2 rounded-lg hover:font-bold hover:text-white hover:bg-blue-600" value="Danh sách"></a>
        </div>
   
            <?php
            if(isset($thongbao) && ($thongbao!=""))
            echo $thongbao;
            ?>
           </form>
    </div>