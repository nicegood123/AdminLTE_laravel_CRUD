<script>
    function clearErrorMessages() {
        $('input').removeClass('is-invalid');
        $('textarea').removeClass('is-invalid');
    }

    function editModal(id) {
        clearErrorMessages()
        $('#editModal').modal('show');

        // Show user Info
        $.ajax({
            url: 'users/edit/' + id,
            type: 'GET',
            success: function(data) {
                $('#editName').val(data.user.name);
                $('#editEmail').val(data.user.email);
            },
            error: function(data) {
                console.error(data);
            }
        });

        // Update User Info
        $('#editForm').submit(function(e) {
            e.preventDefault();

            clearErrorMessages();

            $.ajax({
                url: 'users/update/' + id,
                type: 'POST',
                data: new FormData(this),
                cache: false,
                contentType: false,
                processData: false,
                success: function(data) {
                    $('#editModal').modal('hide');
                    clearErrorMessages();
                    $('#dtUsers').DataTable().ajax.reload();

                    toastr.success(data.message);
                },
                error: function(data) {
                    console.error(data);

                    $.each(data.responseJSON.errors, function(field_name, error) {
                        $('[name=' + field_name + ']').addClass('is-invalid');
                        $('.' + field_name).text(error);
                    });
                }
            });
        });
    }
</script>
