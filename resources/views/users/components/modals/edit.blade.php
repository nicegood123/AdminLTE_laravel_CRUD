<div class="modal fade" id="editModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content px-3 py-3">
            <div class="d-flex justify-content-between">
                <h5 class="modal-title">Edit User</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form method="POST" id="editForm" class="mt-3">
                @csrf

                <div class="form-group">
                    <label for="editName">Name</label>
                    <input type="text" class="form-control" id="editName" name="name">

                    <span class="name invalid-feedback" role="alert"></span>
                </div>
                <div class="form-group">
                    <label for="editEmail">Email</label>
                    <input type="email" class="form-control" id="editEmail" name="email">

                    <span class="email invalid-feedback" role="alert"></span>
                </div>
                <div class="form-group">
                    <label for="editPassword">Password</label>
                    <input type="password" class="form-control" id="editPassword" name="password"
                        placeholder="**********">

                    <span class="password invalid-feedback" role="alert"></span>
                </div>

                <div class="form-group">
                    <label for="editPasswordConfirmation">Confirm Password</label>
                    <input type="password" class="form-control" id="editPasswordConfirmation"
                        name="password_confirmation" placeholder="**********">

                    <span class="password_confirmation invalid-feedback" role="alert"></span>
                </div>

                <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-secondary mr-1" data-dismiss="modal">
                        Cancel
                    </button>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i>
                        Save Changes
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
