
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
        <form class="form-inline my-2 my-lg-0" action="{{ url('products/search') }}" method="POST">
            @csrf
            <input class="form-control mr-sm-2" name="name" type="text" placeholder="Search">
            <button class="btn btn-danger text-white my-2 my-sm-0" type="submit">Go</button>
        </form>
    </div>
</nav>


