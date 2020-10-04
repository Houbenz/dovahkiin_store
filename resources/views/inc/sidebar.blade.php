<div class="d-flex toggled" id="wrapper">

    <div class="bg-dark border-right" id="sidebar-wrapper">

        <div class="sidebar-heading"> <a class="navbar-brand"
             href="{{ url('/') }}"><strong class='text-white'>Dovahkiin</strong>
            <strong class="text-danger">store</strong></a>
        </div>

        @guest
            <div class="list-group list-group-flush">

                <button type="button" class="list-group-item list-group-item-action bg-dark text-white"
                data-toggle="modal" data-target="#loginModal">
                    Login
                </button>
                @include('inc.auth.modal_login')
            </div>

            <div class="list-group list-group-flush">

                <button type="button" class="list-group-item list-group-item-action bg-dark text-white"
                data-toggle="modal" data-target="#registerModal">
                    Register
                </button>
                @include('inc.auth.modal_register')
            </div>
        @endguest

        @auth
            <div class="list-group list-group-flush">

                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">Account</a>
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">History</a>
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">Settings</a>

                <button type="button" class="list-group-item list-group-item-action bg-dark text-white"
                data-toggle="modal" data-target="#logoutModal">
                    Logout
                </button>
                @include('inc.auth.modal_logout')

            </div>
        @endauth

    </div>

