@extends('index')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
            <h3 class="text-center"><strong class="text-dark">Dovahkiin</strong>
                <strong class="text-danger">Store</strong> </h3>

            </div>
            <div class="col-md-1"></div>
            </div>
    </div>


        <div class="row">

            <div class="col-lg-auto">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                      <img class="d-block w-100" src="{{url('/images/image-car-1.jpg')}}" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="{{url('/images/image-car-2.jpg')}}" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="{{url('/images/image-car-3.jpg')}}" alt="Third slide">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
            </div>

         </div>

         <div class="row">
            @include('inc.card')
         </div>
    </div>

@endsection
