  
  @section('popup')
    {{-- POPUP START --}}
    <div class="popup" id="popup" data-aos="zoom-out" data-aos-duration="1000">
        <div class="popup-dear">
            <p class="">Dear,</p>
        </div>
        <div class="popup-dear-to">
            <h3>{{ $to }}</h3>
        </div>
        <div class="popup-dear-invited">
            <p class="" >You Are Invited!</p>
        </div>
        <div class="popup-title">
            <p class="" data-aos="fade-down" data-aos-duration="2500" data-aos-delay="200">The Wedding Of</p>
        </div>
        <div class="popup-name">
            <h2 class="" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">Siani & Sianu</h2>
        </div>
        <button class="btn-open-invite" id="btnopen">Open Invitation</button>
    </div>
    {{-- POPUP END --}}

    @endsection