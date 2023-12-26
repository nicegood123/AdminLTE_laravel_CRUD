<script>
    function showModal(id) {
        $('#showModal').modal('show');

        $.ajax({
            url: 'users/show/' + id,
            type: 'GET',
            success: function(data) {
                $('#showName').val(data.user.name);
                $('#showEmail').val(data.user.email);
            },
            error: function(data) {
                console.error(data);
            }
        });
    }
</script>
