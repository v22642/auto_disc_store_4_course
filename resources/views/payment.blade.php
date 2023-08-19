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
            <p for="name">Имя на карте</p>
            <input type="text" name="name" placeholder="имя" id="name" required>

        </div>
        @php
        $i = 0;
        
        
        @endphp
        <div class="form-item">
            <p for="card_number">Номер карты</p>
            <input type="text" name="card_number" id="card_number" placeholder="Номер карты" class="form-control" required>
        </div>

        <div class="form-item">
            <p for="expiration_date">Срок действия: 14 дней</p>
            
        </div>

        

        <div class="form-item">
            
            @foreach(session('basket') as $post)
            @php
           
            $i += $post[0]->price;
            
            @endphp
            
            @endforeach
            <p for="amount">Сумма оплаты: {{$i}}</p>
            
        </div>
       
        
        
        <button type="submit" class="button"><b>оплатить </b></button>
        

    </form>

</body>

</html>