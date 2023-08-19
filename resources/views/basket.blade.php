<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Личный кабинет</title>
  <link rel="stylesheet" href="css/autoriz.css">
  <link rel="stylesheet" href="css/autoriz-adaptive.css">
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
  <div class="main">
    <div class="profile">

      <h2>Магазин</h2>
      <div class="button-profile"><a class="bun" href="/payment">Оплатить</a></div>
      <div class="button-profile"><a class="bun" href="/basketD">Очистить корзину</a></div>
      


    </div>
    <div class="profile-info">
      <h2>Корзина</h2>
      @if(session('basket'))
      @foreach(session('basket') as $post)
          <div class="div">
              <p>Товар: {{$post[0]->name}}</p>
              <p>Цена: {{$post[0]->price}}₽</p>
              <p>Бренд: {{$post[0]->Brand}}</p>
          </div>
      @endforeach
      @else
          <p>Нет данных</p>
      @endif

      
    </div>
  </div>
</body>

</html>