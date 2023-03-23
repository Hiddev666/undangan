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
            <form action="{{ route('pages.generate') }}" method="post">
                @csrf
                <div class="input-username">
                    <input type="text" name="name" id="generating" placeholder="Masukkan nama yang diundang">
                </div>
                <div class="input-generate-link">
                    <input type="submit" class="generate-link" value="Buat Link">
                </div>
            </form>
            <div class="input-password">
                <input type="text" name="generated" id="generated" value="{{ Session::get('generated') }}">
            </div>
            <p id="lorem">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, iure.</p>
            <div class="input-generated-link">
                <a href="
                https://api.whatsapp.com/send?text=Kepada%20Yth.%0a{{ str_replace('-', ' ', Session::get('name')) }}%0a%0aPerkanankan%20kami%20mengundang%20Bapak/Ibu/Saudara/i%20untuk%20menghadiri%20acara%20pernikahan%20kami.%20Untuk%20detail%20undangan%20bisa%20melalui%20link%20dibawah%20ini%20:%20%0a%0a{{ Session::get('generated') }}%0a%0aTerima%20kasih%20atas%20perhatiannya%20kami%20ucapkan%20terima%20kasih
                "><button  class="send-wa">Send to WhatsApp</button></a>
    
                <button class="copy" onclick="myFunction()">
                    <img src="{{ asset('/img/copy.png') }}">
                </button>
            </div>
        </div>  
    </div>
    <div class="ornamen"></div>
    <script src="{{ asset('/js/copy.js') }}"></script>
</body>
</html>