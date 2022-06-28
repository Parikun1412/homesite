function viewToProcess(id_order) {
    event.preventDefault();

    $.ajax({
        url: './process/order.php',
        type: 'POST',
        data: {
            viewToProcess: true,
            id_order: id_order,
        },
        success: function (data) {
            $('#switchModal').html($('<div class="modal fade" id="exampleExtraLargeModal" tabindex="-1" aria-hidden="true">' + data + ' <div>').modal());
        }
    })
}