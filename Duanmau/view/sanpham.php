<div>
            <div class="">

            <header class="border-2 my-5" >
                <strong class="pl-5 text-[20px] text-gray-600">
                    <?=$tendm?>
                </strong>
            <div class="row p-5">
            <?php
              
              foreach ($dssp as $sp) {
                 extract($sp);
                 $linksp="index.php?act=sanphamct&idsp=".$id;
                 $hinh=$img_pass.$img;
                 echo '
              
                 <div class="col-2 mr-28 border-2 border-black-600 hover:border-red-600 hover:border-4 mt-3">
                 <a href="'.$linksp.'"><img class="img p-5" src="'.$hinh.'" alt=""></a>
                     <div class="pb-3 pl-3 font-bold text-[24px]">'.$price.'</div>
                     <div class="pb-3 pl-3 text-success text-[18px] hover:font-bold hover:underline"><a href="'.$linksp.'">'.$name.'</a></div>
                 </div>   
                 ';
                
              }
         ?>
         </div>
            </header>
            </div>
            <div class="row ">
            <?php
                include "boxright.php";
            ?>
            </div>
                </div>