
<div class="container-fluid">

    @php

    $i=0;
    $num_cards=0;
    @endphp

    @foreach ($products as $product)

        @if ($i % 3 == 0)
            <div class="row mt-4">
                <div class="col-lg-4">
                    <div class="card" style="width:350px;border:none;">
                        <div class="text-center">
                            <img style="width:133px;height:200px; " class="card-img-top"
                             src="{{url('/images/download.jpeg')}}" alt="image">

                        <div class="card-body">
                            <h4 class="card-title">{{$product}}</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                 Aspernatur odio minus dolorum, autem eius.</p>
                            <a href="#" class="btn btn-success mb-2">add to your cart</a><br/>
                            <a href="#" class="btn btn-warning">Details</a>
                        </div>
                     </div>
                    </div>
                </div>
                @php
                $num_cards++;
                @endphp

        @else
        <div class="col-lg-4">
            <div class="card" style="width:350px;border:none;">
                <div class="text-center">
                    <img style="width:133px;height:200px; " class="card-img-top"
                     src="{{url('/images/download.jpeg')}}" alt="image">

                <div class="card-body">
                    <h4 class="card-title">{{$product}}</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                         Aspernatur odio minus dolorum, autem eius.</p>
                    <a href="#" class="btn btn-success mb-2">add to your cart</a><br/>
                    <a href="#" class="btn btn-warning">Details</a>
                </div>
             </div>
            </div>
        </div>

        @php
            $num_cards++;
            if ($num_cards == 3){
            echo'</div>';
            $num_cards=0;
                }
        @endphp

        @endif

        @php
            $i++;
        @endphp




    @endforeach

</div>
