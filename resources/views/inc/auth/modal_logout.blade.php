<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Do you really want to logout ?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-footer">
            <form action="logout" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-secondary">Logout</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </form>
        </div>
      </div>
    </div>
  </div>
