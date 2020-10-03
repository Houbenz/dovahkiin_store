
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <button class="btn btn-danger mr-5" id="menu-toggle"><span class="navbar-toggler-icon"></span></button>

    <button class="navbar-toggler d-md-none" type="button"
     data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">

        <span class="navbar-toggler-icon"></span>

    </button>

    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('products')}}">Products</a>
                </li>
        </ul>

        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ">
            <li class="nav-item dropdown mx-auto">
                <a class="nav-link dropdown-toggle" href="#" id="pc-dropdown"
                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   PC</a>
                  <div class="dropdown-menu" aria-labelledby="pc-dropdown">
                    <a class="dropdown-item" href="type?type=pc">PC games</a>
                    <a class="dropdown-item" href="type?type=pc">PC gift cards</a>
                  </div>

            </li>


            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="xbox-dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    XBOX
                  </a>
                  <div class="dropdown-menu" aria-labelledby="xbox-dropdown">
                    <a class="dropdown-item" href="type?type=xbox">XBOX games</a>
                    <a class="dropdown-item" href="type?type=xbox">XBOX gift cards</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="type?type=xbox">XBOX subscriptions</a>
                  </div>

            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="playstation-dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    PLAYSTATION
                  </a>
                  <div class="dropdown-menu" aria-labelledby="playstation-dropdown">
                    <a class="dropdown-item" href="type?type=ps">PS games</a>
                    <a class="dropdown-item" href="type?type=ps">PS gift cards</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="type?type=ps">PS subscriptions</a>
                  </div>

            </li>



        </ul>
        <a href="#" class="nav-item mr-5">
            <img src="/images/icons/cart.svg" width="50" height="50"
            class="d-inline-block align-top rounded p-1" alt="">
            <span class="badge badge-light align-top rounded p-1">0</span>
        </a>
        <form class="form-inline my-2 my-lg-0" action="{{ url('products/search') }}" method="POST">
            @csrf
            <input class="form-control mr-sm-2" name="name" type="text" placeholder="Search">
            <button class="btn btn-danger text-white my-2 my-sm-0" type="submit">Go</button>
        </form>
    </div>
</nav>


