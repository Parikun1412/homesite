function getDetail(id_support) {
    event.preventDefault();
    $.ajax({
        url: './process/customer-support.php',
        type: 'POST',
        data: {
            view: true,
            id_support: id_support,
        },
        success: function (data) {
            $('#switchModal').html($('<div class="modal fade" id="exampleExtraLargeModal" tabindex="-1" aria-hidden="true">' + data + ' <div>').modal());
        }
    })
}