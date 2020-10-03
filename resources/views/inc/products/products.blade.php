
@extends('index')

@section('content')

<div class="container-fluid">


    <div class="row">

        <div class="col-3 pt-5">
            <ul class="list-group ">
                <li class="list-group-item bg-danger text-white">Category</li>

                <li class="list-group-item">
                    <a class="text-dark" href="#all">
                        All ({{$counts['count']}})</a>
                </li>

                <li class="list-group-item" >
                    <a class="text-dark" href="#pcCategory" data-toggle="collapse"
                    data-target="#pcCategory" aria-expanded="false" aria-controls="pcCategory">
                       Pc ({{$counts['countPc']}})
                    </a>
                    <div class="collapse" id="pcCategory">
                      <div>
                            <ul >
                                <li><a class="text-dark" href="#all_pc">All</a> </li>
                                <li><a class="text-dark" href="#featured_pc">Featured</a></li>
                                <li><a class="text-dark" href="#newest_pc">Newest</a></li>
                            </ul>
                      </div>
                    </div>
                </li>

                <li class="list-group-item">

                    <a class="text-dark" href="#psCategory" data-toggle="collapse"
                    data-target="#psCategory" aria-expanded="false" aria-controls="psCategory">
                    Playstation ({{$counts['countPs']}})
                    </a>
                    <div class="collapse" id="psCategory">
                        <div>
                              <ul >
                                  <li><a class="text-dark" href="#all_pc">All</a> </li>
                                  <li><a class="text-dark" href="#featured_pc">Featured</a></li>
                                  <li><a class="text-dark" href="#newest_pc">Newest</a></li>
                              </ul>
                        </div>
                      </div>
                </li>

                <li class="list-group-item">
                    <a class="text-dark" href="#xboxCategory" data-toggle="collapse"
                    data-target="#xboxCategory" aria-expanded="false" aria-controls="xboxCategory">
                    Xbox ({{$counts['countXbox']}})
                    </a>
                    <div class="collapse" id="xboxCategory">
                        <div>
                              <ul >
                                  <li><a class="text-dark" href="#all_pc">All</a> </li>
                                  <li><a class="text-dark" href="#featured_pc">Featured</a></li>
                                  <li><a class="text-dark" href="#newest_pc">Newest</a></li>
                              </ul>
                        </div>
                      </div>
                </li>
            </ul>
        </div>

            <div class="col-9">
                @php
                    $i=0;
                    $num_cards=0;
                @endphp


                @if (count($products ) <= 3)

                    <div class="row mt-4">
                        @foreach ($products as $product)
                                @include('inc.products.card_element')
                        @endforeach

                    </div>
                @else
                        @foreach ($products as $product)

                            @if ($i % 3 == 0)
                                <div class="row mt-4">

                                @include('inc.products.card_element')

                                @php
                                    $num_cards++;
                                @endphp

                            @else
                                @include('inc.products.card_element')

                                @php
                                    $num_cards++;

                                //when the row finishes and is full
                                    if ($num_cards == 3){
                                        echo'</div>';
                                        $num_cards=0;
                                        }
                                @endphp

                            @endif

                            @php
                                $i++;
                                //when the row finishes and is not full
                                if($i >= count($products))
                                {
                                    echo "</div>";
                                }
                            @endphp

                        @endforeach

                @endif

        </div>

    </div>


</div>
<div class="container">

    <div class="row pt-4 ">
        <div class="col-4"></div>
        <div class="col-4 pt-4">{{$products->links()}}</div>
        <div class="col-4"></div>
    </div>
</div>




@endsection
