<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="css/index-adaptive.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<script>

function showModal() {
  var modal = document.getElementById("myModal");
  modal.style.display = "block";
}

function hideModal() {
  var modal = document.getElementById("myModal");
  modal.style.display = "none";
}

</script>
    <header>
        <div class="header__logo">
            <img src="img/2.png" alt="">
            <nav>
                <div class="hamburger-menu">
                    <input id="menu__toggle" type="checkbox" />
                    <label class="menu__btn" for="menu__toggle">
                        <span></span>
                    </label>
                    <ul class="menu__box">
                        <li><a class="menu__item" href="/catalog">Каталог</a></li>
                        <li><a class="menu__item" href="/#main-2">Время работы</a></li>
                        <li><a class="menu__item" href="/#main-3">Отзывы</a></li>
                        <li><a class="menu__item" href="#main-2">Контакты</a></li>

                        @auth
                        <li><a class="menu__item" href="/basket">Карзина</a></li>
                        <li><a class="menu__item" href="/autoriz">Кабинет</a></li>
                        @endauth
                        @guest
                        <li><a class="menu__item" href="/authorization">Войти</a></li>
                        <li><a class="menu__item" href="/registration">Регистрация</a></li>
                        @endguest

                    </ul>
                </div>
            </nav>
        </div>
        <div class="header">
            <div id="myModal" class="modal">
                <div class="modal-content">
                    
                    <span class="close" onclick="hideModal()">&times;</span>
                    <div class="form-item ">
                        <p>Если вы хотите с нами свезаться то оставьте заявку</p>
                    </div>
                    <div class="form-item">
                    
                        <p>Email</p>
                        <input type="text" id="name" name="email" required placeholder="Email" />
                    </div>
                    <div class="form-item">
                        <p>Телефон</p>
                        <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required placeholder="Телефон">
                    </div>
                    
                    <div class="form-item hop">
                        <a href="#" id="button-3" class="button" onclick="hideModal()">
                            Оставить заявку
                        </a>
                    </div>
                </div>
            </div>
            <div>
                <p class="header_text1">Открой для себя мир дисков</p>
                <p class="header_text2">Самые дорогие диски для вашего автомобиля</p>
                <div class="header_menu">
                    <a href="#" id="button-3" class="button" onclick="showModal()">
                        Оставить заявку
                    </a>
                </div>
            </div>
        </div>
    </header>
    <div class="block">
        <h2 style="padding-top: 50px; padding-bottom: 50px">Новое поступление</h2>
        <ul>
            <li>
                <p class="b">Диски Advanti ML537 (MQSU)</p>
                <img src="img/12.png" alt="">
                <p style="text-align: left; padding-left: 30px; font-size: 30px; margin-top: 30px;">₽ 18000</p>
                <div style="display: flex; padding-left: 16px; padding-top: 20px;">
                    <img src="img/16.png" style="width: 40px; height: 38px; margin-right: 10px;">
                    <p style="padding-top: 8px; font-size: 20px;">В наличии</p>
                </div>
                <div class="but1">
                    <a href="#" id="button-3" class="button">
                        <div>
                            <img src="img/17.png">
                            <p>Подробнее</p>
                        </div>
                    </a>
                </div>
            </li>
            <li>
                <p class="b">Диски Advanti ML537 (GBU)</p>
                <img src="img/14.png" alt="">
                <p style="text-align: left; padding-left: 30px; font-size: 30px; margin-top: 30px;">₽ 24000</p>
                <div style="display: flex; padding-left: 16px; padding-top: 20px;">
                    <img src="img/16.png" style="width: 40px; height: 38px; margin-right: 10px;">
                    <p style="padding-top: 8px; font-size: 20px;">В наличии</p>
                </div>
                <div class="but1">
                    <a href="#" id="button-3" class="button">
                        <div>
                            <img src="img/17.png">
                            <p>Подробнее</p>
                        </div>
                    </a>
                </div>
            </li>
            <li>
                <p class="b">Диски Advanti Hydra N619D (GM1)</p>
                <img src="img/13.png" alt="">
                <p style="text-align: left; padding-left: 30px; font-size: 30px; margin-top: 30px;">₽ 54000</p>
                <div style="display: flex; padding-left: 16px; padding-top: 20px;">
                    <img src="img/16.png" style="width: 40px; height: 38px; margin-right: 10px;">
                    <p style="padding-top: 8px; font-size: 20px;">В наличии</p>
                </div>
                <div class="but2">
                    <a href="#" id="button-3" class="button">
                        <div>
                            <img src="img/17.png">
                            <p>Подробнее</p>
                        </div>
                    </a>
                </div>
            </li>
            <li>
                <p class="b">Диски Advanti ML537 (GBU)</p>
                <img src="img/15.png" alt="">
                <p style="text-align: left; padding-left: 30px; font-size: 30px; margin-top: 30px;">₽ 65000</p>
                <div style="display: flex; padding-left: 16px; padding-top: 20px;">
                    <img src="img/16.png" style="width: 40px; height: 38px; margin-right: 10px;">
                    <p style="padding-top: 8px; font-size: 20px;">В наличии</p>
                </div>
                <div class="but1">
                    <a href="#" id="button-3" class="button">
                        <div>
                            <img src="img/17.png">
                            <p>Подробнее</p>
                        </div>
                    </a>
                </div>
            </li>
        </ul>
        <div style="margin-top: 50px; padding-bottom: 50px;">
            <a href="#" id="button-3" class="button">Перейти в каталог</a>
        </div>
    </div>

    <div class="main">
        <div class="a">
            <img src="img/9.png" class="img9" alt="">
            <div class="aa">
                <img src="img/10.png" alt="">
                <div style="padding-left: inherit;">
                    <h1>История нашего сервиса</h1>
                    <p>Наша идея по открытию магазина и вообще в целом пришла с далёкого прошлого, когда маленький мальчик хотел продавать для ценителей красивых и модных дисков.В одно прекрасное время он смог это сделать открыв свой магазин, так сказать воплотил свою мечту и поэтому мы для вас работаем.
                    </p>
                </div>
            </div>
            <div class="aa">
                <img src="img/11.png" alt="">
                <div style="padding-left: inherit;">
                    <h1>Доставка по всей России </h1>
                    <p>Мы доставляем по всей России у нас только качественный товар и опрятная упаковка.Мы работаем на рынке уже более 10 лет, поэтому у вас только положительные комментарии и сотки заказов по всем точкам России.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="main-2" class="main-2">
        <div>
            <img class="ab" src="img/19.png" alt="">
            <div class="ar">
                <img src="img/20.png">
                <div>
                    <h1>Время работы</h1>
                    <p>Пн-Пт с 8:00 до 20:00<br>Сб-Вс с 10:00 до 21:00</p>
                </div>

            </div>
            <div  class="ar">
                <img src="img/21.png">
                <div>
                    <h1>Контакты</h1>
                    <p>Для полной консультации по товару обращайтесь по номеру: +77777777777</p>
                </div>
            </div>

        </div>
    </div>

    <div id="main-3" class="main-3">
        <img class="aff" src="img/23.png">
        <div class="all">
            <input checked type="radio" name="respond" id="desktop">
            <article id="slider">
                <input checked type="radio" name="slider" id="switch1">
                <input type="radio" name="slider" id="switch2">
                <input type="radio" name="slider" id="switch3">

                <div id="slides">
                    <div id="overflow">
                        <div class="image">
                            <article>
                                <div class="review-block">
                                    <img src="img/24.png">
                                    <div>
                                        <h1 class="review-number">01</h1>
                                        <hr>
                                        <p class="review-letter">Заказывал диски на<br> заказ, всё отлично <br>катаюсь радуюсь.</p>
                                    </div>
                                </div>
                            </article>
                            <article>
                                <div class="review-block">
                                    <img src="img/25.png">
                                    <div>
                                        <h1 class="review-number">02</h1>
                                        <hr>
                                        <p class="review-letter">Понравилось как<br>работают с клиентом<br>остался довольным.</p>
                                    </div>
                                </div>
                            </article>
                            <article>
                                <div class="review-block">
                                    <img src="img/26.png">
                                    <div>
                                        <h1 class="review-number">03</h1>
                                        <hr>
                                        <p class="review-letter">Взял диски на BMW 3<br> серии, очень нравится<br>советую всем эту<br>компанию.</p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>

                <div id="active" class="active">
                    <label for="switch1"></label>
                    <label for="switch2"></label>
                    <label for="switch3"></label>
                </div>
            </article>
        </div>

        <div class="riop">
            <div class="review-block">
                <img src="img/24.png">
                <div style="width: 268px; background-color:rgba(217, 217, 217, 0.3);">
                    <h1 class="review-number">01</h1>
                    <hr>
                    <p class="review-letter">Заказывал диски на<br> заказ, всё отлично <br>катаюсь радуюсь.</p>
                </div>
            </div>
            <div class="review-block">
                <img src="img/25.png">
                <div style="width: 268px; background-color:rgba(217, 217, 217, 0.3);">
                    <h1 class="review-number">02</h1>
                    <hr>
                    <p class="review-letter">Понравилось как<br>работают с клиентом<br>остался довольным.</p>
                </div>
            </div>
            <div class="review-block">
                <img src="img/26.png">
                <div style="width: 268px; background-color:rgba(217, 217, 217, 0.3);">
                    <h1 class="review-number">03</h1>
                    <hr>
                    <p class="review-letter">Взял диски на BMW 3<br> серии, очень нравится<br>советую всем эту<br>компанию.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="main-4">

    </div>

    <footer>
        <div class="footer">
            <div>
                <div class="footer-block">
                    <ul>
                        <h1>INFORMATION</h1>
                        <li><img src="img/28.png">
                            <p>About</p>
                        </li>
                        <li><img src="img/28.png">
                            <p>Delivery</p>
                        </li>
                        <li><img src="img/28.png">
                            <p>Privacy Policy</p>
                        </li>
                        <li><img src="img/28.png">
                            <p>Team & Conditions</p>
                        </li>
                    </ul>
                </div>
                <div class="footer-block">
                    <ul>
                        <h1>CUSTOMER <br>SERVICE</h1>
                        <li><img src="img/28.png">
                            <p>Contact Us</p>
                        </li>
                        <li><img src="img/28.png">
                            <p>Returns</p>
                        </li>
                        <li><img src="img/28.png">
                            <p>Site Map</p>
                        </li>
                    </ul>
                </div>
                <div class="footer-block">
                    <ul>
                        <h1>EXTRAS</h1>
                        <li><img src="img/28.png">
                            <p>Brands</p>
                        </li>
                        <li><img src="img/28.png">
                            <p>Gift Vouchers</p>
                        </li>
                        <li><img src="img/28.png">
                            <p>Affiliates</p>
                        </li>
                        <li><img src="img/28.png">
                            <p>Specials</p>
                        </li>
                    </ul>
                </div>
                <div class="footer-block">
                    <ul>
                        <h1>MY ACCOUNT</h1>
                        <li><img src="img/28.png">
                            <p>My account</p>
                        </li>
                        <li><img src="img/28.png">
                            <p>Order History</p>
                        </li>
                        <li><img src="img/28.png">
                            <p>Wish List</p>
                        </li>
                        <li><img src="img/28.png">
                            <p>Newsletter</p>
                        </li>
                    </ul>
                </div>
                <div class="footer-block">
                    <ul>
                        <h1>FOLLOW US</h1>
                        <div style="display: flex; margin-top: 20px;">
                            <li style="margin-right: 10px; "><img src="img/29.png" style="background-color: orange;" alt=""></li>
                            <li style="margin-right: 10px"><img src="img/30.png" style="background-color: orange;" alt=""></li>
                            <li><img src="img/31.png" style="background-color: orange;" alt=""></li>
                        </div>

                </div>
                </ul>
            </div>
        </div>
        </div>
    </footer>

    <script src="js.js"></script>
</body>

</html>