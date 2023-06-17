<><script src="https://code.jquery.com/jquery-3.6.0.min.js"></script><script>
    $(document).ready(function() {$('#registrationForm').submit(function (e) {
        e.preventDefault(); // Prevent form submission


        // Get form data
        var formData = $(this).serialize();

        // Send AJAX request to the PHP file for processing
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: formData,
            success: function (response) {
                // Handle the response from the PHP file
                // For example, show a success message, update UI, etc.
                console.log(response);
            },
            error: function (xhr, status, error) {
                // Handle error if AJAX request fails
                console.error(error);
            }
        });
    })};
    {"}"});
</script></>
