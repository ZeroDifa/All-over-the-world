<?php
    require "append.php";
?>


<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widt-deviece-with, initial-scale-1.0">
    <title>Склад</title>
    <link rel="stylesheet" href="k.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <header>
        <div class="card text-bg-warning p-8">
            <div class="row">
                <div class="col-1">
                    <div class="logo">
                        <img src="../img/logo%201.png">
                    </div>
                </div>
                <div class="col-4">
                </div>
                <div class="col-3">
                    <div class="pok">
                        <a href="../" style="color:#ffffff; text-decoration:none">Список Товаров</a>
                    </div>
                </div>
                <div class="col-2">
                    <div class="pok2">
                        <a href="#" style="color:#ffffff; text-decoration:none">Добавить товар</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <body>
        <div class="hs">
            <h1>Заполните форму</h1>
        </div>
        <div class="form-wrap">
            <div class="profile">
                <div class="kartinka"><img src="../img/4.jpg"></div>

            </div>
            <form action="index.php" method="POST">
                <input type="hidden" name="action" value="signup">
                <div class="form-group">
                    <label for="name">Имя товара</label>
                    <input type="text" name="name" id="name" class="form-control" value="">
                </div>
                <div class="form-group">
                    <label for="count">Количество товара</label>
                    <input type="text" name="count" id="count" class="form-control" value="">
                </div>
                <div class="form-group">
                    <label for="cost">Цена</label>
                    <input type="text" name="cost" id="cost" class="form-control" value="">
                </div>
                <div class="form-group">
                    <label for="location">Расположение</label>
                    <input type="text" name="location" id="location" class="form-control" value="">
                </div>
                <div class="form-group">
                    <label for="saller">Производитель</label>
                    <input type="text" name="saller" id="saller" class="form-control" value="">
                </div>
                <div class="form-group">
                    <label for="img">Название изображения</label>
                    <input type="text" name="img" id="img" class="form-control" value="">
                </div>
                <div class="col-md-12 mt-4 text-center ">
                    <button type="submit" name="sumbit" class=" btn btn-block btn-primary tx-tfm register-btn">
                        Добавить
                    </button>
                </div>
            </form>
        </div>
    </body>