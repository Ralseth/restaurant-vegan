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
                <li class="active"> <a href="index.php">Главная</a></li>
                <li> <a href="menu.php">Меню</a></li>
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
        <h2>Добро пожаловать в «Vegan»</h2>
        <br>
        <div class="row">
          <table class='index-table'>
            <tbody>
              <tr>
                <td>
                  <img src="components/img/index_oval_1.png" alt="Свежая продукция">
                  <p>Мы используем в наших блюдах только свежие продукты</p>
                </td>
                <td>
                  <img src="components/img/index_oval_2.png" alt="Местное производство">
                  <p>Все овощи и фрукты вырощены на полях и теплицах города</p>
                </td>
                <td>
                  <img src="components/img/index_oval_3.png" alt="Только органика">
                  <p>Наши продукты не содержат в себе консервантов и химикатов</p>
                </td>
              </tr>
            </tbody>
          </table>
          <h2>О нас</h2>
          <p class='block-text'>
            «Vegan» — это первое в Каспийске заведение, распологающее полноценным меню для вегетарианцев. 
            Мы открылись не так давно и уже успели завоевать доверие людей в сфере здорового и полезного питания. 
            В «Vegan» можно приходить как на свидания, душевные дружеские посиделки, так и просто забегать перекусить быстро, вкусно и недорого.
          </p>
        </div>
      </div>    
    <div class="clear"></div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="components/js/bootstrap.min.js"></script>
  </body>
</html>