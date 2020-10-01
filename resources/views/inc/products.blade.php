
@extends('index')

@section('content')

    <div class="container">

        @php

            $i=0;
            $num_cards=0;
        @endphp


        @if (count($products ) < 3)

            <div class="row mt-4">
                @foreach ($products as $product)
                    <div class="col-lg-4">

                        @include('inc.card_element')

                    </div>
                @endforeach
            </div>
        @else
                @foreach ($products as $product)

                    @if ($i % 3 == 0)
                        <div class="row mt-4">

                        @include('inc.card_element')

                            @php
                            $num_cards++;
                            @endphp

                    @else
                            @include('inc.card_element')

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

            @endif
            <div class="row pt-4 ">
                <div class="col-5"></div>
                <div class="col-4 pt-4">
                    {{$products->links()}}
                </div>
                <div class="col-5"></div>

            </div>

    </div>



@endsection
