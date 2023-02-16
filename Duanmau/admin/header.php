<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUẢN TRỊ WEBSITE</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<style>
     .banner {
        background-color: rgb(12, 8, 8);
    }
    .number {
        width: 1520px;
        border-color: rgb(126, 123, 123);
        border: 1px solid;
        font-style: normal;
    }

    .number:hover {
        box-shadow: 1px 1px 1px 1px grey;
    }

    .ten {
        width: 1520px;
        height: 52px;
    }

   
</style>
</head>
<body>
    <div class="container">
        <header class="text-black-500 text-4xl bg-gray-300 tracking-wider py-3 pl-3 rounded-lg my-3">QUẢN TRỊ WEBSITE
        </header>
        <div class="banner flex justify-center list-none space-x-10 py-3 text-xl text-white rounded-lg">

            <li><a href="index.php" class="hover:font-bold hover:text-white">Trang chủ</a></li>
            <li><a href="index.php?act=adddm" class="hover:font-bold hover:text-white">Quản lý </a></li>
            <li><a href="index.php?act=addsp" class="hover:font-bold hover:text-white">Hàng hoá</a></li>
            <li><a href="index.php?act=dskh" class="hover:font-bold hover:text-white">Khách hàng</a></li>
            <li><a href="index.php?act=dsbl" class="hover:font-bold hover:text-white">Bình luận</a></li>
            <li><a href="index.php?act=thongke" class="hover:font-bold hover:text-white">Thống kê</a></li>

        </div>
        <div class="text-[40px] tracking-wider mt-3 " align="center">
            CÔNG CỤ QUẢN TRỊ WEBSITE
        </div>