        @extends('front.layout')
        
        @section('main')


    <!-- END nav -->
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('images/bg_2.jpg')}}');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="{{url('/')}}">Bosh sahifa <i class="ion-ios-arrow-forward"></i></a></span> <span>Biz haqimizda <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-0 bread"></h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 ftco-animate">
            <h2 class="mb-3">So'ngi yillarda qo'lga kiritilgan yutuqlar</h2>
            <p>Tarbiyachi 2018 yilda “Eng faol yosh tarbiyachi” yunalishi buyicha 1 darajali diplom bilan taqdirlangan. Tarbiyalanuvchilar 2016 yil “Istiqlol yulduzlari” kurik tanlovida tuman bosqichida 1-urin, 2017 yil Аzlarova Madina “Yosh ijodkorlar” kurik tanlovida tuman bosqichida 1-o'rin.</p> 
            <p>2018 yil MTT tarbiyalanuvchilari “Istiqlol yulduzlari” tanlovida tuman bosqichi 3-o'rin, 2019yilda tarbiyalanuvchilaridan R. Bekmuxamedova tuman miqyosida MTT tarbiyalanuvchilari oʼrtasida oʼtkazilgan “Yosh ijodkorlar” kurik tanlovida 2-o'rinni qoʼlga kiritgan.</p>
            <h2 class="mb-3">Qo'shimcha ma'lumotlar</h2>
            <p>Faoliyati davomida 3 ta oʼquv-uslubiy qo'llanma 20 dan ziyod elektron dars ishlanmalarini yaratgan.</p>
            <p>2019 yilda uning «Rivojlantiruvchi markazlarni mavzu asosida jixozlash” mavzusidagi oʼquv-uslubiy qoʼllanmasi markazining ilmiy-metodik kengashi tomonidan «Eng samarali metodik material» deb topilib, tuman miqyosida ommalashtirilgan.</p> 
            <p>Maktabgacha taʼlim tashkilotida “Yosh ijodkorlar”, “Rangli kulchalar” toʼgaraklari faoliyatini yoʼlga qoʼyib, bolajonlarda tasviriy sanʼatga bulgan qiziqishlarini va ijodkorliklarini oʼsishiga erishmoqda.</p>          
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>Bizning jamoa</h2>
          </div>
        </div>  
        <div class="row">

          @foreach($teachers as $teacher)
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="staff">
              <div class="text pt-3 px-3 pb-4 text-center">
                <h3>{{$teacher->name}}</h3>
                <span class="position mb-2">{{$teacher->position}}</span>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
  </section>
  
    @endsection  

    

    