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

    <form method="POST" action="{{ route('CreatePost') }}" class="login-card-form" enctype="multipart/form-data">
        @csrf
        <div class="form-item">

            <input type="text" name="name" placeholder="имя" id="name" required>

        </div>
        <div class="form-item">

            <input type="file" name="avatar" placeholder="аватар" required>

        </div>
        <div class="form-item">

            <input type="text" name="price" placeholder="цена" id="name" required>

        </div>
        <div class="form-item">

            <input type="text" name="Brand" placeholder="марка" id="name" required>

        </div>
        <div class="form-item">

            <input type="text" name="Diameter" placeholder="Диаметр" id="name" required>

        </div>
        <div class="form-item">

            <input type="text" name="Width" placeholder="Ширина" id="name" required>

        </div>
        <button type="submit" class="button"><b>Авторизация</b></button>
        <div class="form-item-other">

            <p class="p2">Вы не зарегистрировались? <a href="/registration">Зарегистрироваться</a></p>
        </div>

    </form>

</body>

</html>