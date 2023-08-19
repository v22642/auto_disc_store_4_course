<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="stylesheet" href="css/Zar.css">
    <link rel="stylesheet" href="css/Zar-adaptive.css">
</head>

<body>
    <header>

        <a href="/"><img src="img/2.png" alt=""></a>
        <div class="hamburger-menu">
            <input id="menu__toggle" type="checkbox" />
            <label class="menu__btn" for="menu__toggle">
                <span></span>
            </label>
            <!-- <nav>  -->
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
            <!-- </nav> -->

        </div>
    </header>
    <main>
        <div class="login-card">
            <div class="login-card-header">
                <h1 class="h1">Авторизация</h1>

            </div>
            <form method="POST" action="{{ route('authorization') }}" class="login-card-form">
                @csrf
                <div class="form-item">
                    <input type="email" name="email" placeholder="Введите вашу электронную почту" id="emailForm" autofocus required>

                </div>

                <div class="form-item">
                    <input type="password" placeholder="Введите пароль" name="password" id="passwordForm" required>
                </div>

                <button type="submit"><b>Авторизация</b></button>
                <div class="form-item-other">

                    <p class="p2">Вы не зарегистрировались? <a href="/registration">Зарегистрироваться</a></p>
                </div>

            </form>

        </div>
    </main>

</body>

</html>