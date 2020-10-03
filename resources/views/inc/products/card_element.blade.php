<div class="col-4" >
    <div class="card p-2" style="width:350px;">
        <div class="text-center">
            <img style="width:300px;height:400px; " class="card-img-top "
            src="{{url('/images/download.jpeg')}}" alt="image">

        <div class="card-body">
            <h4 class="card-title text-left" style="overflow:hidden;text-overflow: ellipsis;white-space: nowrap;">
            {{$product->name}}</h4>
            <p class="card-text text-left">{{$product->description}}</p>
            <a href="#" class="btn btn-success " onclick="addProduct({{$product->id}})">add to your cart</a>
            <a href="products/{{$product->id}}" class="btn btn-warning">Details</a>
        </div>
    </div>
    </div>
</div>
