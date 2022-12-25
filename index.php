<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widt-deviece-with, initial-scale-1.0">
    <title>Склад</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <header>
          <div class="card text-bg-warning p-8" >
              <div class="row">
                  <div class="col-1">
                      <div class="logo">
                      <img src="img/logo%201.png">
                      </div>
                  </div>
                  <div class="col-4">
                  </div>
                  <div class="col-3" >
                      <div class="pok">
                      <a href="#" style="color:#ffffff; text-decoration:none">Список Товаров</a>
                      </div>
                  </div>
                  <div class="col-2">
                      <div class="pok2">
                      <a href="append/index.php" style="color:#ffffff; text-decoration:none"> Добавить товар</a>
                      </div>
                  </div>
              </div>
          </div>
    
    <catalog>
        <?php if(isset($_GET['code'])): ?>
            <div class="col-md-4 mx-auto">
                <?php
                    switch ($_GET['code']) {
                        case 0:
                            echo '<div class="alert alert-success mt-4" role="alert">Успешное удаление</div>';
                            break;
                        case 1:
                            echo '<div class="alert alert-danger mt-4" role="alert">Ошибка удаления</div>';
                            break;
                        case 2:
                            echo '<div class="alert alert-danger mt-4" role="alert">Форма не заполнена полностью</div>';
                            break;
                        case 3:
                            echo '<div class="alert alert-success mt-4" role="alert">Запись добавлена</div>';
                            break;
                        case 4:
                            echo '<div class="alert alert-danger mt-4" role="alert">Ошибка добавления записи</div>';
                            break;
                        case 3:
                            echo '<div class="alert alert-success mt-4" role="alert">Успешная авторизация</div>';
                            break;
                        
                    }
                ?>
            </div>
        <?php endif; ?>
        
        <div class="catalog">
        <table border="1" width="100%" cellpadding="15">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Название</th>
                    <th>Количество</th>
                    <th>Цена</th>
                    <th>Местоположение</th>
                    <th>Производитель</th>
                    <th>Изображение</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $mysqli = new mysqli("127.0.0.1", "root", "", "products");
                    $items = $mysqli->query("SELECT * FROM `products`");
                ?>
                <?php foreach($items as $item):?>
                    
                    <tr class="hover">
                        <td><?=$item['id']?></td>
                        <td><?=$item['name']?></td>
                        <td><?=$item['count']?></td>
                        <td><?=$item['cost']?></td>
                        <td><?=$item['location']?></td>
                        <td><?=$item['saller']?></td>
                        <td scope="row" style="display: flex;flex-direction: column;align-items: center;">
                            <img src="products/<?=$item['img']?>" class="item-img">
                            <button onclick="location.href='item/index.php?id=<?=$item['id']?>'" style="max-width:100px;" type="button" class="btn btn-primary">Перейти</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </div>
    </catalog>
    <script>
        
    </script>
</body>
</html>