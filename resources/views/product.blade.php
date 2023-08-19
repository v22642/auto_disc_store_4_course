<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Товар</title>
    <link rel="stylesheet" href="../css/tavar.css">
</head>

<body>
    <header>
        <div class="header__logo">
            <a class="#" href="/"><img src="../img/2.png" alt=""></a>
            <nav>
                <ul>
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
            </nav>
        </div>
    </header>
    <div class="block">
        <div>
            <h2 style="padding-left: 100px; padding-top: 50px; padding-bottom: 50px;">{{$posts->name}}</h2>
            <div style="display: flex; justify-content: space-between;">
                <div style="display: flex; padding-bottom: 20px;">
                    <p style="padding-right: 50px; padding-left: 200px;">Оставить отзыв</p>

                    <img src="../img/32.png" style="margin-right: 20px;">
                    <p>Задать вопрос</p>
                </div>
                <p style="padding-right: 50px;">Код товара: 77779999</p>
            </div>
        </div>
        <hr style="border: 1px solid black;">
        <div class="tovar-info">

            <div style="grid-column: 2/3;"><img class="" src="{{ asset('/storage/'.$posts->avatar)}}"></div>
            <div style="grid-column: 3/4; padding-top: 40px;">
                <h4>Название цвет:</h4>
                <p style="border: 1px solid black; margin-top: 20px; text-align: center; box-shadow: 0 0 10px rgba(0,0,0,0.5); background-color: white;">Серебристый</p>
                <p style="border: 1px solid black; margin-top: 20px; text-align: center; box-shadow: 0 0 10px rgba(0,0,0,0.5); background-color: white;">Черный</p>
                <ul style="margin-top: 20px;">
                    <li>{{$posts->Brand}}</li>
                    <li>Партномер (артикул производителя) - RR008-7518-601-5x108-47BDM-diski</li>
                    <li>Артикул - RR008-7518-601-5x108-47BDM-diski</li>
                    <li>Диаметр, дюймы - {{$posts->Diameter}}</li>
                    <li>Ширина обода - {{$posts->Width}}</li>
                </ul>
            </div>
            <div style="grid-column: 4/5;">
                <div style="background-color: #D9D9D9; border-radius: 35px; text-align: center; margin-top: 30%;">
                    <div style="display: flex; padding-left: 23%; padding-top: 20px;">
                        <p style="padding-right: 20px;">₽ {{$posts->price}}</p>

                    </div>
                    <div style="display: flex; padding-left: 19%; padding-top: 20px;">
                        <img src="../img/16.png" style="width: 40px; height: 38px; margin-right: 10px;">
                        <p style="padding-top: 8px; font-size: 20px;">В наличии</p>
                    </div>
                    <a class="button" href="/basket/{{$posts->id}}">Заказать</a>
                </div>
                <h5 style="text-align: center; padding-top: 20px">Информация о доставке</h5>
                <hr class="hr-info" style="margin-top: 10px; margin-bottom: 10px">
                <div style="display: flex;">
                    <img src="../img/34.png">
                    <p>Москва</p>
                </div>
                <hr class="hr-info" style="margin-top: 10px; margin-bottom: 10px">
                <p>Доставка с 11 октября</p>
            </div>
        </div>
    </div>
</body>

</html>