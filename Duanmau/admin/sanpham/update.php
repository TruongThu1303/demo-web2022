<?php
    if(is_array($sanpham)){
        extract($sanpham);
    }
    $hinhpass = "../upload/".$img;
    if(is_file($hinhpass)){
        $hinh = "<img src='". $hinhpass."' height='80' width='80'>";
    }else {
        $hinh ="Không có ảnh";
    }
?>
<header class="text-black-500 text-4xl bg-gray-300 tracking-wider py-3 pl-3 rounded-lg my-3">CẬP NHẬT LOẠI HÀNG
        </header>

        <form action="index.php?act=updatesp" enctype="multipart/form-data" method="post">
        <input type="text" name="key">
        <select name="iddm" class=" col-3 border-2 bg-gray-100 py-2 px-20 rounded-lg">
                <option class="mb-3" value="0" selected>Tất cả</option>
            <?php
            foreach ($listdanhmuc as $danhmuc){
                extract($danhmuc);
                if($iddm==$id) $s="selected"; else $s="";
                   echo '<option value="'.$id.'" '.$s.'>'.$name.'</option>';
            }
            ?>
           </select>

        <div class="row mt-4">
            <div class="col-6 font-bold">TÊN HÀNG HOÁ</div>
            <div class="col-6 font-bold">ĐƠN GIÁ</div>
        </div>
        <div class="row space-x-28  mt-3 ">
            <input type="text" name="tensp" class=" col-4 border-2 bg-gray-100 py-2 px-15 rounded-lg" value="<?=$name?>">
            <input type="text" name="gia" class=" col-4 border-2 bg-gray-100 py-2 px-20 rounded-lg" value="<?=$price?>">
        </div>
        <div class="row mt-4">
         
            <div class="font-bold">HÌNH ẢNH</div>
            
        </div>
        <div class=" mt-3 ">
            <button  class=" col-4 border-2 bg-gray-100 py-2 px-15 rounded-lg"> 
                <input name="hinh" type="file"/>
                <?=$hinh?>
             </button>    
        </div>
        <div class="font-bold">MÔ TẢ</div>
             <textarea name="mota"  cols="100" rows="5" class="border-2"><?=$mota?></textarea>

        
        <div class="flex justify-start space-x-5 mt-3" >
            <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0))echo $sanpham['id'] ;?>">
            <input type="submit" class="px-2 py-2 border-2 rounded-lg hover:font-bold hover:text-white hover:bg-blue-600" name="capnhat" value="Cập nhật">
            <input type="reset" class="px-2 py-2 border-2 rounded-lg hover:font-bold hover:text-white hover:bg-blue-600" value="Nhập lại">
           <a href="index.php?act=listsp"> <input type="button" class="px-2 py-2 border-2 rounded-lg hover:font-bold hover:text-white hover:bg-blue-600" value="Danh sách"></a>
        </div>
   
            <?php
            if(isset($thongbao) && ($thongbao!=""))
            echo $thongbao;
            ?>
           </form>
    </div>