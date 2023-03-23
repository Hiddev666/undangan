<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" maximum-scale=1.0, user-scalable="0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
    @include('layout.popup')
    @yield('popup')

    <div class="giftpopup" id="giftpopup">
        <div class="giftpopupclose">
            <p class="btnpopupclose" id="btnpopupclose">X</p>
        </div>
        <div class="giftpopup-bank">
            <img src="{{ asset('/img/bni.webp') }}" alt="">
        </div>
        <div class="giftpopup-num">
            <p>XXX XXX XXX</p>
        </div>
        <p class="giftpopup-an">a.n Siani Putra Pratama</p>
    </div>

    {{-- MAIN START --}}

    {{-- MAIN TOP START --}}
    <div class="main-top">
        <div class="main-top-title">
            <p class="">The Wedding Of</p>
        </div>
        <div class="main-top-name">
            <h2 class="">Siani & Sianu</h2>
        </div>
        <div class="main-top-date">
            <p class="" >30 Februari 2023</p>
            <audio autoplay loop id="audio">
                <source src="{{ asset('/media/backsong.mp3') }}" type="audio/mpeg">
            </audio>
        </div>
    </div>
    {{-- MAIN TOP END --}}



    {{-- MAIN DALIL START --}}
    <div class="main-dalil">
        <div class="main-dalil-detail">
            <a href="#detail" id="detail"><p class="">Detail</p></a>
        </div>
        <div class="main-dalil-arrow">
            <p class="">v</p>
        </div>
        <div class="main-dalil-flower-wrapper">
            <img data-aos="fade-up" data-aos-duration="2000" src="{{ asset('/img/flower.png') }}" class="main-dalil-flower">
        </div>
        <div class="main-dalil-dalil">
            <p data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">“Dan di antara tanda-tanda kekuasaan Allah ialah diciptakan-Nya untukmu pasangan hidup dari jenismu sendiri supaya kamu merasa tentram di samping-Nya dan dijadikan-Nya rasa kasih sayang di antara kamu. Sesungguhnya yang demikian itu menjadi bukti kekuasaan Allah bagi kaum yang berfikir.“</p>
            <p data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400" id="surah">(QS. Ar- Rum 21)</p>
        </div>
    {{-- MAIN DALIL END --}}

    {{-- MAIN PROFILE START --}}
    <div class="main-profile-top" id="top">
        <div class="main-profile-pic-woman"><img data-aos="flip-down" data-aos-duration="1500" src="{{ asset('/img/profile_women.jpg') }}"></div>
        <div class="main-profile-woman-div">
            <h1 class="main-profile-woman" data-aos="fade-up" data-aos-duration="2000">Siani Istiqomah, S.Kom</h1>
            <p class="main-profile-woman-child" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">Putri Pertama dari Bapak Samsudin dan Ibu Rahma</p>
        </div>
        <div class="main-profile-and"><h1>&</h1></div>
        <div class="main-profile-pic-man"><img  data-aos="flip-down" data-aos-duration="1500" src="{{ asset('/img/profile_man.jpg') }}"></div>
        <div class="main-profile-man-div">
            <h1 class="main-profile-man" data-aos="fade-up" data-aos-duration="2000">Sianu Putra Pratama, M.Pd</h1>
            <p class="main-profile-man-child" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">Putri Pertama dari Bapak Samsudin dan Ibu Rahma</p>
        </div>
    </div>
    <div class="main-profile-bottom">
    </div>
    {{-- MAIN PROFILE END --}}

    {{-- MAIN PLACE START --}}
    <div class="main-place" id="place">

    <div class="main-place-akad">
        <h1 data-aos="fade-right" data-aos-duration="2000">Akad Nikah</h1>
        <p data-aos="fade-right" data-aos-duration="2000" data-aos-delay="200">&nbsp;&nbsp;&nbsp;Jumat, 28 Februari 2023 <br> 
            &nbsp;&nbsp;&nbsp;09.00 WIB <br>
            &nbsp;&nbsp;&nbsp;Rumah Kediaman Mempelai Wanita</p>
        <a href="https://goo.gl/maps/NqXyUhjQVkw5Ny5C9"><button  data-aos="fade-left" data-aos-duration="2000" data-aos-delay="400" class="btn-location">Lihat Lokasi</button></a>
    </div>
    <div class="main-place-gap"><div class="main-place-gap-circle"></div></div>
    <div class="main-place-akad">
        <h1 data-aos="fade-right" data-aos-duration="2000">Resepsi</h1>
        <p data-aos="fade-right" data-aos-duration="2000" data-aos-delay="200">&nbsp;&nbsp;&nbsp;Minggu, 30 Februari 2023 <br> 
            &nbsp;&nbsp;&nbsp;09.00 WIB <br>
            &nbsp;&nbsp;&nbsp;Rumah Kediaman Mempelai Pria</p>
        <a   href="https://goo.gl/maps/NqXyUhjQVkw5Ny5C9"><button class="btn-location" href="https://goo.gl/maps/NqXyUhjQVkw5Ny5C9" data-aos="fade-left" data-aos-duration="2000" data-aos-delay="400">Lihat Lokasi</button></a>
    </div>
    </div>
    {{-- MAIN PLACE END --}}

    {{-- MAIN GIFT START --}}

    <div class="main-gift" id="gift">
        <div class="main-gift-row">
            <img  data-aos="fade-right" data-aos-duration="2000" src="{{ asset('/img/gift.png') }}" alt="gift">
            <div class="main-gift-word" data-aos="fade-right" data-aos-duration="2000">
                <h1>Wedding Gift</h1>
                <p>Bagi keluarga ataupun sahabat yang ingin mengirimkan hadiah, bisa melalui link dibawah ini :</p>
            </div>
            <div class="main-gift-bank">
                <img src="{{ asset('/img/bni.webp') }}" alt="bni">
            </div>
            <div class="main-gift-num">
                <p>XXX XXX XXX</p>
            </div>
            <p class="giftpopup-an">a.n Siani Putra Pratama</p>
        </div>



    </div>

    {{-- MAIN GIFT END --}}

    {{-- MAIN WISH START --}}

    <div class="main-wish">

        <div class="main-wish-top">
            <h1>Tinggalkan Harapan</h1>
            <div class="main-wish-gap"></div>
            <div class="main-wish-form">
                <form action="{{ route('postwish.store') }}" method="POST">
                    @csrf
                    <div class="main-wish-form-name">
                        <div class="main-wish-form-name-wrapper">
                        <label for="name">Nama</label><br>
                        <input type="text" name="nama" class="input-name">
                    </div>
                    </div>
                    <div class="main-wish-form-wish">
                        <div class="main-wish-form-wish-wrapper">
                        <label for="wish">Harapan</label><br>
                        <textarea name="wish" id="wish" cols="30" rows="10" class="input-wish"></textarea>
                    </div>
                    </div>
                    <div class="main-wish-form-submit">
                        <input type="submit" name="submit" class="btn-submit" value="Kirim">
                    </div>
                </form>
            </div>
        </div>

        @forelse ($wish as $w)        
        <div class="wishes">
            <h4>{{ $w->nama }}</h4>
            <p>{{ $w->wish }}</p>
        </div>
        @empty
            
        @endforelse

    </div>

    {{-- MAIN WISH END --}}

    </div>


    {{-- MAIN END --}}


    <script src="{{ asset('/js/popup.js') }}"></script>
    <script>autoplay();</script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>
