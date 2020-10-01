<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Register page</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="register" method="POST">
                @csrf

                <label for="email">Email : </label>
                <div class="input-group input-group-sm mb-3">

                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">@</span>
                    </div>

                    <input type="email" name="email" class="form-control" required>
                </div>

                <label for="password">Password : </label>
                <div class="input-group input-group-sm mb-3">

                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">
                            <img src="/images/icons/password.svg" alt="password icon"
                                style="width:16px;height:16px">
                        </span>
                    </div>

                    <input type="password" name="password" class="form-control" required>
                </div>

                <label for="password">Confirm password : </label>
                <div class="input-group input-group-sm mb-3">

                    <div class="input-group-prepend">
                        <span class="input-group-text" id="addon-wrapping">
                            <img src="/images/icons/password.svg" alt="password icon"
                                style="width:16px;height:16px">
                        </span>
                    </div>

                    <input type="password" name="confirm_password" class="form-control" required>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger btn-block">Register</button>
                  </div>
            </form>
        </div>

      </div>
    </div>
  </div>
