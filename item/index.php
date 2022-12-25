<?php
    $mysqli = new mysqli("127.0.0.1", "root", "", "products");
    $items = $mysqli->query("SELECT * FROM `products` WHERE `id`=".$_GET["id"]);
    $obj = $items->fetch_object();
?>


<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="widt-deviece-with, initial-scale-1.0" />
        <title>Склад</title>
        <link rel="stylesheet" href="k.css" />
        <!-- JavaScript Bundle with Popper -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
            crossorigin="anonymous"
        ></script>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
            crossorigin="anonymous"
        />
    </head>
    <body>
        <header>
            <div class="card text-bg-warning p-8">
                <div class="row">
                    <div class="col-1">
                        <div class="logo">
                            <img src="../img/logo%201.png" />
                        </div>
                    </div>
                    <div class="col-4"></div>
                    <div class="col-3">
                        <div class="pok">
                            <a
                                href="../index.html"
                                style="color: #ffffff; text-decoration: none"
                                >Список Товаров</a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="pok2">
                            <a
                                href="../append/index.html"
                                style="color: #ffffff; text-decoration: none"
                            >Добавить товар</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <menu>
            <button type="button" class="btn btn-info" onclick="javascript:history.back()">
                <- Назад
            </button>
            <div class="name">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-5"></div>
                        <div class="col">
                            <p class="fs-1"><?=$obj->name?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="prod">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <img style="max-width:500px; box-shadow: 0 0 100px #00000018;" src="../products/<?=$obj->img?>" />
                        </div>
                        <div class="col-6">
                            <p class="info">Количество на складе: <?=$obj->count?></p>
                            <p class="info">Цена: <?=$obj->cost?></p>
                            <p class="info">Расположение на складе: <?=$obj->location?></p>
                            <p class="info">Производитель: <?=$obj->saller?></p>

                            <button onclick="location.href='delete.php?id=<?=$obj->id?>'" style="margin-top: 30px;" type="button" class="btn btn-danger">
                                Удалить товар
                            </button>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="container text-center">
                <div class="row">
                    <div class="col-10"></div>
                    <div class="col-2">
                        
                    </div>
                </div>
            </div>
        </menu>
    </body>
</html>
