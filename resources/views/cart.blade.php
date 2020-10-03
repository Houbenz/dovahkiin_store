@extends('index')


@section('content')

<div class="row">
    <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">
      <!-- Shopping cart table -->
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th scope="col" class="border-0 bg-light">
                <div class="p-2 px-3 text-uppercase">Product</div>
              </th>
              <th scope="col" class="border-0 bg-light">
                <div class="py-2 text-uppercase">Price</div>
              </th>
              <th scope="col" class="border-0 bg-light">
                <div class="py-2 text-uppercase">Quantity</div>
              </th>
              <th scope="col" class="border-0 bg-light">
                <div class="py-2 text-uppercase">Remove</div>
              </th>
            </tr>
          </thead>
          <tbody>
            @include('cart_element_chekout')
            @include('cart_element_chekout')
            @include('cart_element_chekout')
          </tbody>
        </table>
      </div>

    </div>
</div>
      <div class="container">
        <div class="row">
            <div class="col-9"></div>

            <div class="col-3">
                <button class="btn btn-lg btn-success btn-block">Checkout</button>
            </div>

          </div>

      </div>


@endsection
