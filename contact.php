<?php
  $mysql = new mysqli("localhost", "root", "", "vegan");
  $mysql->query("SET NAMES 'utf8'");

  if ($mysql->connect_error){
    echo "Error: ".$mysql->connect_error;
    exit();
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
                <li> <a href="reviews.php">Отзывы</a></li>
                <li class="active"> <a href="contact.php">Контакты</a></li>  
              </ul>  
            </div>
          </div>
        </nav>  
      </div>  
    </div>
    <div class="wrapper">
      <div class="container">
        <div class="row">
          <div class="about col-lg-6">
            <h2>Режим работы</h2>
            <p>понедельник - четверг 8:00 - 20:00</p>
            <p>пятница - воскресенье 10:00 - 22:00</p>
            <h2>Контактная информация</h2>
            <p>администратор кафе: +7 967 777-77-77</p>
            <p>резерв столов: +7 924 12-74-74</p>
            <p>e-mail: vegan1277238@gmail.com</p>
            <h2>Как добраться</h2>
            <p>добирайтесь как хотите</p>
          </div>
          <div class="col-lg-6">
            <h2>Мы на карте</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23387.430522219165!2d47.621960464535896!3d42.884898653516714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x404ea8f6a565969f%3A0x31a4d718c8a2f67e!2z0JrQsNGB0L_QuNC50YHQuiwg0KDQtdGB0L8uINCU0LDQs9C10YHRgtCw0L0!5e0!3m2!1sru!2sru!4v1714933848814!5m2!1sru!2sru" width="360" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>    
    <div class="clear"></div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="components/js/bootstrap.min.js"></script>
  </body>
</html>