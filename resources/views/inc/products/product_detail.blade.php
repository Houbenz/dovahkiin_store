@extends('index')

@section('content')

<div class="container-fluid border border-dark p-2">
    <div class="row">
        <div class="col-3">
            <div>
                <img style="width:200px;height:333px; " class="card-img-top"
                src="{{url('/images/download.jpeg')}}" alt="image">
            </div>
        </div>
        <div class="col-6">
            <h4>{{$product->name}}</h4>
            <p>{{$product->description}}</p>

            <h4 >Type : {{$product->type}}</h4>
        </div>
        <div class="col-3">

        </div>
    </div>
    <div class="row m-5">
        <div class="col-3"></div>
        <div class="col-6">
            <h2 class="inline">Prix: </h2><h2 class="text-danger inline "> {{$product->price}}DZD</h2>
        </div>
        <div class="col-3"></div>
    </div>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <button class="btn btn-lg btn-block btn-success">Order</button>
            </div>
            <div class="col-3"></div>
        </div>
</div>

@endsection
