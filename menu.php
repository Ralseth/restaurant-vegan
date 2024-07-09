<?php
  $mysql = new mysqli("localhost", "root", "", "vegan");
  $mysql->query("SET NAMES 'utf8'");

  if ($mysql->connect_error){
    echo "Error: ".$mysql->connect_error;
    exit();
  }

  $salads = []; 
  $main = [];
  $porridge = [];
  $drinks = [];
  $soups = [];
  $desserts = [];
  $saladsdb = $mysql->query('SELECT * from catalog WHERE type = "salads"');
  $maindb = $mysql->query('SELECT * from catalog WHERE type = "main"');
  $porridgedb = $mysql->query('SELECT * from catalog WHERE type = "porridge"');
  $drinksdb = $mysql->query('SELECT * from catalog WHERE type = "drinks"');
  $soupsdb = $mysql->query('SELECT * from catalog WHERE type = "soups"');
  $dessertsdb = $mysql->query('SELECT * from catalog WHERE type = "desserts"');
  while ($row = mysqli_fetch_assoc($saladsdb)){ 
    $salads[] = array(
      "name" => $row["name"],
      "price" => $row["price"],
      "description" => $row["description"],
      "gram" => $row["gram"],
      );
    }
  while ($row = mysqli_fetch_assoc($maindb)){ 
    $main[] = array(
      "name" => $row["name"],
      "price" => $row["price"],
      "description" => $row["description"],
      "gram" => $row["gram"],
      );
  }
  while ($row = mysqli_fetch_assoc($porridgedb)){ 
    $porridge[] = array(
      "name" => $row["name"],
      "price" => $row["price"],
      "description" => $row["description"],
      "gram" => $row["gram"],
      );
    }
  while ($row = mysqli_fetch_assoc($drinksdb)){ 
    $drinks[] = array(
      "name" => $row["name"],
      "price" => $row["price"],
      "description" => $row["description"],
      "gram" => $row["gram"],
      );
    }
  while ($row = mysqli_fetch_assoc($soupsdb)){ 
    $soups[] = array(
      "name" => $row["name"],
      "price" => $row["price"],
      "description" => $row["description"],
      "gram" => $row["gram"],
      );
    }
  while ($row = mysqli_fetch_assoc($dessertsdb)){ 
    $desserts[] = array(
      "name" => $row["name"],
      "price" => $row["price"],
      "description" => $row["description"],
      "gram" => $row["gram"],
      );
    }
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vegan</title>
    <link href="components/css/bootstrap.min.css" rel="stylesheet">
    <link href="components/css/style.css" rel="stylesheet">
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
       <nav role="navigation" class="navbar navbar-inverse">
          <div class="container">
            <div class="navbar-header header">
              <div class="container">
                <div class="row">
                  <div class="col-lg-12 nav-header">
                    <img src="components/img/icon.png" class='title-img pull-left'>
                    <div class="header-title">
                      <h1><a href="#">Ресторан «Vegan»</a></h1>
                      <div class='tag'>Мы то, что мы едим !</div>
                    </div>
                  </div>
                </div>
              </div>
              <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span  class="sr-only">Toggly navigation</span>
                <span  class="icon-bar"></span>
                <span  class="icon-bar"></span>
                <span  class="icon-bar"></span>
              </button>    
            </div>
            <div id="navbarCollapse" class="collapse navbar-collapse navbar-right">
              <ul class="nav nav-pills">
                <li> <a href="index.php">Главная</a></li>
                <li class="active"> <a href="menu.php">Меню</a></li>
                <li> <a href="services.php">Услуги</a></li>
                <li> <a href="reviews.php">Отзывы</a></li>
                <li> <a href="contact.php">Контакты</a></li>  
              </ul>  
            </div>
          </div>
        </nav>  
      </div>  
    </div>
    <div class="wrapper">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-xs-12">
            <table class='menu col-lg-11 col-xs-12'>
              <tr>
                <th><h2>Салаты</h2></th>
                <th>Грамм</th>
                <th>Цена</th>
              </tr>
              <?php foreach ($salads as $key): ?>
              <tr>
                <td class='dish'><span class='name-dish'><?= $key["name"]; ?></span><span class='description-dish'> <?= $key["description"]; ?></span></td>
                <td><?= $key["gram"]; ?>g</td>
                <td><?= $key["price"]; ?>₽</td>
              </tr>
              <?php endforeach; ?>
            </table>
          </div>
          <div class="col-lg-6 col-xs-12">
            <table class='menu col-lg-11 col-xs-12'>
              <tr>
                <th><h2>Основные блюда</h2></th>
                <th>Грамм</th>
                <th>Цена</th>
              </tr>
              <?php foreach ($main as $key): ?>
              <tr>
                <td class='dish'><span class='name-dish'><?= $key["name"]; ?></span><span class='description-dish'> <?= $key["description"]; ?></span></td>
                <td><?= $key["gram"]; ?>g</td>
                <td><?= $key["price"]; ?>₽</td>
              </tr>
              <?php endforeach; ?>
            </table>
          </div>
          <div class="col-lg-6 col-xs-12">
            <table class='menu col-lg-11 col-xs-12'>
              <tr>
                <th><h2>Каши</h2></th>
                <th>Грамм</th>
                <th>Цена</th>
              </tr>
              <?php foreach ($porridge as $key): ?>
              <tr>
                <td class='dish'><span class='name-dish'><?= $key["name"]; ?></span><span class='description-dish'> <?= $key["description"]; ?></span></td>
                <td><?= $key["gram"]; ?>g</td>
                <td><?= $key["price"]; ?>₽</td>
              </tr>
              <?php endforeach; ?>
            </table>
          </div>
          <div class="col-lg-6 col-xs-12">
            <table class='menu col-lg-11 col-xs-12'>
              <tr>
                <th><h2>Напитки</h2></th>
                <th>Грамм</th>
                <th>Цена</th>
              </tr>
              <?php foreach ($drinks as $key): ?>
              <tr>
                <td class='dish'><span class='name-dish'><?= $key["name"]; ?></span><span class='description-dish'> <?= $key["description"]; ?></span></td>
                <td><?= $key["gram"]; ?>g</td>
                <td><?= $key["price"]; ?>₽</td>
              </tr>
              <?php endforeach; ?>
            </table>
          </div>
          <div class="col-lg-6 col-xs-12">
            <table class='menu col-lg-11 col-xs-12'>
              <tr>
                <th><h2>Супы</h2></th>
                <th>Грамм</th>
                <th>Цена</th>
              </tr>
              <?php foreach ($soups as $key): ?>
              <tr>
                <td class='dish'><span class='name-dish'><?= $key["name"]; ?></span><span class='description-dish'> <?= $key["description"]; ?></span></td>
                <td><?= $key["gram"]; ?>g</td>
                <td><?= $key["price"]; ?>₽</td>
              </tr>
              <?php endforeach; ?>
            </table>
          </div>
          <div class="col-lg-6 col-xs-12">
            <table class='menu col-lg-11 col-xs-12'>
              <tr>
                <th><h2>Дессерты</h2></th>
                <th>Грамм</th>
                <th>Цена</th>
              </tr>
              <?php foreach ($desserts as $key): ?>
              <tr>
                <td class='dish'><span class='name-dish'><?= $key["name"]; ?></span><span class='description-dish'> <?= $key["description"]; ?></span></td>
                <td><?= $key["gram"]; ?>g</td>
                <td><?= $key["price"]; ?>₽</td>
              </tr>
              <?php endforeach; ?>
            </table>
          </div>
        </div>
      </div>    
    <div class="clear"></div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="components/js/bootstrap.min.js"></script>
  </body>
</html>