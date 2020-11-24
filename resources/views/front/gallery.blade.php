        @extends('front.layout')
        
        @section('main')

    <!-- END nav -->
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('images/bg_4.jpg')}}');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="{{url('/')}}">Bosh sahifa <i class="ion-ios-arrow-forward"></i></a></span> <span>Galereya <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-0 bread">Galereya</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row">
          @foreach($photos as $photo)
          <div class="col-md-4 ftco-animate">
            <div class="work mb-4 img d-flex align-items-end" style="background-image: url('{{  Voyager::image($photo->image) }}');">
              <a href="{{asset('storage/'. $photo->image)}}" class="icon image-popup d-flex justify-content-center align-items-center">
                <span class="fa fa-expand"></span>
              </a>
              
            </div>
          </div>
          @endforeach
        </div>
        <div >
          <div class="col text-center">
            <div class="center">
              {{$photos->links()}}
            </div>
          </div>
        </div>
      </div>
    </section>

    
    @endsection  

