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
                <li class="active"> <a href="services.php">Услуги</a></li>
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
            <table class='col-lg-11 col-xs-12'>
              
                <caption><h2 class='col-lg-12'>Наши услуги</h2></caption>
              <tr class='services-block'>
                <td><img src="components/img/service_wifi.svg" alt="wifi" width=120></td>
                <td class='services'><span class='services-title'>Wi-Fi</span><span class='services-text'> бесплатное беспроводное покрытие Интернет всей территории кафе</span></td>
              </tr>
              <tr class='services-block'>
                <td><img src="components/img/service_parking.svg" alt="parking" width=120></td>
                <td class='services'><span class='services-title'>Велосипедная парковка</span><span class='services-text'> 5 охраняемых мест для велосипедов возле кафе</span></td>
              </tr>
              <tr class='services-block'>
                <td><img src="components/img/service_smoking.svg" alt="smoking" width=120></td>
                <td class='services'><span class='services-title'>Место для курения</span><span class='services-text'> Оснащенная территория для курящих людей</span></td>
              </tr>
              <tr class='services-block'>
                <td><img src="components/img/service_takeaway.svg" alt="takeaway" width=120></td>
                <td class='services'><span class='services-title'>Заказ столиков</span><span class='services-text'> Бесплатное резервирование столов на конкретную дату</span></td>
              </tr>
              <tr class='services-block'>
                <td><img src="components/img/service_reserve.svg" alt="reserve" width=120></td>
                <td class='services'><span class='services-title'>Еда на вынос</span><span class='services-text'> Упаковка еды с собой</span></td>
              </tr>
            </table>
          </div>
          <div class="col-lg-6 col-xs-12">
            <table class='col-lg-11 col-xs-12'>
            <caption><h2 class='col-lg-12'>У нас нельзя</h2></caption>
              <tr>
                <td><img src="components/img/service_no_food.svg" alt="no-food" width=120></td>
                <td class='services'><span class='services-title'>Приносить еду с собой</span></td>
              </tr>
              <tr>
                <td><img src="components/img/service_no_alcohol.svg" alt="no-alcohol" width=120></td>
                <td class='services'><span class='services-title'>Распивать алкоголь</span></td>
              </tr>
              <tr>
                <td><img src="components/img/service_no_smoking.svg" alt="no-smoking" width=120></td>
                <td class='services'><span class='services-title'>Курить внутри помещения</span></td>
              </tr>
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