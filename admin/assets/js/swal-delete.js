jQuery('.swal-dialog').on('click', function (event) {
    event.preventDefault();
    var form = $(this).parent(form);
    swal({
        title: 'Are you sure?',
        text: 'This record and it`s details will be permanantly deleted!',
        icon: 'warning',
        type: "warning",
        showCancelButton: true,
        confirmButtonText: "Yes, Delete it!",
        confirmButtonColor: '#DD6B55',
        cancelButtonText: "No, Cancel!",
        closeOnConfirm: true,
        closeOnCancel: true,
    }, function (value) {
        if (value) {
            form.submit();
        }
    });
});