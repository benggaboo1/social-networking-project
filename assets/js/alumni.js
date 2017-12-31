$(document).ready(function() {

    $(document).on('click','.addUserBtn', function() {
        var alumnusId = $(this).closest('tr').find('span.alumnusId').text().trim();
        $("#alumnusIdValue").val(alumnusId);
        $("#add-user-modal").modal("show");
    });
});