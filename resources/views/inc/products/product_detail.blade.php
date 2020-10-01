@extends('index')

@section('content')


<div class="container">

    <div class="row">
        <div class="col-6">

            <h3 class="text-dark text-center">{{$product->name}}</h3>
            <img src={{url('/images/download.jpeg')}} alt="product image">
            <h5>Decsription</h5>
            <p> {{$product->description}}</p>

            <h4>Type</h4>
            <p>{{$product->type}}</p>

            <h6>price</h6>
            <p>{{$product->price}}</p>


        </div>
    </div>
</div>

@endsection
