<?php
  $mysql = new mysqli("localhost", "root", "", "vegan");
  $mysql->query("SET NAMES 'utf8'");

  if ($mysql->connect_error){
    echo "Error: ".$mysql->connect_error;
    exit();
  }

  $reviews = [];
  $result = $mysql->query('SELECT * from reviews');
  while ($row = mysqli_fetch_assoc($result)){
    $reviews[] = array(
      "id" => $row["id"],
      "name" => $row["name"],
      "description" => $row["description"],
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
                <li> <a href="menu.php">Меню</a></li>
                <li> <a href="services.php">Услуги</a></li>
                <li class="active"> <a href="reviews.php">Отзывы</a></li>
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
        <? foreach ($reviews as $key): ?>
          <div class="otherReviews">
            <div class="othName"><strong><?= $key['name']?></strong></div>
            <div class="othDesc"><strong><?= $key['description']?></strong></div>
          </div>
        <?php endforeach; ?>
        <div class="reviews col-lg-12">
          <form method="post" action="addReviews.php">
            <input class="username" required type="text" name="username" placeholder="Имя"><br>
            <textarea class="description" required type="text" name="description" placeholder="Описание" cols="30" rows="6"></textarea><br>
            <input class="send" required type="submit" name="send-reviews" value="Комментировать">
          </form>
        </div>
        </div>
      </div>    
    <div class="clear"></div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="components/js/bootstrap.min.js"></script>
  </body>
</html>