<div class="modal fade" id="createModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content px-3 py-3">
            <div class="d-flex justify-content-between">
                <h5 class="modal-title">Add User</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form method="POST" id="createForm" class="mt-3">
                @csrf

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" autofocus>

                    <span class="name invalid-feedback" role="alert"></span>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email">

                    <span class="email invalid-feedback" role="alert"></span>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password">

                    <span class="password invalid-feedback" role="alert"></span>
                </div>

                <div class="form-group">
                    <label for="passwordConfirmation">Confirm Password</label>
                    <input type="password" class="form-control" id="passwordConfirmation" name="password_confirmation">

                    <span class="password_confirmation invalid-feedback" role="alert"></span>
                </div>

                <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-secondary mr-1" data-dismiss="modal">
                        Cancel
                    </button>
                    <button type="submit" class="btn btn-primary">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
