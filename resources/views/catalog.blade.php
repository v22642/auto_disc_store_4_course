<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог</title>
    <link rel="stylesheet" href="css/catalog.css">
</head>

<body>
    <header>
        <a href="/"><img src="img/2.png" alt=""></a>
        <div class="hamburger-menu">
            <input id="menu__toggle" type="checkbox" />
            <label class="menu__btn" for="menu__toggle">
                <span></span>
            </label>

            <ul class="menu__box">
                <li><a class="menu__item" href="/catalog">Каталог</a></li>
                <li><a class="menu__item" href="/#main-2">Время работы</a></li>
                <li><a class="menu__item" href="/#main-3">Отзывы</a></li>
                <li><a class="menu__item" href="#ar">Контакты</a></li>
                @auth
                <li><a class="menu__item" href="/basket">Корзина</a></li>
                <li><a class="menu__item" href="/autoriz">Кабинет</a></li>
                @endauth
                @guest
                <li><a class="menu__item" href="/authorization">Войти</a></li>
                <li><a class="menu__item" href="/registration">Регистрация</a></li>
                @endguest
            </ul>

        </div>
    </header>

    <div class="catalog">
        <h2>Каталог</h2>

        <div class="form">

            <form method="get" action="{{ route('catalog.search') }}">
                <img src="img/image154.png" alt="">
                <input type="text" name="search" placeholder="Поиск...">
                <button type="submit" class="button-hop"><img src="img/eee1.png" alt="" class="imgP"></button>
                
            </form>
            <nav>
                <ul class="rty">
                    <li>Сортировать по: </li>
                    <li><a class="" href="">
                            <img src="img/image156.png" alt="">
                            <svg width="0" height="0" viewbox="0 0 0 0">
                                <defs>
                                    <filter id="filter">
                                        <fecomponenttransfer>
                                            <fefuncr type="discrete" tablevalues="1 0" />
                                            <fefuncg type="discrete" tablevalues="0 0" />
                                            <fefuncb type="discrete" tablevalues="0 0" />
                                        </fecomponenttransfer>
                                    </filter>
                                </defs>
                            </svg>
                            Популярные</a></li>
                    <li><a class="" href=""><img src="img/image151.png" alt="">
                            <svg width="0" height="0" viewbox="0 0 0 0">
                                <defs>
                                    <filter id="filter">
                                        <fecomponenttransfer>
                                            <fefuncr type="discrete" tablevalues="1 0" />
                                            <fefuncg type="discrete" tablevalues="0 0" />
                                            <fefuncb type="discrete" tablevalues="0 0" />
                                        </fecomponenttransfer>
                                    </filter>
                                </defs>
                            </svg>
                            Новизне</a></li>
                    <li><a class="" href=""><img src="img/image157.png" alt="">
                            <svg width="0" height="0" viewbox="0 0 0 0">
                                <defs>
                                    <filter id="filter">
                                        <fecomponenttransfer>
                                            <fefuncr type="discrete" tablevalues="1 0" />
                                            <fefuncg type="discrete" tablevalues="0 0" />
                                            <fefuncb type="discrete" tablevalues="0 0" />
                                        </fecomponenttransfer>
                                    </filter>
                                </defs>
                            </svg>
                            Цене</a></li>
                    <li class="li"><a class="" href="">
                            <img src="img/image158.png" alt="" class="img1">
                            <svg width="0" height="0" viewbox="0 0 0 0">
                                <defs>
                                    <filter id="filter">
                                        <fecomponenttransfer>
                                            <fefuncr type="discrete" tablevalues="1 0" />
                                            <fefuncg type="discrete" tablevalues="0 0" />
                                            <fefuncb type="discrete" tablevalues="0 0" />
                                        </fecomponenttransfer>
                                    </filter>
                                </defs>
                            </svg>
                            Сумме скидки</a></li>
                    <li class="li"><a class="" href="">
                            <img src="img/image159.png" alt="" class="img2">
                            <svg width="0" height="0" viewbox="0 0 0 0">
                                <defs>
                                    <filter id="filter">
                                        <fecomponenttransfer>
                                            <fefuncr type="discrete" tablevalues="1 0" />
                                            <fefuncg type="discrete" tablevalues="0 0" />
                                            <fefuncb type="discrete" tablevalues="0 0" />
                                        </fecomponenttransfer>
                                    </filter>
                                </defs>
                            </svg>
                            Размеру скидки</a></li>
                </ul>
            </nav>
        </div>


        <div class="catalog_catalog">
            @foreach($posts as $post)
            <div>
                <h3>{{$post->name}}</h3>
                <img class="img_cata" src="{{ asset('/storage/'.$post->avatar)}}" alt="">
                <p class="p_cata">₽ {{$post->price}}</p>
                <img src="img/16.png" alt="" class="badge_in_stock">
                <samp class="in_stock">В наличии</samp><br>

                <button><img src="img/17.png" alt=""><samp><a class="menu__item1" href="/product/{{$post->id}}">Подробнее</a></samp></button>
            </div>
            @endforeach


        </div>

    </div>
    <!-- <nav class="room">
                    <ul>
                        <li><a class="" href=""><</a></li>
                        <li><a class="" href="">1</a></li>
                        <li><a class="" href="">2</a></li>
                        <li><a class="" href="">3</a></li>
                        <li><a class="" href="">4</a></li>
                        <li><a class="" href="">5</a></li>
                        <li><a class="" href="">></a></li>
                    </ul>
                </nav> -->
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

</body>

</html>



<!-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>котолог</title>
        <link rel="stylesheet" href="css/catalog.css">
    </head>
    <body>

    
    
    yield('header')

    </body>
</html> -->