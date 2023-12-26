<script>
    function deleteModal(id) {
        $('#deleteModal').modal('show');

        $('#btnDelete').click(function(e) {
            e.preventDefault();

            $.ajax({
                url: 'users/delete/' + id,
                type: 'DELETE',
                success: function(data) {
                    $('#deleteModal').modal('hide');
                    $('#dtUsers').DataTable().ajax.reload();

                    toastr.success(data.message);
                },
                error: function(data) {
                    console.error(data.responseText);
                }
            });
        });
    }
</script>
