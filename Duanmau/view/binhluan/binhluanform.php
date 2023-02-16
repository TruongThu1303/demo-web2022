<?php
    session_start();
    include "../../model/pdo.php";
    include "../../model/binhluan.php";
    $idpro=$_REQUEST['idpro'];
    $dsbl=loadall_binhluan($idpro);
?>
    <div class="border-2">
        <div class="bg-gray-300 text-black-500 py-2 px-2 font-bold">BÌNH LUẬN</div>
        <div class="boxcontent binhluan">
                 <ul>
        <table>
                    <?php
                            foreach ($dsbl as $bl) {
                                 extract($bl);
                                 echo '<tr><td class="text-[20px]">'.$noidung.'</td>';
                                 echo '<td class="text-[20px]">'.$iduser.'</td>';
                                 echo '<td class="text-[20px]">'.$ngaybinhluan.'</td></tr>';
                         }
                    ?>
        </table>            
                </ul> 
            </div>
             
    

        <div class="bg-gray-300 text-black-500 py-2 px-2 ">
            <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                <input type="hidden" name="idpro" value="<?=$idpro?>">

                 <input class="submit rounded-lg px-2 py-2 border-2 border-gray-300" type="text" name="noidung" >
                <input class="rounded-lg px-5 py-2 border-2 border-gray-600 hover:bg-gray-600 hover:text-white" type="submit" name="guibinhluan" value="Gửi">
             </form>
         </div>
         </div> 
         <?php
         if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
             $noidung=$_POST['noidung'];
             $idpro=$_POST['idpro'];
             $iduser=$_SESSION['user']['id'];
             $ngaybinhluan=date('h:i:sa d/m/Y');
             insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan);
             header("Location: ".$_SERVER['HTTP_REFERER']);
         }
             
         ?>
    </div>
</body>
</html>