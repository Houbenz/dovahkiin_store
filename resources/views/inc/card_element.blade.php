<div class="col-lg-4">
    <div class="card" style="width:350px;border:none;">
        <div class="text-center">
            <img style="width:133px;height:200px; " class="card-img-top"
            src="{{url('/images/download.jpeg')}}" alt="image">

        <div class="card-body">
            <h4 class="card-title">{{$product->name}}</h4>
            <p class="card-text">{{$product->description}}</p>
            <a href="#" class="btn btn-success mb-2">add to your cart</a><br/>
            <a href="#" class="btn btn-warning">Details</a>
        </div>
    </div>
    </div>
</div>
