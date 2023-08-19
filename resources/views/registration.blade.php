<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Зарегистрируйтесь</title>
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
    <main>
        <div class="login-card">
            <div class="login-card-header">
                <h1>Зарегистрируйтесь</h1>

            </div>
            <ul>
                @foreach ($errors->all() as $message)
                <li>{{$message}}</li>
                @endforeach
            </ul>
            <form method="POST" action="{{ route('registration') }}" class="login-card-form" enctype="multipart/form-data">
                @csrf
                <div class="form-item">
                    <input type="text" id="name" name="name" value="{{ old('name') }}" required placeholder="Имя" />
                </div>
                <div class="form-item">
                    <input type="text" placeholder="Введите вашу электронную почту" name="email" id="emailForm" required>
                </div>
                <div class="form-item">

                    <input type="file" name="avatar" placeholder="аватар" required>

                </div>
                <div class="form-item">
                    <input type="password" placeholder="Введите пароль" name="password" id="passwordForm" required>
                </div>
                <div class="form-item">
                    <input type="password" placeholder="Повторите пароль" name="password_confirmation" id="passwordForm" required >
                </div>
                <button type="submit"><b>Зарегистрироваться</b></button>

                <div class="form-item-other">

                    <p class="p2">Уже есть аккаунт? <a href="/authorization">Войти</a></p>

                </div>

            </form>

        </div>
    </main>

</body>

</html>