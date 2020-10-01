<div class="d-flex toggled" id="wrapper">

    <div class="bg-dark border-right" id="sidebar-wrapper">

        <div class="sidebar-heading"> <a class="navbar-brand"
             href="{{ url('/') }}"><strong class='text-white'>Dovahkiin</strong>
            <strong class="text-danger">store</strong></a>
        </div>


        <div class="list-group list-group-flush">

            <button type="button" class="list-group-item list-group-item-action bg-dark text-white"
             data-toggle="modal" data-target="#loginModal">
                Login
              </button>
            @include('inc.modal_login')
        </div>

        <div class="list-group list-group-flush">

            <button type="button" class="list-group-item list-group-item-action bg-dark text-white"
             data-toggle="modal" data-target="#registerModal">
                Register
              </button>
            @include('inc.modal_register')
        </div>
    </div>
