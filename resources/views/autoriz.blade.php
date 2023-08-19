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
<div class="main">
  <div class="profile">
  
    <img class="ava" src="{{ asset('/storage/'.session('User')->avatar)}}">
    <a href="{{route('Edit')}}" id="button-3" class="button">Редактировать</a>
    
        <form method="POST" action="{{route('logout')}}" class="flex">
          @csrf

          <a href="" id="button-3" class="button" href="{{route('logout')}}" onclick="event.preventDefault(); this.closest('form').submit();">Выйти</a>
        </form>
  </div>
  <div class="profile-info">
    <h2>{{$user->name}}</h2>
    <div class="profile-text-short"><p class="profile-info-1">Возраст:<p class="profile-info-2">{{$data->age}}</p></p></div>
    <div class="profile-text-long"><p class="profile-info-1">Адрес:</p> <p class="profile-info-2">{{$data->address}}</p></div>
    
    <div class="profile-text"><p class="profile-info-1">Дата рождения:</p> <p class="profile-info-2">{{$data->birthday}}</p></div>
    <div class="profile-text"><p class="profile-info-1">Ваш пол:</p> <p class="profile-info-2">{{$data->gender}}</p></div>
    <div class="profile-text"><p class="profile-info-1">Ваш номер телефона:</p> <p class="profile-info-2">{{$data->phone_number}}</p></div>
    <div class="profile-text"><p class="profile-info-1">Почта:</p> <p class="profile-info-2">{{$data->email}}</p></div>
    
  </div>
  
</div>
</body>
</html>