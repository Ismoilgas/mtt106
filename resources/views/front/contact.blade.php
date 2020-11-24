        @extends('front.layout')
        
        @section('main')


    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('images/bg_3.jpg')}}');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="{{url('/')}}">Bosh sahifa <i class="ion-ios-arrow-forward"></i></a></span> <span>Aloqa <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-0 bread">Murojaat uchun</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
      <div class="container">
        
        <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="wrapper">
              <div class="row mb-5">
                <div class="col-md-3">
                  <div class="dbox w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                      <span class="fa fa-map-marker"></span>
                    </div>
                    <div class="text">
                      <p><span>Manzil:<br></span>Toshkent shahar, Olmazor tumani, Shifokorlar shaharchasi, Qamarniso ko'chasi, "Jiydali" mahallasi</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="dbox w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                      <span class="fa fa-phone"></span>
                    </div>
                    <div class="text">
                      <p><span>Telefon:<br></span> <a href="tel://1234567920">+99871 2144831</a></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div >
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5988.9897283511955!2d69.189182!3d41.363332!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDHCsDIxJzQ4LjAiTiA2OcKwMTEnMjEuMSJF!5e0!3m2!1sen!2s!4v1595540688235!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                  </div>                  
                </div>
                
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>

    @endsection  


