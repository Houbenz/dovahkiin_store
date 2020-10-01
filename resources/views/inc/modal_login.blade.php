<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Enter your credentials</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="login" method="POST">
                @csrf

                <label for="email">Email : </label>
                <div class="input-group input-group-sm mb-3">

                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">@</span>
                    </div>

                    <input type="email" name="email" class="form-control">
                </div>

                <label for="password">Password : </label>
                <div class="input-group input-group-sm mb-3">

                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">
                            <img src="/images/icons/password.svg" alt="password icon"
                                style="width:16px;height:16px">
                        </span>
                    </div>

                    <input type="password" name="password" class="form-control">
                </div>

            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success btn-block">Login</button>
        </div>
      </div>
    </div>
  </div>
