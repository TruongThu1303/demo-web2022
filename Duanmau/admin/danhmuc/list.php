<div class="container">
<header class="text-black-500 text-4xl bg-gray-300 tracking-wider py-3 pl-3 rounded-lg my-3">DANH SÁCH LOẠI HÀNG
        </header>

        <div class=" flex justify-start space-x-24 pl-10 bg-green-100 py-3  rounded-lg">
                <div> </div>
                <div class="text-success font-bold">MÃ LOẠI</div>
                <div class="text-success font-bold">TÊN LOẠI</div>

        </div>
    <?php
        foreach ($listdanhmuc as $danhmuc){
            extract($danhmuc);
            $suadm = "index.php?act=suadm&id=".$id;
            $xoadm = "index.php?act=xoadm&id=".$id;
            echo' <div class="mt-3">
            <div class="price flex justify-start space-x-28 ">
                <div class="pl-2">
                    <input type="checkbox" name="type">
                </div>
                <div>'.$id.'</div>
                <a href=""><div class="text-blue-600 hover:underline">'.$name.'</div></a>
            </div>
                <div class="flex justify-end space-x-4 mr-28">
                   <a href="'.$suadm.'">
                   <button type="reset" class="border-2 border-green-600 hover:bg-green-600 hover:text-white hover:font-bold py-1 px-1">Sửa</button> 
                   </a>

                   <a href="'.$xoadm.'">
                   <button type="" class="border-2 border-red-600 hover:bg-red-600 hover:text-white hover:font-bold py-1 px-1">Xoá</button>
                   </a>
                </div>
                </div>';
        }
    ?>
       
       
        <hr>
        <br>
        <br>

        <div class="flex justify-start space-x-5">
            <input class="px-2 py-2 border-2 rounded-lg hover:font-bold hover:text-white hover:bg-blue-600" type="button" value="Chọn tất cả">
            <input class="px-2 py-2 border-2 rounded-lg hover:font-bold hover:text-white hover:bg-blue-600" type="button" value="Bỏ chọn tất cả">
            <input class="px-2 py-2 border-2 rounded-lg hover:font-bold hover:text-white hover:bg-blue-600" type="button" value="Xoá các mục chọn">
            <a href="index.php?act=adddm">            
                <input class="px-2 py-2 border-2 rounded-lg hover:font-bold hover:text-white hover:bg-blue-600" type="button" value="Nhập thêm" >
            </a>
        </div>
        
    </div>