<div class="container">
<header class="text-black-500 text-4xl bg-gray-300 tracking-wider py-3 pl-3 rounded-lg my-3">DANH SÁCH HÀNG HOÁ
        </header>

        <form action="index.php?act=listsp" method="post">
            <input type="text" name="key">
            <select name="iddm" class=" col-3 border-2 bg-gray-100 py-2 px-20 rounded-lg">
                <option class="mb-3" value="0" selected>Tất cả</option>
            <?php
            foreach ($listdanhmuc as $danhmuc){
                extract($danhmuc);
                echo '<option value="'.$id.'">'.$name.'</option>';
            }
            ?>
           
           </select>
           <input class="border-2 py-1 px-1 mb-3 rounded-lg hover:bg-gray-600 hover:text-white" name="listok" type="submit" value="Chọn">
        </form>

        <table align="center">
            <tr class="header bg-gray-600 text-white font-bold mt-3">
                <td></td>
                <td class="px-10">MÃ HÀNG HOÁ</td>
                <td class="px-10">TÊN HÀNG HOÁ</td>
                <td class="px-10">HÌNH ẢNH</td>
                <td class="px-10"> GIÁ</td>
                <td class="px-10">LƯỢT XEM</td>
                <td class="px-10"></td>
                <td class="px-10"></td>
            </tr>

            <?php
        foreach ($listsanpham as $sanpham){
            extract($sanpham);
            $suasp = "index.php?act=suasp&id=".$id;
            $xoasp = "index.php?act=xoasp&id=".$id;
            $hinhpass = "../upload/".$img;
            if(is_file($hinhpass)){
                $hinh = "<img src='". $hinhpass."' height='80' width='80'>";
            }else {
                $hinh ="Không có ảnh";
            }
            echo' <tr>
            <td><input type="checkbox" name="" id=""></td>
            <td class="px-10">'.$id.'</td>
            <td class="px-10">'.$name.'</td>
            <td class="px-10">'.$hinh.'</td>
            <td class="px-10">'.$price.'</td>
            <td class="px-10">'.$view.'</td>
            <td class="pl-10 pr-3"><a href="'.$suasp.'"><button type="reset" class="border-2 border-green-600 hover:bg-green-600 hover:text-white hover:font-bold py-1 px-1">Sửa</button></a> </td>
            <td> <a href="'.$xoasp.'">  <button type="" class="border-2 border-red-600 hover:bg-red-600 hover:text-white hover:font-bold py-1 px-1">Xoá</button></a></td>
            </tr>';
        }
    ?>
        </table>
   
        <hr>
        <br>
        <br>

        <div class="flex justify-start space-x-5">
            <input class="px-2 py-2 border-2 rounded-lg hover:font-bold hover:text-white hover:bg-blue-600" type="button" value="Chọn tất cả">
            <input class="px-2 py-2 border-2 rounded-lg hover:font-bold hover:text-white hover:bg-blue-600" type="button" value="Bỏ chọn tất cả">
            <input class="px-2 py-2 border-2 rounded-lg hover:font-bold hover:text-white hover:bg-blue-600" type="button" value="Xoá các mục chọn">
            <a href="index.php?act=addsp">            
                <input class="px-2 py-2 border-2 rounded-lg hover:font-bold hover:text-white hover:bg-blue-600" type="button" value="Nhập thêm" >
            </a>
        </div>
        
    </div>