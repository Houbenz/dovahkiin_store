@extends('index')

@section('content')


@auth

<div class="alert alert-success alert-dismissible fade show" role="alert">

    You're now logged <strong>{{ Auth::user()->email}}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endauth


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
                        <a href="#">
                      <img class="d-block w-100" src="{{url('/images/image-car-1.jpg')}}" alt="First slide">
                        </a>
                      </div>
                      <div class="carousel-item">
                        <a href="#">
                        <img class="d-block w-100" src="{{url('/images/image-car-2.jpg')}}" alt="Second slide">
                        </a>
                      </div>
                      <div class="carousel-item">
                        <a href="#">
                            <img class="d-block w-100" src="{{url('/images/image-car-3.jpg')}}" alt="Third slide">
                        </a>
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
    </div>

@endsection
