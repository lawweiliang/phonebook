$(document).ready(function() {
    $("#contactTable").DataTable({
        pageLength: 6,
        aaSorting: [],
        numbers: 3
    });

    //Remove error message
    $(".form-group input").focus(function() {
        $(".error_message").hide();
    });
});
