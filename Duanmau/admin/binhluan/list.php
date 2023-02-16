<div class="container">
<header class="text-black-500 text-4xl bg-gray-300 tracking-wider py-3 pl-3 rounded-lg my-3">DANH SÁCH BÌNH LUẬN
        </header>

        <table align="center">
            <tr class="header bg-gray-600 text-white font-bold mt-3">
                <td></td>
                <td class="px-10">ID</td>
                <td class="px-10">NỘI DUNG</td>
                <td class="px-10"> ID USER</td>
                <td class="px-10">ID PRO</td>
                <td class="px-10">NGÀY BÌNH LUẬN</td>
                <td class="px-10"></td>
                <td class="px-10"></td>
            </tr>

            <?php
        foreach ($listbinhluan as $binhluan){
            extract($binhluan);
            $suabl = "index.php?act=suabl&id=".$id;
            $xoabl = "index.php?act=xoabl&id=".$id;
            echo' <tr>
            <td><input type="checkbox" name="" id=""></td>
            <td class="px-10">'.$id.'</td>
            <td class="px-10">'.$noidung.'</td>
            <td class="px-10">'.$iduser.'</td>
            <td class="px-10">'.$idpro.'</td>
            <td class="px-10">'.$ngaybinhluan.'</td>
            
            <td class="pl-10 pr-3"><a href="'.$suabl.'"><button type="reset" class="border-2 border-green-600 hover:bg-green-600 hover:text-white hover:font-bold py-1 px-1">Sửa</button></a> </td>
            <td> <a href="'.$xoabl.'">  <button type="" class="border-2 border-red-600 hover:bg-red-600 hover:text-white hover:font-bold py-1 px-1">Xoá</button></a></td>
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
        </div>
        
    </div>