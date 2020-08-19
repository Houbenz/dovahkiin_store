@extends('index')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-3">
            <div>
                <img style="width:200px;height:333px; " class="card-img-top"
                src="{{url('/images/download.jpeg')}}" alt="image">
            </div>
        </div>
        <div class="col-6">
            <h4>Title</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                 Officiis pariatur saepe harum quas nobis dolores inventore eaque natus esse voluptate,
                 doloribus facilis aliquam tempora? Laboriosam distinctio
                 illum esse exercitationem perferendis?</p>
        </div>
        <div class="col-3">

        </div>
    </div>
    <div class="row m-5">
        <div class="col-3"></div>
        <div class="col-6">
            <h2 class="inline">Prix: </h2><h2 class="text-danger inline "> 5000.0DZD</h2>
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
