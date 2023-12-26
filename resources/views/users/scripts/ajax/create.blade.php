<script>
    function clearErrorMessages() {
        $('input').removeClass('is-invalid');
        $('textarea').removeClass('is-invalid');
    }

    function createModal() {
        clearErrorMessages()
        $('#createForm').trigger('reset');
        $('#createModal').modal('show');

        $('#createForm').submit(function(e) {
            e.preventDefault();

            clearErrorMessages();
            $.ajax({
                url: 'users/store',
                type: 'POST',
                data: new FormData(this),
                cache: false,
                contentType: false,
                processData: false,
                success: function(data) {
                    $('#createModal').modal('hide');
                    clearErrorMessages();
                    $('#createForm').trigger('reset');

                    $('#dtUsers').DataTable().ajax.reload();

                    toastr.success(data.message);
                },
                error: function(data) {
                    $.each(data.responseJSON.errors, function(field_name, error) {
                        $('[name=' + field_name + ']').addClass('is-invalid');
                        $('.' + field_name).text(error);
                    });
                }
            });
        });


    }
</script>
