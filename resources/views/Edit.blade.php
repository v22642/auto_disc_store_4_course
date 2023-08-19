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
            <li><a class="menu__item" href="/registeation1">Регистрация</a></li>
            @endguest
        </ul>
        <!-- </nav> -->
        </div>
    </header>
    
    <form method="POST" action="{{ route('Edit') }}" class="login-card-form" enctype="multipart/form-data">
        @csrf
        <div class="form-item">
            
            <input type="text" name="name" id="name" placeholder="Имя"  required>
        </div>
        <div class="form-item">

            <input type="file" name="avatar" placeholder="аватар" required>

        </div>
        <div class="form-item">
            
            <input type="number" name="age" id="age" placeholder="Возраст" required>
        </div>
        
        <div class="form-item">
            
            <input type="text" name="address" id="address" placeholder="Адрес" required>
        </div>
        
        <div class="form-item">
            
            <input type="date" name="birthday" id="birthday" placeholder="Дата рождения" required>
        </div>
        <div class="form-item">
            
            <select name="gender" id="gender" required>
            <option value="">Выберите пол:</option>
            <option value="male">Мужской</option>
            <option value="female">Женский</option>
            <option value="other">Другой</option>
            </select>
        </div>
        <div class="form-item">
            
            <input type="text" name="phone_number" id="phone_number"placeholder="Номер телефона"  required>
        </div>
        <!-- <div class="form-item">
            
            <input type="email" name="email" id="email"placeholder="Электронная почта" required>
        </div> -->
        
        <button type="submit">Отправить</button>
    </form>

</body>

</html>