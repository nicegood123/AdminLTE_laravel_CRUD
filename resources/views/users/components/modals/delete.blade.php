<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content px-3 py-3">
            <div class="d-flex justify-content-between">
                <h5 class="modal-title">Are you sure?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <p class="mt-3">
                Do you really want to delete this user? This process cannot be undone.
            </p>

            <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-secondary mr-1">
                    Cancel
                </button>
                <button id="btnDelete" type="button" class="btn btn-danger" data-dismiss="modal">
                    Delete
                </button>
            </div>
        </div>
    </div>
</div>
