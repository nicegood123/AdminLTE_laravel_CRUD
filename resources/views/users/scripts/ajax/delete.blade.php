<script>
    function deleteModal(id) {
        $("#btnDelete").off("click");
        $('#deleteModal').modal('show');

        $('#btnDelete').click(function(e) {
            e.preventDefault();

            $.ajax({
                url: 'users/delete/' + id,
                type: 'DELETE',
                success: function(data) {
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
