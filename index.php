<?php
if(trim($_POST['name']) != "" && trim($_POST['email']) != ""){
  mail("vadym.queensoft@gmail.com", "Заказ", "Новый заказ: почта " . $_POST['email'] . "\n" . "имя " . $_POST['name']);
  header("Location: http://www.airpodsstour.com/#contacts");
  exit;
}
?>

<!DOCTYPE html>

<html lang="ru">

<head>

    <title></title>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/style.css?v17.11">

    <link rel="stylesheet" href="css/media-phone.css?v17.11">

    <link rel="stylesheet" href="css/media-tablets.css?v17.11">

    <link rel="stylesheet" href="css/media-laptops.css?v17.11">

    <link rel="stylesheet" href="fonts/stylesheet.css">

</head>

<body>

    <div class="wrapper">

        <header class="header" id="main">

            <div class="menu fixed">

              <img src="images/menu.svg" alt="menu"  class="icon">

              <ul>

                <li><a href="#main">Головна</a></li>

                <li><a href="#gods">Продукти</a></li>

                <li><a href="#why-us">Наші переваги</a></li>

                <li><a href="#contacts">Контакти</a></li>

              </ul>

            </div>

            <div class="mobile-menu">

              <ul>

                <li><a href="#main" class="mobile-link">Головна</a></li>

                <li><a href="#gods" class="mobile-link">Продукти</a></li>

                <li><a href="#why-us" class="mobile-link">Наші переваги</a></li>

                <li><a href="#contacts" class="mobile-link">Контакти</a></li>

              </ul>

            </div>

            

            <div class="header-content">

              <div class="header-text">

                <h1>НАЙКРАЩА КОПІЯ AIRPODS</h1>

                <h5>Все як в оригіналі, крім ціни</h5>

                <button><a href="#">Купити</a></button>

              </div>

              <img src="images/Airpods.png" alt="Airpods">



            </div>

        </header>

        <span id="gods"></span>

        <main class="main">

              <h2>НОВІ ТОВАРИ</h2>

              <p>Ці товари завжди в наявності</p>

              <div class="goods">

                <div class="good">

                  <img src="images/Airpods.png" alt="" class="airpods-image">

                  <h4>AirPods 2</h4>

                  <p>1499 грн</p>

                  <button><a href="#contacts">Купити</a></button>                  

                </div>

                <div class="good">

                  <img src="images/Airpods.png" alt="" class="airpods-image">

                  <h4>AirPods</h4>

                  <p>1300 грн</p>

                  <button><a href="#contacts">Купити</a></button>

                </div>

                <div class="good">

                  <img src="images/Apple_AirPods-Pro.png" alt="" class="airpods-image airpods-pro-image">

                  <h4>AirPods Pro</h4>

                  <p>3499 грн</p>

                  <button><a href="#contacts">Купити</a></button>                  

                </div>

                

              </div>

              <span id="why-us"></span>

        

              <h2>Чому саме ми?</h2>

              <div class="why-us">

                <div class="why-us_item item1">

                  <img src="images/clock-circular-outline.svg" alt="time">

                  <h4>Найнижчі ціни</h4>

                  <p>Ми турбуємося про те, щлб наш товар став доступним для всіх.</p>

                </div>

                <div class="why-us_item item2">

                  <img src="images/clock-circular-outline.svg" alt="">

                  <h4>Найкраща якість</h4>

                  <p>Товар проходить перевірку перед тим як відправитися до вас.    Щоб ви були задоволені</p>

                </div>

                <div class="why-us_item item3">

                  <img src="images/clock-circular-outline.svg" alt="">

                  <h4>Швидка доставка</h4>

                  <p>Ми стараємося якомога швидше обробляти замовлення щоб доставка зайняла не більше 24 годин</p>

                </div>

              </div>

              <span id="contacts"></span>

              <div class="info">

                <div class="info-contacts">

                      <a href="#"><img src="images/005-email.svg" alt=""></a>

                      <a href="tel:+380662098259"><img src="images/003-smartphone.svg" alt=""></a>

                      <a href="#"><img src="images/001-facebook.svg" alt=""></a>

                      <a href="#"><img src="images/002-instagram.svg" alt=""></a>

                </div>    

                <form action="" class="info-form active" id="5" method="POST">

                  <h2>Замовити</h2>

                   <div class="form-items">

                    <input type="text" class="form-input" name="name" placeholder=" ">

                    <label for="" class="form-label">Ваше і'мя</label>

                  </div>

                  <div class="form-items">

                    <input type="text" class="form-input" placeholder=" " name="email" id="email">

                    <label for="email" class="form-label">Email або телефон</label>

                  </div>

                  <button class="form-button">Відправити</button>

                </form>
                <div class="hidden">
                  <h3 class="thank-you__title">
                    Дякуємо, ваша заявка прийнята!
                  </h3>
               </div>


              </div>

             

              </main>

        </main>

        <footer class="footer">



        </footer>

    </div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

    <script src="scripts/scripts.js"></script>

</body>

</html>

