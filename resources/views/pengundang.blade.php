<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('/css/pengundang.css') }}">
</head>
<body>
    
    <div class="logo-container">
        <img src="{{ asset('/img/undol.png') }}" alt="" srcset="">
    </div>

    <div class="form-all">
    <div class="form-container">
        <form action="/loginpengundang">
            @csrf
            <div class="input-username">
                <label for="username">Username</label><br>
                <input type="text" name="username" id="username">
            </div>
            <div class="input-password">
                <label for="password">Password</label><br>
                <input type="password" name="password" id="password">
            </div>
            <div class="allert">
                <p>* Login untuk menambahkan undangan. Username dan Password diberikan oleh developer. Jika mengalami masalah saat login, silahkan hubungi developer.</p>
            </div>
            <div class="input-submit">
                <input type="submit" value="Login" name="submit">
            </div>
        </form>
    </div>  
</div>

<div class="ornamen">

</div>

</body>
</html>